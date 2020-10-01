<?php
	include 'topnav.php';
	include 'sidenav.php';
	require 'includes/checkout.inc.php';
?>

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART <a href="index.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	<?php
	if (!isset($_SESSION['username'])) { ?>
	<table class="table table-bordered">
		<tr><th> I AM ALREADY REGISTERED  </th></tr>
	<tr> 
		<td>
			<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label" for="inputUsername">Username</label>
				<div class="controls">
					<input type="text" id="inputUsername" placeholder="Username">
				</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password">
				</div>
				</div>
				<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table>		
	<?php }
	?>
			
	<table class="table table-bordered" id="cart-table">
            <thead>
                <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity/Update</th>
				<th>Price</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Total</th>
				</tr>
            </thead>
            <tbody>
				<?php while ($key = mysqli_fetch_assoc($count)){
					?>
                <tr>
                <td> <img width="60" src="admin/uploads/products/<?php echo $key['img_1'];?>" alt=""/></td>
                <td><?php echo $key['product_name']; ?></td>
				<td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="" value="<?php echo $key['quantity']; ?>" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
				</td>
                <td>&#8358;<?php echo $key['product_price']; ?></td>
                <td>$25.00</td>
                <td>$15.00</td>
                <td class="countable" ><?php $total = $key['product_price'] * $key['quantity'];
                			echo $total; ?></td>
                </tr>
				<?php } ?>
				
                <!-- <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
                  <td> $228.00</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right">Total Discount:	</td>
                  <td> $50.00</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:	</td>
                  <td> $31.00</td>
                </tr> -->
				</tbody>
            </table>
            <div class="pull-right"><strong>Gross Total = </strong><strong class="label label-important" ><h5 id="output"></h5></strong></div>
		
		
            <table class="table table-bordered" >
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>
			
			<table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<script type="text/javascript">
	var sum = 0;
var table = document.getElementById("cart-table");
var ths = table.getElementsByTagName('th');
var tds = table.getElementsByClassName('countable');
for(var i=0;i<tds.length;i++){
	sum += isNaN(tds[i].innerText) ? 0 : parseInt(tds[i].innerText);
}
console.log(sum);
document.getElementById('output').innerHTML = '&#8358;' + sum;

// var row = table.insertRow(table.rows.length);
// var cell = row.insertCell(0);
// cell.setAttribute('colspan', ths.length);

// var totalBalance  = document.createTextNode('Total Balance ' + sum);
// cell.appendChild(totalBalance);
</script>
<!-- MainBody End ============================= -->
<?php
include 'footer.php';