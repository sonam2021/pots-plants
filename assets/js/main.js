// rating js
$('#better-rating-form').betterRating({
wrapper:'#better-rating-list'
});
// slick slider
// sticky
window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
/*=====================
 Filter js
 ==========================*/
$(".filter-button").on('click', function (){
    $(this).addClass('active').siblings('.active').removeClass('active');
    var value = $(this).attr('data-filter');
    if(value == "all")
    {
        $('.filter').show('1000');
    }
    else
    {
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
    }
});

$("#formButton").on('click', function (){
    $("#form1").toggle();
});
   /*=====================
  11. filter sidebar js
     ==========================*/
    $('.sidebar-popup').on('click', function(e) {
        $('.open-popup').toggleClass('open');
        $('.collection-filter').css("left","-15px");
    });
    $('.filter-main-btn').on('click', function(e) {
        $('.collection-filter').css("left","-15px");
    });
    $('.filter-back').on('click', function(e) {
        $('.collection-filter').css("left","-365px");
        $('.sidebar-popup').trigger('click');
    });

    $('.account-sidebar').on('click', function(e) {
        $('.dashboard-left').css("left","0");
    });
    $('.filter-back').on('click', function(e) {
        $('.dashboard-left').css("left","-365px");
    });

    $(function () {
        $(".col-grid-box").slice(0, 8).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 4).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
    });
     /*-----number validation---- js start-----*/
    $(document).ready(function(){
    $('[id^=edit]').keypress(validateNumber);
});
 /*=====================
     10. Product page Quantity Counter
     ==========================*/
    $('.product-right .qty-box .quantity-right-plus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.product-right .qty-box .quantity-left-minus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });
    $('.quantity-right-plus').on('click', function () {
       var fieldobj =  $(this).attr('data-f');
       //alert(fieldobj.val());
        var qty = $('#'+fieldobj);
        var currentVal = parseInt(qty.val(), 10);
        if (!isNaN(currentVal)) {
            qty.val(currentVal + 1);
        }
    });
    $('.quantity-left-minus').on('click', function () {
         var fieldobj =  $(this).attr('data-f');
       //alert(fieldobj.val());
        var qty = $('#'+fieldobj);
        var currentVal = parseInt(qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
            qty.val(currentVal - 1);
        }
    });
// vertical tabs js start
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
// remove items js
function removeElement() {
    // Removes an element from the document
    var element = document.getElementById("removecontent");
    element.parentNode.removeChild(element);
}
// change locality js
 function ChangeLocality(){
  document.getElementById("Change-locality").style.display="block";
}
function changeLocality(){
  document.getElementById("changelocality").style.display="block";
}  
// close div js
 