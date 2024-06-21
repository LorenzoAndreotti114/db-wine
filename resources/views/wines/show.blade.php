@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ $wine->wine }}</h1>

    <div class="card mb-4">

        <img src="{{ $wine->image }}" class="card-img-top" alt="{{ $wine->wine }}" style="height: 300px; object-fit: cover;">

        <div class="card-body">

            <h5 class="card-title">{{ $wine->wine }}</h5>

            <p class="card-text"><strong>Winery:</strong> {{ $wine->winery ?? 'N/A' }}</p>

            <p class="card-text"><strong>Rating:</strong> {{ $wine->rating_average }} ({{ $wine->rating_reviews }})</p>

            <p class="card-text"><strong>Location:</strong> {{ $wine->location ?? 'N/A' }}</p>

            <a href="{{ route('wines.edit', $wine->id) }}" class="btn btn-primary">Edit</a>

        </div>

    </div>

</div>

@endsectionhow
