<?php

# No
x==23
foreach($foo as $bar) { ...

# Yes
x == 23
foreach ( $foo as $bar ) { ...

# Function definition
function my_function( $param1 = 'foo', $param2 = 'bar' ) { ...

# Function call
my_function( $param1, func_param( $param2 ) );

# Comparisons
if ( ! $foo ) { ...

# Type casting
foreach ( (array) $foo as $bar ) { ...

$foo = (boolean) $bar;

# Array items
$x = $foo['bar']; // Yes
$x = $foo[ 'bar' ]; // No

$x = $foo[0]; // Yes
$x = $foo[ 0 ]; // No

$x = $foo[ $bar ]; // Yes
$x = $foo[$bar]; // No
