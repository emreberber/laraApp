@extends('frontend.app')

@section('icerik')
<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="row featured-boxes login">
                <div class="col-sm-6">
                    <div class="featured-box featured-box-secundary default info-content">
                        <div class="box-content">
                            <h4>I'm a Returning Customer</h4>
                            <form id="" role="form" method="post" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Username or E-mail Address</label>
                                            <input name="email" type="email" value="" class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <a class="pull-right" href="#">(Lost Password?)</a>
                                            <label>Password</label>
                                            <input name="password" type="password" value="" class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="remember-box checkbox">
                                            <label for="rememberme">
                                                <input type="checkbox" id="rememberme" name="remember">Remember Me
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="featured-box featured-box-secundary default info-content">
                        <div class="box-content">
                            <h4>Register An Account</h4>
                            <form action="" id="" method="post">
                                    {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>E-mail Address</label>
                                            <input type="text" value="" class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Password</label>
                                            <input type="password" value="" class="form-control input-lg">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Re-enter Password</label>
                                            <input type="password" value="" class="form-control input-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Register" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

</div>
@endsection

@section('js')
@endsection

@section('css')
@endsection