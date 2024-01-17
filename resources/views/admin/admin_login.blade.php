<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('/')}}backend/css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Admin Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ url('/admin-dashboard') }}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="admin_email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="admin_email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="admin_password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="admin_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div> <br>
                    @php
                    $message=Session::get('message')
                    @endphp
                    @if($errors->any())
                    <div class="alert alert-danger text-center">
                        {{ $errors->first('message') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>