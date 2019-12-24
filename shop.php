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

            <div class="col-md-9"><!--col-md-9 begin-->
                <div class="box"><!--box begin-->
                    <h1>Shop</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit in debitis exercitationem quaerat beatae ipsam modi vero aspernatur dolore recusandae velit, deserunt cupiditate dolores nostrum error voluptas iste dolor dicta.
                    </p>
                </div><!--box end-->

                <div class="row"><!--row begin-->
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->
                    
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
                        <div class="product"><!--product begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->
                    
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->
                    
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
                        <div class="product"><!--product begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->
                    
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->
                    
                    <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 center-responsive begin-->
                        
                        <div class="product"><!--product begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\product-image-2.jpg" alt="product image">
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
                    
                    </div><!--col-md-4 col-sm-6 center-responsive end-->

                </div><!--row end-->

                <center>
                    <ul class="pagination">
                        <li><a href="#">First Page</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Last Page</a></li>
                    </ul>
                </center>

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