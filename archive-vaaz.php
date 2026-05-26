<?php get_header(); ?>

<div class="page-header">
  <span class="section-label">Vaaz Arşivi</span>
  <h1>Vaazlar</h1>
  <p>Pazar vaazları, dizi çalışmaları ve özel mesajlar.</p>
</div>

<section class="posts-section">
  <div class="posts-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <a class="post-card" href="<?php the_permalink(); ?>">
      <div class="post-card-thumb">✝️</div>
      <div class="post-card-body">
        <span class="post-card-cat">Vaaz</span>
        <h2 class="post-card-title"><?php the_title(); ?></h2>
        <p class="post-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
        <div class="post-card-meta">
          <span><?php echo get_the_date('j M Y'); ?></span>
          <span>▶ İzle</span>
        </div>
      </div>
    </a>
    <?php endwhile; else : ?>
    <p style="color:var(--ink-3); font-style:italic; padding:2rem 0;">Henüz vaaz eklenmemiş.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
