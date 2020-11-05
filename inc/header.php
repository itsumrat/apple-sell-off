<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Apple Sell Off</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
</head>
<body>



        <header id="header" class="nonindex-header">
    		    <div class="header-content clearfix">
    		    	<a class="logo" href="index.html">
    		    		<div class="sml-logo"></div>
    		    		<!-- <img src="img/logo-white.png"> -->
    		    	</a>
    				<div class="menu-cart-wrapper">
    					<div class="menuId"> <i class="fa fa-bars"></i> Menu</div>
    					<i style="font-size: 40px;" class="fa fa-shopping-cart"></i>
    				</div>
    <!--				<a href="#" class="nav-toggle"><span></span>Menu</a>-->
    		      	<nav class="navigation" role="navigation">
    					<div class="closeIcon"><i class="far fa-times-circle"></i></div>
    			        <ul id="primary-nav" class="primary-nav">
    <!--			          <li><a href="#"><div class="sml-logo"></div></a></li>-->
    			          <li><a href="#">Home</a></li>
    			          <li><a href="store.php">Apple</a></li>
    			          <li><a href="store.php">audio</a></li>
    			          <li><a href="support.php">support</a></li>
    			          <li><a href="login.php">Sign In</a></li>
    			          <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
    			        </ul>
    		      	</nav>
    		  	</div>
    		</header>

    		<div id="exNavigator" class="exNavigator">
                <i class="fas fa-3x fa-bars fa-rotate-90"></i>
            </div>

            <div class="storeSidebar">
                <div class="sidebar-content-wrapper">
                     <div class="sidebarClose">
                        <i class="far fa-3x fa-times-circle"></i>
                     </div>

                    <div class="col-lg-6">
                        <h5 style="margin: 15rem 0 3rem 0;font-weight: 900">Products</h5>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-control product-filtering" style="margin: 15rem 0 3rem 0;">
                            <option value="best-selling">Best Selling</option>
                            <option value="featured">Featured</option>
                            <option value="price-ascending">Price: Low to High</option>
                            <option value="price-descending">Price: High to Low</option>
                            <option value="title-ascending">Alphabetically: A-Z</option>
                            <option value="title-descending">Alphabetically: Z-A</option>
                            <option value="created-descending">Date: New to Old</option>
                            <option value="created-ascending">Date: Old to New</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <div class="refineby">
                            <span style="font-size: 14px;">Refine By</span>
                            <a href="#">Clear All</a><br><br>
                            <span style="font-size: 15px;">STATUS: <b>In Stock</b></span>
                           <a href="#"><img class="mb-2" src="img/close.png"></a><br>
                            <hr>
                        </div>
                        <div class="stock-filter">
                            <h5>stock status</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    In Stock
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Coming Soon
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="condition-filter">
                            <h5>Condition</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    New
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Approved Used
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="category-filter">
                            <h5>categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Laptop
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    iMacs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Monitors
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="size-filter">
                            <h5>size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    27 inch
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    21.5 inch
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    11 inch
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="year-filter">
                            <h5>year</h5>
                            <button type="submit">2021</button>
                            <button type="submit">2013</button>
                            <button type="submit">2017</button>
                            <button type="submit">2018</button>
                            <hr>
                        </div>
                        <div class="price-filter">
                            <h5>Price ($)</h5>
                            <ul>
                                <li>
                                  <div class="form-group clearfix">
                                     <div id="slider-container"></div>
                                  </div>
                                </li>
                                <li class="clearfix">
                                  <div class="form-group clearfix">
                                    <div class="amount-box">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="amount-from" onkeypress="return isNumberKey(event)" value="200">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="tel" id="amount-to" onkeypress="return isNumberKey(event)" value="33000">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="processor-filter">
                            <h5>processor type</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel Pentimum III
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel Pentium III44
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="harddrive-filter">
                            <h5>ram</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    3TB SSD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    1TB FUSION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    2TB HDD
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="harddrive-filter">
                            <h5>hard drive</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    3TB SSD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    1TB FUSION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    2TB HDD
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="graphicscard-filter">
                            <h5>Graphics Card</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel HD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                     Nvidia Psycx 2200
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                     AMD Radeon RX 57
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="color-filter">
                            <h5>color</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    White
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Pink
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Black
                                </label>
                            </div>
                        </div>   <a href="#"><img class="mb-2" src="img/close.png"></a><br>
                            <span style="font-size: 15px;">STATUS: <b>Coming Soon</b></span>
                            <a href="#"><img class="mb-2" src="img/close.png"></a><br>
                            <hr>
                        </div>
                        <div class="stock-filter">
                            <h5>stock status</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    In Stock
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Coming Soon
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="condition-filter">
                            <h5>Condition</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    New
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Approved Used
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="category-filter">
                            <h5>categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Laptop
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    iMacs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Monitors
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="size-filter">
                            <h5>size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    27 inch
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    21.5 inch
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    11 inch
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="year-filter">
                            <h5>year</h5>
                            <button type="submit">2021</button>
                            <button type="submit">2013</button>
                            <button type="submit">2017</button>
                            <button type="submit">2018</button>
                            <hr>
                        </div>
                        <div class="price-filter">
                            <h5>Price ($)</h5>
                            <ul>
                                <li>
                                  <div class="form-group clearfix">
                                     <div id="slider-container"></div>
                                  </div>
                                </li>
                                <li class="clearfix">
                                  <div class="form-group clearfix">
                                    <div class="amount-box">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="amount-from" onkeypress="return isNumberKey(event)" value="200">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="tel" id="amount-to" onkeypress="return isNumberKey(event)" value="33000">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="processor-filter">
                            <h5>processor type</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel Pentimum III
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel Pentium III44
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="harddrive-filter">
                            <h5>ram</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    3TB SSD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    1TB FUSION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    2TB HDD
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="harddrive-filter">
                            <h5>hard drive</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    3TB SSD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    1TB FUSION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    2TB HDD
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="graphicscard-filter">
                            <h5>Graphics Card</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Intel HD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                     Nvidia Psycx 2200
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                     AMD Radeon RX 57
                                </label>
                            </div>
                            <hr>
                        </div>
                        <div class="color-filter">
                            <h5>color</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    White
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Pink
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Black
                                </label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

<!--
    <header class="nonindex-header">
        <div class="header-content clearfix">
            <a class="logo" href="index.html">
                <img src="img/logo-black.png">
            </a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="store.php">Apple</a></li>
                  <li><a href="store.php">audio</a></li>
                  <li><a href="support.php">support</a></li>
                  <li><a href="login.php">Sign In</a></li>
                  <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a>
        </div>
    </header>

-->




