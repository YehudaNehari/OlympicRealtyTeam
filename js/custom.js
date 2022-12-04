jQuery(document).ready(function ($) {
  // Initialize simple slick slider
  $(".card-img").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 500,
    fade: true,
    cssEase: "linear",
  });

  $(".hs-image").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    cssEase: "linear",
  });

  $(".wrap-text").slick({
    arrows: false,
    draggable: false,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    fade: true,
    cssEase: "linear",
  });

  $(".img-slider").on("mouseover", function () {
    $(this).addClass("hovered");
  });
});
