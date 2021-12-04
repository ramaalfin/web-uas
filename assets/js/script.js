(function () {
  "use strict";

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });
})();

$(".buy-btn").click(function () {
  $(".detail-img").attr("src", "assets/imgs/" + $(this).data("detail-img"));
  $(".detail-kategori").html($(this).data("detail-kategori"));
  $(".detail-title").html($(this).data("detail-title"));
  $(".detail-desc").html($(this).data("detail-desc"));
  $(".detail-guru").html($(this).data("detail-guru"));
  $(".detail-harga").html($(this).data("detail-harga"));
  $(".detail-bahasa").html($(this).data("detail-bahasa"));
  $(".detail-siswa").html($(this).data("detail-siswa"));

  let detail_list = $(this).data("detail-list");
  let lists = detail_list.split(/["|"]/);
  let html = "<ol>";
  lists.forEach((element) => {
    html += "<li>" + element + "</li>";
  });
  html += "</ol>";
  $(".detail-list").html(html);
});
