# 飲食店予約アプリ

## 概要
ある企業のグループ会社の飲食店予約サービス

## 目的
 - 一覧画面からの店舗検索
 - ユーザー登録することによって「お気に入り」「予約」の登録ができる
 - マイページにて「お気に入り」「予約」の状況が一括で把握できる

## 使用技術
- HTML / CSS
- JavaScript
- Laravel 8.83.4
- PHP 8.0.13
- MySQL 15.1
- Visual Studio Code
- draw.io
- GitHub


## 環境構築手順
1.Composerのダウンロード
- Composer公式サイトにアクセス <https://getcomposer.org/download/>
- Macの場合
  - Installation - Linux / Unix / macOS＞Downloading the Composer Executableの章内
  
  - download this fileのリンクをクリック
  
  - composer.pharがダウンロード
  
  - ターミナルを起動後、Downloadディレクトリに移動し以下のコマンドを実行
    ```
    cd Downloads
    sudo mv composer.phar /usr/local/bin/composer
    chmod a+x /usr/local/bin/composer`
    ```
   - 以下のコマンドでバージョンを確認
      ```
        `composer -v`
      ```
  - Composerのバージョンが返ってくれば成功

- Windowsの場合
  - Installation - WindowsのUsing the Installer の章内
  
  - Composer-Setup.exeのリンクよりインストーラをダウンロード

  - 画面に従い「Install」→「Finish」

  - コマンドプロンプトを立ち上げ、以下のコマンドでバージョンを確認

      ```
        `composer -v`
      ```

  - Composerのバージョンが返ってくれば成功


2.MAMPまたはXAMPPのダウンロード
 - MAMP（Macの場合）
   - MAMPの公式サイトにアクセス <https://www.mamp.info/en/downloads/>
    - Appleマークがある、「MAMP ＆MAMP PRO」をクリック
    - インストーラーのウィザードに従ってインストールを進める
  - XAMPP（Windowsの場合）
    - XAMPPのダウンロードページからWindows向けXAMPPを選択します。<https://www.apachefriends.org/jp/index.html>
    - ダウンロードしたインストーラーをクリックし起動してセットアップ

3.プロジェクトの保存と設定
 - GitHubよりプロジェクトをダウンロード
    ```
    git clone https://github.com/TomokoMineyuki/resepj.git
    ```
- MAMPまたはXAMPP内のhtdocsファイルにプロジェクトを保存
- MySQLへログイン
- データベースの作成
- .envファイルを、下記のように修正
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=先程作成したデータベース名
  DB_USERNAME=root
  DB_PASSWORD=root（Windowsの場合は空欄）
  ```
- ターミナルにて、Laravelプロジェクト配下に移動し、下記コマンドでデータを挿入
  ```
  php artisan migrate
  php artisan db:seed
  ```
- サーバーを立ち上げる
  ```
  php artisan serve
  ```
- 「<http://127.0.0.1:8000> 」にアクセス


## 機能一覧

- ユーザー関連
  - ユーザー登録機能
  - ログイン機能
  - ログアウト機能
- 店舗情報関連
  - 店舗情報一覧
   - 店舗情報詳細
  - 店舗検索（エリア・ジャンル・店名）
  - ユーザーによる「お気に入り」登録
  - ユーザーによる「お気に入り」削除
- 予約機能
   - 店舗来店予約登録（日付・時間・人数）
   - 店舗来店予約削除
- マイページ
  - 「お気に入り」一覧表示
  - 予約状況の表示


## ER図
![ER図](public\img\readme\reseER.png)