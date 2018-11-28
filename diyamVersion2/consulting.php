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
<link rel="stylesheet" href="BI.css">
<script type="text/javascript" src="BI.js"></script>
<script type="text/javascript" src="consulting.js"></script>
</head>

<body>
	<div id="outerLayer" class="container">
		<div class="title" style="font-size: 36px;">Let's Get Started To Choose Your SPM Service From
			Us...</div>
		<div class="card-deck mt-4">
			<div class="col-md-4">
				<div class="card">
					<img class="img-fluid" src="Images/Implementation.png"
						alt="Card image cap" style="width: 85px; height: 75px;">
					<div class="card-body">
						<h3 class="card-title">Ready to Select SPM Software?</h3>
						<p class="card-text">Get a complete vendor evaluation.We know the
							software vendors can give you an unbiased assesment.</p>
						<br> <a id="spmAnchor" class="btn btn-primary spmAnchor">Learn
							More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="img-fluid" src="Images/SUPPORT.png"
						alt="Card image cap" style="width: 85px; height: 75px;">
					<div class="card-body">
						<h3 class="card-title">Implementation Help &amp; Support</h3>
						<p class="card-text">We're ready to customize SPM software to your
							unique needs.</p>
						<br> <br>
						<a id="spmhelp" class="btn btn-primary spmhelp">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="img-fluid" src="Images/TESTING.png"
						alt="Card image cap" style="width: 85px; height: 75px;">
					<div class="card-body">
						<h3 class="card-title">Get Support for an Existing Solution</h3>
						<p class="card-text">Is your SPM solution working for your
							organization? We can audit and improve existing solutions.</p>
						<br> <a id="spmexisting" class="btn btn-primary spmexisting">Learn More</a>
					</div>
				</div>
			</div>
		</div>

		<iframe id="contentload"
			style="width: 100%; height: 100%; display: none" name="spm"></iframe>

	</div>
	<div id="spmConte" style="display: none;">
		<div class="content">
		<?php 
		  echo "<h3>Choose the Right SPM Partner</h3>";
		  echo "<p>Implementing performance management solutions involve much more than software selection, 
                but choosing the right SPM software is an important step. 
                There are a variety of software options available and many questions to address, 
                including: build versus buy, on premise versus SaaS, suite versus <q>best of breed</q>. 
                Our goal is to help our clients find the right solution and eventually the right software partner 
                that will fit your business needs, both now and in the long term.</p>";
		  echo "We understand that your business is unique and that any performance management software will need 
                to be configured to allow customization and optimization for your program. We also know that your 
                need for our involvement may vary - some customers ask us to manage the entire selection process 
                while others simply need targeted expertise at the right times along the way.";
		  echo "Call us today to get started. 875-454-1474";
		?>
		</div>
	</div>
		<div id="spmContentH" style="display: none;">
		<div class="content">
		<?php 
		  echo "<h3>SPM Platform Implementation Experts</h3>";
		  echo "<p>Once a performance management software solution has been selected, we begin the solution 
                implementation. We are highly evolved and specifically tailored implementation methodology that has been used 
                with success with our clients. We understand that our customers have their own preferences in terms of methodology - 
                so we work collaboratively during the planning phase to integrate these preferences with our established methods</p>";
		  echo "As partners, we cannot succeed without a clear appreciation of both the success criteria expected as well as the operational improvements required. Therefore, 
                our culture and our methodology constantly reinforce a comprehensive approach to platform implementation.";
		  echo "Call us today to get started. 875-454-1474";
		?>
		</div>
	</div>
	<div id="spmexist" style="display: none;">
		<div class="content">
		<?php 
		  echo "<h3>SPM Platform Implementation Experts</h3>";
		  echo "<p>Once a performance management software solution has been selected, we begin the solution 
                implementation. We are highly evolved and specifically tailored implementation methodology that has been used 
                with success with our clients. We understand that our customers have their own preferences in terms of methodology
                – so we work collaboratively during the planning phase to integrate these preferences with our established methods</p>";
		  echo "As partners, we cannot succeed without a clear appreciation of both the success criteria expected as well as the operational improvements required. Therefore, 
                our culture and our methodology constantly reinforce a comprehensive approach to platform implementation.";
		  echo "Call us today to get started. 875-454-1474";
		?>
		</div>
	</div>
</body>
</html>