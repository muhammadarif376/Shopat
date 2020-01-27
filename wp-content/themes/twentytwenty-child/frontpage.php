<?php 

/* template name: front page */

get_header(); ?>
        <!-- content section starts -->

        <div class="content">

            <!-- banner slider 1 starts -->

            <div class="banner slider-1">
                <div class="container">
                    <div class="banner-inner">
                        <div class="row d-flex align-items-center no-gutters">
                            <div class="col-md-5 order-1 order-md-0 mt-md-0 mt-3">
                                <div class="banner-content">
                                    <h1><?php the_field('heading_text'); ?></h1>
                                    <div class="item-info">
                                        <p><?php the_field('description_text'); ?></p>
                                    </div>
                                    <a href="/jewelry">View all Categories</a>
                                </div>
                            </div>
                            <div class="col-md-7 order-0 order-md-1">
                                <?php if(have_rows('slider_images')){ ?>
                                <div class="categories category-1 owl-carousel">
                                    <?php while(have_rows('slider_images')){ the_row(); ?>
                                    <div class="item">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php }
                                  wp_reset_query();
                                   ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product type starts -->
            
            <div class="product-type">
                <div class="container">
                    <div class="product-inner">
                        <div class="row">

                           <?php 
                            $args = array(
                            'post_type'      => 'products',
                            'posts_per_page' => 3,
                            'category_name' => 'jewelry',
                                    );            
                            $loop = new WP_Query($args);
                            // echo  "<pre>" ; 
                            // print_r($loop); 
                            // exit();
                            while ($loop->have_posts()) {
                            $loop->the_post();
                           ?>
                            <div class="col-md-4 col-6">
                                <a href="<?php the_permalink(); ?>" class="product-card">
                                    <div class="card-inner">
                                        <div class="product-image">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <h6> <?php the_title(); ?></h6>
                                        <p><?php the_content(); ?></p>
                                        <?php 
                                        $field = get_field_object('price');
                                        $prepend = $field['prepend'];
                                        $value = $field['value'];
                                        $append = $field['append'];
                                        ?>
                                        <span><?php  echo $prepend.$value.$append; ?></span>
                                    </div>
                                </a>
                            </div>

                            <?php
                            }
                            wp_reset_query();
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- banner slider 2 starts -->

            <div class="banner slider-2">
                <div class="container">
                    <div class="banner-inner">
                        <div class="row d-flex align-items-center no-gutters">
                            <div class="col-md-7">
                            <?php if(have_rows('slider_images_okhtein')){ ?>
                                <div class="categories category-2 owl-carousel">
                                    <?php while(have_rows('slider_images_okhtein')){ the_row(); ?>
                                    <div class="item">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php } ?> 
                            </div>
                            <div class="col-md-5 mt-md-0 mt-3">
                                <div class="banner-content">
                                <h1><?php the_field('heading_text_okhtein'); ?></h1>
                                    <div class="item-info">
                                        <p><?php the_field('description_text_okhtein'); ?></p>
                                    </div>
                                    <a href="/bags">View all Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!-- product type starts -->
            
          <div class="product-type">
                <div class="container">
                    <div class="product-inner">
                        <div class="row">

                           <?php 
                            $args = array(
                            'post_type'      => 'products',
                            'posts_per_page' => 3,
                            'category_name' => 'bags',
                                    );            
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) {
                            $loop->the_post();
                           ?>
                            <div class="col-md-4 col-6">
                                <a href="<?php the_permalink(); ?>" class="product-card">
                                    <div class="card-inner">
                                        <div class="product-image">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <h6> <?php the_title(); ?></h6>
                                        <p><?php the_content(); ?></p>
                                        <?php 
                                        $field = get_field_object('price');
                                        $prepend = $field['prepend'];
                                        $value = $field['value'];
                                        $append = $field['append'];
                                        ?>
                                        <span><?php  echo $prepend.$value.$append; ?></span>
                                    </div>
                                </a>
                            </div>

                            <?php
                            }
                            wp_reset_query();
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div> 


<?php get_footer(); ?>