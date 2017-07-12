@extends('layouts.master')
@section('title', 'Principal')
@section('content-header')
    <h1><i class="fa fa-dashboard"></i> Novo Convênio</h1>
@endsection
@section('content')
    <form action="{{ route('rastreio.store') }}" class="form-horizontal" method="post">
        {!! csrf_field() !!}
        @include('pages.rastreio.form')
    </form>
@endsection
