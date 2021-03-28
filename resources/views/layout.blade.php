<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> --}}
        {{-- Font awesome installato tramite npm --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>
  <head>
  <body>
    <header>
      <div class="header-container">

        {{-- BOOTSTRAP NAVBAR --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">BEER STORE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="/beer">Beers</a>
              <a class="nav-item nav-link" href="/beer/create">Add New Beer</a>
              <a class="nav-item nav-link disabled" href="#"></a>

            </div>
          </div>
        </nav>

        {{-- /BOOTSTRAP NAVBAR --}}
      </div>
    </header>
    @yield('content')

  </body>
</html>
