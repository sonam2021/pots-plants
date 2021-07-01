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
  <section class="breadcrumb-main" style="background-image: url('assets/img/product/product_banner1.png');">
    <div class="wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="breadcrumb-contain">
            <div>
              <h2>Accessories </h2>
              <ul>
                <li><a href="index.php">home</a></li>
                <li><i class="fa fa-angle-double-right"></i></li>
                <li><a href="javascript:;">Accessories</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="pt-100px pb-100px">
    <div class="wrapper">
      <div class="row filter_product_button">
        <div class="col-lg-3 col-md-3 col-12 collection-filter">
          <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
          <div class="">
            <div class="sidenavb">
              <button class="dropdown-btn active" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="8"> Seeds 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="14" class="common_selector category"> Seasonal Seeds</a>
              </div>
              <button class="dropdown-btn" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="7"> Deal Zone 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="12" class="common_selector category"> Plant of the Day</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="11" class="common_selector category"> Flat 50%</a>
              </div>
              <button class="dropdown-btn active" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="6" checked=""> Accessories 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="10" class="common_selector category"> Gardening Accessories</a>
              </div>
              <button class="dropdown-btn" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="5"> Gifts &amp; Combo 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="9" class="common_selector category"> Gifts</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="8" class="common_selector category"> Combo</a>
              </div>
              <button class="dropdown-btn active" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="4"> Manure and Fertilizer  
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="7" class="common_selector category"> Iffco Fertilizers </a>
              </div>
              <button class="dropdown-btn" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="2"> Pots / Planters 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="6" class="common_selector category"> Imported Pot</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="5" class="common_selector category"> Bonsai Pot</a>
              </div>
              <button class="dropdown-btn" style="font-size:14px"><input type="checkbox" class="common_selector tab" value="1"> Plants 
                <i class="fa fa-caret-down"></i>
              </button>

              <div class="dropdown-container">
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="13" class="common_selector category"> Seasonal Seeds</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="4" class="common_selector category"> Plam</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="3" class="common_selector category"> Bamboo</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="2" class="common_selector category"> Air purifying plants</a>
                <a href="javascript:;" style="font-size:14px"><input type="checkbox" value="1" class="common_selector category"> Bonsai Plants </a>
              </div>
            </div>
            <div class="vertical-slider">
              <img src="assets/img/product-sidebar/vertical-slider.jpg">
            </div>
            <!-- side-bar single product slider start -->
            <div class="theme-card creative-card creative-inner pt-50px">
              <h5 class="title-border">new product</h5>
              <div class="offer-slider slide-1">
                <div>
                  <div class="media">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/1.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                  </div>
                  <div class="media">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/2.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                 </div>
                 <div class="media ">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/3.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                  </div>
               </div>
               <div>
                  <div class="media">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/4.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                  </div>
                  <div class="media">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/1.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                  </div>
                  <div class="media">
                    <a href="#"><img class="img-fluid " src="assets/img/product-sidebar/2.png" alt=""></a>
                    <div class="media-body align-self-center">
                      <a href="product-page(no-sidebar).html"><h6>Product</h6></a>
                      <h4><i class="fa fa-rupee"></i>500.00</h4>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <!-- side-bar single product slider end -->
            <div class="vertical-slider">
              <img src="assets/img/product-sidebar/vertical-slider1.jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-12">
          <div class="row">
            <div class="col-xl-12">
              <div class="filter-main-btn mb-2"><span class="filter-btn"><i class="fa fa-filter" aria-hidden="true"></i> filter</span></div>
            </div>
         </div>
          <div class="product-listing-content">
            <h1 class="collection--title">
             Accessories
           </h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span> <a href="#" onclick="more()" id="myBtn">Read more</a></p> 
          </div>
          <div class="plants-banner">
            <img src="assets/img/product-sidebar/plants-banner.jpg">
          </div>
          <div class="product-listing-filter">
            <div class="sort">
              <label>Sort By</label>
              <div class="sort-filter">
                <select id="sortBy" class="common_selector3">
                  <option value="product_name_en ASC">Sort By</option>
                  <option value="product_name_en ASC">Name (A-Z)</option>
                  <option value="product_name_en DESC">Name (Z-A)</option>
                  <option value="priceasc">Price (Min to Max)</option>
                  <option value="pricedesc">Price (Max to Min)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="product-listing">
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
          <div class="pagination-button">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
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
  <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script>
function more() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script>
$('.slide-1 ').slick({
      autoplay: true,
      autoplaySpeed: 2500,
  });
</script>
</body>
</html>