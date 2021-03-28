@extends('layout')

@section('content')
  <div class="main-content">
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
          <td><a href={{route('beer.show',compact('beer'))}}><img class="beer-index-icon" src="{{$beer->img_path}}" alt="icona birra"></a></td>
          <td><a href={{route('beer.show',compact('beer'))}}>{{$beer->name}}</a></td>
          <td>{{$beer->type}}</td>
          <td>{{$beer->quantityL}}</td>
          <td>{{$beer->price}}</td>
          <td>{{$beer->description}}</td>
          <td>
            
            <button class="btn btn-primary" >
              <a class= "text-light" href={{route('beer.show',compact('beer'))}}>
                VIEW
              </a>
            </button>


          <button class="btn btn-secondary">
            <a class="text-light" href={{route('beer.edit',compact('beer'))}}>
              EDIT
            </a>
          </button>

            <form  action={{route('beer.destroy', compact('beer'))}}  method="post">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-default btn-danger">DELETE</button>

            </form>
          </td>


          </a>
        </tr>
        @endforeach

     </tbody>
   </table>
 </div>
@endsection
