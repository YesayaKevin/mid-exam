@extends('layouts.main')

@section('container')
    <div class="w-100 m-auto d-flex flex-column pb-8">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center">Book Detail</h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card m-1 shadow-sm w-75">
                <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title font-weight-bolder">{{ $book->title }}</h5>
                    <p class="card-text">By: <span>{{ $book->author }}</span></p>
                    <p class="card-text"><span>{{ $book->synopsis }}</span></p>
                </div>
            </div>
        </div>
    </div>
@endsection