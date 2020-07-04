<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>test</h1>
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
</body>
</html>