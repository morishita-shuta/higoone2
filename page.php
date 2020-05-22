<?php get_header(); ?>
      <div class="page-main-img">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="inner">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="content">
        <div class="inner">
        <?php the_content(); ?>        
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>