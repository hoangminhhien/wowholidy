<!DOCTYPE html>
<html>
<head>
	<title>wowholiday</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<style type="text/css">
		body{
			font-size: 12px;
			background-color: #dadada
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
			background-color: #dadada
		}
		#form_border{
			background-color: #FFFFFF
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
	<form method="POST" enctype="multipart/form-data" id="formOrder">
		@csrf
	<div id="wrapper">
			<label class="title">Form nhập thông tin đơn hàng</label>
		<div class="row form-group">
			<div class="col-3"></div>
			<div class="col-3">Tên sale</div>
			<div class="col-3">Team</div>
			<div class="col-3">Loại khách hàng</div>
		</div>
		<div class="row form-group">
			<div class="col-3"><label style="font-size:14px; font-weight: bolder ">Thông tin chung</label></div>
			<div class="col-3">
				<!-- <select class="browser-default custom-select">
				  	<option selected>Nguyễn Văn A</option>
				  	<option value="1">Nguyễn Văn B</option>
				  	<option value="2">Nguyễn Văn C</option>
				  	<option value="3">Nguyễn Văn D</option>
				</select> -->
				<input type="text" name="nameSaler" class="form-control nameSaler" value="{!! $email !!}" disabled="true">
			</div>
			<div class="col-3">
				<input type="text" name="nameTeam" class="form-control nameTeam" >
				<!-- <input type="" name="" value="Nguyễn Văn A" disabled="" class="form-control" > -->
			</div>
			<div class="col-3">
				<!-- <input type="text" name="typeCustomer" class="form-control typeCustomer" > -->
				<select class="browser-default custom-select typeCustomer" name="typeCustomer">
				  	<option value="" selected>--Lựa chọn--</option>
				  	<option value="B2B">B2B</option>
				  	<option value="B2B">B2C</option>
				</select>
			</div>
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<label style="font-size:14px; font-weight: bolder " >Thông tin đơn hàng</label>
			<div class="row form-group">
				<div class="col-3">
					<label>Loại combo <strong>*</strong></label>
					<select class="browser-default custom-select typeCombo" name="typeCombo">
					  	<option value="" selected>--Lựa chọn--</option>
					  	<option value="Vi vu Phú Quốc">Vi vu Phú Quốc</option>
					  	<option value="Vi vu Quy Nhơn">Vi vu Quy Nhơn</option>
					  	<option value="Vi vu Hội An">Vi vu Hội An</option>
					  	<option value="Vi vu Nha Trang">Vi vu Nha Trang</option>
					</select>
				</div>
				<div class="col-3">
					<label>Mã contact <strong>*</strong></label>
					<input type="text" name="contactCode" class="form-control contactCode">
				</div>
				<div class="col-3">
					<label>Họ và tên khách đại diện <strong>*</strong></label>
					<input type="text" name="nameCustomer" class="form-control nameCustomer">
				</div>
				<div class="col-3">
					<label>Số điện thoại khách đại diện <strong>*</strong></label>
					<input type="text" name="phoneCustomer" class="form-control phoneCustomer common-number">
				</div>
				<div class="col-3">
					<label>Email khác đại diện <strong>*</strong></label>
					<input type="text" name="mailCustomer" class="form-control mailCustomer email">
				</div>
				<div class="col-3">
					<label>Quốc tịch <strong>*</strong></label>
					<input type="text" name="country" class="form-control country" value="Việt Nam">
				</div>
				<div class="col-3">
					<label>Mã combo</label>
					<input type="text" name="codeCombo" class="form-control codeCombo">
				</div>
				<div class="col-3">
					<label>Level đơn hàng</label>
					<div class="input-group mb-3">
		  				<select class="browser-default custom-select levelOrder" name="levelOrder">
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
			</div>
		</div>
		<hr>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder " >Thông tin vé máy bay</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentAirline" name="paymentAirline" class="form-check-input paymentAirline" disabled="true">
					<label>Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-3">
					<label>Mã đơn máy bay</label>
					<input type="text" type="input" name="airCode" class="form-control airCode">
	                <div class="form-control-feedback">
	                    <i class="icon-search4 font-size-base text-muted"></i>
	                </div>
				</div>
				<div class="col-3">
					<label>Tiền vé máy bay</label>
					<div class="input-group mb-3">
		  				<input type="text" name="airValue" class="form-control common-currency airValue">
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2" style="font-size: 12px">VNĐ</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<label>Ngày bay đi</label>
					<div class="input-group mb-3">
		  				<input type="date" name="fromDate" class="form-control fromDate">
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-3">
					<label>Ngày bay về</label>
					<div class="input-group mb-3">
		  				<input type="date" name="toDate" class="form-control toDate">
						<div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder " >Thông tin khách sạn</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentHotel" name="paymentHotel" class="form-check-input paymentHotel" disabled="true">
					<label style="">Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Người lớn(>12 tuổi)</label>
					<input type="text" name="adult" class="form-control adult common-numeric">
				</div>
				<div class="col-3">
					<label>Trẻ em(4-12 tuổi)</label>
					<input type="text" name="children" class="form-control children common-numeric">
				</div>
				<div class="col-3">
					<label>Em bé(<4 tuổi)</label>
					<input type="text" name="baby" class="form-control baby common-numeric">
				</div>
				<div class="col-3">
					<label>Danh sách khách hàng</label>
					<textarea cols="30" rows="3" name="listCustomer" class="form-control listCustomer" style="font-size: 12px"></textarea>
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
					<select class="browser-default custom-select ctkm">
					  	<option value="Son môi Hồ Ngọc Hà">Son môi Hồ Ngọc Hà</option>
					  	<option value="WowHoliday">WowHoliday</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tblhotel" class="table table-xs data-table table-bordered">
	                    <thead>
	                    <tr>
	                        <th width="13%">Ngày<button type="button" class="btn btn-link addHotel"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
	                        <th width="10%">Tên khách sạn</th>
	                        <th width="10%">Hạng phòng</th>
	                        <th width="10%">Giường</th>
	                        <th width="10%">Gói mua</th>
	                        <th width="5%">Số lượng</th>
	                        <th width="10%">Đơn giá phòng</th>
	                        <th>Phụ thu loại</th>
	                        <th>Số lượng</th>
	                        <th>CP phụ thu</th>
	                        <th></th>
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
	                		<td>
	                			
	                		</td>
	                	</tr>
	                    </tbody>
	                </table>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="">Tiền khách sạn: <input type="text" name="" class="totalValueHotel common-currency" value="0" style="border: 0; background-color: transparent;" disabled=""></div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
	                <label>Ghi chú cho sale</label>
	                <input type="text" name="noteHotel" class="form-control noteHotelSale">
				</div>
			</div>
		</div>
			<hr>
		<div id="form_border" class="table table-xs data-table table-bordered" style="border-top:1px solid orange">
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder " >Dịch vụ khác</label>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<input type="checkbox" id="paymentOther" name="paymentOther" class="form-check-input paymentOther" disabled="true">
					<label>Thanh toán cho phần này</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tblOther" class="table table-xs data-table table-bordered">
	                    <thead>
	                    <tr>
	                        <th>Tên dịch vụ <button type="button" class="btn btn-link addOther"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
	                        <th>Chi tiết dịch vụ</th>
	                        <th>Số lượng</th>
	                        <th>Đơn giá</th>
	                        <th>Tổng tiền</th>
	                        <th>Ghi chú</th>
	                        <th></th>
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
	                    </tbody>
	                </table>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="">Tổng giá trị: <input type="text" name="" class="totalValueOther common-currency" value="0" style="border: 0; background-color: transparent;" disabled=""></div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
	                <label>Ghi chú cho sale</label>
	                <input type="text" name="noteHotel" class="form-control noteOtherSale">
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
						<label style="font-size:14px; font-weight: bolder " >Thông tin thanh toán</label>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Tổng giá trị thanh toán</label>
						<div>
							<div class="input-group mb-3">
							  	<input type="text" class="form-control countPayment common-currency" disabled="" value="0">
							</div>
						</div>
					</div>
					<div class="col-3">
						<label>Tổng giá trị đơn hàng</label>
						<div>
							<div class="input-group mb-3">
							  	<input type="text" class="form-control countOrder common-currency" disabled="" value="0">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
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
		                			<input type="date" name="datePayment" class="form-control datePayment date">
		                		</td>
		                		<td>
		                			<input type="file" name="imagePayment" class="form-control imagePayment">
		                		</td>
		                		<td>
		                			<input type="text" name="codeFT" class="form-control codeFT" @if($role != 3) disabled @endif>
		                		</td>
		                		<td>
		                			<select class="browser-default custom-select confirm" name="confirm" @if($role != 2) disabled @endif>
									  	<option value="0">Không cho nợ</option>
									  	<option value="1">Cho nợ</option>
									</select>
		                		</td>
		                		<td>
		                			<input type="text" name="notePayment" class="form-control notePayment">
		                		</td>
		                		<td></td>
		                	</tr>
		                    </tbody>
		                </table>
					</div>
				</div>
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4"></div>
	            </div>
			</div>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
	                <button type="button" class="btn-create-order create_order">Tạo đơn đặt hàng</button>
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
	      	$(this).val(picker.startDate.format('YYYY-MM-DD') + '~' + picker.endDate.format('YYYY-MM-DD'));
	  	});
	  	$('.dateCheck').on('cancel.daterangepicker', function(ev, picker) {
	      	$(this).val('');
	  	});
	  	$('.princeOther, .amountOther').click(function(){
    		var count = $('.totalValueOther').val() != '' ? $('.totalValueOther').val() : 0;
    		var countOrder = $('.countOrder').val() != '' ? $('.countOrder').val() : 0;
    		var countChild = $(this).closest("tr").find("input:eq(4)").val() != '' ? $(this).closest("tr").find("input:eq(4)").val() : 0;
    		console.log(count, countChild);
	    	$(this).focusout(function(){
		    	var value = $(this).closest("tr").find("input:eq(3)").val() != '' ? $(this).closest("tr").find("input:eq(3)").val() : 0;
		    	var amount = $(this).closest("tr").find("input:eq(2)").val() != '' ?$(this).closest("tr").find("input:eq(2)").val() : 0;
		    	$(this).closest("tr").find("input:eq(4)").val(parseInt(value) * parseInt(amount));
		    	$('.totalValueOther').val(parseInt(count) - parseInt(countChild) + parseInt(value) * parseInt(amount));
		    	$('.countOrder').val(parseInt(countOrder) - parseInt(countChild) + parseInt(value) * parseInt(amount));
		    });
    	});
	    $('#checkin_out').click(function(){
	    	var checkin = $('.fromDate ').val();
	    	var checkout = $('.toDate').val();
	    	// console.log(checkin, checkout, 111);
	    	if($(this).prop("checked") == true){
                $('.dateCheck').val(checkin+'~' +checkout);
            }
            else if($(this).prop("checked") == false){
                $('.dateCheck').val('');
            }
	    });
	    $('.airValue').click(function(){
	    	var firstVal = $(this).val() != '' ? $(this).val() : 0;
	    	var count = $('.countOrder').val();
	    	$(this).focusout(function(){
	    		var val = $(this).val() != '' ? $(this).val() : 0;
	    		$('.countOrder').val(parseInt(count) - parseInt(firstVal) + parseInt(val));
	    	});
	    });
	    $('#formOrder').validate({
            rules: {
            	typeCombo: {
                    required: true,
                },
                contactCode: {
                    required: true,
                },
                nameCustomer: {
                    required: true,
                },
                phoneCustomer: {
                    required: true,
                },
                mailCustomer: {
                    required: true,
                },
                country: {
                    required: true,
                },
            },
            messages: {
            	typeCombo: {
            		required: "Chưa chọn loại combo",
            	},
                contactCode: {
                        required: "Không được để trống",
                    },
                nameCustomer: {
                    required: "Không được để trống",
                },
                phoneCustomer: {
                    required: "Không được để trống",
                },
                mailCustomer: {
                    required: "Không được để trống",
                },
                country: {
                    required: "Không được để trống",
                },
            }
        });
        $('#formOrder input,select').on('keyup blur, change blur', function () {
            if ($(this).valid()) {
                $('.create_order').prop('disabled', false);
            }else{
                $('.create_order').prop('disabled', true);
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
    		var count = $('.totalValueHotel').val() != '' ? $('.totalValueHotel').val() : 0;
    		var countOrder = $('.countOrder').val() != '' ? $('.countOrder').val() : 0;
    		var countChild = parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0) + parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0);
    			console.log(count, countChild);
	    	$(this).focusout(function(){
		    	var numberHotel = $(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0;
		    	var valueHotel = $(this).closest("tr").find("input:eq(6)").val() != '' ?$(this).closest("tr").find("input:eq(6)").val() : 0;
		    	var amountHotel = $(this).closest("tr").find("input:eq(8)").val() != '' ?$(this).closest("tr").find("input:eq(8)").val() : 0;
		    	var surcharge = $(this).closest("tr").find("input:eq(9)").val() != '' ?$(this).closest("tr").find("input:eq(9)").val() : 0;
		    	console.log(numberHotel, valueHotel, amountHotel, surcharge);
		    	$('.totalValueHotel').val(parseInt(count) - parseInt(countChild) + parseInt(numberHotel) * parseInt(valueHotel) + parseInt(amountHotel) *parseInt(surcharge));
		    	$('.countOrder').val(parseInt(countOrder) - parseInt(count) + parseInt($('.totalValueHotel').val()));
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
	        	$('.totalValueHotel').val(parseInt($('.totalValueHotel').val()) + parseInt($('.numberHotel'+indexHotel).val() != '' ? $('.numberHotel'+indexHotel).val() : 0) * parseInt($('.valueHotel'+indexHotel).val() != '' ? $('.valueHotel'+indexHotel).val() : 0));
	        });
	        $('.surcharge'+indexHotel).focusout(function(){
	        	$('.totalValueHotel').val(parseInt($('.totalValueHotel').val()) + parseInt($('.amountHotel'+indexHotel).val() != '' ? $('.amountHotel'+indexHotel).val() : 0) * parseInt($('.surcharge'+indexHotel).val() != '' ? $('.surcharge'+indexHotel).val() : 0));
	        });
	        $('.numberHotel'+indexHotel+', .valueHotel'+indexHotel+', .amountHotel'+indexHotel+', .surcharge'+indexHotel).click(function(){
	    		var count = $('.totalValueHotel').val() != '' ? $('.totalValueHotel').val() : 0;
	    		var countOrder = $('.countOrder').val() != '' ? $('.countOrder').val() : 0;
	    		var countChild = parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0) + parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0);
	    			console.log(count, countChild);
		    	$(this).focusout(function(){
			    	var numberHotel = $(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0;
			    	var valueHotel = $(this).closest("tr").find("input:eq(6)").val() != '' ?$(this).closest("tr").find("input:eq(6)").val() : 0;
			    	var amountHotel = $(this).closest("tr").find("input:eq(8)").val() != '' ?$(this).closest("tr").find("input:eq(8)").val() : 0;
			    	var surcharge = $(this).closest("tr").find("input:eq(9)").val() != '' ?$(this).closest("tr").find("input:eq(9)").val() : 0;
			    	console.log(numberHotel, valueHotel, amountHotel, surcharge);
			    	$('.totalValueHotel').val(parseInt(count) - parseInt(countChild) + parseInt(numberHotel) * parseInt(valueHotel) + parseInt(amountHotel) *parseInt(surcharge));
			    	$('.countOrder').val(parseInt(countOrder) - parseInt(count) + parseInt($('.totalValueHotel').val()));
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
	    		var count = $('.totalValueOther').val() != '' ? $('.totalValueOther').val() : 0;
	    		var countOrder = $('.countOrder').val() != '' ? $('.countOrder').val() : 0;
	    		var countChild = $(this).closest("tr").find("input:eq(4)").val() != '' ?$(this).closest("tr").find("input:eq(4)").val() : 0;
	    		console.log(count, countChild);
		    	$(this).focusout(function(){
			    	var value = $(this).closest("tr").find("input:eq(3)").val() != '' ? $(this).closest("tr").find("input:eq(3)").val() : 0;
			    	var amount = $(this).closest("tr").find("input:eq(2)").val() != '' ?$(this).closest("tr").find("input:eq(2)").val() : 0;
			    	$(this).closest("tr").find("input:eq(4)").val(parseInt(value) * parseInt(amount));
			    	$('.totalValueOther').val(parseInt(count) - parseInt(countChild) + parseInt(value) * parseInt(amount));
			    	$('.countOrder').val(parseInt(countOrder) - parseInt(countChild) + parseInt(value) * parseInt(amount));
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
	    $('.valuePayment').click(function(){
    		var count = $('.countPayment').val() != '' ? $('.countPayment').val() : 0;
    		var countChild = $(this).val() != '' ? $(this).val() : 0;
	    	$(this).focusout(function(){
		    	$('.countPayment').val(parseInt(count) - parseInt(countChild) + parseInt($(this).val()));
		    	var countValue = $('.countPayment').val();
		    	var valuePayment = $('.valuePayment').val();
		    	$( ".paymentAirline, .paymentHotel, .paymentOther" ).prop( "checked", false);
		    	var datePayment = $('.datePayment').val();
		    	var imagePayment = $('.imagePayment').val();
		    	var codeFT = $('.codeFT').val();
		    	var confirm = $('.confirm').val();
		    	var notePayment = $('.notePayment').val();
		    	// check input checkbox
		    	var countValuePayment = $('.countPayment').val();
		    	if(parseInt($('.airValue').val()) <= parseInt(countValuePayment) && parseInt($('.airValue').val()) > 0){
		    		$( ".paymentAirline" ).prop( "disabled", false );
		    	}else{
		    		$( ".paymentAirline" ).prop( "disabled", true );
		    		$( ".paymentAirline" ).prop( "checked", false );
		    	}
		    	if(parseInt($('.totalValueHotel').val()) <= parseInt(countValuePayment) && parseInt($('.totalValueHotel').val()) > 0){
		    		$( ".paymentHotel" ).prop( "disabled", false );
		    	}else{
		    		$( ".paymentHotel" ).prop( "disabled", true );
		    		$( ".paymentHotel" ).prop( "checked", false );
		    	}
		    	if(parseInt($('.totalValueOther').val()) <= parseInt(countValuePayment) && parseInt($('.totalValueOther').val()) > 0){
		    		$( ".paymentOther" ).prop( "disabled", false );
		    	}else{
		    		$( ".paymentOther" ).prop( "disabled", true );
		    		$( ".paymentOther" ).prop( "checked", false );
		    	}
		    });
    	});
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
		    	$( ".paymentAirline, .paymentHotel, .paymentOther" ).prop( "checked", false);
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
	    $('.paymentAirline').click(function(){
	    	if($(this).is(':checked')){
                if($('.paymentHotel').is(":checked") && $('.paymentOther').is(":not(:checked)")){
                	var totalValueHotel = $('.totalValueHotel').val();
                	var airValue = $('.airValue ').val();
                	if(parseInt(totalValueHotel) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentHotel').prop('checked', false);
                	}
                }else if($('.paymentHotel').is(":not(:checked)") && $('.paymentOther').is(":checked")){
                	var totalValueOther = $('.totalValueOther').val();
                	var airValue = $('.airValue ').val();
                	if(parseInt(totalValueOther) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentOther').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').val();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').val();
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
                	var totalValueHotel = $('.totalValueHotel ').val();
                	if(parseInt(totalValueHotel) + parseInt(airValue) > parseInt($('.countPayment').val())){
                		$('.paymentAirline').prop('checked', false);
                	}
                }else if($('.paymentAirline').is(":not(:checked)") && $('.paymentOther').is(":checked")){
                	var totalValueOther = $('.totalValueOther').val();
                	var totalValueHotel = $('.totalValueHotel ').val();
                	if(parseInt(totalValueHotel) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
                		$('.paymentOther').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').val();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').val();
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
                	var totalValueOther = $('.totalValueOther').val();
                	if(parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
                		$('.paymentAirline').prop('checked', false);
                	}
                }else if($('.paymentAirline').is(":not(:checked)") && $('.paymentHotel').is(":checked")){
                	var totalValueOther = $('.totalValueOther').val();
                	var totalValueHotel = $('.totalValueHotel').val();
                	if(parseInt(totalValueOther) + parseInt(totalValueHotel) > parseInt($('.countPayment').val())){
                		$('.paymentHotel').prop('checked', false);
                	}
                }else{
                	var totalValueHotel = $('.totalValueHotel').val();
                	var airValue = $('.airValue ').val();
                	var totalValueOther = $('.totalValueOther').val();
                	if(parseInt(totalValueHotel) + parseInt(airValue) + parseInt(totalValueOther) > parseInt($('.countPayment').val())){
	                	$('.paymentAirline').prop('checked', false);
	                	$('.paymentHotel').prop('checked', false);
                	}
                }
            }
	    });
	    $('body').delegate('#tblhotel .remove', 'click', function (){
	    	var countValue = $('.totalValueHotel').val();
	    	console.log(countValue);
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueHotel').val(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0)- parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0));
	    	$('.countOrder').val(parseInt($('.countOrder').val()) - parseInt($(this).closest("tr").find("input:eq(5)").val() != '' ? $(this).closest("tr").find("input:eq(5)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(6)").val() != '' ? $(this).closest("tr").find("input:eq(6)").val() : 0)- parseInt($(this).closest("tr").find("input:eq(8)").val() != '' ? $(this).closest("tr").find("input:eq(8)").val() : 0) * parseInt($(this).closest("tr").find("input:eq(9)").val() != '' ? $(this).closest("tr").find("input:eq(9)").val() : 0));
	    	$(this).closest("tr").remove();
	    	if(parseInt($('.totalValueHotel').val()) == 0){
	    		$('.paymentHotel').prop('disabled', true);
	    		$('.paymentHotel').prop( "checked", false );
	    	}
	    });
	    $('body').delegate('#tblOther .remove', 'click', function (){
	    	var countValue = $('.totalValueOther').val();
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueOther').val(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(4)").val() != '' ? $(this).closest("tr").find("input:eq(4)").val() : 0));
	    	$('.countOrder').val(parseInt($('.countOrder').val()) - parseInt($(this).closest("tr").find("input:eq(4)").val() != '' ? $(this).closest("tr").find("input:eq(4)").val() : 0));
	    	$(this).closest("tr").remove();
	    	if(parseInt($('.totalValueOther').val()) == 0){
	    		$('.paymentOther').prop('disabled', true);
	    		$('.paymentOther').prop( "checked", false );
	    	}
	    });
	    $('body').delegate('#tblPayment .remove', 'click', function (){
	    	var countValue = $('.countPayment').val();
	    	var value = $(this).attr('class');
	    	// xóa tổng giá trị đơn hàng
	    	$('.countPayment').val(parseInt(countValue) - parseInt($(this).closest("tr").find("input:eq(0)").val() != '' ? $(this).closest("tr").find("input:eq(0)").val() : 0));
	    	$( ".paymentAirline, .paymentHotel, .paymentOther" ).prop( "checked", false);
	    	$(this).closest("tr").remove();
	    	var countValuePayment = $('.countPayment').val();
	    	if(parseInt($('.airValue').val()) <= parseInt(countValuePayment)){
	    		$( ".paymentAirline" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentAirline" ).prop( "disabled", true );
	    		$( ".paymentAirline" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueHotel').val()) <= parseInt(countValuePayment)){
	    		$( ".paymentHotel" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentHotel" ).prop( "disabled", true );
	    		$( ".paymentHotel" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueOther').val()) <= parseInt(countValuePayment)){
	    		$( ".paymentOther" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentOther" ).prop( "disabled", true );
	    		$( ".paymentOther" ).prop( "checked", false );
	    	}
	    });
	    $('body').delegate('.create_order', 'click', function (){
	    	$('.paymentAirline').is(":checked") ? airlineStatus = 1 : airlineStatus = 0;
		    $('.paymentHotel').is(":checked") ? hotelStatus = 1 : hotelStatus = 0;
		    $('.paymentOther').is(":checked") ? otherStatus = 1 : otherStatus = 0;
	    	var url = '{!! route('order.store') !!}';
	    	var airLine = {
	    		'airCode' : $('.airCode').val(),
    			'airValue' : $('.airValue').val(),
    			'fromDate' : $('.fromDate').val(),
    			'toDate' : $('.toDate').val()
	    	};
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
	        $payment.each(function(){
	        	payment.push({
					valuePayment: $(this).find("input:eq(0)").val(),
					datePayment: $(this).find("input:eq(1)").val(),
					imagePayment: $(this).find("input:eq(2)").val(),
					codeFT: $(this).find("input:eq(3)").val(),
					confirm: $(this).find('option:selected').val(),
					notePayment: $(this).find("input:eq(4)").val(),
				});
	        });
	        console.log(payment);
	        var listCustomer = $('.listCustomer').val().split('\n');
		    $.ajax({
	            url: url,
	            method: 'POST',
	            data: {
		            _token: '{{csrf_token()}}',
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
		            countValue: $('.countOrder').val(),
		            payment: payment,
		            airlineStatus: airlineStatus,
				    hotelStatus: hotelStatus,
				    otherStatus: otherStatus,
				    listCustomer: listCustomer,
				    ctkm: $('.ctkm').val(),
				    adult: $('.adult').val(),
				    children: $('.children').val(),
				    baby: $('.baby').val(),
				    checkin_out: $('.dateCheck').val(),
				    noteOtherSale: $('.noteOtherSale').val(),
				   	noteHotelSale: $('.noteHotelSale').val(),
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