@extends('includes.layout')
@section('title','Select Cake')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <a href="select-occasion.html" class="back-btn text-decoration-none mt-5">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true"
                    height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                Back
            </a>
            <div class="fs-3 fw-bold my-4">Select the Cake</div>
            <!--  -->
            <form class="mb-5">
                <div class="row gy-4">
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Vanilla" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Vanilla</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Strawberry" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Strawberry</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Butterscotch" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Butterscotch</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Chocolate" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Chocolate</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Black Forest" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Black Forest</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Dry Fruit" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Dry Fruit</p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Chocolate Coffee" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Chocolate Coffee<img src="/assets/img/veg.jpg"
                                    style="width:25px;height:25px;" /></p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                    <div class="col-6 col-lg-3 main_div" >
                        <label class="select-option text-center">
                            <input type="checkbox" name="check" value="Chocolate Truffle" 
                                onclick="getAdon($(this),'500')">
                            <div class="frame"><img src="/assets/img/Black_forest.png" class="img-fluid" /><i
                                    class=""></i></div>
                            <p class="fw-bold mb-0"> Chocolate Truffle<img src="/assets/img/nonveg.png"
                                    style="width:25px;height:25px;" /></p>
                            <div>₹ 500</div>
                        </label>
                    </div>
                </div>
                <div class="mt-5 fs-14">(Note:- The cake images provided are for representation purposes only; actual
                    cakes may vary.)</div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="summary-content p-3  p-md-4 find-us mb-4 h-100">
                <div class="fs-5 fw-bold mb-4">Booking Summary</div>
                <div class="d-flex mb-2">
                    <span>Opera Theater (4 People)</span><b class="ms-auto total"></b>
                </div>
                <div class="d-flex mb-2">
                    <span>Birthday Decoration</span><b class="ms-auto decoration"></b>
                </div>
                <div class="d-flex mb-2">
                        <span>Extra Person</span><b class="ms-auto extra"></b>
                     </div>
                <div class="d-flex mb-2">
                    <span class="multi_cake"></span><b class="ms-auto cake"></b>
                </div>
                <!-- <div class="d-flex mb-2">
                        <span>Cake</span><b class="ms-auto cake"></b>
                     </div> -->
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
                    <a href="javascript:void(0)"
                        class="btn button-custom rounded-pill px-3 px-lg-12 px-xxl-5 next_ad_on">Next Special Ad-Ons</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var left_advance = localStorage.getItem('total') - localStorage.getItem('advance');
    $('.name').text(localStorage.getItem('name'));
    $('.calender').text(localStorage.getItem('calender'));
    $('.time').text(localStorage.getItem('time'));
    $('.total').text('₹ ' + '' + localStorage.getItem('after_decoration'));
    $('.sub_total').text(localStorage.getItem('after_decoration_sub_total'));
    $('.decoration').text(localStorage.getItem('decoration'));
    $('.advance').text('₹ ' + '' + localStorage.getItem('advance'));
    $('.fs-11').text('(Payable at the Venue on ' + ' ' + localStorage.getItem('calender') + ')');
    $('.balance').text('₹ ' + '' + localStorage.getItem('after_decoration'));
    $('.extra').text('₹ ' + '' + localStorage.getItem('extra'));

});
var arr = [];
var totalAmount = 0; 
function getAdon(val,amount) {
   var sub_total_cake = localStorage.getItem('after_decoration_sub_total').match(/\d+/)[0];
   var cake_balance =localStorage.getItem('after_decoration').match(/\d+/)[0];
   // console.log(sub_total_cake);
   var name = $(val).val();
    
    if ($(val).is(':checked')) {
        // If the checkbox is checked, add the value to the array and update the total amount
        arr.push(name);
        totalAmount += parseFloat(amount); // Add the amount to the total
        var cake_total_result = parseInt(sub_total_cake) + parseInt(totalAmount);
    var balance_result = parseInt(cake_balance) + parseInt(totalAmount);
    } else {
        // If the checkbox is unchecked, remove the value from the array and update the total amount
        var index = arr.indexOf(name);
        if (index !== -1) {
            arr.splice(index, 1);
            totalAmount -= parseFloat(amount); // Subtract the amount from the total
            var cake_total_result = parseInt(sub_total_cake) - parseInt(totalAmount);
    var balance_result = parseInt(cake_balance) - parseInt(totalAmount);
        }
    }

    console.log(arr);

    // Build the HTML dynamically based on the number of items in the array
    var htmlContent = 'Cake<br>';
    for (var i = 0; i < arr.length; i++) {
        htmlContent += '<small>' + arr[i] + '</small><br>';
    }

    

   //  htmlContent += '<br>Total Amount: $' + totalAmount.toFixed(2); // Display the total amount
    $('.cake').text('₹ ' + '' + totalAmount);
    $('.sub_total').text('₹ ' + '' + cake_total_result);
    $('.balance').text('₹ ' + '' + balance_result);
    
    $('.multi_cake').html(htmlContent);

    localStorage.setItem('multiCakeContent', htmlContent);


}
// $('.main_div').on('click',getAdon);
function redirect_ad_on() {
    var after_cake_ad_on = $('.balance').text();
    localStorage.setItem('after_cake_ad_on', after_cake_ad_on.match(/\d+/)[0]);
    localStorage.setItem('after_cake_ad_on_sub_total', $('.sub_total').text());
    localStorage.setItem('cake', $('.cake').text());
    window.location.href = '/select-decoration';
}
$('.next_ad_on').on('click', redirect_ad_on);
</script>
@endsection