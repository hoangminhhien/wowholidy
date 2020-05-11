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
			height: 40px;
			border-radius: 4px;
			opacity: 1;
		}
		.btn-add{
			background: #FFC82E 0% 0% no-repeat padding-box;
			width: 120px;
			height: 40px;
			border-radius: 4px;
			opacity: 1;
		}
		hr{
			background-color: orange
		}
		.error{
			color: red
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
		</div>
		<hr>
		<div class="row">
			<div class="col-3">
				<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin vé máy bay</label>
			</div>
			<div class="col-3"></div>
			<div class="col-3"></div>
			<div class="col-3">
				<input type="checkbox" id="paymentAirline" name="paymentAirline" class="form-check-input paymentAirline" {!! $response['airlineStatus'] == 1  ? 'checked' : '' !!}>
				<label>Thanh toán cho phần này</label>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-3">
				<label>Mã đơn máy bay</label>
				<input type="input" name="airCode" class="form-control airCode" value="{!! $response->airLine != null ? $response->airLine['airCode'] : '' !!}">
                <div class="form-control-feedback">
                    <i class="icon-search4 font-size-base text-muted"></i>
                </div>
			</div>
			<div class="col-3">
				<label>Tiền vé máy bay</label>
				<div class="input-group mb-3">
	  				<input type="text" name="airValue" class="form-control common-currency airValue" value="{!! $response->airLine != null ? $response->airLine['airValue'] : '' !!}">
					<div class="input-group-append">
					    <span class="input-group-text" id="basic-addon2">VNĐ</span>
					</div>
				</div>
			</div>
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
		<hr>
		
			<div class="row">
				<div class="col-3">
					<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Thông tin khách sạn</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentHotel" name="paymentHotel" class="form-check-input paymentHotel" {!! $response['hotelStatus'] == 1  ? 'checked' : '' !!}>
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
					<textarea cols="30" rows="2"></textarea>
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
                        <th width="15%">Ngày</th>
                        <th width="15%">Tên khách sạn</th>
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
                		<td><input type="text" name="surcharge" placeholder="nhập tiền" class="form-control surcharge"></td>
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
		                		<input type="text" name="" class="form-control surchargeHotel{!! $key !!}" value="{!! $res['surcharge'] !!}">
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
                	<button type="button" class="btn-add addHotel"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</button>
				</div>
            </div>
				<div class="row">
	                <label>Ghi chú</label>
	                <input type="text" name="noteHotel" class="form-control">
				</div>
			<hr>
			<div class="row">
				<div class="col-3">
					<label style="font: Bold 16px/20px Avenir Next Rounded Pro;">Dịch vụ khác</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentOther" name="paymentOther" class="form-check-input paymentOther" {!! $response['otherStatus'] == 1  ? 'checked' : '' !!}>
					<label>Thanh toán cho phần này</label>
				</div>
				<table id="tblOther" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tên dịch vụ <button type="button" class="btn btn-link addOther"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
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
						    	<span class="input-group-text" id="basic-addon2">VNĐ</span>
						  	</div>
						</div>
					</div>
				</div>
				<table id="tblPayment" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tiền <button type="button" class="btn btn-link addPayment"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
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
                			<input type="text" name="codeFT" class="form-control codeFT" @if($role == 1) disabled @endif>
                		</td>
                		<td>
                			<select class="browser-default custom-select confirm" name="confirm" @if($role == 1) disabled @endif>
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
	                		<input type="text" name="" class="form-control codeFT{!! $key !!}" value="{!! $res['codeFT'] !!}">
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
	                		<button type="button" class="btn btn-link savePayment savePayment{!! $key !!}" data-id="{!! $key !!}" title="Lưu" style="display: none;">
                			<i class="fa fa-check-circle" aria-hidden="true"></i>
	                		</button>
	                		<button type="button" class="btn btn-link editPayment" data-id="{!! $key !!}" title="Sửa">
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
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
	                <button type="button" class="btn-create-order update_order">Cập nhật</button>
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
	    var countOrder = 0;
	    $('.paymentAirline').is(":checked") ? airlineStatus = 1 : airlineStatus = 0;
	    $('.paymentHotel').is(":checked") ? hotelStatus = 1 : hotelStatus = 0;
	    $('.paymentOther').is(":checked") ? otherStatus = 1 : otherStatus = 0;
	    $('.paymentAirline').click(function(){
	    	if($(this).prop("checked") == true){
                airlineStatus = 1;
            }
            else if($(this).prop("checked") == false){
                airlineStatus = 0;
            }
	    });
	    $('.paymentHotel').click(function(){
	    	if($(this).prop("checked") == true){
                hotelStatus = 1;
            }
            else if($(this).prop("checked") == false){
                hotelStatus = 0;
            }
	    });
	    $('.paymentOther').click(function(){
	    	if($(this).prop("checked") == true){
                otherStatus = 1;
            }
            else if($(this).prop("checked") == false){
                otherStatus = 0;
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
	    	countOrder = countOrder + parseInt($('.totalValueHotel').text()) + parseInt($('.totalValueOther').text()) + parseInt($('.airValue').val());
	    	console.log(countOrder);
	    	var url = '{!! route('order.update') !!}';
	    	var airLine = {
	    		'airCode' : $('.airCode').val(),
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
			console.log(hotel);
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
	        		number: ++number,
					valuePayment: $(this).find("td:eq(0)").text(),
					datePayment: $(this).find("td:eq(1)").text(),
					imagePayment: $(this).find("td:eq(2)").text(),
					codeFT: $(this).find("td:eq(3)").text(),
					confirm: $(this).find("td:eq(4)").text(),
					notePayment: $(this).find("td:eq(5)").text(),
				});
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
		            airLine: airLine,
		            hotel: hotel,
		            other: other,
		            countValue: countOrder,
		            payment: payment,
		            airlineStatus: airlineStatus,
				    hotelStatus: hotelStatus,
				    otherStatus: otherStatus
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
</script>