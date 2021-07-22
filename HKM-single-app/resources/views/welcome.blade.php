<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <link rel="icon" href="../../assets/img/brand/favicon.ico" type="image/x-icon"/>

        <!-- Title -->
        <title>Dashlead -  Admin Panel HTML Dashboard Template</title>

        <!---Fontawesome css-->
        <link href="../../assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!---Ionicons css-->
        <link href="../../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

        <!---Typicons css-->
        <link href="../../assets/plugins/typicons.font/typicons.css" rel="stylesheet">

        <!---Feather css-->
        <link href="../../assets/plugins/feather/feather.css" rel="stylesheet">

        <!---Falg-icons css-->
        <link href="../../assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

        <!---Style css-->
        <link href="{{ URL::asset('assets/css/ap/ap.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/ap/custom-style-ap.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <link href="../../assets/css/skins.css" rel="stylesheet">
        <link href="../../assets/css/dark-style.css" rel="stylesheet">
        <link href="../../assets/css/custom-dark-style.css" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
       <!--  <style type="text/css">
            .hkmtoap .toggle.btn
            {
                width: 50% !important;
            }
            .page
            {
                background-image: url('../../assets/img/brand/login-bg.png');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
 -->
      

        <!-- Styles -->

        <!-- <link rel="stylesheet"  href="{{asset('css/app.css')}}"> -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <div id="app">
           <example-component/>
       </div>

    </body>
    <script src="{{asset('js/app.js')}}"></script>

    <!-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script> -->

        <!-- Bootstrap js-->
      <!-- <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

        <!-- Ionicons js-->
        <!-- <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script> -->

        <!-- Perfect-scrollbar js-->
       <!--  <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script -->

        <!-- Rating js-->
        <!-- <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script> -->

        <!-- Custom js-->
 <!--        <script src="{{ asset('assets/js/custom.js')}}"></script> -->
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</html>
