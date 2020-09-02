<!DOCTYPE html>
<html lang="en">
<head>
	<title>Central de Riesgos de Transporte</title>
    <link rel="icon" href="img/favicon.png">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title p-b-43">
						Crea tu Cuenta
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese nombre">
						<input class="input100" @error('name') is-invalid @enderror type="text" name="name"  id="name" type="text"   name="name" value="{{ old('name') }}" required autocomplete="name"  autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input10">Nombre</span>
                        @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere correo electrónico válido: ex@abc.xyz" style="margin-top: 50px;">
						<input class="input100" @error('email') is-invalid @enderror type="text" name="email" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="focus-input100"></span>
                        <span class="label-input10">Correo Electrónico</span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere una contraseña" style="margin-top: 50px;">
						<input id="password" type="password" class="input100" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input10">Contraseña</span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere que confirme la contraseña" style="margin-top: 50px;">
						<input class="input100" type="password"  id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input10">Confirmar Contraseña</span>
                    </div>

                  

					<div class="container-login100-form-btn" style="margin-top: 50px;">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Registrarse
							</button>
						<a href="/login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Iniciar seccion
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
                </form>
                <div class="login100-more" style="background-image: url('img/login.jpg');">
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
