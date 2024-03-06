@extends('layouts.guest')

@section('page-title', 'Articoli')

@section('main-content')
    <div class="row">
        <div class="col-12">
                <h1 class="text-center text-primary">
                        Articoli
                </h1>
        </div>
        @foreach ($posts as $post)
             <div class="col-12 col-xs-6 col-sm-4 col-md-3 mb-3 ">
            <div class="card">
                <div class="card-body">
                    <h3>{{$post->title}}</h3>
                </div>
                <a href="{{ route('posts.show', ['post' => $post->slug]) }}" class="btn btn-primary w-50 mb-3 ms-5  ">
                     Leggi Articolo
                 </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
