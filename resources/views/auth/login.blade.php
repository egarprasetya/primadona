@extends('la.layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body style="background: url(images/halamanawaltape.jpg); background-size: cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>primadona</b></a>
        </div>

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

    <div class="login-box-body">
    <center><font size="6"> LOGIN </font></center>
    <br>
    <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">

            </div><!-- /.col -->
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
    </form>

    @include('auth.partials.social_login')

    

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('la.layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
