<!DOCTYPE html>
<html lang="en">
<header>
	<title>Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<!-- <link href="style_sheets/home.css" rel="stylesheet"> -->
	<style>
        body{
            color: black;
        }

        h1{
            color: rgb(78, 78, 78);
        }

        h2{
            color: #37517e;
        }

        p, h3{
            color: orangered;
            
        }
        a{
            text-decoration: none;
            color: orangered;
            padding: 1px;
            margin-left: 2vh;
        }

        i{
            color: rgb(0, 24, 88);
        }

        i:hover{
            color: rgb(89, 89, 255);
        }

        img{
            background-color: rgb(248, 248, 248);
            border-radius: 20px;
            margin: 4vh 0 4vh 0;
            /* border: 3px solid gray; */
            height: 400px;
            width: 520px;
            opacity: 1;
            transition: .4 ease;
            backface-visibility: hidden;
        }

        h1{
            color: rgb(0, 0, 0);
        }

        .btn{
            border-radius: 20px;
        }

        .container-xl{
            border-radius: 20px;
            background-color: white;
        }

        .col{
            text-align: end;
        }

        img:hover{
            opacity: 0.7;
            box-shadow: 3px 3px 3px 3px gray;
        }


        .section-title {
                text-align: center;
                padding-top: 12vh;
                padding-bottom: 30px;
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

        @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) {
            section{
                /* margin: 5vh 0 5vh 0; */
                width: 68vh;
            }
            .container-xl{
                margin: 1vh;
            }
            img{
                height: 300px;
                width: 300px;
            }
        }

        @media(max-width:420px) {
            img{
                margin: 0 0 1vh 0;
                width: 180px;
                height: 200px;
            }
            button{
                text-align: center;
            }
            .col{
                text-align: center;
            }
            .container-xl{
                width: 40vh;
                margin: 1vh;
                padding: 2vh 0 2vh 0;
                border-radius: 40px;
            }
            section{
                width: 42vh;
            }
        }
    </style>
</header>

<body>
    <section>
        <div class="section-title">
            <h2>Products</h2>
        </div>
    </section>
    <section id="services" class="d-none services">
        <div class="section-title">
            <h2>Our Products and Membership</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="d-lg-flex">
                    <div class="card border-0 me-lg-4 mb-lg-0 mb-4 card-active">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class="" src="https://images.pexels.com/photos/374016/pexels-photo-374016.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Basic Plan</p>
                            <p class="text-muted mt-3">We store the vast majority of the digital assets in secure offline storage.</p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <div class="btn btn-primary">Proceed <span class="fas fa-arrow-right"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class="" src="https://images.pexels.com/photos/1560932/pexels-photo-1560932.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Standard Plan</p>
                            <p class="text-muted mt-3">We have made crypto trade secured and insured to lesser risk with our updated transaction policies.	q</p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <div class="btn btn-primary">Proceed <span class="fas fa-arrow-right"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class="" src="https://images.pexels.com/photos/4491881/pexels-photo-4491881.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">Premium Plan</p>
                            <p class="text-muted mt-3">Keep global enitities of your assets safe from malware, ransomware, phishing, and other Internet risks - no matter where they work from.</p>
                            <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                <div class="btn btn-primary">Proceed <span class="fas fa-arrow-right"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--End of Cards-->
    <section style="background-color: #ddd; padding: 50px 0 50px 0;"> 
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h1> Product 1</h1>
                    <h2>brand-name</h2>
                    <p>intro</p>
                    <img src="img/p1.png" class="col text-center" alt="..." style="">
                </div>
                <div class="col-sm-6 text-center" style="padding: 20px 20px 20px 20px;">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              ABOUT
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body text-start">
                              <strong>Name:</strong><br>
                              <strong>Brand:</strong><br>
                              <strong>Origin:</strong><br>
                              <strong>Type:</strong>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              SPECIFICATIONS AND FEATURES
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              TERMS AND CONDITIONS
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="row" style="padding-top: 10vh;">
                            <div class="col text-start" style="padding-top: 3vh;">
                                <h3>
                                    <a href=""><i class="fa-solid fa-arrow-left"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                                </h3>
                            </div>
                            <div class="col text-center">
                                <p><i class="fa-solid fa-chart-pie"></i>Offers: <a style="color: rgb(11, 138, 11);">20% off</a></p>
                                <p><h3>Price:<a style="color: rgb(0, 50, 83);">4.2 eth</a></h3></p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-8">
                            <h5>Ratings 4.3<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h5>
                        </div>
                        <div class="col-4">
                            <p>Delivery by</p><h6>24th March</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"  style="padding-top: 50px;">
                            <a href=""><i class="fa-brands fa-gratipay"></i> Wishlist</a>
                        </div>
                        <div class="col"  style="padding-top: 50px;">
                            <button type="button" class="btn btn-success">Buy Now</button>
                        </div>
                        <div class="col text-start"  style="padding-top: 50px; ">
                            <button type="button" class="btn btn-warning">Add to Cart</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>
</body>