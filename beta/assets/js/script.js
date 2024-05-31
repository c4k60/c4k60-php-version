$body = $("#screen");
function initWaves() {
  Waves.attach(".user-greeting");
  Waves.attach(".menu--search");
  Waves.attach(".shortcuts--button");
  Waves.init();
}
$(document).ready(function () {
  initWaves();
  // loop and add class cursor pointer on [goto]
  $("[goto]").addClass("cursor-pointer");
});

$("html").on("click", "[goto]", function (e) {
  e.preventDefault(); // cancel click
  // add class cursor pointer
  var url = $(this).attr("goto");
  window.location.href = url;
});

function go(url) {
  window.location.href = url;
}
