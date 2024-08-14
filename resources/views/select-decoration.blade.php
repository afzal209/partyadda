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
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Sash" onchange="getDecorationMulti($(this), '149' )">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_birthday.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Sash</p>
                              <div>₹ 149</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Party Props" onchange="getDecorationMulti($(this),'199')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_anniversary.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Party Props</p>
                              <div>₹ 199</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="LED Name" onchange="getDecorationMulti($(this),'199')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_romantic_date.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">LED Name</p>
                              <div>₹ 199</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Message Box" onchange="getDecorationMulti($(this),'99')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_marriage_proposal.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Message Box</p>
                              <div>₹ 99</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Single Rose" onchange="getDecorationMulti($(this),'49')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_congratulations.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Single Rose</p>
                              <div>₹ 49</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Rose Bouque" onchange="getDecorationMulti($(this),'349')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_bride_to_be.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-0 text_value">Rose Bouquet</p>
                              <div>₹ 349</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Photography" onchange="getDecorationMulti($(this),'249')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_baby_shower.webp')}}" class="img-fluid" /><i class=""></i></div>
                              <p class="fw-bold mb-1">Photography <font size="1.2px">15 Min</font></p>
                              <div>₹ 249</div>
                           </label>
                        </div>
                        <div class="col-6 col-lg-3 main_div" id="main_div" >
                           <label class="select-option text-center">
                              <input type="checkbox" name="check" value="Candle Entry" onchange="getDecorationMulti($(this),'199')">
                              <div class="frame"><img src="{{URL::asset('assets/img/event_farewell.webp')}}" class="img-fluid" /><i class=""></i></div>
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
                        <span>Extra Person</span><b class="ms-auto extra"></b>
                     </div>
                     <div class="d-flex mb-2">
                     <span class="multi_cake"></span><b class="ms-auto cake"></b>
                     </div>
                     <div class="d-flex mb-2">
                        <span class="multi"></span><b class="ms-auto multi_decoration"></b>
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
						<a href="javascript:void(0)" class="btn button-custom rounded-pill px-3 px-lg-12 px-xxl-5 pay_and_book">Pay & Book</a>
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
                $('.extra').text('₹ ' + '' + localStorage.getItem('extra'));
                var storedContent = localStorage.getItem('multiCakeContent');
                $('.multi_cake').html(storedContent)

            });
            var arr = [];
var totalAmount = 0; 
          

            function getDecorationMulti(val, amount) {
                var sub_total_decoration = localStorage.getItem('after_cake_ad_on_sub_total').match(/\d+/)[0];
   var decoration_balance =localStorage.getItem('after_cake_ad_on').match(/\d+/)[0];
   // console.log(sub_total_decoration);
   var name = $(val).val();
    
    if ($(val).is(':checked')) {
        // If the checkbox is checked, add the value to the array and update the total amount
        arr.push(name);
        totalAmount += parseFloat(amount); // Add the amount to the total
        var decoration_total_result = parseInt(sub_total_decoration) + parseInt(totalAmount);
    var balance_result = parseInt(decoration_balance) + parseInt(totalAmount);
    } else {
        // If the checkbox is unchecked, remove the value from the array and update the total amount
        var index = arr.indexOf(name);
        if (index !== -1) {
            arr.splice(index, 1);
            totalAmount -= parseFloat(amount); // Subtract the amount from the total
            var decoration_total_result = parseInt(sub_total_decoration) - parseInt(totalAmount);
    var balance_result = parseInt(decoration_balance) - parseInt(totalAmount);
        }
    }

    console.log(arr);

    // Build the HTML dynamically based on the number of items in the array
    var htmlContent = 'Special Ad-On<br>';
    for (var i = 0; i < arr.length; i++) {
        htmlContent += '<small>' + arr[i] + '</small><br>';
    }

    

   //  htmlContent += '<br>Total Amount: $' + totalAmount.toFixed(2); // Display the total amount
    $('.multi_decoration').text('₹ ' + '' + totalAmount);
    $('.sub_total').text('₹ ' + '' + decoration_total_result);
    $('.balance').text('₹ ' + '' + balance_result);
    
    $('.multi').html(htmlContent);

    localStorage.setItem('multiDecorationContent', htmlContent);
            }

            function redirect_pay_and_book() {
    var after_decoration_balance_select = $('.balance').text();
    localStorage.setItem('after_decoration_balance_select', after_decoration_balance_select.match(/\d+/)[0]);
    localStorage.setItem('after_decoration_sub_total_select', $('.sub_total').text());
    localStorage.setItem('multi_decoration', $('.multi_decoration').text());
    window.location.href = '/aggrement';
}
$('.pay_and_book').on('click', redirect_pay_and_book);

//     function updateSelectedValuesDisplay() {
//         $('#selected-values').val(selectedValues.join(', '));
//     }



            // $('.main_div').on('click',getDecorationMulti);
    //         var selectedValues = []; 
    //         $(".main_div").click(function() {
    //     // Get the text inside the .text_value element within the clicked .main_div
    //     var textValue = $(this).find('.text-center').find(".text_value").text();
    //             // console.log(textValue);
    //     // Push the textValue into the array
    //      selectedValues.push(textValue);
    //     console.log(selectedValues);        
    //     // console.log(array_unique(textbox_value)); // Log the array to the console to see the values
    // });
            </script>
@endsection