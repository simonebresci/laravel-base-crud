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

    @include('beer.form', ["edit" => false]);

  </div>
@endsection
