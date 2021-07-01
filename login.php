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
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="login-form">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <h3>Login</h3>
                </div>
              </div>
            </div>
            <form action="#">
              <div class="form-group">
                <label>User Name</label>
                <input type="text" name="" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="Password" name="" class="form-control">
              </div>
              <div class="form-group">
                <a href="#">Submit</a>
              </div>
              <a href="forget.php" class="forget">Forget Your Password?</a><br>
              <a href="register.php" class="register">Create Account</a>
            </form>
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