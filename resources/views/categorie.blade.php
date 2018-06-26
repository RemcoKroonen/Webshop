@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorie</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the categorie page!
                    
                    @if(count($categorieen)> 1)
                        @foreach($categorieen as $categorie)
                            <h3>{{$categorie->name}}</h3>
                             <small>{{$categorie->description}}</small>
                        @endforeach
                    @else
                        <p>geen categorieen gevonden</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection