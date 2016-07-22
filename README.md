# CLI template for PHP

This is template app for making CLI application with PHP.  
You can make CLI application by editing [src/MyCommand.php](src/MyCommand.php).

This app uses [Symfony Console](http://symfony.com/doc/current/components/console/introduction.html) for base of CLI application.

## How to get input parameters
As default, You cant ll commandline parameters by `InputInterface#getArgument('args')` method.

``` php
  $args = $input->getArgument('args');
```

You can customize configure() method to change how to get input parameters.

## How to output result
You can use OputputInterface#writeln method.

``` php
  $output->writeln($v);
```

