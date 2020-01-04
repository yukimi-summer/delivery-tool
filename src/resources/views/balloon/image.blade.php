@extends('layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">   
  <h1 class="h2">画像メッセージ作成</h1>
  <div class="pt-3 mr-4"><a href="/message/{{ $message->id }}">戻る</a></div>
</div>
@endsection