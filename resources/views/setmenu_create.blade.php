@extends('app')

@section('title')
    セットメニュー新規登録画面
@endsection
@section('content')
    <a href="{{ route('setmenu_index') }}" class="btn btn-danger">戻る</a>
    <form action="{{ route('setmenu_store') }}" method="post">
        @csrf
        setmenu_name: <input type="text" name="name" id="">
        <select name="item_id[]" id="" multiple>
            @foreach ($items as $item)
                <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary">
        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
    </form>
@endsection
