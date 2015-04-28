@extends('bladetest')


@section('navbar')
<header data-scroll-header class="navbar navbar-default navbar-fixed-top ebs-nav" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand ebs-logo" data-scroll href="#main">
            edge<b>badge</b>
          </a>
        </div>
        <div class="collapse navbar-collapse main-navigation ebs-navcollapse">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#profil" class="name"><img src="glyphicons_003_user.png" class="img-circle ebs-icon-small" width="30" height="30" /> Max Mustermann</a>
            </li>
            <li>
              <button type="button" class="btn ebs-btn ebs-signout">Abmelden</button>
            </li>
          </ul>
        </div>
      </div>
    </header>
@endsection

@section('test')

<p>hallo</p>

@endsection


