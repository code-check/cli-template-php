<?php namespace Codecheck;

function run ($argc, $argv)
{
  foreach (array_slice($argv, 1) as $arg) {
    printf("%s\n", $arg);
  }
}
