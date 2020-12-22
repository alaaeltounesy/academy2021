
<!doctype html>
<html lang="en">

<head>
  <title>Rewardlion Academy | Signin</title>
  <meta name="title" content="Rewardlion Academy | Signin">
  <meta name="description" content="Get A Straight Path To Your Business Success.
Our Directed Academy Is Specially Designed To Find The Shortest Path To Have All That You Are Searching For In One Place Reap The Rewards And Benefits Of The Experts.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://academy.rewardlion.com/signin">
  <meta property="og:title" content="Rewardlion Academy">
  <meta property="og:description" content="Get A Straight Path To Your Business Success.
Our Directed Academy Is Specially Designed To Find The Shortest Path To Have All That You Are Searching For In One Place Reap The Rewards And Benefits Of The Experts.">
  <meta property="og:image" content="https://academy.rewardlion.com/themes/academy2/img/seo_cover.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://academy.rewardlion.com/signin">
  <meta property="twitter:title" content="Rewardlion Academy">
  <meta property="twitter:description" content="Get A Straight Path To Your Business Success.
Our Directed Academy Is Specially Designed To Find The Shortest Path To Have All That You Are Searching For In One Place Reap The Rewards And Benefits Of The Experts.">
  <meta property="twitter:image" content="https://academy.rewardlion.com/themes/academy2/img/seo_cover.jpg">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="804284338345-692g6qhnhfinf9764qdhg86qmou3ut9a.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/api:client.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="/themes/<?php echo sitedata('site_theme') ?>/assets/css/circle.css">
    <link rel="stylesheet" href="/themes/<?php echo sitedata('site_theme') ?>/assets/css/style.min.css">
 <script>
    var googleUser = {};
    var startApp = function() {
      gapi.load('auth2', function() {
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init({
          client_id: '804284338345-692g6qhnhfinf9764qdhg86qmou3ut9a.apps.googleusercontent.com',
          cookiepolicy: 'single_host_origin',
          // Request scopes in addition to 'profile' and 'email'
          //scope: 'additional_scope'
        });
        attachSignin(document.getElementById('customBtn'));
      });
    };

    function attachSignin(element) {
      console.log(element.id);
      auth2.attachClickHandler(element, {},
        function(googleUser) {
          var profile = googleUser.getBasicProfile();
          var id_token = googleUser.getAuthResponse().id_token;
          postData('/api/v1/user.php', {
              'gid': profile.getId(),
              'name': profile.getName(),
              'email': profile.getEmail(),
              'id_token': id_token,
              'image_url': profile.getImageUrl()
            })
            .then(data => {
              console.log(data);
              if (data.signin) {
                window.location.href = '/my-library'
              } else {
                console.log(data);
              };
            });
        },
        function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
    }
  </script>
  <script>
    function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
      console.log('statusChangeCallback');
      console.log(response); // The current login status of the person.
      if (response.status === 'connected') { // Logged into your webpage and Facebook.
        testAPI();
      } else { // Not logged into your webpage or we are unable to tell.
        //document.getElementById('status').innerHTML = 'Please log ' +
//'into this webpage.';
      }
    }

    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }

    function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
      FB.api('/me?fields=id,email,name,picture', function(response) {
        console.log(response);
        postData('/api/v1/user.php', {
            'fbid': response.id,
            'name': response.name,
            'email': response.email,
            'image_url': response.picture.data.url
          })
          .then(data => {
            if (data.signin) {
              window.location.href = '/my-library'
            } else {
              console.log(data);
            };
          });
      });
    }
    window.fbAsyncInit = function() {
      FB.init({
        appId: '524623648186923',
        cookie: true,
        xfbml: true,
        version: 'v6.0'
      });

      FB.AppEvents.logPageView();

    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>
    function validateemail(email) {
      var x = email;
      var msg = document.getElementById("email-msg");
      var atposition = x.indexOf("@");
      var dotposition = x.lastIndexOf(".");
      if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        msg.innerHTML = "Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition;
        return false;
      } else {
        postData('/checkemail', {
          email: email
        }).then(data => {
          console.log(data);
          if (!data)
            msg.innerHTML = "This email address already exist "; // JSON data parsed by `response.json()` call
          else
            msg.innerHTML = "";
        });

      }
    }

    function passCheck() {
      var p1 = document.getElementById("pass-in");
      var p2 = document.getElementById("pass-in-chk");
      var msg = document.getElementById("pass-chk-msg");
      if (p1 != p2) {
        msg.innerHTML = "Password doesn't match";
      } else if (p1 == p2) {
        msg.innerHTML = "";
      }
    }
  </script>

  <style>
    .facebook-btn {
  
    display: inline-block;
    background: transparent;
    color: #fff;
    border-radius: 10px;
    border: thin solid #B7BFC2;
    white-space: nowrap;
    padding: 7px 0px;
    position: absolute;
    top: 0;
    color: white!important;
    border: 1px solid white;
    border-radius: 10px;
}
    body {
      overflow-x: hidden;
      position: relative;
    }

    .overlay {
      position: fixed;
      height: 100%;
      top: 0px;
      width: 100%;
      overflow-y: auto;
      display: none;
      z-index: 5666666;
      background-color: rgba(0, 0, 0, 0.8);
    }

    .cls-btn {
      background-color: #fff;
      position: absolute;
      top: -10px;
      font-size: 25px;
      right: -10px;
      border: 1px solid white;
      border-radius: 50%;
      cursor: pointer;
    }

    .over2 {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .popup {
      display: none;
      margin-top: 3rem;
      margin-bottom: 3rem;
      outline: none;
      position: absolute;
      opacity: 1;
      top: 0%;
      width: 50%;
      left: 25%;
      z-index: 222;

    }

    @media (max-width: 600px) {

      .popup {
        width: 90%;
        left: 5%;
      }
    }

    .start-btn:hover {
      background-color: rgb(72, 156, 250);
    }

    .start-btn {
      font-weight: bold;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
      background-color: #0c69a8;
      font-size: 22px;
      color: white !important;
    }

    .fb_iframe_widget {
      display: block !important;
    }
  </style>
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1798915253513360');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1798915253513360&ev=PageView&noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-871642157"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-150196058-3');
    gtag('config', 'AW-871642157');
  </script>
