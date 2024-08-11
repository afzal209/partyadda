<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ul2 | @yield('title')</title>
    @include('includes.header')
    <meta name="description" content="Partyadda, a private theater in marthahalli book now for celebrate your special occassions, screening your own content, short movies, cricket live streaming"/>
      <meta name="Keywords" content="Private movie theater, birthday celebration, place for celebration, Private movie screening, private theater in bangalore, party venue, celebration venue, private theater in Marthahalli, Private theater Bangalore, Exclusive cinema experience, VIP theater Bangalore, Luxury cinema Bangalore, Personal cinema room, Home theater setup Bangalore, Custom theater experience, Private screening Bangalore, Boutique cinema Bangalore, Premium cinema experience" data-react-helmet="true"/>
      <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
      <link rel="canonical" href="https://partyadda.com/booknow.php"/>
      <meta name="author" content="Microsharp Technologies, Bengaluru - https://www.microsharp.net">
      <meta name="google-site-verification" content="" />
      <meta property="og:site_name" content="Partyadda">
      <meta property="og:title" content="Partyadda" />
      <meta property="og:description" content="Partyadda, a private theater in marthahalli book now for celebrate your special occassions, screening your own content, short movies, cricket live streaming" />
      <meta property="og:image" content="https://partyadda.com/resources/img/logo.png">
      <meta property="og:type" content="website" />
      <meta property="article:publisher" content="https://www.facebook.com/people/Party-Adda-Private-Theatre/61557507302516/"/>
      <link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    @include('includes.navbar')
    <div class="container-fluid border-top">
        @yield('content')
    </div>
    
    
    @include('includes.footer')
</body>

</html>