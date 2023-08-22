@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Samples List
        </div>

        @foreach($samples as $sample)
        <div>
            {{ $loop->index }} - {{ $sample['id'] }} - {{ $sample['description'] }}
            @if($loop->first)
            <span> - first in the loop</span>
            @endif
            @if($loop->last)
            <span> - last in the loop</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
