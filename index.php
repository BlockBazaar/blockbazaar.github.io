<!DOCTYPE html>
<html lang="en">
<header>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #particles-js window {
            display: block;
            position: fixed;
            z-index: -1;
        }

        #particles-js {
            background-image: url("./img/galaxyBackground.jpg");
            background-color: rgba(0, 0, 0, 0.269);
            background-blend-mode: overlay;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        #headings {
            height: max-content;
            text-align: center;
        }

        #navli:hover {
            background-color: whitesmoke;
            border-radius: 20px;
        }

        #navli:hover #navbtn {
            color: black;
        }

        #navbtn {
            color: white;
        }

        #featureCube {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: fit-content;
        }

        .top,
        .bottom,
        .front,
        .back,
        .left,
        .right {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        #bodyText {
            background-color: rgba(0, 0, 0, 0.678);
            margin-top: 20px;
            padding: 10px;
            width: fit-content;
        }

        footer {
            position: absolute;
            width: 100%;
            background-color: rgba(9, 0, 29, 0.959);
            color: rgb(169, 209, 255);
            padding: 20px;
        }
    </style>
</header>

<body>
    <div id="particles-js">
    </div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light" style="background-color: rgba(7, 6, 6, 0.808);">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold" href="index.php" style="font-variant: small-caps; font-size: 27px; text-shadow: rgb(94, 49, 255) 1px 1px 1px, goldenrod 2px 2px 2px;">Block
                Bazaar</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" data-bs-toggle="modal" href="#loginModal">Login</a>
                    </li>
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" target="_self" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" data-bs-toggle="modal" href="#reachUsModal">Reach Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade align-content-center" id="loginModal">
        <div class="modal-dialog modal-dialog-centered justify-content-center">
            <div class="modal-content" style="border-radius: 20px; width: auto;">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="container" id="login">
                            <form action="profile.php">
                                <div class="form-outline mb-3 mt-3">
                                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                                    <label class="form-label" for="email">Email</label>
                                </div>
                                <div class="form-outline mt-3 mb-3">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                    <label class="form-label" for="pwd">Password</label>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <div class="mt-3">
                                        <button type="reset" class="btn btn-primary me-md-2" value="reset">Reset</button>
                                        <button type="button" class="btn btn-primary btn-block mb-4 me-md-2" data-bs-dismiss="modal" value="submit">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade align-content-center" id="reachUsModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content " style="border-radius: 20px;">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Reach Us</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-fluid">
                        </br>
                        <div class="container" id="reachUs">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="fullName" required>
                                <label for="fullName">
                                    <font style="color: red; ">*</font>Full Name
                                </label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                                <label for="email">
                                    <font style="color: red; ">*</font>Email
                                </label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                                <textarea name="userMessage" id="userMsg" class="form-control" cols="20" rows="5" placeholder="Message"></textarea>
                                <label for="userMsg">Message</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer justify-content-center">
                    <div class="mt-3">
                        <button type="reset" class="btn btn-primary me-md-2" value="reset">Reset</button>
                        <button type="submit" class="btn btn-danger btn-primary me-md-2" data-bs-dismiss="modal" value="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-white container-fluid position-relative mt-3" id="headings">
        <h1 style="font-variant: small-caps;">Buy & Sell Freely</h1>
        <p style="font-size: 19px;">A Free Online Marketplace, No Platform Fees, No Middlemen</p>
    </div>
    <div class="position-relative container-fluid" id="featureCube">
        <div class="cubeContainer container-fluid justify-content-center align-content-center">
            <center>
                <link rel="stylesheet" type="text/css" href="style_sheets/cube.css">
                <input type="radio" checked id="rFront" name="select-face" hidden />
                <input type="radio" id="rLeft" name="select-face" hidden />
                <input type="radio" id="rRight" name="select-face" hidden />
                <input type="radio" id="rTop" name="select-face" hidden />
                <input type="radio" id="rBottom" name="select-face" hidden />
                <input type="radio" id="rBack" name="select-face" hidden />
                <script>
                    var cubeFaces = ["rFront", "rLeft", "rRight", "rTop", "rBottom", "rBack"];
                    var index = 0;
                    setInterval(function() {
                        if (index === cubeFaces.length) {
                            index = 0;
                        }
                        document.getElementById(cubeFaces[index]).checked = true;
                        index++;
                    }, 2000);
                </script>
                <div class="wrap container-fluid">
                    <div class="cube container-fluid">
                        <div class="front container-fluid">
                            Buy, sell & Rent in the same platform
                        </div>
                        <div class="back container-fluid">
                            Legally Bound
                        </div>
                        <div class="top container-fluid">
                            Efficent dispute resolution methodologies
                        </div>
                        <div class="bottom container-fluid">
                            Highly secure
                        </div>
                        <div class="left container-fluid">
                            No Platform Fee
                        </div>
                        <div class="right container-fluid">
                            User Privacy
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <div class="text-white container-fluid position-relative justify-content-center text-center fs-5" id="bodyText" hidden>
        Write something here
    </div>
    <footer class="fixed-bottom">
        Hi, I am the Footer.
    </footer>
</body>

</html>