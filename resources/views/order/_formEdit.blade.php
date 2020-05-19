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
		}
		strong{
			color: red
		}
		.btn-create-order{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 240px;
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
		hr{
			background-color: orange
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
			<div class="col-3">Thông tin khách hàng</div>
			<div class="col-3">
				<!-- <select class="browser-default custom-select">
				  	<option selected>Nguyễn Văn A</option>
				  	<option value="1">Nguyễn Văn B</option>
				  	<option value="2">Nguyễn Văn C</option>
				  	<option value="3">Nguyễn Văn D</option>
				</select> -->
				<input type="text" name="nameSaler" class="form-control nameSaler" value="{!! $response['nameSaler'] !!}">
			</div>
			<div class="col-3">
				<input type="text" name="nameTeam" class="form-control nameTeam" value="{!! $response['teamSaler'] !!}">
				<!-- <input type="" name="" value="Nguyễn Văn A" disabled="" class="form-control" > -->
			</div>
			<div class="col-3">
				<!-- <input type="text" name="typeCustomer" class="form-control typeCustomer" > -->
				<select class="browser-default custom-select typeCustomer" name="typeCustomer">
				  	<option {!! isset($response['typeCustomer']) === 'B2B'  ? 'selected' : '' !!} value="B2B">B2B</option>
				  	<option {!! isset($response['typeCustomer']) === 'B2C'  ? 'selected' : '' !!} value="B2C">B2C</option>
				</select>
			</div>
		</div>
		<hr>
		<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin đơn hàng</label>
		<div class="row form-group">
			<div class="col-3">
				<label>Loại combo <strong>*</strong></label>
				<select class="browser-default custom-select typeCombo" name="typeCombo">
				  	<option {!! isset($response['typeCustomer']) === 'Vi vu Phú Quốc'  ? 'selected' : '' !!} value="Vi vu Phú Quốc">Vi vu Phú Quốc</option>
				  	<option {!! isset($response['typeCustomer']) === 'Vi vu Quy Nhơn'  ? 'selected' : '' !!} value="Vi vu Quy Nhơn">Vi vu Quy Nhơn</option>
				  	<option {!! isset($response['typeCustomer']) === 'Vi vu Hội An'  ? 'selected' : '' !!} value="Vi vu Hội An">Vi vu Hội An</option>
				  	<option {!! isset($response['typeCustomer']) === 'Vi vu Nha Trang'  ? 'selected' : '' !!} value="Vi vu Nha Trang">Vi vu Nha Trang</option>
				</select>
			</div>
			<div class="col-3">
				<label>Mã contact <strong>*</strong></label>
				<input type="text" name="contactCode" class="form-control contactCode" value="{!! $response['contactCode'] !!}">
			</div>
			<div class="col-3">
				<label>Họ và tên khách đại diện <strong>*</strong></label>
				<input type="text" name="nameCustomer" class="form-control nameCustomer" value="{!! $response['nameCustomer'] !!}">
			</div>
			<div class="col-3">
				<label>Số điện thoại khách đại diện <strong>*</strong></label>
				<input type="text" name="phoneCustomer" class="form-control phoneCustomer common-number" value="{!! $response['phoneCustomer'] !!}">
			</div>
			<div class="col-3">
				<label>Email khác đại diện <strong>*</strong></label>
				<input type="text" name="mailCustomer" class="form-control mailCustomer email" value="{!! $response['mailCustomer'] !!}">
			</div>
			<div class="col-3">
				<label>Quốc tịch <strong>*</strong></label>
				<input type="text" name="country" class="form-control country" value="{!! $response['country'] !!}">
			</div>
			<div class="col-3">
				<label>Mã combo</label>
				<input type="text" name="codeCombo" class="form-control codeCombo" value="{!! isset($response['codeCombo']) ? $response['codeCombo'] : '' !!}">
			</div>
			<div class="col-3">
				<label>level đơn hàng</label>
				<input type="text" name="levelOrder" class="form-control levelOrder" value="{!! isset($response['levelOrder']) ? $response['levelOrder'] : '' !!}">
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-3">
				<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin vé máy bay</label>
			</div>
			<div class="col-3"></div>
			<div class="col-3"></div>
			<div class="col-3">
				<input type="checkbox" id="paymentAirline" name="paymentAirline" class="form-check-input paymentAirline" {!! $response['airlineStatus'] == 1  ? 'checked' : '' !!} @if($role !=	 1 && $role != 2) disabled="true"   @endif>
				<label>Thanh toán cho phần này</label>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-3">
				<label>Mã đơn máy bay</label>
				<input type="text" type="input" name="airCode" class="form-control airCode" value="{!! $response->airLine != null ? $response->airLine['airCode'] : '' !!}">
                <div class="form-control-feedback">
                    <i class="icon-search4 font-size-base text-muted"></i>
                </div>
			</div>
			<div class="col-3">
				<label>Số lượng vé máy bay</label>
				<input type="text" name="airQuantity" class="form-control common-numeric airQuantity" value="{!! $response->airLine != null ? $response->airLine['airQuantity'] : '' !!}">
                <div class="form-control-feedback">
                    <i class="icon-search4 font-size-base text-muted"></i>
                </div>
			</div>
			<div class="col-3">
				<label>Tiền vé máy bay</label>
				<div class="input-group mb-3">
	  				<input type="text" name="airValue" class="form-control common-currency airValue" value="{!! $response->airLine != null ? $response->airLine['airValue'] : '' !!}">
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
	  				<input type="date" name="fromDate" class="form-control fromDate" value="{!! $response->airLine != null ? $response->airLine['fromDate'] : '' !!}">
					<div class="input-group-append">
					    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-3">
				<label>Ngày bay về</label>
				<div class="input-group mb-3">
	  				<input type="date" name="toDate" class="form-control toDate" value="{!! $response->airLine != null ? $response->airLine['toDate'] : '' !!}">
					<div class="input-group-append">
					    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row" @if($role != 4) style="display: none" @endif>
				<div class="col-3">
				<label>Trạng thái</label>
				<div class="input-group mb-3">
	  				<select class="browser-default custom-select statusAir" name="statusAir" @if($response->airlineStatus == 0) disabled="true"   @endif>
					  	<option {!! $response['statusAir'] == 0  ? 'selected' : '' !!} value="0">Chưa xử lý</option>
					  	<option {!! $response['statusAir'] == 1  ? 'selected' : '' !!} value="1">Đã xử lý</option>
					</select>
				</div>
				</div>
				<div class="col-3">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
		  				<input type="text" name="noteAdminAir" class="form-control noteAdminHotel">
					</div>
				</div>
			</div>
		<hr>
		
			<div class="row">
				<div class="col-3">
					<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin khách sạn</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentHotel" name="paymentHotel" class="form-check-input paymentHotel" {!! $response['hotelStatus'] == 1  ? 'checked' : '' !!} @if($role != 1 && $role != 2) disabled="true"   @endif>
					<label style="">Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Người lớn(>12 tuổi)</label>
					<select class="browser-default custom-select">
					  	<option selected>01</option>
					</select>
				</div>
				<div class="col-3">
					<label>Trẻ em(4-12 tuổi)</label>
					<select class="browser-default custom-select">
					  	<option selected>03</option>
					</select>
				</div>
				<div class="col-3">
					<label>Em bé(<4 tuổi)</label>
					<select class="browser-default custom-select">
					  	<option selected>03</option>
					</select>
				</div>
				<div class="col-3">
					<label>Danh sách khách hàng</label>
					<textarea cols="30" rows="3" name="listCustomer" class="form-control listCustomer" style="font-size: 12px">@if($response['listCustomer'] != null)@foreach($response['listCustomer'] as $customer){!! $customer !!}&#13;&#10;@endforeach @endif
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
					<input type="checkbox" id="checkin_out" name="checkin_out" class="form-check-input">
				    <label class="form-check-label" for="gridCheck">
				    	Chọn trùng theo vé máy bay
				    </label>
				</div>
				<div class="col-3">
					<div class="input-group mb-3">
		  				<input type="text" class="form-control dateCheck">
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<select class="browser-default custom-select">
					  	<option selected>Son môi Hồ Ngọc Hà</option>
					</select>
				</div>
				<table id="tblhotel" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th width="13%">Ngày</th>
                        <th width="10%">Tên khách sạn</th>
                        <th width="10%">Hạng phòng</th>
                        <th width="10%">Giường</th>
                        <th width="10%">Gói mua</th>
                        <th width="5%">Số lượng</th>
                        <th width="10%">Tiền phòng</th>
                        <th>Phụ thu loại</th>
                        <th>Số lượng</th>
                        <th>CP phụ thu</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                	<tr>
                		<td>
                			<input type="text" name="dateHotel" class="form-control dateHotel date">
                		</td>
                		<td>
                			<!-- <select name="nameHotel" class="browser-default custom-select form-control">
							  	<option selected value="Vinmart">Vinmart</option>
							</select> -->
							<input type="text" name="nameHotel" class="form-control nameHotel">
                		</td>
                		<td>
                			<!-- <select name="levelHotel" class="browser-default custom-select form-control">
							  	<option selected value="5 sao">5 sao</option>
							</select> -->
							<input type="text" name="levelHotel" class="form-control levelHotel">
                		</td>
                		<td>
                			<!-- <select name="bedHotel" class="browser-default custom-select form-control">
							  	<option selected value="Double">Double</option>
							</select> -->
							<input type="text" name="bedHotel" class="form-control bedHotel">
                		</td>
                		<td>
                			<!-- <select name="comboHotel" class="browser-default custom-select">
							  	<option selected value="BB: ăn sáng">BB: ăn sáng</option>
							</select> -->
							<input type="text" name="comboHotel" class="form-control comboHotel">
                		</td>
                		<td>
                			<input type="text" name="numberHotel" class="form-control numberHotel common-numeric">
                		</td>
                		<td>
                			<input type="text" name="valueHotel" class="form-control valueHotel common-currency">
                		</td>
                		<td>
                			<input type="text" name="typeSurcharge" class="form-control typeSurcharge">
                		</td>
                		<td>
                			<input type="text" name="amountHotel" class="form-control amountHotel common-numeric">
                		</td>
                		<td><input type="text" name="surcharge" placeholder="nhập tiền" class="form-control common-currency surcharge"></td>
                		<td></td>
                	</tr>
                	@if($response['hotel'] != null)
	                	@foreach($response['hotel'] as $key => $res)
	                	<tr class="hotel{!! $key !!} updateHotel data">
	                		<td>
		                		<input type="text" name="" class="form-control dateHotel{!! $key !!} date" value="{!! $res['date'] !!}">
	                			<label class="dateLable{!! $key !!}"> {!! $res['date'] !!}</label>
		                	</td>
	                		<td>
		                		
		                		<input type="text" name="" class="form-control nameHotel{!! $key !!}" value="{!! $res['name'] !!}">
	                			<label class="name{!! $key !!}"> {!! $res['name'] !!}</label>
		                	</td>
	                		<td>
		                		
		                		<input type="text" name="" class="form-control levelHotel{!! $key !!}" value="{!! $res['level'] !!}">
	                			<label class="level{!! $key !!}"> {!! $res['level'] !!}</label>
		                	</td>
	                		<td>
		                		
		                		<input type="text" name="" class="form-control bedHotel{!! $key !!}" value="{!! $res['bed'] !!}">
	                			<label class="bed{!! $key !!}"> {!! $res['bed'] !!}</label>
		                	</td>
	                		<td>
		                		
		                		<input type="text" name="" class="form-control comboHotel{!! $key !!}" value="{!! $res['combo'] !!}">
	                			<label class="combo{!! $key !!}"> {!! $res['combo'] !!}</label>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control numberHotel{!! $key !!} common-numeric" value="{!! $res['number'] !!}">
	                			<label class="number{!! $key !!}"> {!! $res['number'] !!}</label>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control valueHotel{!! $key !!} common-currency" value="{!! $res['value'] !!}">
	                			<label class="value{!! $key !!}"> {!! $res['value'] !!}</label>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control typeSurchargeHotel{!! $key !!}" value="{!! $res['typeSurcharge'] !!}">
	                			<label class="typeSurcharge{!! $key !!}"> {!! $res['typeSurcharge'] !!}</label>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control amountHotel{!! $key !!} common-numeric" value="{!! $res['amountHotel'] !!}">
	                			<label class="amountlable{!! $key !!}"> {!! $res['amountHotel'] !!}</label>
		                	</td>
	                		<td>
		                		<input type="text" name="" class="form-control common-currency surchargeHotel{!! $key !!}" value="{!! $res['surcharge'] !!}">
	                			<label class="surcharge{!! $key !!}"> {!! $res['surcharge'] !!}</label>
		                	</td>
	                		<td>
	                			<button type="button" class="btn btn-link saveHotel saveHotel{!! $key !!}" data-id="{!! $key !!}" title="Lưu" style="display: none;">
	                			<i class="fa fa-check-circle" aria-hidden="true"></i>
		                		</button>
		                		<button type="button" class="btn btn-link editHotel" data-id="{!! $key !!}" title="Sửa">
		                			<i class="fa fa-minus-circle" aria-hidden="true"></i>
		                		</button>
	                		</td>
	                	</tr>
	                	@endforeach
	                	@endif
                    </tbody>
                </table>
			</div>
			<div class="row">
				<div class="">Tiền khách sạn: <label class="totalValueHotel">{!! $couthHotel !!}</label> VNĐ</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
				<div class="col-4">
                	<button type="button" class="btn-add addHotel" disabled="true" style="display: none;"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</button>
				</div>
            </div>
			<div class="row">
                <label>Ghi chú</label>
                <input type="text" name="noteHotel" class="form-control">
			</div>
			<div class="row" @if($role != 5) style="display: none" @endif>
				<div class="col-3">
					<label>Trạng thái</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select statusHotel" name="statusHotel" @if($response->hotelStatus == 0) disabled="true" @endif>
						  	<option {!! $response['statusHotel'] == 0  ? 'selected' : '' !!} value="0">Chưa xử lý</option>
						  	<option {!! $response['statusHotel'] == 1  ? 'selected' : '' !!} value="1">Đã xử lý</option>
						</select>
					</div>
				</div>
				<div class="col-3">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
		  				<input type="text" name="noteAdminHotel" class="form-control noteAdminHotel">
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-3">
					<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Dịch vụ khác</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentOther" name="paymentOther" class="form-check-input paymentOther" {!! $response['otherStatus'] == 1  ? 'checked' : '' !!} @if($role != 1 && $role != 2) disabled="true"   @endif>
					<label>Thanh toán cho phần này</label>
				</div>
				<table id="tblOther" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tên dịch vụ <button type="button" class="btn btn-link addOther" disabled="true" style="display: none;"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                        <th>Chi tiết dịch vụ</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                        <th>Ghi chú</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                	<tr>
                		<td>
                			<!-- <select class="browser-default custom-select form-control">
							  	<option selected >Dịch vụ bãi biển</option>
							</select> -->
							<input type="text" name="nameOther" class="form-control nameOther">
                		</td>
                		<td>
                			<!-- <select class="browser-default custom-select form-control">
							  	<option selected>Ngắm san hô dưới nước</option>
							</select> -->
							<input type="text" name="detailOther" class="form-control detailOther">
                		</td>
                		<td>
                			<input type="text" name="amountOther" class="form-control amountOther common-numeric">
                		</td>
                		<td>
                			<input type="text" name="princeOther" class="form-control princeOther common-currency">
                		</td>
                		<td>
                			<input type="text" name="valueOther" class="form-control valueOther common-currency" disabled="">
                		</td>
                		<td>
                			<input type="text" name="noteOther" class="form-control noteOther">
                		</td>
                		<td></td>
                	</tr>
                		@if($response['other'] != null)
	                	@foreach($response['other'] as $key => $res)
                		<tr class='other{!! $key !!} updateOther data'>
		                	<td>
		                		<input type="text" name="" class="form-control nameOther{!! $key !!}" value="{!! $res['nameOther'] !!}">
	                			<label class="name{!! $key !!}"> {!! $res['nameOther'] !!}</label>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control detailOther{!! $key !!}" value="{!! $res['detailOther'] !!}">
                				<label class="detail{!! $key !!}"> {!! $res['detailOther'] !!}</label>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control amountOther{!! $key !!} common-numeric" value="{!! $res['amountOther'] !!}">
                				<label class="amount{!! $key !!}"> {!! $res['amountOther'] !!}</label>
		                	</td>
		                	<td>
		                		<input type="text" name="" class="form-control princeOther{!! $key !!} common-currency" value="{!! $res['princeOther'] !!}">
                				<label class="prince{!! $key !!}"> {!! $res['princeOther'] !!}</label>
		                		</td>
		                	<td>
		                		<input type="text" name="" class="form-control valueOther{!! $key !!} common-currency" value="{!! $res['valueOther'] !!}" disabled="">
	                			<label class="valueLable{!! $key !!}"> {!! $res['valueOther'] !!}</label>
			                </td>
		                	<td>
		                		<input type="text" name="" class="form-control noteOther{!! $key !!}" value="{!! $res['noteOther'] !!}">
	                			<label class="note{!! $key !!}"> {!! $res['noteOther'] !!}</label>
			                </td>
		                	<td>
		                		<button type="button" class="btn btn-link saveOther saveOther{!! $key !!}" data-id="{!! $key !!}" title="Lưu" style="display: none;">
	                			<i class="fa fa-check-circle" aria-hidden="true"></i>
		                		</button>
		                		<button type="button" class="btn btn-link editOther" data-id="{!! $key !!}" title="Sửa">
		                			<i class="fa fa-minus-circle" aria-hidden="true"></i>
		                		</button>
		                	</td>
                		</tr>
	                	@endforeach
	                	@endif
                    </tbody>
                </table>
			</div>
			<div class="row">
				<div class="">Tổng giá trị: <label class="totalValueOther">{!! $countOther !!}</label> VNĐ</div>
			</div>
			<div class="row" @if($role != 6) style="display: none" @endif>
				<div class="col-3">
					<label>Trạng thái</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select statusOther" name="statusOther" @if($response->otherStatus == 0) disabled="true" @endif>
						  	<option {!! $response['statusOther'] == 0  ? 'selected' : '' !!} value="0">Chưa xử lý</option>
						  	<option {!! $response['statusOther'] == 1  ? 'selected' : '' !!} value="1">Đã xử lý</option>
						</select>
					</div>
				</div>
				<div class="col-3">
					<label>Ghi chú vận hành</label>
					<div class="input-group mb-3">
		  				<input type="text" name="noteAdminOther" class="form-control noteAdminHotel">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
			<hr>
			<div class="row">
				<div class="col-3">
					<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin thanh toán</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Tổng giá trị đơn hàng</label>
					<div>
						<div class="input-group mb-3">
						  	<input type="text" class="form-control countPayment" disabled="" value="{!! $coutPayment !!}">
						  	<div class="input-group-append">
						    	<span class="input-group-text" id="basic-addon2" style="font-size: 12px">VNĐ</span>
						  	</div>
						</div>
					</div>
				</div>
				<table id="tblPayment" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tiền <button type="button" class="btn btn-link addPayment" disabled="true" style="display: none;"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
                        <th>Ngày</th>
                        <th>Đính kèm file</th>
                        <th>Nhập mã FT</th>
                        <th>Xác nhận cho nợ</th>
                        <th>Ghi chú</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                	<tr>
                		<td>
                			<input type="text" name="valuePayment" class="form-control valuePayment common-currency">
                		</td>
                		<td>
                			<input type="text" name="datePayment" class="form-control datePayment date">
                		</td>
                		<td>
                			<input type="file" name="imagePayment" class="form-control imagePayment">
                		</td>
                		<td>
                			<input type="text" name="codeFT" class="form-control codeFT" @if($role != 3) disabled @endif>
                		</td>
                		<td>
                			<select class="browser-default custom-select confirm" name="confirm" @if($role != 2) disabled @endif>
							  	<option value="" selected>--Lựa chọn--</option>
							  	<option value="0">Chưa xác nhận</option>
							  	<option value="1">Đã xác nhận</option>
							</select>
                		</td>
                		<td>
                			<input type="text" name="notePayment" class="form-control notePayment">
                		</td>
                	</tr>
                	@if($response['payment'] != null)
                	@foreach($response['payment'] as $key=>$res)
                	<tr class="payment{!! $key !!} updatePayment data">
                		<td>
                			<input type="text" name="" class="form-control valuePayment{!! $key !!} common-currency" value="{!! $res['valuePayment'] !!}">
	                		<label class="valuePayments{!! $key !!}"> {!! $res['valuePayment'] !!}</label>
                		</td>
	                	<td>
	                		<input type="text" name="" class="form-control datePayment{!! $key !!} date" value="{!! $res['datePayment'] !!}">
	                		<label class="datePayments{!! $key !!}"> {!! $res['datePayment'] !!}</label>
	                	</td>
	                	<td>
	                		<input type="file" name="" class="form-control imagePayment{!! $key !!}" value="{!! $res['imagePayment'] !!}">
	                		<label class="imagePayments{!! $key !!}"> {!! $res['imagePayment'] !!}</label>
	                	</td>
	                	<td>
	                		<input type="text" name="" class="form-control codeFT{!! $key !!}" value="{!! $res['codeFT'] !!}" @if($role != 3) disabled @endif>
	                		<label class="codeFTs{!! $key !!}"> {!! $res['codeFT'] !!}</label>
	                	</td>
	                	<td>
	                		<label class="confirms{!! $key !!}"> {!! $res['confirm'] !!}</label>
	                	</td>
	                	<td>
	                		<input type="text" name="" class="form-control notePayment{!! $key !!}" value="{!! $res['notePayment'] !!}">
	                		<label class="notePayments{!! $key !!}"> {!! $res['notePayment'] !!}</label>
	                	</td>
	                	<td>
	                		@if($res['codeFT'] == null)
	                		<button type="button" class="btn btn-link savePayment savePayment{!! $key !!}" data-id="{!! $key !!}" title="Lưu" style="display: none;">
                			<i class="fa fa-check-circle" aria-hidden="true"></i>
	                		</button>
	                		<button type="button" class="btn btn-link editPayment" data-id="{!! $key !!}" title="Sửa">
	                			<i class="fa fa-minus-circle" aria-hidden="true"></i>
	                		</button>
	                		@endif
	                	</td>
                	</tr>
                	@endforeach
                	@endif
                    </tbody>
                </table>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
            <div @if($role != 3 || $role != 4 || $role != 5 || $role != 6) style="display: none" @endif>
            	{!! $role !!}
            </div>
            <hr>
            <div class="form-group">
				<label style="font: Bold 16px Avenir Next Rounded Pro;">Thông tin margin</label>
            </div>
            <div class="form-group">
				<label style="font: Bold 14px Avenir Next Rounded Pro;">Vé máy bay</label>
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
            <div class="form-group">
				<label style="font: Bold 14px Avenir Next Rounded Pro;">Vé Khách sạn</label>
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
            	@if($response['hotel'] != null)
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
                			<input type="" name="" class="form-control common-currency countProfitHotel" style="font-size: 12px">
	                	</td>
                	</tr>
                	@endforeach
                	@endif
                </tbody>
            </table>
            <div class="row">
            	<div class="col-3">
            		<label>Tổng giá nhập khách sạn</label>
            		<input type="text" name="" class="form-control marginHotel common-currency" disabled="true" value="{!! $countSurcharge !!}">
            	</div>
            	<div class="col-3">
            		<label>Tổng giá bán khách sạn</label>
            		<input type="text" name="" class="form-control cin common-currency" disabled="true" value="{!! $couthHotel !!}">
            	</div>
            	<div class="col-3">
            		<label>Tổng lợi nhuận khách sạn</label>
            		<input type="text" name="" class="form-control profitHotel common-currency" disabled="true">
            	</div>
            </div>
	        <div class="form-group">
				<label style="font: Bold 14px Avenir Next Rounded Pro;">Dịch vụ khác</label>
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
            		@if($response['other'] != null)
                	@foreach($response['other'] as $key => $res)
            		<tr class='other{!! $key !!} updateOther data'>
	                	<td>
                			<label class="name{!! $key !!}"> {!! $res['nameOther'] !!}</label>
	                	</td>
	                	<td>
            				<label class="amount{!! $key !!}"> {!! $res['valueOther'] !!}</label>
	                	</td>
	                	<td>
	                		<input type="" name="" class="form-control inCostOther common-currency" style="font-size: 12px">
	                	</td>
            		</tr>
                	@endforeach
                	@endif
                </tbody>
            </table>
            <div class="row">
            	<div class="col-3">
            		<label>Tổng giá dịch vụ</label>
            		<input type="text" name="" class="form-control marginOther common-currency" disabled="true" value="{!! $countOther !!}">
            	</div>
            	<div class="col-3">
            		<label>Tổng giá nhập dịch vụ</label>
            		<input type="text" name="" class="form-control costOther common-currency" disabled="true">
            	</div>
            	<div class="col-3">
            		<label>Tổng lợi nhuận dịch vụ</label>
            		<input type="text" name="" class="form-control profitOther common-currency" disabled="true">
            	</div>
            </div>
            <div class="form-group">
				<label style="font: Bold 14px Avenir Next Rounded Pro;">Tổng lợi nhuận đơn hàng</label>
            </div>
            <div class="row">
            	<div class="col-3">
            		<label>Tổng giá nhập</label>
            		<input type="text" name="" class="form-control countNhap common-currency" disabled="true">
            	</div>
            	<div class="col-3">
            		<label>Tổng giá bán</label>
            		<input type="text" name="" class="form-control countBan common-currency" disabled="true">
            	</div>
            	<div class="col-3">
            		<label>Tổng lợi nhuận đơn hàng</label>
            		<input type="text" name="" class="form-control countProfit common-currency" disabled="true">
            	</div>
            </div>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
	                <button type="button" class="btn-create-order update_order" style="height: 36px">Cập nhật</button>
	                <!-- <button class="btn-create-order">Cập nhật</button> -->
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
	      	$(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
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
                $('.dateCheck').val(checkin+'  -  ' +checkout);
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

	    var index = 0;
	    $('.addHotel').click(function(){
	    	$(this).prop('disabled', true);
	    	++index;
	    	var dateHotel = $('.dateHotel').val();
	    	var nameHotel = $('.nameHotel').val();
	    	var levelHotel = $('.levelHotel').val();
	    	var bedHotel = $('.bedHotel').val();
	    	var comboHotel = $('.comboHotel').val();
	    	var numberHotel = $('.numberHotel').val();
	    	var valueHotel = $('.valueHotel').val();
	    	var typeSurcharge = $('.typeSurcharge').val();
	    	var amountHotel = $('.amountHotel').val();
	    	var surcharge = $('.surcharge').val();
	    	$('.totalValueHotel').text(parseInt($('.totalValueHotel').text()) + parseInt(valueHotel) * parseInt(numberHotel));
	    	$('#tblhotel tbody').append(`<tr class='data'>
	    		<td>`+dateHotel+`</td><td>`+nameHotel+`</td><td>`+levelHotel+`</td><td>`+bedHotel+`</td><td>`+comboHotel+`</td><td>`+numberHotel+`</td><td>`+valueHotel+`</td><td>`+typeSurcharge+`</td><td>`+amountHotel+`</td><td>`+surcharge+`</td><td><button type="button" class="btn btn-link removeRow`+index+`"><i class="remove fa fa-times" aria-hidden="true" style="cursor: pointer;"></i></button></td>
	    		</tr>`);
	    	$('.dateHotel, .nameHotel, .levelHotel, .bedHotel, .comboHotel, .numberHotel, .valueHotel, .amountHotel, .typeSurcharge, .surcharge').val('');
	    });
	    $('.addOther').click(function(){
	    	$(this).prop('disabled', true);
	    	++index;
	    	var nameOther = $('.nameOther').val();
	    	var detailOther = $('.detailOther').val();
	    	var amountOther = $('.amountOther').val();
	    	var princeOther = $('.princeOther').val();
	    	var valueOther = $('.valueOther').val();
	    	var noteOther = $('.noteOther').val();
	    	$('.totalValueOther').text(parseInt($('.totalValueOther').text()) + parseInt(valueOther));
	    	$('#tblOther tbody').append(`<tr class='data'>
	    		<td>`+nameOther+`</td><td>`+detailOther+`</td><td>`+amountOther+`</td><td>`+princeOther+`</td><td>`+valueOther+`</td><td>`+noteOther+`</td><td><button type="button" class="btn btn-link removeRow`+index+`"><i class="remove fa fa-times" aria-hidden="true" style="cursor: pointer;"></i></button></td>
	    		</tr>`);
	    	$('.nameOther, .detailOther, .amountOther, .princeOther, .valueOther, .noteOther').val('');
	    });
	    $('.addPayment').click(function(){
	    	$(this).prop('disabled', true);
	    	++index;
	    	var countValue = $('.countPayment').val();
	    	var valuePayment = $('.valuePayment').val();
	    	$('.countPayment').val(parseInt(valuePayment) + parseInt(countValue));
	    	var datePayment = $('.datePayment').val();
	    	var imagePayment = $('.imagePayment').val();
	    	var codeFT = $('.codeFT').val();
	    	var confirm = $('.confirm').val();
	    	var notePayment = $('.notePayment').val();
	    	$('#tblPayment tbody').append(`<tr class='data'>
	    		<td>`+valuePayment+`</td><td>`+datePayment+`</td><td>`+imagePayment.substr(12, imagePayment.length-1)+`<td>`+codeFT+`</td><td>`+confirm+`</td><td>`+notePayment+`</td></td><td><button type="button" class="btn btn-link removeRow`+index+`"><i class="remove fa fa-times" aria-hidden="true" style="cursor: pointer;"></i></button></td>
	    		</tr>`);
	    	$('.valuePayment, .datePayment, .imagePayment').val('');
	    	// check input checkbox
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
	    $('body').delegate('#tblhotel .remove', 'click', function (){
	    	var countValue = $('.totalValueHotel').text();
	    	console.log(countValue);
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueHotel').text(parseInt(countValue) - parseInt($(this).closest("tr").find("td:eq(5)").text()) * parseInt($(this).closest("tr").find("td:eq(6)").text()));
	    	$(this).closest("tr").remove();
	    });
	    $('body').delegate('#tblOther .remove', 'click', function (){
	    	var countValue = $('.totalValueOther').text();
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueOther').text(parseInt(countValue) - parseInt($(this).closest("tr").find("td:eq(4)").text()));
	    	$(this).closest("tr").remove();
	    });
	    $('body').delegate('#tblPayment .remove', 'click', function (){
	    	var countValue = $('.countPayment').val();
	    	var value = $(this).attr('class');
	    	// xóa tổng giá trị đơn hàng
	    	$('.countPayment').val(parseInt(countValue) - parseInt($(this).closest("tr").find("td:eq(0)").text()));
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


	    $('.updateHotel label').show();
	    $('.updateHotel input:text').hide();
	    $('.editHotel').click(function(){
	    	var id = $(this).data('id');
            $('.hotel'+id+' label').toggle();
            $('.hotel'+id+' input:text').toggle();
            $('.saveHotel'+id).toggle();
	    });
	    $('.saveHotel').click(function(){
	    	var id = $(this).data('id');
	    	$(this).toggle();
	    	console.log(id);
	    	$('.totalValueHotel').text(parseInt($('.totalValueHotel').text()) - parseInt($('.number'+id).text()) * parseInt($('.value'+id).text())  + parseInt($('.numberHotel'+id).val()) * parseInt($('.valueHotel'+id).val()));
	    	$('.dateLable'+id).text($('.dateHotel'+id).val());
	    	$('.name'+id).text($('.nameHotel'+id).val());
	    	$('.level'+id).text($('.levelHotel'+id).val());
	    	$('.bed'+id).text($('.bedHotel'+id).val());
	    	$('.combo'+id).text($('.comboHotel'+id).val());
	    	$('.number'+id).text($('.numberHotel'+id).val());
	    	$('.value'+id).text($('.valueHotel'+id).val());
	    	$('.typeSurcharge'+id).text($('.typeSurchargeHotel'+id).val());
	    	$('.amountlable'+id).text($('.amountHotel'+id).val());
	    	$('.surcharge'+id).text($('.surchargeHotel'+id).val());
	    	$('.hotel'+id+' label').toggle();
            $('.hotel'+id+' input:text').toggle();
	    });


	    $('.updateOther label').show();
	    $('.updateOther input:text').hide();
	    $('.editOther').click(function(){
	    	var id = $(this).data('id');
            $('.other'+id+' label').toggle();
            $('.other'+id+' input:text').toggle();
            $('.saveOther'+id).toggle();
            $('.princeOther'+id+', .amountOther'+id).keyup(function(){
		    	var value = $('.princeOther'+id).val();
		    	var amount = $('.amountOther'+id).val();
		    	$('.valueOther'+id).val(parseInt(value) * parseInt(amount));
		    });
	    });
	    $('.saveOther').click(function(){
	    	var id = $(this).data('id');
	    	$(this).toggle();
	    	console.log(id);
	    	$('.totalValueOther').text(parseInt($('.totalValueOther').text()) - parseInt($('.valueLable'+id).text()) + parseInt($('.valueOther'+id).val()));
	    	$('.name'+id).text($('.nameOther'+id).val());
	    	$('.detail'+id).text($('.detailOther'+id).val());
	    	$('.amount'+id).text($('.amountOther'+id).val());
	    	$('.prince'+id).text($('.princeOther'+id).val());
	    	$('.valueLable'+id).text($('.valueOther'+id).val());
	    	$('.note'+id).text($('.noteOther'+id).val());
	    	$('.other'+id+' label').toggle();
            $('.other'+id+' input:text').toggle();
	    });

	    $('.updatePayment label').show();
	    $('.updatePayment input:text, .updatePayment input:file').hide();
	    $('.editPayment').click(function(){
	    	var id = $(this).data('id');
            $('.payment'+id+' label').toggle();
            $('.payment'+id+' input:text').toggle();
            $('.savePayment'+id).toggle();
	    });
	    $('.savePayment').click(function(){
	    	var id = $(this).data('id');
	    	$(this).toggle();
	    	console.log(id);
	    	$('.countPayment').val(parseInt($('.countPayment').val()) - parseInt($('.valuePayments'+id).text()) + parseInt($('.valuePayment'+id).val()));
	    	$('.valuePayments'+id).text($('.valuePayment'+id).val());
	    	$('.datePayments'+id).text($('.datePayment'+id).val());
	    	$('.imagePayments'+id).text($('.imagePayment'+id).val());
	    	$('.codeFTs'+id).text($('.codeFT'+id).val());
	    	$('.valueLable'+id).text($('.valueOther'+id).val());
	    	$('.notePayments'+id).text($('.notePayment'+id).val());
	    	$('.payment'+id+' label').toggle();
            $('.payment'+id+' input:text, .payment'+id+' input:file').toggle();
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
	    		'airQuantity' : $('.airQuantity').val(),
    			'airValue' : $('.airValue').val(),
    			'fromDate' : $('.fromDate').val(),
    			'toDate' : $('.toDate').val()
	    	};
	    	var hotel = [];
	    	var $hotel = $('#tblhotel .data');
	    	$hotel.each(function(){
				hotel.push({
					date: $(this).find("td:eq(0)").text(),
					name: $(this).find("td:eq(1)").text(),
					level: $(this).find("td:eq(2)").text(),
					bed: $(this).find("td:eq(3)").text(),
					combo: $(this).find("td:eq(4)").text(),
					number: $(this).find("td:eq(5)").text(),
					value: $(this).find("td:eq(6)").text(),
					typeSurcharge: $(this).find("td:eq(7)").text(),
					amountHotel: $(this).find("td:eq(8)").text(),
					surcharge: $(this).find("td:eq(9)").text(),
				});
			});
			var other = [];
			var $other = $('#tblOther .data');
			$other.each(function(){
				other.push({
					nameOther: $(this).find("td:eq(0)").text(),
					detailOther: $(this).find("td:eq(1)").text(),
					amountOther: $(this).find("td:eq(2)").text(),
					princeOther: $(this).find("td:eq(3)").text(),
					valueOther: $(this).find("td:eq(4)").text(),
					noteOther: $(this).find("td:eq(5)").text(),
				});
			});
	        var payment = [];
	        var $payment = $('#tblPayment .data');
	        var number = 0;
	        $payment.each(function(){
	        	payment.push({
					valuePayment: $(this).find("td:eq(0)").text(),
					datePayment: $(this).find("td:eq(1)").text(),
					imagePayment: $(this).find("td:eq(2)").text(),
					codeFT: $(this).find("td:eq(3)").text(),
					confirm: $(this).find("td:eq(4)").text(),
					notePayment: $(this).find("td:eq(5)").text(),
				});
	        });
	        var listCustomer = $('.listCustomer').val().split('\n');
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
				    listCustomer: listCustomer
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
	var aaa  = $('.marginHotel').val();
	var _hotel = 0;
	$('.countProfitHotel').focusout(function(){
		_hotel += parseInt($(this).val());
		$('.marginHotel').val(parseInt(_hotel) + parseInt(aaa));
		$('.profitHotel').val(parseInt($('.cin').val()) - parseInt($('.marginHotel ').val()))
	});
	var marginOther = $('.marginOther').val();
	var _other = 0;
	$('.inCostOther').focusout(function(){
		_other += parseInt($(this).val());
		$('.costOther').val(parseInt(_other));
		$('.profitOther').val(parseInt(marginOther) - parseInt(_other));
	});
	$('.countProfitHotel, .inCostOther').focusout(function(){
		// console.log($('.costOther').val() != 0);
		if($('.costOther').val() == 0){
			var cost = 0;
		}else{
			var cost = $('.costOther').val();
		}
		$('.countNhap').val(parseInt($('.airNhap').val()) + parseInt($('.marginHotel').val()) + parseInt($('.marginOther').val()));
		$('.countBan').val(parseInt($('.airBan').val()) + parseInt($('.cin').val()) + parseInt(cost));
		$('.countProfit').val(parseInt($('.countBan').val()) - parseInt($('.countNhap').val()))
	});
</script>