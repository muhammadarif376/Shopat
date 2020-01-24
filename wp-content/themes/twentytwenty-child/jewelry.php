<?php 

/* template name: Jewelry page */

get_header(); ?> 

 <!-- content section starts -->

        <div class="content">

            <!-- page title starts -->

            <div class="heading">
                <div class="container">
                    <h1>NATIA X LAKO</h1>
                    <p>Georgian designers Natia Kutsishvili and Lako Bukia collaborated under the idea to create NATIA X LAKO, expressive shaped feminine earrings. Their creations are handcrafted and modern inspired by ornaments and shapes. The main material of the earrings is leather, silver and metal, with different shapes like snakes, big circles and golden dragons.</p>
                </div>
            </div>

        </div>

        <!-- filterbar section starts -->

        <section class="filterbar-wrap">
            <div class="container">
                <div class="filterbar-inner d-flex justify-content-between align-items-center">
                    <div class="filterbar-content d-flex align-items-center">
                        <div class="filterbar-items">
                            <label for="">Filter By</label>
                            <div class="items-wrap">
                                <select class="form-control">
                                    <option>All Products</option>
                                    <option>Jewelry</option>  
                                </select>
                            </div>
                        </div>
                        <div class="filterbar-items">
                            <label for="">Sort By</label>
                            <div class="items-wrap">
                                <select class="form-control">
                                    <option>Featured</option>
                                    <option>Best Selling</option>  
                                    <option>Alphabetically, A-Z</option>  
                                    <option>Alphabetically, Z-A</option>  
                                    <option>Price, low to high</option>  
                                    <option>Price, high to low</option>  
                                    <option>Date, old to new</option>  
                                    <option>Date, new to old</option>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="items-counter">
                        <span>9 products</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- product type starts -->

        <div class="product-type pg">
            <div class="container">
                <div class="product-inner">
                    <div class="row">
                    <?php 
                            $args = array(
                            'post_type'      => 'products',
                            'posts_per_page' => -1,
                            'category_name' => 'jewelry',
                                    );            
                            $loop = new WP_Query($args);
                            while ($loop->have_posts()) {
                            $loop->the_post();
                           ?>
                        <div class="col-md-4 col-6">
                            <a href="#" class="product-card">
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        
<?php get_footer(); ?>