@extends('layout')
@section('title', $message->title)
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">   
  <h1 class="h2">テキストメッセージ作成</h1>
  <div class="pt-3 mr-4"><a href="/message/{{ $message->id }}">戻る</a></div>
</div>
<div class="mt-3">
    {{ Form::open(['url' => $type === 'update' ? "/message/{$message->id}/{$balloon->id}/update?type=text" : "/message/{$message->id}/create?type=text"]) }}
    <div class="form-group">
        {{ Form::label('text', 'テキストメッセージ') }}
        {{ Form::textarea('text', $type === 'update' ? $balloon->text : null, ['size' => '100x20', 'class' => 'form-control']) }}
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-start pb-2 mb-3">
        {{ Form::submit($type === 'update' ? '更新' : '作成', ['class' => 'btn btn-outline-primary']) }}
        <span class="text-secondary">0/2000</span>
    </div>
    {{ Form::close() }}
</div>
@endsection