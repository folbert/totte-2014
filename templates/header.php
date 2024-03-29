<header class="banner navbar navbar-default navbar-static-top navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="logo-wrapper"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="Startsidan"><?php //bloginfo('name'); ?>Förskolan Totte</a></div>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => new wp_bootstrap_navwalker()));
        endif;
      ?>

      <ul class="nav navbar-nav navbar-right menu-2">
        <li><div class="fb-like" data-href="https://www.facebook.com/fsktotte" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
      </ul>

    </nav>

  </div>
</header>

<?php
if(is_front_page()) {
?>

<div class="hero" style="background-image: url('http://privat.fsktotte.se/wp-content/themes/totte2014/assets/img/dev/gladatottebarn.jpg'); height: 400px" data-bgoriginalwidth="604">
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
        <span>Välkommen till Förskolan Totte i Staffanstorp!</span>
      </div>
    </div>
  </div>
</div>

<?php
} // is_home();
 ?>
