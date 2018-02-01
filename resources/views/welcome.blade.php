<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Terabook</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icon-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/app.css' )}}" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/slick.css' )}}" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/slick-theme.css' )}}" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/estilo.css' )}}" crossorigin="anonymous">


        <!-- Styles -->

    </head>
    <body>
        <div id="app">
          <router-link to="/"></router-link>
          <router-link to="/login"></router-link>
          <router-view>
          </router-view>
        </div>
          <script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/app.js')}}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/slick.js')}}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/validationBootstrap.min.js')}}"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.min.js"></script>--> <!--libreria de ajax-->
    </body>
</html>
