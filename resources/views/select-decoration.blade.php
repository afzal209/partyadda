@extends('includes.layout')
@section('title','Select Decoration')

@section('content')

<div class="container">
            <div class="row">
               <div class="col-md-7">
                  <a href="overview.html" class="back-btn text-decoration-none mt-5">
                     <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                     </svg>Back
                  </a>
                  <div class="fs-3 fw-bold my-4">Select Decoration (Optional)</div>
                  <!--  -->
                  <form class="mb-5">
                     <div class="row gy-4">
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_birthday.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Sash</p>
                              <div>₹ 149</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_anniversary.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Party Props</p>
                              <div>₹ 199</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_romantic_date.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">LED Name</p>
                              <div>₹ 199</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_marriage_proposal.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Message Box</p>
                              <div>₹ 99</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_congratulations.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Single Rose</p>
                              <div>₹ 49</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_bride_to_be.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Rose Bouquet</p>
                              <div>₹ 349</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_baby_shower.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-1">Photography <font size="1.2px">15 Min</font></p>
                              <div>₹ 249</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div">
                           <label class="select-option text-center">
                              <input type="checkbox" name="check">
                              <div class="frame"><img src="/assets/img/event_farewell.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Candle Entry</p>
                              <div>₹ 199</div>
                           </label>
                        </div>
					 </div>
                     <div class="mt-5">
                        <label for="exampleFormControlInput1" class="form-label">Nick name of Mom to be *</label>
                        <input type="text" class="form-control form-control-lg w-50" id="exampleFormControlInput1" placeholder="Type here">
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
                        <span>Birthday Occasion</span><b class="ms-auto decoration"></b>
                     </div>
                     <div class="d-flex mb-2">
                        <span>Cake</span><b class="ms-auto cake"></b>
                     </div>
                     <div class="d-flex mb-2">
                        <span>Special Ad-On<br><small> -Party Props</small><br><small> -Message Box</small><br><small> -Photography</small></span><b class="ms-auto">₹ 547</b>
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
						<a href="aggrement.html" class="btn button-custom rounded-pill px-3 px-lg-12 px-xxl-5">Pay & Book</a>
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
                $('.total').text('₹ '+''+ localStorage.getItem('total'));
                $('.sub_total').text(localStorage.getItem('after_cake_ad_on_sub_total'));
                $('.decoration').text( localStorage.getItem('decoration'));
                $('.advance').text('₹ '+''+ localStorage.getItem('advance'));
                $('.fs-11').text('(Payable at the Venue on '+' '+ localStorage.getItem('calender')+')');
                $('.balance').text('₹ '+''+ localStorage.getItem('after_cake_ad_on'));
                $('.cake').text(localStorage.getItem('cake'))
            });
            // function getDecorationMulti(){
            //     var name = $(this).find('.text_value').text();
            //     var arr = [];
            //     arr.push(name);
            //     console.log(arr);
            // }

            // $('.main_div').on('click',getDecorationMulti);
            var selectedValues = []; 
            $(".main_div").click(function() {
        // Get the text inside the .text_value element within the clicked .main_div
        var textValue = $(this).find(".text_value").text();

        // Push the textValue into the array
        selectedValues.push(textValue);

        console.log(selectedValues); // Log the array to the console to see the values
    });
            </script>
@endsection