</head>

<body>

  <div class="container-fluid bd-black px-0">
    <div class="row">

      <!-- Card -->
      <div class="card col-12 col-xl-6 mt-4">

        <!-- Card body -->
        <div class="card-body">

          <!-- Material form register -->
          <form class="col-md-9 mx-auto" method="POST" action="">
            <a href="/" class="d-flex justify-content-center"><img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/logo-header.png"   alt=""></a><br><br>
       
        

            <div class="form-group"> 
                <label ><i class="fa fa-envelope prefix grey-text"></i> User Name
                </label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
              <label class="form-label"><i class="fa fa-lock prefix grey-text">
                </i> Password </label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group row">
              <label class="custom-control custom-checkbox col-md-6">
                <input type="checkbox" class="custom-control-input" />
                <span class="custom-control-label">Remember me</span>

              </label>
              <a class="col-md-6 d-md-block d-none bbblue-col" style="text-align:right;" href="/reset-password" rel="nofollow"> Reset password </a>
              <a class="col-md-6 d-block d-md-none bbblue-col" style="text-align:left;" href="/reset-password" rel="nofollow"> Reset password </a>
            </div>
            <div class="form-footer mb-4">
              <button class="btn btn1 btn-block" type="submit" name="login" title="">Sign in</button>
            </div>


            <div class="container-fluid">
              <div class="row">
              <hr class="col-5 p-0" style=" background-color:#BFBFBF;">
                <p class="col-2 p-0 text-center " style="color:#BFBFBF;">or</p>
                <hr class="col-5 p-0" style=" background-color:#BFBFBF;">
           
              </div>
            </div>

            <div class="container-fluid p-0">
              <div class="my-3 row">

                <!--Google-->
                <div class="col-xl-6 col-md-7 col-12 mb-4 mx-auto">
                  <div id="gSignInWrapper">
                    <div id="customBtn" class="customGPlusSignIn col-12 text-center px-1">

                      <div class="container-fluid">
                        <div class="row">
                          <div class="text-left pl-0 col-1">
                            <span class="icon"></span>
                          </div>

                          <div class="text-center col-11">
                            <span class="buttonText pt-1">Log in with Google</span>
                          </div>

                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="name"></div>
                  <script>
                    startApp();
                  </script>
                </div>

                <!--facebook-->
                <div class="col-xl-6 col-md-7 col-12 mb-4 mx-auto">
              <button type="button" class="btn  col-11 facebook-btn" onclick="checkLoginState();">
 log in 
              </button>
              
              </div>

              </div>
            </div>

          </form>
        </div>
      </div>

      <div class="col-6 d-none d-xl-block p-0 m-0 ">
        <img class="w-100 img" src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/signin.png" alt="">
      </div>
    </div>
  </div>
  <?php if (isset($_GET['rel']) && $_GET['rel'] == 'funnel') { ?>
    <div class="overlay">
      <div class="over2"></div>
      <div class="popup p-3 text-center">

        <div class="col-12">
          <img src="" class="w-100 mb-2 mx-auto">
        </div>



      </div>
    </div>
  <?php } ?>
  <!-- Optional JavaScript -->

  <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
  <script>
    async function postData(url = '', data = {}) {
      // Default options are marked with *
      const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
          'Content-Type': 'application/json'
          // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(data) // body data type must match "Content-Type" header
      });
      return response.json(); // parses JSON response into native JavaScript objects
    }
    /* $(document).ready(function() {

      $(' .popup ').delay().fadeIn('slow');
      $(' .overlay ').delay().fadeIn('slow');
      $(".pop-btn").click(function() {
        $(".popup ").hide(1000);
        $(".overlay ").hide(1000);
      });

      $(".overlay").click(function() {
        $(".popup ").hide(1000);
        $(".overlay ").hide(1000);
      });
    }); */
  </script>
