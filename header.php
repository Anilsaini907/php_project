
<?php
include_once('admin/config.php'); 
$catsql="SELECT * FROM tb_category where is_active  =1";
$allcats=array();
$categories=array();
 if (!empty($mysqliconn)) {
     $categories=mysqli_query($mysqliconn,$catsql);
     while($rows=mysqli_fetch_array($categories)){
     //var_dump($rows);
     array_push($allcats,$rows);

     }
 }
 //var_dump($allcats);
//ini_set('display_errors', 1);
?>
<head>
	<meta charset="utf-8">
	<title>StellaBlankets</title>
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
        <!-- CSS
        ============================================ -->
        <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
        <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/customFonts.css">
        <!-- Plugins CSS (All Plugins Files) -->
        <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
        <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
        <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
        <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
        <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/slick.css">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css"> -->
        <style>
       #hoveredcategory img{
            width:500px;
            height:300px;
        }
        h1 { text-align: center }
        .site-main-menu.justify-content-center ul li{
            margin:-10px;
        }
    </style>
    </head>
	<body>
    <?php
    include_once('topbar_green.php');

    ?>
    <?php
    $n=1;

 ?>
    <!-- Header Section Start -->
    <div class="header-section section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row row-cols-lg-3 align-items-center">

                <!-- Header Language & Currency Start -->
                <div class="col">
<!--                    <ul class="header-lan-curr">-->
<!--                        <li><a href="#">English</a>-->
<!---->
<!--                        </li>-->
<!--                        <li><a href="#">USD</a>-->
<!--                            <ul class="curr-lan-sub-menu">-->
<!--                                <li><a href="#">RS</a></li>-->
<!--                                <li><a href="#">GBP</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
                <!-- Header Language & Currency End -->

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo justify-content-center">
                        <a href="indx.html"><img src="assets/images/logo/logo300.png" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col">
                    <div class="header-tools justify-content-end">
<!--                        <div class="header-login">-->
<!--                            <a href="my-account.html"><i class="fal fa-user"></i></a>-->
<!--                        </div>-->
                        <div class="header-search">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
<!--                        <div class="header-wishlist">-->
<!--                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>-->
<!--                        </div>-->
<!--                        <div class="header-cart">-->
<!--                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>-->
<!--                        </div>-->
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

        <!-- Site Menu Section Start -->
        <div class="site-menu-section section">
            <div class="container">
                <nav class="site-main-menu justify-content-center">
                    <ul>
                        <li><a href="index.php"><span class="menu-text">Home</span></a></li>
                        <li><a href="about-us.php"><span class="menu-text">About us</span></a></li>

                        <li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu mega-menu">

                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">CATEGORIES</span></a>
                                    <ul>
                                        <?php
                                        foreach ($allcats as $value) {
                                           
                                        if($value['parent_id']==0){
                                            ?>

                                            <li id="liBtn"> <a  href="subCategories.php?id=<?php echo $value['id']; ?>">
                                            <span value="<?php echo $value['id']; ?>" class="menu-text"><?php echo $value['category_name']; ?></span></a></li>

                                        <?php } 
                                       ?> 
                                        <?php } ?>
                                    </ul>
                                </li>

                                <li class="align-self-center">
                                    <h1 id="categoryName"></h1>
                                    <a href="" id="hoveredcategory" tag="" class="menu-banner">
                                        <img src="" alt="Shop Menu Banner" ></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="testimonial1.php"><span class="menu-text">Testimonials</span></a></li>
                        <li><a href="faqs1.php"><span class="menu-text">FAQ's</span></a></li>
                        <li><a href="contact1.php"><span class="menu-text">Contact us</span></a></li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- Site Menu Section End -->

    </div>
    <!-- Header Section End -->

    <!-- Header Sticky Section Start -->
    <div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="indx.html"><img src="assets/images/logo/logo300.png" alt="Stella Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col d-none d-xl-block">
                    <nav class="site-main-menu justify-content-center">
                        <ul>
                            <li><a href="#"><span class="menu-text">Home</span></a></li>
                            <li><a href="about.php"><span class="menu-text">ABOUT US</span></a></li>
                            <li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>

                            <ul class="sub-menu mega-menu">

