const ham = $("#js-hamburger");
const nav = $("#js-nav");
const bg = $("js-nav-bg");
ham.on("click", function () {
  //ハンバーガーメニューをクリックしたら
  ham.toggleClass("active"); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass("active"); // ナビゲーションメニューにactiveクラスを付け外し
  bg.toggleClass("active"); // ナビゲーションメニューにactiveクラスを付け外し
});


$(document).ready(function () {
  $(".menu-slick").slick({
    dots: false, // ページネーション（●●●）
    infinite: true, // 無限ループ
    slidesToScroll: 1, // 1つずつスクロール
    autoplay: true, // 自動スクロール
    arrows: true, // 左右の矢印を表示
    prevArrow: '<img src="/img/arrow.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="/img/arrow.png" class="slide-arrow next-arrow">',
  });
});

