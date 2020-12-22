<!DOCTYPE html>
<html lang="en" id="book">
<?php include "header-links.php" ?>

<head>

    <title>Book details</title>
    <style>
        .checkbox {
            display: none;
        }

        .book-svg {
            cursor: pointer;
            overflow: visible;
            width: 60px;
        }

        svg #heart {
            transform-origin: center;
            animation: animateHeartOut .3s linear forwards;
        }

        .checkbox:checked+label svg #heartgroup7 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup6 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup5 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup4 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup3 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup2 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #heartgroup1 {
            opacity: 1;
            transition: .1s opacity .3s;
        }

        .checkbox:checked+label svg #main-circ {
            transition: all 2s;
            animation: animateCircle .3s linear forwards;
            opacity: 1;
        }

        svg #main-circ {
            transform-origin: 29.5px 29.5px;
        }

        .checkbox:checked+label svg #heart {

            fill: #E2264D;
            animation: animateHeart .3s linear forwards .25s;
        }


        /*  */
        .checkbox:checked+label svg #heartgroup7 #heart1 {
            transform: scale(0) translate(-30px, -15px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup7 #heart2 {
            transform: scale(0) translate(-55px, -30px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup6 #heart1 {
            transform: scale(0) translate(-30px, 0px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup6 #heart2 {
            transform: scale(0) translate(-60px, -5px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup3 #heart2 {
            transform: scale(0) translate(60px, 10px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup3 #heart1 {
            transform: scale(0) translate(30px, 0px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup2 #heart2 {
            transform: scale(0) translate(60px, -15px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup2 #heart1 {
            transform: scale(0) translate(30px, -15px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup5 #heart1 {
            transform: scale(0) translate(-10px, 20px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup5 #heart2 {
            transform: scale(0) translate(-60px, 30px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup4 #heart1 {
            transform: scale(0) translate(30px, 15px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup4 #heart2 {
            transform: scale(0) translate(40px, 50px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup1 #heart1 {
            transform: scale(0) translate(0, -30px);
            transform-origin: 0 0 0;
            transition: .5s transform .3s;
        }

        .checkbox:checked+label svg #heartgroup1 #heart2 {
            transform: scale(0) translate(10px, -50px);
            transform-origin: 0 0 0;
            transition: 1.5s transform .3s;
        }

        .menu {
            list-style-type: none;
        }

        li.share.right {
            display: flex;
        }

        .menu .share i {
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #fff;
            border-radius: 2px;
        }

        @media(max-width:450px) {
            .menu .share i {
                height: 30px;
                width: 30px;

                line-height: 29px;
            }
        }

        .menu .submenu {
            list-style-type: none;
            display: flex;
            opacity: 0;
            position: relative;
            z-index: 4;
            transition: all ease-in-out 0.5s;
        }

        .menu .submenu li a {
            cursor: pointer;
            color: #212121;
        }

        .menu .submenu li {
            border: 1px dashed #cccccc;
        }

        .menu .share:hover.right .submenu li {
            border-left: 1px dashed #ccc
        }

        .menu .submenu {
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .menu .submenu li a {
            cursor: pointer;
            color: #212121
        }

        .menu .submenu li a:hover i {
            color: #212121;
            background-color: #fff
        }

        .menu .submenu li a:hover.facebook i {
            background-color: #3b5999
        }

        .menu .submenu li a:hover.twitter i {
            background-color: #55acee
        }

        .menu .submenu li a:hover.whatapp i {
            background-color: #82c91e
        }

        .menu .submenu li a:hover.pinterest i {
            background-color: red
        }

        .menu .submenu li a:hover.linked i {
            background-color: #0073b2
        }

        .menu .share:hover.right .submenu {
            opacity: 1;
        }

        .num-steps {
            background-color: #26abe2;
            width: max-content;
            padding: 15px 26px;
            border-radius: 50%;
            text-align: center;
            margin: auto;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <section class="bd-black py-5">
        <div class="w-100 py-5">
            <h2 style="visibility:hidden;">
                book
            </h2>
        </div>
        <div class="container-fluid mt-lg-5  ">
            <div class="row col-md-11 px-0  justify-content-between  text-light mx-md-auto mx-0 ">
                <div class="card text-center col-xl-3 ">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">



                                <div class="clearfix">

                                    <div class="c100 p50 blue big">
                                        <span>50%</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book2.jpg" class="card-img-top w-100 mb-3" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="details mb-3">
                            <p class="card-text price  my-auto mr-xl-2 mr-4">$<span class="net-price">20</span> 00
                            </p>

                            <div class='rating-stars text-center mr-xl-2 mr-4 my-auto'>
                                <ul id='stars' class="my-auto">
                                    <li class='star selected' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw   '></i>
                                    </li>
                                    <li class='star selected' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw   '></i>
                                    </li>
                                    <li class='star selected' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw   '></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <a href="Business-State-of-Mind.html" class="buy-btn my-auto mx-auto ">buy now</a>
                        <br>
                        <button data-productid="1" data-action="cart" class="adcard-btn my-auto mx-auto ">Add To Cart</button>


                    </div>
                </div>

                <div class="col-xl-8 mt-xl-0 mt-5 mx-0">
                    <div class="row mx-0">


                        <div class="col-xl-9 col-md-7">
                            <h2 class="text-light mb-4 bold-font w-100">
                                Digital Marketing Revolution
                            </h2>
                            <div class="row mx-0">

                                <div class="heartbox mb-lg-0 mb-4"> <input type="checkbox"
                                 data-productid="1" data-action="heart" class="checkbox mr-5" id="checkbox">
                                    <label class="mb-0" for="checkbox">
                                        <svg id="heart-svg" class="book-svg" viewBox="467 392 58 57" xmlns="">
                                            <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                                <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"></path>
                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"></circle>
                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2"></circle>
                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2"></circle>
                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2"></circle>
                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2"></circle>
                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2"></circle>
                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2"></circle>
                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2"></circle>
                                                </g>
                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2"></circle>
                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2"></circle>
                                                </g>
                                            </g>
                                        </svg>
                                    </label> <input type="checkbox" class="checkbox" id="checkbox_2">
                                    <input type="checkbox" class="checkbox" id="checkbox_3">
                                </div>
                                <ul class="menu bottomLeft my-auto p-0">
                                    <li class="share right my-auto">
                                        <svg class=" my-auto " xmlns="http://www.w3.org/2000/svg" width="30" height="18.033" viewBox="0 0 30 18.033">
                                            <path id="share" d="M19.773,9.51,11.556.5V5.876H9.809A9.808,9.808,0,0,0,0,15.684v2.849l.776-.85a13.924,13.924,0,0,1,10.285-4.538h.494V18.52Zm0,0" transform="translate(-0.001 -0.5)" fill="#fff" />
                                        </svg>

                                        <ul class="submenu p-0">
                                            <li><a href="http://www.facebook.com/sharer.php?u=https://academy.rewardlion.com/book/4-Digital_Marketing_Revolution" id="face-btn" target="_black" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="https://twitter.com/share?url=https://academy.rewardlion.com/book/4-Digital_Marketing_Revolution" id="twitter-btn" target="_black" class="twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=https://academy.rewardlion.com/book/4-Digital_Marketing_Revolution" id="linked-btn" target="_black" class="linked"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="whatsapp://send?text=https://academy.rewardlion.com/book/4-Digital_Marketing_Revolution" id="whatapp-btn" target="_black" class="whatapp"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li><a href="https://www.pinterest.com/pin/create/button/?url=https://academy.rewardlion.com/book/4-Digital_Marketing_Revolution" id="pinterest-btn" target="_black" class="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3  text-light BlackItalic col-md-5">
                            <span>Author:</span>
                            <span class="bb-color"> Rewardlion</span><br>
                            <span>Published:</span>
                            <span class="bb-color"> 11-09-2019</span><br>
                            <span>Language:</span>
                            <span class="bb-color"> English</span>
                        </div>

                    </div>
                    <h5 class="my-3 bbblue-col BlackItalic">
                        "There are two types of people who will tell you that you cannot make a difference in this
                        world: those who are af raid to try and those who are af raid you will succeed."
                    </h5>
                    <p class="med-font">
                        Having a business is hard. It needs a lot of directed effor t if you want to gain enough profit to keep
                        going. People would tell you to give up because your success chances are low. But that’s not
                        necessarily true, only 20% of small businesses fail in their first year.
                        You have an 80% chance to succeed. All you need is a good strategy and directed effor t .
                        Everyone wants to succeed right away and make a lot of money, and that’s okay because you deserve
                        a bigger slice of the market .
                        The good news is that many people have already paved the way for you. Through years of
                        experimenting, it has been proven that digital marketing is the right method to significantly increase
                        revenue streams.
                        However, some problems seem everyone experiences at least once in the course of their digital
                        marketing.
                        One of the biggest digital marketing concerns for businesses is how to stand out against bigger
                        competitors without a commensurate digital marketing budget .
                        This concern is commonly paired with the feeling that Google’s search algorithm is slightly biased
                        towards brands — though Google says this isn’ t the case.
                        While we can’ t speak to the veracity of that common perception, we do know that larger competitors
                        can feel like they have an unfair advantage which is why we decided to make
                        “Digital Marketing Revolution” . While traditional marketing strategies often come with various costs,
                        the only cost to digital marketing is time.
                        The only thing that new business owners are really missing is sufficient knowledge about SEO,
                        content marketing, and social media engagement which is what we aim to provide through our book.
                        “Digital Marketing Revolution” is your guide to gaining 10X the profit you were making in the previous
                        years.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-lg-5  ">
            <h4 class="my-5 mx-auto bb-color bold-font text-center">
                Contains a full step-by-step guide on
            </h4>
            <div class="row col-md-11 px-0 text-center text-light justify-content-center   mx-md-auto mx-0 ">
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        1
                    </h2>
                    <p class="med-font">
                        How to avoid digital marketing common
                        mistakes, and establish realistic digital
                        marketing expectations.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        2
                    </h2>
                    <p class="med-font">
                        Internet marketing secrets, how people
                        can really make money online.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        3
                    </h2>
                    <p class="med-font">
                        How to create a 30days content
                        marketing plan.
                    </p>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        4
                    </h2>
                    <p class="med-font">
                        How to be a content creator with
                        passion.

                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        5
                    </h2>
                    <p class="med-font">
                        How to market using LinkedIn, and how
                        could that be specifically beneficial for
                        your business.

                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        6
                    </h2>
                    <p class="med-font">
                        How to market using Facebook
                        efficiently.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        7
                    </h2>
                    <p class="med-font">
                        How to market using Instagram and
                        improve your brand image
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        8
                    </h2>
                    <p class="med-font">
                        How to use the latest email marketing
                        strategies to increase your business’s
                        visibility.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps ">
                        9
                    </h2>
                    <p class="med-font">
                        Use YouTube to both gain profit through
                        monetization and market your business
                        effectively.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8  p-md-5 p-4">
                    <h2 class="num-steps " style="padding:20px;">
                        10
                    </h2>
                    <p class="med-font">
                        How to use blogging for branding.

                    </p>
                </div>
            </div>
            <div class="row text-center text-light justify-content-center   mx-0 ">
                <div class="col-md-10 mx-auto mt-5 p-lg-5 p-3" style="border:8px solid #26ABE2;">
                    <p class="h1 p-xl-5 abil-font">
                        Don’tlet people tell you that your business willfail.
                        Increase your chances to 100% success by geing
                        “Digital Marketing Revolution” today!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>