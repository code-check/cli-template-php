# コマンドラインアプリケーション(CLI アプリ)作成用テンプレート(PHP)

[Main.php](src/Main.php)を編集して、CLIアプリを実装してください。  
チャレンジ内でファイルの作成が許可されていれば、可読性等のためにファイルを分割する事も可能です。

## コマンドライン引数の取得方法
[Main.php](src/Main.php)ファイルに定義されている、`run`という関数内で `$argv` の名前で取得可能です。また、C言語のように `$argc` も同時に渡され、引数の個数が取得可能です。

```php
<?php
class Main {
  public function run ($argc, $argv)
  {
    // code to run
  }
}
```

ここで渡される `$argc` 及び `$argv` は [index.php](index.php) の中で渡される [$argc](http://php.net/manual/ja/reserved.variables.argc.php) および [$argv](http://php.net/manual/ja/reserved.variables.argv.php) です。 ただし、`run` 関数内の `$argc`, `$argv` は上の変数とは違うので注意してください。

## コマンド実行結果の標準出力への出力
標準出力への出力には `printf` 関数等が使用できます。

``` php
printf("%s", args);
```
