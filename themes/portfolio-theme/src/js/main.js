import 'jquery';
import 'popper.js';
import 'bootstrap';
import 'js-offcanvas';
import 'owl.carousel';
import 'lightbox2';


import '../scss/style.scss';

import Typed from 'typed.js';

document.addEventListener("DOMContentLoaded", function () {

    var typed2 = new Typed('#typed2', {
        strings: require('../../translation.json'),
        typeSpeed: 200,
        loop: true,
        loopCount: Infinity,
        backSpeed: 150,
        smartBackspace: true,
    });

});
document.addEventListener("DOMContentLoaded", function () {

    /** Menu Navigation */
    const siteBody = document.querySelector('body');
    const menuToggle = document.querySelector('.ui-menu-open');
    const menuClose = document.querySelector('.ui-menu-close');
    const menuDrawer = document.querySelector('.ui-nav-mobile');
    var isActive = false;

    document.onkeyup = function (e) {
        e = e || window.event;
        var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
        console.log(e.keyCode);
        if (charCode == 27 && isActive) {
            menuClose.click();
        }
    }

    function addClasses(first, second) {
        first.classList.add('is-active');
        second.classList.add('is-active');
    }
    function removeClasses(first, second) {
        first.classList.remove('is-active');
        second.classList.remove('is-active');
    }

    menuToggle.onclick = function toggleNav(event) {
        if (isActive === true) {
            setTimeout(removeClasses(menuToggle, menuDrawer), 3000);
            menuToggle.focus();
            isActive = false;
        } else {
            addClasses(menuToggle, menuDrawer);
            menuClose.focus();
            isActive = true;
        }
    }
    menuClose.onclick = function closeNav(event) {
        if (isActive === true) {
            setTimeout(removeClasses(menuToggle, menuDrawer), 3000);
            menuToggle.focus();
            isActive = false;
        } else {
            addClasses(menuToggle, menuDrawer);
            isActive = true;
        }
    }
    /** End menu nagivation */

    var typed = new Typed(".typewriter", {
        strings: require('../../translation.json'),
        stringsElement: null,
        typeSpeed: 100,
        startDelay: 20,
        backSpeed: 150,
        smartBackspace: true,
        shuffle: false,
        backDelay: 700,
        fadeOut: false,
        fadeOutClass: 'typed-fade-out',
        fadeOutDelay: 500,
        loop: true,
        loopCount: Infinity,
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true,
        attr: null,
        bindInputFocusEvents: false,
        contentType: 'html',
    });



    new fullScroll({
        mainElement: 'main',
        container: 'main',
        sections: 'section',
        animateTime: 0.7,
        animateFunction: 'ease',
        currentPosition: 0,
        displayDots: true,
        dotsPosition: 'middle'

    });

});
