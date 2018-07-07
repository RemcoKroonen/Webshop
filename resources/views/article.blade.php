@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the article page!

                    @if(count($articles)> 1)
                        @foreach($articles as $article)
                            <h3><a href="http://webshop.local/articlesincategorie/{{$article->id}}">{{$article->name}}</h3>
                             <small>{{$article->description}}</small>
                        @endforeach
                    @else
                        <p>geen article gevonden</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
