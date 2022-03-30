@extends('master')

    @section('content')
        <div class="maincont-middle">
            <div class="cont-middle">
                @foreach($categories as $category)
                    <div class="categories">
                        <div class="title-cat">
                            <h2><a href="/{{$category->code}}">{{$category->name}}</a></h2>
                        </div>
                        <div class="image-cat">
                            <img src="{{$category->image}}" height='40px' width="40px">
                        </div>
                        <div class="discription-cat">
                            {{$category->discription}}
                        </div>
                    </div>
                @endforeach
        </div>
    @endsection
