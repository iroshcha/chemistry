@extends('layouts.admin.base')
@section('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection('styles')
@section('main')
    <form method="POST" action="{{ route('admin.quest.add', ['topic' => $topic->id, 'subtopic' => $subtopic]) }}" class="bg-light col-md-8 m-4 position-absolute top-50 start-50 translate-middle">
        @csrf
        <div class="px-4 pt-1 text-center">
            <span class="fs-2 fw-weight-bold"> {{ $subtopic->name }}</span>
        </div>
        <div class="form-group m-4">
            <textarea name="quest" id="quest" placeholder="Вопрос"></textarea>
        </div>
        <div class="form-group row m-2">
            <div class="col">
                <input type="text" class="form-control" name="answer[]" placeholder="Ответ">
                <input type="radio" class="js-is_right" name="is_right" value="0">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="answer[]" placeholder="Ответ">
                <input type="radio" class="js-is_right" name="is_right" value="1">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="answer[]" placeholder="Ответ">
                <input type="radio" class="js-is_right" name="is_right" value="2">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="answer[]" placeholder="Ответ">
                <input type="radio" class="js-is_right" name="is_right" value="3">
            </div>
        </div>
        <div class="mb-4 px-4 p-3 btn-group d-flex">
            <input type="submit" class="btn btn-info" value="Сохранить">
        </div>
    </form>
    <script>
        CKEDITOR.replace( 'quest', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            clipboard_handleImages: false
        });
    </script>
@endsection('main')
