const title  = document.querySelector('.theme-title'); 
const quote = document.querySelector('.quote');
const author = document.querySelector('.author');
const button = document.querySelector('.button1');

const t4 = new TimelineMax();

t4.fromTo(title, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut})
t4.fromTo(quote, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2" )
t4.fromTo(author, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2" )
t4.fromTo(button, 0.5, {y: 30, opacity: 0},{y: 0, opacity: 1, ease: Power1.easeInOut}, "=-0.2");