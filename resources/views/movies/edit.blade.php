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
    <form action="" class="py-8">
        <label for="title">Film Title</label>
        <br>
        <input type="text" id="title" value="{{ $film->title }}" class="border-2 border-gray-600 rounded py-2 w-60 px-3"/>
        <div class="py-4">
            <label for="year">Year</label>
            <input type="datetime" class="border-2 border-gray-600 rounded w-20 px-4" name="" id="year" value="{{ $film->year }}">
        </div>
        <div class="py-6">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="border-2 border-gray-600 rounded w-full px-4 py-4">{{ $film->description }}</textarea>
        </div>
    </form>
</div>
@endsection