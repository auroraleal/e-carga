@extends('layouts.master')
@section('title', 'Principal')
@section('content-header')
    <h1><i class="fa fa-dashboard"></i> Painel Principal</h1>
@endsection
@section('content')
	<div class="row" style="margin-top : 50px">
		<div class="col-md-10 col-md-offset-1">
      <div class="info-box">
        <span class="info-box-icon bg-purple">
              <i class="fa fa-file-text-o"></i>
        </span>
        <div class="info-box-content">
          <h3 class="widget-user-username">Convênios</h3>
          <h4>Principais Operações</h4>
        </div>
        <ul class="nav nav-stacked">
          <li><a href="{{ route('rastreio.create') }}">Novo Convênio <span class="pull-right"><i class="fa fa-file-text-o"></i></span></a></li>
          <li><a href="{{ route('rastreio.index') }}">Listar Todos <span class="pull-right"><i class="fa fa-tasks"></i></span></a></li>
          <!--li><a href="{{ route('convenio.index') }}">Pesquisa Avançada <span class="pull-right"><i class="fa fa-search"></i></span></a></li-->
        </ul>
      </div>
	</div>

  <div style="margin-top : 60px"></div>

  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('vence_em', [10]) }}">
        <div class="info-box">
          <span class="info-box-icon bg-red">
                <i class="fa fa-users"></i>
          </span>
          <div class="info-box-content">
            <h3 class="widget-user-username">Convênios a vencer em 10 dias</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6">
      <a href="{{ route('vence_em', [30]) }}">
        <div class="info-box">
          <span class="info-box-icon bg-yellow">
                <i class="fa fa-users"></i>
          </span>
          <div class="info-box-content">
            <h3 class="widget-user-username">Convênios a vencer em 30 dias</h3>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
@endsection