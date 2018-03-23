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
  <p>Insert a New Instrument</p>
  {{ Form::open(['url' => '/insertedInstrument', 'method' => 'post', 'class' => 'form']) }}
    {{ Form::label('type', 'Type') }}
    {{ Form::text('type', 'Instrument', ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', '', ['class' => 'input', 'required' => 'required']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', '', ['class' => 'input', 'min' => '0', 'required' => 'required']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', '', ['class' => 'input', 'min' => '0', 'required' => 'required']) }}
    {{ Form::submit('Insert', ['class' => 'button formButton']) }}
  {{ Form::close() }}
@endsection
