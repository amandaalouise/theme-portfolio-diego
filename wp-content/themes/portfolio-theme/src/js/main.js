import 'jquery';
import 'popper.js';
import 'bootstrap';
import 'js-offcanvas';

import '../scss/style.scss';

import Typed from 'typed.js';


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
        onComplete: (self) => { },

        /**
         * Before each string is typed
         * @param {number} arrayPos
         * @param {Typed} self
         */
        preStringTyped: (arrayPos, self) => { },

        /**
         * After each string is typed
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStringTyped: (arrayPos, self) => { },

        /**
         * During looping, after last string is typed
         * @param {Typed} self
         */
        onLastStringBackspaced: (self) => { },

        /**
         * Typing has been stopped
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onTypingPaused: (arrayPos, self) => { },

        /**
         * Typing has been started after being stopped
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onTypingResumed: (arrayPos, self) => { },

        /**
         * After reset
         * @param {Typed} self
         */
        onReset: (self) => { },

        /**
         * After stop
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStop: (arrayPos, self) => { },

        /**
         * After start
         * @param {number} arrayPos
         * @param {Typed} self
         */
        onStart: (arrayPos, self) => { },

        /**
         * After destroy
         * @param {Typed} self
         */
        onDestroy: (self) => { }
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

});
