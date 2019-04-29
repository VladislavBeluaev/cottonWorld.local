@extends('user.layouts.app_user')
@section('pageTitle', $t_shirt->name)
@section('content')
    <section class="product_article">
        <div class="container pt-4">
            <div class="breadcrumbWrapper">
                <nav class="breadcrumbs">
                    <p><a href="{{route('user.index')}}">Главная</a></p>
                    <p><span class="fas fa-angle-right"></span></p>
                    <p><a href="{{route('user.t_shirts')}}">Мужские футболки</a></p>
                    <p><span class="fas fa-angle-right"></span></p>
                    <p><a href="{{route('user.t_shirts')}}"></a>{{$t_shirt->name}}</p>
                </nav>
            </div>
            <div class="product_article__container">
                <div class="article__container__image">
                <p><img src="@headerImg($t_shirt->images(),"src")" alt="@headerImg($t_shirt->images(),"alt")"></p>
                </div>
                <div class="article__container__description">
                    <h1>{{$t_shirt->name}}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection