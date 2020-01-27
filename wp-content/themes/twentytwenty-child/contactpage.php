<?php 

/* template name: contact page */

get_header(); ?>


        <!-- content section starts -->

        <div class="content">

           <!-- contact-us section starts -->

           <div class="outer contact-us">
                <div class="container">
                    <div class="info">
                        <div class="title">
                            <h2><?php wp_title(''); ?></h2>
                        </div>
                        <div class="details">
                            <p><?php the_field('contact_and_faqs_text'); ?></p>
                            <?php 
                                $field = get_field_object('contact_number');
                                $prepend = $field['prepend'];
                                $value = $field['value'];
                            ?>
                            <p>Phone number: <a href="tel:"><?php echo $prepend.$value; ?></a></p>
                            <p>For all general and customer service inquiries: <a href="mailto:"><?php the_field('contact_email'); ?></a></p>
                        </div>
                    </div>
                </div>
           </div>

        </div>

<?php get_footer(); ?>