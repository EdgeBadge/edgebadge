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
					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">First Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fname" value="{{ old('email') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Last Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="lname" value="{{ old('email') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Pic Url</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="picUrl" value="{{ old('email') }}">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" value="{{ old('email') }}">
							</div>
						</div>
                        
                         <div class="form-group">
							<label class="col-md-4 control-label">Biography</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="biography" value="{{ old('email') }}">
							</div>
						</div>
                        
                         <div class="form-group">
							<label class="col-md-4 control-label">RoleID</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="roleID" value="{{ old('email') }}">
							</div>
						</div>

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
