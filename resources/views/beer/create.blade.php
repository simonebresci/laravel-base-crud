<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create your Beer</title>
  <head>
  <body>

    <h2>Crea la tua birra preferita!</h2>

    <form action="{{route('beer.store')}}" method="post">
      @csrf
      {{-- scriviamo a mano l'input --}}
       <input name="_method" type="hidden" value="POST">
       {{-- oppure usiamo blade --}}
      {{-- @method('POST') --}}

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


       <input type="submit" value="Invia">
    </form>

    {{-- @foreach ($beers as $beer) --}}
      {{-- <b>Name: {{$beer->name}}</b> <br>
      Type: {{$beer->type}} <br>
      Quantity(L): {{$beer->quantityL}} <br>
      Price: {{$beer->price}} <br>
      Description: {{$beer->description}} <br>
      <hr> --}}
    {{-- @endforeach --}}


  </body>
</html>
