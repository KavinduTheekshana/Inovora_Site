@extends('site.layouts.loginregister')


@section('content')
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <a href="login.html" class="link-to {{$loginactive}}">Login</a> or <a href="Register" class="link-to">Register</a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Username</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                
                                </div>
                            </div>


                            @if ($errors->has('email'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif


                            <div class="form-row">
                                <div class="col-xs-6">
                                    <a href="{{ route('password.request') }}" class="forget-link">Forget your password?</a>
                                </div>
                                <div class="col-xs-6">
                                    <div class="submit-holder">
                                        <button type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
@endsection