<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://necolas.github.com/normalize.css/3.0.1/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat" type="text/css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
  <link rel="stylesheet" href="css/schuelerstyle.css" type="text/css" />
  <title>Module</title>
</head>
<body class="ebs-body">
  <div class="container">
  <header data-scroll-header class="navbar navbar-default navbar-fixed-top ebs-nav" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand ebs-logo" data-scroll href="{{ URL::to('schueler') }}">
            edge<b>badge</b>
          </a>
        </div>
        <div class="collapse navbar-collapse main-navigation ebs-navcollapse">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#profil" class="name"><img src="images/glyphicons_003_user.png" class="img-circle ebs-icon-small" width="30" height="30" /> Max Mustermann</a>
            </li>
            <li>
              <button type="button" class="btn ebs-btn ebs-signout">Abmelden</button>
            </li>
          </ul>
        </div>
      </div>
    </header>
        @yield('content')

  </div>
</body>

</html>