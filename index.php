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

	<?php include 'includes/_header.php'; ?>

	<div class="container-fluid">
		<div class="row bottom-border">
			<div class="container">
				<div class="col-md-6">
					<div class="img-responsive home-img">
						<img src="images/1.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>6 Million lent</h1>
						<div class="check-credit-form">
							<form>
							  <div class="form-group">
							    <!-- <label for="exampleInputEmail1">Enter Amount</label> -->
							    <input type="email" class="form-control input-lg" id="" placeholder="Enter Amount (Ksh 20,000 - Ksh 50,000)">
							  </div>
							  <div class="form-group">
							    <!-- <label for="">How is your credit</label> -->
							    <select class="form-control input-lg">
								  <option>Purpose of Loan</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							  </div>
							  <div class="form-group">
							    <!-- <label for="">How is your credit</label> -->
							    <select class="form-control input-lg">
								  <option>How is your credit</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							  </div>
							  <div id="btn-brown">
							  <button type="submit" class="form-control input-lg btn btn-default">Check your rate</button>
							  </div>
							</form>
						</div>
					</div>
				</div> <!--/.col-md-6-->
			</div> <!--/.container-->
		</div> <!--/.row .bottom-border-->
		<div class="row">
			<div class="home-sec-1 bottom-border-shade">
				<div class="container">
					<div class="home-sec-1-item col-md-3 right-border"><span class="glyphicon glyphicon-certificate"></span> Illum ipsam facilis.</div>
					<div class="home-sec-1-item col-md-3 right-border"><span class="glyphicon glyphicon-certificate"></span> Aenean ligula adipisci.</div>
					<div class="home-sec-1-item col-md-3 right-border"><span class="glyphicon glyphicon-certificate"></span> Illum ipsam facilis.</div>
					<div class="home-sec-1-item col-md-3 "><span class="glyphicon glyphicon-certificate"></span>Aenean ligula adipisci.</div>
				</div>
			</div>
		</div> <!--/.row-->
	</div> <!--/.container-fluid-->
	<!-- footer -->
	<?php include "includes/_footer.php" ?>
</body>
</html>