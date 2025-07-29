@extends('layouts.app')
@section('title','Categories')
@section('content')

<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Categories</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            + Create Category
        </a>
    </div>

    <table class="min-w-full bg-white border">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Image</th>
                <th class="py-2 px-4 border">Created At</th>
                <th class="py-2 px-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category  as $item)
         
            <tr>
                <td class="py-2 px-4 border">{{$item->id}}</td>
                <td class="py-2 px-4 border">{{$item->name}}</td>
                <td class="py-2 px-4 border">
                     @if($item->image)
                     
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-12 h-12 object-cover rounded">
        @else
            <span class="text-gray-500 italic">No Image</span>
        @endif
                </td>
                <td class="py-2 px-4 border">2024-06-01</td>
                <td class="py-2 px-4 border">
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
                    <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Delete</button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
