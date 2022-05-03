<!DOCTYPE html>
<html lang="en">
<header>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<!-- <link href="style_sheets/home.css" rel="stylesheet"> -->
	<style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #ffffff;
    font-family: 'Open Sans', serif;
    font-size: 14px
}

.container-fluid {
    margin-top: 70px
}

h3{
    /* background-color: white; */
}

.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
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

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  }


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

            .fa-user, h3 .fa-solid{
            margin: 2vh 3vh 0 2vh;
            font-size: 5vh;
          }


.img-sm {
    width: 80px;
    height: 80px
}

.img-sm:hover {
    opacity: 0.7;
    background-color: #F44336;
}
.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.table-shopping-cart .price-wrap {
    line-height: 1.2
}

.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block
}

.text-muted {
    color: #969696 !important
}

a {
    text-decoration: none !important
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 20px
}

.card-body {
    -ms-flex: 1 1 auto;
    border-radius: 20px;
    flex: 1 1 auto;
    padding: 1.40rem
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.dlist-align {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

[class*="dlist-"] {
    margin-bottom: 5px
}

.coupon {
    border-radius: 1px
}

.price {
    font-weight: 600;
    color: #212529
}

/* .btn.btn-out {
    outline: 1px solid #fff;
    outline-offset: -5px
} */

.btn-main {
    border-radius: 20px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer;
    color: #fff;
    width: 100%
}

.btn-light {
    border-radius: 20px;
    color: #ffffff;
    background-color: #F44336;
    border-color: #f8f9fa;
    font-size: 12px
}

.btn-light:hover {
    color: #ffffff;
    background-color: #F44336;
    border-color: #F44336
}

.btn-apply {
    /* padding-top: 5px;
    padding-bottom: 5px; */
    margin-left: 20px;
    font-size: 15px;
    border: 1px solid;
    border-radius: 20px;
}
    </style>
</header>
    <body>
        <?php include 'sidenav.php';?>
        <div class="section-title">
            <h2>Your Shopping Cart</h2>
        </div>
        
        <section style="background-color: #ddd;; padding: 4vh;">
        <div class="container-fluid">
            <div class="row">
                <aside class="col-lg-9">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right d-md-block" width="200"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="https://i.imgur.com/1eq5kmC.png" class="img-sm"></div>
                                                <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Tshirt with round nect</a>
                                                    <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td> <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select> </td>
                                        <td>
                                            <div class="price-wrap"> <var class="price">$10.00</var> <small class="text-muted"> $9.20 each </small> </div>
                                        </td>
                                        <td class="text-center d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> <i class="fa-solid fa-x"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="https://i.imgur.com/hqiAldf.jpg" class="img-sm"></div>
                                                <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Flower Formal T-shirt</a>
                                                    <p class="text-muted small">SIZE: L <br> Brand: ADDA </p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td> <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select> </td>
                                        <td>
                                            <div class="price-wrap"> <var class="price">$15</var> <small class="text-muted"> $12 each </small> </div>
                                        </td>
                                        <td class="text-center d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> <i class="fa-solid fa-x"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="https://i.imgur.com/UwvU0cT.jpg" class="img-sm"></div>
                                                <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Printed White Tshirt</a>
                                                    <p class="small text-muted">SIZE:M <br> Brand: Cantabil</p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td> <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select> </td>
                                        <td>
                                            <div class="price-wrap"> <var class="price">$9</var> <small class="text-muted"> $6 each</small> </div>
                                        </td>
                                        <td class="text-center d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> <i class="fa-solid fa-x"></i> </a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group"> <label>Have coupon?</label>
                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-center ml-3">$69.97</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Discount:</dt>
                                <dd class="text-center text-danger ml-3">- $10.00</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-center text-dark b ml-3"><strong>$59.97</strong></dd>
                            </dl>
                            <hr> <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Check Out </a> <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </body>