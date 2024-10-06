@extends('app')

@section('title')
    セットメニュー情報画面
@endsection
@section('content')
    <a href="{{ route('dashboard') }}" class="btn btn-danger">戻る</a>
    <a href="{{ route('setmenu_create') }}" class="btn btn-primary">セットメニュー新規登録</a>
    <table class="table table-bordered">
        <th>セットメニュー名</th>
        <th>商品名</th>
        <th></th>
        <th></th>
        @foreach ($setmenus as $setmenu)
            <tr>
                <td>{{ $setmenu->name }}</td>
                <td>{{ $setmenu->item_name }}</td>
                <td><a href="{{ route('setmenu_edit', $setmenu->id) }}" class="btn btn-success">編集</a></td>
                <td><a href="{{ route('setmenu_destroy', $setmenu->id) }}" class="btn btn-danger"
                        onclick="return confirm('本当に削除しますか？')">削除</a></td>
            </tr>
        @endforeach
    </table>
@endsection
