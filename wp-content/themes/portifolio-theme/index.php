<?php

get_header(); ?>

<style type="text/css">
.section1 {
    background-color: #7DBCD4;
}

.section2 {
    background-color: #98C19F;
}

.section3 {
    background-color: #A199E2;
}

.section4 {
    background-color: #CC938E;
}

.section5 {
    background-color: #D2C598;
}

section div {
    font-family: 'Open Sans';
    font-style: normal;
    text-align: center;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

span {
    font-size: 4em;
    font-style: normal;
    color: #fff;
}

.button {
    background-color: #F2CF66;
    border-bottom: 5px solid #D1B358;
    text-shadow: 0px -2px #D1B358;
    padding: 10px 40px;
    border-radius: 10px;
    font-size: 25px;
    color: #FFF;
    text-decoration: none;
}
</style>

<!--content part-->
<div class="page__content">
    <!--open navigation button-->
    <div class="nav-open-btn">
        <div class="nav-open-btn__bar"></div>
        <div class="nav-open-btn__bar"></div>
        <div class="nav-open-btn__bar"></div>
    </div>
    <!--content block-->
    <div class="content">
        <div id="main" class="scroll-container">
            <section class="section1">
                <div>
                    <span>Section 1</span>
                </div>
            </section>
            <section class="section2">
                <div>
                    <span>Section 2</span>
                </div>
            </section>
            <section class="section3">
                <div>
                    <span>Section 3</span>
                </div>
            </section>
            <section class="section4">
                <div>
                    <span>Section 4</span>
                </div>
            </section>
            <section class="section5">
                <div>
                    <span>Section 5</span>
                </div>
            </section>
        </div>
    </div>
</div>

<?php

get_footer(); ?>