</body>

</html>
<style>
    label{    margin: 0.7rem 0px;
    color:#BFBFBF;
}
  body {
    margin: 0;
    padding: 0;
    font-family: nexa;

  }

  .card {
    border: none;
  }


  .btn1 {
    background-color: rgb(37, 165, 220);
    border-radius: 10px;
    color: white;
    font-family: 'bold-font';
    text-transform: uppercase;
}

  .soci {
    background-color: #F6F6F6;
    border-radius: 25px;
    padding: 5px;
    font-size: 15px;
    margin-bottom: 10px !important;
  }

  .soci a {
    text-decoration: none;
    color: black;
  }

  a:hover {
    text-decoration: none;
    color: black;
  }

  .img {
    width: 100%;
  }

  /* google */

  #customBtn {
    display: inline-block;
    background: transparent;
    color: #fff;
    border-radius: 10px;
    border: thin solid #B7BFC2;
    white-space: nowrap;
    padding: 5px 30px;
}
  #customBtn:hover {
    cursor: pointer;
  }

  span.label {
    font-family: serif;
    font-weight: normal;
  }

  span.icon {
    background: url('/themes/<?php echo sitedata('site_theme') ?>/assets/img/google.png') transparent 5px 50% no-repeat;
    display: inline-block;
    vertical-align: middle;
    width: 30px;
    height: 30px;
  }

  span.buttonText {
    display: inline-block;
    vertical-align: middle;
    font-weight: bold;
    /* Use the Roboto font that is loaded in the <head> */
    font-family: 'Roboto', sans-serif;
  }
  .form-control {
    border: none!important;
    background-color: transparent!important;
    border-radius: 0;
    border-bottom: 1px solid gray!important;
    color: white!important;
    font-family: 'bold-font';
    outline: none!important;
    box-shadow: none!important;
}

</style>