@extends('layout')

@section('content')
  <div class="main-content">
    <h2>Modifica la tua birra</h2>

    {{-- CALL FORM EDIT --}}
    @include('beer.form',['edit'=> true]);


  </div>
@endsection
