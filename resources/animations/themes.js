const btn1  = document.querySelector('.themes-btn-1'); 
const btn2 = document.querySelector('.themes-btn-2');
const btn3 = document.querySelector('.themes-btn-3');
const btn4 = document.querySelector('.themes-btn-4');

const t3 = new TimelineMax();

t3.fromTo(btn1, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut})
t3.fromTo(btn2, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2" )
t3.fromTo(btn3, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2" )
t3.fromTo(btn4, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2");