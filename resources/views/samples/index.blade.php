@extends('layouts.app')

@section('content')
<div class="wrapper sample-index">
    <h1>Samples</h1>
    @foreach($samples as $sample)
    <div class="sample-item">
        <img src="/img/sample_small.png" alt="sample icon">
        <h4><a href="{{ route('samples.destroy', $sample->id) }}">{{ $sample->description }}</a></h4>
    </div>
    @endforeach
    <a href="{{ route('samples.index') }}">Create new Sample</a>
</div>
@endsection
