<!DOCTYPE HTML>
<html>
<head>
<title>IT CONTEST 2017</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>

<script>
 new WOW().init();
</script>
</head>
<body>
<div class="header" id="ban">
  <!-- navigation -->
    @include('layouts.partials.navigation')
    @yield('content')
    @include('layouts.partials.footer')
</div>
</body>
</html>
