@extends('layout')
@section('title', $message->title)
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">   
  <h1 class="h2">{{ $message->title }}</h1>
  <div class="pt-3 mr-4"><a href="/message/">戻る</a></div>
</div>
<div class="mt-4">
    <div class="dropdown">
        <a href="#" class="btn btn-outline-primary dropdown-toggle" role="button" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">新規作成</a>
        <div class="dropdown-menu shadow">
            <a class="dropdown-item">テキスト</a>
            <a class="dropdown-item">画像</a>
            <a class="dropdown-item">動画</a>
            <a class="dropdown-item">音声</a>
            <a class="dropdown-item">イメージマップ</a>
        </div>
    </div>
</div>
<div class="mt-3">
    <table class="table text-center">
        <thead class="text-primary">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">タイプ</th>
                <th class="text-center">メッセージ</th>
                <th class="text-center">作成時間</th>
                <th class="text-center">更新時間</th>
                <th class="text-center">削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach($message->balloons as $balloon)
            <tr>
                <th class="align-middle" scope="row">
                    <a href="/balloon/{{ $balloon->id }}/edit">{{ $balloon->id }}</a>
                </th>
                <td class="align-middle">{{ \App\Enums\BalloonType::getDescription($balloon->type) }}</td>
                <td class="align-middle">{!! \App\Enums\BalloonType::getDetails($balloon) !!}</td>
                <td class="align-middle">{{ $balloon->created_at }}</td>
                <td class="align-middle">{{ $balloon->updated_at }}</td>
                <td class="align-middle">
                    <form class="mb-0" action="/balloon/{{ $balloon->id }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection