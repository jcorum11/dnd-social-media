@extends ("layouts.app")

@section ("content")
@php
$mapCurrentStr = "faerun"
@endphp
<div class="container py-5">
  <div class="row justify-content-center">
    <h1>Maps</h1>
  </div>
  <div class="row justify-content-center">
    <h2>Sword Coast</h2>
  </div>
  <div class="row justify-content-center">
    <div class="mapDiv1"></div>
  </div>
  <div class="row justify-content-center">
    <h2>Oakhurst</h2>
  </div>
  <div class="row justify-content-center">
  <div class="mapDiv2"></div>
  </div>
  <div class="row justify-content-center">
    <h2>Neverwinter</h2>
  </div>
  <div class="row justify-content-center">
  <div class="mapDiv3"></div>
  </div>
</div>
</div>
@endsection