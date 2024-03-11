// 見出し背景画像アニメーション
let HLImg = document.querySelector('.HLImg');
setTimeout(() => {
    HLImg.classList.remove('expan');
}, 1000);

// 見出しの下線アニメーション
let _mBx = document.querySelector('._mBx');
setTimeout(() => {
    _mBx.classList.remove('borNone');
}, 2000);

// 見出しの文字部分アニメーション
let _m_js = document.querySelector('._m_js');
let _s_js = document.querySelector('._s_js');
setTimeout(() => {
    _m_js.classList.remove('txtm_hide');
    _s_js.classList.remove('txts_hide');
}, 3000);

// 写真の見出しアニメーション
$(function () {
    $(window).scroll(function () {
        var _shopTop = $(".pHLBx_shop").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _shopTop - windowHeight + 150) {
            $(".pHLBx_shop").removeClass('hidden');
            $(".pHL_shop").removeClass('transparent');
        }

        var _parkTop = $(".pHLBx_park").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _parkTop - windowHeight + 150) {
            $(".pHLBx_park").removeClass('hidden');
            $(".pHL_park").removeClass('transparent');
        }

        var _eduTop = $(".pHLBx_edu").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _eduTop - windowHeight + 150) {
            $(".pHLBx_edu").removeClass('hidden');
            $(".pHL_edu").removeClass('transparent');
        }

        var _othersTop = $(".pHLBx_others").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _othersTop - windowHeight + 150) {
            $(".pHLBx_others").removeClass('hidden');
            $(".pHL_others").removeClass('transparent');
        }

        // 各写真の縮小アニメーション
        var _shopGTop = $(".shopping").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _shopGTop - windowHeight + 150) {
            $(".shopImg").removeClass('expan');
        }

        var _parkGTop = $(".park").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _parkGTop - windowHeight + 150) {
            $(".parkImg").removeClass('expan');
        }

        var _eduGTop = $(".education").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _eduGTop - windowHeight + 150) {
            $(".eduImg").removeClass('expan');
        }

        var _othersGTop = $(".others").offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
        if (scroll > _othersGTop - windowHeight + 150) {
            $(".othersImg").removeClass('expan');
        }
    });
});

// LIFE INFORMATIONのタブ
$(".js_shopBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_shopBtn").addClass('active');
    $(".js_shopTab").addClass('show');
});

$(".js_bankBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_bankBtn").addClass('active');
    $(".js_bankTab").addClass('show');
});

$(".js_mediBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_mediBtn").addClass('active');
    $(".js_mediTab").addClass('show');
});

$(".js_eduBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_eduBtn").addClass('active');
    $(".js_eduTab").addClass('show');
});

$(".js_pubBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_pubBtn").addClass('active');
    $(".js_pubTab").addClass('show');
});

$(".js_otherBtn").on('click',function(){
    $(".tBtn").removeClass('active');
    $(".tabCon").removeClass('show');
    $(".js_otherBtn").addClass('active');
    $(".js_otherTab").addClass('show');
});