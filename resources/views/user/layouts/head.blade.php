@yield('top-nav')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
    <title>@yield('title')</title>
    
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link Home  CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Link Navbar CSS -->
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <!-- Link Footer CSS -->
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    
  
  </head>

  @yield('css')