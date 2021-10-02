const logo  = document.querySelector('.logo'); 
const navLinks = document.querySelector('.nav-links');
const socialLinks = document.querySelector('.social-links');
const burger = document.querySelector('.burger');
const footer = document.querySelector('.footer-text');

const tl = new TimelineMax();

tl.fromTo(logo, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power2.easeInOut})
tl.fromTo(navLinks, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power2.easeInOut}, "-=0.4")
tl.fromTo(socialLinks, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power2.easeInOut}, "-=0.4")
tl.fromTo(burger, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power2.easeInOut}, "-=0.4")
tl.fromTo(footer, 0.5, {opacity: 0, y:30},{opacity: 1, y:0, ease: Power2.easeInOut}, "-=0.4");