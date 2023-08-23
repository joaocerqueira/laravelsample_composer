@extends('layouts.app')

@section('content')
<div class="wrapper laravelsample-details">
  <h1>Sample description: {{ $sample->description }}</h1>
  <p class="id">ID - {{ $sample->id }}</p>
  <p class="description">Description - {{ $sample->description }}</p>
  <br><br>

  <form action="{{ route('samples.destroy', $sample->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Sample</button>
  </form>

  <br><br>
  <a href="{{ route('samples.index') }}" class="back"><- Back to all Samples</a>
</div>
@endsection
