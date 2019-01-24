@extends('layouts.vleugelslayout')

@section('content')
  <div class="super_container">
    @include('partials.welcomehome')
    @include('partials.welcomehotel')
    @include('partials.welcomedagverblijf')
    @include('partials.welcometherapie')
    @include('partials.nieuwsbrief')
    @include('partials.welcomefooter')
  </div>
@endsection