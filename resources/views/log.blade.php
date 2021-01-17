@extends ("layouts.app")

@section ("content")
<div class="container py-5">
  <div class="row justify-content-center">
    <h1>Campaign Logs</h1>
  </div>
  @foreach ($logs as $log)
  <div class="row mx-3">
    <h2>{{$log->title}}</h1>
  </div>
  <div class="row mx-3">
    <h4>{{$log->body}}</h4>
  </div>
  @endforeach
</div>
@endsection