@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Wine Entry</h1>
    <form action="{{ route('wines.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="winery">Winery (Optional)</label>
            <input type="text" class="form-control" id="winery" name="winery" value="{{ old('winery') }}">
        </div>

        <div class="form-group">
            <label for="wine">Wine</label>
            <input type="text" class="form-control" id="wine" name="wine" value="{{ old('wine') }}" >
        </div>

        <div class="form-group">
            <label for="rating_average">Rating Average</label>
            <input type="number" class="form-control" id="rating_average" name="rating_average" value="{{ old('rating_average') }}" >
        </div>

        <div class="form-group">
            <label for="rating_reviews">Rating Reviews</label>
            <input type="text" class="form-control" id="rating_reviews" name="rating_reviews" value="{{ old('rating_reviews') }}" >
        </div>

        <div class="form-group">
            <label for="location">Location (Optional)</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
