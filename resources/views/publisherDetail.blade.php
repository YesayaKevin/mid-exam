@extends('layouts.main')

@section('container')
    <div class="w-100 m-auto d-flex flex-column pb-8">
        <div class="w-50 align-self-center bg-primary p-2 my-4">
            <p class="text-white">{{ $publisher->name }}</p>
            <p class="text-white">{{ $publisher->address }}</p>
            <p class="text-white">{{ $publisher->phone }}</p>
            <p class="text-white">{{ $publisher->email }}</p>
        </div> 
        <div class="d-flex justify-content-center flex-wrap mb-4">
            @foreach ($publisher->books as $book)
                <div class="card m-1 shadow-sm" style="width: 16rem;">
                    <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolder">{{ $book->title }}</h5>
                        <p class="card-text">By: <span>{{ $book->author }}</span></p>
                        <a href="{{ route('detail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection