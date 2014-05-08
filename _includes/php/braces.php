<?php

if ( condition ) {
  action1();
  action2();
} elseif ( condition2 && condition3 ) {
  action3();
  action4();
} else {
  defaultaction();
}

# Even if the braces aren't necessary

if ( condition ) {
  action0();
}

foreach ( $items as $item ) {
  process_item( $item );
}

?>
