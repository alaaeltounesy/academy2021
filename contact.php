<!DOCTYPE html>
<html lang="en" id="contact">
<?php include "header-links.php" ?>

<head>

    <title>contact</title>

    <style>
        .place-img {
            height: 500px;
        }

        label {
            font-size: 18px;
            margin: 0.7rem 0px;
            color: #BFBFBF;
        }

        .form-control {
            border: none !important;
            background-color: transparent !important;
            border-radius: 0;
            border-bottom: 1px solid gray !important;
            color: white !important;
            font-family: 'bold-font';
            outline: none !important;
            box-shadow: none !important;
        }

        .btn1 {
            padding: 10px;
            background-color: rgb(37, 165, 220);
            border-radius: 10px;
            color: white;
            font-family: 'bold-font';
            text-transform: uppercase;
        }
        @media(max-width:450px)
       { .map{
            height:300px
        }}
        
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-871642157"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-150196058-1');
        gtag('config', 'AW-871642157');
    </script>

</head>


<body>
    <?php include "header.php" ?>
    <section class="bd-black ">
        <div class="w-100 py-5 text-center">
            <h1 class="bbblue-col text-uppercase d-lg-block mx-auto text-center d-none mb-0 bold-font">
                contact
            </h1>
        </div>

        <div class="container-fluid mt-5  ">
            <h3 class="bbblue-col d-block text-center mx-auto d-lg-none my-5 bold-font">
                Contact
            </h3>
            <div class="row col-md-11 mx-auto px-0">

                <div class="col-lg-7 col-12 ">


                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3582.411244677826!2d-80.14266631766314!3d26.11813100000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x383c617ca01a9b6!2sRewardlion!5e0!3m2!1sen!2seg!4v1606130066188!5m2!1sen!2segs" width="100%" height="500" class="map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="our-map"></iframe>



                </div>

                <div class="col-lg-5 d-lg-block d-none col-12  pl-lg-5 ">


                    <img class="w-100 place-img" src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/place.jpg" alt="">

                </div>
            </div>
            <div class="row col-md-11 pb-5 mt-5 mx-auto px-0">

                <div class="col-xl-5 col-lg-6 ">
                    <h2 class="display-3 text-light my-5 abil-font">
                        Got a question?
                    </h2>
                    <form id="ContactForm" action="" class="myForm contact-form">
                        <!-- Material input text -->
                        <div class="md-form my-2">
                            <label for="Name" class=""> Name</label>
                            <input type="Name" name="name" required id="Name" class="form-control ">
                        </div>

                        <div class="md-form my-2">
                            <label for="email" class=""> E-mail</label>
                            <input type="email"  required id="email" name="email" class="form-control">
                            <input type="hidden" value="441409" name="mail_champ_list" id="mail_champ_list">
                            <input type="hidden" value="441409" name="list" id="list">
                        </div>

                        <div class="md-form my-2">
                            <label for="textarea" class="mb-5">Your Message </label>
                            <textarea type="textarea" id="textarea" name="message" style="border: 1px solid gray!important;" class="form-control" rows="10" style=" resize:none"></textarea>
                            <input class="btn btn1 col-12 mt-5" type="submit" name="submit" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 d-xl-block d-none">
                </div>
                <div class="col-xl-5 col-lg-6 mt-lg-0 mt-4  ">
                    <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/con-logo.png" class="con-logo my-5">

                    <a href="tel:+1(800)-876-8984" class="reg-font h4 text-light d-flex mb-5">
                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/phone-call.svg" class="mr-3 ">
                        +1 (800)-876-8984</a>
                    <a href="mailto:info@rewardlion.com" class="reg-font h4 text-light d-flex">
                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/email.svg" class="mr-3 ">
                        info@rewardlion.com</a>
<div class="w-100 d-lg-block d-none" style="height:150px;">

</div>
                  
