<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<?php 
    if(isset($_POST['submit'])) {
    $q1 = "SELECT item_id from cart_item where item_id=1;";
    $result1=$mysqli->query($q1);
    if(!$result1){
    echo "INSERT failed. Error: ".$mysqli->error ;
    return false;
    }
    else{
    if(!$q1){
    $q4="INSERT INTO cart_item value(1,1); ";
    $result4=$mysqli->query($q4);
    }
    else{

    $q2="SELECT quantity from cart_id where item_i=1;";
    $result2=$mysqli->query($q2);
    // $q2=$q2+1;
    $q3="UPDATE cart_item set quantity=$q2; ";
    $result3=$mysqli->query($q3);
    }
    }
    }
?>
<?php 
  if(isset($_POST['submit'])) {
    // $item_id=$_POST['item_id'];
    $check="SELECT item_id from cart_itemwhere item_id=1";
    $result1=$mysqli->query($check);
    if(is_null($result1)){
      $q="INSERT INTO cart_item (item_id,quantity) VALUES (1,1);";
      $result=$mysqli->query($q);
      echo "success";
      if(!$result){
        echo "INSERT failed. Error: ".$mysqli->error ;
        return false;
      }
      else{
        echo "success insert";
      }
    }
    else{
      $q="UPDATE cart_item set quantity=2 where item_id=1";
      $result=$mysqli->query($q);
    }
    
  }
?>

<?php 
				if(isset($_POST['submit'])) {
					// $groupcode = $_POST['groupcode'];
					// $groupname = $_POST['groupname'];
					// $remark = $_POST['remark'];
					// $url = $_POST['url'];

					$q="INSERT INTO cart_item (item_id,quantity) VALUES (1,1);";
					$result=$mysqli->query($q);
                    echo "success";
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
                    else{
                        echo "success insert";
                    }
				}
			?>

<?php 
  if(isset($_POST['submit'])) {
    // $item_id=$_POST['item_id'];
    $check="SELECT item_id from cart_item where item_id=1;";
    $result1=$mysqli->query($check);
    if($result1){
      $q="INSERT INTO cart_item (item_id,quantity) VALUES (1,1);";
      $result=$mysqli->query($q);
      echo "success";
      if(!$result){
        echo "INSERT failed. Error: ".$mysqli->error ;
        return false;
      }
      else{
        echo "success insert";
      }
    }
    else{
      $q="UPDATE cart_item set quantity=2 where item_id=1";
      $result=$mysqli->query($q);
    }
    
  }
?>
<!-- <script type="text/javascript">


function ctest(){
$q="INSERT INTO cart_item (item_id,quantity) VALUES (1,1);";
$result=$mysqli->query($q);
}
</script> -->


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="keywords" content="​Demon Slayer: Kimetsu no Yaiba Kyojuro Rengoku 1/8 Complete Figure(Pre-order)">
<meta name="description" content="">
<meta name="page_type" content="np-template-header-footer-from-plugin">
<title>Product detail</title>
<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Product-detail.css" media="screen">
<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 3.28.7, nicepage.com">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "DES322",
    "logo": "images/user1.png",
    "sameAs": [
            "https://facebook.com/name",
            "https://twitter.com/name",
            "https://instagram.com/name"
    ]
}</script>
<meta name="theme-color" content="#478ac9">
<meta name="twitter:site" content="@">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Product detail">
<meta name="twitter:description" content="DES322">
<meta property="og:title" content="Product detail">
<meta property="og:description" content="">
<meta property="og:type" content="website">
</head>
<body class="u-body u-overlap"><header class=" u-clearfix u-header u-section-row-container" id="sec-2fc6"><div class="u-section-rows" style="">
    <div class="u-align-left u-clearfix u-section-row u-white u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a9de">
        
        
        
        
        
        <style class="u-sticky-style" data-style-id="b555">.u-sticky-fixed.u-sticky-b555:before, .u-body.u-sticky-fixed .u-sticky-b555:before {
borders: top right bottom left !important
}</style>
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-color u-custom-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
            </div>
            <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base" style="padding: 10px 20px;">How to order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base" style="padding: 10px 20px;">Inform payment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-body-color u-text-hover-palette-2-base" style="padding: 10px 20px;">Contact</a>
</li></ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">How to order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Inform payment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Contact</a>
</li></ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <form action="#" method="get" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
            <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-dff7"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-dff7" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
            </button>
            <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
        <a href="https://nicepage.com/html-website-builder" class="u-image u-logo u-image-1" data-image-width="512" data-image-height="512">
            <img src="images/user1.png" class="u-logo-image u-logo-image-1">
        </a>
        <h5 class="u-text u-text-default u-text-1">Hello Mr.Max</h5>
        <a href="https://nicepage.com/css-templates" class="u-active-none u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1">Log out</a>
        </div>
    </div>
    <div class="u-section-row u-sticky u-sticky-2984 u-section-row-2" id="sec-efd5">
        
        
        
        
        
        <div class="u-border-2 u-border-grey-75 u-container-style u-group u-shape-rectangle u-white u-group-1" data-href="Cart.php" data-page-id="288608629">
        <div class="u-container-layout">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-2" src="images/shopping-cart.png" alt="" data-image-width="512" data-image-height="512">
            <h6 class="u-text u-text-2">&nbsp; &nbsp;item in cart</h6>
        </div>
        </div>
    </div>
    </div></header>
