@extends('layouts.main')
@section('content')
    <h1>{{ $mode }} Users</h1>
    {!! Form::open(['url' => 'users']) !!}
        @include('pages.form')
    {!! Form::close() !!}
@stop