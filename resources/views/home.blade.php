@extends('layout')

@section('content')
@if(@session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Data has been created</strong>
    </div>
@endif

@if(@session('success-remove'))
    <div class="alert alert-success" role="alert">
        <strong>Data has been deleted</strong>
    </div>
@endif

<div class="row">
    <div class="col"><div class="jumbotron jumbotron-fluid banner" style="background-image:url({{asset('jumbo-tron.jpg')}})"></div>
    </div>
</div>
<div class="row py-4">
    <div class="col-4"></div>
    <div class="col-4">
        <a class="btn btn-dark" style="width: 100%" href="{{ route('movie.create') }}">add new movie</a>
    </div>
    <div class="col-4"></div>
</div>
<div class="row">
    @foreach ($movies as $movie)
    <div class="col-3">
        <div class="card mb-3" style="width:250px">
            <img class="card-img-top"
                src="{{ asset('storage/'.(Str::contains($movie->photo, 'cover/') ? $movie->photo : 'cover/'.$movie->photo)) }}"
                alt="Card image" style="max-width:250px;">
            <div class="card-body">
            <h4 class="card-title">{{ $movie->title }}</h4>
            <h6 class="card-title">{{ $movie->genre->nama ?? 'no genre' }}</h6>
            <p class="card-text">{{ $movie->description }}</p>
            <p class="card-text"><small class="text-muted">{{ $movie->publish_date?->format('d-m-Y') }}</small></p>
            <form action="{{ route('movie.delete', ['movie' => $movie->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger w-100" value="delete">
            </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col">{{$movies->links()}}</div>
</div>
@endsection
