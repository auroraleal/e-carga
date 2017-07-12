@extends('layouts.master')
@section('title', 'Principal')
@section('content-header')
    <h1><i class="fa fa-dashboard"></i> Consulta de Rastreios</h1>
    <br>
@endsection
@section('content')
  <div class="row">
        <div class="col-xs-20">
          <div class="box" style="width: 100%">
            <div class="box-header">
              <h3 class="box-title"><strong>Listagem - @yield('titulo_listagem')</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Data do Carregamento</th>
                  <th>Placa</th>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th>Transportadora</th>
                  <th>Nota Fiscal</th>
                  <th>Previsão de Chegada</th>
                  <th>Chegada</th>
                  <th>Saída</th>
                  <th style="text-align: center" colspan="2">Opções</th>
                </tr>
                </thead>
                <tbody>
                  @yield('listagem')
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
@endsection
