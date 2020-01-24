<?php 

/* template name: shiping  page */

get_header(); ?>


 <!-- content section starts -->

 <div class="content">

<!-- shipping section starts -->

<div class="outer shipping">
     <div class="container">
         <div class="info">
             <div class="title">
                 <h2>Orders & Shipping</h2>
             </div>
             <div class="details">
             <p><?php the_field('shiping_text'); ?></p>
                 
             </div>
         </div>
     </div>
</div>

</div>

</div>

<?php get_footer(); ?>