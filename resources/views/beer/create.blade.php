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

    <form class="form-horizontal" action="{{route('beer.store')}}" method="post">
      @csrf
      <input name="_method" type="hidden" value="POST">
      {{-- oppure usiamo blade --}}
     {{-- @method('POST') --}}


      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Type:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Quantity(L):</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="quantityL" name="quantityL" placeholder="Enter quantity(L)">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Price:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Img Path:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="img_path" name="img_path" placeholder="Enter img path">
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>

    </form>
  </div>
@endsection
