@extends('master')
   @section('content')
        <div class="maincont-middle">
            <div class="cont-middle">
                <div class="show-film">
                    <div class="film-prew">
                        <div class="title-show-film">
                            <div>{{$Film->name}}</div>
                            <div class="low-title">{{$Film->category->name}}</div>
                        </div>
                       <img src="{{$Film->image_back}}">
                        <form action="{{route('basket-add',$Film)}}" method="post">
                            <button class="btn btn-primary" type="submit" role="button">В корзину</button>
                            @csrf
                        </form>
                    </div>
                    <div class="film-info">
                        <div class="pic-film">
                            <img src="{{$Film->image}}" width="291px" height="390px">
                        </div>
                        <ul class="film-pun-info">
                            <li class="info-fi-mini"><div>Год производства</div><div class="temp-info">2021</div></li>
                            <hr class="remove-margin-middle">
                            <li class="info-fi-mini"><div>Страна</div><div class="temp-info">США,Великобритания</div></li>
                            <hr class="remove-margin-middle">
                            <li class="info-fi-mini"><div>Жанр</div><div class="temp-info">боевик,триллер</div></li>
                            <hr class="remove-margin-middle">
                            <li class="info-fi-mini"><div>Режисёр</div><div class="temp-info">Гай Ричи</div></li>
                            <hr class="remove-margin-middle">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   @endsection
