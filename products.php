<!DOCTYPE html>
<html lang="en" id="products">
<?php include "header-links.php" ?>

<head>

    <title>products</title>
    <style>
        .sale-img {
            position: absolute;
            right: -5rem;
            top: -5rem;

        }

        @media(max-width:1200px) {
            .sale-img {
                width: 200px;
            }

        }

        @media(max-width:768px) {
            .sale-img {
                width: 150px;

                right: -3rem;
            }

        }

        @media(max-width:450px) {
            .box-white .sale-img {
                width: 100px;

                right: -2rem;
                top: -3rem;
            }
        }

        .box-white {
            border: 5px solid white;
            position: relative;
            border-left: none;
        }

        .top-black {
            width: 30%;
            height: 40px;
            position: relative;
            z-index: 2;
            margin-bottom: -1rem;
            background-color: black;
        }

        .bottom-black {
            width: 45%;
            height: 40px;
            position: relative;
            z-index: 2;
            margin-top: -1rem;
            background-color: black;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <section class="bd-black ">
        <div class="w-100 py-5 text-center">
            <h1 class="bbblue-col text-uppercase d-lg-block mx-auto text-center d-none mb-0 bold-font">
                Products
            </h1>
        </div>

        <div class="container-fluid mt-5  ">
            <h3 class="bbblue-col d-block mx-auto d-lg-none my-5 bold-font">
                Products
            </h3>
            <div class="row col-md-10  text-center text-light mx-auto px-xl-5 ">
                <div class="top-black">

                </div>
                <div class="col-12 p-md-5 p-3 row mx-0 box-white">
                    <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/sale-img.png" class="sale-img">
                    <div class="col-lg-4 col-8 my-lg-0 my-5 mx-auto">
                        <img class="w-100" src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/off-book.png">

                    </div>
                    <div class="col-lg-8 my-auto text-light text-center">
                        <div class="my-auto">


                            <h1 class="abil-font text-center display-2 mb-4">
                                30% <span class="red-col "> OFF</span>
                            </h1>
                            <p class="MediumItalic h5 px-md-4">
                                Not to miss this opportunity, with “How software
                                made billionaires” you will
                            </p>
                        </div>
                    </div>

                </div>
                <div class="bottom-black">

                </div>
            </div>
        </div>
        <div class="w-100 d-lg-block d-none" style="height:150px;">
        </div>

        <div class="container-fluid mt-5  ">
            <div class="row col-md-10 text-center text-light mx-auto ">

                <hr style="height:1px;" class="w-100 bg-white ">
                <h2 class="bold-font mx-auto tit-sec">
                    Books
                </h2>
            </div>
            <div class="row col-10  mx-auto px-0">


                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book1.jpg" class="card-img-top w-100 mb-3" alt="...">
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book3.jpg" class="card-img-top w-100 mb-3" alt="...">
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book4.jpg" class="card-img-top w-100 mb-3" alt="...">
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
            </div>

        </div>
        <div class="w-100 d-lg-block d-none" style="height:150px;">

        </div>
        <div class="container-fluid mt-5  ">
            <div class="row col-md-10  text-center text-light mx-auto ">

                <hr style="height:1px;" class="w-100 bg-white ">
                <h2 class="bold-font mx-auto tit-sec">
                    Courses
                </h2>
            </div>
            <div class="row col-10  mx-auto px-0">


                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/c1.png" class="card-img-top w-100 mb-3" alt="...">
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/c2.png" class="card-img-top w-100 mb-3" alt="...">
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/c3.png" class="card-img-top w-100 mb-3" alt="...">
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

                <div class="card p-4 col-xl-3 mt-4 col-lg-6 col-md-8 mx-auto">
                    <div class="img-card">


                        <div class="lay-book  my-auto mx-auto">
                            <div class="d-flex my-auto mx-auto">


                                <a href="book-details"  class="btn text-center btn-vi-details text-light">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>

                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/c4.png" class="card-img-top w-100 mb-3" alt="...">
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
            </div>

        </div>
    </section>
    <?php include "footer.php" ?>