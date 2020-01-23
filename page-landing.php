<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<?php include_once 'modules/nav.php'; ?>

<

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="jumbotron">
<div class='container'> 
  <h1 class="display-4">Welcome!</h1>
    <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
  </div>
</div>
<main>
<?php the_title(); ?>
<?php the_content(); ?>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
 
</body>
</html>
