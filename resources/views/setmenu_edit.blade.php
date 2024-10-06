@extends('app')

@section('title')
    セットメニュー編集画面
@endsection
@section('content')
    <a href="{{ route('setmenu_index') }}" class="btn btn-danger">戻る</a>
    <form action="{{ route('setmenu_update', $setmenu->id) }}" method="post">
        @csrf
        setmenu_name: <input type="text" name="name" id="" value="{{ $setmenu->name }}">
        <select name="item_name" id="">
            @foreach ($items as $item)
                <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-success">
        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
    </form>
@endsection
