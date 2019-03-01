@extends('site.layouts.loginregister')


@section('content')
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <a href="Login" class="link-to">Login</a> or <a href="Register" class="link-to {{$registeractive}}">Register</a>
                            </div>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Username</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Repeat password</label>
                                    <input type="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
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
