@extends('layouts.admin.base')
@section('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection('styles')
@section('main')
    <div class="container bg-light">
    </div>
    <div class="container bg-light">
        <div class="px-4 pt-1 text-center">
            <span class="fs-2 fw-weight-bold"> {{ $subtopic->name }}</span>
        </div>
        <div class="row m-4">
            <?php echo  $quest->name ?>
        </div>
        <div class="row m-4 bg-info rounded-pill">
            @foreach($answers as $answer)
            <div class="col p-3">
                <div class="bg-{{$answer->is_right ? 'success' : 'secondary'}} text-center p-2 rounded-pill">{{$answer->name}}</div>
            </div>
            @endforeach
        </div>
    </div>

@endsection('main')
