<!doctype html>
<html lang="en">
    <head>
         <meta charset="<?php bloginfo( 'charset' ); ?>">   
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head() ?>
    </head>
    <body>

    <div class="wrapper">

<!-- header starts -->
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-inner d-flex justify-content-between align-items-center">
                <div class="shipping-text">
                    <p>Free shipping within Pakistan</p>
                </div>
                <div class="popout-btn d-flex justify-content-between align-items-center" data-toggle="modal" data-target="#exampleModalCenter">
                    <p>For customers from Pakistan</p>
                    <button type="button" class="fa fa-angle-down" aria-hidden="true" >
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="bottom-inner">
                <nav class="navbar navbar-expand-lg">
                    <a class="logo" href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png"  alt=""></a>
                    <button class="navbar-toggler fa fa-bars" aria-hidden="true" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                    wp_nav_menu( array( 
                            'menu'=> 'primary', 
                            'theme_location' => 'primary', 
                            //'depth' => 2, 
                            'container' => 'ul', 
                            'menu_class' => 'navbar-nav ml-auto', 
                            'menu_id' => 'primary-navigation'

                    )
                );
                    ?>



                      <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">jewelry</a>
                                <a class="dropdown-item" href="#">bags</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">as seen on</a>
                        </li>
                      </ul> -->
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="fa fa-search nav-search" aria-hidden="true" type="button"></button>
                    </form>
                    <div class="cart">
                        <a href="#" class="fa fa-shopping-bag" aria-hidden="true"></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- search drawer -->

    <div class="search-drawer">
        <div class="drawer-content">
            <form class="form-inline-2 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="fa fa-search" aria-hidden="true" type="submit"></button>
            </form>
            <button type="button" class="close-btn fa fa-times" aria-hidden="true"></button>
        </div>
    </div>
</header>

<!-- content section starts -->