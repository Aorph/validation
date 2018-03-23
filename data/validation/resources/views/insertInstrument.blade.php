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
    {{ Form::text('type', 'Instrument', ['class' => 'input']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', 'piano', ['class' => 'input']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', 'A rare piano', ['class' => 'input']) }}
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', '399', ['class' => 'input', 'min' => '0']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', '12', ['class' => 'input', 'min' => '0']) }}
    {{ Form::submit('Insert', ['class' => 'button formButton']) }}
  {{ Form::close() }}
@endsection
