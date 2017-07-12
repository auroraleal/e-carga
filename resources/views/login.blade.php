<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<!-- Styles -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Open+Sans">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
	</head>
	<body class="hold-transition login-page">
		<div class="col-md-6 col-md-offset-3">
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<ul>
				@foreach($errors->all() as $error)
					<li>{!! $error !!}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
		<div class="login-box">		
			<div class="login-box-body">
				<div class="login-logo">
					<img height="120" width="350" src="{{ asset('logo.png') }}"/>
				</div>
				<p class="login-box-msg">Insira suas credencias para acessar</p>

				<form method="POST" action="">
					{!! csrf_field() !!}

					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Usuário" name="usuario">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="Senha" name="senha">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
