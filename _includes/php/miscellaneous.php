Bad
<? ... ?>
<?= $var ?>

Good
<?php ... ?>
<?php echo $var; ?>

<?php

# Bad – clever but not immediately clear
isset( $var ) || $var = some_function();

# Good – longer but clearer
if ( ! isset( $var ) ) {
  $var = some_function();
}
