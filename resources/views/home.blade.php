@extends('layouts.base')



@section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Администрирование</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Ученики</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.topics') }}">Темы</a></li>
                </ul>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-flex">
                        @csrf
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"> {{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
                        </ul>
                        <input type="submit" class="btn btn-danger" value="Выход">
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container  .mx-auto  p-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">E-mail</th>
                <th scope="col">Дата регистрации</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection('main')
