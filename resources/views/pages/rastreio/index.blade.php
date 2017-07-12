@extends('layouts.listagem')
@section ('titulo_listagem', $titulo)
@section('listagem')
  @foreach ($rastreios as $rastreio)
    <tr>
      <td>{{ \Carbon\Carbon::parse($rastreio->dt_carregamento)->format('d/m/Y') }}</td>
      <td>{{ $rastreio->placa_caminhao }}</td>
      <td>{{ $rastreio->produto }}</td>
      <td>{{ $rastreio->quantidade_carregada }}</td>
      <td>{{ $rastreio->transportadora }}</td>
      <td>{{ $rastreio->nota_fiscal }}</td>
      <td>{{ \Carbon\Carbon::parse($rastreio->previsao_chegada)->format('d/m/Y') }}</td>
      <td>{{ \Carbon\Carbon::parse($rastreio->data_chegada)->format('d/m/Y')  }}</td>
      <td>{{ \Carbon\Carbon::parse($rastreio->saida_terminal)->format('d/m/Y')  }}</td>
      <td>
        <a href="{{ route('rastreio.edit', [$rastreio->id]) }}" class="btn btn-success" title="Editar"><i class="fa fa-pencil"></i></a>
      </td>
      <td>
        <form action="{{ route('rastreio.destroy', [$rastreio->id]) }}" method="post">
          {!! csrf_field() !!}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-danger" title="Excluir"><i class="fa fa-trash-o"></i></button>
        </form>
      </td>
    </tr>
  @endforeach
@endsection
