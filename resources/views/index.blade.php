@extends('layouts.app')

@section('content')
<div class="mt-5">
<!-- component -->
<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Tite</th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Year</th>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description</th>
            {{-- <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td> --}}
          </tr>
        </thead>
      <tbody class="text-gray-700">
        @foreach ($films as $film)
            <tr>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->title }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->year }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->description }}</td>
            {{-- <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td> --}}
            {{-- <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td> --}}
            </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
@endsection