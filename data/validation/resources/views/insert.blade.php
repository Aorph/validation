@extends('layouts.base')
@section('main')
  <p>Insert a New book</p>
  {{ Form::open(['url' => '/inserted', 'method' => 'post', 'class' => 'form']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', 'Instrument', ['class' => 'input']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', 'piano', ['class' => 'input']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', 'A rare piano', ['class' => 'input']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', '399', ['class' => 'input', 'min' => '0']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', '12', ['class' => 'input', 'min' => '0']) }}
    {{ Form::submit('Insert', ['class' => 'submit']) }}
  {{ Form::close() }}
@endsection
