@extends('layout')

@section('content')
  <div class="main-content">
    {{-- Messaggio di errore nella creazione birra --}}
    @if ($errors->any())
      <div class="alert alert-danger">

       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>

       </div>
    @endif
    {{-- /Messaggio di errore nella creazione birra --}}

    <h2>Crea la tua birra preferita!</h2>

    {{-- <form action="{{route('beer.store')}}" method="post">
      @csrf
       <input name="_method" type="hidden" value="POST">

       <label for="title">Nome</label>
       <input type="text" name="name" placeholder="Nome">

       <label for="content">Type</label>
       <input type="text" name="type" placeholder="Type">

       <label for="content">Quantity(L)</label>
       <input type="text" name="quantityL" placeholder="Quantity (L)">

       <label for="content">Price</label>
       <input type="text" name="price" placeholder="Price">

       <label for="content">Description</label>
       <input type="text" name="description" placeholder="Description">

       <label for="content">Img Path</label>
       <input type="text" name="img_path" placeholder="Img Path">


       <input type="submit" value="Invia">

    </form> --}}

    @include('beer.form', ["edit" => false]);

  </div>
@endsection
