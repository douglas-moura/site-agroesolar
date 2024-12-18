/******/ (() => { // webpackBootstrap
/******/ 	"use strict";

document.getElementById('btn-menu-mobile').addEventListener('click', function () {
    const menuMobile = document.getElementById('menu-mobile');
    menuMobile.style.transform = 'translateX(0)';
});
const array = Array.from(document.getElementsByClassName('fechar-menu'));
array.forEach(element => {
    element.addEventListener('click', function () {
        const menuMobile = document.getElementById('menu-mobile');
        setTimeout(() => {
            menuMobile.style.transform = 'translateX(100%)';
        }, 200);
    });
});

/******/ })()
;