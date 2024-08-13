@extends('includes.layout')
@section('title','Home')

@section('content')

<div class="container">
            <div class="row">
               <div class="col-md-7">
                  <a href="package.html" class="back-btn text-decoration-none mt-5">
                     <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                     </svg>
                     Back
                  </a>
                  <div class="fs-3 fw-bold my-4">Overview</div>
                  <div class="d-flex flex-wrap mb-4">
                     <div class="d-flex me-3 me-md-4 mb-md-0 mb-3">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M463 192H315.9L271.2 58.6C269 52.1 262.9 48 256 48s-13 4.1-15.2 10.6L196.1 192H48c-8.8 0-16 7.2-16 16 0 .9.1 1.9.3 2.7.2 3.5 1.8 7.4 6.7 11.3l120.9 85.2-46.4 134.9c-2.3 6.5 0 13.8 5.5 18 2.9 2.1 5.6 3.9 9 3.9 3.3 0 7.2-1.7 10-3.6l118-84.1 118 84.1c2.8 2 6.7 3.6 10 3.6 3.4 0 6.1-1.7 8.9-3.9 5.6-4.2 7.8-11.4 5.5-18L352 307.2l119.9-86 2.9-2.5c2.6-2.8 5.2-6.6 5.2-10.7 0-8.8-8.2-16-17-16zm-127.2 92.5c-10 7.2-14.2 20.2-10.2 31.8l30.1 87.7c1.3 3.7-2.9 6.8-6.1 4.6l-77.4-55.2c-4.9-3.5-10.6-5.2-16.3-5.2-5.7 0-11.4 1.7-16.2 5.2l-77.4 55.1c-3.2 2.3-7.4-.9-6.1-4.6l30.1-87.7c4-11.8-.2-24.8-10.3-32l-81-57.1c-3.2-2.2-1.6-7.3 2.3-7.3H196c12 0 22.7-7.7 26.5-19.1l29.6-88.2c1.2-3.6 6.4-3.6 7.6 0l29.6 88.2c3.8 11.4 14.5 19.1 26.5 19.1h97.3c3.9 0 5.5 5 2.3 7.2l-79.6 57.5z"></path>
                        </svg>
                        <span class="ms-2 name"> </span>
                     </div>
                     <div class="d-flex me-3 me-md-4">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                           <path fill="none" d="M0 0h24v24H0V0z"></path>
                           <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V5h16v3z"></path>
                        </svg>
                        <span class="ms-2 calender"></span>
                     </div>
                     <div class="d-flex">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                        </svg>
                        <span class="ms-2 time">  </span>
                     </div>
                  </div>
                  <!--  -->
                  <div class="fs-4 fw-bold my-4">Booking Details
                  </div>
                  <form class="mb-5">
                     <div class="row gy-4">
                        <div class="col-md-6">
                           <label for="Booking-Name" class="form-label">Booking Person Full Name<font color="red">*</font></label>
                           <input type="text" class="form-control form-control-lg" id="Booking_Name" placeholder="">
                        </div>
                        <div class="col-md-6">
                           <label for="" class="form-label">Number of people<font color="red">*</font></label>
                           <div class="input-group quantity">
                              <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="RemoveIcon">
                                       <path d="M19 13H5v-2h14z"></path>
                                    </svg>
                                 </button>
                              </span>
                              <input type="text" name="quant[1]" class="form-control input_number" value="0" min="0" max="30">
                              <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AddIcon">
                                       <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
                                    </svg>
                                 </button>
                              </span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="Whatsapp-Name" class="form-label">Whatsapp Number<font color="red">*</font></label>
                           <input type="number" class="form-control form-control-lg" id="Whatsapp_Name" placeholder="">
                        </div>
                        <div class="col-md-6">
                           <label for="Email-ID" class="form-label">Email ID<font color="red">*</font></label>
                           <input type="email" class="form-control form-control-lg" id="Email_ID" placeholder="">
                        </div>
                        <div class="col-md-6">
                           <label for="decoration" class="form-label">Do you want decoration?<font color="red">*</font></label>
                           <select class="form-select form-select-lg" id="form_select_lg" aria-label="Default select example">
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="Coupon" class="form-label">Coupon Code</label>
                           <div class="input-group input-group-lg">
                              <input type="text" class="form-control coupon_code" placeholder="" aria-label="coupon" aria-describedby="button-addon2">
                              <button class="btn btn-secondary" type="button" id="button-addon2">Appy</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-5">
                  <div class="summary-content p-3  p-md-4 find-us mb-4 h-100">
                     <div class="fs-5 fw-bold mb-4">Booking Summary</div>
                     <div class="d-flex mb-2">
                        <span>Opera Theater (4 People)</span><b class="ms-auto total"></b>
                     </div>
                     <div class="d-flex mb-2">
                        <span>Decoration</span><b class="ms-auto">₹ 0</b>
                     </div>
                     <div class="d-flex mb-2">
                        <span>Extra Person</span><b class="ms-auto extra"></b>
                     </div>
                     <hr>
                     <div class="d-flex mb-2">
                        <span>Subtotal</span><b class="ms-auto sub_total"></b>
                     </div>
                     <hr>
                     <div class="d-flex mb-2 fw-bold">
                        <span>Advance Amount Payable</span><b class="ms-auto advance"></b>
                     </div>
                     <hr>
                     <div class="d-flex mb-2 ">
                        <span>Balance Amount<div class="fs-11"></div></span>
                        <b class="ms-auto balance"></b>
                     </div>
					 <div class="col-md-6">
						<a href="javascript:void(0)" class="btn button-custom rounded-pill px-3 px-lg-12 px-xxl-5 next_occasion">Next Occasion</a>
					  </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <script>
            $(document).ready(function(){
                $('.name').text(localStorage.getItem('name'));
                $('.calender').text(localStorage.getItem('calender'));
                $('.time').text(localStorage.getItem('time'));
                $('.total').text('₹'+''+ localStorage.getItem('total'));
                $('.sub_total').text('₹'+''+ localStorage.getItem('total'));
                $('.advance').text('₹'+''+ localStorage.getItem('advance'));
                $('.fs-11').text('(Payable at the Venue on '+' '+ localStorage.getItem('calender')+')');
                $('.balance').text( localStorage.getItem('total') - localStorage.getItem('advance'));

            });
            function nextOccasion(){
                localStorage.removeItem('extra');
                // console.log('yes');
                var Booking_Name = $('#Booking_Name').val();
                var input_number = $('.input_number').val(); 
                var Whatsapp_Name = $('#Whatsapp_Name').val();
                var Email_ID = $('#Email_ID').val();
                var form_select_lg = $('#form_select_lg').val();
                var coupon_code = $('.coupon_code').val();
                var extra = $('.extra').text();
                // console.log(Booking_Name+input_number+Whatsapp_Name+Email_ID+form_select_lg+coupon_code);
                localStorage.setItem('Booking_Name',Booking_Name)
                localStorage.setItem('input_number',input_number)
                localStorage.setItem('Whatsapp_Name',Whatsapp_Name)
                localStorage.setItem('Email_ID',Email_ID)
                localStorage.setItem('form_select_lg',form_select_lg)
                localStorage.setItem('coupon_code',coupon_code)
                localStorage.setItem('extra',extra)
                window.location.href ='/select-occasion'

            }

            $('.next_occasion').on('click',nextOccasion);
            </script>

@endsection