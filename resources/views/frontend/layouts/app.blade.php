<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->

    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >


    <link rel="shortcut icon" href="{{asset('frontend-assets/images/icons/favicon.svg')}}" type="image/x-icon" >

    @yield('meta')


    <link rel="stylesheet" href="{{asset('frontend-assets/libraries/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/templatemo-kind-heart-charity.css')}}">
   
    
    @yield('styles')

    <style>
        .site-loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .loader-loading {
            height: 170px;
            width: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 6px solid #ccc;
            border-right-color: #005BAA;
            border-radius: 50%;
            -webkit-animation: rotate 1s infinite linear;
        }

        @-webkit-keyframes rotate {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
   </style>

    @yield('schema')


  </head>
  <body>

    <div class="site-loader">
      <div class="position-relative" style="height: 170px; width:170px;transform:scale(0.7);">
        <div class="loader-loading"></div>
      </div>
    </div>


<!-- Navigation / Header  -->

@include('frontend.layouts.navigation')


<!-- Content Wrapper -->

@yield('content')

<!-- Footer -->
@include('frontend.layouts.footer')

@include('frontend.layouts.scripts')

<script>
    $(document).ready(function () {
        $(".site-loader").css("display","none");
    });
</script>


@stack('js')


</body>
</html>
