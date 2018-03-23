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
  <p>Update CD :</p>
  {{ Form::open(['url' => '/updatedCD', 'method' => 'post', 'class' => 'form']) }}
  {{ Form::hidden('id', $cd['id']) }}
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', $cd['name'], ['class' => 'input']) }}
    {{ Form::label('artist', 'Artist') }}
    {{ Form::text('artist', $cd['artist'], ['class' => 'input']) }}
    {{-- Form::label('genre', 'Genre') }}
    {{ Form::text('genre', $cd['genre'], ['class' => 'input']) --}}
    <?php $flag = false ?>
    @foreach ($genres as $genre)
        @if($cd->genres->contains($genre->id))
          {{ Form::label('genres', $genre->name) }}
          {{ Form::checkbox('genres[]', $genre->id, ['checked' => 'checked ', 'class' => 'input']) }}
        @else
        {{ Form::label('genres', $genre->name) }}
        {{ Form::checkbox('genres[]', $genre->id), ['class' => 'input'] }}
      @endif
    @endforeach
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', $cd['price'], ['class' => 'input', 'min' => '0']) }}
    {{ Form::label('stock', 'stock') }}
    {{ Form::number('stock', $cd['stock'], ['class' => 'input', 'min' => '0']) }}
    {{ Form::submit('Insert', ['class' => 'submit']) }}
  {{ Form::close() }}
@endsection
