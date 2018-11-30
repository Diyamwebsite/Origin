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
<div class="titleheader" style="font-size: 36px;height:120px;padding-left:40%;padding-top:2%;">
			Services &amp; Solutions</div>
	<div class="container" style="width:100%;">		
		<div id="content" class="row" style="margin-top:4%;">
			<div class="col-sm-3">
				<div class="card" style="width:80%;margin-left:19%;">
					<img class="img-fluid" src="Images/Implementation.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo"<h3>SPM Service Implementation</h3>";?>
						<?php echo"<p>Offering a complete end-to-end analysis for
							defining and planning a advanced solution to support your
							SPM.</p>";?>
						<a href="spmcontent.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card" style="width:80%;margin-left:-8%;">
					<img class="img-fluid" src="Images/SUPPORT.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Support &amp; Maintenance</h3> ";
						      echo "<p>Delivering both business and technical
						support at high level that's right for your organization.</p><br>";
						?>
						<a href="Support.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card" style="width:80%;margin-left:-35%;">
					<img class="img-fluid" src="Images/TESTING.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Testing Services</h3>";
						      echo"<p>Visibility and transparency is the key to
							establishing trust and reinforcing the right behaviors.</p>";?>
						<a href="Testing.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card" style="width:80%;margin-left:-62%;">
					<img class="img-fluid" src="Images/consulting.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Consulting Services</h3>";?>
					<div style="height: 115px;">
						<?php echo "We partner with organizations to implement
						              SPM for great sales performers.";?>
					</div>
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