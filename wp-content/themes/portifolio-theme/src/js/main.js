import 'popper.js';
import 'bootstrap';

import '../scss/style.scss';

import Typed from 'typed.js';


document.addEventListener("DOMContentLoaded", function () {

    var typed = new Typed(".typewriter", {
        /**
         * @property {array} strings strings to be typed
         * @property {string} stringsElement ID of element containing string children
         */
        strings: require('../../translation.json'),
        stringsElement: null,
      
        /**
         * @property {number} typeSpeed type speed in milliseconds
         */
        typeSpeed: 100,
      
        /**
         * @property {number} startDelay time before typing starts in milliseconds
         */
        startDelay: 20,
      
        /**
         * @property {number} backSpeed backspacing speed in milliseconds
         */
        backSpeed: 150,
      
        /**
         * @property {boolean} smartBackspace only backspace what doesn't match the previous string
         */
        smartBackspace: true,
      
        /**
         * @property {boolean} shuffle shuffle the strings
         */
        shuffle: false,
      
        /**
         * @property {number} backDelay time before backspacing in milliseconds
         */
        backDelay: 700,
      
        /**
         * @property {boolean} fadeOut Fade out instead of backspace
         * @property {string} fadeOutClass css class for fade animation
         * @property {boolean} fadeOutDelay Fade out delay in milliseconds
         */
        fadeOut: false,
        fadeOutClass: 'typed-fade-out',
        fadeOutDelay: 500,
      
        /**
         * @property {boolean} loop loop strings
         * @property {number} loopCount amount of loops
         */
        loop: true,
        loopCount: Infinity,
      
        /**
         * @property {boolean} showCursor show cursor
         * @property {string} cursorChar character for cursor
         * @property {boolean} autoInsertCss insert CSS for cursor and fadeOut into HTML <head>
         */
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true,
      
        /**
         * @property {string} attr attribute for typing
         * Ex: input placeholder, value, or just HTML text
         */
        attr: null,
      
        /**
         * @property {boolean} bindInputFocusEvents bind to focus and blur if el is text input
         */
        bindInputFocusEvents: false,
      
        /**
         * @property {string} contentType 'html' or 'null' for plaintext
         */
        contentType: 'html',
      
        /**
         * All typing is complete
         * @param {Typed} self
         */
        onComplete: (self) => {},
      
        /**
         * Before each string is typed
         * @param {number} arrayPos
         * @param {Typed} self
         */
        preStringTyped: (arrayPos, self) => {},
      
        /**
         * After each string is typed
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStringTyped: (arrayPos, self) => {},
      
        /**
         * During looping, after last string is typed
         * @param {Typed} self
         */
        onLastStringBackspaced: (self) => {},
      
        /**
         * Typing has been stopped
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onTypingPaused: (arrayPos, self) => {},
      
        /**
         * Typing has been started after being stopped
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onTypingResumed: (arrayPos, self) => {},
      
        /**
         * After reset
         * @param {Typed} self
         */
        onReset: (self) => {},
      
        /**
         * After stop
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStop: (arrayPos, self) => {},
      
        /**
         * After start
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStart: (arrayPos, self) => {},
      
        /**
         * After destroy
         * @param {Typed} self
         */
        onDestroy: (self) => {}
      });

    new fullScroll({
        mainElement: 'main',
        // parent container
        container: 'main',
        // content section
        sections: 'section',
        // animation speed
        animateTime: 0.7,
        // easing for animation
        animateFunction: 'ease',
        // current position
        currentPosition: 0,
        // display dots navigation
        displayDots: true,
        // where to place the dots navigation
        dotsPosition: 'middle'

    });

    //hide nav open btn when the nav is open, adding/removing open classes to nav and content
    var navOpenBtn = document.querySelector('.nav-open-btn');
    var navCloseBtn = document.querySelector('.close-btn');
    var nav = document.querySelector('.nav');
    var pageContent = document.querySelector('.page__content');
    var navList = document.querySelector('.nav__list');
    var page = document.querySelector('.page');
    var sidenav = document.querySelector('.sidenav');

    //open nav
    navOpenBtn.addEventListener('click', function () {
        navOpenBtn.classList.add('js-hidden');
        nav.classList.add('js-opened');
        pageContent.classList.add('js-opened');
        sidenav.classList.add('position-fixed');
    });

    //close nav
    navCloseBtn.addEventListener('click', function () {
        navOpenBtn.classList.remove('js-hidden');
        nav.classList.remove('js-opened');
        pageContent.classList.remove('js-opened');
        sidenav.classList.remove('position-fixed');
    });

    //closing navigation if click outside it
    page.addEventListener('click', function (e) {

        var evTarget = e.target;

        if ((evTarget !== nav) && (nav.classList.contains('js-opened')) && (evTarget !== navOpenBtn) && (evTarget.parentNode !== navOpenBtn)) {
            console.log(navOpenBtn.firstChild);

            navOpenBtn.classList.remove('js-hidden');

            nav.classList.remove('js-opened');

            pageContent.classList.remove('js-opened');
        }

    });

    //DEMO CODE - !!!YOU DON'T NEED IT
    var demoBtns = document.querySelectorAll('.demo-btn');

    //adding default demo classes
    nav.classList.add('nav--offcanvas-1');
    pageContent.classList.add('page__content--offcanvas-1');

    //change demo on btn click
    demoBtns.forEach(function (el, ind) {

        el.addEventListener('click', function () {

            //add active class to active btn
            demoBtns.forEach(function (el) {
                el.classList.remove('js-active');
            });

            this.classList.add('js-active');

            //add proper classes for effects
            var effClass = ind + 1;

            nav.classList.remove('js-opened');

            pageContent.classList.remove('js-opened');

            navCloseBtn.classList.remove('js-opened');

            navList.classList.remove('js-opened');

            navOpenBtn.classList.remove('js-hidden');

            nav.classList.remove(nav.classList[1]);

            nav.classList.add('nav--offcanvas-' + effClass);

            pageContent.classList.remove(pageContent.classList[1]);

            pageContent.classList.add('page__content--offcanvas-' + effClass);

        });

    });

});
