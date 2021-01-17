@extends ("layouts.app")

@section ("content")
<div class="container">
  <div class="row justify-content-center">
    <h1>Campaign Logs</h1>
  </div>
  <div class="row">
    <h2>{{$log->name}}</h1>
  </div>
  <div class="row">
    <h4>{{$log->body}}</h4>
  </div>
</div>
@endsection