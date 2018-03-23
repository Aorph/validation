@extends('layouts.base')
@section('header')
  <header>
    <nav>
      <ul>
        <li><a href="/cds">CDs</a></li>
        <li><a href="/insertCD">Add CD</a></li>
        <li><a href="/instruments">Intruments</a></li>
        <li><a href="/addGenre">Add Genre</a></li>
      </ul>
    </nav>
  </header>
@endsection
@section('main')
  <p>Insert a New CD</p>
  {{ Form::open(['url' => '/insertedCD', 'method' => 'post', 'class' => 'form']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', 'In becoming a Ghost', ['class' => 'input']) }}
    {{ Form::label('artist', 'Artist') }}
    {{ Form::text('artist', 'The Faceless', ['class' => 'input']) }}
    {{-- Form::label('genre', 'Genre') }}
    {{ Form::text('genre', 'rock', ['class' => 'input']) --}}
    <!-- SHIT'S NOT WORKING.-->
    @foreach ($genres as $genre)
      {{ Form::label('genre', $genre['name']) }}
      {{ Form::hidden('id', $genre['id']) }}
      {{ Form::checkbox('genre', $genre['name'], ['class' => 'input']) }}
    @endforeach
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', '17', ['class' => 'input', 'min' => '0']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', '12', ['class' => 'input', 'min' => '0']) }}
    {{ Form::submit('Insert', ['class' => 'submit']) }}
  {{ Form::close() }}
@endsection
