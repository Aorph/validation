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
  <table>
    <tr>
      <th>All Genres</th>
    </tr>
    <tr>
      @foreach ($genres as $genre)
        <td class="td"> {{ $genre['name'] }}</td>
      @endforeach
    </tr>
  </table>
  <p>All CDs</p>
  <table>
    <tr>
      <th class="td big2">Name</th>
      <th class="td artists">Artist</th>
      <th class="td big3">Genre</th>
      <th class="td">
        {{ Form::open(['url' => '/secretPrice', 'method' => 'get']) }}
          {{ Form::submit('price', ['class' => 'button2']) }}
        {{ Form::close() }}
      </th>
      <th class="td">In stock</th>
      <th class="td">Update</th>
      <th class="td">Delete</th>
    </tr>
    @foreach ($cds as $cd)
      <tr>
        <td class="td big2">{{ $cd['name'] }}</td>
        <td class="td artists">{{ $cd['artist'] }}</td>
        <td class="td big3">
          @foreach ($cd->genres as $genre)
            {{ $genre['name'] }} 
          @endforeach
        </td>
        <td class="td">{{ $cd['price'] }} €</td>
        <td class="td">{{ $cd['stock'] }}</td>
        <td class="small">
          {{ Form::open(['url' => '/updateCD', 'method' => 'post']) }}
            {{ Form::hidden('id', $cd['id']) }}
            {{ Form::submit('U', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
        <td class="small">
          {{ Form::open(['url' => '/deleteCD', 'method' => 'post']) }}
            {{ Form::hidden('id', $cd['id']) }}
            {{ Form::submit('X', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
