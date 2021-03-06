<html>
	<head>
		<title>E-Shop</title>
		<?php require_once('_css-include.php');?>
		<!--Page Specific -->
		<style>
			.navbar-inverse{
			background-color:#428BCA;
			border-color:#428BCA;
			}
			.navbar-inverse .navbar-brand {
				color:white;
				font-weight:700;
			}
			.panel-success 
			{
				border-color:#398439;
			}
			
			.panel-success > .panel-heading{
				background-color:#47A447;
				color:white;
				
			}
			.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
				color:whitesmoke;
			}
			.navbar-inverse .navbar-toggle:focus{
				background-color:#428BCA;
			}
			.navbar-inverse .navbar-toggle:hover
			{
				background-color:white;
			}
			.navbar-inverse .navbar-nav > li > a {
				color:white;
			}
			.badge{
				background-color:green;
			}
		</style>
	</head>
	<body class="container-fluid">
	<div class="col-xs-2 panel-group" style="padding:0;height:600px">
		<div class="panel panel-success" style="margin:0px;max-height:150px;width:100%;">	
			<div class="panel-heading" style="text-align:center;">
				<h2 style="padding-bottom:5px;"><i class="fa fa-shopping-cart"></i></h2>
				<a id="x1" href="#" style="color:white"><h4>Your Cart has 3 Items</h4></a>
			</div>
		</div>
		<div id="x2" dim-vis="2" class="panel panel-success" style="margin:0px;width:100%;max-height:480px;overflow-y:auto;">
			<table  class="table table-bordered table-hover" style="text-align:center;">
				<tr style="display:none;">
					<th></th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th></th>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
				<tr>
					<td><h4><a href="#" style="color:green"><i class="fa fa-plus"></i></a></h4><h4><a href="#" style="color:orange"><i class="fa fa-minus"></i></a></h4></td>
					<td><h4>Casio Watch</h4></td>
					<td><h4>1</h4></td>
					<td><h4><a href="#" style="color:red"><i class="fa fa-times"></i></a></h4></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body" style="max-height:250px;">
					<div class="col-xs-2">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-5">
						<h3><a href="">Casio Watch</a></h3>
						<hr>
						<h5>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute </h5>
						<h4><a class="pull-right" href="#">Full Description</a></h4>
					</div>
					<div class="col-xs-3" style="padding-left:10px;border-right:2px solid #428BCA;">
						<h3 style="color:green;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i></h3>
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h4 class="text-success">Available In Stock</h4>
						<h4>Seller : <a href="#">James Bond</a></h4>
						<h4><a href="#">See Customer Feedback</a></h4>
					</div>
					<div class="col-xs-2" style="margin-top:45px;">
						<button style="width:100%" class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
						<br>
						<br>
						<button style="width:100%" class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body" style="max-height:250px;">
					<div class="col-xs-2">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-5">
						<h3><a href="">Casio Watch</a></h3>
						<hr>
						<h5>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute </h5>
						<h4><a class="pull-right" href="#">Full Description</a></h4>
					</div>
					<div class="col-xs-3" style="padding-left:10px;border-right:2px solid #428BCA;">
						<h3 style="color:orange;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h3>
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h4 class="text-danger">Out Of Stock</h4>
						<h4>Seller : <a href="#">Anil Kapoor</a></h4>
						<h4><a href="#">See Customer Feedback</a></h4>
					</div>
					<div class="col-xs-2" style="margin-top:45px;">
						<button style="width:100%" class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
						<br>
						<br>
						<button style="width:100%" class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body" style="max-height:250px;">
					<div class="col-xs-2">
						<a class="thumbnail" href="#">
							<img src="../images/casio1.jpeg" style="max-height:250px;">
						</a>
					</div>
					<div class="col-xs-5">
						<h3><a href="">Casio Watch</a></h3>
						<hr>
						<h5>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute </h5>
						<h4><a class="pull-right" href="#">Full Description</a></h4>
					</div>
					<div class="col-xs-3" style="padding-left:10px;border-right:2px solid #428BCA;">
						<h3 style="color:red;"><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h3>
						<h4>Price : <i class="fa fa-rupee"></i>&nbsp;6000</h4>
						<h4 class="text-success">Available In Stock</h4>
						<h4>Seller : <a href="#">James Bond</a></h4>
						<h4><a href="#">See Customer Feedback</a></h4>
					</div>
					<div class="col-xs-2" style="margin-top:45px;">
						<button style="width:100%" class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button>
						<br>
						<br>
						<button style="width:100%" class="btn btn-info"><i class="fa fa-magic"></i>&nbsp;Wishlist</button>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-2" style="height:600px">
		<div class="panel panel-success">
			<div class="panel-heading" style="height:100%;width:100%;text-align:center;">
				<h1 style="margin-top:220px"><i class="fa fa-shopping-cart"></i></h1>
				<br>
				<h4>Your Cart is Empty</h4>
			</div>
		</div>
	</div>
	</body>
	<?php require_once('_js-include.php');?>
	<!--Page Specific JS -->
	<script type="text/javascript">
		
		function togcart(){
			if($('#x2').attr('dim-vis')=='1')
			{
				$('#x2').slideDown('slow');
				$('#x2').attr('dim-vis','2');
			}
			else
			{
				$('#x2').slideUp('slow');
				$('#x2').attr('dim-vis','1');
			}
		}
		$('#x1').click(function (){
			togcart();
		});
		$(document).ready(function (){
			$('#x1').click();
		});
		
	</script>
    </html>