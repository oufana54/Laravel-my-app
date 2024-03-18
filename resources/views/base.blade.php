<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name') }} - @yield('title')</title>
       
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
       

        
     
    </head>
    <body> 
         <!-- bar de navigation -->
        @include('navbar/navbar')
          <!-- Tous les contenus seront affiché ici -->
       @yield('content')

  <!-- script -->
   @include('script')
 
   
      
    </body>
</html>