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
<body id="">
	<div id="full-height">
		<!-- header -->
		<?php include 'includes/_header_admin.php'; ?>

		<div class="container-fluid grey-back">
			<div class="row bottom-border">
				<div class="container">
					<div class="row">
						<div id="connection-banner">
							<div class="panel panel-default">
							  <div class="panel-body">
							    Business Connections
							  </div>
							</div>
						</div>
					</div> <!--/.row-->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-default">
								<div id="connection">
									<div class="panel-body">
								    	<div class="similar-panel">
								    		<div class="similar-panel-img">
								    			<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANVAAAAJDlkYzY0ZjRiLTc0ZjQtNDk2NS1iMDIzLWIwOWJkNjYzNTI1MA.jpg">
								    		</div>
								    		<div class="similar-panel-info">
								    			<p class="similar-panel-info-head">
								    				Connect with <b><a href="">Bronia Naivasha</a></b>
								    			</p>
								    			<p class="similar-panel-info-body">
								    				Saepe possimus eleifend cursus autem.
								    			</p>
								    		</div>
								    	</div>
							    	</div>
							    	<div class="connect-button">
								    		<a href="">Connect</a>
							    	</div>
								</div>
							</div>
						</div>
					</div> <!--/.row-->
				</div> <!--/.container-->
			</div> <!--/.row .bottom-border-->
		</div> <!--/.container-fluid .grey-back-->
		<!-- footer -->
		<?php include "includes/_footer.php" ?>
	</div> <!--/.full-height-->
</body>
</html>