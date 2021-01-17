@extends ("layouts.app")

@section ("content")
@php
$mapCurrentStr = "faerun"
@endphp
<div class="container">
  <div class="row justify-content-center">
    <h1>Maps</h1>
  </div>
  <!-- <div class="row justify-content-center">
    <div class="col">
      <button type="button" class="btn btn-info" id="faerun" onclick="$mapCurrentStr='faerun'">
        <h2>Faerun</h2>
      </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-info" id="oakhurst" onclick="$mapCurrentStr='oakhurst'">
        <h2>Oakhurst</h2>
      </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-info" id="neverwinter" onclick="$mapCurrentStr='neverwinter'">
        <h2>Neverwinter</h2>
      </button>
    </div> -->
  <div class="row justify-content-center">
    <h2>Sword Coast</h2>
  </div>
  <div class="row justify-content-center">
    <img src="/images/faerunMap.jpg" alt="map of Faerun">
  </div>
  <div class="row justify-content-center">
    <h2>Oakhurst</h2>
  </div>
  <div class="row justify-content-center">
    <img src="/images/oakhurstMap.png" alt="map of Oakhurst">
  </div>
  <div class="row justify-content-center">
    <h2>Neverwinter</h2>
  </div>
  <div class="row justify-content-center">
    <img src="/images/neverwinterMap.png" alt="map of Neverwinter">
  </div>
</div>
</div>
@endsection