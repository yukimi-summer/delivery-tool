@extends('layout')
@section('title', 'メッセージ一覧')
@section('content')
<div class="pb-2 mb-3 border-bottom">   
  <h1 class="h2">メッセージ一覧</h1>
</div>
<div class="mt-4">
  <a href="/message/create" class="btn btn-outline-primary" role="button">新規作成</a>
</div>
<div class="mt-3">
  <table class="table table-hover table-responsive text-center">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">タイトル</th>
        <th class="text-center">作成時間</th>
        <th class="text-center">更新時間</th>
        <th class="text-center">削除</th>
      </tr>
    </thead>
    <tbody>  
      @foreach($messages as $message)
      <tr>
        <th class="align-middle" scope="row">
          <a href="/message/{{ $message->id }}">{{ $message->id }}</a>
        </th>
        <td class="align-middle">{{ $message->title }}</td>
        <td class="align-middle">{{ $message->created_at }}</td>
        <td class="align-middle">{{ $message->updated_at }}</td>
        <td class="align-middle">
          <form class="mb-0" action="/message/{{ $message->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><i class="fas fa-trash"></i></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $messages->links() }}
</div>
@endsection