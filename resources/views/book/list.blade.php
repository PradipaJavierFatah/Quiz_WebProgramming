@extends('layout')

@section('content')

@if(@session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Data has been deleted</strong>
    </div>
@endif

<a class="btn btn-primary" href="{{ route('book.create') }}">create</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>
                        <a href="{{ route('book.detail', ['id'=>$book->id]) }}" class="btn btn-sm btn-outline-dark">detail</a>
                        <form action="{{ route('book.delete', ['id'=>$book->id]) }}" method="post">
                            @csrf
                            <input type="submit" value="delete" class="btn btn-sm btn-danger">
                            @method('DELETE')

                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Data tidak ditemukan</td></tr>
            @endforelse    
        </tbody>
    </table>
    {{$books->links()}}
@endsection