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

// モデルルームのスライド
// C-Atype
$(function(){
    $('.slideBx_C-A').slick({
        autoplay: true,
        fade: true,
        Speed: 600,
        arrows: true,
        prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
        nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
        asNavFor: ".sliBtnBx_C-A",
    });
    
    $('.sliBtnBx_C-A').slick({
        autoplay: false,
        infinite: false,
        arrows: false,
        slidesToShow: 10,
        focusOnSelect: true,
        asNavFor: ".slideBx_C-A",
    });
});

// B-Gtype
$(function(){
    $('.slideBx_B-G').slick({
        autoplay: true,
        fade: true,
        Speed: 600,
        arrows: true,
        prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
        nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
        asNavFor: ".sliBtnBx_B-G",
    });
    
    $('.sliBtnBx_B-G').slick({
        autoplay: false,
        infinite: false,
        arrows: false,
        slidesToShow: 4,
        focusOnSelect: true,
        asNavFor: ".slideBx_B-G",
    });
});