@extends('layout')

@section('title', 'Nepal Homes')

@section('content')
    <h2 class = "text-2xl text-white text-center">Nepal Homes Landing Page</h2>
    <p class = "py-5">Total Submissions: {{ $submissions->count() }}</p>

    @php
        $totalland = $submissions->where('type', 'land')->count();
        $totalhouse = $submissions->where('type', 'house')->count();
        $totalapartment = $submissions->where('type', 'appartment')->count();
        $totalrent = $submissions->where('type', 'rent')->count();

    @endphp



    <div class = "card text-center">        
        <div class = "flex gap-3">  
            <div class = "w-1/4 bg-gray-500 py-20 px-10 rounded-lg">
                <h2>Land</h2>
                <p>{{$totalland}}</p>
            </div>

            <div class = "w-1/4 bg-gray-500 py-20 px-10 rounded-lg">
                <h2>Appartment</h2>
                <p>{{$totalapartment}}</p>
            </div>

            <div class = "w-1/4 bg-gray-500 py-20 px-10 rounded-lg">
                <h2>Rental</h2>
                <p>{{$totalrent}}</p>
            </div>

            <div class = "w-1/4 bg-gray-500 py-20 px-10 rounded-lg">
                <h2>House</h2>
                <p>{{$totalhouse}}</p>
            </div>
        </div>
    </div>


    
    <table class="mt-10 mx-auto" style="border: 1px solid black;">
    <thead>
        <tr>
            <th class="w-1/6">
                <a href="{{ route('home', ['sort_by' => 'id', 'sort_order' => ($sort_by == 'id' && $sort_order == 'asc') ? 'desc' : 'asc']) }}">ID</a>
            </th>
            <th class="w-1/6">
                <a href="{{ route('home', ['sort_by' => 'name', 'sort_order' => ($sort_by == 'name' && $sort_order == 'asc') ? 'desc' : 'asc']) }}">Name</a>
            </th>
            <th class="w-1/6">
                <a href="{{ route('home', ['sort_by' => 'email', 'sort_order' => ($sort_by == 'email' && $sort_order == 'asc') ? 'desc' : 'asc']) }}">Email</a>
            </th>
            <th class="w-1/6">
                <a href="{{ route('home', ['sort_by' => 'type', 'sort_order' => ($sort_by == 'type' && $sort_order == 'asc') ? 'desc' : 'asc']) }}">Type</a>
            </th>
            <th class="w-1/6">
                <a href="{{ route('home', ['sort_by' => 'message', 'sort_order' => ($sort_by == 'message' && $sort_order == 'asc') ? 'desc' : 'asc']) }}">Message</a>
            </th>
            <th class="w-1/6">Images</th>
        </tr>
    </thead>

    <tbody>        
        @foreach ($submissions as $submission)
        <tr>
            <td class="text-center">{{ $submission->id }}</td>
            <td class="text-center">{{ $submission->name }}</td>
            <td class="text-center">{{ $submission->email }}</td>
            <td class="text-center">{{ $submission->type }}</td>
            <td class="text-center">{{ $submission->message }}</td>
            <td class="flex">    
                @foreach ($submission->images as $image)
                <img src="{{ asset('storage/' . $image->path) }}" alt="" width="100">
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links -->
{{ $submissions->links() }}




@endsection