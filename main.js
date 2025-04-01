$(document).ready(function () {
  // ハンバーガーメニュー
  const ham = $("#js-hamburger");
  const nav = $("#js-nav");
  const bg = $("#js-nav-bg");

  ham.on("click", function () {
    ham.toggleClass("active");
    nav.toggleClass("active");
    bg.toggleClass("active");
  });

  // スクロール時の処理
  if ($("div").hasClass("home")) {
    $("#js-hamburger").removeClass("hum-color");
  }
  
  $(window).on("scroll", function () {
    let scrollTopDistance = $(window).scrollTop();
    let kvAnimationHeight = $(".kv").outerHeight(true);

    if (scrollTopDistance <= kvAnimationHeight) {
      // 茶色になる
      $("#js-hamburger").addClass("hum-color");
      console.log("1つ目");
    } else {
      // 白になる
      $("#js-hamburger").removeClass("hum-color");
      console.log("2");
    }
  });

  // slickの初期化
  $(".menu-slick").slick({
    dots: false,
    autoplay: true,
    arrows: true,
    prevArrow: '<img src="/img/arrow.png" class="prev-arrow">',
    nextArrow: '<img src="/img/arrow.png" class="next-arrow">',
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
  });
});


document.addEventListener("DOMContentLoaded", function () {
  $("#submit").on("click", function (event) {
    // formタグによる送信を拒否
    event.preventDefault();

    // 入力チェックをした結果をresultに格納
    let result = inputCheck();
  });

  // フォーカスが外れたとき（blur）にフォームの入力チェックをする
  $("#last-name").blur(function () {
    inputCheck();
  });
  $("#first-name").blur(function () {
    inputCheck();
  });
  $("#email").blur(function () {
    inputCheck();
  });
  $("#phone").blur(function () {
    inputCheck();
  });
  $("#message").blur(function () {
    inputCheck();
  });
});

// お問い合わせフォームの入力チェック
$("#submit").on("click", function (event) {
  event.preventDefault(); // フォーム送信を一旦停止

  let result = inputCheck(); // 入力チェック

  if (!result.error) {
    alert("お問い合わせを送信しました。");
    $("form").submit(); // フォームを送信
  } else {
    alert(result.message);
  }
});

// フォーカスが外れたときに入力チェック
$("#last-name, #first-name, #email, #phone, #message").on("blur", function () {
  inputCheck();
});

// 入力チェック関数
function inputCheck() {
  let error = false;
  let message = "";

  // 姓のチェック
  if ($("#last-name").val().trim() === "") {
    $("#last-name").css("background-color", "#f79999");
    error = true;
    message += "姓を入力してください。\n";
  } else {
    $("#last-name").css("background-color", "#fafafa");
  }

  // 名のチェック
  if ($("#first-name").val().trim() === "") {
    $("#first-name").css("background-color", "#f79999");
    error = true;
    message += "名を入力してください。\n";
  } else {
    $("#first-name").css("background-color", "#fafafa");
  }

  // メールアドレスのチェック
  let email = $("#email").val().trim();
  if (email === "" || !email.includes("@") || !email.includes(".")) {
    $("#email").css("background-color", "#f79999");
    error = true;
    message += "メールアドレスの形式が正しくありません。\n";
  } else {
    $("#email").css("background-color", "#fafafa");
  }

  return { error, message }; // 結果を返す
}

// 戻るボタンの処理
$("#back-button").on("click", function () {
  history.back();
});
