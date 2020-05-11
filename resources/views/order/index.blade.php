<!DOCTYPE html>
<html>
<head>
	<title>wowholiday</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<style type="text/css">
		body{
			font-size: 12px;
		}
		input[type="text"] {
		    font-size:12px;
		}
		select option{
		    font-size: 12px;
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
			background: #FFFFFF 0% 0% no-repeat padding-box;
			box-shadow: 0px 1px 2px #00000014;
			border: 1px solid #F0F0F0;
			border-radius: 4px;
			opacity: 1;
		}
		.btn-search{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 120px;
			height: 40px;
			border-radius: 4px;
			opacity: 1;
		}
		hr{
			background-color: orange
		}
		table thead{
			background-color: #f8e7b4;
			font-size: 14px
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<!-- <div class="header"> -->
			<label class="title">Quản trị đơn hàng</label>
			<hr>
			<form action="{!! route('order.list') !!}">
				<div class="row">
					<div class="col-3">
						<label>Ngày tạo form</label>
						<div class="input-group mb-3">
			  				<input type="text" name="created_at" class="form-control" >
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
							    <span class="input-group-text" id="basic-addon2"><i class="fa fa-phone" aria-hidden="true"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="col-3">
						<label>Level đơn hàng</label>
						<div class="input-group mb-3">
			  				<select class="browser-default custom-select">
							  	<option value="" selected>--Tất cả--</option>
							  	<option value="L6">L6</option>
							  	<option value="L7">L7</option>
							  	<option value="L8">L8</option>
							  	<option value="L6B">L6B</option>
							  	<option value="L7B">L7B</option>
							  	<option value="L8B">L8B</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
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
					<div class="col-3">
						<div class="input-group mb-3">
							<button class="btn-search" style="margin-top: 30px;">Tìm kiếm</button>
							<button type="button" class="btn btn-secondary" onclick="window.location='{{route('order.list')}}'" style="margin-top: 30px;"><i class="icon-reset"></i>Làm mới</button>
						</div>
					</div>
				</div>
			</form>
		<!-- </div> -->
		<div class="body">
			<div class="row">
				<div class="col-4">
					<label>Danh sách</label>
				</div>
				<div class="col-4">
				</div>
				<div class="col-4">
					<button type="button" style="margin: 2px" onclick="window.location = '{{route('order.export')}}'" class="btn bg-success btn-sm mr-2"><i class="icon-add-to-list"></i>
                    Xuất excel
                	</button>
                	<a href="{!! route('order.create') !!}">
	                	<button type="button" style="margin: 2px" class="btn bg-primary btn-sm mr-2">
	                    <i class="fa fa-plus" aria-hidden="true"></i>Đơn hàng mới
	                	</button>
                	</a>
				</div>
			</div>
			<table id="tblDataTable" class="table table-xs data-table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Ngày</th>
                    <th>Mã/Loại</th>
                    <th>Thông tin sale</th>
                    <th>Thông tin người đại diện</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Số tiền đã thanh toán</th>
                    <th>Vé máy bay</th>
                    <th>Phòng khách sạn</th>
                    <th>Dịch vụ khác</th>
                    <th>Vận hành</th>
                    <th>Trạng thái</th>
                    <th>Tác vụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listOrder as $key => $order)
	            	<tr>
	            		<td>{{ ++$key }}</td>
	            		<td>
	            			Ngày tạo: {{$order->created_at}}<br>
	            			Ngày Sửa gần nhất: {{$order->updated_at}}
	            		</td>
	            		<td>
	            			Mã contact:
	            				{!! $order->contactCode !!}<br>
	            			Mã combo:
	            				{!! $order->typeCombo !!}<br>
	            		</td>
	            		<td>
	            			Sale:
	            				{!! $order->nameSaler !!}<br>
	            			Team:
	            				{!! $order->teamSaler !!}<br>
	            			Loại khách hàng:
	            				{!! $order->typeCustomer !!}
	            		</td>
	            		<td>
	            			Họ tên: {!! $order->nameCustomer !!}<br>
	            			SĐT: {!! $order->phoneCustomer !!}<br>
	            			Email: {!! $order->mailCustomer !!}<br>
	            		</td>
	            		<td>
	            			{!! $order->countValue !!}
	            		</td>
	            		<td>
	            			@if($order->payment != null)
	            				@foreach($order->payment as $payment)
	            				Lần {!!  $payment['number'] !!}: {!!  $payment['valuePayment'] !!}<br>
	            				@endforeach
	            			@endif
	            		</td>
	            		<td>
	            			Mã:  @if($order->airLine != null)
	            				{!! $order->airLine['airCode'] !!}
	            			@endif<br>
	            			Ngày đi: @if($order->airLine != null)
	            				{!! $order->airLine['fromDate'] !!}
	            			@endif<br>
	            			Ngày về: @if($order->airLine != null)
	            				{!! $order->airLine['toDate'] !!}
	            			@endif<br>
	            			Tổng tiền: @if($order->airLine != null)
	            				{!! $order->airLine['airValue'] !!}
	            			@endif<br>
	            		</td>
	            		<td>
	            			@if($order->hotel != null)
	            				@foreach($order->hotel as $hotel)
	            				Check in: {!!  $hotel['date'] !!}<br>
	            				Tên khách sạn : {!!  $hotel['name'] !!}<br>
	            				Tổng tiền : {!!  $hotel['value'] !!}<br>
	            				@endforeach
	            			@endif
	            		</td>
	            		<td>
	            			@if($order->other != null)
	            				@foreach($order->other as $other)
	            				Dịch vụ: {!!  $other['nameOther'] !!}<br>
	            				Tổng tiền: {!!  $other['valueOther'] !!}<br>
	            				@endforeach
	            			@endif
	            		</td>
	            		<td></td>
	            		<td></td>
	            		<td>
	            			<a href="{!! route('order.edit', $order->id) !!}">
	            				<i class="fa fa-eye" aria-hidden="true"></i>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
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
      	$(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
  	});
  	$('input[name="created_at"]').on('cancel.daterangepicker', function(ev, picker) {
      	$(this).val('');
  	});

});
</script>