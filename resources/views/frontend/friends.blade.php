<!-- Überschrift Freunde
Freunde suchen funktion (Nach Mail oder Login Name) 
Freunde Hinzufügen Button
ul von hinzugefügten Freunden
-->

@extends('frontend/layouts/app')

@section('content')
<div class="container d-flex justify-content-center">
  <div><h3 class="mt-3 item-align-center">Kontakt hinzufügen</h3>
  <form class="form-inline my-4 my-lg-0" method="GET" action="{{ url('/search') }}">
    @csrf
    <div class="input-group input-group-sm">
      <input name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search">
      <div class="input-group-append">
        <button type="submit" class="btn btn-secondary btn-number" href="{{ url('/search') }}">
          Search
        </button>
      </div>
    </div>
  </form>
</div>
</div>
@endsection 
