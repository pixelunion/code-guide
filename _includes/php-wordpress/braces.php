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

// Even if the braces aren't necessary

if ( condition ) {
  action0();
}

foreach ( $items as $item ) {
  process_item( $item );
}

// Template files should use the alternative syntax
?>

<?php if ( is_singular() ) : ?>
  <?php edit_post_link( __( 'Edit', 'ns' ) ); ?>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>
<?php else : ?>
  <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>