<?php

// all good
bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);

// also good
$foo->bar(
  $longArgument,
  $longerArgument,
  $muchLongerArgument
);
