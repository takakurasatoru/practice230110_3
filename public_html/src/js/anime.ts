let fadeInTarget = document.querySelectorAll('.scrollin_custom_anm,.scrollin_anime_00,.scrollin_anime_01,.scrollin_anime_02,.scrollin_anime_03,.anime0,.anime1,.anime2,.anime3,.anime4,.anime5,.anime6,.anime7,.anime8,.anime9,.anime10,.anime11,.anime12,.anime13,.anime14,.anime15,.anime16,.anime17,.anime1_0,.anime1_1,.anime1_2,.anime1_3,.anime1_4,.anime1_5,.anime1_6,.anime1_7,.anime1_8,.anime1_9,.anime1_10,.anime1_11,.anime1_12,.anime1_13,.anime1_14,.anime1_15,.anime1_16,.anime1_17,.anime1_18,.anime2_0,.anime2_1,.anime2_2,.anime2_3,.anime2_4,.anime2_5,.anime2_6,.anime2_7,.anime2_8,.anime2_9,.anime2_10,.anime2_11,.anime2_12,.anime2_13,.anime2_14,.anime2_15,.anime2_16,.anime2_17,.anime2_18');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.scrollY || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 100) {
      fadeInTarget[i].classList.add('scrollin');
    }else{
      fadeInTarget[i].classList.remove('scrollin');
    }
  }
});