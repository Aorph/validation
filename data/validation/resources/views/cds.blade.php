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
        <td> {{ $genre['name'] }}</td>
      @endforeach
    </tr>
  </table>
  <p>All CDs</p>
  <table>
    <tr>
      <th class="big2">Name</th>
      <th class="artists">Artist</th>
      <th class="big3">Genre</th>
      <th>Price</th>
      <th>In stock</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    @foreach ($cds as $cd)
      <tr>
        <td class="big2">{{ $cd['name'] }}</td>
        <td class="artists">{{ $cd['artist'] }}</td>
        <td class="big3">
          @foreach ($cd->genres as $genre)
            {{ $genre['name'] }},
          @endforeach
        </td>
        <td>{{ $cd['price'] }}</td>
        <td>{{ $cd['stock'] }} €</td>
        <td class="small">
          {{ Form::open(['url' => '/updateCD', 'method' => 'post', 'class' => 'button']) }}
            {{ Form::hidden('id', $cd['id']) }}
            {{ Form::submit('U', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
        <td class="small">
          {{ Form::open(['url' => '/deleteCD', 'method' => 'post', 'class' => 'button']) }}
            {{ Form::hidden('id', $cd['id']) }}
            {{ Form::submit('X', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
