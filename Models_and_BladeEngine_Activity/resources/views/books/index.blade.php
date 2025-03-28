@extends('books.app')

@section('content')
<div class="bg-white p-6 shadow-lg rounded-lg max-w-6xl mx-auto mt-6">
    <!-- Logo Section -->
    <div class="flex items-center mb-6">
        <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-books-logo-image_79143.jpg" alt="Book Logo" class="h-16 w-16 mr-4">
        <h2 class="text-2xl font-bold text-gray-800 border-b pb-2">Books Collection</h2>
    </div>
    <div class="mb-4">
    <form method="GET" action="{{ route('books.index') }}">
        <label for="sort_by" class="mr-2 font-semibold">Sort by:</label>
        <select name="sort_by" id="sort_by" class="p-2 border rounded">
            <option value="date_published" {{ request('sort_by') == 'date_published' ? 'selected' : '' }}>Published Date</option>
            <option value="id" {{ request('sort_by') == 'id' ? 'selected' : '' }}>Book ID</option>
        </select>

        <select name="sort_order" id="sort_order" class="p-2 border rounded">
            <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
            <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
        </select>

        <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded">Sort</button>
    </form>
</div>


    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md">
            <thead>
                <tr class="bg-gray-300 text-gray-700 text-left">
                    <th class="px-6 py-3 border">ID</th>
                    <th class="px-6 py-3 border">ISBN</th>
                    <th class="px-6 py-3 border">Title</th>
                    <th class="px-6 py-3 border">Author</th>
                    <th class="px-6 py-3 border">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr class="hover:bg-gray-100 transition duration-200">
                    <td class="px-6 py-4 border text-gray-700">{{ $book->id }}</td>
                    <td class="px-6 py-4 border text-gray-700">{{ $book->isbn }}</td>
                    <td class="px-6 py-4 border text-gray-700 font-medium">{{ $book->title }}</td>
                    <td class="px-6 py-4 border text-gray-700">{{ $book->author }}</td>
                    <td class="px-6 py-4 border text-gray-700">{{ $book->date_published }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection