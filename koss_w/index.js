document.addEventListener("DOMContentLoaded", function () {
	window.addEventListener("scroll", function () {
		if (window.scrollY > 150) {
			document.getElementById("navbarSupportedContent").classList.add("is-visible");
		} else {
			document.getElementById("navbarSupportedContent").classList.remove("is-visible");
		}
	});
});

var carouselWidth = $(".carousel-inner")[0].scrollWidth;
var cardWidth = $(".carousel-item").width();
var scrollPosition = 0;
$(".carousel-control-next").on("click", function () {
	if (scrollPosition < (carouselWidth - cardWidth * 0)) { //check if you can go any further
	  scrollPosition += cardWidth;  //update scroll position
	  $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
	}
  });
  $(".carousel-control-prev").on("click", function () {
	if (scrollPosition > 0) {
	  scrollPosition -= cardWidth;
	  $(".carousel-inner").animate(
		{ scrollLeft: scrollPosition },
		600
	  );
	}
  });  