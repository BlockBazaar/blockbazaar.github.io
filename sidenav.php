<span onclick="openNav()"><h3><i class="fa-solid fa-bars"></i></h3></span>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="nav flex-column text-white w-100 text">
      
            <a href="" target="" class="nav-link h3 text-white my-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                                  <i class="fa-solid fa-user" style="color:#fd531f;">  A B</i>
            </a>
            <li href="#" class="">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="profile.php">My Acoount</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href="product.php">Products</a>
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
            <li href="#" class="help.php">
              <a class="nav-link" href="">Help</a>
            </li>
            <li href="#" class="">
              <a class="nav-link" href=""><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fd531f;"></i> Sign Out</a>
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