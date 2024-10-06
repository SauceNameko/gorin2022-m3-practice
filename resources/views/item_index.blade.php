@extends('app')

@section('title')
    商品情報画面
@endsection
@section('content')
<a href="{{route('dashboard')}}" class="btn btn-danger" >戻る</a>
    <a href="{{ route('item_create') }}" class="btn btn-primary">商品新規登録</a>
    <table class="table table-bordered">
        <th>商品名</th>
        <th>価格</th>
        <th></th>
        <th></th>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="{{ route('item_edit', $item->id) }}" class="btn btn-success">編集</a></td>
                <td><a href="{{ route('item_destroy', $item->id) }}" class="btn btn-danger"
                        onclick="return confirm('本当に削除しますか？')">削除</a></td>
            </tr>
        @endforeach
    </table>
@endsection
