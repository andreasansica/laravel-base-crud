@extends('layouts.main-layout')

@section('section')
  <h1>Peripherals</h1>
  <h1><a href="{{ route('peripheral-create') }}">ADD</a></h1>
  <ul>
    @foreach ($peripherals as $peripheral)
      <li>
        <a href="{{ route('peripheral-show', $peripheral -> id)}}">
          {{$peripheral -> name}}
        </a>
      </li>

    @endforeach
  </ul>
@endsection
