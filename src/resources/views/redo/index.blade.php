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
      <input type="text" name="last_name" value="{{ old('last_name') }}">
      @error('last_name')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="first_name">名</label>
      <input type="text" name="first_name"value="{{ old('first_name') }}">
      @error('first_name')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="gender">性別</label>
      <label><input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : ''}}>男性</label>
      <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : ''}}>女性</label>
      <label><input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : ''}}>その他</label>
      @error('gender')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="email">メール</label>
      <input type="email" name="email" value="{{ old('email') }}">
      @error('email')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="category_id">カテゴリ</label>
      <select name="category_id">
        <option value="">選択してください</option>
        <option value="1" {{ old('category_id') == '1' ? 'selected' : ''}}>商品のお届けについて</option>
        <option value="2" {{ old('category_id') == '2' ? 'selected' : ''}}>商品の交換について</option>
        <option value="3" {{ old('category_id') == '3' ? 'selected' : ''}}>商品トラブル</option>
        <option value="4" {{ old('category_id') == '4' ? 'selected' : ''}}>ショップへのお問い合わせ</option>
        <option value="5" {{ old('category_id') == '5' ? 'selected' : ''}}>その他</option>
      </select>
      @error('category_id')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="detail">お問い合わせ内容</label>
      <textarea name="detail" rows="4">{{ old('detail')}}</textarea>
      @error('detail')
        <p style="color: red">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit">確認する</button>
  </form>

  <form method="post" action="/redo">
    @csrf
    <button type="submit">/redo に post</button>
  </form>

</body>
</html>