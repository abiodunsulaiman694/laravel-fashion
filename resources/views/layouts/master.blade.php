<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title') -- BRYTA Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{url('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">            
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('css/ion.rangeSlider.css')}}" />
        <link rel="stylesheet" href="{{url('css/ion.rangeSlider.skinFlat.css')}}" />
        <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('css/main.css')}}">
    </head>
    <body>

        <!-- Start Header Area -->
        @include('partials.header')
        <!-- End Header Area -->

        @yield('banner')

        <!-- Start Banner Area -->
        <!-- End Banner Area -->
        @yield('content')
        <!-- Start Cart Area -->
        <!-- End Cart Area -->

        @yield('searched')
        <!-- Start Most Search Product Area -->
        <!-- End Most Search Product Area -->
        @include('partials.footer')
        <!-- End footer Area -->        

        <script src="{{url('js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{url('js/jquery.sticky.js')}}"></script>
        <script src="{{url('js/ion.rangeSlider.js')}}"></script>
        <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('js/owl.carousel.min.js')}}"></script>            
        <script src="{{url('js/main.js')}}"></script>  
    </body>
</html>