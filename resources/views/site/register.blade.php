@extends('site.layouts.loginregister')


@section('content')
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <a href="Login" class="link-to">Login</a> or <a href="Register" class="link-to {{$registeractive}}">Register</a>
                            </div>
                        </div>
                        <form ole="form" action="{{action('UserController@addUser')}}" method="POST" enctype="multipart/form-data">
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
                                    <label>Username</label>
                                    <input type="text" class="form-control" required name="name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" required name="password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Repeat password</label>
                                    <input type="password" class="form-control" required name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required name="email">
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
