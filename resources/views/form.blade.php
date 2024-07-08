@extends('layout')

@section('title', 'Contact')

@section('content')
    <h2 class = "text-2xl pb-10">Contact Page</h2>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="/form" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>   
        <label for="type">Choose a Property Type:</label>
        <select name="type" id="property">
        <option value="land">Land</option>
        <option value="house">House</option>
        <option value="appartment">Appartment</option>
        <option value="rent">Rent</option>
        </select>
    </div>

    <div>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    </div>

    <div>
        <label for="images">Images:</label>
        <input type="file" id="images" name="images[]" multiple>
    </div>

    <button type="submit">Submit</button>
</form>

@endsection