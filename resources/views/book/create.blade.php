@extends('layout')

@section('content')
    <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="genre">Genre</label>
      <select class="form-control" name="genre_id" id="">
        @foreach ($genres as $genre)
            <option value="{{$genre->id}}" >{{$genre->name}}</option>
        @endforeach
      </select>

      @error('genre_id')
        <div class="alert alert-danger">
          <strong>{{$message}}</strong>
        </div>    
      @enderror

    </div>

    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" name="photo" id="" value="{{old('photo')}}">
      @error('photo')
        <div class="alert alert-danger">
          <strong>{{$message}}</strong>
        </div>    
      @enderror
    </div>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="" value="{{old('name')}}">
      @error('name')
        <div class="alert alert-danger">
          <strong>{{$message}}</strong>
        </div>    
      @enderror
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="" rows="3">{{old('description')}}</textarea>
      @error('description')
      <div class="alert alert-danger">
        <strong>{{$message}}</strong>
      </div>    
    @enderror
    </div>

    <div class="form-group">
      <label for="publish_date"></label>
      <input type="date" class="form-control" name="publish_date" value="{{old('publish_date')}}">
      @error('publish_date')
      <div class="alert alert-danger">
        <strong>{{$message}}</strong>
      </div>    
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection