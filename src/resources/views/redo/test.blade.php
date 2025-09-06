<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>redo</title>
</head>
<body style="padding: 24px; font-family:sans-serif">
  <h1>redo 簡易テスト</h1>

  <form method="post" action="/redo/confirm" style="margin-bottom:12px">
    @csrf
    <button type="submit">/redo/confirm に post</button>
  </form>

  <form method="post" action="/redo">
    @csrf
    <button type="submit">/redo に post</button>
  </form>

</body>
</html>