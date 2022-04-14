<!DOCTYPE html>
<html lang="en">
<header>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      .side-navbar {
        width: fit-content;
        height: 100%;
        position: fixed;
        margin-left: -300px;
        background-color: orangered;
        transition: 0.5s;
      }
      .side-navbar li{
      }
      .nav-link:active,
      .nav-link:focus,
      .nav-link:hover {
        background-color: #ffffff3d;
        color: black;
      }
      .side-navbar a{
        color: #fff;
      }
      .my-container {
        transition: 0.4s;
      }
      .active-nav {
        margin-left: 0;
      }
      /* for main section */
      .active-cont {
        margin-left: 180px;
      }
      #menu-btn {
        background-color: #100901;
        color: #fff;
        /* margin-left: -62px; */
      }
      iframe{
        height: 900px;
        width: 100%;
      }
      @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) {
        iframe{
          height: 90vh;
        }
        .active-cont{
          margin-left: 150px;
        }
      }
      @media(max-width:420px) {
        .side-navbar{
          width: 80px;
        }
        .active-cont{
          margin-left: 80px;
        }
        i{
          font-size: small;
          font-weight: bold;
        }
      }
    </style>
</header>
<body>
  <script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
      sidebar.classList.toggle("active-nav");
      container.classList.toggle("active-cont");
    });
  </script>
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100 text">
      
      <a href="" target="" class="nav-link h3 text-white my-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
							<i class="fa-solid fa-user" style="">  A B</i>
      </a>
      <li href="#" class="">
        <a class="nav-link" href="" target="iframe_a">Home</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="product.html" target="iframe_a">Products</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="" target="iframe_a"> My Account</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="cart.html" target="iframe_a">Cart</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="" target="iframe_a">Orders</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="" target="iframe_a">Need a Help?</a>
      </li>
      <li href="#" class="">
        <a class="nav-link" href="" target="iframe_a"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out</a>
      </li>
      <li></li>
    </ul>
  </div>
  <div class="p-1 my-container active-cont" id="main-content">
    <iframe src="" name="iframe_a" height="" width=""></iframe>
  </div>
</body>
</html>