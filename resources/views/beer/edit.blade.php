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

    <h2>Modifica la tua birra</h2>


    <form class="form-horizontal" action={{route('beer.update', compact('beer'))}}  method="post">
      @csrf
      @method('PUT')


      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->name}} class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Type:</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->type}} class="form-control" id="type" name="type" placeholder="Enter type">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Quantity(L):</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->quantityL}} class="form-control" id="quantityL" name="quantityL" placeholder="Enter quantity(L)">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Price:</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->price}} class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Description:</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->description}} class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Img Path:</label>
        <div class="col-sm-10">
          <input type="text" value={{$beer->img_path}} class="form-control" id="img_path" name="img_path" placeholder="Enter img path">
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
