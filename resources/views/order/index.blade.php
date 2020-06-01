<!DOCTYPE html>
<html>
<head>
	<title>wowholiday</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font-size: 12px;
		}
		button{
			font-size: 12px;
		}
		.custom-select{
			font-size: 12px;
		}
		input[type="text"] {
		    font-size:12px;
		}
		#wrapper{
			top: 0px;
			left: 0px;
			width: 1440px;
			height: 1638px;
			background: #FAFAFA 0% 0% no-repeat padding-box;
			opacity: 1;
			padding-left: 194px;
			padding-top: 32px;
			padding-right: 165px;
		}
		.header{
			top: 111px;
			left: 165px;
			width: 850px;
			height: auto;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 1px 2px #00000014;
			border: 1px solid #F0F0F0;
			border-radius: 4px;
			opacity: 1;
		}
		.title{
			width: 451px;
			height: 39px;
			font-size: 32px;
		}
		.body{
			top: 111px;
			height: auto;
			width: 1340px;
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 1px 2px #00000014;
			border: 1px solid #F0F0F0;
			border-radius: 4px;
			opacity: 1;
		}
		.btn-search{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 150px;
			height: 34px;
			border-radius: 4px;
			opacity: 1;
		}
		#form_search form{
			padding: 10px
		}
		table thead{
			background-color: #f8e7b4;
			font-size: 11px;
			text-align: center;
		}
		.tblTitle{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<!-- <div class="header"> -->
			<label class="title">Quản trị đơn hàng</label>
			<div id="form_search" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
				<form action="{!! route('order.list') !!}">
					<div class="row">
						<div class="col-3">
							<label>Kiểu ngày</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select">
								  	<option value="created_at">Ngày tạo form</option>
								  	<option value="updated_at">Ngày chăm sóc gần nhất</option>
								  	<option value="start_date">Ngày khởi hành</option>
								</select>
							</div>
						</div>
						<div class="col-3">
							<label>Khoảng ngày</label>
							<div class="input-group mb-3">
				  				<input type="text" name="created_at" class="form-control" value="{!! isset($request['created_at']) ? $request['created_at'] : '' !!}">
								<div class="input-group-append">
								    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-3">
							<label>Tìm kiếm đơn hàng</label>
							<div class="input-group mb-3">
				  				<input type="text" name="order" class="form-control" placeholder="Mã combo, Mã contact,.." value="{!! isset($request['order']) ? $request['order'] : '' !!}">
								<div class="input-group-append">
								    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-3">
							<label>Tìm kiếm khách hàng</label>
							<div class="input-group mb-3">
				  				<input type="text" name="customer" class="form-control" placeholder="Số điện thoại, email..." value="{!! isset($request['customer']) ? $request['customer'] : '' !!}">
								<div class="input-group-append">
								    <span class="input-group-text" id="basic-addon2"><i class="fa fa-user-circle" aria-hidden="true"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label>Level đơn hàng</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select" name="levelOrder">
								  	<option value="" selected>--Tất cả--</option>
								  	<option value="L3">L3</option>
								  	<option value="L4">L4</option>
								  	<option value="L5">L5</option>
								  	<option value="L3B">L3B</option>
								  	<option value="L4B">L4B</option>
								  	<option value="L5B">L5B</option>
								</select>
							</div>
						</div>
						<div class="col-3">
							<label>Chương trình khuyến mãi</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select">
								  	<option selected>--Tất cả--</option>
								</select>
							</div>
						</div>
						<div class="col-3">
							<label>Dịch vụ khác</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select">
								  	<option selected>--Tất cả--</option>
								</select>
							</div>
						</div>
						<div class="col-3">
							<label>Trạng thái xử lý đơn</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select">
								  	<option selected>--Tất cả--</option>
								  	<option >Không xử lý</option>
								  	<option >Đang xử lý</option>
								  	<option >Đã xử lý</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label>Loại đơn hàng</label>
							<div class="input-group mb-3">
				  				<select class="browser-default custom-select" name="especiallyOrder">
				  					<option value="especially">Tất cả</option>
								  	<option value="especially">Đơn hàng đặc biệt</option>
								  	<option value="especially">Đơn hàng thường</option>
								</select>
							</div>
						</div>
						<div class="col-3">
						</div>
						<div class="col-3">
						</div>
						<div class="col-3">
							<div class="input-group mb-3">
								<button class="btn btn-warning" style="margin-top: 25px;margin-left: 140px; width: 100px; font-size: 12px; height: 31px">Tìm kiếm</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		<!-- </div> -->
		<div class="row">
			<div class="col-4">
				<h5>Danh sách</h5>
				<div>Kết quả tìm kiếm được: {!! $count !!}</div>
				<br>
			</div>
			<div class="col-4">
			</div>
			<div class="col-4">
				<!-- <div class="row"> -->
					<!-- <div class="col-6"> -->
						<div style="float: right;">
							@if($role == 2 || $role == 3 || $role == 4 || $role == 5 || $role == 6)
							<button type="button" style="font-size: 12px;" onclick="window.location = '{{route('order.export')}}'" class="btn bg-success btn-sm mr-2"><i class="icon-add-to-list"></i>
			                Xuất excel
			            	</button>
			            	@endif
						<!-- </div> -->
						<!-- <div class="col-6"> -->
			            	@if($role == 1 || $role == 2)
			            	<a href="{!! route('order.create') !!}">
			                	<button type="button" style="font-size: 12px" class="btn btn-warning btn-sm mr-2">
			                    <i class="fa fa-plus" aria-hidden="true"></i>  Đơn hàng mới
			                	</button>
			            	</a>
			            	@endif
						</div>
					<!-- </div> -->
				<!-- </div> -->
			</div>
		</div>
		<div class="body">
			<table id="tblTable" class="table table-xs data-table table-bordered">
                <thead>
                <tr>
                    <th>Ngày</th>
                    <th style="width: 15%;">Mã/Loại</th>
                    <th style="width: 10%">Thông tin sale</th>
                    <th>Thông tin người đại diện</th>
                    <th>Giá trị đơn hàng</th>
                    <th>Đã thanh toán</th>
                    <th style="width: 15%">Vé máy bay</th>
                    <th style="width: 15%">Phòng khách sạn</th>
                    <th style="width: 10%">Dịch vụ khác</th>
                    <th>Vận hành</th>
                    <th>Trạng thái</th>
                    <th>Tác vụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listOrder as $key => $order)
	            	<tr>
	            		<td>
	            			<lable class="tblTitle">Ngày tạo:</lable> {{ date('d/m/Y', strtotime($order->created_at))}}<br>
	            			<lable class="tblTitle">Sửa gần nhất:</lable> {{date('d/m/Y', strtotime($order->updated_at))}}
	            		</td>
	            		<td>
	            			<lable class="tblTitle">Mã contact:</lable>
	            				{!! $order->contactCode !!}<br>
	            			<lable class="tblTitle">Mã combo: </lable>
	            			{!! $order->codeCombo !!}<br>
	            			<lable class="tblTitle">Loại combo:</lable>
	            				{!! $order->typeCombo !!}<br>
	            			<lable class="tblTitle">Level:</lable>
	            				 {!! $order->levelOrder !!}<br>
	            			<lable class="tblTitle">CTKM: </lable>
	            				{!! $order->ctkm !!}<br>
	            		</td>
	            		<td>
	            			<lable class="tblTitle">Sale:</lable>
	            				{!! $order->nameSaler !!}<br>
	            			<lable class="tblTitle">Team:</lable>
	            				{!! $order->teamSaler !!}<br>
	            			<lable class="tblTitle">Loại khách hàng:</lable>
	            				{!! $order->typeCustomer !!}
	            		</td>
	            		<td>
	            			{!! $order->nameCustomer !!}<br>
	            			<lable class="tblTitle">SĐT: </lable>{!! $order->phoneCustomer !!}<br>
	            			<lable class="tblTitle">Email: </lable>{!! $order->mailCustomer !!}<br>
	            		</td>
	            		<td>
	            			<div class="common-currency">
	            			{!! $order->countValue !!}
	            			</div>
	            		</td>
	            		<td>
	            			<div class="common-currency">
		            			@php
		            				$countValuePay = 0;
		            			@endphp
		            			@if($order->payment != null)
		            				@foreach($order->payment as $payment)
		            				@if(isset($payment['codeFT']) && $payment['codeFT'] != null)
		            					{!! $countValuePay += $payment['valuePayment'] !!}
		            				@endif
		            				@endforeach
		            			@endif
	            			</div>
	            		</td>
	            		<td>
	            			<lable class="tblTitle">Mã: </lable>@if($order->airLine != null)
	            				{!! $order->airLine['airCode'] !!}
	            			@endif<br>
	            			<lable class="tblTitle">Ngày đi: </lable>@if($order->airLine != null)
	            			{{ date('d/m/Y' , strtotime($order->airLine['fromDate']))}}
	            			@endif<br>
	            			<lable class="tblTitle">Ngày về:</lable> @if($order->airLine != null)
	            			{{ date('d/m/Y' , strtotime($order->airLine['toDate']))}}
	            			@endif<br>
	            			<lable class="tblTitle"> Tổng tiền:</lable> @if($order->airLine != null)
	            			<label class="common-currency">
	            				{!! $order->airLine['airValue'] !!}
	            			</label>
	            			@endif<br>
	            		</td>
	            		<td>
	            			@if($order->hotel != null)
	            				@foreach($order->hotel as $hotel)
	            				<lable class="tblTitle">Tên khách sạn :</lable> {!!  $hotel['name'] !!}<br>
	            				<lable class="tblTitle">Check in: </lable>{!!  $order['checkin'] !!}<br>
	            				<lable class="tblTitle">Check out: </lable>{!!  $order['checkout'] !!}<br>
	            				<lable class="tblTitle">Tổng tiền : </lable>
	            				<lable class="common-currency">
	            				{!!  $hotel['value'] !!}<br>
	            				</lable>
	            				@endforeach<br>
	            			@endif
	            		</td>
	            		<td>
	            			@if($order->other != null)
	            				@foreach($order->other as $other)
	            				<lable class="tblTitle">Dịch vụ: </lable>{!!  $other['nameOther'] !!}<br>
	            				<lable class="tblTitle">Tổng tiền: </lable>
	            				<lable class="common-currency">
	            				{!!  $other['valueOther'] !!}<br>
	            				</lable>
	            				@endforeach<br>
	            			@endif
	            		</td>
	            		<td>
	            			<!-- Sales  -->
	            			@if($order->payment != null)
	            				@php
	            					$check = 0;
	            				@endphp
	            				@foreach($order->payment as $key => $payments)
		            				@if($payments['confirm'] != 0)
			            				@php
			            					$check ++;
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($order->statusAir == 0 || $order->statusHotel == 0 || $order->statusOther == 0 || $check > 0)
		            			<span class="badge badge-danger">Sales</span>
		            			@elseif($order->statusAir == 2 || $order->statusHotel == 2 || $order->statusOther == 2)
		            			<span class="badge badge-success">Sales</span>
		            			@else
		            			<span class="badge badge-secondary">Sales</span>
		            			@endif
		            			<br>
		            		@else
		            			<span class="badge badge-secondary">Sales</span>
	            			@endif
	            			@if($order->payment == null)
	            			<span class="badge badge-secondary">Kế toán</span>
	            			@else
	            				@php
	            					$check = 0;
	            					$count = 0;
	            				@endphp
		            			@foreach($order->payment as $key => $payments)
		            				@php
		            					$count += $payments['valuePayment'];
		            				@endphp
		            				@if($payments['codeFT'] != null)
			            				@php
			            					$check += $payments['valuePayment'];
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($check == $count)
		            				<span class="badge badge-success">Kế toán</span>
		            			@elseif($check < $count)
		            				<span class="badge badge-danger">Kế toán</span>
		            			@else
		            				<span class="badge badge-secondary">Kế toán</span>
		            			@endif
	            			@endif
	            			<br>
	            			@if($order->payment != null)
	            				@php
	            					$check = 0;
	            					$count = 0;
	            				@endphp
		            			@foreach($order->payment as $key => $payments)
		            				@php
		            					$count += $payments['valuePayment'];
		            				@endphp
		            				@if($payments['codeFT'] != null)
			            				@php
			            					$check += $payments['valuePayment'];
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($check == $count && $order->airlineStatus == 1 && $order->statusAir != 2)
		            				<span class="badge badge-danger">VH vé</span>
		            			@elseif($order->statusAir == 2 )
		            				<span class="badge badge-success">VH vé</span>
		            			@elseif($check < $count && $order->airlineStatus == 0)
		            				<span class="badge badge-secondary">VH vé</span>
		            			@else
		            				<span class="badge badge-secondary">VH vé</span>
		            			@endif
		            		@elseif($order->airLine == null)
		            			<span class="badge badge-secondary">VH vé</span>
		            		@elseif($order->payment == null)
		            			<span class="badge badge-secondary">VH vé</span>
		            		@endif
		            		<br>
	            			@if($order->payment != null)
	            				@php
	            					$check = 0;
	            					$count = 0;
	            				@endphp
		            			@foreach($order->payment as $key => $payments)
		            				@php
		            					$count += $payments['valuePayment'];
		            				@endphp
		            				@if($payments['codeFT'] != null)
			            				@php
			            					$check += $payments['valuePayment'];
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($check == $count && $order->hotelStatus == 1 && $order->statusHotel != 2)
		            				<span class="badge badge-danger">VH phòng</span>
		            			@elseif($order->statusHotel == 2 )
		            				<span class="badge badge-success">VH phòng</span>
		            			@elseif($check < $count && $order->hotelStatus == 0)
		            				<span class="badge badge-secondary">VH phòng</span>
		            			@else
		            				<span class="badge badge-secondary">VH phòng</span>
		            			@endif
		            		@elseif($order->hotel == null)
		            			<span class="badge badge-secondary">VH phòng</span>
		            		@elseif($order->payment == null)
		            			<span class="badge badge-secondary">VH phòng</span>
		            		@endif
		            		<br>
	            			@if($order->payment != null)
	            				@php
	            					$check = 0;
	            					$count = 0;
	            				@endphp
		            			@foreach($order->payment as $key => $payments)
		            				@php
		            					$count += $payments['valuePayment'];
		            				@endphp
		            				@if($payments['codeFT'] != null)
			            				@php
			            					$check += $payments['valuePayment'];
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($check == $count && $order->otherStatus == 1 && $order->statusOther != 2)
		            				<span class="badge badge-danger">VH DV khác</span>
		            			@elseif($order->statusOther == 2 )
		            				<span class="badge badge-success">VH DV khác</span>
		            			@elseif($check < $count && $order->otherStatus == 0)
		            				<span class="badge badge-secondary">VH DV khác</span>
		            			@else
		            				<span class="badge badge-secondary">VH DV khác</span>
		            			@endif
		            		@elseif($order->other == null)
		            			<span class="badge badge-secondary">VH DV khác</span>
		            		@elseif($order->payment == null)
		            			<span class="badge badge-secondary">VH DV khác</span>
		            		@endif
		            		<br>
	            		</td>
	            		<td>
	            			@if($order->payment != null)
		            			@php
	            					$check = 0;
	            					$count = 0;
	            				@endphp
		            			@foreach($order->payment as $key => $payments)
		            				@php
		            					$count += $payments['valuePayment'];
		            				@endphp
		            				@if($payments['codeFT'] != null)
			            				@php
			            					$check += $payments['valuePayment'];
			            				@endphp
		            				@endif
		            			@endforeach
		            			@if($check < $count || $order->statusAir != 2 || $order->statusHotel != 2 || $order->statusOther != 2)
		            				Đang xử lý
		            			@elseif($order->statusAir == 2 && $order->statusHotel == 2 && $order->statusOther == 2)
		            				Đã xử lý
		            			@endif
		            		@else
		            			@if($order->statusAir == 0 && $order->statusHotel == 0 && $order->statusOther == 0)
		            				Không xử lý
		            			@elseif($order->statusAir == 1 || $order->statusHotel == 1 || $order->statusOther == 1)
		            				Đang xử lý
		            			@elseif($order->statusAir == 2 && $order->statusHotel == 2 && $order->statusOther == 2)
		            				Đã xử lý
		            			@endif
	            			@endif

	            		</td>
	            		<td>
	            			<a href="{!! route('order.edit', $order->id) !!}">
	            				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
	            			</a>
	            		</td>
	            	</tr>
            	@endforeach
                </tbody>
            </table>
            <div style="margin-left: 600px;">
                {!! $listOrder->appends(request()->input())->links() !!}
            </div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>
<script src="{{ asset('js/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
	$(function() {

  	$('input[name="created_at"]').daterangepicker({
      	autoUpdateInput: false,
      	locale: {
          	cancelLabel: 'Clear'
      	}
  	});

  	$('input[name="created_at"]').on('apply.daterangepicker', function(ev, picker) {
      	$(this).val(picker.startDate.format('YYYY-MM-DD') + '~' + picker.endDate.format('YYYY-MM-DD'));
  	});
  	$('input[name="created_at"]').on('cancel.daterangepicker', function(ev, picker) {
      	$(this).val('');
  	});
  	$(document).find('.common-currency').inputmask({
        'alias': 'decimal',
        'groupSeparator': ',',
        'placeholder': "0",
        'autoGroup': true,
        'removeMaskOnSubmit': true,
        'autoUnmask': true,
        'suffix': ' ₫',
        'allowMinus': false
    });
});
</script>