<section class="u-clearfix u-section-1" id="sec-09a4">
    <div class="u-clearfix u-sheet u-sheet-1">
    <h1 class="u-text u-text-grey-75 u-text-1"> Demon Slayer: Kimetsu no Yaiba Kyojuro Rengoku 1/8 Complete Figure(Pre-order)</h1>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
        <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-carousel u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" id="carousel-e131" data-interval="5000" data-u-ride="carousel">
                <div class="u-carousel-inner u-gallery-inner" role="listbox">
                    <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
                    <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
                        <img class="u-back-image u-expanded" src="images/1.jpg">
                    </div>
                    <div class="u-over-slide u-over-slide-1">
                        <h3 class="u-gallery-heading">Sample Title</h3>
                        <p class="u-gallery-text">Sample Text</p>
                    </div>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-2">
                    <div class="u-back-slide" data-image-width="999" data-image-height="1500">
                        <img class="u-back-image u-expanded" src="images/2.jpg">
                    </div>
                    <div class="u-over-slide u-over-slide-2">
                        <h3 class="u-gallery-heading">Sample Title</h3>
                        <p class="u-gallery-text">Sample Text</p>
                    </div>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
                    <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
                        <img class="u-back-image u-expanded" src="images/3.jpg">
                    </div>
                    <div class="u-over-slide u-over-slide-3">
                        <h3 class="u-gallery-heading">Sample Title</h3>
                        <p class="u-gallery-text">Sample Text</p>
                    </div>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="999" data-image-height="1500">
                    <div class="u-back-slide">
                        <img class="u-back-image u-expanded" src="images/4.jpg">
                    </div>
                    <div class="u-over-slide u-over-slide-4">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                    <style data-mode="XL"></style>
                    <style data-mode="LG"></style>
                    <style data-mode="MD"></style>
                    <style data-mode="SM"></style>
                    <style data-mode="XS"></style>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-5" data-image-width="1136" data-image-height="1500">
                    <div class="u-back-slide">
                        <img class="u-back-image u-expanded" src="images/5.jpg">
                    </div>
                    <div class="u-over-slide u-over-slide-5">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                    <style data-mode="XL"></style>
                    <style data-mode="LG"></style>
                    <style data-mode="MD"></style>
                    <style data-mode="SM"></style>
                    <style data-mode="XS"></style>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-e131" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                    </span>
                    <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-e131" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                    </span>
                    <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                    </span>
                </a>
                <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
                    <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="0">
                    <img class="u-carousel-thumbnail-image u-image" src="images/1.jpg">
                    </li>
                    <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-e131" data-u-slide-to="1">
                    <img class="u-carousel-thumbnail-image u-image" src="images/2.jpg">
                    </li>
                    <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-e131" data-u-slide-to="2">
                    <img class="u-carousel-thumbnail-image u-image" src="images/3.jpg">
                    </li>
                    <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="3">
                    <img class="u-carousel-thumbnail-image u-image" src="images/4.jpg">
                    </li>
                    <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="4">
                    <img class="u-carousel-thumbnail-image u-image" src="images/5.jpg">
                    </li>
                </ol>
                </div>
            </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-container-layout-2">
                <h5 class="u-align-right u-text u-text-2">Catagory</h5>
                <h5 class="u-align-left u-text u-text-3"> Scale Figure</h5>
                <h5 class="u-align-right u-text u-text-4">Price</h5>
                <h5 class="u-align-left u-text u-text-5">5,950 THB</h5>
                <h5 class="u-align-right u-text u-text-6">Product status</h5>
                <h5 class="u-align-left u-text u-text-7">Pre-Order</h5>
                <h5 class="u-align-right u-text u-text-8">From</h5>
                <h5 class="u-align-left u-text u-text-9">Kimetsu no Yaiba</h5>
                <h5 class="u-align-right u-text u-text-10">Quantity</h5>
                <h5 class="u-align-left u-text u-text-11">1</h5>
                <!-- <a name="submit" class="u-active-grey-50 u-border-none u-btn u-button-style u-grey-60 u-btn-1">Add to cart</a> -->
                <!-- <input class="u-active-grey-50 u-border-none u-btn u-button-style u-grey-60 u-btn-1"
                type="submit" name="submit" onclick="ctest()" value="Add to cart"> -->
                <form action="Product-detail.php" method="post"><input class="u-active-grey-50 u-border-none u-btn u-button-style u-grey-60 u-btn-1"
                type="submit" name="submit" value="Add to cart" ></form>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="u-container-style u-grey-5 u-group u-group-1">
        <div class="u-container-layout u-valign-top u-container-layout-3">
        <div class="u-container-style u-expanded-width u-group u-palette-2-base u-group-2">
            <div class="u-container-layout">
            <p class="u-align-center u-text u-text-12">Scale Figure</p>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-1-base u-group-3">
            <div class="u-container-layout u-valign-top">
            <p class="u-align-center u-text u-text-13">Nendoroid</p>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-3-base u-group-4">
            <div class="u-container-layout u-valign-middle">
            <p class="u-align-center u-text u-text-14">Figma</p>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-5-base u-group-5">
            <div class="u-container-layout u-valign-top">
            <h6 class="u-align-center u-text u-text-15">Actionfigure</h6>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-4-light-1 u-group-6">
            <div class="u-container-layout">
            <h6 class="u-align-center u-text u-text-16">Price Firgure</h6>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-1-light-1 u-group-7">
            <div class="u-container-layout u-valign-middle">
            <h6 class="u-align-center u-text u-text-17">Marvel &amp; DC</h6>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-3-light-2 u-group-8">
            <div class="u-container-layout">
            <p class="u-align-center u-large-text u-text u-text-variant u-text-18">In stock</p>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-palette-2-dark-1 u-group-9">
            <div class="u-container-layout">
            <p class="u-align-center u-large-text u-text u-text-variant u-text-19">All product<br>
            </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-2aab">
    <div class="u-clearfix u-sheet u-sheet-1">
    <h4 class="u-align-left u-text u-text-1"> - Pre-order products will take approximately 2-3 weeks to arrive in Thailand after the release date in Japan (the release date is subject to change).<br>- When ordering, wait for the confirmation email from the shop within 24 hours first (not the email sent automatically from lnwshop), then transfer money (must transfer and notify the transfer within 3 days Otherwise the order will expire) - When the product arrives, the store will contact you via email. As the customer has provided information to the shop. (If you do not receive the email Please try checking in Junk)<br>
        <br>Warning: If you order products from the website, when the items arrive, the shop will send an email to inform you. If you are unable to check your email You can order via the shop's Facebook page. or online instead.<br>- Please pay the rest of the product and delivery fee within 30 days after the product arrives at the store. Otherwise, the store will forfeit all deposits - Payment can be made via bank account, credit card and Paypal.<br>
        <br>- The shop will pack the goods in the best way. But we can't guarantee that every box is 100% good. There may be dents from transportation.<br>
        <br>- Products sold are considered final. The shop will not accept return or cancel the product in any case. (If the product has a problem, can consult and will contact the manufacturer for you)- The shop also offers a pick-up service. You can send details of the product name and picture to the email store ameshop.th@gmail.com (if you can find the product. The shop will quote the price back via email again) *** Notification of transfer balance Customers must attach proof of money transfer as well. ***
    </h4>
    <div class="u-container-style u-grey-5 u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
        <div class="u-align-left u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-2">
            <div class="u-container-layout u-container-layout-2">
            <div class="u-align-left u-container-style u-expanded-width u-group u-image u-image-1" data-image-width="750" data-image-height="228">
                <div class="u-container-layout"></div>
            </div>
            </div>
        </div>
        <img class="u-expanded-width u-image u-image-default u-image-2" src="images/Good-Smile-Company.png" alt="" data-image-width="736" data-image-height="285">
        <div class="u-align-left u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-4">
            <div class="u-container-layout u-valign-middle u-container-layout-4">
            <img class="u-expanded-width u-image u-image-default u-image-3" src="images/max-factory.png" alt="" data-image-width="280" data-image-height="108">
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-5">
            <div class="u-container-layout u-container-layout-5">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-4" src="images/Megahouse-logo.png" alt="" data-image-width="220" data-image-height="246">
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-6">
            <div class="u-container-layout u-container-layout-6">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-5" src="images/Orange-Rouge-logo.jpg" alt="" data-image-width="256" data-image-height="256">
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-7">
            <div class="u-container-layout u-valign-middle u-container-layout-7">
            <img class="u-image u-image-default u-image-6" src="images/Aniplex-768x233.png" alt="" data-image-width="768" data-image-height="233">
            </div>
        </div>
        <div class="u-align-left u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-8">
            <div class="u-container-layout u-container-layout-8">
            <img class="u-align-center u-image u-image-default u-image-7" src="images/Alter-logo.png" alt="" data-image-width="765" data-image-height="402">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4aa4"><div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ac34"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ac34"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f9d4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-f9d4"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0a3"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a0a3"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
        </a>
    </div>
    <p class="u-align-center u-small-text u-text u-text-variant u-text-1"> Copyright © 2021&nbsp;<a href="https://www.ame-shop.com/" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-white u-btn-1">www.sook-toy.com</a>&nbsp;All rights reserved.<br>
        <br>
    </p>
    </div></footer>
<!-- <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
    <span>Website Templates</span>
    </a>
    <p class="u-text">
    <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
    <span>Website Builder Software</span>
    </a>. 
</section> -->
</body>
</html>