/*========== Toggle ==========*/
$(document).on("click", ".toggle", function () {
  $(".toggle").toggleClass("active");
  $("body").toggleClass("flow");
  $("[nav]").toggleClass("active");
  $(".upperlay").toggleClass("active");
  // $("nav > ul > li > .sub").slideUp();
});

// _____popup_____*/
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crosBtn", function () {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});
// =================owl===========
$(".p-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-circle-chevron-left"></i>',
    '<i class="fa-solid fa-circle-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: false,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2,
      autoplay: true,
      autoHeight: true,
      dots: false,
      nav: false,
    },
    600: {
      items: 3,
    },
    991: {
      items: 4,
    },
    1000: {
      items: 4,
    },
  },
});
// =============filter dropdown===========

$("._dropBtn").click(function (e) {
  e.stopPropagation();
  var $this = $(this).parent().children("._dropCnt");
  $("._dropCnt").not($this).removeClass("active");
  var $parent = $(this).parent("._dropDown");
  $parent.children("._dropCnt").toggleClass("active");
});
$(document).on("click", "._dropCnt", function (e) {
  e.stopPropagation();
});
$(document).on("click", function () {
  $("._dropCnt").removeClass("active");
});
// ====
$(document).ready(function () {
  $(".mobile_pro").on("click", function () {
    $(".desk_pro").addClass("active");
  });

  $(".crossIt").on("click", function () {
    $(".desk_pro").removeClass("active");
  });
});
// ===
$(document).on("click", "#n_member", function () {
  $(this).addClass("active");
  $("#member").removeClass("active");

  $("#member_block").addClass("hide");
  $("#n_member_block").removeClass("hide");
});
$(document).on("click", "#member", function () {
  $(this).addClass("active");
  $("#n_member").removeClass("active");
  $("#n_member_block").addClass("hide");
  $("#member_block").removeClass("hide");
});
// ==============datepicker============
$(".datepicker").datepicker({
  dateFormat: "MM dd, yy",
  changeMonth: true,
  changeYear: true,
  yearRange: "1900:2060",
});
