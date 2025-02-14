@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection



@section('content')
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
            <div class="register-form">
                <h2 class="register-form__heading">商品登録</h2>

                <div class="register-form__inner">
                    <form class="register-form__form" action="/products" method="post">
                        @csrf
                        <div class="register-form__group">
                            <label class="register-form__label" for="name">商品名<span class="register-form__required">必須</span>
                            </label>
                            <input class="register-form__input" type="text" name="name" id="name" placeholder="商品名を入力">
                            <p class="register-form__error-message">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="register-form__group">
                            <label class="register-form__label" for name="price">値段<span class="register-form__required">必須</span>
                            </label>
                            <input class="register-form__input" type="number" name="price" id="price" placeholder="値段を入力">
                            <p class="register-form__error-message">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <!-- <div class="register-form__group">
                            <label class="register-form__label" for name="image">商品画像<span class="register-form__required">必須</span>
                            </label>
                            <input id="image" type="file" name="image">
                            <button>ファイルを選択</button>

                        </div> -->
                        <div class="register-form__group">
                            <label class="register-form__label" for name="season">季節<span class="register-form__required">必須</span>
                                <span class="register-form__required__season">複数選択可</span>
                                <input type="radio" name="season" value="春">春
                                <input type="radio" name="season" value="夏">夏
                                <input type="radio" name="season" value="秋">秋
                                <input type="radio" name="season" value="冬">冬
                            </label>
                        </div>
                        <div class="register-form__group">
                            <span class="register-form__required">必須</span>
                            </label>
                            <p class="contact-form__error-message">
                                @error('season')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="register-form__group">
                            <label class="register-form__label" for name="detail">商品説明<span
                                    class="register-form__required">必須</span>
                            </label>
                            <input class="register-form__textarea" type="text" name="description" id="description" placeholder="商品の説明を入力">
                            <div class="register-form__btn">
                                <input class="register-form__back-btn" type="submit" value="戻る" name="back">
                                <input class="register-form__btn btn" type="submit" value="登録" name="register">
                            </div>
                    </form>
                </div>
            </div>
@endsection('content')