<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class bookingController extends Controller
{
    function index(Request $request){
        // return $request;

        $cake_string = $request->cake_name;

        // Remove HTML tags to get a clean cake_string
        $cake_string = str_replace("Cake", "", $cake_string);

        // Remove HTML tags to get a clean cake_string
        $cleancake_string = strip_tags($cake_string, '<br>');

        // Explode the cake_string by the <br> tag to create an array
        $array = array_filter(array_map('trim', explode('<br>', $cleancake_string)));

        // Convert the array to a comma-separated cake_string
        $cake = implode(", ", $array);

        // Output the comma-separated cake_string
        // echo $cake;

        $decoration_string = $request->decoration_name;

        // Remove HTML tags to get a clean decoration_string
        $decoration_string = str_replace("Special Ad-On", "", $decoration_string);

        // Remove HTML tags to get a clean decoration_string
        $cleandecoration_string = strip_tags($decoration_string, '<br>');

        // Explode the decoration_string by the <br> tag to create an array
        $array1 = array_filter(array_map('trim', explode('<br>', $cleandecoration_string)));

        // Convert the array to a comma-separated decoration_string
        $addons = implode(", ", $array1);

        // Output the comma-separated decoration_string
        // echo $addons;

        $date = date('Y-m-d',strtotime($request->calender));
        // print_r($date);
        $Booking = new booking();
        $Booking->name  = $request->Booking_Name;
        $Booking->mobile = $request->Whatsapp_Name;
        $Booking->email = $request->Email_ID;
        $Booking->final_price = $request->total;
        $Booking->date = $request->$date;
        $Booking->theatre = $request->name;
        $Booking->cake = $cake;
        $Booking->addons = $addons;
        $Booking->people = $request->input_number;
        $Booking->save();

        return response()->json(['doneMessage' => 'yes']);

    }
}
