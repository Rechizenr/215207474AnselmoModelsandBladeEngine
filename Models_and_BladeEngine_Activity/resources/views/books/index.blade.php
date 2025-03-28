@extends('layouts.app')

@section('content')
<div class="bg-white p-5 shadow-md rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Books</h2>
    
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">ISBN</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Author</th>
                <th class="border px-4 py-2">Published Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $book->id }}</td>
                <td class="border px-4 py-2">{{ $book->isbn }}</td>
                <td class="border px-4 py-2">{{ $book->title }}</td>
                <td class="border px-4 py-2">{{ $book->author }}</td>
                <td class="border px-4 py-2">{{ $book->date_published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
