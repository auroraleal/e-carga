@extends('layouts.master')
@section('title', 'Principal')
@section('content-header')
    <h1><i class="fa fa-dashboard"></i> Edição de Convênio</h1>
@endsection
@section('content')
    <div class="container">
	    <div class="row">
		    <section>
                <form action="{{ route('rastreio.update', [$rastreio->id]) }}" class="form-horizontal" method="post">
                    {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                    @include('pages.rastreio.form')
                </form>
            </section>
        </div>
    </div>
@endsection
