<!DOCTYPE html>
<html lang="en">
<header>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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
    <nav class="navbar navbar-expand-lg sticky-top navbar-light align-items-center"
        style="background-color: rgba(7, 6, 6, 0.808);">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold" href="home.php"
                style="font-variant: small-caps; font-size: 27px; text-shadow: rgb(94, 49, 255) 1px 1px 1px, goldenrod 2px 2px 2px;">Block
                Bazaar</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" target="_self" href="catalogue.php">Catalogue</a>
                    </li>
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" target="_self" href="cart">Cart</a>
                    </li>
                    <li class="nav-item mb-2 me-md-2" id="navli">
                        <a class="btn" id="navbtn" target="_self" href="wallet.php">Wallet</a>
                    </li>
                    <li class="nav-item dropdown mb-2 me-md-2" id="navli">
                        <a class="dropdown-toggle btn" id="navbtn" data-bs-toggle="dropdown" href="#">User</a>
                        <ul class="dropdown-menu dropdown-menu-end" style="border-radius: 20px">
                            <li><a class="dropdown-item rounded-3" target="_self" href="disputes.php">Disputes</a>
                            </li>
                            <li><a class="dropdown-item rounded-3" target="_self" href="orders.php">Orders</a></li>
                            <li><a class="dropdown-item rounded-3" target="_self" href="ownedAssets.php">Owned
                                    Assets</a></li>
                            <li><a class="dropdown-item rounded-3" target="_self" href="wishlist.php">Wishlist</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item rounded-3" target="_self" href="index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>