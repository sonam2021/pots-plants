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
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>         
  </section>
  <section class="pt-100px pb-100px">
    <div class="wrapper">
      <div class="row">
        <div class="col-12">
          <form action="#">       
            <!--=======  cart table  =======-->
            
            <div class="cart-table table-responsive">
              <table class="table">
                <thead>
                    <tr>
                        <th class="pro-thumbnail">Image</th>
                        <th class="pro-title">Product</th>
                        <th class="pro-price">Price</th>
                        <th class="pro-quantity">Quantity</th>
                        <th class="pro-subtotal">Total</th>
                        <th class="pro-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pro-thumbnail"><a href="single-product.html"><img src="assets/img/product/small1-1.jpg" class="img-fluid" alt="Product"></a></td>
                    <td class="pro-title"><a href="single-product.html">Cillum dolore tortor nisl fermentum</a></td>
                    <td class="pro-price"><span>$29.00</span></td>
                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"><a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></td> 
                    <td class="pro-subtotal"><span>$29.00</span></td>
                    <td class="pro-remove"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pro-thumbnail"><a href="single-product.html"><img src="assets/img/product/small1-2.jpg" class="img-fluid" alt="Product"></a></td>
                    <td class="pro-title"><a href="single-product.html">Auctor gravida pellentesque</a></td>
                    <td class="pro-price"><span>$30.00</span></td>
                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="2"><a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></td>
                    <td class="pro-subtotal"><span>$60.00</span></td>
                    <td class="pro-remove"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pro-thumbnail"><a href="single-product.html"><img src="assets/img/product/small1-3.jpg" class="img-fluid" alt="Product"></a></td>
                    <td class="pro-title"><a href="single-product.html">Condimentum posuere consectetur</a></td>
                    <td class="pro-price"><span>$25.00</span></td>
                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"><a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></td>
                    <td class="pro-subtotal"><span>$25.00</span></td>
                    <td class="pro-remove"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pro-thumbnail"><a href="single-product.html"><img src="assets/img/product/small1-4.jpg" class="img-fluid" alt="Product"></a></td>
                    <td class="pro-title"><a href="single-product.html">Habitasse dictumst elementum</a></td>
                    <td class="pro-price"><span>$11.00</span></td>
                    <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"><a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></td>
                    <td class="pro-subtotal"><span>$11.00</span></td>
                    <td class="pro-remove"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <!--=======  End of cart table  =======-->    
              
          </form>  
        </div>
      </div>
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
</body>
</html>