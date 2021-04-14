# 概要

Wordpress を Headless CMS 化するための基本テーマです。
主に view の無効化と rest api のカスタマイズを行っています。
(※まだまだ開発途中です)

# 使い方

## 全ページ取得

1. [http://サーバー名.com/wp-json/custom/v1/allposts]に GET request
2. 全ページの「id,slug,title,content,category_name,time,thumbnail」が返ってくる

# ToDO

- トップページへのアクセス->disable
- ドキュメント作成
- and so on...!

# 参考リンク

開発にあたり大変お世話になっている文献たちです。

## Headless 化

[WordPress REST API でイマドキ Headless CMS](https://doocts.com/3373)

[Headless CMS と WordPress の囚人](https://qiita.com/teradonburi/items/fd2c34a52c0c4cfd0d22)

## REST API カスタマイズ

[WordPress の REST API で全記事を取得したい](https://qiita.com/webiscuit/items/535fa8c44c960f2c7192)
[WP REST API で独自エンドポイントのカスタマイズで投稿記事を全件取得できるようにする](https://designsupply-web.com/media/knowledgeside/6327/)

## コンタクトフォーム

[【Nuxt.js】お問い合わせフォーム実装に WordPress の Contact Form 7 で対応する](https://qiita.com/hiropy0123/items/33f3c3ffbb5879e8fe0a)

## Wordpress プラグイン

- Classic Editor
- Contact Form 7
- JAMstack Deployments
