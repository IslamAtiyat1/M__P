<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Styles -->
<style>


</style>
</head>
@extends('layouts.layout')
@section('title','Home Page')
@section('content')
    <main class="main-section">

{{--   @foreach ($product->productImages as $image)
                                                <div class="col-md-2">
                                                    <img src="{{ asset($image->image) }}" style="width:80px;height:80px"
                                                        class="me-4 border" alt="Img"> --}}

        {{-- @foreach($products as $product)


            <div class="product-card">
                @if($product->productImages->count() > 0)
                <img src="{{ asset($product->productImages[0]->image) }}" alt="Product Image">
            @else
                <img src="../images/par3.jpg" alt="Default Image">
            @endif
                <h3>{{ $product->name }}</h3>
                <p>{{$product->id}}</p>
                <button>Add to Cart</button>
            </div>
            @endforeach --}}
    </main>
@endsection

@push('js')
@endpush

</html>
