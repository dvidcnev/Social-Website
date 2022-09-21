@extends('layouts.main')

@section('title')
    {{$post['name']}}
@endsection

@section('css')
<link rel="stylesheet" href="{{url('css/show.css')}}">
@endsection

@section('content')

@include('layouts.navigation')

    <div id="main" class="container-fluid">
        <div id="main2" class="py-5 text-center">
                <h1>{{$post->name}}</h1>
                <img class="img-thumbnail" src="{{url('storage/pictures/'.$post->file_path)}}">
                <p class="descript-text py-1">{{$post['description']}}</p>
                <div>
                    <p class="m-auto">{{$post->created_at}}</p>
                    @if ($post->user_id == Auth::id() )
                        
                        <a href="{{ route('posts.edit', $post) }}"><button type="submit" class="btn btn-lg btn-secondary my-3">Edit</button></a>



                        <form action="{{  route('delete', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-lg btn-danger my-3">Delete</button>

                        </form>



                    @endif
                </div>
        </div>
    </div>
@endsection