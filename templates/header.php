<header class="main-header section-block--topographic">

  <div class="container">
    <div class="row flexbox--parent">
      <div class="col-sm-6 flexbox--child-1">
        <!-- Site logo -->
        <h1 class="logo"><a href="<?= site_url() ?>"><img src="<?= get_bloginfo('template_url') ?>/assets/images/c4c-logo.svg" alt="Cooking 4 Change Logo" /></a></h1>
      </div>
      <div class="col-sm-6 text-right flexbox--child-1">
        <ul class="social-media social-media--header">
          <?php get_template_part('templates/social-media-icons'); ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
      <i class="fi-list"></i>
    </button>
  </div>

  <nav class="navbar-c4c">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main_nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']);
        endif;
        ?>

        <!-- <ul class="navbar-nav">
          <li><a href="<?= get_category_link(get_cat_ID('Diary')); ?>">Diary</a></li>
          <li><a href="<?= get_permalink(get_page_by_path('about')); ?>">Our story</a></li>
          <li><a href="<?= get_category_link(get_cat_ID('Recipes')); ?>">Recipes</a></li>
          <li><a href="<?= get_category_link(get_cat_ID('Hotspots')); ?>">Hotspots</a></li>
          <li><a href="<?= get_category_link(get_cat_ID('Videos')); ?>">Videos</a></li>
          <li><a href="#"><i class="fi-shopping-cart p-r-5"></i> Shop</a></li>
        </ul> -->

      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
</header>