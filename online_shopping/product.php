<html>
	<head>
		<title>Product detail</title>
		
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
			.btn {
				font-size: 40px;
				height: 70px;
			}
		</style>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Watches</a></li>
					<li class="active">Beautifull Watch</li>
				</ol>
			</div>
			<div class="row">
			<div class="col-md-8">
				<h3 class="pp-title">Beautifull Watch</h3>
				<img src="images/products/product1.jpg" class="img-responsive">
				<h4 class="pp-desc-head">Description</h4>
				<div class="pp-desc-detail">
					<p>This is a very beautiful watch. its purely made on metal.You can buy this watch by click on the buy button.</p>
					<ul>
						<li>It's Beautiful</li>
						<li>Made of Metal</li>
						<li>An orijinal and branded quality</li>
						<li>Free Shipping overall the country</li>
						<li>Pay Securely via <b>CASH ON DELIVERY</b> method</li>
					</ul>
				</div>
			</div>
			<aside class="col-md-4">
				
				<a href="buy.php" class="btn btn-success btn-lg btn-block">Buy</a>
				<br>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-truck fa-2x"></i></div>
							<div class="col-md-9">Delivered within 5 days</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-refresh fa-2x"></i></div>
							<div class="col-md-9">Easy return in 7 days</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-phone fa-2x"></i></div>
							<div class="col-md-9">Call at 123456789</div>
						</div>
					</li>
				</ul>
			</aside>
			</div>
			<div class="page-header">
				<h2>Related Items</h2>
			</div>
			<section class="row">
				
				<div class="col-md-3">
					<div class="col-md-12  single-item noPadding">
						<div class="top"><img src="images/products/product1.jpg"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Beautifull Watch</a></h3>
							<div class="pull-right cutted-price text-muted"><del>$ 500/=</del></div>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">$ 450/=</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-md-12  single-item noPadding">
						<div class="top"><img src="images/products/product1.jpg"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Beautifull Watch</a></h3>
							<div class="pull-right cutted-price text-muted"><del>$ 500/=</del></div>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">$ 450/=</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-md-12  single-item noPadding">
						<div class="top"><img src="images/products/product1.jpg"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Beautifull Watch</a></h3>
							<div class="pull-right cutted-price text-muted"><del>$ 500/=</del></div>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">$ 450/=</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-md-12  single-item noPadding">
						<div class="top"><img src="images/products/product1.jpg"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Beautifull Watch</a></h3>
							<div class="pull-right cutted-price text-muted"><del>$ 500/=</del></div>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">$ 450/=</div>
						</div>
					</div>
				</div>
			</section>
		</div><br><br><br><br><br>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>