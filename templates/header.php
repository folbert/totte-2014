<header class="banner navbar navbar-default navbar-static-top navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="logo-wrapper"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => new wp_bootstrap_navwalker()));
        endif;
      ?>
    </nav>
  </div>
</header>

<div class="hero" style="background-image: url('http://privat.fsktotte.se/wp-content/themes/totte2014/assets/img/dev/gladatottebarn.jpg'); height: 400px">
  <div class="container">

    <?php
    /*
    <span class="h1">Välkommen till</span>
    <h1><span class="h1-main">Förskolan Totte</span><br/>
      <span>i Staffanstorps kommun!</span></h1>
    */
    ?>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="large-logo-wrapper">
        <span>Förskolan Totte</span>
      </div>
    </div>
  </div>
</div>
