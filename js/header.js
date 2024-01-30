window.addEventListener('DOMContentLoaded', function(){

  $(function () {
    const mv = document.querySelector('.l-MainVisual');
    let mvHeight = mv.offsetHeight;
    // スクロールを開始したら
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > mvHeight) {
        // スクロールの位置がファーストビューより下の場合にclassを付与
        $(".l-Header").addClass("transform");
      } else {
        // スクロールの位置がファーストビューより上の場合にclassを外す
        $(".l-Header").removeClass("transform");
      }
    });
  });
})
