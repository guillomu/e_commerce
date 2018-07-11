


<!-- ##### Header Area Start ##### -->
<header class="header_area">
  <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
    <!-- Classy Menu -->
    <nav class="classy-navbar" id="essenceNav">
      <!-- Logo -->
      <a class="nav-brand" href="/sheekstore/e_commerce/"><img src="/sheekstore/e_commerce/img/sheeks.png" alt=""></a>
      <!-- Navbar Toggler -->
      <div class="classy-navbar-toggler">
        <span class="navbarToggler"><span></span><span></span><span></span></span>
      </div>
      <!-- Menu -->
      <div class="classy-menu">
        <!-- close btn -->
        <div class="classycloseIcon">
          <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
        </div>
        <!-- Nav Start -->
        <div class="classynav">
          <ul>
            <li><a href="#">Shop</a>
              <div class="dropdown">
                <ul class="single-mega cn-col-4">
                  <li class="title">Women's Collection</li>
                  <li><a href="shop.html">T-shirts</a></li>
                </ul>
                <ul class="single-mega cn-col-4">
                  <li class="title">Kid's Collection</li>
                  <li><a href="shop.html">T-shirts</a></li>
                </ul>
                <ul class="single-mega cn-col-4">
                  <li class="title">Accessories</li>
                  <li><a href="shop.html">Mouses</a></li>
                  <li><a href="shop.html">Pads</a></li>
                  <li><a href="shop.html">PlayCards</a></li>
                  <li><a href="shop.html">Mugs</a></li>
                  <li><a href="shop.html">Bracelets</a></li>
                </ul>
                <div class="single-mega cn-col-4">
                  <img src="/sheekstore/e_commerce/img/bg-img/bg-6.jpg" alt="">
                </div>
              </div>
            </li>
            <li><a href="blog.html">News</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- Nav End -->
      </div>
    </nav>

    <!-- Header Meta Data -->
    <div class="header-meta d-flex clearfix justify-content-end">

      <?php if(isset($result)){ echo $result; } // Affichage du message de confirmation / erreur ?>

      <!-- Search Area -->
      <div class="search-area">
        <form action="#" method="#">
          <input type="search" name="search" id="headerSearch" placeholder="Type for search">
          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>

      <!-- Modal SignUp Form -->

      <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true" data-backdrop="false">

        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group">
                <form id="newuser" action="/sheekstore/e_commerce/index.php/signup" method="post">


                  <div>Login   :</div><input type="text" name="login" required><br/>

                  <div>Email   :</div><input type="email" name="email" required><br/>

                  <div>Password:</div><input type="password" name="password" required><br/>

                  <div>Confirm Password:</div><input type="password" name="confirm" required><br/>


                  <br><input type="submit" name="signup" value="Valider">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal SignUp Form End -->

      <!-- Modal SignIn Form-->

      <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true" data-backdrop="false">

        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Sign In </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group">
                <form id="userconnection" action="/sheekstore/e_commerce/index.php/signin" method="post">
                  <div>Email  :</div><input type="email" name="email" required><br>
                  <div>Password:</div><input type="password" name="password" required><br>
                  <br><input type="submit" name="signin" value="Se connecter">
                </form>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal SignIn Form End -->

      </div>
      <!-- User Login Info -->

      <div class="user-login-info">
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/sheekstore/e_commerce/img/core-img/user.svg" alt=""></a>
          <div class="dropdown-menu">
            <?php
            if(isset($_SESSION['email'])){
              echo '  <a href="#">'.$_SESSION['login'].'</a>
              <a href="/sheekstore/e_commerce/index.php/logout">LogOut</a>';

              if($_SESSION['admin'] == 'yes'){
                echo '<a href="/sheekstore/e_commerce/index.php/admin">Administration</a>';

              }

            }else{
              echo '<a href="#" data-toggle="modal" data-target="#signin">SignIn</a>
              <a href="#" data-toggle="modal" data-target="#signup">SignUp</a>';
            }
            ?>

          </div>
        </div>

      </div>




      <?php if(isset($_SESSION['email'])){

        echo '
        <!-- Favourite Area -->
        <div class="favourite-area">
        <a href="#"><img src="/sheekstore/e_commerce/img/core-img/heart.svg" alt=""></a>
        </div>

        <!-- Cart Area -->
        <div class="cart-area">
        <a href="#" id="essenceCartBtn"><img src="/sheekstore/e_commerce/img/core-img/bag.svg" alt="">
        <span>';

        if(isset($_SESSION["products"])){
            echo $cartCount;
        }else{
            echo 0;
        }

        echo '</span>
        </a>
        </div> ';
    	} ?>
      </div>

    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Right Side Cart Area ##### -->
  <div class="cart-bg-overlay"></div>

  <div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
      <a href="#" id="rightSideCart"><img src="/sheekstore/e_commerce/img/core-img/bag.svg" alt="">
        <span>
          <?php
          // Affichage du nombre d'article dans le panier
          if(isset($_SESSION["products"])){
            echo $cartCount;
          }else{
            echo 0;
          }
          ?>
        </span></a>
      </div>

      <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <?php
        if(isset($_SESSION["products"]) && count($_SESSION["products"]) != 0){
          echo '<div class="cart-list">';

	        foreach ($_SESSION["products"] as $product){
	          echo '<!-- Single Cart Item -->
	          <div class="single-cart-item">
              <form class="form-product" action="/sheekstore/e_commerce/index.php/cart" method="post">
	            <a href="#" class="product-image">
	              <img src="'.$product['product_img'].'" class="cart-thumb" alt="product image">
	              <!-- Cart Item Desc -->
	              <div class="cart-item-desc">
                  <input name="remove_id" type="hidden" value="'.$product['id'].'">
	                <span class="product-remove"><button type="submit" class="fa fa-close" aria-hidden="true"></button></span>
	                <span class="badge">'.$product['product_category'].'</span>
	                <h6>'.$product['product_name'].'</h6>
                  <h6>Quantité: '.$product['quantity'].'</h6>
	                <p class="price">'.$product['product_price']*$product['quantity'].'€</p>
	              </div>
	            </a>
              </form>
	          </div>';
	      	}
        echo '</div>';

        echo '<!-- Cart Summary -->
        <div class="cart-amount-summary">

          <h2>Summary</h2>
          <ul class="summary-table">
            <li><span>delivery:</span> <span>Free</span></li>
            <li><span>total:</span> <span>'.$_SESSION["total"].'€</span></li>
          </ul>
          <div class="checkout-btn mt-100">
            <a href="/sheekstore/e_commerce/index.php/checkout" class="btn essence-btn">check out</a>
          </div>
          <div class="checkout-btn mt-30">
            <a href="/sheekstore/e_commerce/index.php/cart/emptycart" class="btn essence-btn">empty cart</a>
          </div>
        </div>';

    }
    else{
    	echo '
    	<div class="cart-amount-summary">
    		<h2>Summary</h2>
            <ul class="summary-table">
            <li><span>Le panier est vide</span></li>
          </ul>
          <img src="/sheekstore/e_commerce/img/cart_empty.gif" />
        </div>';
    }
    ?>
      </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->
