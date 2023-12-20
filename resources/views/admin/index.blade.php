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
                Имя
            </div>
            <div class="col-sm fs-4 border border-dark">
                E-mail
            </div>
            <div class="col-sm border border-dark">
                Дата регистрации
            </div>
        </div>
        @foreach ($users as $user)
            <div class="row  js-col" data="{{ $user->id }}">
                <div class="col-sm border border-dark p-2">
                    {{ $user->id }}
                </div>
                <div class="col-sm border border-dark  p-2">
                    {{ $user->name }}
                </div>
                <div class="col-sm border border-dark  p-2">
                    {{ $user->email }}
                </div>
                <div class="col-sm border border-dark p-2">
                    {{ $user->created_at }}
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    $('document').ready(function (){

        $('.js-col').click(function(e) {
            if ( $(e.target).closest('.btn-group').length !== 0 ) {
                return;
            }
            window.location.href = '/admin/' + $(this).attr('data') + '/';
        })
    });
</script>

@endsection('main')
