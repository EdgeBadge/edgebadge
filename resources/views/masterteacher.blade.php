<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/teacher_style.css">

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
  <div class="navbar navbar-default navbar-fixed-top">
        <ul class="list-inline">
          <li><a href="#menu-toggle" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-align-justify"></span></a></li>
          <li><div class="logo">EDGE<span class="bold">BADGE</span></div></li>
        </ul>
        <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('dashboard') }}"><span class="glyphicon glyphicon-home"></span>DASHBOARD</a></li>
          <li><a href="{{ URL::to('badge-erstellen') }}"><span class="glyphicon glyphicon-file"></span>BADGE ERSTELLEN</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-send"></span>BADGE AUSSTELLEN</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog"></span>PROFIL BEARBEITEN</a></li>
        </ul>
    </div>
    
  @yield('content')

    <script>
  $(document).ready(function() {
  $('#dashboard').click(function() {
    $('#ebt-dashboard').css('display', 'block');
    $('#ebt-badge-erstellen').css('display', 'none');
  });
  $('#badge-erstellen').click(function() {
    $('#ebt-dashboard').css('display', 'none');
    $('#ebt-badge-erstellen').css('display', 'block');
  });
  $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(".nav").toggleClass("toggled");
      });
  });
  </script>
</body>
</html>