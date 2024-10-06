@extends('app')

@section('title')
    ダッシュボード画面
@endsection
@section('content')
    <a href="{{ route('logout') }}" class="btn btn-outline-danger">ログアウト</a>
    <a href="{{route('item_index')}}" class="btn btn-primary">商品情報</a>
    <a href="{{route('setmenu_index')}}" class="btn btn-success">セットメニュー情報</a>
@endsection
