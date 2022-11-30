console.log("inn");
jQuery(document).ready(function () {
  jQuery(".toggle-nav").click(function (e) {
    jQuery(".menu-header ul.menu").slideToggle(500);

    e.preventDefault();
  });

  window.onscroll = function () {
    myFunction();
  };

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
});

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

  $(".img-slider").on("mouseover", function () {
    $(this).addClass("hovered");
  });
});
