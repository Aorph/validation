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
  <p>All genres</p>
  <table>
    <tr>
      <th>Name</th>
    </tr>
    @foreach ($genres as $genre)
      <tr>
        <td> {{ $genre['name'] }}</td>
      </tr>
    @endforeach
  </table>
  <p>All CDs</p>
  <table>
    <tr>
      <th class="big">Name</th>
      <th>Artist</th>
      <th>Genre</th>
      <th>Price</th>
      <th>In stock : </th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    @foreach ($cds as $cd)
      <tr>
        <td class="big">{{ $cd['name'] }}</td>
        <td>{{ $cd['artist'] }}</td>
        <td>{{ $cd['genre'] }}</td>
        <td>{{ $cd['price'] }}</td>
        <td>{{ $cd['stock'] }}</td>
        <td>
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
