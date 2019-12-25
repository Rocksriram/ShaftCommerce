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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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

    <div id="content"><!--content Begin-->
        <div class="container"><!--container Begin-->
            <div class="col-md-12"><!--col-md-12 Begin-->
                <ul class="breadcrumb"><!--breadcrumb begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul><!--breadcrumb end-->
            </div><!--col-md-12 End-->

            <div class="col-md-3"><!--col-md-3 begin-->
                <?php 
                    include("includes/sidebar.php");
                ?>
            </div><!--col-md-3 end-->

            <div class="col-md-9"><!--col-md-9 Begin-->
                <div id="productMain" class="row"><!--#productMain Begin-->
                    <div class="col-sm-6"><!--col-sm-6 Begin-->
                        <div id="mainImage"><!--#mainImage Begin-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--#myCarousel Begin-->
                                <ol class="carousel-indicators"><!--carousel-indicators Begin-->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol><!--carousel-indicators End-->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-image-1.jpg" alt="product image 1"></center>
                                    </div>
                                    <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/product-image-1.jpg" alt="product image 2"></center>
                                    </div>
                                    <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/product-image-1.jpg" alt="product image 1"></center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control Begin-->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a><!--left carousel-control end-->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control begin-->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a><!--right carousel-control end-->

                            </div><!--#myCarousel End-->
                        </div><!--#mainImage End-->
                    </div><!--col-sm-6 End-->

                    <div class="col-sm-6"><!--col-sm-6 begin-->
                        <div class="box"><!--box begin-->
                            <h1 class="text-center">Health Gadget</h1>

                            <form action="details.php" class="form-horizontal" method="post"><!--form-horizontal begin-->
                                <div class="form-group"><!--form-group begin-->
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                    <div class="col-md-7"><!--col-md-7 begin-->
                                        <select name="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div><!--col-md-7 end-->
                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7"><!--col-md-7 begin-->
                                        <select name="product_size" class="form-control">
                                            <option>Select a size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div><!--col-md-7 end-->
                                </div><!--form-group end-->

                                <p class="price">$50</p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button>
                                </p>

                            </form><!--form-horizontal end-->
                            
                        </div><!--box End-->

                        <div class="row" id="thumbs"><!--thumbs begin-->
                        <div class="col-xs-4"><!--col-xs-4 begin-->
                                <a href="#" class="thumb"><!--thumb begin-->
                                    <img src="admin_area/product_images/product-image-1.jpg" alt="product image 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->

                            <div class="col-xs-4"><!--col-xs-4 begin-->
                                <a href="#" class="thumb"><!--thumb begin-->
                                    <img src="admin_area/product_images/product-image-2.jpg" alt="product image 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->

                            <div class="col-xs-4"><!--col-xs-4 begin-->
                                <a href="#" class="thumb"><!--thumb begin-->
                                    <img src="admin_area/product_images/product-image-1.jpg" alt="product image 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->
                        </div><!--tumbs end-->

                    </div><!--col-sm-6 End-->

                </div><!--#productMain End-->

                <div class="box" id="details"><!--box # details begin-->
                    <h4>Product Details </h4>
                    <p><!--P begin-->
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi repellat porro dolorum eaque ipsam ratione, impedit quo ut illum, quas est odio asperiores consequuntur aliquam eius sit hic molestiae optio?    
                    </p><!--p end-->
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                    <hr>
                </div><!--box # details End-->

                <div id="row same-height-row"><!--#row same-height-row begin-->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 begin-->
                        <div class="box same-height headline"><!--box same-height headline begin-->
                            <h3 class="text-center">Products you may like</h3>
                        </div><!--box same-height headline end-->
                    </div><!--col-md-3 col-sm-6 end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php"><!--a begin-->
                                <img class="img-responsive" src="admin_area/product_images/product-image-2.jpg" alt="product 2">
                            </a><!--a end-->

                            <div class="text"><!--text begin-->
                                <h3><a href="details.php">E health product</a></h3>
                                <p class="price">$40</p>
                            </div><!--text end-->

                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php"><!--a begin-->
                                <img class="img-responsive" src="admin_area/product_images/product-image-1.jpg" alt="product 2">
                            </a><!--a end-->

                            <div class="text"><!--text begin-->
                                <h3><a href="details.php">E health product</a></h3>
                                <p class="price">$40</p>
                            </div><!--text end-->

                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php"><!--a begin-->
                                <img class="img-responsive" src="admin_area/product_images/product-image-2.jpg" alt="product 2">
                            </a><!--a end-->

                            <div class="text"><!--text begin-->
                                <h3><a href="details.php">E health product</a></h3>
                                <p class="price">$40</p>
                            </div><!--text end-->

                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                </div><!--#row same-height-row end-->

            </div><!--col-md-9 end-->

        </div><!--container End-->
    </div><!--content End-->

    <?php 
        include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>