<h4 class=" my-5 text-light bold-font bbblue-col"> Follow our social accounts</h4>
                        <div class="row justify-content-between mx-0 col-xl-9 px-0 my-5">

                            <a href="https://www.linkedin.com/company/rewardlionusa?trk=public-post_share-update_actor-text" target="_blank" title="linkedin" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26.161 26.161">
                                    <path id="linkedin" d="M13.081,0A13.08,13.08,0,1,0,26.161,13.08,13.082,13.082,0,0,0,13.081,0Zm-3.8,19.774H6.094V10.19H9.279ZM7.687,8.881H7.666a1.66,1.66,0,1,1,.042-3.312,1.661,1.661,0,1,1-.021,3.312Zm13.08,10.893H17.581V14.647c0-1.289-.461-2.167-1.614-2.167a1.744,1.744,0,0,0-1.634,1.165,2.182,2.182,0,0,0-.1.777v5.352H11.042s.042-8.685,0-9.584h3.186v1.357A3.163,3.163,0,0,1,17.1,9.965c2.1,0,3.668,1.37,3.668,4.314Zm0,0" fill="#fff" />
                                </svg>
                            </a>

                            <a href="https://www.facebook.com/rewardlion" target="_blank" title="facebook" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26.161 26.161">
                                    <path id="facebook" d="M26.161,13.08a13.081,13.081,0,1,0-13.081,13.08c.077,0,.153,0,.23-.005V15.978H10.5V12.7h2.81V10.291a3.935,3.935,0,0,1,4.2-4.318A22.829,22.829,0,0,1,20.03,6.1V9.023H18.313c-1.354,0-1.62.644-1.62,1.589V12.7h3.245l-.424,3.275h-2.82v9.683A13.084,13.084,0,0,0,26.161,13.08Z" fill="#fff" />
                                </svg>
                            </a>

                            <a href="https://twitter.com/rewardlion" target="_blank" title="twitter" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26.161 26.161">
                                    <path id="twitter" d="M13.081,0A13.08,13.08,0,1,0,26.161,13.08,13.082,13.082,0,0,0,13.081,0Zm5.972,10.2q.009.193.009.388a8.484,8.484,0,0,1-8.542,8.542h0a8.5,8.5,0,0,1-4.6-1.349,6.106,6.106,0,0,0,.716.042,6.024,6.024,0,0,0,3.729-1.285,3.006,3.006,0,0,1-2.8-2.085A2.992,2.992,0,0,0,8.913,14.4,3,3,0,0,1,6.5,11.457c0-.014,0-.026,0-.038a2.982,2.982,0,0,0,1.36.375,3,3,0,0,1-.93-4.008,8.524,8.524,0,0,0,6.189,3.137A3,3,0,0,1,18.24,8.185a6.022,6.022,0,0,0,1.907-.729,3.014,3.014,0,0,1-1.32,1.661,5.988,5.988,0,0,0,1.724-.473,6.1,6.1,0,0,1-1.5,1.555Zm0,0" fill="#fff" />
                                </svg>
                            </a>

                            <a href="https://www.youtube.com/rewardlion" target="_blank" title="youtube" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25.837 25.836">
                                    <g id="youtube_1_" data-name="youtube (1)" transform="translate(0)">
                                        <path id="Path_959" data-name="Path 959" d="M224.113,212.88l4.2-2.42-4.2-2.42Zm0,0" transform="translate(-212.804 -197.541)" fill="#fff" />
                                        <path id="Path_960" data-name="Path 960" d="M12.918,0A12.918,12.918,0,1,0,25.837,12.918,12.92,12.92,0,0,0,12.918,0ZM20.99,12.931a21.321,21.321,0,0,1-.332,3.883,2.023,2.023,0,0,1-1.423,1.423,49.1,49.1,0,0,1-6.317.333A47.343,47.343,0,0,1,6.6,18.224,2.023,2.023,0,0,1,5.179,16.8a21.227,21.227,0,0,1-.333-3.883,21.307,21.307,0,0,1,.333-3.883A2.064,2.064,0,0,1,6.6,7.6a49.1,49.1,0,0,1,6.317-.333,47.243,47.243,0,0,1,6.317.346,2.023,2.023,0,0,1,1.423,1.423,20.233,20.233,0,0,1,.332,3.9Zm0,0" transform="translate(0 0)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/rewardlion/" target="_blank" title="instagram" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26.161 26.161">
                                    <g id="instagram-sketched" transform="translate(0)">
                                        <path id="Path_23" data-name="Path 23" d="M212.007,209.5a2.5,2.5,0,1,1-2.5-2.5A2.5,2.5,0,0,1,212.007,209.5Zm0,0" transform="translate(-196.423 -196.423)" fill="#fff" />
                                        <path id="Path_24" data-name="Path 24" d="M147.5,137.216a2.487,2.487,0,0,0-1.425-1.425,4.156,4.156,0,0,0-1.395-.258c-.792-.036-1.03-.044-3.035-.044s-2.243.008-3.035.044a4.158,4.158,0,0,0-1.395.259,2.488,2.488,0,0,0-1.426,1.425,4.157,4.157,0,0,0-.258,1.395c-.036.792-.044,1.029-.044,3.035s.008,2.243.044,3.035a4.156,4.156,0,0,0,.258,1.395,2.487,2.487,0,0,0,1.425,1.425,4.15,4.15,0,0,0,1.395.259c.792.036,1.029.044,3.035.044s2.243-.008,3.035-.044a4.15,4.15,0,0,0,1.395-.259,2.487,2.487,0,0,0,1.425-1.425,4.16,4.16,0,0,0,.259-1.395c.036-.792.044-1.03.044-3.035s-.008-2.243-.044-3.035A4.15,4.15,0,0,0,147.5,137.216Zm-5.855,8.287a3.857,3.857,0,1,1,3.857-3.857A3.857,3.857,0,0,1,141.643,145.5Zm4.009-6.965a.9.9,0,1,1,.9-.9A.9.9,0,0,1,145.652,138.538Zm0,0" transform="translate(-128.562 -128.566)" fill="#fff" />
                                        <path id="Path_25" data-name="Path 25" d="M13.081,0A13.08,13.08,0,1,0,26.161,13.08,13.082,13.082,0,0,0,13.081,0Zm7.466,16.177A5.511,5.511,0,0,1,20.2,18,3.841,3.841,0,0,1,18,20.2a5.515,5.515,0,0,1-1.823.349c-.8.037-1.057.045-3.1.045s-2.3-.009-3.1-.045A5.515,5.515,0,0,1,8.161,20.2a3.841,3.841,0,0,1-2.2-2.2,5.509,5.509,0,0,1-.349-1.823c-.037-.8-.046-1.057-.046-3.1s.009-2.3.045-3.1A5.511,5.511,0,0,1,5.964,8.16a3.843,3.843,0,0,1,2.2-2.2,5.516,5.516,0,0,1,1.823-.349c.8-.037,1.057-.045,3.1-.045s2.3.009,3.1.046A5.517,5.517,0,0,1,18,5.964a3.842,3.842,0,0,1,2.2,2.2,5.51,5.51,0,0,1,.349,1.823c.037.8.045,1.057.045,3.1S20.583,15.376,20.546,16.177Zm0,0" transform="translate(0 0)" fill="#fff" />
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.pinterest.com/REWARDLION/" target="_blank" title="pinterest" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26.162 26.161">
                                    <g id="pinterest" transform="translate(0)">
                                        <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                            <path id="Path_26" data-name="Path 26" d="M19.647,1.764A12.8,12.8,0,0,0,13.081.01,12.8,12.8,0,0,0,6.515,1.764a13.025,13.025,0,0,0-4.76,4.76A12.8,12.8,0,0,0,0,13.091a12.678,12.678,0,0,0,2.163,7.2,13.033,13.033,0,0,0,5.672,4.786,11.261,11.261,0,0,1,.221-3.014l1.686-7.12a4.543,4.543,0,0,1-.426-2.078,3.9,3.9,0,0,1,.732-2.418,2.177,2.177,0,0,1,1.788-.971,1.6,1.6,0,0,1,1.312.562,2.159,2.159,0,0,1,.46,1.414,5.3,5.3,0,0,1-.2,1.286q-.2.758-.511,1.754t-.451,1.592a1.932,1.932,0,0,0,.392,1.78,2.082,2.082,0,0,0,1.669.741A3.425,3.425,0,0,0,17.5,16.582a9.718,9.718,0,0,0,1.167-4.923,4.83,4.83,0,0,0-1.439-3.628,5.521,5.521,0,0,0-4.011-1.4A6.2,6.2,0,0,0,6.779,12.9a3.876,3.876,0,0,0,.869,2.572.777.777,0,0,1,.187.732q-.034.1-.136.511c-.068.272-.114.449-.136.528q-.136.545-.647.341A3.843,3.843,0,0,1,4.923,15.7a6.809,6.809,0,0,1-.681-3.117A7.434,7.434,0,0,1,4.607,10.3,7.783,7.783,0,0,1,5.749,8.091,8.969,8.969,0,0,1,7.605,6.209,8.722,8.722,0,0,1,10.237,4.9,10.945,10.945,0,0,1,13.576,4.4a8.767,8.767,0,0,1,4.343,1.073,7.671,7.671,0,0,1,2.938,2.776A7.011,7.011,0,0,1,21.87,11.9a11.46,11.46,0,0,1-.886,4.6,7.553,7.553,0,0,1-2.5,3.211A6.136,6.136,0,0,1,14.8,20.874a4.035,4.035,0,0,1-1.942-.486,2.838,2.838,0,0,1-1.244-1.15q-.766,3.014-.92,3.594a10.485,10.485,0,0,1-1.329,2.793,13.08,13.08,0,0,0,10.279-1.209,13.026,13.026,0,0,0,4.761-4.761,12.8,12.8,0,0,0,1.754-6.566,12.8,12.8,0,0,0-1.754-6.566A13.031,13.031,0,0,0,19.647,1.764Z" transform="translate(0 -0.01)" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </a>

                        </div>
                    
                </div>
            </div>
            <div class="w-100 d-lg-block d-none" style="height:200px;">
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="OwlCarousel2-develop/dist/owl.carousel.min.js"></script>

    <script src="/themes/<?php echo sitedata('site_theme') ?>/assets/js/main.min.js"></script>

</body>

</html>