@extends('layouts.base')
@section('header')
  <header>
    <nav>
      <ul>
        <li><a href="/cds">CDs</a></li>
        <li><a href="/insertCD">Add CD</a></li>
        <li><a href="/addGenre">Add Genre</a></li>
        <li><a href="/instruments">Intruments</a></li>
      </ul>
    </nav>
  </header>
@endsection
@section('main')
  {{ Form::open(['url' => '/insertGenre', 'method' => 'post', 'class' => 'form']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', 'Rock', ['class' => 'input']) }}
    {{ Form::submit('Insert', ['class' => 'button formButton submit2']) }}
  {{ Form::close() }}
@endsection
