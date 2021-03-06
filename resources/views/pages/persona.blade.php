@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				      <button id="signin" title="Sign in by email, with Persona - opens a new window"><em>Sign in</em></button>
                      <button id="signout" title="Sign out">Sign out</button>
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
                      data: {assertion: assertion, audience: "http://edgebadge.app/persona"},
                      success: function(res, status, xhr) {
                          $('#span').text("");
                          $('#span').append("Eingeloggt als: " + res.email);
                          console.log("Eingeloggt");
                          console.log(status);
                          console.log(res);
                          console.log(assertion);  
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
</div>
@endsection