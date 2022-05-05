<!DOCTYPE html>
<html lang="en">
<header>
    <title>Product Listing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style_sheets/home.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .mainDiv {
            display: inline-block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: max-content;
            height: 100%;
            margin: auto;
            border-width: 1px;
            border-radius: 20px;
        }

        .form1 {
            background-color: rgb(54, 54, 54);
            padding: 2vh;
            margin: 20vh;
            border-radius: 5vh;
        }

        .form-control,
        .btn {
            border-radius: 20vh;
        }

        h2 {
            background-color: orangered;
            color: white;
            padding: 1vh;
            border-radius: 20vh;
        }
    </style>
</header>

<body>
    <div class="align-content-center justify-content-center rounded-3 mainDiv">
        <div class="form1 justify-content-center text-light">
            <h2 class="d-flex align-items-center justify-content-center">Product Listing</h2>
            <div class="body">
                <div class="container-fluid">
                    <div class="container" id="listing">
                        <form action="ListingResponse.php" enctype="multipart/form-data" method="post" align="center">
                            <div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
                                <div class="col-sm-auto">
                                    <label class="form-label" for="pdtID">
                                        <font style="color: red;">*</font>Product ID
                                    </label>
                                    <input type="text" class="form-control text-center" id="pdtID" name="pdtID" required>
                                </div>
                            </div>
                            <div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
                                <div class="col-sm-5">
                                    <label class="form-label" for="pdtName">
                                        <font style="color: red;">*</font>Product Name
                                    </label>
                                    <input type="text" class="form-control text-center" id="pdtName" name="pdtName" required>
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label" for="pimg">
                                        <font style="color: red;">*</font>Upload Product Image
                                    </label>
                                    <input type="file" class="form-control" name="pimg" id="pimg">
                                </div>
                            </div>
                            <div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-end">
                                <div class="col-sm-5">
                                    <label class="form-label" for="brand">
                                        <font style="color: red;">*</font>Brand
                                    </label>
                                    <input type="text" class="form-control text-center" id="brand" name="brand" required>
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label" for="colr">
                                        <font style="color: red;">*</font>Colour
                                    </label>
                                    <input type="text" class="form-control text-center" id="colr" name="colr" required>
                                </div>
                            </div>
                            <div class="row gx-3 gy-2 mt-2 mb-2 justify-content-around align-items-center">
                                <div class="col-sm-auto">
                                    <label class="form-label" for="description">
                                        <font style="color: red;">*</font>Description
                                    </label>
                                    <input type="text" class="form-control text-center" id="description" name="description" required>
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="text" pattern="[0-9]+(\.[0-9][0-9]?)?" class="form-control text-center" id="price" name="price">
                                </div>
                            </div>
                            <div class="row gx-3 gy-2 mt-4 mb-2 align-items-center justify-content-around">
                                <div class="col-sm-2">
                                    <button type="reset" class="btn btn-primary me-md-2" value="reset" onclick="captcha()">Reset</button>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-danger btn-primary me-md-2" style="background-color: orangered; color: white;" value="submit">List Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>