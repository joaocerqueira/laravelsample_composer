@extends('layouts.layout')

@section('content')
<div class="wrapper create-sample">
    <h1>Create a New Sample</h1>
    <form action="/laravelsample" method="POST">
        @csrf
        <label for="name">Description:</label>
        <input type="text" name="description" id="description" required>
        <input type="submit" value="Submit Sample">
    </form>
    <a href="/laravelsample" class="back"><- Back to all Samples</a>
</div>
@endsection
