
@extends('includes.layout')
@section('title','Home')

@section('content')

<style>
        
        .thank-you-message {
            text-align: center;
        }
    </style>

<div class="container">
        <div class="thank-you-message">
            <h1 class="display-4">Thank You!</h1>
            <p class="lead">We appreciate your feedback.</p>
            <hr class="my-4">
            
            <a class="btn btn-primary btn-lg" href="/" role="button">Go to Homepage</a>
        </div>
    </div>



    @endsection