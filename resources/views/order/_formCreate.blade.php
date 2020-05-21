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
		<hr>
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
				<input type="text" name="country" class="form-control country">
			</div>
			<div class="col-3">
				<label>Mã combo</label>
				<input type="text" name="codeCombo" class="form-control codeCombo">
			</div>
			<div class="col-3">
				<label>Level đơn hàng</label>
				<input type="text" name="levelOrder" class="form-control levelOrder">
			</div>
		</div>
		<hr>
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
				<label>Số lượng vé máy bay</label>
				<input type="text" type="input" name="airQuantity" class="form-control common-numeric airQuantity">
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
		</div>
		<div class="row form-group">
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
		<hr>
		
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
			<div class="row">
				<div class="">Tiền khách sạn: <label class="totalValueHotel">0</label> VNĐ</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
				<div class="col-4">
                	<button type="button" class="btn-add addHotel" disabled="true"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</button>
				</div>
            </div>
				<div class="row">
	                <label>Ghi chú</label>
	                <input type="text" name="noteHotel" class="form-control">
				</div>
			<hr>
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
				<table id="tblOther" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tên dịch vụ <button type="button" class="btn btn-link addOther" disabled="true"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
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
                	<tr>
                		
                	</tr>
                    </tbody>
                </table>
			</div>
			<div class="row">
				<div class="">Tổng giá trị: <label class="totalValueOther">0</label> VNĐ</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4"></div>
            </div>
			<hr>
			<div class="row">
				<div class="col-3">
					<label style="font-size:14px; font-weight: bolder " >Thông tin thanh toán</label>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<label>Tổng giá trị đơn hàng</label>
					<div>
						<div class="input-group mb-3">
						  	<input type="text" class="form-control countPayment" disabled="" value="0">
						  	<div class="input-group-append">
						    	<span class="input-group-text" id="basic-addon2" style="font-size: 12px">VNĐ</span>
						  	</div>
						</div>
					</div>
				</div>
				<table id="tblPayment" class="table table-xs data-table table-bordered">
                    <thead>
                    <tr>
                        <th>Tiền <button type="button" class="btn btn-link addPayment" disabled="true"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></th>
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
                	</tr>
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
	    	$('.totalValueHotel').text(parseInt($('.totalValueHotel').text()) + parseInt(valueHotel) * parseInt(numberHotel) + parseInt(amountHotel) * parseInt(surcharge));
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
	    	if(parseInt($('.airValue').val()) <= parseInt(countValuePayment) && parseInt($('.airValue').val()) > 0){
	    		$( ".paymentAirline" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentAirline" ).prop( "disabled", true );
	    		$( ".paymentAirline" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueHotel').text()) <= parseInt(countValuePayment) && parseInt($('.totalValueHotel').text()) > 0){
	    		$( ".paymentHotel" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentHotel" ).prop( "disabled", true );
	    		$( ".paymentHotel" ).prop( "checked", false );
	    	}
	    	if(parseInt($('.totalValueOther').text()) <= parseInt(countValuePayment) && parseInt($('.totalValueOther').text()) > 0){
	    		$( ".paymentOther" ).prop( "disabled", false );
	    	}else{
	    		$( ".paymentOther" ).prop( "disabled", true );
	    		$( ".paymentOther" ).prop( "checked", false );
	    	}
	    });



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



	    $('body').delegate('#tblhotel .remove', 'click', function (){
	    	var countValue = $('.totalValueHotel').text();
	    	console.log(countValue);
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueHotel').text(parseInt(countValue) - parseInt($(this).closest("tr").find("td:eq(5)").text()) * parseInt($(this).closest("tr").find("td:eq(6)").text())- parseInt($(this).closest("tr").find("td:eq(8)").text()) * parseInt($(this).closest("tr").find("td:eq(9)").text()));
	    	$(this).closest("tr").remove();
	    	if(parseInt($('.totalValueHotel').text()) == 0){
	    		$('.paymentHotel').prop('disabled', true);
	    		$('.paymentHotel').prop( "checked", false );
	    	}
	    });
	    $('body').delegate('#tblOther .remove', 'click', function (){
	    	var countValue = $('.totalValueOther').text();
	    	// xóa tổng giá trị đơn hàng
	    	$('.totalValueOther').text(parseInt(countValue) - parseInt($(this).closest("tr").find("td:eq(4)").text()));
	    	$(this).closest("tr").remove();
	    	if(parseInt($('.totalValueOther').text()) == 0){
	    		$('.paymentOther').prop('disabled', true);
	    		$('.paymentOther').prop( "checked", false );
	    	}
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
	    $('body').delegate('.create_order', 'click', function (){
	    	$('.paymentAirline').is(":checked") ? airlineStatus = 1 : airlineStatus = 0;
		    $('.paymentHotel').is(":checked") ? hotelStatus = 1 : hotelStatus = 0;
		    $('.paymentOther').is(":checked") ? otherStatus = 1 : otherStatus = 0;
	    	countOrder = countOrder + parseInt($('.totalValueHotel').text()) + parseInt($('.totalValueOther').text()) + parseInt($('.airValue').val());
	    	var url = '{!! route('order.store') !!}';
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
				    listCustomer: listCustomer,
				    ctkm: $('.ctkm').val(),
				    adult: $('.adult').val(),
				    children: $('.children').val(),
				    baby: $('.baby').val(),
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