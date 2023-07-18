@extends('home.master')
@section('main-content')
<div class="container">
    <div class="row" style="padding: 80px;">
        <div class="col-sm-6">
            <video class="detail-img" controls style="height: 400px;">
                <source  src="{{ asset('uploads/storevideos/'.$movies->movie_clip) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="detail  col-sm-8"><br>
            <h2>Movie Name: {{$movies->name}}</h2><br>
            <h2>Subscription: {{ $movies->genres }}</h2><br>
            <h3>Category: {{$movies->category}}</h3><br>
            <h4>Cast: {{$movies->cast}}</h4><br>
            <h4>Language: {{$movies->language}}</h4><br>
            <h4>Year: {{$movies->year}}</h4><br>
            <h4>Runtime: {{$movies->runtime}}</h4><br>
            <h4>Description: {{$movies->discription}}</h4><br>
        </div>
        <a class="btn btn-danger col-md-5" href="/home">Go Back</a>
    </div>
</div>
@endsection
