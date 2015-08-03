---
Title:    ミドルウェアについて理解する
Topics:   middleware
Code:     -
Id:       113
Position: 1
---

{problem}
Laravelの"ミドルウェア"について理解したい
{/problem}

{solution}
非常に簡単なものです。

それぞれのミドルウェアクラスは、いくつかのLaravelミドルウェアを用いて構成され、  
`handle()`メソッドを利用して実装されています。

```text
+--------------------------+
| ユーザー ミドルウェアクラス  |
+--------------------------+
| Session ミドルウェア       |
+--------------------------+
| Cookie ミドルウェア        |
+--------------------------+
| Laravel application      |
+--------------------------+
```

`handle()`メソッドを使ってリクエストを受信するように実装します  
`handle()`メソッドでは下記の４つを実装する必要があります

1. 必要に応じてリクエストを変更します
2. ミドルウェアを利用して、レスポンスを受信します
3. 必要に応じてレスポンスを変更します
4. レスポンスを返却します。

ロシアのマトリョーシカをイメージしてください  
Laravelアプリケーションは最も小さい人形であり、  
様々なミドルウェアに包まれて実装されています

Laravelアプリケーションでは、`handle()`メソッドが呼ばれると、  
アプリケーション起動後にすぐにリクエストが処理されて、  
レスポンスを返却します
{/solution}

{discussion}
ミドルウェアもシャットダウンできる事を忘れないでください

`TerminableInterface`を利用して実装している場合、  
アプリケーションがシャットダウンする時に`terminate()`が呼ばれます
{/discussion}

{credit}
Author:Chuck Heintzelman

Editor and Translator:Yuuki Takezawa
{/credit}