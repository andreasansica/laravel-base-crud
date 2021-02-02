@extends('layouts.main-layout')

@section('section')
  <h1>
    Name: {{$peripheral -> name}} <br>
    Model: {{$peripheral -> model}} <br>
    Price: {{$peripheral -> price}}
    Consuption: {{$peripheral -> consuption}}
  </h1>

@endsection
