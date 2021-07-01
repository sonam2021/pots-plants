<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
  <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="assets/css/better-rating.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/css/jquery.exzoom.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
  <?php include('header.php'); ?>
  <section class="breadcrumbs_area">
    <div class="container">   
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_content">
            <ul>
              <li class="home-li"><a href="index.php">home</a></li>
              <li>Checkout</li>
            </ul>
          </div>
        </div>
      </div>
    </div>         
  </section>
  <section class="pt-50px pb-100px">
    <div class="wrapper">
      <!--Checkout Area Strat-->
      <div class="checkout-area mb-80">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="coupon-accordion">
                <!--Accordion Start-->
                <h3><i class="fas fa-calendar-week"></i>Returning customer? <span id="showlogin">Click here to login</span></h3>
                <div id="checkout-login" class="coupon-content">
                  <div class="coupon-info">
                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                    <form action="#">
                      <p class="form-row-first">
                        <label>Username or email <span class="required">*</span></label>
                        <input type="text" class="form-control">
                      </p>
                      <p class="form-row-last">
                        <label>Password  <span class="required">*</span></label>
                        <input type="text">
                      </p>
                      <p class="form-row">
                        <input value="Login" type="submit">
                        <label>
                          <input type="checkbox">
                          Remember me 
                        </label>
                      </p>
                      <p class="lost-password"><a href="#">Lost your password?</a></p>
                    </form>
                  </div>
                </div>
                <!--Accordion End-->
                <!--Accordion Start-->
                <h3><i class="fas fa-calendar-week"></i>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                  <div class="coupon-info">
                    <form action="#">
                      <p class="checkout-coupon">
                        <input placeholder="Coupon code" type="text">
                        <input value="Apply Coupon" type="submit">
                      </p>
                    </form>
                  </div>
                </div>
                <!--Accordion End-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-12">
              <form action="#">
                <div class="checkbox-form">
                  <h3>Billing Details</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="country-select clearfix">
                        <label>Country <span class="required">*</span></label>
                        <select class="wide">
                          <option value="volvo">bangladesh</option>
                          <option value="saab">Algeria</option>
                          <option value="mercedes">Afghanistan</option>
                          <option value="audi">Ghana</option>
                          <option value="audi2">Albania</option>
                          <option value="audi3">Bahrain</option>
                          <option value="audi4">Colombia</option>
                          <option value="audi5">Dominican Republic</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>First Name <span class="required">*</span></label>
                        <input placeholder="" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>Last Name <span class="required">*</span></label>
                        <input placeholder="" type="text">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Company Name</label>
                        <input placeholder="" type="text">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Address <span class="required">*</span></label>
                        <input placeholder="Street address" type="text">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Town / City <span class="required">*</span></label>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>State / County <span class="required">*</span></label>
                        <input placeholder="" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>Postcode / Zip <span class="required">*</span></label>
                        <input placeholder="" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>Email Address <span class="required">*</span></label>
                        <input placeholder="" type="email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkout-form-list">
                        <label>Phone  <span class="required">*</span></label>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list create-acc">
                        <input id="cbox" type="checkbox">
                        <label>Create an account?</label>
                      </div>
                      <div id="cbox-info" class="checkout-form-list create-account">
                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                        <label>Account password  <span class="required">*</span></label>
                        <input placeholder="password" type="password">
                      </div>
                    </div>
                  </div>
                  <div class="different-address">
                    <div class="ship-different-title">
                      <h3>
                        <label>Ship to a different address?</label>
                        <input id="ship-box" type="checkbox">
                      </h3>
                    </div>
                    <div id="ship-box-info" class="row">
                      <div class="col-md-12">
                        <div class="country-select clearfix">
                          <label>Country <span class="required">*</span></label>
                          <select class="wide">
                            <option value="volvo">bangladesh</option>
                            <option value="saab">Algeria</option>
                            <option value="mercedes">Afghanistan</option>
                            <option value="audi">Ghana</option>
                            <option value="audi2">Albania</option>
                            <option value="audi3">Bahrain</option>
                            <option value="audi4">Colombia</option>
                            <option value="audi5">Dominican Republic</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>First Name <span class="required">*</span></label>
                          <input placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Last Name <span class="required">*</span></label>
                          <input placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Company Name</label>
                          <input placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Address <span class="required">*</span></label>
                          <input placeholder="Street address" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Town / City <span class="required">*</span></label>
                          <input type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>State / County <span class="required">*</span></label>
                          <input placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Postcode / Zip <span class="required">*</span></label>
                          <input placeholder="" type="text">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Email Address <span class="required">*</span></label>
                          <input placeholder="" type="email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="checkout-form-list">
                          <label>Phone  <span class="required">*</span></label>
                          <input type="text">
                        </div>
                      </div>
                    </div>
                    <div class="order-notes">
                      <div class="checkout-form-list">
                        <label>Order Notes</label>
                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-12">
              <div class="your-order">
                <h3>Your order</h3>
                <div class="your-order-table table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-total">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="cart_item">
                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity"> × 1</strong></td>
                        <td class="cart-product-total"><span class="amount"><i class="fas fa-rupee-sign"></i>165.00</span></td>  
                      </tr>
                      <tr class="cart_item">
                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity"> × 1</strong></td>
                        <td class="cart-product-total"><span class="amount"><i class="fas fa-rupee-sign"></i>165.00</span></td>  
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class="cart-subtotal">
                        <th>Cart Subtotal</th>
                        <td><span class="amount"><i class="fas fa-rupee-sign"></i>215.00</span></td>
                      </tr>
                      <tr class="order-total">
                        <th>Order Total</th>
                        <td><strong><span class="amount"><i class="fas fa-rupee-sign"></i>215.00</span></strong></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="payment-method">
                  <div class="payment-accordion">
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="#payment-1">
                          <h5 class="panel-title">
                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Direct Bank Transfer.
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="#payment-2">
                          <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Cheque Payment
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="#payment-3">
                          <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              PayPal
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="order-button-payment">
                      <input value="Place order" type="submit">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Checkout Area End-->
    </div>
  </section>
  <?php include('footer.php'); ?>
  <script src="assets/js/jquery.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/jquery.exzoom.js"></script>
  <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/better-rating.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    /*--- showlogin toggle function ----*/
    $('#showlogin').on('click', function() {
      $('#checkout-login').slideToggle(900);
    });

    /*--- showlogin toggle function ----*/
    $('#showcoupon').on('click', function() {
      $('#checkout_coupon').slideToggle(900);
    });
    /*--- showlogin toggle function ----*/
    $('#cbox').on('click', function() {
      $('#cbox-info').slideToggle(900);
    });

    /*--- showlogin toggle function ----*/
    $('#ship-box').on('click', function() {
      $('#ship-box-info').slideToggle(1000);
    });

  </script>
</body>
</html>