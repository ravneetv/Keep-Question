@extends('layouts.app')

@section('content')

<div class="login-section">
	<div class="container">
		<div class="login-form">
			<h2>Sign up</h2>
		</div>
		
		<div class="form">

			  <form name="login_form" id="login_form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required="true">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email or username" required="true">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="true">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="true">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="button">
									<input name="submit" value="Sign Up" type="submit">
								</span>
                            </div>
                        </div>


                        <span class="hr"><h5>or</h5></span>
						<div class="social-btn">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
							<a class="google" href="#"><i class="fa fa-google" aria-hidden="true"></i>Login With Google</a>
						</div>
                        <!--<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>-->
                    </form>

                    <p class="sgin">Already have a member? <span><a href="{{ URL :: asset('/login') }} ">Login</a></span></p>

			<!--<form name="login_form" id="login_form" method="post" action="">
				<input type="text" name="text" placeholder="Username" required="">
				<input type="Email" name="text" placeholder="Email or username" required="">
				<input type="password" name="text" placeholder="Password" required="">
				<span class="button">
					<input name="submit" value="Sign Up" type="submit">
				</span>
				<span class="hr"><h5>or</h5></span>
				<div class="social-btn">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
					<a class="twiter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Login With Twitter</a>
				</div>
			</form>

			<p class="sgin">Already have a member? <span><a href="index.html">Login</a></span></p>-->
		</div>

	</div>
</div>

@endsection