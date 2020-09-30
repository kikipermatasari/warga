<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Kaba Warga</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Logopadangpanjang.png/1200px-Logopadangpanjang.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assetlogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('assetlogin/images/background.png'); width: 100%">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" autofocus placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full mt-3">
                        <p style="color:white">
                            Copyright © <?php echo date('Y');?><br>Dinas Kominfo Kota Padang Panjang
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="{{url('vendor/jquery/jquery-3.2.1.min.')}}js"></script>
<!--===============================================================================================-->
    <script src="{{url('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('js/main.js')}}"></script>

</body>
</html>