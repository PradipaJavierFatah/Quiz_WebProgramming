@extends('layout')

@section('content')
    <div class="row shadow-sm p-3 mb-5 bg-body rounded">
        <div class="col-4 px-0">
            <img class="rounded mx-auto d-block" src="cover/{{$movie->photo}}" alt="" style="width: 70%;">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <h3 class="my-0">{{$movie->title}}</h3>
                    <h5 class="my-0 py-0 font-italic">
                        {{$movie->genre->name}}
                    </h5>

                    <h6 class="mt-4" >description:</h6>
                    <p class="mt-0">{{$movie->description}}</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>episode</th>
                                <th>title</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($movie->episodes as $episode )
                            <tr>
                                    <td scope="row">{{$episode->episode}}</td>
                                    <td>{{$episode->title}}</td>
                            </tr>
                           @empty
                           <tr>
                            <td colspan="2">comming soon</td>
                         </tr> 
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection