#レシピ追加方法
管理画面からレシピを追加するほか、  
マークダウンファイルを追加してレシピを登録する事も可能です

##ヘッダー
```
---
```
囲みでタイトル、トピック(タグ)、表示順のポジションを記述してください

###タイトル Title
レシピのタイトルとなります

###トピックス Topics
レシピに結びつけたいタグがあれば記述して下さい。
特に指定が無い場合は

```
-
```
のみでもかまいません

###表示順 Position
表示順のポジションは、カテゴリー内での並び順となります

####例 Example
```
---
Title:    ボタンを作成する
Topics:   forms
Position: 22
---
```

##コンテンツ
コンテンツは、それぞれ以下の中括弧タグ囲みで記述して下さい  
各コンテンツ内は、Markdown(GitHub Flavored Markdown)で記述して下さい
改行の場合はそのまま改行していただいて構いません

###悩み事、疑問点など
```
{problem} {/problem}
```

###解決方法や具体例
```
{solution} {/solution}
```

###アドバイスやうんちく
```
{discussion} {/discussion}
```

###執筆者情報
```
{credit} {/credit}
```
翻訳の場合は、英語著者名は必須、  
翻訳者を記載して下さい  
レシピを提供される方は、提供者様のお名前を記述して下さい  
ご自身のwebサイトや、メールアドレス等自由に記述して下さい


##他のレシピへのリンク
他のレシピへのリンクを挿入したい場合は、
`[[`, `]]`で遷移先のレシピのタイトルを指定して下さい

##カテゴリの追加
migrateへ追加してください
