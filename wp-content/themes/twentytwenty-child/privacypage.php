<?php 

/* template name: privacy  page */

get_header(); ?>


        <!-- content section starts -->

        <div class="content">

           <!-- privacy-policy section starts -->

           <div class="outer privacy-policy">
                <div class="container">
                    <div class="info">
                        <div class="title">
                            <h2>Privacy Policy</h2>
                        </div>
                        <div class="details">
                        <p><?php the_field('privacy_content'); ?></p>
                        </div>
                    </div>
                </div>
           </div>

        </div>

<?php get_footer(); ?>