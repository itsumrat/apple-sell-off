<?php include 'inc/header.php';?>

	<div class="container">


       <!-- Filter for store contents-->
       <div id="exNavigator" class="exNavigator">
           <i class="toggleIcon fas fa-3x fa-bars fa-rotate-90"></i>
       </div>

                   <div class="storeSidebar">
                       <div class="sidebar-content-wrapper">
                            <div class="sidebarClose">
                               <i class="far fa-3x fa-times-circle"></i>
                            </div>
                           <div class="col-lg-3" style="margin-top: 70px;">
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
       <!-- Store contents-->
		<div class="row" style="margin-left: 0px; margin-right: 0px;">
            <div class="col-lg-6 col-sm-12">
                <h5 class="store-title">Products</h5>
            </div>
            <div class="col-lg-6 col-sm-12">
                <select class="form-control product-filtering">
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
		    <div class="desktop-filter col-lg-3">
			<div class="">
				<div class="refineby">
					<span style="font-size: 14px;">Refine By</span>
					<a href="#">Clear All</a><br><br>
					<span style="font-size: 15px;">STATUS: <b>In Stock</b></span>
					<a href="#"><img class="mb-2" src="img/close.png"></a><br>
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
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-4">
						<div class="product-item">
							<img src="img/macbookpro.png" alt="Avatar" class="image" style="width:100%">
							<div class="overlay">
							    <div class="text">
							    	<a href="#" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Quick View</a>
							    </div>
							</div>
						</div>
						<a href="product-detail.php" class="product-name">Customize your Customize your Apple 11" MacBook Air (Mid 2012)</a>
						<p class="product-price">$200</p>
					</div>
					<div class="col-lg-4">
						<div class="product-item">
							<img src="img/macbookpro.png" alt="Avatar" class="image" style="width:100%">
							<div class="overlay">
							    <div class="text">
							    	<a href="#" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Quick View</a>
							    </div>
							</div>
						</div>
						<a href="product-detail.php" class="product-name">Customize your Customize your Apple 11" MacBook Air (Mid 2012)</a>
						<p class="product-price">$200</p>
					</div>
					<div class="col-lg-4">
						<div class="product-item">
							<img src="img/macbookpro.png" alt="Avatar" class="image" style="width:100%">
							<div class="overlay">
							    <div class="text">
							    	<a href="#" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Quick View</a>
							    </div>
							</div>
						</div>
						<a href="product-detail.php" class="product-name">Customize your Customize your Apple 11" MacBook Air (Mid 2012)</a>
						<p class="product-price">$200</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      	<div class="modal-body" style="padding-bottom: 2rem">
					<div class="container-fluid">
					    <div class="row">
					      	<div class="col-md-4">
					      		<img src="https://firebasestorage.googleapis.com/v0/b/apple-selloff.appspot.com/o/product_files%2FlrYzGAWiyHQcmkdHSXiV.jpeg?alt=media&token=2d21e42c-9fc8-4d9f-ae03-6340c0cb5df6" class="img-fluid">
					      	</div>
					      	<div class="col-md-8">
					      		<h6 style="font-weight: 600">Apple 15" MacBook Air (Mid 2015)</h6>
					      		<span>$300</span><br>
					      		<div class="device-specification">
					      			<div>
					      				<span>Year</span><b>2017</b>
					      			</div>
					      			<div>
					      				<span>Category</span><b>Monitors</b>
					      			</div>
					      			<div>
					      				<span>Charger</span><b>Charger</b>
					      			</div>
					      		</div>
					      		<button type="button" class="btn" style="float: right;background: linear-gradient(rgb(66, 161, 236), rgb(0, 112, 201));border: 0;color: #fff">Buy Now</button>
					      		<button type="button" class="btn" style="float: right;background: linear-gradient(rgb(66, 161, 236), rgb(0, 112, 201));border: 0;margin-right: 1rem;color: #fff">Add to Cart</button>
					      	</div>
					    </div>
					</div>
				</div>
		    </div>
	  	</div>
	</div>

<?php include 'inc/footer.php';?>
