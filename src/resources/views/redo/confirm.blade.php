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

    <p>姓:{{ $input['last_name'] }}</p>
    <p>名:{{ $input['first_name'] }}</p>
    <p>性別:{{ $genderMap[$input['gender']] ?? ''}}</p>
    <p>カテゴリ:{{ $categoryMap[$input['category_id']] ?? '' }}</p>
    <p>メール:{{ $input['email'] }}</p>
    <p>内容:</p>
    <pre style="white-space: pre-wrap; margin:0;">{{ $input['detail']}}</pre>


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

    <form method="post" action="/redo">
      @csrf
      <input type="hidden" name="last_name" value="{{ $input['last_name'] }}">
      <input type="hidden" name="first_name" value="{{ $input['first_name'] }}">
      <input type="hidden" name="gender" value="{{ $input['gender'] }}">
      <input type="hidden" name="email" value="{{ $input['email'] }}">
      <input type="hidden" name="category_id" value="{{ $input['category_id'] }}">
      <input type="hidden" name="detail" value="{{ $input['detail'] }}">
      <button name="_back" value="1" type="submit">修正する</button>
    </form>
</body>
</html>