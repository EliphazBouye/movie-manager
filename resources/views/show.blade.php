@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto">
    <h1 class="font-bold ">{{ $film->title }}</h1>
    <span>{{ $film->year }}</span>
    <p class="mt-5">
        {{ $film->description }}
    </p>
</div>
@endsection