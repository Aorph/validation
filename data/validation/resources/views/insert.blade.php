@extends('layouts.base')
@section('main')
  <p>Insert a New book</p>
  {{ Form::open(['url' => '/inserted', 'method' => 'post']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', 'Instrument') }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', 'piano') }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', 'A rare piano') }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', '399') }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', '12') }}
    {{ Form::submit('Insert') }}
  {{ Form::close() }}
@endsection
