<!DOCTYPE html>
<html lang="en" id="register">
<?php include "header-links.php" ?>
<meta name="google-signin-client_id" content="804284338345-692g6qhnhfinf9764qdhg86qmou3ut9a.apps.googleusercontent.com">

<head>

    <title>register</title>

  <style>
 
    body {
      margin: 0;
      padding: 0;
      font-family: nexa;

    }

    .card {
      border: none;
    }
label{    margin: 0.7rem 0px;
    color:#BFBFBF;
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
      padding: 5px 0;
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
/* facebook */

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
    }

    .fb_iframe_widget {
      display: block !important;
    }
    /* list password */
 
    .email-list {
        transition-duration: 1s;
        opacity:0;
    color: rgb(37, 165, 220);
    padding: 10px;
    font-size: 14px;
    position: absolute;
    width: 50%;
    background-color: #fff;
    z-index: 4;
    right: -40%;
}
@media(max-width:1200px){
    .email-list  {
        top: 20%;
    right: 0%
    }
}
@media(max-width:450px){
    .email-list  {
        width: 70%
    }
}
.email-list::before{
    position: absolute;
    content: "";
    background-color: white;
    width: 20px;
    height: 20px;
    top: 12px;
    left: -10px;
    transform: rotate(45deg);
}

.email-list ul{
    padding-left:20px;
}
  </style>
   
 
 <!-- google scripts -->
 
 <script src="https://apis.google.com/js/api:client.js"></script>
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
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this webpage.';
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
              console.log(data);a
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

    function validateemail(email) {
      var x = email;
      var res = false;
      var msg = document.getElementById("email-msg");
      var atposition = x.indexOf("@");
      var dotposition = x.lastIndexOf(".");
      if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        msg.innerHTML = "Please enter a valid e-mail address ";
        res = true;
      } else {
        var vars = postData('/checkemail', {
          email: email
        }).then(data => {

          if (!data) {
            msg.innerHTML = "This email address already exist ";
          } else {
            msg.innerHTML = "";
          }
          return data
        });
      }
      return vars;
    }

    function passCheck() {
      var p1 = document.getElementById("Password1").value;
      var p2 = document.getElementById("Password2").value;
      var msg = document.getElementById("pass-chk-msg");
      if (p1 != p2) {
        msg.innerHTML = "Password doesn't match";
        return false;

      } else if (p1 == p2) {
        msg.innerHTML = "";
        return true;
      }

    }

    function formValidation(ele) {
      var formmsg = document.getElementById("form-msg");
      var subbtn = document.getElementById("form-submit-btn");
      subbtn.disabled = true;
      var formData = {
        full_name: ele.full_name.value,
        email: ele.email.value,
        password: ele.password.value,
        list: 'd213395fa5'
      }

      if (!validateemail(ele.email.value) || !passCheck()) {
        var ddd = validateemail(ele.email.value);
        formmsg.innerHTML = "Please correct the highlighted fields " + ddd;

      } else {
        if (!document.getElementById('icd').checked) {
          formmsg.innerHTML = "Please read and agree to our terms and conditions";
        } else {
          postData('/api/v1/user_reg.php', formData).then(data => {
            if (data.inserted) {
              window.location.href = "/signin";
            } else {
              formmsg.innerHTML = data.err;
              console.log(data.err);
            }
          });
        }

      }
      subbtn.disabled = false;
      return false;
    }
  </script>
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

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=524623648186923&autoLogAppEvents=1">
  </script>

  <div class="container-fluid px-0 bd-black">
    <div class="row ">
      <div class="card col-12 col-xl-6 mt-4">
        <div class="card-body">
          <form method="POST" action="" class="col-md-9 mx-auto" onsubmit="return formValidation(this)">
            <a href="/" class="d-flex justify-content-center"><img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/logo-header.png"  alt=""></a><br><br>
         
            <div class="md-form my-2">
              <div class="form-group"><label><i class="fa fa-user prefix grey-text"></i> Full name
              </label>
                <input type="text" name="full_name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="" required>
              </div>
            </div>
            <div class="md-form my-2">
          
              <div class="form-group">
              <label>
                  <i class="fa fa-envelope prefix grey-text"></i> E-mail
              </label>
                <input type="email" onkeyup="validateemail(this.value)" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="" required>
                <i id="email-msg" class="mt-2" style="color: #dc3c3c;"></i>

            </div>
            </div>
            <div class="container-fluid p-0 my-2" style="position:relative;">
            <div class="email-list">
                  <p class="mb-0" style="padding-left:20px"> Password must contain :</p>  

                      <ul>
                              <li>
                          At least 8 characters

                          </li>
                          <li>
                          1 Uppercase letter
                          </li>
                          <li>
                          1 Lowercase letter
                          </li>
                          <li>
                          1 Special character

                          </li>
                          <li>
                          1 number
                          </li>
                      </ul>
                  </div>
              <div class="row">
               
                <div class="md-form col-xl-6">
                  <div class="form-group">
                    <label class="form-label"><i class="fa fa-lock prefix grey-text">
                      </i> Password </label>
                    <input type="password" name="password" class="form-control" id="Password1" placeholder="" required>
                  </div>
                </div>
                <div class="md-form col-xl-6">
                  <div class="form-group">

                    <label class="form-label" for="Password2"><i class="fa fa-exclamation-triangle prefix grey-text"></i> Confirm Password </label>
                    <input type="password" name="password2" onkeyup="passCheck()" class="form-control" id="Password2" placeholder="" required>
                  </div>
                  <i id="pass-chk-msg" style="color: #dc3c3c;"></i>
                </div>
                <div class="form-check my-4 px-lg-5">
                  <input class="form-check-input" type="checkbox" id="icd">
                  <label for="defaultCheck12" class="grey-text my-0">I agree to the
                      <a href="https://www.rewardlion.com/USA-terms" target="_blank" class="bbblue-col"> Terms and
                      Conditions</a></label>
                </div>
                <i id="form-msg" style="color: #dc3c3c;"></i>
              </div>
            </div>
            <div class="text-center pb-4">
              <button class="btn btn1 col-12" type="submit" id="form-submit-btn">Sign up</button>
            </div>

            <div class="container-fluid mt-3">
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
                  <div class="fb-login-button text-center" scope="public_profile,email" onlogin="checkLoginState();" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width="100%"></div>
                </div>

              </div>
            </div>

          </form>
        </div>
      </div>


      <!-- image -->
      <div class="col-6 d-none d-xl-block p-0 m-0 ">
        <img class="w-100 img" src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/reg.png" alt="">
      </div>
      <!-- image -->

    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="OwlCarousel2-develop/dist/owl.carousel.min.js"></script>

    <script src="/themes/<?php echo sitedata('site_theme') ?>/assets/js/main.min.js"></script>

    </body>

</html>