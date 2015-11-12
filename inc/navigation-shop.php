<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url')?>"><img class="logo"src="<?php bloginfo('template_directory'); ?>/img/solidcity-logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        <?php 
          $args = array (
            'menu' => 'header-menu',
            'menu_class' => 'nav navbar-nav navbar-right header-menu',
            'container' => 'false',
            );
          wp_nav_menu ($args);
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>