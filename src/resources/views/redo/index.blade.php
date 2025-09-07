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

  @if (session('status'))
  <p style="color: #2b7; margin:8px 0,">{{ session('status') }}</p>
  @endif

  <form class="form" method="post" action="/redo/confirm">
    @csrf
    <div>
      <label for="last_name">姓</label>
      <input type="text" name="last_name">
    </div>

    <div>
      <label for="first_name">名</label>
      <input type="text" name="first_name">
    </div>

    <div>
      <label for="gender">性別</label>
      <label><input type="radio" name="gender" value="1">男性</label>
      <label><input type="radio" name="gender" value="2">女性</label>
      <label><input type="radio" name="gender" value="3">その他</label>
    </div>

    <div>
      <label for="email">メール</label>
      <input type="email" name="email">
    </div>

    <div>
      <label for="category">カテゴリ</label>
      <select name="category_id">
        <option value="">選択してください</option>
        <option value="1">商品のお届けについて</option>
        <option value="2">商品の交換について</option>
        <option value="3">商品トラブル</option>
        <option value="4">ショップへのお問い合わせ</option>
        <option value="5">その他</option>
      </select>
    </div>

    <div>
      <label for="detail">お問い合わせ内容</label>
      <textarea name="detail" rows="4"></textarea>
    </div>

    <button type="submit">確認する</button>
  </form>

  <form method="post" action="/redo">
    @csrf
    <button type="submit">/redo に post</button>
  </form>

</body>
</html>