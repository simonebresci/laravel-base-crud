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
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $beer)
        <tr>
          {{-- utilizza ruote anzichè link diretto --}}
          <td><a href={{route('beer.show',compact('beer'))}}>{{$beer->id}}</a></td>
          <td><a href={{route('beer.show',compact('beer'))}}><img class="beer-index-icon"src="{{$beer->img_path}}" alt="icona birra"></a></td>
          <td><a href={{route('beer.show',compact('beer'))}}>{{$beer->name}}</a></td>
          <td>{{$beer->type}}</td>
          <td>{{$beer->quantityL}}</td>
          <td>{{$beer->price}}</td>
          <td>{{$beer->description}}</td>
          <td>
            <a href={{route('beer.show',compact('beer'))}}>VIEW</a>
            <a href={{route('beer.edit',compact('beer'))}}>EDIT</a>
            <a href={{route('beer.destroy',compact('beer'))}}>DESTROY</a>
          </td>


          </a>
        </tr>
        @endforeach

     </tbody>
   </table>
 </div>
@endsection
