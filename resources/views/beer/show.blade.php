@extends('layout')

@section('content')
  <div class="main-content">
    <div class="beer-show">
      <b>Name: {{$beer->name}}</b> <br>
      Type: {{$beer->type}} <br>
      Quantity(L): {{$beer->quantityL}} <br>
      Price: {{$beer->price}} <br>
      Description: {{$beer->description}} <br>
      <img class="beer-show-img" src="{{$beer->img_path}}" alt="Immagine birra">
    </div>
  </div>
@endsection
