@extends('layouts.layout')

@section('content')
<div class="wrapper sample-index">
    <h1>Samples</h1>
    @foreach($samples as $sample)
    <div class="sample-item">
        <img src="/img/sample_small.png" alt="sample icon">
        <h4><a href="/laravelsample/{{ $sample->id }}">{{ $sample->description }}</a></h4>
    </div>
    @endforeach
    <a href="../">Home</a><br>
    <a href="/laravelsample/create">Create new Sample</a>
</div>
@endsection
