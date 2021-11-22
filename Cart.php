<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cart</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.0, nicepage.com">
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
    <meta name="twitter:title" content="Cart">
    <meta name="twitter:description" content="DES322">
    <meta property="og:title" content="Cart">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap"><header class=" u-clearfix u-header u-section-row-container" id="sec-2fc6"><div class="u-section-rows" style="">
        <div class="u-align-left u-clearfix u-section-row u-white u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a9de">
          
        <?php 
				if(isset($_POST['submit'])) {
					// $groupcode = $_POST['groupcode'];
					// $groupname = $_POST['groupname'];
					// $remark = $_POST['remark'];
					// $url = $_POST['url'];

					$q="INSERT INTO cart_item (item_id,quantity) VALUES (1,1);";
					$result=$mysqli->query($q);
          echo $q;
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
          elseif($result) {
            echo "INSERT success. Error: ".$mysqli->error ;
            return true;
        
        }
				}
			?>
          
          
          
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
        <!-- <div class="u-section-row u-sticky u-sticky-2984 u-section-row-2" id="sec-efd5">
          
          
          
          
          
          <div class="u-border-2 u-border-grey-75 u-container-style u-group u-shape-rectangle u-white u-group-1" data-href="Cart.html" data-page-id="288608629">
            <div class="u-container-layout">
              <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-2" src="images/shopping-cart.png" alt="" data-image-width="512" data-image-height="512">
              <h6 class="u-text u-text-2">&nbsp; &nbsp;1 item in cart</h6>
            </div>
          </div>
        </div> -->
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-8b45">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-image u-image-1" data-image-width="155" data-image-height="205">
          <div class="u-container-layout"></div>
        </div>
        <div class="u-container-style u-group u-white u-group-2">
          <div class="u-container-layout">
            <h3 class="u-align-left u-text u-text-default u-text-1">Sook Toy</h3>
          </div>
        </div>
        <div class="u-container-style u-group u-white u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-1">
              <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1565"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-1565" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
            </div>
            <div class="u-border-3 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
            <div class="u-grey-25 u-shape u-shape-circle u-shape-2"></div>
            <div class="u-grey-25 u-shape u-shape-circle u-shape-3"></div>
            <div class="u-grey-25 u-shape u-shape-circle u-shape-4"></div>
            <p class="u-text u-text-custom-color-3 u-text-default u-text-2">Cart</p>
            <p class="u-text u-text-default u-text-grey-25 u-text-3">Ddelivery Address</p>
            <p class="u-text u-text-default u-text-grey-25 u-text-4">Check the Order</p>
            <p class="u-text u-text-default u-text-grey-25 u-text-5">Ordered(Wait for receipt)</p>
          </div>
        </div>
        <div class="u-container-style u-group u-white u-group-4">
          <div class="u-container-layout u-valign-middle">
            <h3 class="u-align-left u-text u-text-default u-text-6">Items in cart</h3>
          </div>
        </div>
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="6.7%">
              <col width="19.8%">
              <col width="23.7%">
              <col width="15.9%">
              <col width="17.3%">
              <col width="16.6%">
            </colgroup>
            <tbody class="u-table-body">
              <tr style="height: 75px;">
                <!-- <td class="u-border-1 u-border-grey-dark-1 u-table-cell"></td> -->
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Picture</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Product name</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Price / item</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Quantity</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Total price</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Edit</td>
              </tr>

              <?php 
				if(isset($_POST['Add to cart'])) {
					// $groupcode = $_POST['groupcode'];
					// $groupname = $_POST['groupname'];
					// $remark = $_POST['remark'];
					// $url = $_POST['url'];

					$q="INSERT INTO cart_item VALUES (1,1);";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
				}
			?>

              <?php 
					$q="select * from cart_item,figure_detail where cart_item.item_id=figure_detail.figure_id";
          $totalprice="select sum(figure_price) from cart_item,figure_detail where cart_item.item_id=figure_detail.figure_id";
					$result=$mysqli->query($q);
          $result2=$mysqli->query($totalprice);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
					while($row=$result->fetch_array()){ ?>
              
              <tr style="height: 221px;">
                <!-- <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><input type="checkbox" id="html" name="item_check" value="HTML"></td> -->
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><img class="u-image-3" src="images/<?=$row['picture']?>" data-image-width="1000" data-image-height="1500"></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> <?=$row['figure_name']?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$row['figure_price']?> THB</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$row['quantity']?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$row['figure_price']?> THB</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><a href='delinfo.php?itemid=<?=$row['item_id']?>'><img src="images/Delete.png" width="24" height="24"></a></td>
              </tr>
              <!-- <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="1" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div> -->
              <?php } ?>
              <?php
              // $price = $_POST['price'];
              // $quantity = $_POST['quantity'];
              // $discount = $_POST['discount'];
              // $tax = $_POST['tax'];
              // $shipping = $_POST['shipping'];
              // $payments = $_POST['payments'];

              ?>

              <?php 
              $totalprice="select sum(quantity) as quantity,sum(figure_price) as price from cart_item,figure_detail where cart_item.item_id=figure_detail.figure_id";
              $result2=$mysqli->query($totalprice);
              if(!$result){
                echo "Select failed. Error: ".$mysqli->error ;
                return false;
              }
              $row2=$result2->fetch_array()
              ?>

              <tr style="height: 31px;">
                <!-- <td class="u-border-1 u-border-grey-dark-1 u-table-cell"></td> -->
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Product summary</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$row2['quantity']?> item</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Total</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$row2['price']?>THB </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- <img class="u-image u-image-default u-image-2" src="images/1.jpg" alt="" data-image-width="1000" data-image-height="1500"> -->
        <div class="u-shape u-shape-svg u-text-black u-shape-5">
          <!-- <input type="checkbox" id="html" name="fav_language" value="HTML"> -->
          <!-- <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-81c1"></use></svg> -->
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-81c1" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <h3 class="u-text u-text-7"> Choose a shipping method</h3>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <p class="u-align-center u-text u-text-8">-</p>
                <p class="u-align-left u-text u-text-9"> shipping cost</p>
                <div class="u-shape u-shape-svg u-text-black u-shape-6">
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <!-- <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-679e"></use></svg> -->
                  <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-679e" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
                </div>
                <p class="u-text u-text-10">
                  <span style="font-weight: 700;">Pre-Order with full payment [Get the right to send free EMS] for Pre-Order only</span>
                  <br>
                  <span class="u-text-custom-color-4">For pre-order only Items will arrive in the store approximately 2-3 weeks after being sold in Japan. Free EMS shipping, no shipping cost.</span>
                  <br>Delivery time : for pre-order only Items will arrive in the store approximately 2-3 weeks after being sold in Japan. Free EMS shipping, no shipping cost.
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <p class="u-align-center u-text u-text-11">-</p>
                <p class="u-align-left u-text u-text-12"> shipping cost</p>
                <div class="u-shape u-shape-svg u-text-black u-shape-7">
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <!-- <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-679e"></use></svg> -->
                  <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-679e" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
                </div>
                <p class="u-text u-text-13">
                  <span style="font-weight: 700;">Pre-Order Deposit [EMS Shipping] for Pre-Order only</span>
                  <br>
                  <span class="u-text-custom-color-4">For pre-order only Items will arrive in the store approximately 2-3 weeks after being sold in Japan. Shipping fee is 100-150 baht per time, depending on the size and weight of the product. The store will send an email to collect the remaining balance + shipping again when the product arrives.</span>
                  <br>Delivery time : The system will inform the full amount, but only the deposit can be transferred. For pre-order only Items will arrive in the store approximately 2-3 weeks after being sold in Japan. Shipping fee is 100-150 baht per time, depending on the size and weight of the product. The store will send an email to collect the remaining balance + shipping again when the product arrives.
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <p class="u-align-center u-text u-text-14">150 THB</p>
                <p class="u-align-left u-text u-text-15"> shipping cost</p>
                <div class="u-shape u-shape-svg u-text-black u-shape-8">
                  <input type="radio" id="html" name="fav_language" value=150>
                  <!-- <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-679e"></use></svg> -->
                  <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-679e" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
                </div>
                <p class="u-text u-text-16">
                  <span style="font-weight: 700;"> In-Stock products ready for shipping [EMS shipping] (for products in the category In-stock ready to ship only)</span>
                  <br>Shipping Methods : Thai post<br>Delivery time : (For products in the category In-stock ready to ship only delivered within the next day)
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-group u-white u-group-5">
          <div class="u-container-layout u-container-layout-8">
            <h4 class="u-align-center u-text u-text-default u-text-17">Total Price</h4>
            <h4 class="u-align-center u-text u-text-18"><?=$row2['price']?> THB</h4>
            
            
          </div>
        </div>
        <a href="https://nicepage.com/c/counter-html-templates" class="u-active-grey-80 u-border-none u-btn u-button-style u-grey-60 u-btn-1"> Place an order</a>
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
      <script>
        const HelloVueApp = {
            data() {
                return {
                    todoItem: [{
                        id: 1,
                        item: "Buy milk",
                        complete: false  //todo flat
                    }, {
                        id: 2,
                        item: "Clean room",
                        complete: true
                    }, {
                        id: 3,
                        item: "Do homework",
                        complete: false
                    }, ]
                }
            },
            methods: {
                toggle: function(id) {
                    for (var i = 0; i < this.todoItem.length; i++) {
                        if (this.todoItem[i].id == id)
                            this.todoItem[i].complete = !this.todoItem[i].complete
                    }
                }
            },
            computed: {
                completeCount: function() {
                    count = 0
                    for (var i = 0; i < this.todoItem.length; i++) {
                        if (this.todoItem[i].complete) count++
                    }
                    return count
                }
            }

        }

        const app = Vue.createApp(HelloVueApp)

        // Define a new global component called todo
        app.component('todo', {
            data() {
                return {}
            },
            props: ["todo"],
            template: "#todo-template",
            emits: ["task-toggle"],
            methods: {
                clicked: function() {
                    this.$emit("task-toggle", this.todo.id)
                }
            }
        })
        app.mount('#hello-vue')
    </script>
    <!-- <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Offline Website Builder</span>
      </a>. 
    </section> -->
  </body>
</html>