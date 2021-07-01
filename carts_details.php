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
  <style>
    #exzoom {
      width: 400px;
      /*height: 400px;*/
    }
    .zoom-img { margin: 150px auto; max-width: 960px; }
    .hidden { display: none; }
  </style>
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
                <li>Carts details</li>
              </ul>
            </div>
        </div>
      </div>
    </div>         
  </section>
  <section class="pt-50px pb-100px">
    <div class="wrapper">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
          <h1 class="mb-50px">Shopping Cart</h1>

          <div class="shopping-cart">

            <div class="column-labels">
              <label class="product-image"></label>
              <label class="product-details"></label>
              <label class="product-price">Price</label>
              <label class="product-quantity">Quantity</label>
              <label class="product-line-price">Total</label>
              <label class="product-removal">Remove</label>
            </div>

            <div class="product" id="removecontent">
              <div class="product-image">
                <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
              </div>
              <div class="product-details">
                <div class="product-title">Dingo Dog Bones</div>
                <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
              </div>
              <div class="product-price">12.99</div>
              <div class="product-quantity product-right">
               <div class="qty-top">
                  <div class="qty-box">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> 
                      </span>
                      <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-line-price">25.98</div>
              <div class="product-removal">
                <button class="remove-product" onclick="removeElement()">
                  Remove
                </button>
              </div>
            </div>

            <div class="product" id="removecontent">
              <div class="product-image">
                <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
              </div>
              <div class="product-details">
                <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
                <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
              </div>
              <div class="product-price">45.99</div>
              <div class="product-quantity product-right">
                <div class="qty-top">
                  <div class="qty-box">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> 
                      </span>
                      <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-line-price">45.99</div>
              <div class="product-removal">
                <button class="remove-product" onclick="removeElement()">
                  Remove
                </button>
              </div>
            </div>

            <div class="totals">
              <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">71.97</div>
              </div>
              <div class="totals-item">
                <label>Tax (5%)</label>
                <div class="totals-value" id="cart-tax">3.60</div>
              </div>
              <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping">15.00</div>
              </div>
              <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">90.57</div>
              </div>
            </div>
            <a href="checkout.php"><button class="checkout">Checkout</button></a>

          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 offset-md-1">
          <div class="location">
            <h5>Your Current Location is</h5>
            <p>6/56, Bhavani Nagar, Moosapet, Hyderabad, Telangana 500018, India Pick Store Available</p>
            <a href="#" onclick="changeLocality()">Change Locality</a>
          </div>
          <div class="show-letus-offer">
            <h6>Applicable Offers</h6>
            <p>Offer can be selected on promotions and payment page before final checkout.</p>
            <img src="assets/img/offer-1.png" style="width: 100%;">
            <hr>
            <img src="assets/img/offer-1.png" style="width: 100%;">
            <hr>
            <img src="assets/img/offer-1.png" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="" id="changelocality">
    <span class="close">&times;</span>
    <div class="custom-container">
      <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-6 col-md-8">
            <div id="details-form" style="background: white; padding: 15px; border-radius: 5px;">
            <form action="https://www.firstmed.in/user-address-submit" method="post">
                 <input type="hidden" name="_token" value="uczMSKpIWfJI67Hjtv4nfkZWUvmsr4bfLxI5OtwP">
             <h3>Delivery Address</h3>
             <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                  </div>
               </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="input" class="form-control" id="edit1" name="phone_number" placeholder="Phone Number" required="">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                    <label for="number">Pin Code</label>
                    <input type="text" class="form-control" id="" name="pincode" placeholder="Pin Code" required="">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                    <label for="number">Locality</label>
                    <input type="text" class="form-control" id="" name="locality" placeholder="Locality" required="">
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="form-group">
                    <label for="number">Address</label>
                    <textarea class="form-control" name="address"></textarea>
                  </div>
               </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="number">City/District/Town</label>
                    <input type="text" class="form-control" id="" name="city" placeholder="City/District/Town" required="">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                    <label for="number">State</label>
                   <select class="form-control" name="state" required="" tabindex="7">
                      <option value="" disabled="">--Select State--</option>
                      <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option><option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="West Bengal">West Bengal</option>
                   </select>
                  </div>
               </div>
               <div class="col-lg-12">
                 <p class="address-type">Address Type</p>
               </div>
               <div class="col-lg-6">
                 <div class="delivery-radio">
                   <input type="radio" value="home" name="delivery">
                 </div>
                 <div class="delivery-radio-span">
                   <span>Home (All day delivery)</span>
                 </div>
               </div>
               <div class="col-lg-6 delivery-radio">
                  <div class="delivery-radio">
                    <input type="radio" value="work" name="delivery">
                  </div>
                  <div class="delivery-radio-span">
                    <span>Work (Delivery between 10 AM - 5 PM)</span>
                  </div>
               </div>
               <div class="col-lg-6 col-12">
                 <div class="save-details-button">
                   <a href="#"><button onclick="changeaddresss(this.value)">Save and Deliver Here</button></a>
                 </div>
               </div>
               
               <div class="col-lg-6 col-12">
                 <div class="Cancel-button">
                   <a href="#"><button>Cancel</button></a>
                 </div>
               </div>
             </div>
           </form>
           </div>
          </div>
      </div>
   </div>
  </div>
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
    var closebtns = document.getElementsByClassName("close");
  var i;

  for (i = 0; i < closebtns.length; i++) {
 closebtns[i].addEventListener("click", function() {
 this.parentElement.style.display = 'none';
 });
 }
  </script>
</body>
</html>