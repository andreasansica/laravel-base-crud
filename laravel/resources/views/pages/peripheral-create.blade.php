@extends('layouts.main-layout')

@section('content')
  <form action="{{ route('peripheral-store') }}" method="POST">
          @csrf
          @method('POST')
          <label for="name">Nome:</label>
          <input name="name" type="text">
          <br>
          <label for="model">Model:</label>
          <input name="model" type="text">
          <br>
          <label for="price">Price:</label>
          <input name="price" type="text">
          <br>
          <label for="consuption">Consuption:</label>
          <input name="consuption" type="text">
          <br>
          <input type="submit" value="SALVA">
      </form>

@endsection
