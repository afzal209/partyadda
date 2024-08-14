@extends('includes.layout')
@section('title','aggrement')

@section('content')


<div class="container">
    <a href="select-decoration.html" class="back-btn text-decoration-none mt-5">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true"
            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                clip-rule="evenodd"></path>
        </svg>
        Back
    </a>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="fs-3 fw-bold my-4">Terms & Conditions</div>
            <ol class="ps-4">
                <li class="mb-3 px-0">1) Outside food is strictly not allowed.</li>
                <li class="mb-3 px-0">2) Smoking/Drinking is NOT allowed inside the theater, guests in such activities
                    found will be asked to leave from the premises.</li>
                <li class="mb-3 px-0">3) Children above 5 years are chargeable</li>
                <li class="mb-3 px-0">4) Any DAMAGE caused to theater, including decorative materials like balloons,
                    lights, flowers etc. will have to be reimbursed.</li>
                <li class="mb-3 px-0">5) Guests are requested to maintain CLEANLINESS inside the theater, else cleaning
                    charges will be charged up to 1000rs. Party Poppers, snow spray, sparkle candles are strictly
                    prohibited</li>
                <li class="mb-3 px-0">6) Vacate the theatre with all your belongings on or before end time. We are not
                    responsible for your personal belongings</li>
                <li class="mb-3 px-0">7) If we are informed of the cancellation or reschedule of the booking via
                    WhatsApp chat or a call at least 72 hours before the booking, the advance amount will be fully
                    refunded within 2 to 3 hours.</li>
                <li class="mb-3 px-0">8) Reschedule & Cancellation or is not available for bookings done within 72hours
                    before the booking slot time.</li>
                <li class="mb-3 px-0">9) Minors should be accompanied by their elders, Valid ID proof is required before
                    admission into theatre rooms,</li>
                <li class="mb-3 px-0">10) There won't be any more time allowed after the designated booking hours</li>
                <li class="mb-3 px-0">11) If there is any failure in the working of the projector, internet access or
                    sound system, we will reimburse the paid amount after deducting the rent for the period of time
                    before interruption.</li>
            </ol>
            <div class="fw-bold mt-5">
                <div class="fs-5 mb-2">Refund Policy</div>
                Advance amount is fully refundable if slot is cancelled at least 72 hrs before the slot time. If your
                slot is less than 72 hrs away from time of payment then advance is non-refundable.
            </div>
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">I agree to the above Terms & Conditions.</label>
            </div>
            <button class="btn button-custom rounded-pill px-3 px-lg-4 px-xxl-5 my-5 w-100" id="pay_now">Pay
                Now</button>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#pay_now').attr('disabled', 'disabled');
    // e.preventDefault();
    //    alert('yes'); 
    $($('#flexCheckDefault')).on('click', function() {
        if ($('#flexCheckDefault').is(':checked')) {
            // console.log('yes');
            $('#pay_now').removeAttr('disabled');
        } else {
            $('#pay_now').attr('disabled', 'disabled');
        }
    })
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#pay_now').on('click', function(e) {
        e.preventDefault();
        var name = localStorage.getItem('name');
        var calender = localStorage.getItem('calender');
        var time = localStorage.getItem('time');
        var cake_price = localStorage.getItem('cake').match(/\d+/)[0];
        var Booking_Name = localStorage.getItem('Booking_Name')
        var input_number = localStorage.getItem('input_number')
        var Whatsapp_Name = localStorage.getItem('Whatsapp_Name')
        var Email_ID = localStorage.getItem('Email_ID', Email_ID)
        var form_select_lg = localStorage.getItem('form_select_lg')
        var coupon_code = localStorage.getItem('coupon_code')
        var extra = localStorage.getItem('extra', extra)
        var cake_name = localStorage.getItem('multiCakeContent');
        var decoration_price = localStorage.getItem('multi_decoration').match(/\d+/)[0];
        var decoration_name = localStorage.getItem('multiDecorationContent');
        var total = localStorage.getItem('after_decoration_balance_select');
        var sub_total = localStorage.getItem('after_decoration_sub_total_select').match(/\d+/)[0];
        var advance = localStorage.getItem('advance');

        console.log(name+':'+calender);
        $.ajax({
            url: "{{ url('aggrement/booking') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "name" :  name,
                "calender" :  calender,
                "time" :  time,
                "Booking_Name" : Booking_Name,
                "input_number" :  input_number,
                "Whatsapp_Name" :  Whatsapp_Name,
                "Email_ID" :  Email_ID,
                "form_select_lg" :  form_select_lg,
                "coupon_code" :  coupon_code,
                "extra" :  extra,
                "cake_price" :  cake_price,
                "cake_name" :  cake_name,
                "decoration_price" :  decoration_price,
                "decoration_name" :  decoration_name,
                "total" :  total,
                "sub_total" :  sub_total,
                "advance" :  advance,
            },
            success: function(data) {
                // console.log(data);
                // console.log(data['doneMessage']);
                if (data['doneMessage'] == 'yes') {
                    localStorage.removeItem('name');
                    localStorage.removeItem('calender');
                    localStorage.removeItem('time');
                    localStorage.removeItem('total');
                    localStorage.removeItem('advance');
                    localStorage.removeItem('name');
                    localStorage.removeItem('Booking_Name');
                    localStorage.removeItem('input_number');
                    localStorage.removeItem('Whatsapp_Name');
                    localStorage.removeItem('Email_ID');
                    window.location.href = '/thank_you';
                }
                


            }
        });
    })

});
</script>
@endsection