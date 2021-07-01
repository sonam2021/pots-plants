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
                <li>product details</li>
              </ul>
            </div>
        </div>
      </div>
    </div>         
  </section>
  <section class="pt-100px">
    <div class="wrapper">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-12">
          <div class="heading"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="exzoom hidden" id="exzoom">
                <div class="exzoom_img_box">
                  <ul class='exzoom_img_ul'>
                    <li><img src="assets/img/product/1.png"></li>
                    <li><img src="assets/img/product/2.png">></li>
                    <li><img src="assets/img/product/3.png"></li>
                    <li><img src="assets/img/product/4.png"></li>
                    <li><img src="assets/img/product/1.png"></li>
                    <li><img src="assets/img/product/2.png">></li>
                    <li><img src="assets/img/product/3.png"></li>
                    <li><img src="assets/img/product/4.png"></li>
                  </ul>
                </div>
                <div class="exzoom_nav"></div>
                <p class="exzoom_btn">
                  <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                  <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="product_details">
                <div class="product-right">
                  <h6>Garden Accessories</h6>
                  <p>Availability:<span>In Stock</span></p>
                  <p><strong>Category:</strong> Clothing</p>
                  <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in</p>
                  <!-- <h6>Advance Ayurveda Cream</h6>
                  <a href="#"><button>Biotique Ayurveda</button></a>
                  <p class="title">Biotique Laboratries</p> -->
                  <div class="rating-star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
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
                  <p class="price"><span><a href="#"><i class="fa fa-rupee-sign"></i>1250<strike><i class="fa fa-rupee-sign"></i>1450</strike></a></span></p>
                  <p class="discount">25% OFF</p>
                  <div class="size-box">
                    <ul class="size-ul">
                      <li class="active"><a href="#">XL</a></li>
                      <li><a href="#">S</a></li>
                      <li><a href="#">M</a></li>
                      <li><a href="#">L</a></li>
                    </ul>
                  </div>
                  <div class="add-button">
                    <ul>
                      <li><a href="#" onclick="buy_now()">BUY NOW</a></li>
                      <li class="add-cart"><a href="cart.html">ADD TO CART</a></li>
                    </ul>
                  </div> 
                  <!-- <h6 class="stock">In Stock</h6> -->
                  <!-- <p><a href="#">+ Add to Wishlist</a></p>
                  <p><a href="#">+ Compare</a></p>
                  <p><strong>Category:</strong> Clothing</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="product-sideimg">
             <img src="assets/img/product/1.png">
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="pt-100px">
    <div class="wrapper">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-12">
          <div class="creative-card creative-inner my_creative_card">
            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
              <li class="nav-item"><a class="nav-link active bg-transparent" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Description</a>
                <div class="material-border"></div>
              </li>
              <li class="nav-item"><a class="nav-link bg-transparent" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i> Specification </a>
                <div class="material-border"></div>
              </li>

              <li class="nav-item"><a class="nav-link bg-transparent" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Write Review</a>
                <div class="material-border"></div>
              </li>
            </ul>
            <div class="tab-content nav-material" id="top-tabContent">
              <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s........</p>
              </div>
              <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="mt-3 text-center">
                </div>
              </div>
              <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                <form class="theme-form">
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="media">
                        <label>Rating</label>
                        <div class="media-body ml-3">
                          <div class="rating">
                            <i class="fa fa-star selected" data-rate="1" aria-hidden="true"></i>
                            <i class="fa fa-star selected" data-rate="2" aria-hidden="true"></i>
                            <i class="fa fa-star selected" data-rate="3" aria-hidden="true"></i>
                            <i class="fa fa-star" data-rate="4" aria-hidden="true"></i>
                            <i class="fa fa-star" data-rate="5" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
                    </div>
                    <div class="col-md-6">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email" required="">
                    </div>
                    <div class="col-md-12">
                      <label for="review">Review Title</label>
                      <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required="">
                    </div>
                    <div class="col-md-12">
                      <label for="review">Review Title</label>
                      <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                    <div class="col-md-12">
                      <button class="btn btn-normal" type="submit">Submit Your Review</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100px pb-100px">
    <div class="wrapper">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-12">
          <div class="text-center heading">
            <h3>Related Product Listing</h3>
          </div>
        </div>
      </div>
      <section class="regular slider">
        <div>
          <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/1.png">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>    Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="product-box">
            <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/2.png" style="height: 275px;">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>    Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div>
         <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/3.png">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>    Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/4.png">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>    Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/1.png">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="product-box">
            <div class="product-content">
              <div class="product-top">
                <div class="flash">
                  <span class="onnew">
                    <span class="text">
                      Save Rs-100.00
                    </span>
                  </span>
                </div>
              </div>
              <div class="product-img">
                <img src="assets/img/product/2.png">
              </div>
              <div class="product-icon">
                <ul>
                  <li><a href="#"><i class="fas fa-cart-plus tooltip"><span class="tooltiptext">Add Cart</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="far fa-heart tooltip"><span class="tooltiptext">Add Wishlist</span></i></a></li>
                  <li><a href="#"><i class="fas fa-eye tooltip"><span class="tooltiptext">View</span></i></a></li>
                </ul>
              </div>
              <div class="rating">
                <i class="fa fa-star" data-rate="1"></i>
                <i class="fa fa-star" data-rate="2"></i>
                <i class="fa fa-star" data-rate="3"></i>
                <i class="fa fa-star" data-rate="4"></i>
                <i class="fa fa-star" data-rate="5"></i>
                <input type="hidden" id="rating-count" name="rating" value="0">
              </div>
              <div class="product-title">
                <h6>2 Layer Bamboo in Decorative Pots</h6>
                <p>    Rs. 299.00 - Rs. 449.00</p>
              </div>
            </div>
          </div>
        </div>
      </section>
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
  <script type="text/javascript">

    $('.product').imagesLoaded( function() {
      $("#exzoom").exzoom({
        autoPlay: false,
      });
      $("#exzoom").removeClass('hidden')
    });
  $('.regular').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      responsive: [{
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
       breakpoint: 400,
       settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
       }
      }]
  });
  </script>
</body>
</html>