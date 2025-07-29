
 @extends('layouts.app')
 @section('title','property')
 @section('content')

<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Properties</h1>
        <a href="{{route('properties.create')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            + Create Property
        </a>
    </div>

    <table class="min-w-full bg-white border">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Type</th>
                <th class="py-2 px-4 border">Category</th>
                <th class="py-2 px-4 border">Status</th>
                <th class="py-2 px-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border">1</td>
                <td class="py-2 px-4 border">Example Property</td>
                <td class="py-2 px-4 border">Apartment</td>
                <td class="py-2 px-4 border">Residential</td>
                <td class="py-2 px-4 border">Available</td>
                <td class="py-2 px-4 border">
                    <a href="/properties/1/edit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
                    <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
   @endsection