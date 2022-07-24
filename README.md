# DogMeet app

## ディレクトリ構成

```
./
 ├────README.md
 ├────docker-compose.yaml
 ├────docker
 |     └────dockerfile
 |
 └────dogmeet-laravel-api
       ├────
       └────
```

## 環境構築

クローン
```
git clone https://github.com/makoto-tanji/dogmeet-laravel-api ./
```
.env作成
```
cd dogmeet-laravel-api
cp .env.example .env
```

Docker Compose実行
```
docker-compose.yamlがあるディレクトリで
docker compose up -d
```

コンテナ内で作業
```
docker exec -it web-container /bin/bash
php -v
php artisan -V
```

## バージョン

PHP  8.1.2

Laravel  Framework 9.15.0

mysql  Ver 15.1 Distrib 10.4.22-MariaDB

Vue.js  vue@2.6.14

Nuxt.js  nuxt@2.15.8
