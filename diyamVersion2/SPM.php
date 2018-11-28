<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="BI.js"></script>
<link rel="stylesheet" href="spm.css">
</head>

<body>
	<div class="container">
		<div class="titleheader" style="font-size: 36px;">High Performing
			Sales and Service Strategies &amp; Solutions</div>
		<div class="content">
			<div class="col-xs-6  col-sm-3 col-md-3">
				<div class="card">
					<img class="img-fluid" src="Images/Implementation.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo"<h3>SPM Service Implementation</h3>";?>
						<?php echo"<p class=card-text>Offering a complete end-to-end analysis for
							defining and planning a advanced solution to support your
							SPM.</p>";?>
						<a href="spmcontent.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6  col-sm-3 col-md-3">
				<div class="card">
					<img class="img-fluid" src="Images/SUPPORT.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Support &amp; Maintenance</h3> ";?>
						<?php 
						echo "<p>Delivering both business and technical
						support at high level that's right for your organization.</p>";
						?>
						<a href="Support.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6  col-sm-3 col-md-3">
				<div class="card">
					<img class="img-fluid" src="Images/TESTING.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<h3 class="card-title">Testing Services</h3>
						<p class="card-text">Visibility and transparency is the key to
							establishing trust and reinforcing the right behaviors.</p>
						<a href="Testing.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6  col-sm-3 col-md-3">
				<div class="card">
					<img class="img-fluid" src="Images/consulting.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<h3 class="card-title">Consulting Services</h3>
						<p class="card-text">We partner with organizations to implement
							SPM for great sales performers.</p>
						<a href="consulting.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
		</div>

		<iframe id="contentload"
			style="width: 100%; height: 100%; display: none" name="spm"></iframe>

	</div>


</body>
</html>