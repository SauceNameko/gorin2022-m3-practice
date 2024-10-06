@extends('app')

@section('title')
    商品新規登録画面
@endsection
@section('content')
<a href="{{route('item_index')}}" class="btn btn-danger" >戻る</a>
    <form action="{{ route('item_store') }}" method="post">
        @csrf
        item_name: <input type="text" name="name" id="">
        price: <input type="text" name="price" id="">
        <input type="submit" class="btn btn-primary">
        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
    </form>
@endsection
