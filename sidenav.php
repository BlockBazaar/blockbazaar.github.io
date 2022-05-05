<style>
  /*title*/
  .section-title {
			text-align: center;
			padding-top: 2vh;
			padding-bottom: 2vh;
			background-color: white;
			width: 100%;
		}

		.section-title h2 {
			font-size: 32px;
			font-weight: bold;
			text-transform: uppercase;
			margin-bottom: 20px;
			padding-bottom: 20px;
			position: relative;
			color: #37517e;
		}

		.section-title h2::before {
			content: "";
			position: absolute;
			display: block;
			width: 120px;
			height: 1px;
			background: #ddd;
			bottom: 1px;
			left: calc(50% - 60px);
		}

		.section-title h2::after {
			content: "";
			position: absolute;
			display: block;
			width: 40px;
			height: 3px;
			background: #fd531f;
			bottom: 0;
			left: calc(50% - 20px);
		}

		.section-title p {
			margin-bottom: 0;
		}


		.fa-user,
		h3 .fa-solid {
			margin: 2vh 3vh 0 2vh;
			font-size: 5vh;
		}
  /* The side navigation menu */
  .sidenav {
			height: 100%;
			/* 100% Full-height */
			width: 0;
			/* 0 width - change this with JavaScript */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Stay on top */
			top: 0;
			left: 0;
			background-color: #111;
			/* Black*/
			overflow-x: hidden;
			/* Disable horizontal scroll */
			padding-top: 60px;
			/* Place content 60px from the top */
			transition: 0.5s;
			/* 0.5 second transition effect to slide in the sidenav */
		}

		/* The navigation menu links */
		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		/* When you mouse over the navigation links, change their color */
		.sidenav a:hover {
			color: #f1f1f1;
		}

		/* Position and style the close button (top right corner) */
		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}
</style>
<span onclick="openNav()"><h3><i class="fa-solid fa-bars"></i></h3></span>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="nav flex-column text-white w-100 text">
      
            <a href="" target="" class="nav-link h3 text-white my-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                                  <i class="fa-solid fa-user" style="color:#fd531f;"></i>
            </a>
            <li href="#" class="">
              <a class="nav-link" href="profile.php">Home</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="catalogue.php"> Catalogue </a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="orders.php">Orders</a>
            </li>
			<li href="#" class="">
              <a class="nav-link" href="ListProduct.php">List Product</a>
            </li>
			<li href="#" class="">
              <a class="nav-link" href="product.php">Products</a>
            </li>
			<li href="#" class="">
              <a class="nav-link" href="ownedAssets.php">Owned Assets</a>
            </li>
			<li href="#" class="">
              <a class="nav-link" href="wallet.php">Wallet</a>
            </li>
			<li href="#" class="">
              <a class="nav-link" href="crypto.php">Crypto Market</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fd531f;"></i> Sign Out</a>
            </li>
            <li></li>
          </ul>
    </div>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
        }
    </script>