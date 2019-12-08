<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


### 下に反省書いてます。。

# laravel


## Clone the repository

```
git clone https://github.com/itk-mnmgit/skillExam.git
```


## Switch to the repo folder

```
cd skillExam-application-laravelapp
```

## Install all the dependencies using composer

```
composer install
```


## Copy the example env file and make the required configuration changes in the .env file

```
cp .env.example .env
```

## Generate a new application key

```
php artisan key:generate
```

## Run the database migrations (Set the database connection in .env before migrating)

```
php artisan migrate
```

## Start the local development server

```
php artisan serve
```

## You can now access the server at http://localhost:8000

# 今後の実装予定

- ジャンル を指定すればそのジャンルの質問のみ表示
- status ==1⇨未解決 / ==2⇨解決 マークをつける
- genre_id から genre_nameの取得
- どの質問に対しての答えなのかを示すために$question_idを回答作成画面に持って行きたかったが、できなかった。
- 役に立ったね！ボタン
- qiita的な ブログ機能
- generationカラム　で何期生か
- 卒業生の紹介も兼ねてprofileページなど

# 反省
- プログラム問題の問3が一切わかりませんでした。
- ER図をPCで作る時間がありませんでした。
- 全部中途半端になってしまって悔しいので、チーム開発の方はしっかり完成させるので楽しみにしていてください。
- 3ヶ月エンジニア留学をしていて結構必要だなと思ったサービスなので、日本に帰ってインターンに来る間に完成度抜群のものを作っておきます。
- githubで課題提出などをしたことがなく、ちゃんと共有できている気がしないので、明日の朝完に確認してもらって間違っていたら修正の上、再度共有させていただきます。
