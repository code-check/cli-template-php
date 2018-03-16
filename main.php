<?php namespace Track;

function run ($argc, $argv)
{
  foreach ($argv as $index=>$value) {
    printf("argv[%s]: %s\n", $index, $value);
  }
}

run($argc - 1, array_slice($argv, 1));
