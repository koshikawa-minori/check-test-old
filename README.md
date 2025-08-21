# 確認テスト_お問い合わせフォーム

# プロジェクト作成
composer create-project laravel/laravel check-test
cd check-test

# Docker用ファイル作成
touch Dockerfile docker-compose.yml

# Dockerビルドコンテナ起動
docker-compose up -d --build


## 環境構築
- Dockerビルド
  mkdir check-test
  cd check-test
  docker-compose up -d --build
  code .

-データベースの作成









からマイグレーション、シーディングまでを記述する

## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 例) 開発環境：http://localhost/