var pageId = '';

pageId = document.querySelector('body').getAttribute('id');
switch (pageId) {
	//body id='top'
	case 'top':
		require('./top.ts');
	break;

  	//body id='modelroom'
	case 'modelroom':
		require('./modelroom.ts');
	break;

  //body id='location'
	case 'location':
		require('./location.ts');
	break;

  //body id='interview'
	// case 'interview':
	// 	require('./interview.ts');
	// break;

	//body id='map'
	case 'outline':
    window.addEventListener('DOMContentLoaded', function(){
      const todayElm = document.querySelectorAll('.js-todayElm');
      const nextElm = document.querySelectorAll('.js-nextElm');
      const upToday = new Date();
      const upNext = new Date();
      upNext.setDate(upToday.getDate() + 14)

      const todayM = upToday.getMonth()+1;
      const nextM = upNext.getMonth()+1;
      for (let i = 0; i < todayElm.length; i++) {
        todayElm[i].innerHTML = upToday.getFullYear()+"年"+todayM+"月"+upToday.getDate()+"日";
      }
      for (let i = 0; i < nextElm.length; i++) {
        nextElm[i].innerHTML = upNext.getFullYear()+"年"+nextM+"月"+upNext.getDate()+"日";
      }
    });
	break;
};
//common
require('./anime.ts');

const header = document.querySelector('header');
window.addEventListener('scroll',function(){
  var sH = window.scrollY;
  if(sH >= 100){
    header.classList.add('hSticky');
  }else{
    header.classList.remove('hSticky');
  }
});

/* ハンバーガーメニュー周り */
const hamBtn = document.querySelector('#hamBtn');
const spMenu = document.querySelector('.spMenu');
const hamLine__1 = document.querySelector('.hamLine__1');
const hamLine__2 = document.querySelector('.hamLine__2');
const hamLine__3 = document.querySelector('.hamLine__3');
hamBtn.addEventListener('click',function(){
  this.classList.toggle('active');
  spMenu.classList.toggle('active');
  hamLine__1.classList.toggle('active');
  hamLine__2.classList.toggle('active');
  hamLine__3.classList.toggle('active');
  // alert('test');
});

const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++){
  smoothScrollTrigger[i].addEventListener('click', (event) => {
    event.preventDefault();
    let href = smoothScrollTrigger[i].getAttribute('href');
    let targetElement = document.getElementById(href.replace('#', ''));
    const rect = targetElement.getBoundingClientRect().top;
    const offset = window.scrollY;
    const gap = 0;
    const target = rect + offset - gap;
    window.scrollTo({
      top: target,
      behavior: 'smooth',
    });
  });
}
