@extends('layouts.base')
@section('main')
  <h1>WOW!!! EVERYTHING IS NOW AT 1 €!!!! YES E-V-E-R-Y-T-H-I-N-G !!</h1>
  {{ Form::open(['url' => '/secret', 'method' => 'post', 'class' => 'form2']) }}
    {{ Form::submit('GO SEE IT OUT', ['class' => 'button']) }}
  {{ Form::close() }}
@endsection
