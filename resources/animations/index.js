const title  = document.querySelector('.title'); 
const btn1 = document.querySelector('.btn-1');
const btn2 = document.querySelector('.btn-2');
const btn3 = document.querySelector('.btn-3');

const t2 = new TimelineMax();

t2.fromTo(title, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power1.easeInOut})
t2.fromTo(btn1, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.5")
t2.fromTo(btn2, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2" )
t2.fromTo(btn3, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2");