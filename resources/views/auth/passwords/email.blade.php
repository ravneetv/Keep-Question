@extends('layouts.app')

@section('content')

<div class="login-section">
    <div class="container">
        <div class="login-form">
            <h2>Reset Password</h2>
        </div>
        
        <div class="form">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="button">
                                    <input name="submit" value="Send Password Reset Link" type="submit">
                                </span>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div> -->


                        <!--
                            <span class="hr"><h5>or</h5></span>
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
                                <a class="twiter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Login With Twitter</a>
                            </div>

                            <p class="sgin">Already have a member? <span><a href="{{ URL :: asset('/index') }} ">Login</a></span></p>
                        -->
                        
                    </form>

             

        </div>

    </div>
</div>

@endsection




                   








      
