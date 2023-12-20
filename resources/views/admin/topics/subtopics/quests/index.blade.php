@extends('layouts.admin.base')
@section('styles')
    <link rel="stylesheet" href="/styles/admin.css">
@endsection('styles')
@section('main')
<div class="container  .mx-auto  p-5">
    <div class="container">
        <p class="text-primary text-center fs-2">{{ $subtopic->name }}</p>
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
        @foreach ($quests as $quest)
            <div class="row  js-col" data="{{ $quest->id }}">
                <div class="col-sm border border-dark p-2">
                    {{ $quest->id }}
                </div>
                <div class="col-sm border border-dark  p-2">
                    <?php echo  $quest->name = preg_replace('/\<img.+\>/', '<картинка>',  $quest->name) ?>
                </div>
                <div class="col-sm border border-dark p-2">
                    <div class="btn-group d-flex">
                        <form action="{{ route('admin.quest.showFormUpdate', ['topic' => $topic->id, 'subtopic' => $subtopic->id, 'quest' => $quest->id]) }}" method="get">
                            @csrf
                            <input type="submit" value="Редактировать" class="btn btn-secondary">
                        </form>
                        <form action="{{ route('admin.quest.delete', ['topic' => $topic->id, 'subtopic' => $subtopic->id, 'quest' => $quest->id]) }}" method="post">
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
                <a href="{{ route('admin.quest.showFormAdd', ['topic' => $topic, 'subtopic' => $subtopic]) }}" class="btn btn-info">Создать вопрос</a>
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
            window.location.href = '/admin/topics/' + {{ $topic->id }} + '/subtopics/' + {{ $subtopic->id }} + '/quests/' + $(this).attr('data');
        })
    });
</script>
@endsection('main')
