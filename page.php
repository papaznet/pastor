<?php get_header(); ?>

<div class="page-header">
  <span class="section-label">Sayfa</span>
  <h1><?php the_title(); ?></h1>
</div>

<div class="single-layout">
  <article class="post-content">
    <?php while (have_posts()) : the_post(); ?>
    <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </article>
  <aside><?php get_sidebar(); ?></aside>
</div>

<?php get_footer(); ?>
