@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-12">
    <div class="border rounded bg-gray-100 py-6 px-6">
        <h1 class="font-bold border-b-2 border-gray-500">{{ $film->title }}</h1>
        <span>{{ $film->year }}</span>
        <p class="mt-5">
            {{ $film->description }}
        </p>
    </div>

</div>
@endsection