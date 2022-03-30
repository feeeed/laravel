@extends('master')
@section('content')
    <h1 class="middle-title">Сейчас популярно</h1>
    <div class="middle">
        @foreach($products as $product)
                @include('card',compact('product'))
        @endforeach
    </div>
@endsection
