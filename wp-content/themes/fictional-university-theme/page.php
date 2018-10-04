<?php
get_header();
while(have_posts()) {
  the_post();
  pageBanner([
    'photo' => 'https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=350'
  ]);
  ?>
  
  <div class="container container--narrow page-section">
    
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php the_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent) ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
      <?php }
    ?>

    <?php 
      $theChildren = get_pages([
        'child_of' => get_the_ID()
      ]);

      if ($theParent || $theChildren) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent) ?></a></h2>
        <ul class="min-list">
          <?php
            wp_list_pages([
              'title_li' => NULL,
              'child_of' => $theParent ? $theParent : get_the_ID(),
              'sort_column' => 'menu_order'
            ]);
          ?>
        </ul>
      </div>
    <?php } ?>
    
    <div class="generic-content">
      <?php the_content() ?>
    </div>
    
  </div> 
  
  <?php }
  get_footer();
  ?>