<li>
    <a href="#" class="mega-menu-title"><span class="menu-text">CATEGORIES</span></a>
    <ul>
        <?php
        foreach ($allcats as $value) {
           
        if($value['parent_id']==0){
            ?>

            <li id="liBtn"> <a  href="subCategories.php?id=<?php echo $value['id']; ?>">
            <span value="<?php echo $value['id']; ?>" class="menu-text"><?php echo $value['category_name']; ?></span></a></li>

        <?php } 
       ?> 
        <?php } ?>
    </ul>
</li>

<li class="align-self-center">
    <h1 id="categoryName"></h1>
    <a href="" id="hoveredcategory" tag="" class="menu-banner">
        <img src="" alt="Shop Menu Banner" ></a>
</li>
</ul>
                            </li>
                            <li><a href="contact-us.html"><span class="menu-text">TESTIMONIALS</span></a></li>


                            <li><a href="contact-us.html"><span class="menu-text">CONTACT US</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
<!--                        <div class="header-login">-->
<!--                            <a href="my-account.html"><i class="fal fa-user"></i></a>-->
<!--                        </div>-->
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
<!--                        <div class="header-wishlist">-->
<!--                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>-->
<!--                        </div>-->
<!--                        <div class="header-cart">-->
<!--                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>-->
<!--                        </div>-->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Sticky Section End -->
    
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="indx.html"><img src="assets/images/logo/logo300.png" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="indx.html"><img src="assets/images/logo/logo300.png" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <?php
                                while($rows=mysqli_fetch_array($categories)){
                                    ?>

                                    <option value="<?php echo $allcats['category_name']; ?>" href="category.php?id=<?php echo $rows['id']; ?>"><?php echo $allcats['category_name']; ?></option>

                                <?php } ?>

                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <!-- <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary">view wishlist</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="shopping-cart.html" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fal fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
            <ul>
                        <li><a href="index.php"><span class="menu-text">Home</span></a></li>
                        <li><a href="about-us.php"><span class="menu-text">About us</span></a></li>

                        <li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu mega-menu">

                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">CATEGORIES</span></a>
                                    <ul>
                                        <?php
                                        foreach ($allcats as $value) {
                                           
                                        if($value['parent_id']==0){
                                            ?>

                                            <li id="liBtn"> <a  href="subCategories.php?id=<?php echo $value['id']; ?>">
                                            <span value="<?php echo $value['id']; ?>" class="menu-text"><?php echo $value['category_name']; ?></span></a></li>

                                        <?php } 
                                       ?> 
                                        <?php } ?>
                                    </ul>
                                </li>

                                <!-- <li class="align-self-center">
                                    <h1 id="categoryName"></h1>
                                    <a href="" id="hoveredcategory" tag="" class="menu-banner">
                                        <img src="" alt="Shop Menu Banner" ></a>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="testimonial1.php"><span class="menu-text">Testimonials</span></a></li>
                        <li><a href="faqs1.php"><span class="menu-text">FAQ's</span></a></li>
                        <li><a href="contact1.php"><span class="menu-text">Contact us</span></a></li>


                    </ul>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
defaultImagePath= 'http://img.thrfun.com/img/079/697/fleece_blankets_l1.jpg';
$( document ).ready(function() {
    $('#hoveredcategory img').attr('src',defaultImagePath)
}); 
var categories = JSON.parse('<?= json_encode($allcats); ?>');
//console.log(categories);
$('#liBtn a span').mouseover(function() {
var parentCatId = this.getAttribute("value")
//alert("hi"+ parentCatId);   
getImageOnhover(parentCatId );

});
function getImageOnhover(id){
//console.log(id)
var selectedCategory=getCategoryById(id)
var imagepath= selectedCategory.image;
var categoryName=selectedCategory.category_name;
//console.log(categoryName)

document.getElementById("categoryName").innerHTML = categoryName;
if(imagepath==null || imagepath==" "){
    $('#hoveredcategory img').attr('src',defaultImagePath)
}
else{
    $('#hoveredcategory img').attr('src','images/categories/'+imagepath)
     console.log(imagepath)
}
$('#hoveredcategory').attr('href','subCategories.php?id='+ id)
}

function getCategoryById(id)
{ 
     // console.log(categories[0].id); 
    var selectedCategory={}
    for(i=0;i<categories.length;i++){  
        if(id===categories[i].id){
          selectedCategory= categories[i]
        }
        }
       // console.log(selectedCategory)
        return selectedCategory
}

</script>
