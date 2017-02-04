<!DOCTYPE html>
<html>
<head>
  <title>Marvell App</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<link href="{{ asset('bs/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('style.css')}}" rel="stylesheet">


  <script src="{{ asset('jquery311.min.js')}}"></script>
  <script src="{{ asset('bs/js/bootstrap.min.js')}}"></script>


<script src="{{ asset('html5shiv.js')}}"></script>
<script src="{{ asset('respond.min.js')}}"></script>
</head>
<body>
  <div class="container">
  @include('navbar')
  @yield('main')

</div>
  @section('footer')
<div id="footer">
<p>&copy 2017. Zeuswork</p>
</div>
</body>
</html>
