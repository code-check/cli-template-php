# CLIアプリケーション作成用テンプレート(PHP)

PHPでCLIアプリケーションを作成するためのテンプレートです。

[src/MyCommand.php](src/MyCommand.php)を編集することでCLIアプリケーションを作成することができます。

このテンプレートではCLI作成のベースとして[Symfony Console](http://symfony.com/doc/current/components/console/introduction.html)を使用しています。

## コマンドライン引数の取得方法
デフォルトの設定ではInputInterfaceの`getArgument('args')`を実行することで引数を配列として取得することができます。

``` php
  $args = $input->getArgument('args');
```

configure()をカスタマイズすることで自由に引数の取得方法を変更することができます。

## コマンド実行結果の標準出力への出力
OutputInterface#writelnメソッドを使用してください。

``` php
  $output->writeln($v);
```

