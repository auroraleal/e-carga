<!-- Logo -->
<a href="/e-carga/" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini"><b>Carga</b></span>
	<!-- logo for regular state and mobile devices -->
	<span class="logo-lg">e<b>-Carga</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<!-- Navbar Right Menu -->
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<li class="dropdown messages-menu">


			<!-- Notifications Menu -->
			<li class="dropdown notifications-menu">
				<!-- Menu toggle button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-bell-o"></i>
					<!--span class="label label-danger">{{ Session::get('totalAVencer') }}</span-->
					<span class="label label-danger">10</span>
				</a>
				<ul class="dropdown-menu">
					<!--li class="header">Existem {{ Session::get('totalAVencer') }} convênios a vencer</li-->
					<li class="header" style="text-align : center"><strong>Existem alertas</strong></li>
					<li>
						<!-- Inner Menu: contains the notifications -->
						<ul class="menu">
							<li><!-- start notification -->
								<a href="/principal/convenio/vence-em/10">
									<!--i class="fa fa-file-o"></i> {{ Session::get('qtdVencerEm10Dias') }} convênios vencem em 10 dias -->
									<i class="fa fa-file-o"></i> alerta 1
								</a>
								<a href="/principal/convenio/vence-em/30">
									<!--i class="fa fa-file-o"></i> {{ Session::get('qtdVencerEm30Dias') }} convênios vencem em 30 dias -->
									<i class="fa fa-file-o"></i> alerta 2
								</a>
							</li>
							<!-- end notification -->
						</ul>
					</li>
					<li class="footer"><a href="{{ route('rastreio.index') }}"><b>Listar todos os Rastreios</b></a></li>
				</ul>
			</li>
			<!-- User Account Menu -->
			<li class="dropdown user user-menu">
				<!-- Menu Toggle Button -->
				<a href="#"><i class="fa fa-user"></i>&nbsp Administrador</a>
			</li>
			<!-- Control Sidebar Toggle Button -->
			<li>
				<a href="#"><i class="fa fa-sign-out"></i>&nbsp Sair</a>
			</li>
		</ul>
	</div>
</nav>
