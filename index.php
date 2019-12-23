<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>D DEV STORE</title>

    <link rel="stylesheet" href="styles/bootstrap-337.min.css"/>
    <link rel="stylesheet" href="font-awsome\css\font-awesome.min.css"/>
    <link rel="stylesheet" href="styles/style.css"/>

</head>
<body>
    <div id="top">
        <div class="container"><!--Container Begin-->
            <div class="col-md-6 offer"><!--col-md-6 offer Begin-->
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Cart | Total Price Is 300$</a>
            </div><!--col-md-6 offer End-->
            <div class="col-md-6"><!--col-md-6 Begin-->
                <ul class="menu"><!--menu Begin-->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul><!--menu End-->
            </div><!--col-md-6 End-->
        </div><!--Container End-->
    </div>
    <div id="navbar" class="navbar navbar-default"><!--navbar Begin-->
        <div class="container"><!--Container Begin-->
            <div class="navbar-header"><!--Navbar Header Begin-->
                <a href="index.php" class="navbar-brand home"><!--navbar-brand Begin-->
                
                    <img src="images\ecom-store-logo.png" alt="Logo" class="hidden-xs">
                    <img src="images\ecom-store-logo-mobile.png" alt="Logo Mobile" class="visible-xs">
                
                </a><!--navbar-brand End-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                
                </button>

            </div><!--Navbar Header End-->
            <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse Begin-->
                <div class="padding-nav"><!--Padding Nav Begin-->
                    <ul class="nav navbar-nav left"><!--nav navbar-nav left Begin-->
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>     
                    </ul><!--nav navbar-nav left end-->
                </div><!--Padding Nav End-->
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right Begin-->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in your cart</span>
                </a><!--btn navbar-btn btn-primary right End-->

                <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right Begin-->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn Begin-->

                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>

                    </button><!--btn btn-primary navbar-btn End-->
                </div><!--navbar-collapse collapse right End-->

                <div class="collapse clearfix" id="search"><!--collapse clearfix Begin-->
                    <form method="get" action="results.php" class="navbar-form"><!--Navbar-form Begin-->
                        <div class="input-group"><!--input-group Begin-->
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn"><button type="submit" name="search" value="Search" class="btn btn-primary"><!--btn btn-primary Begin-->

                                <i class="fa fa-search"></i>
                            
                            </button></span><!--btn btn-primary End-->
                        </div><!--input-group End-->
                    </form><!--Navbar-form End-->
                </div><!--collapse clearfix End-->

            </div><!--navbar-collapse collapse End-->
        </div><!--Container End-->
    </div><!--navbar End-->
    <div class="container" id="slider"><!--container Begin-->
        <div class="col-md-12"><!--col-md-12 Begin-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide Begin-->
                <ol class="carousel-indicators"><!--carousel indicators Begin-->
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol><!--carousel indicators End-->

                <div class="carousel-inner"><!--carousel-inner Begin-->
                    <div class="item active">
                        <img src="admin_area\slides_images\slide-1.jpg" alt="Slide Image">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-2.jpg" alt="Slide Image">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-3.jpg" alt="Slide Image">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-4.jpg" alt="Slide Image">
                    </div>
                </div><!--carousel-inner End-->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control begin-->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a><!--left carousel-control end-->

                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control begin-->
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a><!--right carousel-control end-->

            </div><!--carousel slide End-->
        </div><!--col-md-12 End-->
    </div><!--container End-->

    <div id="advantages"><!--advantages Begin-->
        <div class="container"><!--container Begin-->
            <div class="same-height-row"><!--same-height-row Begin-->
                <div class="col-sm-4"><!--col-sm-4 begin-->
                    <div class="box same-height"><!--box same-height begin-->
                        <div class="icon"><!--icon begin-->
                            <i class="fa fa-heart"></i>
                        </div><!--icon end-->
                        <h3><a href="#">Best offers</a></h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div><!--box same-height end-->
                </div><!--col-sm-4 end-->

                <div class="col-sm-4"><!--col-sm-4 begin-->
                    <div class="box same-height"><!--box same-height begin-->
                        <div class="icon"><!--icon begin-->
                            <i class="fa fa-tag"></i>
                        </div><!--icon end-->
                        <h3><a href="#">Best prices</a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div><!--box same-height end-->
                </div><!--col-sm-4 end-->

                <div class="col-sm-4"><!--col-sm-4 begin-->
                    <div class="box same-height"><!--box same-height begin-->
                        <div class="icon"><!--icon begin-->
                            <i class="fa fa-thumbs-up"></i>
                        </div><!--icon end-->
                        <h3><a href="#">100% Original</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div><!--box same-height end-->
                </div><!--col-sm-4 end-->
            </div><!--same-height-row end-->
        </div><!--container End-->
    </div><!--advantages End-->

    <div id="hot"><!--hot Begin-->
        <div class="box"><!--box begin-->
            <div class="container"><!--container begin-->
                <div class="col-md-12"><!--col-md-12 begin-->
                    <h2>
                        Our Latest Products
                    </h2>
                </div><!--col-md-12 end-->
            </div><!--container end-->
        </div><!--box end-->
    </div><!--hot end-->

    <div id="content" class="container"><!--container begin-->
        <div class="row"><!--row begin-->
            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-1.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product One</a>
                        </h3>
                        <p class="price">$300</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product Two</a>
                        </h3>
                        <p class="price">$250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-1.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product One</a>
                        </h3>
                        <p class="price">$300</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product Two</a>
                        </h3>
                        <p class="price">$250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product Two</a>
                        </h3>
                        <p class="price">$250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-1.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product One</a>
                        </h3>
                        <p class="price">$300</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product Two</a>
                        </h3>
                        <p class="price">$250</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!--col-sm-4 col-sm-6 single begin-->
                <div class="product"><!--product begin-->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area\product_images\product-image-1.jpg" alt="product image">
                    </a>
                    <div class="text"><!--text begin-->
                        <h3>
                            <a href="details.php">Health Product One</a>
                        </h3>
                        <p class="price">$300</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add To Cart</i>
                            </a>
                        </p>
                    </div><!--text end-->
                </div><!--product end-->
            </div><!--col-sm-4 col-sm-6 single end-->

        </div><!--row end-->
    </div><!--container end-->

    <?php 
        include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>