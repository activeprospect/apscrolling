
<div class="top-black-stripe">
    <div class="container">
    <div class="phone five columns"><a href="tel:+1-512-843-8054">Give us a call: 888-624-4159</a></div>
            <?php wp_nav_menu(array('container_class' => 'menu-utility-nav-container', 'menu' => 'Utility Nav')); ?> 
        </div>
</div>
<header>
	<div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); //make logo a home link?>"><img src="<?php echo get_stylesheet_directory_uri() . '/images/logo.jpg'?>"></a>
        </div>
<nav>
    <?php  wp_nav_menu( array( 'container_class' => 'menu-primary-container', 'theme_location' => 'primary' ) ); ?>
    <?php# wp_nav_menu( array( 'theme_location' => 'primary', 'container-class' => 'menu-header' ) ); ?>
</nav>
</div> <!--  End blog header -->

</header>
