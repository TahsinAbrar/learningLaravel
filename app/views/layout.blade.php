<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learning Laravel App</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
  <ul>
      <li><a href="/">Home</a></li>
      <li><a href="about">About</a></li>
      <li><a href="contact">Contact</a></li>
  </ul>
  @yield('content')
  {{--Adding jQuery CDN --}}
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>