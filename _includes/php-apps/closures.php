<?php

$closureWithArgs = function ($arg1, $arg2) {
  // body
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
  // body
};

$longArgs_longVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};
