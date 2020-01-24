<?php 

/* template name: faqs  page */

get_header(); ?>


       <!-- content section starts -->

       <div class="content">

<!-- FAQS section starts -->

<div class="outer faqs">
     <div class="container">
         <div class="info">
             <div class="title">
                 <h2>Frequently asked questions</h2>
             </div>
             <div class="details">
                 <p><?php the_field('faqs_text'); ?></p>
                 
             </div>
         </div>
     </div>
</div>


<?php get_footer(); ?>