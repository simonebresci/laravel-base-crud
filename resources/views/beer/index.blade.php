@extends('layout')

@section('content')
  <div class="main-content">
    {{-- @foreach ($beers as $beer)
      <b>Name: {{$beer->name}}</b> <br>
      Type: {{$beer->type}} <br>
      Quantity(L): {{$beer->quantityL}} <br>
      Price: {{$beer->price}} <br>
      Description: {{$beer->description}} <br>
      <hr>
    @endforeach --}}

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Type</th>
          <th scope="col">Quantity(L)</th>
          <th scope="col">Price</th>
          <th scope="col">Descrition</th>
          <th scope="col">Img</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $beer)
        <tr>

          <td><a href="/beer/{{$beer->id}}">{{$beer->id}}</a></td>
          <td><a href="/beer/{{$beer->id}}"><img class="beer-index-icon"src="{{$beer->img_path}}" alt="icona birra"></a></td>
          <td><a href="/beer/{{$beer->id}}">{{$beer->name}}</a></td>
          <td>{{$beer->type}}</td>
          <td>{{$beer->quantityL}}</td>
          <td>{{$beer->price}}</td>
          <td>{{$beer->description}}</td>

          </a>
        </tr>
        @endforeach

     </tbody>
   </table>
 </div>
@endsection
