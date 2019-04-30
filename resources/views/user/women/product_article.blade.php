@extends('user.layouts.app_user')
@section('pageTitle', $t_shirt->name)
@section('content')
    <section class="product_article">
        <div class="container pt-4">
            <div class="breadcrumbWrapper">
                <nav class="breadcrumbs">
                    <p><a href="{{route('user.index')}}">Главная</a></p>
                    <p><span class="fas fa-angle-right"></span></p>
                    <p><a href="{{route('user.woman_t_shirts')}}">Женские футболки</a></p>
                    <p><span class="fas fa-angle-right"></span></p>
                    <p><a href="{{route('user.woman_t_shirts')}}"></a>{{$t_shirt->name}}</p>
                </nav>
            </div>
            <div class="product_article__container">
                <div class="article__container__image">
                <p><img src="@headerImg($t_shirt->images(),"src")" alt="@headerImg($t_shirt->images(),"alt")"></p>
                </div>
                <div class="article__container__text-content">
                    <div class="article__container__description">
                        <h1>{{$t_shirt->name}}</h1>
                        <div class="article-description">
                            <p>{{$t_shirt->description}}</p>
                            <p><span>Материал:</span>{{$t_shirt->material}}</p>
                            <p><span>Состав:</span>{{$t_shirt->composition}}</p>
                        </div>
                    </div>

                    <div class="article__container__price">
                        <p>{{$t_shirt->price}}</p>
                    </div>
                    <div class="article__container__size-box">
                        <div class="article__container__size"></div>
                        <div class="article__container__size"></div>
                        <div class="article__container__size"></div>
                    </div>
                    <div class="article__container__color-box">
                        <div class="article__container__color"></div>
                        <div class="article__container__color"></div>
                        <div class="article__container__color"></div>
                    </div>
                    <div class="article__container__qty-box">
                        <div class="article__container__qty-add">+</div>
                        <div class="article__container__qty"></div>
                        <div class="article__container__qty-rem">-</div>
                    </div>
                    <div class="article__container__cart-box">
                        <div class="article__container__cart-buy">+</div>
                        <div class="article__container__add-to-cart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection