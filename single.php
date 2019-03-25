<?php get_header(); ?>
<section class="wrapper style1">
  <div class="inner">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="feature left">
      <span class="image"><img src="images/pic01.jpg" alt="" /></span>
      <div class="content">
        <h2><?php the_title(); ?></h2>
        By: <?php the_author(); ?>
        <p><?php the_content(); ?></p>
        <ul class="actions">
              <li>
                <a href="#" class="button alt">More</a>
              </li>
            </ul>
      </div>
    </article>
    <?php endwhile; else : ?>
    <article>
      <p>Sorry, no post was found!</p>
    </article>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>