@extends('layouts.admin.base')

@section('main')
    <form method="POST" action="{{ route('admin.topic.update', ['topic' => $topic->id]) }}" class="bg-light m-4">
        @csrf
        @method('PATCH')
        <div class="mb-4 px-4 pt-1 text-center">
            <span class="fs-2 fw-weight-bold">Тема: {{ $topic->name }}</span>
        </div>
        <div class="mb-4 px-4 pt-1">
            <label for="name" class="form-label">Название темы</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $topic->name) }}">
        </div>
        <div class="mb-4 px-4 p-3 btn-group d-flex">
            <input type="submit" class="btn btn-info" value="Сохранить">
        </div>
    </form>
@endsection('main')
