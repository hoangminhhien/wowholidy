<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Margin;
use App\Helpers\FileHelper;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Auth;
use DB;
class OrderController extends Controller
{
    public function index(Request $request){
        if(Auth::user() == null){
            return redirect()->route('login');
        }
        $role = Auth::user()->role;
        $request = $request->all();
        $data = [];
        $order = isset($request['order']) ? $request['order'] : '';
        if(isset($request['created_at']) && $request['created_at'] != null){
            $created_at = explode('~', $request['created_at']);
            $data[] = ['created_at', '>=', $created_at[0]];
            $data[] = ['created_at', '<=', $created_at[1]];
        }
        $query = Order::where($data);
        if(isset($request['order']) && $request['order'] != null){
            $order = $request['order'];
            $query = $query->Where(function($query) use ($order){
                $query->orWhere('contactCode', $order)
                    ->orWhere('typeCombo', $order);
            });
        }
        if(isset($request['customer']) && $request['customer'] != null){
            $customer = $request['customer'];
            $query = $query->Where(function($query) use ($customer){
                $query->orWhere('nameCustomer', $customer)
                ->orWhere('phoneCustomer', $customer)
                    ->orWhere('mailCustomer', $customer);
            });
        }
        $count = $query->count();
        $listOrder = $query->orderBy('updated_at', 'desc')->paginate(15);
    	return view('order.index', compact('listOrder', 'request', 'role', 'count'));
    }
    public function create(){
        if(Auth::user() == null){
            return redirect()->route('login');
        }
        $role = Auth::user()->role;
        $email = Auth::user()->email;
    	return view('order._formCreate', compact('role', 'email'));
    }
    public function edit($id){
        $check = Order::find($id);
        $margin = null;
        if($check != null){
            $margin = $check->margin()->first();
        }
        if(Auth::user() == null){
            return redirect()->route('login');
        }
        $role = Auth::user()->role;
        $response = Order::where('id', $id)->first();
        $couthHotel = 0;
        $countOther = 0;
        $coutPayment = 0;
        $countSurcharge = 0;
        if($response->hotel != null){
            foreach($response->hotel as $hotel){
                $couthHotel += (int)$hotel['number'] * (int)$hotel['value'] + (int)$hotel['amountHotel'] * (int)$hotel['surcharge'];
                $countSurcharge += (int)$hotel['amountHotel'] * (int)$hotel['surcharge'];
            }
        }
        if($response->other != null){
            foreach($response->other as $other){
                $countOther += (int)$other['valueOther'];
            }
        }
        if($response->payment != null){
            foreach($response->payment as $payment){
                $coutPayment += (int)$payment['valuePayment'];
            }
        }
        $profit = 1 * 15000;
        // dd($margin, $countOther);
        return view('order._formEdit', compact('response', 'couthHotel', 'countOther', 'coutPayment', 'countSurcharge','profit' , 'role', 'margin'));
    }
    public function store(Request $request){
        if(isset($request['checkin_out'])){
            $check = explode('~', $request['checkin_out']);
            $checkin = $check[0] != null  ? $check[0] : null;
            $checkout = $check[0] != null  ? $check[1] : null;
        }
    	// if($request['payment'] != null){
	    // 	foreach($request['payment'] as $image){
		   //  	$image_url = '';
		   //      if(isset($image['imagePayment'])){
		   //          $image_url = FileHelper::uploadFile($file = $image['imagePayment'], null, $base_path = 'uploads/file_payment');
		   //      }
	    // 	}

    	// }
    	Order::create([
    		'nameSaler'=> $request['nameSaler'],
            'teamSaler'=> $request['teamSaler'],
            'typeCustomer'=> $request['typeCustomer'],
            'typeCombo'=> $request['typeCombo'],
            'contactCode'=> $request['contactCode'],
            'nameCustomer'=> $request['nameCustomer'],
            'phoneCustomer'=> $request['phoneCustomer'],
            'mailCustomer'=> $request['mailCustomer'],
            'country'=> $request['country'],
            'codeCombo'=> $request['codeCombo'],
            'levelOrder'=> $request['levelOrder'],
    		'airLine' => $request['airLine'],
    		'hotel' => $request['hotel'],
    		'other' => $request['other'],
    		'payment' => $request['payment'],
    		'countValue' => $request['countValue'],
            'airlineStatus' => (int)$request['airlineStatus'],
            'hotelStatus' => (int)$request['hotelStatus'],
            'otherStatus' => (int)$request['otherStatus'],
            'listCustomer' => $request['listCustomer'],
            'ctkm' => $request['ctkm'],
            'adult'=> $request['adult'],
            'children'=> $request['children'],
            'baby'=> $request['baby'],
            'checkin'=> $checkin,
            'checkout' => $checkout
    	]);
    	return response()->json(['httpCode'=>200,'message'=>'Tạo thành công']);
    }
    public function update(Request $request){
        // dd($request->all());
        $role = Auth::user()->role;
        $listCustomer = [];
        $id = $request['id'];
        if(isset($request['listCustomer'])){
            foreach($request['listCustomer'] as $list){
                if($list != null){
                    array_push($listCustomer, $list);
                }
            }
        }
        if(isset($request['checkin_out'])){
            $check = explode('~', $request['checkin_out']);
            $checkin = $check[0] != null  ? $check[0] : null;
            $checkout = $check[0] != null  ? $check[1] : null;
        }
        DB::beginTransaction();
        try {
            if($role == 3 || $role == 4 || $role == 5 || $role == 6){
                $check = Margin::where('id_order', $id)->first();
                if($check == null){
                    // dd($request['_marginHotel'], $request['_marginOther']);
                    Margin::create([
                        'id_order' => $id,
                        'hotel'=> $request['_marginHotel'],
                        'other'=> $request['_marginOther'],
                        'countAirline' => $request['countAirline'],
                        'countHotel' => $request['countHotel'],
                        'countOther' => $request['countOther'],
                        'count' => $request['count'],
                    ]);
                }else{
                    $update = Margin::where('id_order', $id)->first();
                    $update->hotel = $request['_marginHotel'];
                    $update->other = $request['_marginOther'];
                    $update->countAirline = $request['countAirline'];
                    $update->countHotel = $request['countHotel'];
                    $update->countOther = $request['countOther'];
                    $update->count = $request['count'];
                    $update->save();
                }
            }
            $update = Order::find($id)->update([
                'nameSaler' => $request['nameSaler'],
                'teamSaler' => $request['teamSaler'],
                'typeCustomer' => $request['typeCustomer'],
                'typeCombo' => $request['typeCombo'],
                'contactCode' => $request['contactCode'],
                'nameCustomer' => $request['nameCustomer'],
                'phoneCustomer' => $request['phoneCustomer'],
                'mailCustomer' => $request['mailCustomer'],
                'country' => $request['country'],
                'codeCombo'=> $request['codeCombo'],
                'levelOrder'=> $request['levelOrder'],
                'airLine' => $request['airLine'],
                'hotel' => $request['hotel'],
                'other' => $request['other'],
                'payment' => $request['payment'],
                'countValue' => $request['countValue'],
                'airlineStatus' => (int)$request['airlineStatus'],
                'hotelStatus' => (int)$request['hotelStatus'],
                'otherStatus' => (int)$request['otherStatus'],
                'statusAir' => (int)$request['statusAir'],
                'statusHotel' => (int)$request['statusHotel'],
                'statusOther' => (int)$request['statusOther'],
                'listCustomer' => $listCustomer,
                'ctkm' => $request['ctkm'],
                'adult'=> $request['adult'],
                'children'=> $request['children'],
                'baby'=> $request['baby'],
                'checkin'=> $checkin,
                'checkout' => $checkout,
                'service'=> $request['service'],
                'noteAdminAir'=> $request['noteAdminAir'],
                'codeHotel'=> $request['codeHotel'],
                'noteHotelSale' => $request['noteHotelSale'],
                'noteAdminHotel' => $request['noteAdminHotel'],
                'noteOtherSale' => $request['noteOtherSale'],
                'noteAdminOther' => $request['noteAdminOther'],
            ]);
            // all good
            DB::commit();
            return response()->json(['httpCode'=>200, 'message'=>'Cập nhật thành công']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['httpCode'=>500, 'message'=>'Đã có lỗi xảy ra']);
        }
    }
    public function read(Request $request){
        $response = Order::all();
        $count = $response->count();
        $rows = $response->toArray();
        return [
            "count" => $count,
            "rows" => $rows,
        ];
    }
    public function export(Request $request){
        $results = $this->read($request);
        dd($results);
        $count = $results['count'];
        if ($count > 5000) {
            return redirect()->back()->with('info', 'Không được export quá 5000 bản ghi!');
        }
        $limit = 30;
        $pages = intval($count / $limit) + 1;
        $response = new StreamedResponse(function () use ($pages, $request, $limit) {

            // Open output stream
            $handle = fopen('php://output', 'w');
            //add BOM to fix UTF-8 in Excel
            fputs($handle, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
            // Add CSV headers
            fputcsv($handle, [
                'ID',
                'Tên sale',
                'Team',
                'Tên khách hàng',
                'Số điện thoại',
                'Email',
                'Mã contact',
                'Level',
                'Loại combo',
                'Chương trình khuyễn mãi',
                'Nguồn khách hàng',
                'Mã máy bay',
                'Ngày bay đi',
                'Ngày bay về',
                'Tiền vé',
                'Tổng hóa đơn',
                'Ngày ngày tạo',
                'Ngày sửa gần nhất'
            ]);
            for ($i = 0; $i < $pages; $i++) {
                $options = [
                    'limit' => $limit,
                    'offset' => $i * $limit,
                ];
                $query = $request->merge($options);
                $data = $this->read($query);
                if (isset($data['rows'])) {
                    foreach ($data ['rows'] as $row) {
                        // Add a new row with data
                        fputcsv($handle, [
                            $row['id'],
                            $row['nameSaler'],
                            $row['teamSaler'],
                            $row['nameCustomer'],
                            $row['phoneCustomer'],
                            $row['mailCustomer'],
                            $row['contactCode'],
                            $row['levelOrder'],
                            $row['codeCombo'],
                            $row['ctkm'],
                            $row['typeCustomer'],
                            $row['airLine'] != null ? $row['airLine']['airCode']: '',
                            $row['airLine'] != null ? $row['airLine']['fromDate']: '',
                            $row['airLine'] != null ? $row['airLine']['toDate']: '',
                            $row['airLine'] != null ? $row['airLine']['airValue']: '',
                            $row['countValue'],
                            $row['created_at'],
                            $row['updated_at'],
                        ]);
                    }
                }
            }
            // Close the output stream
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="export.csv"',
        ]);
        return $response;
    }
}
