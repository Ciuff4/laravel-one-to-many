@extends('layouts.app')

@section('content')
<div class="container">
    <h3>titlo: {{$post->title}}</h3>
    <p class="badge bg-info p-2">{{$post->category->name}}</p>
    <p>{{$post->description}}</p>
</div>
@endsection
