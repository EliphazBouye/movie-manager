@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-12">
    <form action="{{ route('films.store') }}" method="POST" class="py-8">
        @csrf
       <div>
            <label for="title">Film Title</label>
            <br>
            <input type="text" id="title" name="title" class="border-2 @error('title') border-red-500 @enderror border-gray-600 rounded py-2 w-60 px-3" value="{{ old('title') }}"/>
            @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
       </div>
        <div class="py-4">
            <label for="year">Year</label>
            <input type="number" class="border-2 @error('year') border-red-500 @enderror border-gray-600 rounded w-20 px-4" name="year"  id="year" min="1951" max="{{ date('Y') }}" value="{{ old('year') }}">
            @error('year')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="py-6">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="border-2 @error('description') border-red-500 @enderror border-gray-600 rounded w-full px-4 py-4" name="description">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button class="py-4 px-8 rounded hover:bg-blue-600 text-gray-100 bg-blue-500" type="submit">Save</button>
    </form>
</div>
@endsection