---
Title:    パッケージのビューをアプリケーション上で公開したい
Topics:   artisan
Position: 25
---

{problem}
サードパーティのビューをアプリケーションへコピーしたい
{/problem}

{solution}
`php artisan view:publish`コマンドが利用できます

```bash
$ php artisan view:publish cool-package
```

このコマンドは`app/views/cool-package`ディレクトリへ必要な設定ファイルを生成します
{/solution}

{discussion}
Laravel向けでないパッケージの場合、パスの指定が必要になります

```bash
$ php artisan view:publish cool-package --path=/package/view/dir
```
{/discussion}

{credit}
Author:Chuck Heintzelman

Editor and Translator:syossan27  
[Twitter](https://twitter.com/syossan27)  
[web](http://syossan.hateblo.jp/0)
{/credit}
