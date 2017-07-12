<section class="sidebar">

	<!-- Sidebar Menu -->
	<ul class="sidebar-menu">
		<li class="header" style="text-align : center">Sistema de Controle de Cargas</li>
		<!-- Optionally, you can add icons to the links -->
		<li class="treeview">
			<a href="#"><i class="fa fa-file-o"></i> <span>Cargas</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ route('rastreio.create') }}">Novo Registro</a></li>
				<li><a href="{{ route('rastreio.index') }}">Listar todos</a></li>
			</ul>
		</li>
	</ul>
	<!-- /.sidebar-menu -->
</section>
