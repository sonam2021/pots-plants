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
  <section class="pt-80px pb-80px">
    <div class="wrapper">
      <div class="row justify-content-center filter_product_button">
        <div class="col-lg-3 col-md-3 col-12 collection-filter">
          <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
          <div class="profile_tabs">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'dashboard')" id="defaultOpen"><i class="fas fa-tachometer-alt"></i>Dashboard</button>
              <button class="tablinks" onclick="openCity(event, 'order')"><i class="fas fa-cart-plus"></i> Orders</button>
              <button class="tablinks" onclick="openCity(event, 'payment')"><i class="fas fa-shopping-bag"></i>Payment Method</button>
              <button class="tablinks" onclick="openCity(event, 'address')"><i class="fas fa-map-marker"></i>Address</button>
              <button class="tablinks" onclick="openCity(event, 'account')"><i class="fas fa-user-circle"></i>Account Details</button>
              <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-12 profile-content">
          <div class="row">
            <div class="col-xl-12">
              <div class="filter-main-btn mb-2"><span class="filter-btn"><i class="fa fa-filter" aria-hidden="true"></i> filter</span></div>
            </div>
         </div>
          <div id="dashboard" class="tabcontent">
            <div class="profile_fillcontent pt-50px pb-50px">
              <div class="profile_fillcontent_title">
                <p class="user-name">Hello <span>yourmail@info</span></p>
                <p>(not yourmail@info? <a href="login.php">Log Out</a>)</p>
              </div>
              <div class="profile_fillcontent_title">
                <p>Need Assistance? Customer service at.</p>
                <p>admin@devitems.com.</p>
              </div>
              <div class="profile_fillcontent_title">
                <p>E-mail them at </p>
                <p>support@yoursite.com</p>
              </div>
              <div class="profile_fillcontent_title" style="text-align: center;">
                <a class="btn" href="carts_details.php" ><i class="fa fa-cart-plus"></i>view cart</a>
              </div>
            </div>
            <h3>Dashboard</h3>
            <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
          </div>
          <div id="order" class="tabcontent">
            <div class="order-details">
              <h3>Orders</h3>
              <div class="myaccount-table table-responsive text-center">
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mostarizing Oil</td>
                        <td>Aug 22, 2019</td>
                        <td>Pending</td>
                        <td><i class="fas fa-rupee-sign"></i>45</td>
                        <td><a href="carts_details.php" class="btn">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Katopeno Altuni</td>
                        <td>July 22, 2019</td>
                        <td>Approved</td>
                        <td><i class="fas fa-rupee-sign"></i>100</td>
                        <td><a href="carts_details.php" class="btn">View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Murikhete Paris</td>
                        <td>June 12, 2017</td>
                        <td>On Hold</td>
                        <td><i class="fas fa-rupee-sign"></i>99</td>
                        <td><a href="carts_details.php" class="btn">View</a></td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

          <div id="address" class="tabcontent">
            <div class="address">
              <h3>Billing Address</h3>

              <address>
                  <p><strong>Ramkumar</strong></p>
                  <p>1355 Market St, Suite 900 <br>
                      San Francisco, CA 94103</p>
                  <p>Mobile: (123) 456-7890</p>
              </address>

              <a href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
            </div>
          </div>
          <div id="account" class="tabcontent">
            <div class="account-details">
              <h3>Account Details</h3>
              <form>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <input type="text" name="" placeholder="First Name" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <input type="text" name="" placeholder="Last Name" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                      <input type="text" name="" placeholder="Display Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="email" name="" placeholder="Email" class="form-control">
                    </div>
                  </div>
                </div>
                <h6>Password change</h6>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                      <input type="password" name="" placeholder="Current Password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <input type="password" name="" placeholder="New Password" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <input type="password" name="" placeholder="Confirm Password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                    <button class="btn">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
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