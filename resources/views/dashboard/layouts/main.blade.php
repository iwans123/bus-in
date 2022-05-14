<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Rampcheck</title>
    <link rel="icon" href="{{ url('css/favicon.png') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .bg-image{
        background-repeat: no-repeat;
        position: relative;
        /* min-height: 100vh; */
      }
      .bg-image::before{
        content: '';
        background: url('/css/dishub.png');
        background-position-x: 50%;
        background-position-y: 140px;
        background-size: 30% 70%;
        background-repeat: no-repeat;
        position: fixed;
        z-index: -1;
        top: 0px;
        right: 0px;
        left: 0px;
        bottom: 0px;
        /* height: 100vh; */
        opacity: 50%
      }
      .bg-transparant{
          background-color: rgb(223, 223, 222,0.75);
      }
      .bg-after{
          position: relative;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media (max-width: 768px) {
        .bg-image{
            /* height: 120vh; */
        }
        .bg-image::before{
        background-size: 90%;
        /* height: 120vh; */
      }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/navbar.css" rel="stylesheet">
  </head>
<body >
<main>
    @include('dashboard.layouts.navbar')
    <div class="container-fluid bg-image bg-image::before">
        @yield('container')
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
