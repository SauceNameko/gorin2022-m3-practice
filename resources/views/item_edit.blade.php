@extends('app')

@section('title')
    商品新規登録画面
@endsection
@section('content')
    <a href="{{ route('item_index') }}" class="btn btn-danger">戻る</a>
    <form action="{{ route('item_update', $item->id) }}" method="post">
        @csrf
        item_name: <input type="text" name="name" id="" value="{{ $item->name }}">
        price: <input type="text" name="price" id="" value="{{ $item->price }}">
        <input type="submit" class="btn btn-success">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    </form>
@endsection
