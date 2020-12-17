

(function () {
  'use strict';
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
var subForm = document.querySelector(".contact-form");

subForm.addEventListener("submit", function (e) {
    e.preventDefault();

    var formdata = new FormData(subForm);
    var data = Object.fromEntries(formdata);

postData('test.php', data).then(data => {

  if (data.email) {
    subForm.reset();
    console.log(data);
   responseMessage("Thank you " + data.name);
  }
});
});
var toast = document.getElementById("msgtoast");
var toastbody = document.querySelector(".msgtoast-body");
function responseMessage(msg) {
  $("#msgtoast").fadeIn("show");
  toastbody.textContent = msg;
  setTimeout(function () {
    $("#msgtoast").fadeOut("show");

  }, 2000);
}

    $("._5h0i._88va").css("background-color","black");

    $('#Password1').focus(function(e){
      $('.email-list').css("opacity","1");

  }).blur(function(e){
    $('.email-list').css("opacity","0");

  });

    $(" .main-btn").click(function () {
      $( ".main-menu" ).fadeIn();
     
      $(".main-menu").css("display","flex");

       
    });

    $(" .canel-menu").click(function () {
  
      $(".main-menu").fadeOut("slow");
    

       
    });


        var owl = $('.owl-carousel');
        owl.owlCarousel({
            navText: ["<img src='./assets/img/prev.png'>",
            "<img src='./assets/img/next.png'>"],

          loop: true,
          margin: 10,
          nav: true,
          responsive: {
            0: {
              items: 1
            },
            1000: {
              items: 2
            },
            1200: {
              items: 4
            }
          }
        });
   
      




    const loadPage = function (hrf, anim = "none") {
        fetch(hrf).then(function (response) {
            // The API call was successful!
            return response.text();
        }).then(function (html) {
            var parser = new DOMParser();
            var doc = parser.parseFromString(html, 'text/html');
            var newHtml = doc.querySelector('html');
            doc.querySelector('body').classList.add('newpage')
            var oldHtml = document.querySelector('html');
            oldHtml.remove();
            document.appendChild(newHtml);
            document.querySelector('body').classList.add(anim);

        }).catch(function (err) {
            console.warn('Something went wrong.', err);
        });
    }
    const aElE = document.querySelectorAll('.ajax');
    aElE.forEach(function (ele) {
        ele.addEventListener('click', function (e) {
            e.preventDefault();
            var hrf = ele.href;
            var anim = ele.dataset.anim;
            loadPage(hrf, anim);
        })
    })
})();


  

  
  
  
  $(document).ready(function () {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function (e) {
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });

    }).on('mouseout', function () {
      $(this).parent().children('li.star').each(function (e) {
        $(this).removeClass('hover');
      });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');

      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }

      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }

      // JUST RESPONSE (Not needed)
      var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
      var msg = "";
      if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
      }
      else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
      }
      responseMessage(msg);

    });


  });
 

  
  
/* 

$(function () {
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $(".over2").toggleClass("overOpen");
  });

  $(".over2").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $(".over2").toggleClass("overOpen");
  });

  $(window).resize(function (e) {
    if ($(window).width() <= 768) {
      $("#wrapper").removeClass("toggled");
    } else {
      $("#wrapper").addClass("toggled");
    }
  });
});

window.onload = function () {
  document.getElementById('close').onclick = function () {
    this.parentNode.parentNode.parentNode
    $("#wrapper").toggleClass("toggled");
  };
};

 */
