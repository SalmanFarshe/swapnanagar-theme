jQuery(document).ready(function ($) {
  // Mobile Menu Toggle
  $(".menu-toggle").on("click", function () {
    $(this).toggleClass("open");
    $(".main-nav").toggleClass("open");
    $("body").toggleClass("no-scroll");
  });

  // Sticky Header
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 50) {
      $(".community-header").addClass("sticky");
    } else {
      $(".community-header").removeClass("sticky");
    }
  });

  // Initialize AOS
  AOS.init({
    duration: 900,
    once: true,
  });
});
