$(function(){
    $('#menu, #menu-close').click(
    function(){
        var windowWidth = window.innerWidth;
        if($('.l-wrapper__right').hasClass('off')){
            $('.l-wrapper__right').removeClass('off');
            $('.l-wrapper__right').css("display","block");//display:noneにしてあるメニュー部分を表示する
            $('.l-bg').css("visibility","visible");//display:noneにしてあるメニュー以外を暗くする部分を表示する
            if(windowWidth > 375){
                $('.l-wrapper__right').animate({'margin-right':'40%'},300).addClass('on');//元々右側40%にずらして置いてあるので右側に40％marginを与えて画面上に表示する。
            } else {
                //スマホ版は９０％
                $('.l-wrapper__right').animate({'margin-right':'90%'},300).addClass('on');
            }
        } else {
            $('.l-wrapper__right').addClass('off');
            $('.l-wrapper__right').animate({'margin-right':'0'},300,function(){//animate関数第3引数に関数を渡すと、第1,2引数の処理が終わった後で実行してくれる
                $('.l-wrapper__right').css("display","none");
            });
            $('.l-bg').css("visibility","hidden");//メニュー以外を暗くする部分を消す
        }
    });
    
    var $win = $(window);
    var currentWidth = window.innerWidth;
    $win.on('load resize', function() {
        var windowWidth = window.innerWidth;
        if(currentWidth == windowWidth){
            return;//横幅が変わってなかったら何もしない（Safari対策：スマホでスクロールしただけでresizeイベントが走ってしまう為）
        }
        currentWidth = windowWidth;//現在のサイズをcurrentWidthに記憶しとく
        //375より大きくなったら上のjQueryによってelementに勝手についたstyleを消す。（display:noneとか）
        if (windowWidth > 375) {
            console.log("window size over 1030px");
            $('body *').removeAttr('style');
            $('.l-wrapper__right').addClass("off");
            $('.l-bg').css("visibility","hidden");//メニュー以外を暗くする部分を消す
        }
    });

});