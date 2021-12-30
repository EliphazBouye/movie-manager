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
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Read</td>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Edit</td>
            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Delete</td>
          </tr>
        </thead>
      <tbody class="text-gray-700">
        @foreach ($films as $film)
            <tr>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->title }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->year }}</td>
            <td class="w-1/3 text-left py-3 px-4">{{ $film->description }}</td>
            <td class="text-left py-3 px-4"><a class="bg-green-400 hover:bg-green-300 px-3 py-2 rounded text-white" href="{{ route('films.show', $film->id) }}">Read</a></td>
            <td class="text-left py-3 px-4"><a class="bg-blue-400 hover:bg-blue-300 px-3 py-2 rounded text-white" href="{{ route('films.edit', $film->id) }}">Update</a></td>
            <td class="text-left py-3 px-4">
                <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-400 hover:bg-red-300 px-3 py-2 rounded text-white" href="{{ route('films.destroy', $film->id) }}">Delete</button>
                </form>
            </td>
            {{-- <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td> --}}
            </tr>
        @endforeach

      </tbody>
      </table>

      <footer>
        {{ $films->links() }}
      </footer>
    </div>
  </div>
</div>
@endsection