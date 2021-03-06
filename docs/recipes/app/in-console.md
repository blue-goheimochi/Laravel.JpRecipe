---
Title:    コンソールで実行しているか判定する
Topics:   console, environment
Position: 2
---

{problem}
現在実行されているのが、コンソールで実行されているものかどうかを判定したい  

`php_sapi_name()`で現在実行されているインターフェースを取得することができますが、  
Laravelの場合は、もっとエレガントな方法で取得可能です  
{/problem}

{solution}
`App::runningInConsole()`を利用します

```php
if (\App::runningInConsole()) {
	echo "consoleで実行中！";
}
```
{/solution}

{discussion}
実際はLaravelは`php_sapi_name()`を利用して実装しています  

`php_sapi_name()`の値が`'cli'`であれば、コンソールで実行されていると判定できます
{/discussion}

{credit}
Author:Chuck Heintzelman

Editor and Translator:Yuuki Takezawa
{/credit}
