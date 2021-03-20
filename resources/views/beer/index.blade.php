<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>
  <head>
  <body>
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

          <td>{{$beer->id}}</td>
          <td>{{$beer->name}}</td>
          <td>{{$beer->type}}</td>
          <td>{{$beer->quantityL}}</td>
          <td>{{$beer->price}}</td>
          <td>{{$beer->description}}</td>
          <td>{{$beer->img_path}}</td>
        </tr>
        @endforeach

     </tbody>
   </table>


  </body>
</html>
