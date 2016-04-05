<!DOCTYPE>
<html>
<head>
	<title>Home</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<!-- header -->
	<?php include 'includes/_header.php'; ?>

	<div class="container-fluid grey-back">
		<div class="row bottom-border">
			<div class="container">
				<div class="col-md-6 col-md-offset-1">
					<div class="jumbotron">
						<h2>Get a custom rate in 1 click</h2>
						<div class="">
							<form>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1"></label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="First Name">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1"></label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Last Name">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1"></label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Street Address">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">City</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="City">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Country</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Country">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Postal Code</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Postal Code">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Date of Birth</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Date of Birth">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Email</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Email">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Password</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Yearly individual Income</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Yearly individual Income">
							  </div>
							  <div class="form-group">
							    <!-- <label for="exampleInputtext1">Yearly Additional Income</label> -->
							    <input type="text" class="form-control input-lg" id="" placeholder="Yearly Additional Income">
							  </div>
							   <div class="checkbox">
									<label>
										<input type="checkbox"> Yes I agree to do the following
									</label>
									<li>bla</li>
									<li>bla</li>
									<li>bla</li>
								</div>
				
							  
							  <div id="btn-brown">
							  <button type="submit" class="form-control input-lg btn btn-default">Get your rate</button>
							  </div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="need-help">
						<div class="need-help-top">
							<span class="glyphicon glyphicon-credit-card"></span>
							<p>Checking your rate will not affect yopur score</p>
						</div>
						<div class="need-help-box need-help-middle">
							Need help? Call us:
						</div>
						<div class="need-help-box need-help-bottom">	
							<span class="glyphicon glyphicon-earphone"></span> 
							<p>
								<b>(+254)722 376 265</b> <br />
								6am - 6pm PT
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</div>
	<?php include "includes/_footer.php" ?>
</body>
</html>