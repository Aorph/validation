@extends('layouts.base')
@section('header')
  <header>
    <nav>
      <ul>
        <li><a href="/instruments">Instruments</a></li>
        <li><a href="/insertInstruments">Add Instrument</a></li>
        <li><a href="/cds">CDs</a></li>
      </ul>
    </nav>
  </header>
@endsection
@section('main')
  <p>Update Instrument :</p>
  {{ Form::open(['url' => '/updatedInstrument', 'method' => 'post', 'class' => 'form']) }}
  {{ Form::hidden('id', $item['id']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', $item['type'], ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', $item['name'], ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', $item['description'], ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', $item['price'], ['class' => 'input', 'min' => '0', 'required' => 'required']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', $item['stock'], ['class' => 'input', 'min' => '0', 'required' => 'required']) }}
    {{ Form::submit('Update', ['class' => 'button formButton']) }}
  {{ Form::close() }}
@endsection
