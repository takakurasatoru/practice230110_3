/* fvのアニメーション */
console.log('top');
const fvCatImg = document.querySelector('.fvCatImg');
const fvExtImg = document.querySelector('.fvExtImg');
const fvPriImg = document.querySelector('.fvPriImg');
const fvTxt = document.querySelector('.fvTxt');
setTimeout(() => {
    fvCatImg.classList.add('show');
    fvExtImg.classList.add('show');
    fvPriImg.classList.add('show');
    fvTxt.classList.add('show');
    console.log(fvCatImg);
}, 1000);

/* スクロールで画像縮小 */

let lImg_SDGs = document.querySelector('.lImg_SDGs');
let lImg_acc = document.querySelector('.lImg_acc');
let lImg_plan = document.querySelector('.lImg_plan');

let lImg = document.querySelectorAll('.lImg_SDGs,.lImg_acc,.lImg_plan');
window.addEventListener('scroll', () => {
for (let i = 0; i < lImg.length; i++){
    const rect = lImg[i].getBoundingClientRect().top;
    const scroll = window.scrollY || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 100) {
    lImg[i].classList.remove('expan');
    }else{
    lImg[i].classList.add('expan');
    }
}
});