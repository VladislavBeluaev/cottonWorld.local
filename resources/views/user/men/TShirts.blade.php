@extends('user.layouts.app_user')
@section('pageTitle', 'Мужские футболки оптом от производителя')
@section('content')
    <section class="menTShirts">
        <div class="container pt-4">
            <div class="breadcrumbWrapper">
                <nav class="breadcrumbs">
                    <p><a href="{{route('user.index')}}">Главная</a></p>
                    <p><span class="fas fa-angle-right"></span></p>
                    <p><a href=""></a>Мужские футболки</p>
                </nav>
            </div>
            <div class="collection-container d-flex justify-content-between align-items-start">
                <div class="aside-container">
                    <div class="filter-group">
                        <h4>Вид</h4>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="promo-tShirts">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Промо футболки</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="polo-tShirts">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Футболки поло</span>
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Длина рукава</h4>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-longSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Футболки с длинным рукавом</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Футболки с коротким рукавом</span>
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Цвет</h4>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-longSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Белый</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Черный</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Красный</span>
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Качество материала</h4>
                        <label class="checkbox-button sale-material">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Акционные</span>
                            <span ><img src="{{asset('images/sales.png')}}" alt="sale"></span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-longSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Эконом</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Стандарт</span>
                        </label>
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" name="tShirts-shortSleeve">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label">Премиум</span>
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Цена</h4>
                        <div class="input-group input-group-sm">
                            <input type="number" name="min-price" class="form-control" placeholder="от">
                            <input type="number" name="max-price" class="form-control" placeholder="до" >
                            <input type="hidden" name="inputPrice" title="result">
                        </div>
                    </div>
                </div>
                <div class="mobile-aside-container d-none"></div>
                <div class="products-container"></div>

            </div>
        </div>
    </section>
@endsection
