<?php

// great
if ($expr1) {
  // if body
} elseif ($expr2) {
  // elseif body
} else {
  // else body;
}


// terrific
foreach ($iterable as $key => $value) {
  // foreach body
}

// superb
switch ($expr) {
  case 0:
    echo 'First case, with a break';
    break;
  case 1:
    echo 'Second case, which falls through';
    // no break
  case 2:
  case 3:
  case 4:
    echo 'Third case, return instead of break';
    return;
  default:
    echo 'Default case';
    break;
}
