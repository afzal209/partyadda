@extends('includes.layout')
@section('title','Select Occasion')

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
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_birthday.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Birthday</p>
                              <div class="price">₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_anniversary.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Anniversary</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_romantic_date.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Romantic Date</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_marriage_proposal.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Proposal</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_congratulations.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Congratulations</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_bride_to_be.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Bride to be</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_baby_shower.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Baby Shower</p>
                              <div>₹ 600</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3">
                           <label class="select-option text-center">
                              <input type="radio" name="check" value="600" class="main_div">
                              <div class="frame"><img src="assets/img/event_farewell.webp" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0">Farewell</p>
                              <div>₹ 600</div>
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
                        <span>Occasion Decoration</span><b class="ms-auto decoration"></b>
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
						<a href="javascript:void(0)" class="btn button-custom rounded-pill px-3 px-lg-12 px-xxl-5 next_cake">Next Cake</a>
					  </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <script>
            $(document).ready(function(){
                var left_advance = localStorage.getItem('total') - localStorage.getItem('advance');
                $('.name').text(localStorage.getItem('name'));
                $('.calender').text(localStorage.getItem('calender'));
                $('.time').text(localStorage.getItem('time'));
                $('.total').text('₹ '+''+ localStorage.getItem('total'));
                $('.sub_total').text('₹ '+''+ localStorage.getItem('total'));
                $('.advance').text('₹ '+''+ localStorage.getItem('advance'));
                $('.fs-11').text('(Payable at the Venue on '+' '+ localStorage.getItem('calender')+')');
                $('.balance').text('₹ '+ left_advance);

            });
            
            function getDecoration(){
                var price = 0;
                var balance_total = 0;
                $('.decoration').text('');
                var left_advance = localStorage.getItem('total') - localStorage.getItem('advance');
                price = $('.main_div').val();
                console.log(price);
                // var price_change = price.match(/\d+/)[0];
                // console.log($(this).val());
                $('.sub_total').text('₹ '+ (parseFloat(localStorage.getItem('total')) + parseFloat(price)));
                $('.decoration').text('₹ '+ price);
                 balance_total = left_advance;
                var result =  parseFloat(balance_total) + parseFloat(price);
                // console.log(result);
                $('.balance').text('₹ '+result);
                // console.log($(this).find('.price').text());
            }

            $('.main_div').on('click',getDecoration);
            function redirect_cake(){
                // alert('yes');
                var after_decoration = $('.balance').text();
                localStorage.setItem('after_decoration',after_decoration.match(/\d+/)[0]);
                localStorage.setItem('after_decoration_sub_total',$('.sub_total').text());
                localStorage.setItem('decoration',$('.decoration').text());
                window.location.href = '/select-cake';
            }
            $('.next_cake').on('click',redirect_cake)
            </script>

         @endsection