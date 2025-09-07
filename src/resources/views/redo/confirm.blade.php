<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>簡易テスト</title>
</head>
<body>
  <h1>確認画面</h1>

 <div>
      <label for="last_name">姓</label>
      <input type="text" name="last_name" value="{{ $input['last_name'] }}" readonly>
    </div>

    <div>
      <label for="first_name">名</label>
      <input type="text" name="first_name" value="{{ $input['first_name'] }}" readonly>
    </div>

    @php
      $genderMap = [1 => '男性', 2 => '女性', 3 => 'その他'];
      $categoryMap = [
        1 => '商品のお届けについて',
        2 => '商品の交換について',
        3 => '商品トラブル',
        4 => 'ショップへのお問い合わせ',
        5 => 'その他',
      ];
    @endphp

    <div>
      <label for="gender">性別</label>
      <input type="text" name="gender" value="{{ $genderMap[$input['gender']] ?? '' }}" readonly>
    </div>

    <div>
      <label for="email">メール</label>
      <input type="email" name="email" value="{{ $input['email'] }}" readonly>
    </div>

    <div>
      <label for="category">カテゴリ</label>
      <input type="text" name="category_id" value="{{ $input['category_id'] }}" readonly>
    </div>

    <div>
      <label for="detail">お問い合わせ内容</label>
      <textarea name="detail" rows="4" readonly>{{ $input['detail'] }}</textarea>
    </div>

    <form method="post" action="/redo">
      @csrf
      <input type="hidden" name="last_name" value="{{ $input['last_name'] }}">
      <input type="hidden" name="first_name" value="{{ $input['first_name'] }}">
      <input type="hidden" name="gender" value="{{ $input['gender'] }}">
      <input type="hidden" name="email" value="{{ $input['email'] }}">
      <input type="hidden" name="category_id" value="{{ $input['category_id'] }}">
      <input type="hidden" name="detail" value="{{ $input['detail'] }}">
      <button type="submit">送信する</button>
    </form>
</body>
</html>