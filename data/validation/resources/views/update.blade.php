@extends('layouts.base')
@section('main')
  <p>Update item :</p>
  {{ Form::open(['url' => '/updated', 'method' => 'post', 'class' => 'form']) }}
  {{ Form::hidden('id', $item['id']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', $item['type'], ['class' => 'input']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', $item['name'], ['class' => 'input']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', $item['description'], ['class' => 'input']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', $item['price'], ['class' => 'input', 'min' => '0']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', $item['stock'], ['class' => 'input', 'min' => '0']) }}
    {{ Form::submit('Update', ['class' => 'submit']) }}
  {{ Form::close() }}
@endsection
