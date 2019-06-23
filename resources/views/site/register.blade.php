@extends('site.layouts.loginregister')


@section('content')
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <a href="Login" class="link-to">Login</a> or <a href="Register" class="link-to {{$registeractive}}">Register</a>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                            @endif

                            @if (session('status'))
                                 <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Name</label>
                                    <<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Repeat password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <div class="submit-holder">
                                        <button type="submit">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
@endsection
