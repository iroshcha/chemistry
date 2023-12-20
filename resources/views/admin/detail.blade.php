@extends('layouts.admin.base')
@section('styles')
    <link rel="stylesheet" href="/styles/admin.css">
@endsection('styles')
@section('main')
<div class="container  .mx-auto  p-5">
    <div class="fs-1">Ученик {{ $user->name }} </div>
    @if ($topics->isEmpty())
        <div class="fs-1">Нет назначеных тем!</div>
    @else
        <div class="container">
            <div class="row bg-secondary">
                <div class="col-sm fs-4 border border-dark">
                    #
                </div>
                <div class="col-sm fs-4 border border-dark">
                    Название
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
                </div>
            @endforeach
        </div>
    @endif
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
