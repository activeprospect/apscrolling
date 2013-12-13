
<header>
	<div class="header">
    <div class="seven columns alpha">
        <div class="logo">
            <a href="<?php echo home_url(); //make logo a home link?>">
           <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo_w.png'?>">
            </a>
        </div>
    </div>

    <div class="container">
			<?php wp_nav_menu(array('container_class' => 'menu-utility-nav-container  six', 'menu' => 'Utility Nav')); ?>
		 <div class="phone"><a href="tel:+1-512-843-8054">(512) 843-8054</a></div>
		</div>


</div> <!--  End blog header -->
<nav>
		  <?php  wp_nav_menu( array( 'container_class' => 'sixteen menu-primary-container container', 'theme_location' => 'primary' ) ); ?>
		<?php# wp_nav_menu( array( 'theme_location' => 'primary', 'container-class' => 'menu-header' ) ); ?>
	</nav>
</header>
