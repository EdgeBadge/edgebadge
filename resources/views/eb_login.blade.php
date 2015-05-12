<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <title>EdgeBadge Anmeldung</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login_style.css" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="header">
  <div class="container">
    <div class="col-md-7" id="page-lead">
            <div class="logo">Edge<span class="bold">Badge</span></div>
      <span class="subheading">Badges als Belohnung. Modern. Einfach.</span>
            <div class="" id="bs-example-navbar-collapse-1">
      <button id="signin" title="Sign in by email, with Persona - opens a new window" class="btn btn-sm btn-default"><em>Sign in with Persona</em></button>
      <button id="signout" title="Sign out" style="display: none;">Sign out</button>
                    <span id="span"></span>
                    <script src="https://login.persona.org/include.js"></script>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
            <script>               
                
               var currentUser = null;
               navigator.id.watch({
                  loggedInUser: currentUser,
                  onlogin: function(assertion) {                    
                    $.ajax({ 
                      type: 'POST',
                      url: 'https://login.persona.org/verify', 
                      data: {assertion: assertion, audience: "http://edgebadge.app/home"},
                      success: function(res, status, xhr) {
                          $('#span').text("");
                          $('#span').append("Eingeloggt als: " + res.email);
                          
                              $('<form name="formular" action="/auth/login" method="POST">' + 
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}">' + 
                                '<input type="hidden" name="email" value="' + res.email + '">' +
                                '<input type="hidden" name="pemail" value="' + assertion + '">' +
                                '</form>').submit();
                            
                      },
                      error: function(xhr, status, err) {
                        navigator.id.logout();
                        alert("Login failure: " + err);
                      }
                    });
                  },
                  
                  onlogout: function() {
                      currentUser = null;
                      $('#span').text("");
                      $('#span').text("Sie sind ausgeloggt!");
                  }
                });
           
                var signinLink = document.getElementById('signin'),
                signoutLink = document.getElementById('signout')
                if (signinLink) {
                    signinLink.onclick = function() { navigator.id.request(); };
                };
                if (signoutLink) {
                    signoutLink.onclick = function() { navigator.id.logout(); };
                };
            </script>
          </div>
    </div>
  </div>
</div>
  <script src="script.js"></script>
</body>

</html>
