jQuery(document).ready(function() {
  jQuery(".header button.fa.fa-search").click(function() {
    jQuery(".form-inline").addClass("form-block");
  });
});

jQuery(document).on("click", function(event) {
  if (!jQuery(event.target).closest(".form-inline").length) {
    jQuery(".form-inline").removeClass("form-block");
  }
});

// slider-1

jQuery(document).ready(function() {
  jQuery(".menu-item-has-children").click(function() {
    jQuery(".sub-menu").toggleClass("show");
  });
});

jQuery(document).ready(function() {
  jQuery(".owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    items: 1
  });

  if (jQuery(window).width() <= 576) {
    jQuery(".nav-search").click(function() {
      jQuery(".search-drawer").fadeIn();
      jQuery("body").addClass("b-fixed");
    });
    jQuery(".search-drawer .close-btn").click(function() {
      jQuery("body").removeClass("b-fixed");
      jQuery(".search-drawer").fadeOut();
    });
  }
});
