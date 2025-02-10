@extends('site.layout')
@section('title', 'Details')

@section('content')

    <div class="row container">
        <div class="col s12 m6">
            <img src="{{ $product->image }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h4>{{ $product->name }}</h4>
            <h4>$ {{ number_format($product->price, 2, ',', '.') }}</h4>
            <p>{{ $product->description }}</p>
            <p>
                Posted for: {{ $product->user->first_name }} <br>
                Category: {{ $product->category->name }}
            </p>
            <form action="{{ route('site.addCart') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="number" name="qnt" value="1">
                <input type="hidden" name="img" value="{{ $product->image }}">

                <button class="btn orange btn-large">Buy</button>
            </form>
        </div>
    </div>

@endsection
