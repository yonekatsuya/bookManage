@extends('layout.index')

@section('content')
  <form method="post" action="http://192.168.33.14/laravel_lessons/bookManage/bookManage/public/">
    @csrf
    書籍名：<input type="text" name="name">
    <input type="submit" value="登録">
  </form>

  <ul>
    @if (isset($books))
      @foreach ($books as $book)
        <li>{{$book->name}}</li>
      @endforeach
    @endif
  </ul>
@endsection