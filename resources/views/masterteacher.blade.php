<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/teacher_style.css">
</head>
<body class="ébt-body">

   <div id="ebt-sidebar">
    <div class="ebt-logo">Edge<span class="bold">Badge</span></div>
    <div class="profil_pic"><img src="images/IMG_1120.jpg" class="img-circle" width="120" height="120"></div>
    <div class="user_name">{{ $firstname }} {{ $lastname }}</div>
    <div class="logout"><button class="ebt-btn ebt-btn-logout"><span class="glyphicon glyphicon-log-out"></span></button></div>
    <ul class="sidebar-nav list-unstyled">
      <li><a href="{{ URL::to('dashboard') }}"><span class="glyphicon glyphicon-home"></span>DASHBOARD</a></li>
      <li><a href="{{ URL::to('badge-erstellen') }}"><span class="glyphicon glyphicon-file"></span>BADGE ERSTELLEN</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-send"></span>BADGE AUSSTELLEN</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>PROFIL BEARBEITEN</a></li>
    </ul>
  </div>
    
  @yield('content')
</body>
</html>