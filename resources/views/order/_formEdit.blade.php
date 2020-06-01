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
		input[type="date"] {
		    font-size:12px;
		}
		.custom-select{
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
		.title{
			width: 451px;
			height: 39px;
			font-size: 25px;
			font-weight: bold;
		}
		strong{
			color: red
		}
		.btn-create-order{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 150px;
			height: 36;
			border-radius: 4px;
			opacity: 1;
		}
		.btn-add{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 120px;
			height: 36;
			border-radius: 4px;
			opacity: 1;
		}
		#form_border{
			padding: 10px
		}
		.error{
			color: red
		}
		table thead{
			font-size: 11px
		}
	</style>
</head>
<body>
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<form method="POST" enctype="multipart/form-data" id="formOrder">
		@csrf
	<div id="wrapper">
			<label class="title">Form cập nhật thông tin đơn hàng</label>
		<div class="row form-group">
			<div class="col-3"></div>
			<div class="col-3">Tên sale</div>
			<div class="col-3">Team</div>
			<div class="col-3">Loại khách hàng</div>
		</div>
		<div class="row form-group">
			<div class="col-3">
				<label style="font-size:14px; font-weight: bolder ">Thông tin chung</label></div>
			<div class="col-3">
				<!-- <select class="browser-default custom-select">
				  	<option selected>Nguyễn Văn A</option>
				  	<option value="1">Nguyễn Văn B</option>
				  	<option value="2">Nguyễn Văn C</option>
				  	<option value="3">Nguyễn Văn D</option>
				</select> -->
				<input type="text" name="nameSaler" class="form-control nameSaler" value="{!! $response['nameSaler'] !!}" disabled="true" >
			</div>
			<div class="col-3">
				<input type="text" name="nameTeam" class="form-control nameTeam" value="{!! $response['teamSaler'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				<!-- <input type="" name="" value="Nguyễn Văn A" disabled="" class="form-control" > -->
			</div>
			<div class="col-3">
				<!-- <input type="text" name="typeCustomer" class="form-control typeCustomer" > -->
				<select class="browser-default custom-select typeCustomer" name="typeCustomer" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				  	<option {!! isset($response['typeCustomer']) === 'B2B'  ? 'selected' : '' !!} value="B2B">B2B</option>
				  	<option {!! isset($response['typeCustomer']) === 'B2C'  ? 'selected' : '' !!} value="B2C">B2C</option>
				</select>
			</div>
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<label style="font-size:14px; font-weight: bolder ">Thông tin đơn hàng</label>
			<div class="row form-group">
				<div class="col-3">
					<label>Loại combo <strong>*</strong></label>
					<select class="browser-default custom-select typeCombo" name="typeCombo" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
					  	<option {!! isset($response['typeCustomer']) === 'Vi vu Phú Quốc'  ? 'selected' : '' !!} value="Vi vu Phú Quốc">Vi vu Phú Quốc</option>
					  	<option {!! isset($response['typeCustomer']) === 'Vi vu Quy Nhơn'  ? 'selected' : '' !!} value="Vi vu Quy Nhơn">Vi vu Quy Nhơn</option>
					  	<option {!! isset($response['typeCustomer']) === 'Vi vu Hội An'  ? 'selected' : '' !!} value="Vi vu Hội An">Vi vu Hội An</option>
					  	<option {!! isset($response['typeCustomer']) === 'Vi vu Nha Trang'  ? 'selected' : '' !!} value="Vi vu Nha Trang">Vi vu Nha Trang</option>
					</select>
				</div>
				<div class="col-3">
					<label>Mã contact <strong>*</strong></label>
					<input type="text" name="contactCode" class="form-control contactCode" value="{!! $response['contactCode'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Họ và tên khách đại diện <strong>*</strong></label>
					<input type="text" name="nameCustomer" class="form-control nameCustomer" value="{!! $response['nameCustomer'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Số điện thoại khách đại diện <strong>*</strong></label>
					<input type="text" name="phoneCustomer" class="form-control phoneCustomer common-number" value="{!! $response['phoneCustomer'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Email khác đại diện <strong>*</strong></label>
					<input type="text" name="mailCustomer" class="form-control mailCustomer email" value="{!! $response['mailCustomer'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Quốc tịch <strong>*</strong></label>
					<input type="text" name="country" class="form-control country" value="{!! $response['country'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Mã combo</label>
					<input type="text" name="codeCombo" class="form-control codeCombo" value="{!! isset($response['codeCombo']) ? $response['codeCombo'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Level đơn hàng</label>
					<select class="browser-default custom-select levelOrder" name="levelOrder" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
					  	<option  {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L3') ? $response['levelOrder'] : '' !!}  value="L3">L3</option>
					  	<option {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L4') ? $response['levelOrder'] : '' !!} value="L4">L4</option>
					  	<option {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L5') ? $response['levelOrder'] : '' !!} value="L5">L5</option>
					  	<option {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L3B') ? $response['levelOrder'] : '' !!} value="L3B">L3B</option>
					  	<option {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L4B') ? $response['levelOrder'] : '' !!} value="L4B">L4B</option>
					  	<option {!! (isset($response['levelOrder']) && $response['levelOrder'] == 'L5B') ? $response['levelOrder'] : '' !!} value="L5B">L5B</option>
					</select>
				</div>
			</div>
			
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder ">Thông tin vé máy bay</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentAirline" name="paymentAirline" class="form-check-input paymentAirline" {!! $response['airlineStatus'] == 1  ? 'checked' : '' !!} @if($role !=	 1 && $role != 2) disabled="true"   @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
					<label>Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-3">
					<label>Mã đơn máy bay</label>
					<input type="text" type="input" name="airCode" class="form-control airCode" value="{!! $response->airLine != null ? $response->airLine['airCode'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
	                <div class="form-control-feedback">
	                    <i class="icon-search4 font-size-base text-muted"></i>
	                </div>
				</div>
				<div class="col-3">
					<label>Số lượng vé máy bay</label>
					<input type="text" name="airQuantity" class="form-control common-numeric airQuantity" value="1" disabled >
	                <div class="form-control-feedback">
	                    <i class="icon-search4 font-size-base text-muted"></i>
	                </div>
				</div>
				<div class="col-3">
					<label>Tiền vé máy bay</label>
					<div class="input-group mb-3">
		  				<input type="text" name="airValue" class="form-control common-currency airValue" value="{!! $response->airLine != null ? $response->airLine['airValue'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2" style="font-size: 12px">VNĐ</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-3">
					<label>Ngày bay đi</label>
					<div class="input-group mb-3">
		  				<input type="date" name="fromDate" class="form-control fromDate" value="{!! $response->airLine != null ? $response->airLine['fromDate'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<label>Ngày bay về</label>
					<div class="input-group mb-3">
		  				<input type="date" name="toDate" class="form-control toDate" value="{!! $response->airLine != null ? $response->airLine['toDate'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<label>Tình trạng xử lý</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select statusAir" name="statusAir" @if($role != 4) disabled="" @endif>
		  					<option {!! ($response['statusAir'] == 0 && $response['airlineStatus'] == 0) ? 'selected' : '' !!} value="0">Không xử lý</option>
						  	<option {!! ($response['statusAir'] == 1 && $response['airlineStatus'] == 1)  ? 'selected' : '' !!} value="1">Đang xử lý</option>
						  	<option {!! $response['statusAir'] == 2  ? 'selected' : '' !!} value="2">Đã xử lý</option>
						</select>
					</div>
				</div>
				<div class="col-3">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
						<textarea class="form-control rounded-0 noteAdminAir" style="font-size: 12px" name="noteAdminAir" rows="2" @if($role != 4) disabled="" @endif>{!! ($response['noteAdminAir'] != null) ? $response['noteAdminAir'] : '' !!}</textarea>
					</div>
				</div>
			</div>
			<div class="groupService">
				<div class="row">
					<div class="col-3">
						<label>Loại dịch vụ  <i class="fa fa-plus-circle addService" aria-hidden="true" style="color: blue; cursor: pointer;" @if($role != 4) disabled="" @endif></i></label>
					</div>
					<div class="col-3">
						<label>Chi phí dịch vụ</label>
					</div>
				</div>
				@if($response['service'] != null)
				@foreach($response['service'] as $service)
				<div class="row">
					<div class="col-3 input-group mb-3">
		  				<input type="text" name="noteAdminAir" class="form-control" value="{!! $service['name'] !!}" @if($role != 4) disabled="" @endif>
					</div>
					<div class="col-3">
						<div class="input-group mb-3">
			  				<input type="text" name="noteAdminAir" class="form-control common-currency" value="{!! $service['value'] !!}" @if($role != 4) disabled="" @endif>
						</div>
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder ">Thông tin khách sạn</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentHotel" name="paymentHotel" class="form-check-input paymentHotel" {!! $response['hotelStatus'] == 1  ? 'checked' : '' !!} @if($role != 1 && $role != 2) disabled="true"   @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
					<label style="">Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Người lớn(>12 tuổi)</label>
					<input type="text" name="adult" class="form-control adult common-numeric" value="{!! $response['adult'] != null ? $response['adult'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Trẻ em(4-12 tuổi)</label>
					<input type="text" name="children" class="form-control children common-numeric" value="{!! $response['children'] != null ? $response['children'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Em bé(<4 tuổi)</label>
					<input type="text" name="baby" class="form-control baby common-numeric" value="{!! $response['baby'] != null ? $response['baby'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
				<div class="col-3">
					<label>Danh sách khách hàng</label>
					<textarea cols="30" rows="3" name="listCustomer" class="form-control listCustomer" style="font-size: 12px" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>@if($response['listCustomer'] != null)@foreach($response['listCustomer'] as $customer){!! $customer !!}&#13;&#10;@endforeach @endif 
					</textarea>

				</div>
				<!-- <label>Danh sách khách hàng</label> -->
			</div>
			<div class="row">
				<div class="col-3">
					Ngày checkin-checkout
				</div>
				<div class="col-3"></div>
				<div class="col-3">Chương trình khuyến mãi</div>
			</div>
			<div class="row">
				<div class="col-3" style="padding-left: 45px; padding-top: 16px">
					<input type="checkbox" id="checkin_out" name="checkin_out" class="form-check-input" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				    <label class="form-check-label" for="gridCheck">
				    	Chọn trùng theo vé máy bay
				    </label>
				</div>
				<div class="col-3">
					<div class="input-group mb-3">
		  				<input type="text" class="form-control dateCheck" value="{!! $response['checkin'] != null ? $response['checkin'].'~'.$response['checkout'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<select class="browser-default custom-select ctkm" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
					  	<option {!! $response['ctkm'] == 'Son môi Hồ Ngọc Hà'  ? 'selected' : '' !!} value="Son môi Hồ Ngọc Hà">Son môi Hồ Ngọc Hà</option>
					  	<option {!! $response['ctkm'] == 'WowHoliday'  ? 'selected' : '' !!} value="WowHoliday">WowHoliday</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tblhotel" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th width="13%">Ngày<button type="button" class="btn btn-link addHotel" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) style="display: none;" @endif><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                        <th width="10%">Tên khách sạn</th>
                        <th width="10%">Hạng phòng</th>
                        <th width="10%">Giường</th>
                        <th width="10%">Gói mua</th>
                        <th width="5%">Số lượng</th>
                        <th width="10%">Đơn giá phòng</th>
                        <th>Phụ thu loại</th>
                        <th>Số lượng</th>
                        <th>CP phụ thu</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                	@if($response['hotel'] != null)
	                	@foreach($response['hotel'] as $key => $res)
	                	<tr class="hotel updateHotel data">
	                		<td>
		                		<input type="text" name="" class="form-control dateHotel date" value="{!! $res['date'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control nameHotel" value="{!! $res['name'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control levelHotel" value="{!! $res['level'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control bedHotel" value="{!! $res['bed'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control comboHotel" value="{!! $res['combo'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control numberHotel common-numeric" value="{!! $res['number'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control valueHotel common-currency" value="{!! $res['value'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control typeSurchargeHotel" value="{!! $res['typeSurcharge'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control amountHotel common-numeric" value="{!! $res['amountHotel'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control common-currency surcharge" value="{!! $res['surcharge'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
	                		<td>
	                			<div @if($role == 3 || $role == 4 || $role == 5 || $role == 6) style="display: none;" @endif>
	                				<i class="remove fa fa-times removeRow" aria-hidden="true" style="cursor: pointer; color: orange" ></i>
	                			</div>
	                		</td>
	                	</tr>
	                	@endforeach
	                	@endif
                    </tbody>
                </table>
				</div>
			</div>
			<div class="row">
				<div class="col-12">Tiền khách sạn: <label class="totalValueHotel" style="font-weight: bold;">{!! $couthHotel !!}</label> VNĐ</div>
			</div>
			<div class="row">
				<div class="col-12">
	                <label>Ghi chú của sale</label>
	                <input type="text" name="noteHotelSale" class="form-control noteHotelSale" value="{!! ($response['noteHotelSale'] != null) ? $response['noteHotelSale'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Code phòng</label>
					<div class="input-group mb-3">
		  				<input type="text" name="codeHotel" class="form-control codeHotel" value="{!! ($response['codeHotel'] != null) ? $response['codeHotel'] : '' !!}" @if($role != 5) disabled="" @endif>
					</div>
				</div>
				<div class="col-3">
					<label>Tình trạng xử lý</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select statusHotel" name="statusHotel" @if($role != 5) disabled="" @endif>
						  	<option {!! ($response['statusHotel'] == 0 && $response['hotelStatus'] == 0) ? 'selected' : '' !!} value="0">Không xử lý</option>
						  	<option {!! ($response['statusHotel'] == 1 && $response['hotelStatus'] == 1)  ? 'selected' : '' !!} value="1">Đang xử lý</option>
						  	<option {!! $response['statusHotel'] == 2  ? 'selected' : '' !!} value="2">Đã xử lý</option>
						</select>
					</div>
				</div>
				<div class="col-6">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
		  				<input type="text" name="noteAdminHotel" class="form-control noteAdminHotel" value="{!! ($response['noteAdminHotel'] != null) ? $response['noteAdminHotel'] : '' !!}" @if($role != 5) disabled="" @endif>
					</div>
				</div>
			</div>
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder ">Dịch vụ khác</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentOther" name="paymentOther" class="form-check-input paymentOther" {!! $response['otherStatus'] == 1  ? 'checked' : '' !!} @if($role != 1 && $role != 2) disabled="true"   @endif>
					<label>Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tblOther" class="table table-xs data-table table-bordered">
	                    <thead>
	                    <tr>
	                        <th>Tên dịch vụ <button type="button" class="btn btn-link addOther" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) style="display: none;" @endif><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
	                        <th>Chi tiết dịch vụ</th>
	                        <th>Số lượng</th>
	                        <th>Đơn giá</th>
	                        <th>Tổng tiền</th>
	                        <th>Ghi chú</th>
	                        <th>Tác vụ</th>
	                    </tr>
	                    </thead>
	                    <tbody>
                		@if($response['other'] != null)
	                	@foreach($response['other'] as $key => $res)
                		<tr class='other{!! $key !!} updateOther data'>
		                	<td>
		                		<input type="text" name="" class="form-control nameOther" value="{!! $res['nameOther'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control detailOther" value="{!! $res['detailOther'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control amountOther common-numeric" value="{!! $res['amountOther'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control princeOther common-currency" value="{!! $res['princeOther'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                		</td>
		                	<td>
		                		<input type="text" name="" class="form-control valueOther common-currency" value="{!! $res['valueOther'] !!}" disabled="">
			                </td>
		                	<td>
		                		<input type="text" name="" class="form-control noteOther" value="{!! $res['noteOther'] !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
			                </td>
		                	<td>
		                		<div @if($role == 3 || $role == 4 || $role == 5 || $role == 6) style="display: none;"@endif>
		                			<i class="remove fa fa-times removeRow" aria-hidden="true" style="cursor: pointer; color: orange"></i>
		                		</div>
		                	</td>
                		</tr>
	                	@endforeach
	                	@endif
	                    </tbody>
	                </table>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="">Tổng giá trị: <label class="totalValueOther" style="font-weight: bold;">{!! $countOther !!}</label> VNĐ</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
	                <label>Ghi chú của sale</label>
	                <input type="text" name="noteOtherSale" class="form-control noteOtherSale" value="{!! ($response['noteOtherSale'] != null) ? $response['noteOtherSale'] : '' !!}" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Tình trạng xử lý</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select statusOther" name="statusOther" @if($role != 6) disabled="" @endif>
						  	<option {!! ($response['statusOther'] == 0 && $response['otherStatus'] == 0) ? 'selected' : '' !!} value="0">Không xử lý</option>
						  	<option {!! ($response['statusOther'] == 1 && $response['otherStatus'] == 1)  ? 'selected' : '' !!} value="1">Đang xử lý</option>
						  	<option {!! $response['statusOther'] == 2  ? 'selected' : '' !!} value="2">Đã xử lý</option>
						</select>
					</div>
				</div>
				<div class="col-9">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
		  				<input type="text" name="noteAdminOther" class="form-control noteAdminOther" value="{!! ($response['noteAdminOther'] != null) ? $response['noteAdminOther'] : '' !!}" @if($role != 6) disabled="" @endif>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
		</div>
			<hr>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder ">Thông tin thanh toán</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Tổng giá trị thanh toán</label>
					<div>
						<div class="input-group mb-3">
						  	<input type="text" class="form-control countPayment" disabled="" value="{!! $coutPayment !!}">
						  	<div class="input-group-append">
						    	<span class="input-group-text" id="basic-addon2" style="font-size: 12px">VNĐ</span>
						  	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tblPayment" class="table table-xs data-table table-bordered">
	                    <thead>
	                    <tr>
	                        <th>Tiền <button type="button" class="btn btn-link addPayment" @if($role == 3 || $role == 4 || $role == 5 || $role == 6) style="display: none;" @endif><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
	                        <th>Ngày</th>
	                        <th>Đính kèm file</th>
	                        <th>Nhập mã FT</th>
	                        <th>Xác nhận cho nợ</th>
	                        <th>Ghi chú</th>
	                        <th></th>
	                    </tr>
	                    </thead>
	                    <tbody>
	                	@if($response['payment'] != null)
	                	@foreach($response['payment'] as $key=>$res)
	                	<tr class="payment{!! $key !!} updatePayment data">
	                		<td>
	                			<input type="text" name="" class="form-control valuePayment common-currency" value="{!! $res['valuePayment'] !!}" @if($res['codeFT'] != null) disabled @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
	                		</td>
		                	<td>
		                		<input type="text" name="" class="form-control datePayment date" value="{!! $res['datePayment'] !!}" @if($res['codeFT'] != null) disabled @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<input type="file" name="" class="form-control imagePayment" value="{!! $res['imagePayment'] !!}" @if($res['codeFT'] != null) disabled @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control codeFT" value="{!! $res['codeFT'] !!}" @if($role != 3) disabled @endif>
		                	</td>
		                	<td>
		                		<select class="browser-default custom-select confirm" name="confirm" @if($role != 2) disabled @endif>
								  	<option @if($res['confirm'] == 0) selected @endif value="0">Không cho nợ</option>
								  	<option @if($res['confirm'] == 1) selected @endif value="1">Cho nợ</option>
								</select>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control notePayment" value="{!! $res['notePayment'] !!}" @if($res['codeFT'] != null) disabled @endif @if($role == 3 || $role == 4 || $role == 5 || $role == 6) disabled @endif>
		                	</td>
		                	<td>
		                		<div @if($role == 3 || $role == 4 || $role == 5 || $role == 6 || $res['codeFT'] != null) style="display: none;" @endif>
	                				<i class="remove fa fa-times removeRow`+indexPay+`" aria-hidden="true" style="cursor: pointer; color: orange"></i>
		                		</div>
		                	</td>
	                	</tr>
	                	@endforeach
	                	@endif
	                    </tbody>
	                </table>
				</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
		</div>

            <div @if($role == 1) style="display: none;"@endif>
	            <div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
		            <div class="form-group">
						<label style="font-size:14px; font-weight: bolder ">Thông tin margin</label>
		            </div>
		            <div class="form-group">
						<label style="font-size:12px; font-weight: bolder "><strong style="color: yellow; font-weight: bold;">| </strong>Vé máy bay</label>
		            </div>
		            <div class="row">
		            	<div class="col-3">
		            		<label>Tổng giá nhập vé máy bay</label>
		            		<input type="text" name="" class="form-control airNhap common-currency" disabled="true" value="{!! $response->airLine != null ? $response->airLine['airValue'] - $profit : 0 !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng giá bán vé máy bay</label>
		            		<input type="text" name="" class="form-control airBan common-currency" disabled="true" value="{!! $response->airLine != null ? $response->airLine['airValue'] : 0 !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng lợi nhuận vé máy bay</label>
		            		<input type="text" name="" class="form-control airPrifit common-currency" disabled="true" value="{!! $profit !!}">
		            	</div>
		            </div>
		            @if($response['hotel'] != null)
		            <div class="form-group">
						<label style="font-size:12px; font-weight: bolder; padding-top: 15px"><strong style="color: yellow; font-weight: bold;">| </strong>Phòng khách sạn</label>
		            </div>
		            <table id="tblhotelMargin" class="table table-xs data-table table-bordered">
		                <thead>
		                <tr>
		                    <th>Ngày</th>
		                    <th>Tên khách sạn</th>
		                    <th>Hạng phòng</th>
		                    <th>Giường</th>
		                    <th>Gói mua</th>
		                    <th>Tiền phòng (Giá cost)</th>
		                </tr>
		                </thead>
		                <tbody>
		                	@foreach($response['hotel'] as $key => $res)
		                	<tr class="hotel{!! $key !!} updateHotel data">
		                		<td>
		                			<label class="dateLable{!! $key !!}"> {!! $res['date'] !!}</label>
			                	</td>
		                		<td>
		                			<label class="name{!! $key !!}"> {!! $res['name'] !!}</label>
			                	</td>
		                		<td>
		                			<label class="level{!! $key !!}"> {!! $res['level'] !!}</label>
			                	</td>
		                		<td>
		                			<label class="bed{!! $key !!}"> {!! $res['bed'] !!}</label>
			                	</td>
		                		<td>
		                			<label class="combo{!! $key !!}"> {!! $res['combo'] !!}</label>
			                	</td>
		                		<td>
		                			<input type="" name="" class="form-control common-currency countProfitHotel" style="font-size: 12px" value="{!! ($margin != null) ? $margin->hotel[$key]['cost'] : '' !!}">
			                	</td>
		                	</tr>
		                	@endforeach
		                </tbody>
		            </table>
		            <div class="row">
		            	<div class="col-3">
		            		<label>Tổng giá nhập khách sạn</label>
		            		<input type="text" name="" class="form-control marginHotel common-currency" disabled="true" value="{!! ($margin != null && $margin->countHotel != null) ? $margin->countHotel[0]['nhap'] : $countSurcharge !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng giá bán khách sạn</label>
		            		<input type="text" name="" class="form-control cin common-currency" disabled="true" value="{!! $couthHotel !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng lợi nhuận khách sạn</label>
		            		<input type="text" name="" class="form-control profitHotel common-currency" disabled="true" value=" {!! ($margin != null) ? $margin->countHotel[0]['profitHotel'] : '' !!}">
		            	</div>
		            </div>
		            @endif
		            @if($response['other'] != null)
			        <div class="form-group">
						<label style="font-size:12px; font-weight: bolder; padding-top: 15px"><strong style="color: yellow; font-weight: bold;">| </strong>Dịch vụ khác</label>
		            </div>
		            <table id="tblOtherMargin" class="table table-xs data-table table-bordered">
		                <thead>
		                <tr>
		                    <th style="width: 30%">Tên dịch vụ</th>
		                    <th style="width: 30%">Giá bán</th>
		                    <th style="width: 40%">Giá tiền (Giá cost)</th>
		                </tr>
		                </thead>
		                <tbody>
		            		
		                	@foreach($response['other'] as $key => $res)
		            		<tr class='other{!! $key !!} updateOther data'>
			                	<td>
		                			<label class="name{!! $key !!}"> {!! $res['nameOther'] !!}</label>
			                	</td>
			                	<td>
		            				<label class="amount{!! $key !!}"> {!! $res['valueOther'] !!}</label>
			                	</td>
			                	<td>
			                		<input type="" name="" class="form-control inCostOther common-currency" style="font-size: 12px" value="{!! ($margin != null) ? $margin->other[$key]['cost'] : '' !!}">
			                	</td>
		            		</tr>
		                	@endforeach
		                </tbody>
		            </table>
		            <div class="row">
		            	<div class="col-3">
		            		<label>Tổng giá nhập dịch vụ</label>
		            		<input type="text" name="" class="form-control costOther common-currency" disabled="true" value="{!! ($margin != null) ? $margin->countOther[0]['ban'] : '' !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng giá dịch vụ</label>
		            		<input type="text" name="" class="form-control marginOther common-currency" disabled="true" value="{!! ($margin != null && $margin->countOther != null) ? $margin->countOther[0]['nhap'] : $countOther !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng lợi nhuận dịch vụ</label>
		            		<input type="text" name="" class="form-control profitOther common-currency" disabled="true" value="{!! ($margin != null) ? $margin->countOther[0]['profitOther'] : '' !!}">
		            	</div>
		            </div>
		            @endif
		            <div class="form-group">
						<label style="font-size:12px; font-weight: bolder; padding-top: 15px"><strong style="color: yellow; font-weight: bold;">| </strong>Tổng lợi nhuận đơn hàng</label>
		            </div>
		            <div class="row">
		            	<div class="col-3">
		            		<label>Tổng giá nhập</label>
		            		<input type="text" name="" class="form-control countNhap common-currency" disabled="true" value="{!! ($margin != null) ? $margin->count[0]['countNhap'] : $response->airLine['airValue'] - $profit !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng giá bán</label>
		            		<input type="text" name="" class="form-control countBan common-currency" disabled="true" value="{!! ($margin != null) ? $margin->count[0]['countBan'] : $response->airLine['airValue'] !!}">
		            	</div>
		            	<div class="col-3">
		            		<label>Tổng lợi nhuận đơn hàng</label>
		            		<input type="text" name="" class="form-control countProfit common-currency" disabled="true" value="{!! ($margin != null) ? $margin->count[0]['countProfit'] : $profit !!}">
		            	</div>
		            </div>
	            </div>
	            </div>
			<div class="row" style="padding-top: 20px">
				<div class="col-4"></div>
				<div class="col-4"></div>
				<div class="col-4">
					<button @if($role == 1 || $role == 2 ) style="display: none;" @endif type="button" class="btn-create-order deleteOrder" style="height: 36px; background-color: #f29898" @if($role == 1 || $role == 2 ) style="display: none;" @endif>Xóa đơn hàng</button>
	                <button type="button" class="btn-create-order update_order" style="height: 36px">Cập nhật</button>
				</div>
			</div>
	</div>
	</form>
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="{{ asset('js/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		$(document).find('.common-number').inputmask({
	        'mask': '999 999 9999 [99999]',
	        'groupSeparator': ',',
	        'autoGroup': true,
	        'removeMaskOnSubmit': true,
	        'autoUnmask': true,
	        'greedy': false 
	    });
	    $(document).find('.common-numeric').inputmask({
	        'alias': 'decimal',
	        'autoGroup': true,
	        'removeMaskOnSubmit': true,
	        'autoUnmask': true,
	        'allowMinus': false
	    });
	    $(document).find('.common-currency').inputmask({
	        'alias': 'decimal',
	        'groupSeparator': ',',
	        'placeholder': "0",
	        'autoGroup': true,
	        'removeMaskOnSubmit': true,
	        'autoUnmask': true,
	        'suffix': ' VNĐ',
	        'allowMinus': false
	    });
	    $(".date").inputmask({ 
	    	'alias': "dd/mm/yyyy",
	    	"clearIncomplete": true,
	    });
	    $(".email").inputmask({ 
	    	'alias': "email",
	    	"clearIncomplete": true,
	    });
	    $('.dateCheck').daterangepicker({
	      	autoUpdateInput: false,
	      	locale: {
	          	cancelLabel: 'Clear'
	      	}
	  	});

	  	$('.dateCheck').on('apply.daterangepicker', function(ev, picker) {
	      	$(this).val(picker.startDate.format('YYYY-MM-DD') + '~' + picker.endDate.format('YYYY-MM-DD'));
	  	});
	  	$('.dateCheck').on('cancel.daterangepicker', function(ev, picker) {
	      	$(this).val('');
	  	});
	    $('.princeOther, .amountOther').keyup(function(){
	    	var value = $('.princeOther').val();
	    	var amount = $('.amountOther').val();
	    	$('.valueOther').val(parseInt(value) * parseInt(amount));
	    });
	    $('#checkin_out').click(function(){
	    	var checkin = $('.fromDate ').val();
	    	var checkout = $('.toDate ').val();
	    	// console.log(checkin, checkout, 111);
	    	if($(this).prop("checked") == true){
                $('.dateCheck').val(checkin+'~' +checkout);
            }
            else if($(this).prop("checked") == false){
                $('.dateCheck').val('');
            }
	    });
	    if(parseInt($('.totalValueHotel').text()) == 0){
	    	$('.paymentHotel').prop('disabled', true);
	    }
	    if(parseInt($('.totalValueOther').text()) == 0){
	    	$('.paymentOther').prop('disabled', true);
	    }
	    $('.numberHotel, .valueHotel').keyup(function(){
        	if($('.numberHotel').val() != 0 && $('.valueHotel').val() != 0){
        		$('.addHotel').prop('disabled', false);
        	}else{
        		$('.addHotel').prop('disabled', true);
        	}
        });

        $('.amountOther, .princeOther').keyup(function(){
        	if($('.amountOther').val() != 0 && $('.princeOther').val() != 0){
        		$('.addOther').prop('disabled', false);
        	}else{
        		$('.addOther').prop('disabled', true);
        	}
        });

        $('.valuePayment ').keyup(function(){
        	if($(this).val() != 0){
        		$('.addPayment').prop('disabled', false);
        	}else{
        		$('.addPayment').prop('disabled', true);
        	}
        });
        $('.numberHotel, .valueHotel, .amountHotel, .surcharge').click(function(){
    		var count = $('.totalValueHotel').text() != '' ? $('.totalValueHotel').text() : 0;
    		var countChild = parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0) + parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0);
    			console.log(count, countChild);
	    	$(this).focusout(function(){
		    	var numberHotel = $(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0;
		    	var valueHotel = $(this).closest("tr").find("input:eq(6)").val() != '' ?$(this).closest("tr").find("input:eq(6)").val() : 0;
		    	var amountHotel = $(this).closest("tr").find("input:eq(8)").val() != '' ?$(this).closest("tr").find("input:eq(8)").val() : 0;
		    	var surcharge = $(this).closest("tr").find("input:eq(9)").val() != '' ?$(this).closest("tr").find("input:eq(9)").val() : 0;
		    	console.log(numberHotel, valueHotel, amountHotel, surcharge);
		    	$('.totalValueHotel').text(parseInt(count) - parseInt(countChild) + parseInt(numberHotel) * parseInt(valueHotel) + parseInt(amountHotel) *parseInt(surcharge));
		    });
    	});
	    var indexHotel = 0;
	    $('body').delegate('.addHotel', 'click', function (){
	    	++indexHotel;
	    	$('#tblhotel tbody').append(`
	    		<tr>
            		<td>
            			<input type="text" name="dateHotel`+indexHotel+`" class="form-control dateHotel`+indexHotel+` date">
            		</td>
            		<td>
						<input type="text" name="nameHotel" class="form-control nameHotel">
            		</td>
            		<td>
						<input type="text" name="levelHotel`+indexHotel+`" class="form-control levelHotel`+indexHotel+`">
            		</td>
            		<td>
						<input type="text" name="bedHotel`+indexHotel+`" class="form-control bedHotel`+indexHotel+`">
            		</td>
            		<td>
						<input type="text" name="comboHotel`+indexHotel+`" class="form-control comboHotel`+indexHotel+`">
            		</td>
            		<td>
            			<input type="text" name="numberHotel`+indexHotel+`" class="form-control numberHotel`+indexHotel+` common-numeric">
            		</td>
            		<td>
            			<input type="text" name="valueHotel`+indexHotel+`" class="form-control valueHotel`+indexHotel+` common-currency">
            		</td>
            		<td>
            			<input type="text" name="typeSurcharge`+indexHotel+`" class="form-control typeSurcharge`+indexHotel+`">
            		</td>
            		<td>
            			<input type="text" name="amountHotel`+indexHotel+`" class="form-control amountHotel`+indexHotel+` common-numeric">
            		</td>
            		<td><input type="text" name="surcharge`+indexHotel+`" placeholder="nhập tiền" class="form-control common-currency surcharge`+indexHotel+`"></td>
            		<td>
            			<i class="remove fa fa-times removeRow`+indexHotel+`" aria-hidden="true" style="cursor: pointer; color: orange"></i>
            		</td>
            	</tr>
	    		`);
		    $('.valueHotel'+indexHotel).focusout(function(){
	        	$('.totalValueHotel').text(parseInt($('.totalValueHotel').text()) + parseInt($('.numberHotel'+indexHotel).val() != '' ? $('.numberHotel'+indexHotel).val() : 0) * parseInt($('.valueHotel'+indexHotel).val() != '' ? $('.valueHotel'+indexHotel).val() : 0));
	        });
	        $('.surcharge'+indexHotel).focusout(function(){
	        	$('.totalValueHotel').text(parseInt($('.totalValueHotel').text()) + parseInt($('.amountHotel'+indexHotel).val() != '' ? $('.amountHotel'+indexHotel).val() : 0) * parseInt($('.surcharge'+indexHotel).val() != '' ? $('.surcharge'+indexHotel).val() : 0));
	        });
	        $('.numberHotel'+indexHotel+', .valueHotel'+indexHotel+', .amountHotel'+indexHotel+', .surcharge'+indexHotel).click(function(){
	    		var count = $('.totalValueHotel').text() != '' ? $('.totalValueHotel').text() : 0;
	    		var countChild = parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0) + parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0);
	    			console.log(count, countChild);
		    	$(this).focusout(function(){
			    	var numberHotel = $(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0;
			    	var valueHotel = $(this).closest("tr").find("input:eq(6)").val() != '' ?$(this).closest("tr").find("input:eq(6)").val() : 0;
			    	var amountHotel = $(this).closest("tr").find("input:eq(8)").val() != '' ?$(this).closest("tr").find("input:eq(8)").val() : 0;
			    	var surcharge = $(this).closest("tr").find("input:eq(9)").val() != '' ?$(this).closest("tr").find("input:eq(9)").val() : 0;
			    	console.log(numberHotel, valueHotel, amountHotel, surcharge);
			    	$('.totalValueHotel').text(parseInt(count) - parseInt(countChild) + parseInt(numberHotel) * parseInt(valueHotel) + parseInt(amountHotel) *parseInt(surcharge));
			    });
	    	});
	    	$(document).find('.common-number').inputmask({
		        'mask': '999 999 9999 [99999]',
		        'groupSeparator': ',',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'greedy': false 
		    });
		    $(document).find('.common-numeric').inputmask({
		        'alias': 'decimal',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'allowMinus': false
		    });
		    $(document).find('.common-currency').inputmask({
		        'alias': 'decimal',
		        'groupSeparator': ',',
		        'placeholder': "0",
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'suffix': ' VNĐ',
		        'allowMinus': false
		    });
		    $(".date").inputmask({ 
		    	'alias': "dd/mm/yyyy",
		    	"clearIncomplete": true,
		    });
		    $(".email").inputmask({ 
		    	'alias': "email",
		    	"clearIncomplete": true,
		    });
	    });
	    var indexOther = 0;
	    $('body').delegate('.addOther', 'click', function (){
	    	++indexOther;
	    	$('#tblOther tbody').append(`
	    		<tr>
            		<td>
						<input type="text" name="nameOther`+indexOther+`" class="form-control nameOther`+indexOther+`">
            		</td>
            		<td>
						<input type="text" name="detailOther`+indexOther+`" class="form-control detailOther`+indexOther+`">
            		</td>
            		<td>
            			<input type="text" name="amountOther`+indexOther+`" class="form-control amountOther`+indexOther+` common-numeric">
            		</td>
            		<td>
            			<input type="text" name="princeOther`+indexOther+`" class="form-control princeOther`+indexOther+` common-currency">
            		</td>
            		<td>
            			<input type="text" name="valueOther`+indexOther+`" class="form-control valueOther`+indexOther+` common-currency" disabled="">
            		</td>
            		<td>
            			<input type="text" name="noteOther`+indexOther+`" class="form-control noteOther`+indexOther+`">
            		</td>
            		<td><i class="remove fa fa-times removeRow`+indexOther+`" aria-hidden="true" style="cursor: pointer; color: orange"></i></td>
            	</tr>
	    		`);
	    	$('.princeOther'+indexOther+', .amountOther'+indexOther).click(function(){
	    		var count = $('.totalValueOther').text() != '' ? $('.totalValueOther').text() : 0;
	    		var countChild = $(this).closest("tr").find("input:eq(4)").val() != '' ?$(this).closest("tr").find("input:eq(4)").val() : 0;
	    		console.log(count, countChild);
		    	$(this).focusout(function(){
			    	var value = $(this).closest("tr").find("input:eq(3)").val() != '' ? $(this).closest("tr").find("input:eq(3)").val() : 0;
			    	var amount = $(this).closest("tr").find("input:eq(2)").val() != '' ?$(this).closest("tr").find("input:eq(2)").val() : 0;
			    	$(this).closest("tr").find("input:eq(4)").val(parseInt(value) * parseInt(amount));
			    	$('.totalValueOther').text(parseInt(count) - parseInt(countChild) + parseInt(value) * parseInt(amount));
			    });
	    	});
	    	var nameOther = $('.nameOther').val();
	    	var detailOther = $('.detailOther').val();
	    	var amountOther = $('.amountOther').val();
	    	var princeOther = $('.princeOther').val();
	    	var valueOther = $('.valueOther').val();
	    	var noteOther = $('.noteOther').val();
	    	// $('.totalValueOther').text(parseInt($('.totalValueOther').text()) + parseInt(valueOther));
	    	$(document).find('.common-number').inputmask({
		        'mask': '999 999 9999 [99999]',
		        'groupSeparator': ',',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'greedy': false 
		    });
		    $(document).find('.common-numeric').inputmask({
		        'alias': 'decimal',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'allowMinus': false
		    });
		    $(document).find('.common-currency').inputmask({
		        'alias': 'decimal',
		        'groupSeparator': ',',
		        'placeholder': "0",
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'suffix': ' VNĐ',
		        'allowMinus': false
		    });
		    $(".date").inputmask({ 
		    	'alias': "dd/mm/yyyy",
		    	"clearIncomplete": true,
		    });
		    $(".email").inputmask({ 
		    	'alias': "email",
		    	"clearIncomplete": true,
		    });
		    $('.dateCheck').daterangepicker({
		      	autoUpdateInput: false,
		      	locale: {
		          	cancelLabel: 'Clear'
		      	}
		  	});
		});
	    if(parseInt($('.countPayment').val()) < parseInt($('.airValue').val())){
    		$(".paymentAirline").prop( "disabled", true );
    	}
    	if(parseInt($('.countPayment').val()) < parseInt($('.totalValueHotel').text())){
    		$(".paymentHotel").prop( "disabled", true );
    	}
    	if(parseInt($('.countPayment').val()) < parseInt($('.totalValueOther').text())){
    		$(".paymentOther").prop( "disabled", true );
    	}
	    var indexPay = 0;
	    $('body').delegate('.addPayment', 'click', function (){
	    	++indexPay;
	    	$('#tblPayment tbody').append(`
	    		<tr>
            		<td>
            			<input type="text" name="valuePayment`+indexPay+`" class="form-control valuePayment`+indexPay+` common-currency">
            		</td>
            		<td>
            			<input type="date" name="datePayment`+indexPay+`" class="form-control datePayment`+indexPay+` date">
            		</td>
            		<td>
            			<input type="file" name="imagePayment`+indexPay+`" class="form-control imagePayment`+indexPay+`">
            		</td>
            		<td>
            			<input type="text" name="codeFT`+indexPay+`" class="form-control codeFT`+indexPay+`" @if($role != 3) disabled @endif>
            		</td>
            		<td>
            			<select class="browser-default custom-select confirm`+indexPay+`" name="confirm`+indexPay+`" @if($role != 2) disabled @endif>
						  	<option value="0">Không cho nợ</option>
						  	<option value="1">Cho nợ</option>
						</select>
            		</td>
            		<td>
            			<input type="text" name="notePayment`+indexPay+`" class="form-control notePayment`+indexPay+`">
            		</td>
            		<td><i class="remove fa fa-times removeRow`+indexPay+`" aria-hidden="true" style="cursor: pointer; color: orange"></i></td
            	</tr>
	    		`);
	    	$('.valuePayment'+indexPay).focusout(function(){
		    	$('.countPayment').val(parseInt($('.countPayment').val()) + parseInt($(this).val()));
		    });
		    $('.valuePayment'+indexPay).click(function(){
	    		var count = $('.countPayment').val() != '' ? $('.countPayment').val() : 0;
	    		var countChild = $(this).val() != '' ? $(this).val() : 0;
		    	$(this).focusout(function(){
			    	$('.countPayment').val(parseInt(count) - parseInt(countChild) + parseInt($(this).val()));
			    });
	    	});
	    	$(document).find('.common-number').inputmask({
		        'mask': '999 999 9999 [99999]',
		        'groupSeparator': ',',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'greedy': false 
		    });
		    $(document).find('.common-numeric').inputmask({
		        'alias': 'decimal',
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'allowMinus': false
		    });
		    $(document).find('.common-currency').inputmask({
		        'alias': 'decimal',
		        'groupSeparator': ',',
		        'placeholder': "0",
		        'autoGroup': true,
		        'removeMaskOnSubmit': true,
		        'autoUnmask': true,
		        'suffix': ' VNĐ',
		        'allowMinus': false
		    });
		    $(".date").inputmask({ 
		    	'alias': "dd/mm/yyyy",
		    	"clearIncomplete": true,
		    });
		    $(".email").inputmask({ 
		    	'alias': "email",
		    	"clearIncomplete": true,
		    });
		    $('.dateCheck').daterangepicker({
		      	autoUpdateInput: false,
		      	locale: {
		          	cancelLabel: 'Clear'
		      	}
		  	});
	    });
	    $('body').delegate('#tblhotel .remove', 'click', function (){
	    	var countValue = $('.totalValueHotel').text();
	    	console.log(countValue);
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueHotel').text(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0)- parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0));
	    	$(this).closest("tr").remove();
	    });
	    $('body').delegate('#tblOther .remove', 'click', function (){
	    	var countValue = $('.totalValueOther').text();
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueOther').text(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(4)").val() != '' ? $(this).closest("tr").find("input:eq(4)").val() : 0));
	    	$(this).closest("tr").remove();
	    });
	    $('body').delegate('#tblPayment .remove', 'click', function (){
	    	var countValue = $('.countPayment').val();
	    	var value = $(this).attr('class');
	    	// xóa tổng giá trị đơn hàng
	    	$('.countPayment').val(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(0)").val() != '' ? $(this).closest("tr").find("input:eq(0)").val() : 0));
	    	$(this).closest("tr").remove();
	    	var countValuePayment = $('.countPayment').val();
	    	if(parseInt($('.airValue').val()) <= parseInt(countValuePayment)){
	    		$( ".paymentAirline" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentAirline" ).prop( "disabled", true );
	    		$( ".paymentAirline" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueHotel').text()) <= parseInt(countValuePayment)){
	    		$( ".paymentHotel" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentHotel" ).prop( "disabled", true );
	    		$( ".paymentHotel" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueOther').text()) <= parseInt(countValuePayment)){
	    		$( ".paymentOther" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentOther" ).prop( "disabled", true );
	    		$( ".paymentOther" ).prop( "checked", false );
	    	}
	    });
	    var countOrder = 0;

	    $('.paymentAirline').click(function(){
	    	if($(this).is(':checked')){
                if($('.paymentHotel').is(":checked") && $('.paymentOther').is(":not(:checked)")){
                	var totalValueHotel = $('.totalValueHotel').text();
                	var airValue = $('.airValue ').val();
                	if(parseInt(totalValueHotel) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentHotel').prop('checked', false);
                	}
                }else if($('.paymentHotel').is(":not(:checked)") && $('.paymentOther').is(":checked")){
                	var totalValueOther = $('.totalValueOther').text();
                	var airValue = $('.airValue ').val();
                	if(parseInt(totalValueOther) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentOther').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').text();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').text();
                	if(parseInt(totalValueHotel) + parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
                		$('.paymentOther').prop('checked', false);
                		$('.paymentHotel').prop('checked', false);
                	}
                }
            }
	    });
	    $('.paymentHotel').click(function(){
	    	if($(this).is(":checked")){
                if($('.paymentAirline').is(":checked") && $('.paymentOther').is(":not(:checked)")){
                	var airValue = $('.airValue').val();
                	var totalValueHotel = $('.totalValueHotel ').text();
                	if(parseInt(totalValueHotel) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentAirline').prop('checked', false);
                	}
                }else if($('.paymentAirline').is(":not(:checked)") && $('.paymentOther').is(":checked")){
                	var totalValueOther = $('.totalValueOther').text();
                	var totalValueHotel = $('.totalValueHotel ').text();
                	if(parseInt(totalValueHotel) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
                		$('.paymentOther').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').text();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').text();
                	if(parseInt(totalValueHotel) + parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
	                	$('.paymentAirline').prop('checked', false);
	                	$('.paymentOther').prop('checked', false);
                	}
                }
            }
	    });
	    $('.paymentOther').click(function(){
	    	if($(this).is(":checked")){
                if($('.paymentAirline').is(":checked") && $('.paymentHotel').is(":not(:checked)")){
                	var airValue = $('.airValue').val();
                	var totalValueOther = $('.totalValueOther').text();
                	if(parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
                		$('.paymentAirline').prop('checked', false);
                	}
                }else if($('.paymentAirline').is(":not(:checked)") && $('.paymentHotel').is(":checked")){
                	var totalValueOther = $('.totalValueOther').text();
                	var totalValueHotel = $('.totalValueHotel ').text();
                	if(parseInt(totalValueOther) + parseInt(totalValueHotel) > parseInt($('.countPayment').val())){
                		$('.paymentHotel').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').text();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').text();
                	if(parseInt(totalValueHotel) + parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
	                	$('.paymentAirline').prop('checked', false);
	                	$('.paymentHotel').prop('checked', false);
                	}
                }
            }
	    });


	    $('.princeOther, .amountOther').click(function(){
    		var count = $('.totalValueOther').text() != '' ? $('.totalValueOther').text() : 0;
    		var countChild = $(this).closest("tr").find("input:eq(4)").val() != '' ?$(this).closest("tr").find("input:eq(4)").val() : 0;
    		console.log(count, countChild);
	    	$(this).focusout(function(){
		    	var value = $(this).closest("tr").find("input:eq(3)").val() != '' ? $(this).closest("tr").find("input:eq(3)").val() : 0;
		    	var amount = $(this).closest("tr").find("input:eq(2)").val() != '' ?$(this).closest("tr").find("input:eq(2)").val() : 0;
		    	$(this).closest("tr").find("input:eq(4)").val(parseInt(value) * parseInt(amount));
		    	$('.totalValueOther').text(parseInt(count) - parseInt(countChild) + parseInt(value) * parseInt(amount));
		    });
    	});
	    $('.valuePayment').click(function(){
    		var count = $('.countPayment').val() != '' ? $('.countPayment').val() : 0;
    		var countChild = $(this).val() != '' ? $(this).val() : 0;
	    	$(this).focusout(function(){
		    	$('.countPayment').val(parseInt(count) - parseInt(countChild) + parseInt($(this).val()));
		    });
    	});
	    $('body').delegate('.update_order', 'click', function (){
	    	$('.paymentAirline').is(":checked") ? airlineStatus = 1 : airlineStatus = 0;
		    $('.paymentHotel').is(":checked") ? hotelStatus = 1 : hotelStatus = 0;
		    $('.paymentOther').is(":checked") ? otherStatus = 1 : otherStatus = 0;
	    	countOrder = countOrder + parseInt($('.totalValueHotel').text()) + parseInt($('.totalValueOther').text()) + parseInt($('.airValue').val());
	    	console.log(countOrder);
	    	var url = '{!! route('order.update') !!}';
	    	var airLine = {
	    		'airCode' : $('.airCode').val(),
    			'airValue' : $('.airValue').val(),
    			'fromDate' : $('.fromDate').val(),
    			'toDate' : $('.toDate').val()
	    	};
	    	var serviceAlir = [];
			var $service = $('.groupService .row');
			console.log($service);
			$service.each(function(){
				serviceAlir.push({
					name: $(this).find("input:eq(0)").val(),
					value: $(this).find("input:eq(1)").val(),
				});
			});
			console.log(serviceAlir);
	    	var hotel = [];
	    	var $hotel = $('#tblhotel tbody tr');
	    	$hotel.each(function(){
				hotel.push({
					date: $(this).find("input:eq(0)").val(),
					name: $(this).find("input:eq(1)").val(),
					level: $(this).find("input:eq(2)").val(),
					bed: $(this).find("input:eq(3)").val(),
					combo: $(this).find("input:eq(4)").val(),
					number: $(this).find("input:eq(5)").val(),
					value: $(this).find("input:eq(6)").val(),
					typeSurcharge: $(this).find("input:eq(7)").val(),
					amountHotel: $(this).find("input:eq(8)").val(),
					surcharge: $(this).find("input:eq(9)").val(),
				});
			});
			var other = [];
			var $other = $('#tblOther tbody tr');
			$other.each(function(){
				other.push({
					nameOther: $(this).find("input:eq(0)").val(),
					detailOther: $(this).find("input:eq(1)").val(),
					amountOther: $(this).find("input:eq(2)").val(),
					princeOther: $(this).find("input:eq(3)").val(),
					valueOther: $(this).find("input:eq(4)").val(),
					noteOther: $(this).find("input:eq(5)").val(),
				});
			});
	        var payment = [];
	        var $payment = $('#tblPayment tbody tr');
	        var number = 0;
	        $payment.each(function(){
	        	payment.push({
					valuePayment: $(this).find("input:eq(0)").val(),
					datePayment: $(this).find("input:eq(1)").val(),
					imagePayment: $(this).find("input:eq(2)").val(),
					codeFT: $(this).find("input:eq(3)").val(),
					confirm: $(this).find("option:selected").val(),
					notePayment: $(this).find("input:eq(4)").val(),
				});
	        });
	        var listCustomer = $('.listCustomer').val().split('\n');
	        var _marginHotel = [];
	        var $_marginHotel = $('#tblhotelMargin .data');
	        $_marginHotel.each(function(){
	        	_marginHotel.push({
					date: $(this).find("td:eq(0)").text(),
					name: $(this).find("td:eq(1)").text(),
					level: $(this).find("td:eq(2)").text(),
					bad: $(this).find("td:eq(3)").text(),
					combo: $(this).find("td:eq(4)").text(),
					cost: $(this).find("td:eq(5) .countProfitHotel").val(),
				});
	        });
	        var _marginOther = [];
	        var $_marginOther = $('#tblOtherMargin .data');
	        $_marginOther.each(function(){
	        	_marginOther.push({
					name: $(this).find("td:eq(0)").text(),
					prince: $(this).find("td:eq(1)").text(),
					cost: $(this).find("td:eq(2) .inCostOther").val(),
				});
	        });
	        var countAirline =[];
	        countAirline.push({
	        	nhap: $('.airNhap ').val(),
	        	ban: $('.airBan ').val(),
	        	airPrifit: $('.airPrifit').val()
	        });
	        var countHotel =[];
	        countHotel.push({
	        	nhap: $('.marginHotel').val(),
	        	ban: $('.cin').val(),
	        	profitHotel: $('.profitHotel').val()
	        });
	        var countOther =[];
	        countOther.push({
	        	nhap: $('.marginOther').val(),
	        	ban: $('.costOther').val(),
	        	profitOther: $('.profitOther').val()
	        });
	        var count =[];
	        count.push({
	        	countNhap: $('.countNhap ').val(),
	        	countBan: $('.countBan').val(),
	        	countProfit: $('.countProfit').val()
	        });
		    $.ajax({
	            url: url,
	            method: 'POST',
	            data: {
		            _token: '{{csrf_token()}}',
		            id: '{!! $response->id !!}',
		            nameSaler: $('.nameSaler').val(),
		            teamSaler: $('.nameTeam').val(),
		            typeCustomer: $('.typeCustomer').val(),
		            typeCombo : $('.typeCombo').val(),
	    			contactCode : $('.contactCode').val(),
	    			nameCustomer : $('.nameCustomer').val(),
	    			phoneCustomer : $('.phoneCustomer').val(),
	    			mailCustomer : $('.mailCustomer').val(),
	    			country : $('.country').val(),
	    			codeCombo: $('.codeCombo').val(),
	    			levelOrder: $('.levelOrder').val(),
	    			ctkm: $('.ctkm').val(),
		            airLine: airLine,
		            hotel: hotel,
		            other: other,
		            countValue: countOrder,
		            payment: payment,
		            airlineStatus: airlineStatus,
				    hotelStatus: hotelStatus,
				    otherStatus: otherStatus,
				    statusAir: $('.statusAir').val(),
				    statusHotel: $('.statusHotel').val(),
				    statusOther: $('.statusOther').val(),
				    listCustomer: listCustomer,
				    _marginHotel: _marginHotel,
				    _marginOther: _marginOther,
				    countAirline: countAirline,
				    countHotel: countHotel,
				    countOther: countOther,
				    count: count,
				    adult: $('.adult').val(),
				    children: $('.children').val(),
				    baby: $('.baby').val(),
				    checkin_out: $('.dateCheck').val(),
				    service: serviceAlir,
				    noteAdminAir: $('.noteAdminAir').val(),
				    noteHotelSale: $('.noteHotelSale').val(),
				    codeHotel: $('.codeHotel').val(),
				    noteAdminHotel: $('.noteAdminHotel').val(),
				    noteOtherSale: $('.noteOtherSale').val(),
				    noteAdminOther: $('.noteAdminOther').val()
		        },
	        }).done(function(res){
	        	if(res.httpCode == 200){
	        		alert(res.message);
	        		setTimeout(function () {
                        location='{!! route('order.list') !!}';
                    }, 2000);
	        	}else{
	        		alert('Cập nhật thất bại')
	        	}
	        }).fail(function(){

	        });
	    });
	});
		$('body').delegate('.deleteOrder', 'click', function (){
			var url = '{!! route('order.destroy') !!}';
	    	$.ajax({
	            url: url,
	            method: 'POST',
	            data: {
		            _token: '{{csrf_token()}}',
		            id: '{!! $response->id !!}',
		        },
	        }).done(function(res){
	        	if(res.httpCode == 200){
	        		alert(res.message);
	        		setTimeout(function () {
                        location='{!! route('order.list') !!}';
                    }, 2000);
	        	}else{
	        		alert('Xóa thất bại')
	        	}
	        }).fail(function(){

	        });
	    });
	$('.countProfitHotel').click(function(){
		var __countNhap = $('.countNhap').val() != '' ? $('.countNhap').val() : 0;
		var __countBan = $('.countBan').val() != '' ? $('.countBan').val() : 0;
		var __countProfit = $('.countProfit').val() != '' ? $('.countProfit').val() : 0;
		first = $(this).val() != '' ? $(this).val() : 0;
		firstCost = $('.marginHotel').val() != '' ? $('.marginHotel').val() : 0;
		var __profitHotel = $('.profitHotel').val() != '' ? $('.profitHotel').val() : 0;
		$(this).focusout(function(){
			$('.marginHotel').val(parseInt(firstCost) - parseInt(first) + parseInt($(this).val()));
			$('.profitHotel').val(parseInt($('.cin').val()) - parseInt($('.marginHotel').val()));

			// xem lai
			$('.countBan').val(parseInt(__countBan) + parseInt($('.cin').val() != '' ? $('.cin').val() : 0));
			$('.countNhap').val(parseInt(__countNhap) + (parseInt($('.marginHotel').val() != '' ? $('.marginHotel').val() : 0)));
			$('.countProfit').val(parseInt(__countProfit) + (parseInt($('.profitHotel').val() != '' ? $('.profitHotel').val() : 0)));
			///
		});
	});
	var marginOther = $('.marginOther').val();
	$('.inCostOther').click(function(){
		var __countNhap = $('.countNhap').val() != '' ? $('.countNhap').val() : 0;
		var __countBan = $('.countBan').val() != '' ? $('.countBan').val() : 0;
		var __countProfit = $('.countProfit').val() != '' ? $('.countProfit').val() : 0;
		first = $(this).val() != '' ? $(this).val() : 0;
		firstCost = $('.costOther').val() != '' ? $('.costOther ').val() : 0;
		$(this).focusout(function(){
			$('.costOther').val(parseInt(firstCost) - parseInt(first) + parseInt($(this).val()))
			$('.profitOther').val(parseInt(marginOther) - parseInt($('.costOther').val()));

			// xem lai
			$('.countBan').val(parseInt(__countBan) + parseInt($('.marginOther').val() != '' ? $('.marginOther').val() : 0));
			$('.countNhap').val(parseInt(__countNhap) + (parseInt($('.costOther').val() != '' ? $('.costOther').val() : 0)));
			$('.countProfit').val(parseInt(__countProfit) + (parseInt($('.profitOther').val() != '' ? $('.profitOther').val() : 0)));
			//
		});
	});
	$('body').delegate('.addService', 'click', function (){
		$('.groupService').append(`
			<div class="row">
				<div class="col-3" @if($role != 4) style="display: none" @endif>
					<div class="input-group mb-3">
		  				<input type="text" name="" class="form-control">
					</div>
				</div>
				<div class="col-3" @if($role != 4) style="display: none" @endif>
					<div class="input-group mb-3">
		  				<input type="text" name="" class="form-control common-currency">
					</div>
				</div>
			</div>
		`);
		$(document).find('.common-currency').inputmask({
	        'alias': 'decimal',
	        'groupSeparator': ',',
	        'placeholder': "0",
	        'autoGroup': true,
	        'removeMaskOnSubmit': true,
	        'autoUnmask': true,
	        'suffix': ' VNĐ',
	        'allowMinus': false
	    });
	});
</script>