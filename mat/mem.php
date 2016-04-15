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
				</div> <!--section-->
			</div>
		</div><!-- ./row-->
		<div class="row">
			<div class="container">
				<div class="section">
					<div class="mem-search">
						<div class="card-panel">
							<div class="row">
								<div class="mem-search-top">
					          		<!-- <nav> -->
					          		<!-- <div class="nav-wrapper"> -->
					          		<form class="">
					          			<div class="row">
											<div class="input-field col s11">
												<input class="mem-search-input" id="search" type="search" placeholder="Search Network" required>
												<!-- <label for="search"><i class="material-icons">search</i></label> -->
												<!-- <i class="material-icons">close</i> -->
											</div>
											<div class="input-field col s1">
												<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">search</i></a>
											</div>
										</div>
									</form>
									<!-- </div> -->
									<!-- </nav> -->
								</div>
							</div>
							<div class="row">
								<div class="mem-search-mid">
									<div class="col s12">
										<div class="row">
											<div class="col s10 mem-search-mid-section-top">
												<p>You have 200 connections</p>
											</div>
											<div class="col s2">
												<!-- Dropdown Structure -->
												<ul id="dropdown2" class="dropdown-content">
												  <li><a href="#!">one</a></li>
												  <li><a href="#!">two</a></li>
												  <li class="divider"></li>
												  <li><a href="#!">three</a></li>
												</ul>
												<ul class="right hide-on-med-and-down">
											      <!-- Dropdown Trigger -->
											      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Sort<i class="material-icons right">arrow_drop_down</i></a></li>
											    </ul>
											</div>
										</div>
										<div class="divider"></div>
										<div class="row">
											<?php for ($i = 1; $i <= 6; $i++){ ?>
											<div class="col s6 mem-search-mid-section">
												<div class="row section">
													<div class="mem-search-mid-img col s4">
														<img src="img/<?php echo $i+3?>.jpg">
													</div>
													<div class="mem-search-mid-info col s8">
															<p><a href="">Name</a> </p>
															<p>Velit consequat in quae voluptates, explicabo, ultricies eu tincidunt quos.</p> 
															<p><a class="">Message</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a class="">Remove</a></p>
													</div>
												</div>
											</div>
											<div class="divider"></div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
				        </div>
			        </div>
				</div>
			</div>
		</div>
	</div> 
	<!-- footer -->
	<?php include 'include/_footer.php'; ?>

	<?php include 'include/_jslinks.php' ?>
</body>
</html>