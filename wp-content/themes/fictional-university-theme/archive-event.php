<?php 
get_header();
pageBanner([
  'title' => 'Все события',
  'subtitle' => 'Что происходит в мире.'
]);
?>

<div class="container container--narrow page-section">
  <?php
  while(have_posts()) {
    the_post();
    get_template_part('template-parts/content-event');
  }
    echo paginate_links();
  ?>
  <hr class="section-break">
  <p>Ищете прошедшие события? Посмотрите в <a href="<?php echo site_url('past-events'); ?>"> архиве</a></p>
</div>
<?php get_footer(); ?>