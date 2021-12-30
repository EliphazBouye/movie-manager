@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-12">


    @if(session('success'))
      <div class="bg-green-500 text-gray-100 py-6 px-6 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif


    <div class="border rounded bg-gray-100 py-6 px-6">
        <h1 class="font-bold border-b-2 border-gray-500">{{ $film->title }}</h1>
        <span>{{ $film->year }}</span>
        <p class="mt-5">
            {{ $film->description }}
        </p>
    </div>
    <form action="{{ route('films.update', $film->id) }}" method="POST" class="py-8">
        @csrf
        @method('PUT')
       <div>
            <label for="title">Film Title</label>
            <br>
            <input type="text" id="title" name="title" class="border-2 @error('title') border-red-500 @enderror border-gray-600 rounded py-2 w-60 px-3" value="{{ $film->title }}"/>
            @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
       </div>
        <div class="py-4">
            <label for="year">Year</label>
            <input type="number" class="border-2 @error('year') border-red-500 @enderror border-gray-600 rounded w-20 px-4" name="year"  id="year" min="1951" max="{{ date('Y') }}" value="{{ $film->year }}">
            @error('year')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="py-6">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="border-2 @error('description') border-red-500 @enderror border-gray-600 rounded w-full px-4 py-4" name="description">{{ $film->description }}</textarea>
            @error('description')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button class="py-4 px-8 rounded hover:bg-blue-600 text-gray-100 bg-blue-500" type="submit">Save</button>
    </form>
</div>
@endsection