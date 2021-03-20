@extends('layout')

@section('content')
  <div class="main-content">
    {{-- @foreach ($beers as $beer) --}}
    <div class="beer-show">
      <b>Name: {{$beer->name}}</b> <br>
      Type: {{$beer->type}} <br>
      Quantity(L): {{$beer->quantityL}} <br>
      Price: {{$beer->price}} <br>
      Description: {{$beer->description}} <br>
      {{-- Img Path: {{$beer->img_path}} <br> --}}
      <img class="beer-show-img" src="{{$beer->img_path}}" alt="Immagine birra">
    </div>

    {{-- @endforeach --}}


  </div>
@endsection
