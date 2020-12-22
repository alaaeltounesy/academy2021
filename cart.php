<!DOCTYPE html>
<html lang="en" id="cart-page">
<?php include "header-links.php" ?>

<head>

    <title>cart</title>
    <style>
        .inc-inp {
            color: white;
            height: 39px;
            padding: 0.5rem;
            width: 4rem;
            text-align: center;
            border: none;
            background-color: transparent;
        }

        .btn-number {
            background-color: transparent;
            color: white;
            cursor: pointer;
            height: 39px;
            line-height: 2;
            margin-right: 2px;
            padding: 0;
            width: 2rem;
            border: none;
        }

        .cancel-product {
            background-color: transparent;
            color: white;
            cursor: pointer;
            height: 39px;
            line-height: 2;

            padding: 0;
            width: 2rem;
            border: none;
        }
        input.coupon-inp {
   
  
    background-color: transparent;
    border: none;
    padding-bottom: 10px;
    border-bottom: 1px solid #fff;
    font-family: bold-font;
    color: #26abe2;
    font-size: 1.5rem;
    font-family: 'bold-font'
}
button.coupon-btn {

    font-family: 'bold-font';
    background-color: #26abe2;
    
    color: white;
    padding: 10px 0px;
    border-radius: 10px;
    text-transform: uppercase;
}
button.coupon-btn:hover {
    background-color:transparent ;
    color:#26abe2;
    border:1px solid #26abe2;
}
.coupon-form label{font-family:bold-font;
    color: #26abe2;
    font-size:1.2rem; 
}


.proceed-btn {
    background-color: #f70;
    color: #fff;
    border-radius: 10px;
    font-family: bold-font;
    text-align: center;
    padding: 10px 0px;
    border: 1px solid #f70;
}
.proceed-btn:hover {
    background-color:transparent ;
    color:#f70;
}
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <section class="bd-black ">
        <div class="w-100 py-5 text-center">
            <h1 class="bbblue-col text-uppercase d-lg-block mx-auto text-center d-none mb-0 bold-font">
                cart
            </h1>
        </div>

        <div class="container-fluid mt-5  ">

            <h3 class="bbblue-col d-block mx-auto d-lg-none my-5 bold-font">
                Cart
            </h3>
            <div class="row col-lg-11 py-4  text-center text-light mx-lg-auto mx-0 px-0  " style="border-bottom:1px solid #26ABE2;">
                <div class="col-md-1 mb-md-0 mb-4 col-3 p-0">
                    <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book2.jpg" class="w-100">
                </div>
                <div class="col-md-4  mb-4 col-9 my-md-auto">
                    <p class="text-center bold-font text-light my-auto">
                        Digital Marketing Revolution
                    </p>
                </div>
                <div class="col-md-3 col-4  d-flex mx-auto px-0 justify-content-center bold-font my-auto">

                    <button class="btn-number" onclick="incrementValue(this)" aria-controls="q_number_t" id="increase_t" aria-label="increase quantity">+</button>
                    <input type="text" class="inc-inp" id="q_number_t" value="1" data-increase="increase_t" data-decrease="decrease_t" aria-live="assertive" aria-relevant="additions" aria-atomic="true" aria-label="quantity">
                    <button onclick="decreaseValue(this)" class="btn-number" aria-controls="q_number_t" id="decrease_t" aria-label="decrease quantity">-</button>

                </div>
                <div class="col-md-2 col-4 my-auto">
                    <p class="abil-font mb-0 my-auto">
                        $<span>14.99</span>
                    </p>
                </div>
                <div class="col-md-2 product-removal col-4 my-auto text-right ">
                    <button class="cancel-product mr-auto">
                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/close.svg">
                    </button>
                </div>
            </div>

            <div class="row col-lg-11 py-4  text-center text-light mx-lg-auto mx-0 px-0  " style="border-bottom:1px solid #26ABE2;">
                <div class="col-md-1 mb-md-0 mb-4 col-3 p-0">
                    <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/book1.jpg" class="w-100">
                </div>
                <div class="col-md-4  mb-4 col-9 my-md-auto">
                    <p class="text-center bold-font text-light my-auto">
                    Digital Marketing Revolution
                    </p>
                </div>
                <div class="col-md-3 col-4  d-flex mx-auto px-0 justify-content-center bold-font my-auto">

                    <button class="btn-number" onclick="incrementValue(this)" aria-controls="q_number_t" id="increase_t" aria-label="increase quantity">+</button>
                    <input type="text" class="inc-inp" id="q_number_t" value="1" data-increase="increase_t" data-decrease="decrease_t" aria-live="assertive" aria-relevant="additions" aria-atomic="true" aria-label="quantity">
                    <button onclick="decreaseValue(this)" class="btn-number" aria-controls="q_number_t" id="decrease_t" aria-label="decrease quantity">-</button>

                </div>
                <div class="col-md-2 col-4 my-auto">
                    <p class="abil-font mb-0 my-auto">
                        $<span>14.99</span>
                    </p>
                </div>
                <div class="col-md-2 product-removal col-4 my-auto text-right ">
                    <button class="cancel-product mr-auto">
                        <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/close.svg">
                    </button>
                </div>
            </div>

            <div class="row col-lg-11 py-5  justify-content-between  text-light mx-lg-auto mx-0 px-xl-5  " >
                <div class="col-xl-5 mb-md-0 mb-5 col-md-6 px-xl-5">
                    <form class="coupon-form row  justify-content-between  mx-0 w-100 mb-5">
                      <label class="w-100">
                      Enter coupon code
                      </label>
                        <input type="text"  placeholder="" name="coupon" class="col-8 coupon-inp">
                        <button type="submit" class="col-3 coupon-btn">
                            enter
                        </button>
                    </form>
                    <button class="proceed-btn col-12">
                   <a class="text-light" herf="#">
                   PROCEED TO CHECKOUT <img src="/themes/<?php echo sitedata('site_theme') ?>/assets/img/left-arrow.svg" class="ml-3" >
                   </a>

                    </button>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h4 class="mb-5 text-light">
                    <span class="bold-font mr-5">Subtotal</span> <span class="abil-font">$<span class="Subtotal">30.00</span></span>
                    </h4>
                    <h4 class="mb-5 text-light">
                    <span class="bold-font mr-5">Discount</span> <span class="abil-font">$<span class="Discount">00.00</span></span>
                    </h4>
                    <h3 class="mb-5 bb-color">
                    <span class="bold-font mr-5">TOTAL</span> <span class="abil-font">$<span class="TOTAL">30.00</span></span>
                    </h3>
                </div>
            </div>

        </div>

    </section>
    <script>
        function incrementValue(ele) {
            var value = Number.parseInt(ele.nextElementSibling.value);
            value = isNaN(value) ? 1 : value;
            value++;
            ele.nextElementSibling.value = value;
        }

        function decreaseValue(ele) {
            var value = Number.parseInt(ele.previousElementSibling.value, 10);
            value = isNaN(value) ? 1 : value;
            if (value >= 2)
                value--;
            ele.previousElementSibling.value = value;
        }
        var productremoval = document.querySelectorAll(".product-removal");
productremoval.forEach(function (items, index) {
  var productbtn = items.querySelectorAll("button");
  productbtn.forEach(function (item, index) {
    item.addEventListener('click', function () {
      removeItem(this);
    });

  });
});


function removeItem(removeButton) {
  var productRow = removeButton.parentElement.parentElement;
  productRow.remove();
}
    </script>
    <?php include "footer.php" ?>