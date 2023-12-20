@extends('layouts.base')

@section('title')
    Авторизация
@endsection
@section('styles')
    <link rel="stylesheet" href="/styles/authorization.css">
@endsection
@section('main')
    <div class="container position-absolute top-50 start-50 translate-middle bg-light-subtle border border-primary rounded-3">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4 px-4 pt-1 text-center">
                <span class="fs-2 fw-weight-bold">Вход</span>
            </div>
            <div class="mb-4 px-4 pt-1">
                <label for="email" class="form-label">Адрес электронной почты</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-4 px-4">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
            </div>
            <div class="mb-4 px-4">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Запомнить</label>
            </div>
            <div class="pb-4 px-4">
                <button type="submit" class="btn btn-primary w-100 mx-auto">Войти</button>
            </div>
        </form>
        <div class="px-4 pb-4">
            <form action="{{ route('register') }}" method="GET" class="form-inline">
                @csrf
                <button type="submit" class="btn btn-secondary w-100 mx-auto">Зарегистроваться</button>
            </form>
        </div>
    </div>
@endsection






