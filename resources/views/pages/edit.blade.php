@extends('layouts.main')
@section('content')
    <h1>{{ $mode }} Users</h1>
    {!! Form::model($user,
        [
          'method' => 'PATCH',
          'action' => ['PagesController@update', $user->id]
        ])
    !!}
        @include('pages.form')
    {!! Form::close() !!}
@stop