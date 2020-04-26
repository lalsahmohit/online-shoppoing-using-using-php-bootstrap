<html>
	<head>
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="container">
		
			<div class="page-header">
				<h2 class="text-left">Checkout</h2><p class="text-right"> <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Proceed Button</button></p>
				<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>
      <div class="modal-body">
        <div class="group">
			<label>Name</label>
			<input type="text" class="form-control">
		</div>
		<div class="group">
			<label>Email Address</label>
			<input type="text" class="form-control">
		</div>
		<div class="group">
			<label>Contact Number</label>
			<input type="text" class="form-control">
		</div>
		<div class="group">
			<label>States</label>
			<input type="text" class="form-control">
		</div>
		<div class="group">
			<label>Contact Number</label>
			<textarea class="form-control"></textarea>
		</div>
		<div class="group">
			<label>States</label>
			<input type="button" class="btn btn-danger btn-lg btn-block" value="Submit">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">Order Detail</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>S.no</th>
								<th>Item</th>
								<th>qty</th>
								<th width="5%">Delete</th>
								<th class="text-right">Price</th>
								<th class="text-right">Total</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Beautiful Watch</td>
								<td>1</td>
								<td><button class="btn btn-danger btn-sm">Delete</button></td>
								<td class="text-right"><b>100/=</b></td>
								<td class="text-right"><b>100/=</b></td>
								
							</tr>
							<tr>
								<td>2</td>
								<td>Tea Cup set</td>
								<td>4</td>
								<td><button class="btn btn-danger btn-sm">Delete</button></td>
								<td class="text-right"><b>150/=</b></td>
								<td class="text-right"><b>600/=</b></td>
								
							</tr>
						</tbody>
					</table>
					<table class="table">
						<thead>
							<tr>
								<th class="text-center" colspan="2">Order Summary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Subtotal</td>
								<td class="text-right"><b>700/=</b></td>
							</tr>
							<tr>
								<td>Delivery Charges</td>
								<td class="text-right"><b>Free</b></td>
							</tr>
							<tr>
								<td>Grand Total</td>
								<td class="text-right"><b>700/=</b></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>