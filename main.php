<?php require_once 'includes/main.inc.php'; ?>
<div class="span9">
  <div class="well well-small">
  <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>

  <div class="row-fluid">
  <div id="featured" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
    <ul class="thumbnails">
      <?php while ($row2 = mysqli_fetch_assoc($getfeatpro)) { ?>
        
    <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product.php?id=<?php echo $row2['random']; ?>"><img src="admin/uploads/products/<?php echo $row2['img_1']; ?>" alt="<?php echo $row['pro_name']; ?>"></a>
      <div class="caption">
        <h5><?php echo $row2['pro_name']; ?></h5>
        <h4><span style="color: #ee0000; text-decoration: line-through solid #ff0000;  ">&#8358;<?php echo $row2['pro_price'];?></span> <span class="pull-right">&#8358;<?php echo $row2['pro_disc']; ?></span></h4>
      </div>
      </div>
    </li>
      <?php } ?>
    <!-- <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product_details.html"><img src="themes/images/products/b2.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product_details.html"><img src="themes/images/products/b3.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product_details.html"><img src="themes/images/products/b4.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li> -->
    </ul>
    </div>
     <div class="item">
    <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <i class="tag"></i>
      <a href="product_details.html"><img src="themes/images/products/6.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/7.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/8.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    </ul>
    </div>
     <div class="item">
    <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/9.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    </ul>
    </div>
     <div class="item">
    <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/4.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    <li class="span3">
      <div class="thumbnail">
      <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
      <div class="caption">
        <h5>Product name</h5>
         <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
      </div>
      </div>
    </li>
    </ul>
    </div>
    </div>
    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
    </div>
    </div>
</div>
<h4>Latest Products </h4>
<?php while ($list = mysqli_fetch_assoc($sql)) { ?>

    <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
      <a  href="product.php?id=<?php echo $list['random']; ?>"><img src="admin/uploads/products/<?php echo $list['img_1']; ?>" alt=""/></a>
      <div class="caption">
        <h5><?php echo $list['pro_name']; ?></h5>
        <p>
        <?php echo $list['pro_desc'] ?>
        </p>

        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&#8358;<?php echo $list['pro_price']; ?><a></h4>
      </div>
      </div>
    </li>
  <?php } ?>
    </ul>

</div>
</div>
</div>
</div>
