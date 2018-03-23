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
  <p>All Instruments</p>
  <table>
    <tr>
      <th class="td">Type</th>
      <th class="td">Name</th>
      <th class="td big">Description</th>
      <th class="td">
        {{ Form::open(['url' => '/secretPrice', 'method' => 'get']) }}
          {{ Form::hidden('id', 'id') }}
          {{ Form::submit('price', ['class' => 'button2']) }}
        {{ Form::close() }}
      </th>
      <th class="td">In stock : </th>
      <th class="td">Update</th>
      <th class="td">Delete</th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td class="td">{{ $item['type'] }}</td>
        <td class="td">{{ $item['name'] }}</td>
        <td class="td big">{{ $item['description'] }}</td>
        <td class="td">{{ $item['price'] }} €</td>
        <td class="td">{{ $item['stock'] }}</td>
        <td class="small">
          {{ Form::open(['url' => '/updateInstrument', 'method' => 'post']) }}
            {{ Form::hidden('id', $item['id']) }}
            {{ Form::submit('U', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
        <td class="small">
          {{ Form::open(['url' => '/deleteInstrument', 'method' => 'post']) }}
            {{ Form::hidden('id', $item['id']) }}
            {{ Form::submit('X', ['class' => 'button']) }}
          {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
