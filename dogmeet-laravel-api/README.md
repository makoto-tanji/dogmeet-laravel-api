## テーブル設計

usersテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| name | varchar(191) |  |  | o |  |
| email | varchar(191) |  | o | o |  |  |
| password | varchar(191) |  |  | o | |
| role | unsigned tinyint |  |  |  |  |
| created_at | timestamp |  |  |  |	 |
| updated_at | timestamp |  |	 |  |	 |

dogsテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| dog_name | varchar(191) |  |  | o	|  |
| overview | text |  |	|  |  |
| birthday | date |  |	|  |	|
| sex | unsigned tinyint |  |  |  |  |
| thumbnail_path | varchar(191) |  |  |  |  |
| area_id | unsigned bigint |  |  |  | areas(id) |
| breed_id | unsigned bigint |  |  |  | breeds(id) |
| user_id |	unsigned bigint |	 |  |  | users(id) |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

reservationsテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| user_id |	unsigned bigint |  |  | o | users(id) |
| dog_id | unsigned bigint |  |  | o | dogs(id) |
| reservation_date | dateTime |  |  | o |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

areasテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| area_name | varchar(191) |  |  | o |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

breedsテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| breed_name | varchar(191) |  |  |	o |  |
| size | unsigned tinyint |  |  |  |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

schedulesテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| start_time | time |  |  |  |  |
| end_time | time |  |  |  |  |
| sunday | unsigned tinyint |  |  | o |  |
| monday | unsigned tinyint |  |  | o |  |
| tuesday | unsigned tinyint |  |  | o |  |
| wednesday | unsigned tinyint |  |  | o |  |
| thursday | unsigned tinyint |  |  | o |  |
| friday | unsigned tinyint |  |  |	o |  |
| saturday | unsigned tinyint |  |  | o |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

dog_scheduleテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id |unsigned bigint| o |  | o |  |
| dog_id | unsigned bigint|  |  | o | dogs(id) |
| schedule_id | unsigned bigint |  |  | o | schedules(id) |
| meridian | unsigned tinyint |  |  | o |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

colorsテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| color | varchar(191) |  |  | o |  |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

color_dogテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| color_id | unsigned bigint |  |  | o | colors(id) |
| dog_id | unsigned bigint |  |  | o | dogs(id) |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

favoritesテーブル
| カラム名 | 型 | PRIMARY KEY | UNIQUE KEY | NOT NULL | FOREIGN KEY |
| ------- | -- | ----------- | ---------- | -------- | ----------- |
| id | unsigned bigint | o |  | o |  |
| dog_id | unsigned bigint |  |  | o | dogs(id) |
| user_id | unsigned bigint |  |  | o | users(id) |
| created_at | timestamp |  |  |  |  |
| updated_at | timestamp |  |  |  |  |

## ER図

![dogmeet drawio](https://user-images.githubusercontent.com/94814206/181248627-bbf4d46b-cf4f-4cf7-96ab-6b45d69d36a3.png)


## API仕様

| パス | メソッド | リクエストボディ| パスパラメータ| &nbsp;&nbsp;&nbsp;概要&nbsp;&nbsp;&nbsp; |
| -- | -- | -- | -- | -- |
| /api/auth/register | POST | name, email, password |  |	会員登録 |
| /api/auth/login | POST | name, email, password |	 | ログイン |
| /api/auth/logout | POST |   |  | ログアウト |
| /api/auth/update/ | POST |name, email, password | {user_id} | ユーザー情報更新 |
| /api/auth/role/ | POST | role |{user_id} | ユーザー権限更新 |
| /api/auth/users | GET	|   |  | ユーザー一覧取得 |
| /api/auth/user | GET |   | | ユーザー情報取得 |
| /api/auth/mail | POST | name, email, text |   | メール送信 |
| /api/auth/dog |	GET |  |  | 犬情報取得 |
| /api/auth/dog |POST | dog_name, overview, birthday, thumbnail_url, area_id, breed_id,,color_id,<br>sex_id, user_id |  | 犬追加 |
| /api/auth/dog | GET |  | /{dog_id} | 詳細情報取得 |
| /api/auth/dog | PUT | dog_id | /{dog_id} | 犬情報変更 |
| /api/auth/dog |DELETE | dog_id | /{dog_id} | 犬情報削除 |
| /api/auth/reservation | POST | dog_id, user_id, reservation_date |  | 予約登録 |
| /api/auth/reservation | DELETE |  | /{reservation_id} | 予約削除 |
| /api/auth/favorite | POST | dog_id, user_id |  | お気に入り登録 |
| /api/auth/favorite/destroy | POST | dog_id, user_id |  | お気に入り削除 |
| /api/auth/schedule | POST |start_time, end_time, sunday,<br>monday, tuesday, wednesday,<br>thursday, friday, saturday |  | スケジュール追加 |
| /api/auth/schedule | PUT | start_time, end_time, sunday,<br>monday, tuesday, wednesday,<br>thursday, friday, saturday | /{schedule_id} | スケジュール更新 |
| /api/auth/schedule |DELETE |  | /{schedule_id} | スケジュール削除 |
| /api/auth/image | POST | imgFile, imgName |  | 画像追加 |
| /api/area | GET |  |  | 公園取得 |
| /api/breed | GET |  |  |犬種取得 |
| /api/color | GET |  |  | 色取得 |