@extends('layouts.base')
@section('main')
  <p>All items</p>
  <table>
    <tr>
      <th class="small">Type</th>
      <th class="small">Name</th>
      <th class="big">Description</th>
      <th class="small">Price</th>
      <th class="small">In stock : </th>
      <th class="small">Update</th>
      <th class="small">Delete</th>
    </tr>
      @foreach ($items as $item)
        <tr>
          <td class="small">{{ $item['type'] }}</td>
          <td class="small">{{ $item['name'] }}</td>
          <td class="big">{{ $item['description'] }}</td>
          <td class="small">{{ $item['price'] }}</td>
          <td class="small">{{ $item['stock'] }}</td>
          <td class="small">
            {{ Form::open(['url' => '/update', 'method' => 'post']) }}
              {{ Form::hidden('id', $item['id']) }}
              {{ Form::submit('U') }}
            {{ Form::close() }}
          </td>
          <td class="small">
            {{ Form::open(['url' => '/delete', 'method' => 'post']) }}
              {{ Form::hidden('id', $item['id']) }}
              {{ Form::submit('X') }}
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach
  </table>
@endsection
