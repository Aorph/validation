@extends('layouts.base')
@section('main')
  <p>Update item :</p>
  {{ Form::open(['url' => '/updated', 'method' => 'post']) }}
  {{ Form::hidden('id', $item['id']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', $item['type']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', $item['name']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', $item['description']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', $item['price']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', $item['stock']) }}
    {{ Form::submit('Update') }}
  {{ Form::close() }}
@endsection
