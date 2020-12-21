<!DOCTYPE html>
<html lang="en" id="app">
<?php include "header-links.php" ?>

<head>

    <title>Academy Rewardlion</title>
    <style>
        .bg1 {
            background-image: url("assets/img/bg1.png");
            background-size: cover;
            background-position: center;
        }

        .bg2 {
            background-image: url("assets/img/bg2.png");
            background-size: cover;
            background-position: center;
        }



        .sbn-btn {
            border: 1px solid #26ABE2;
            background-color: transparent;
            box-shadow: 0px 0px 5px 1px #26ABE2;
            color: #26ABE2;
            font-family: bold-font;
            text-shadow: 0px 0px 5px #26ABE2;

        }

        @media(min-width: 768px) {

            .sbn-btn,
            .offer-btn {
                font-size: 25px;
                padding: 15px 15px;
            }
        }

        .sbn-btn:hover {
            background-color: #26ABE2;

            color: white;
        }

        .offer-btn {
            border: 1px solid #FF7700;
            background-color: transparent;
            box-shadow: 0px 0px 5px 1px #FF7700;
            color: #FF7700;
            font-family: bold-font;
            text-shadow: 0px 0px 5px #FF7700;

        }

        .offer-btn:hover {
            box-shadow: 0px 0px 5px 1px #000;
            background-color: #FF7700;

            color: black;
        }

        .prc_num {
            font-size: 30px;
            position: absolute;
            left: 0;
            color: #fff;
            font-family: bold-font;

            right: 0;
            text-align: center;

        }




        @media(min-width: 1200px) {
            .offer-sec svg {
                transform: scale(3.5);
            }

            .prc_num {
                font-size: 65px;
                margin-top: 10px;
            }

            .man1 {
                position: absolute;
                right: -20rem;

                top: -10rem;
            }

            .org-box {
                border-radius: 50px;
                position: absolute;
                right: -170px;
                z-index: 2;
                text-align: center;
                width: 100%;
                bottom: -67px;
            }
        }

        .org-box {
            border-radius: 30px;

            text-align: center;

        }


        @media(min-width: 768px) and (max-width:1200px) {
            .offer-sec svg {
                transform: scale(2);

            }

            .offer-sec .prc_num {
                font-size: 40px;

            }
        }

        @media (max-width:768px) {
            .text-uppercase {
                text-transform: capitalize !important;
            }

            .prc_num {
                top: 30px;
            }
        }

        @media (max-width: 1200px) {

            .man1 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>

    <div class="container-fluid px-0 bg1">
        <div class="row col-11 mx-lg-auto mx-0  px-0">
            <div class="col-xl-6 col-lg-8 col-11 text-md-center">
                <div class="w-100" style="height: 200px;">

                </div>
                <h1 class="text-light   my-md-5 my-4 display-3 abil-font">
                    Knowledge at <br>
                    your fingertips !
                </h1>
                <a href="#" class="btn sbn-btn col-lg-6  col-10">
                    SUBSCRIBE NOW
                </a>
                <div class="w-100" style="height: 200px;">

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5   bg2">
        <div class="row col-11 pt-lg-5 mx-lg-auto mx-0 px-0">
            <div class="col-lg-10 ">
                <h4 class="col-black bold-font">
                    GET A STRAIGHT PATH TO YOUR BUSINESS SUCCESS.
                </h4>
                <p class="text-light mb-5 med-font">
                    Our Directed Academy Is Specially Designed To Find The Shor test Path To <br>
                    Have All That You Are Searching For In One Place Reap The Rewards And <br>
                    Benefits Of The Exper ts.
                    <br class="d-lg-block d-none">
                    <br class="d-lg-block d-none">
                </p>
                <h2 class="display-3 abil-font mb-0 col-black">
                    Readers Are Leaders
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5  bd-black bg3">
        <h3 class="text-center mb-5 bold-font mx-auto text-light ">
            BEST SELLERS
        </h3>
        <div class="row col-10 pt-5 mx-auto px-0">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <div class="img-card">


                            <div class="lay-book  my-auto mx-auto">
                                <div class="d-flex my-auto mx-auto">


                                    <a href="book-details.php" class="btn text-center btn-vi-details text-light">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>

                            <a href="book-details.php"> <img src="assets/img/book1.jpg" class="card-img-top w-100 mb-3" alt="...">
                            </a>
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
                            <button data-productid="1" data-action="cart" class="adcard-btn  my-auto mx-auto ">Add To Cart</button>


                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="img-card">


                            <div class="lay-book  my-auto mx-auto">
                                <div class="d-flex my-auto mx-auto">


                                    <a href="book-details.php" class="btn text-center btn-vi-details text-light">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>

                            <a href="book-details.php"> <img src="assets/img/book2.jpg" class="card-img-top w-100 mb-3" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="details mb-3">
                                <p class="card-text price  my-auto mr-xl-2 mr-4">$<span class="net-price">25</span> 00
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
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star selected' title='Excellent' data-value='4'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='WOW!!!' data-value='5'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <a href="Digital-Marketing-Revolution.html" class="buy-btn my-auto mx-auto ">buy now</a>
                            <br>
                            <button data-productid="1" data-action="cart" class="adcard-btn  my-auto mx-auto ">Add To Cart</button>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="img-card">


                            <div class="lay-book  my-auto mx-auto">
                                <div class="d-flex my-auto mx-auto">


                                    <a href="book-details.php" class="btn text-center btn-vi-details text-light">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>

                            <a href="book-details.php"> <img src="assets/img/book3.jpg" class="card-img-top w-100 mb-3" alt="...">
                            </a>
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
                                            <i class='fa fa-star fa-fw '></i>
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

                            <a href="E-commerce-Made-Billionaires.html" class="buy-btn my-auto mx-auto ">buy now</a>
                            <br>
                            <button data-productid="1" data-action="cart" class="adcard-btn  my-auto mx-auto ">Add To Cart</button>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="img-card">


                            <div class="lay-book  my-auto mx-auto">
                                <div class="d-flex my-auto mx-auto">


                                    <a href="book-details.php" class="btn text-center btn-vi-details text-light">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>

                            <a href="book-details.php"> <img src="assets/img/book4.jpg" class="card-img-top w-100 mb-3" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="details mb-3">
                                <p class="card-text price  my-auto mr-xl-2 mr-4">$<span class="net-price">25</span> 00
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
                                            <i class='fa fa-star fa-fw   '></i>
                                        </li>
                                        <li class='star' title='WOW!!!' data-value='5'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <a href="How-Software-Made-Billionaires.html" class="buy-btn my-auto mx-auto ">buy now</a>
                            <br>
                            <button data-productid="1" data-action="cart" class="adcard-btn  my-auto mx-auto ">Add To Cart</button>


                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <div class="img-card">


                            <div class="lay-book  my-auto mx-auto">
                                <div class="d-flex my-auto mx-auto">


                                    <a href="book-details.php" class="btn text-center btn-vi-details text-light">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>

                            <a href="book-details.php"> <img src="assets/img/book1.jpg" class="card-img-top w-100 mb-3" alt="...">

                            </a>
                        </div>
                        <div class="card-body">
                            <div class="details mb-3">
                                <p class="card-text price  my-auto mr-xl-2 mr-4">$<span class="net-price">20</span> 00
                                </p>

                                <div class='rating-stars text-center mr-xl-2 mr-4 my-auto'>
                                    <ul id='stars' class="my-auto">
                                        <li class='star' title='Poor' data-value='1'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Fair' data-value='2'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Good' data-value='3'>
                                            <i class='fa fa-star fa-fw'></i>
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
                            <button data-productid="1" data-action="cart" class="adcard-btn  my-auto mx-auto ">Add To Cart</button>


                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
    <div class="container-fluid py-5   bd-black bg4" style="overflow: hidden;">
        <div class="row  mx-0 pl-xl-5 pt-5 mt-5 px-0">
            <div class="col-xl-9 col-11 row mx-xl-0 mx-auto p-lg-5 p-md-3" style="border: 10px solid #FF7700;">
                <div class="col-md-10">


                    <h2 class="display-3  abil-font text-light mt-lg-0 my-4 mb-lg-5">
                        More than Books!
                    </h2>
                    <h4 class="mb-4 org-col bold-font ">
                        THE POWER OF READING HOLDS THE KEY TO SUCCESS
                    </h4>
                    <p class="text-light med-font">
                        It is so much better to learn f rom other people who have done what you
                        have done or what you want to do. Reading allows us to stand on the
                        shoulders of giants and learn f rom people who have triumphed against the
                        odds and overcome huge challenges and become successful.
                        <br>
                        <br>
                    </p>
                </div>


                <img src="assets/img/man1.png" class="man1 ">

                <h3 class="bg-org org-box py-lg-4 px-lg-5 p-3  text-light">
                    CREATE A BIGGER LIFE FOR YOURSELF. AND WITH IT CAN <br>
                    BE A MORE LUCRATIVE AND REWARDING CAREER.
                </h3>
            </div>


        </div>
    </div>


    <div class="container-fluid py-5  bd-black offer-sec">

        <h2 class="display-2 my-5 abil-font mx-auto text-light text-center">
            Offer of the week

        </h2>

        <div class="w-100 d-lg-block d-none" style="height: 100px;">

        </div>
        <div class="row justify-content-center pt-md-5 text-uppercase col-md-11 mx-md-auto mx-0 px-0 my-5">

            <div id="days" class="col-4 px-0 text-center">
                <svg class="progress-ring" width="120" height="120">
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="52" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="48" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="44" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="40" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="36" cx="60" cy="60" />
                    <circle class="progress-ring__circle circle" stroke-dasharray="2,2" data-id="" data-prc="10" stroke="#000" stroke-width="20" fill="transparent" r="44" cx="60" cy="60" />
                </svg>

                <span class="prc_num"></span>
                <div class="w-100 d-lg-block d-none
                
                " style="height: 100px;">

                </div>
                <h2 class="text-center text-light h1 mt-5 date-timer ">
                    days
                </h2>
            </div>

            <div id="hours" class="col-4 px-0 text-center">
                <svg class="progress-ring" width="120" height="120">
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="52" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="48" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="44" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="40" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="36" cx="60" cy="60" />
                    <circle class="progress-ring__circle circle" stroke-dasharray="2,2" data-id="" data-prc="10" stroke="#000" stroke-width="20" fill="transparent" r="44" cx="60" cy="60" />
                </svg>

                <span class="prc_num"></span>
                <div class="w-100 d-lg-block d-none" style="height: 100px;">

                </div>
                <h2 class="text-center text-light h1 mt-5 date-timer ">
                    hours
                </h2>
            </div>

            <div id="minutes" class="col-4 px-0 text-center">
                <svg class="progress-ring" width="120" height="120">
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="52" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="48" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="44" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="40" cx="60" cy="60" />
                    <circle class="progress-ring__circle" stroke-dasharray="2,2" stroke="#FF7700" stroke-width="2" fill="transparent" r="36" cx="60" cy="60" />
                    <circle class="progress-ring__circle circle" stroke-dasharray="2,2" data-id="" data-prc="10" stroke="#000" stroke-width="20" fill="transparent" r="44" cx="60" cy="60" />
                </svg>
                <span class="prc_num"></span>
                <div class="w-100 d-lg-block d-none" style="height: 100px;">

                </div>
                <h2 class="text-center text-light h1 mt-5 date-timer ">
                    minutes
                </h2>
            </div>

        </div>


        <div class="row justify-content-center  mx-0 px-0">
            <p class="h3 my-5 col-xl-8 text-light text-center bold-font col-md-10 mx-auto ">
                Get Your Book Now And Enjoy Our Upcoming Videos, Customer
                Service 24\7 Enjoy A Flexible Schedule Boost Your Career
                Advancement Opportunities With Lower Costs
            </p>
            <div class="col-12">

            </div>
            <a href="#" class="btn offer-btn col-lg-3 text-center mx-auto col-md-6 col-10">
                GET OFFER
            </a>
        </div>
    </div>

    <script>
        function setProgress(ele, percent, tot) {
            var circle = document.querySelector(ele).querySelector('.circle');
            var txt = document.querySelector(ele).querySelector('.prc_num').innerText = percent;
            var radius = circle.r.baseVal.value;
            var circumference = radius * 2 * Math.PI;
            circle.style.strokeDasharray = `${circumference} ${circumference}`;
            circle.style.strokeDashoffset = `${circumference}`;

            const offset = circumference - percent / tot * circumference;
            circle.style.strokeDashoffset = offset;
        }

        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
            x = setInterval(function() {
                let now = new Date().getTime();
                if (countDown <= now) {
                    var dateLen = (Math.ceil((now - countDown) / 86400000) + 2) * 86400000;

                    countDown = countDown + dateLen;
                }

                distance = countDown - now;




                setProgress('#days', Math.floor(distance / (day)), 30);

                setProgress('#hours', Math.floor((distance % (day)) / (hour)), 24);

                setProgress('#minutes', Math.floor((distance % (hour)) / (minute)), 60);



                //do something later when date is reached
                if (days < 0) {
                    clearInterval(days);
                }

            }, 1000)
    </script>


    <?php include "footer.php" ?>