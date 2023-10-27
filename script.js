$(function() {
    $(".drawer-icon").click(function () {
        $(this).toggleClass('menu-active');
        $(".drawer-contents").toggleClass('menu-active');
        $(".drawer-background").toggleClass('menu-active');
    });
});

// #から始まるURLがクリックされた時
$(function() {
    $('a[href^="#"]').click(function() {
     var headerHeight = $('header').outerHeight();
        // 移動速度を指定（ミリ秒）
     let speed = 500;
        // hrefで指定されたidを取得
     let id = $(this).attr("href");
        // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
     let target = $("#" == id ? "html" : id);
        // ページのトップを基準にターゲットの位置を取得
        // トップからの距離からヘッダー分の高さを引く
     let position = $(target).offset().top - headerHeight;
        // その分だけ移動すればヘッダーと被りません
        // ターゲットの位置までspeedの速度で移動
     $('html, body').animate(
       {
         scrollTop: position
      },
       speed
     );
     return false;
    });
});

$(function() {
    const swiper = new Swiper('.swiper', {
        // Optional parameters 繰り返すか
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: true
        },
      });
});

$(function() {
    $('.qa-box-q').click(function() {
        $(this).next().slideToggle();
        $(this).children('.qa-icon').toggleClass( 'is-open' );
      });
});

$(function(){
    var pagetop = $('#page_top');
    // ボタン非表示
    pagetop.hide();
    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
       }
    });
    pagetop.click(function () {
       $('body, html').animate({ scrollTop: 0 }, 500);
       return false;
    });
  });