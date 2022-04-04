<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todoアプリ</title>
</head>
<body>
  <h2>Todo アプリ</h2>
  <form action="/todo" method="POST">
    @csrf
    <input type="text" name="name" placeholder="ここに名前を入れてね" />
    <input type="text" name="text" placeholder="今日する事は何かな？">
    <button type="submit">TODO</button>
  </form>

  <h3>Todoリスト</h3>
  <ul>
    @foreach ($todo as $todo)
    <li>
      {{ $todo->name }}
      <form action="/todo" style="display: inline" method="POST">
       @csrf
       @method('delete')
       <button type="submit">DELETE</button>
      </form>
    </li>
    @endforeach
  </ul>
</body>
</html>