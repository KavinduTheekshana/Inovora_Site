@extends('site.layouts.loginregister')


@section('content')
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <a href="login.html" class="link-to {{$loginactive}}">Login</a> or <a href="Register" class="link-to">Register</a>
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
                                <div class="col-xs-6">
                                    <a href="#" class="forget-link">Forget your password?</a>
                                </div>
                                <div class="col-xs-6">
                                    <div class="submit-holder">
                                        <button type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
@endsection