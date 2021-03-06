---
Title:    フォームで利用するセッションを設定する
Topics:   forms
Position: 28
---

{problem}
フォームで利用するセッションクラスを変更したい
{/problem}

{solution}
`Form::setSessionStore()`メソッドを利用します

```php
$session = new \MySessionHandler;
\Form::setSessionStore($session);
```
{/solution}

{discussion}
これはテストで非常に有用です

実装したフォームマクロのユニットテストをしている場合に、  
このメソッドを利用して、必要に応じてセッションクラスをモックする事ができます
{/discussion}

{credit}
Author:Chuck Heintzelman

Editor and Translator:Yuuki Takezawa
{/credit}
