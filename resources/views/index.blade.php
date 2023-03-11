@extends('layouts.default')

@section('content')

<form action="{{route('inquiry.create')}}" method="post">
    @csrf
    <p>氏名</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="text" name="email"><br>
    <input type="submit" value="送信">
</form>
@endsection