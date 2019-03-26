<?php get_header(); ?>
<section id="main" class="wrapper">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header class="major special">
      <h2><?php the_title(); ?></h2>
      <p>Rédigé par : <?php the_author(); ?></p>
      </header>    
      <hr />
      <section>
        <p><?php the_content(); ?></p>
      </section>
    <?php endwhile; else : ?>
    <section>
      <p>Sorry, no page was found!</p>
    </section>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
<script>
  $("#header").attr('class', 'skel-layers-fixed');
</script>