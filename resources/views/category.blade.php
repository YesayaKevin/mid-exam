@extends('layouts.main')

@section('container')
    <div class="w-100 m-auto d-flex flex-column">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center">{{ $category->name }}</h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap mb-4">
        @foreach ($category->books as $book)
            <div class="card m-1 shadow-sm" style="width: 18rem;">
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