// スクロールしたらふわっと出てくる
$(function () {
    $(window).scroll(function () {
        $('.fadein').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200) {
                $(this).css('opacity', '1');
                $(this).css('transform', 'translateY(0)');
            }
        });
    });
});

// ↓ 1012追記分
$(function () {
    // ==================================
    // ハンバーガーメニューボタン押下時の処理
    // ==================================
    //メニューボタン押下時の処理:navタグにclass="on"が付いたり、消えたりを繰り返す
    $('div.sp_menu_btn').on('click', function () {
        // ↓この一行でボタンそのものに対してのCSSプロパティを制御
        $('.sp_nav').toggleClass('on');
        // ↓この一行でメニュー項目一覧の表示、非表示を制御
        $('.sp_nav nav > div').toggleClass('on');

    });
});//////////////////////
// ↑ 1012追記分ここまで

// ==============================
// ↓ 1017追記:要素ふわっと表示
// ==============================
$(window).on("scroll", function () {
    let scroll = $(this).scrollTop();
    let wh = $(this).height();
    $(".top_np_shoplink").each(function () {
        let target_pos = $(this).offset().top;
        if (scroll > target_pos - wh) {
            //↓ .top_np_shoplinkのクラスの中でも上記の条件に該当する、
            //↓ クラスが就いた要素だけという意味
            //↓ そのクラスめがけてonクラスが付けられる
            $(this).addClass("on");
        }
    });
});
// ↑ 1017追記ここまで
// ↓ 1017追記：shoplistページの地域の▶マークを押すと、
// ↓ 各地域がふわっと下方向に表示される
$('summary').on('click', function () {
    // 3秒かけて地域を表示
    $('summary li').show(3);
});
  // ↑ 1017