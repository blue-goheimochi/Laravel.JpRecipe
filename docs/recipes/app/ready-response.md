---
Title:    アプリケーションがリクエスト処理の準備ができているかどうか
Topics:   -
Position: 19
---

{problem}
アプリケーションがリクエスト処理の準備ができているかどうか確認したい
{/problem}

{solution}
`App::readyForResponses()`メソッドを利用したい

```php
// In a service provider
if (\App::readyForResponses()) {
    // アプリケーションが起動していたら、準備が整っている場合に何かしたいコード
}
```
{/solution}

{discussion}
`App::isBooted()`のエイリアス、つまり同じものです

こちらを参照してください [[アプリケーションが起動されているかどうかを判定する]].

アプリケーションの仕組みとして、  
リクエスト関連の処理が先に整ってから各サービスプロバイダーが読み込まれるまで、  
任意のコード内では(`app/start/global.php`, `controllers`, `routes`, `views`)、  
常に`true`が返却されます

サービスプロバイダに記述するのが一番理にかなっているかもしれません
{/discussion}

{credit}
Author:Chuck Heintzelman

Editor and Translator:Yuuki Takezawa
{/credit}
