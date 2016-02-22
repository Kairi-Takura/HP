jQuery(function($){

    //変数の定義
    var body = $('body'),
        header = $('.sidebar_phone-size_slide'),
        wrapper = $('#sidebar_phone-size'),
        menu = $('.sidebar_phone-size_slide-menu'),
        menuBtn = $('.sidebar_phone-size_btn-menu'),
        showClose = $('.sidebar_phone-size_slide-item'),
        closeClose = $('.sidebar_phone-size_slide-item'),
        closeBtn = $('.btnClose'), //メニューを閉じるボタン
        menuWidth = menu.outerWidth();

    //メニューを開く関数
    function showMenu (event) {
        event.preventDefault();

        //bodyが動かないようにする
        currentScroll = $(window).scrollTop();
        body.css({
            position: 'fixed',
            width: '100%',
            top: -1 * currentScroll
        });

        //背景のやつを追加
        var shade = $('<div></div>');
        shade.attr('class', 'shade').on('click', hideMenu);

        //アニメーションを実行
        menu.before(shade).animate({
            'left' : 0
        }, 300);
        wrapper.animate({
            'left' : menuWidth
        }, 300);
        header.animate({
            'left' : menuWidth
        }, 300);

        showClose.css({
          display: 'block',
        });

    }

    //メニューを閉じる関数
    function hideMenu (event) {
        event.preventDefault();

        //bodyに追加したstyleを削除
        body.attr('style', '');

        //scroll位置を調整
        $('html, body').prop({scrollTop: currentScroll});

        //アニメーションを実行
        menu.prop({scrollTop: 0}).animate({
            'left' : -menuWidth
        }, 300);
        wrapper.animate({
            'left' : 0
        }, 300);
        header.animate({
            'left' : 0
        }, 300);

        closeClose.css({
          display: 'none',
        });

        //シェードを削除
        $('.shade').remove();
    }

    //メニュー開閉の実行
    menuBtn.on('click', showMenu);
    closeBtn.on('click', hideMenu);


});
