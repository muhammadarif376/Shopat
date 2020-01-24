        <!-- footer starts -->

        <footer class="footer">
    
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" class="insta-link">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/insta.png" alt="">
                                    <p>/shopat.ladresse</p>
                                </a>
                            </div>
                            <div class="col-md-5">

                            <?php
                                wp_nav_menu( array( 
                                    'menu'=> 'footer menu', 
                                    'theme_location' => 'footer menu', 
                                    //'depth' => 2, 
                                    'container' => 'ul', 
                                    'menu_class' => 'footer-links', 
                                    )
                                );
                            ?>

                            </div>
                            <div class="col-md-4">
                                <ul class="payment-cards">
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/express.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/discover.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/master.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/visa.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="copyrights">
                            <p>© 2019, <a href="#">Shopatladresse</a></p>
                        </div>
                    </div>
                </div>
            </div>
        

        <?php wp_footer() ?>
    </body>
</html>