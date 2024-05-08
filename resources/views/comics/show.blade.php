@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $comic['title'] }}</div>

                <div class="card-body">
                    <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{ $comic['title'] }}">

                    <p>{{ $comic['description'] }}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
