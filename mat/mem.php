<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'include/_headerlinks.php'; ?>
</head>
<body>
	<!-- nav -->
	<?php include 'include/_nav.php'; ?>
	<div class="page blue-grey lighten-5">
		<div class="row">
			<div class="container">
				<div class="section">
					<h4>Connections</h4>
					<p>Quasi potenti cras irure sint. Consequatur elit dolorum, turpis anim.</p>
				</div>
				<div class="section" ng-app="app" ng-controller="ctrl">
					<div class="col s3"  ng-repeat="o in arr">
						<div class="mem-card" >
							<div class="card small" >
								<div class="card-image">
									<a href=""><img src="img/1.jpg"></a>
									<!-- <span class="card-title">Business name</span> -->
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">Business name<i class="material-icons right">more_vert</i></span>
									<!-- <p><a class="modal-trigger" href="#modal1">Add to my network</a></p> -->
									<p><a class=" modal-trigger" href="#modal1">Modal</a></p>
									
								</div>
								<!-- <div class="card-action">
									<a href="#">Add to network</a>
								</div> -->

								<div class="card-reveal">
							      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							      <p>Here is some more information about this product that is only revealed once clicked on.</p>
							    </div>
							</div>
						</div>
					</div>
					
				</div>
				 <!-- Modal Trigger -->
			</div>
		</div><!-- ./row-->
	</div> 
	<!-- footer -->
	<?php include 'include/_footer.php'; ?>

	<?php include 'include/_jslinks.php' ?>
</body>
</html>