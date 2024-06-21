@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Wine List</h1>

        <a href="{{ route('wines.create') }}" class="btn btn-primary mb-3">Create New Wine</a>

        <div class="row">

            @foreach ($wines as $wine)
                <div class="col-md-4 mb-4">

                    <div class="card">

                        <img src="{{ $wine->image }}" class="card-img-top" alt="{{ $wine->wine }}"
                            style="height: 200px; object-fit: cover;">

                        <div class="card-body">

                            <h5 class="card-title">{{ $wine->wine }}</h5>

                            <p class="card-text"><strong>Winery:</strong> {{ $wine->winery ?? 'N/A' }}</p>

                            <p class="card-text"><strong>Rating:</strong> {{ $wine->rating_average }}
                                ({{ $wine->rating_reviews }})</p>

                            <p class="card-text"><strong>Location:</strong> {{ $wine->location ?? 'N/A' }}</p>
                            
                            <a href="{{ route('wines.show', $wine->id) }}" class="btn btn-primary">View Details</a>
                            
                            <a href="{{ route('wines.edit', $wine->id) }}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('wines.destroy', $wine->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this wine?')">Delete</button>
                            </form>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>
        so devo
    </div>
@endsection
