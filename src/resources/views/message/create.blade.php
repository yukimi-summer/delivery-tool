@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">   
  <h1 class="h2">メッセージ新規作成</h1>
  <div class="pt-3 mr-4"><a href="/message/">戻る</a></div>
</div>
  {{Form::open(['url' => '/message/create'])}}
  <div class="form-group">
    {{Form::label('title', '配信タイトル')}}
    {{Form::text('title', '', ['id' => 'title', 'class' => 'form-control'])}}
  </div>
  {{Form::submit('作成', ['class' => 'btn btn-outline-primary'])}}
  {{Form::close()}}
@endsection