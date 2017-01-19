<?php

# Bad
function someName( $VARIABLE ) { [...] }

# Good
function some_name( $some_variable ) { [...] }

# Classes
class Walker_Category extends Walker { [...] }
class WP_HTTP { [...] }

# File names
"my-plugin-name.php" // Good
"my_pluginname.php" // Bad

"class-wp-error.php" // Good
"general-template.php" // Good
