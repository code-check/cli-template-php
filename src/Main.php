<?php namespace Codecheck;

class Main
{
  public function run ($argc, $argv)
  {
    foreach (array_slice($argv, 1) as $arg) {
      printf("%s\n", $arg);
    }
  }
}
