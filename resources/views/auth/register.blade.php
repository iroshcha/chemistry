@extends('layouts.base')
@section('title')
    Регистрация
@endsection
@section('styles')
    <link rel="stylesheet" href="/styles/register.css">
@endsection
@section('main')
    <div class="container-xl position-absolute top-50 start-50 translate-middle bg-light-subtle border border-primary rounded-3">
        <form method="POST" action="{{ route('register')}}">
            @csrf
            <div class="mb-4 px-4 pt-1 text-center">
                <span class="fs-2 fw-weight-bold">Регистрация</span>
            </div>
            <div class="mb-4 px-4 pt-1">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class=" mb-4 px-4">
                <label for="email" class="form-label">Адрес электронной почты</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-4 px-4">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
            </div>
            <div class="mb-4 px-4">
                <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="px-4 pb-4">
                <button type="submit" class="btn btn-primary w-100 mx-auto">Зарегистрироваться</button>
            </div>
        </form>
        <div class="px-4 pb-4">
            <form action="{{ route('login') }}" method="GET" class="form-inline">
                @csrf
                <button type="submit" class="btn btn-secondary w-100 mx-auto">Уже есть аккаунт</button>
            </form>
        </div>
    </div>
@endsection
