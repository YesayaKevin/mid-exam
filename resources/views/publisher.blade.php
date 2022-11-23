@extends('layouts.main')

@section('container')
    <div class="w-100 m-auto d-flex flex-column">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center">Publisher Detail</h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap mb-4">
        @foreach ($publishers as $publisher)
            <div class="card m-1 shadow-sm" style="width: 18rem;">
                <img src="{{ $publisher->image }}" class="card-img-top" alt="{{ $publisher->title }}">
                <div class="card-body">
                    <h5 class="card-title font-weight-bolder">{{ $publisher->name }}</h5>
                    <p class="card-text">{{ $publisher->address }}</p>
                    <a href="{{ route('publisherDetail', ['id'=>$publisher->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection