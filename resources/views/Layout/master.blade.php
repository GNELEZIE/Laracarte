<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <title>Laracarte -{{ $title }}</title>
        <style>
                #bt li a{
                    content: '';
                     float: right;
                     color: red;
                 }
           
                   </style>
    </head>
    <body>
        @include('Layout.partials._nav')
       @yield('contenair') 



       <br><br><br><br><br><br><br><br>
      @include('Layout/partials/_footer')
       <script src="//code.jquery.com/jquery.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
