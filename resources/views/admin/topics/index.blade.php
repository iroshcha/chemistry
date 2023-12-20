@extends('layouts.admin.base')
@section('styles')
    <link rel="stylesheet" href="/styles/admin.css">
@endsection('styles')
@section('main')
<div class="container  .mx-auto  p-5">
    <div class="container">
        <div class="row bg-secondary">
            <div class="col-sm fs-4 border border-dark">
                #
            </div>
            <div class="col-sm fs-4 border border-dark">
                Название
            </div>
            <div class="col-sm border border-dark">
            </div>
        </div>
        @foreach ($topics as $topic)
            <div class="row  js-col" data="{{ $topic->id }}">
                <div class="col-sm border border-dark p-2">
                    {{ $topic->id }}
                </div>
                <div class="col-sm border border-dark  p-2">
                    {{ $topic->name }}
                </div>
                <div class="col-sm border border-dark p-2">
                    <div class="btn-group d-flex">
                        <form action="{{ route('admin.topic.showFormUpdate', ['topic' => $topic->id]) }}" method="get">
                            @csrf
                            <input type="submit" value="Редактировать" class="btn btn-secondary">
                        </form>
                        <form action="{{ route('admin.topic.delete', ['topic' => $topic->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-sm m-2 btn-group d-flex">
                <a href="{{ route('admin.topic.showFormAdd') }}" class="btn btn-info">Новая тема</a>
            </div>
        </div>
    </div>
</div>
<script>
    $('document').ready(function (){

        $('.js-col').click(function(e) {
            if ( $(e.target).closest('.btn-group').length !== 0 ) {
                return;
            }
            window.location.href = '/admin/topics/' + $(this).attr('data')+'/subtopics';
        })
    });
</script>
@endsection('main')
