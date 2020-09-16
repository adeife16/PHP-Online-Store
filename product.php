<?php
      require_once 'includes/product.inc.php';

include 'topnav.php';
include 'sidenav.php';
?>

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="productlist.php">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>
    <?php while ($row = mysqli_fetch_assoc($prodetails)) {
          $cat = $row['cat_id'];
          $pro_id = $row['random'];
    ?>
	<div class="row">
			<div id="gallery" class="span3">
            <a href="admin/uploads/products/<?php echo $row['img_1']; ?>" title="">
				<img src="admin/uploads/products/<?php echo $row['img_1']; ?>" style="width:100%" alt=""/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <?php if (!empty($row['img_2'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_2'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_2']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_3'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_3'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_3']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_4'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_4'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_4']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_5'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_5'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_5']; ?>" alt=""/></a>
                  <?php  } ?>

                  </div>
                  <div class="item">
                    <?php if (!empty($row['img_2'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_2'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_2']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_3'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_3'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_3']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_4'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_4'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_4']; ?>" alt=""/></a>
                  <?php  } ?>
                    <?php if (!empty($row['img_5'])) { ?>
                      <a href="admin/uploads/products/<?php echo $row['img_5'];?>"> <img style="width:29%" src="admin/uploads/products/<?php echo $row['img_5']; ?>" alt=""/></a>
                  <?php  } ?>

                  </div>
                </div>
              <!--
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			  -->
              </div>

			 <!-- <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div> -->
			</div>
			<div class="span6">
				<h3><?php echo $row['pro_name']; ?></h3>
				<!-- <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small> -->
				<hr class="soft">
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>&#8358;<?php echo $row['pro_disc']; ?></span></label>
					<div class="controls">
					<input type="number" class="span2" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>

				<hr class="soft"/>
				<h4><?php echo $row['pro_qty']; ?> items in stock</h4>
				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span2">
						  <option>Black</option>
						  <option>Red</option>
						  <option>Blue</option>
						  <option>Brown</option>
						</select>
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>
			<?php echo $row['pro_desc']; ?>

				</p>
				<!-- <a class="btn btn-small pull-right" href="#detail">More Details</a> -->
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>

			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <!-- <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li> -->
              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <!-- <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Fujifilm</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>
				</tbody>
				</table>

				<h5>Features</h5>
				<p>
				14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br/>
				OND363338
				</p>

				<h4>Editorial Reviews</h4>
				<h5>Manufacturer's Description </h5>
				<p>
				With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.
				</p>

				<h5>Electric powered Fujinon 18x zoom lens</h5>
				<p>
				The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you're at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.
				</p>
				<h5>Impressive panoramas</h5>
				<p>
				With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It's so easy and the results are impressive.
				</p>

				<h5>Sharp, clear shots</h5>
				<p>
				Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm's Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.
				</p>
              </div> -->
<?php }?>
		<!-- <div class="tab-pane fade" id="profile">
		<div id="myTab" class="pull-right">
		 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
		 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
		</div>
		<br class="clr"/>
		<hr class="soft"/>
		<div class="tab-content">
			<d iv class="tab-pane" id="listView">
				<div class="row">
					<div class="span2">
						<img src="themes/images/products/4.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
					<div class="btn-group">
					  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
					  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">
					<div class="span2">
						<img src="themes/images/products/5.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
					</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">
					<div class="span2">
					<img src="themes/images/products/6.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
				<div class="btn-group">
				  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				 </div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">
					<div class="span2">
					<img src="themes/images/products/7.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>

			<hr class="soft"/>
			<div class="row">
					<div class="span2">
					<img src="themes/images/products/8.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
				<div class="row">
					<div class="span2">
					<img src="themes/images/products/9.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
		</div> -->
			<div class="tab-pane active" id="blockView">
				<ul class="thumbnails">
          <?php $prorelate = mysqli_query($con, "SELECT * FROM `products` WHERE `cat_id` = '$cat' AND `random` NOT IN ('$pro_id')");
          while ($row2 = mysqli_fetch_assoc($prorelate)) {
          ?>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product.php?id=<?php echo $row2['random']; ?>"><img src="admin/uploads/products/<?php echo $row2['img_1']; ?>" alt=""/></a>
						<div class="caption">
						  <h5><?php echo $row2['pro_name']; ?></h5>
						  <p>
							<?php echo $row2['pro_desc']; ?>
						  </p>
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&#8358;<?php echo $row2['pro_price'];?></a></h4>
						</div>
					  </div>
					</li>
    <?php } ?>
					<!-- <li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p>
							Lorem Ipsum is simply dummy text.
						  </p>
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/12.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p>
							Lorem Ipsum is simply dummy text.
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/13.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p>
							Lorem Ipsum is simply dummy text.
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p>
							Lorem Ipsum is simply dummy text.
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p>
							Lorem Ipsum is simply dummy text.
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li> -->
				  </ul>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include 'footer.php'; ?>
