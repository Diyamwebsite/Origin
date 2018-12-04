<head>
<title>Diyam</title>
<link href="ReqStyleSheets/bootstrap.min.css" rel="stylesheet"
	id="bootstrap-css">
<script src="ReqScripts/jquery-1.11.1.min.js"></script>
<script src="ReqScripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="ReqStyleSheets/all.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
	<script src="homeScript.js"></script>
	<script type="text/javascript" src="BI.js"></script>
</head>
<body>
	<div id="header" class="container">
		<div class="row" style="margin-bottom: 7px;">
			<div class="col-md-1">
				<img src="Images/Diyamlogo.png" alt="logo"
					style="width: 75px; height: 75px;">
			</div>
			<div class="col-md-3" style="padding-left: 0px; margin-top: 5px;">
				<span style="color: #004080; font-size: 45px;">DIYAM</span>
			</div>
			<div class="collapse navbar-collapse navbar-static-top col-md-6"
				id="bs-example-navbar-collapse-1"style="margin-top:20px;margin-left:29%;">
				<ul class="nav navbar-nav">
					<li id="home" class="active"><a href="home.php" target="loader">Home</a></li>
					<li id="portfolio" class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Portfolio <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li id="spm"><a href="Portfolio.php">SPM</a></li>
							<li id="web"><a href="#">Web Technologies</a></li>
							<li id="BI"><a href="#">Business Integration Solutions</a></li>
						</ul>
					</li>
					<li id="resources" class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Resources <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">IBM ICM V10</a></li>
							<li><a href="#">Key Points of ICM</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="#">Blogs</a></li>
						</ul></li>
					<li id="diyam" class="head"><a href="#">Diyam</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
	<div id="middelContent">
	<div class="container" id="cont" style="height:58%;color: #004080;">
		<div class="col-md-3 col-md-offset-1" style="margin-left: 14%;">
  <div class="cardhome">
    <img class="img-fluid" src="Images/Implementation.png" alt="Card image cap" style="width: 85px; height: 75px;">
    <div class="card-body">
      <h3 class="card-title">Sales Performance Management</h3>
      <p class="card-text">Strategic business tool that motivate and empower your sales team</p><br>
      <a href="SPM.php" class="btn btn-primary">Learn More</a>
    </div>
  </div>
  </div>
  <div class="col-md-3">
  <div class="cardhome">
    <img class="img-fluid" src="Images/SUPPORT.png" alt="Card image cap" style="width: 85px; height: 75px;">
    <div class="card-body">
      <h3 class="card-title">Web Technologies</h3>
      <p class="card-text">Focus on creating brand new software products</p>
      <br><a href="Web.php" class="btn btn-primary">Learn More</a>
    </div>
  </div>
  </div>
  <div class="col-md-3">
  <div class="cardhome">
    <img class="img-fluid" src="Images/TESTING.png" alt="Card image cap" style="width: 85px; height: 75px;">
    <div class="card-body">
      <h3 class="card-title">Business Integration Solution</h3>
      <p class="card-text">Identify new business Opportunities &amp; Solutions</p><br>
      <a href="BI.php" class="btn btn-primary">Learn More</a>
    </div>
  </div>
  </div>
	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-12" style="margin-top: 20px; text-align: center;">
			<span style="font-size: 25px; color: #004080;">So What Exactly Can
				Diyam &amp; SPM Do For You?</span>
		</div>
	</div>
	<div class="row" style="margin-top: 20px; text-align:center;color: #004080;">
		<div class="col-md-10 col-md-offset-1">
			<div class="card">
				<div class="card-body">
					<div class="row saple">
						<span>Higher quality of performance information &amp; Stronger process orientation</span>
					</div>
					<div class="row saple">
						<span>Higher operational efficiency &amp; Improvement of management quality</span>
					</div>
					<div class="row saple">
						<span>Better achievement of organisational goals</span>
					</div>
					<div class="row saple">
						<span>Better strategic alignment of organisational units</span>
					</div>
					<div class="row saple">
						<span>Better strategic planning process</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">	
		<div id="content" class="row" style="margin-top:-3%;color: #004080;">
			<div class="col-sm-3">
				<div class="cardhome" style="width:80%;margin-left:45%;">
					<img class="img-fluid" src="Images/Implementation.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo"<h3>SPM Service Implementation</h3>";?>
						<div style="height: 115px;">
						<?php echo"<p>Offering a end-to-end Solution for your organisations through 
                                Standard Methodology. Discover, Design, Develop, Deploy and Maintain phases.</p>";?>
							</div>
						<a href="spmcontent.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="cardhome" style="width:80%;margin-left:25%;">
					<img class="img-fluid" src="Images/SUPPORT.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Support &amp; Maintenance</h3> ";?>
						<div style="height: 115px;">
						<?php echo "<p>Providing Technical and Functional support for SPM implementations.</p>";
						?>
						</div>
						<a href="Support.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="cardhome" style="width:80%;margin-left:5%;">
					<img class="img-fluid" src="Images/TESTING.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Testing Services</h3>";?>
						<div style="height: 115px;">
						      <?php echo"<p>Offering Quality Assurance Services for SPM/ICM implementations. </p>";?>
							</div>
						<a href="Testing.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="cardhome" style="width:80%;margin-left:-15%;">
					<img class="img-fluid" src="Images/consulting.png"
						alt="Card image cap" style="width: 75px; height: 75px;">
					<div class="card-body">
						<?php echo "<h3>Consulting Services</h3>";?>
					<div style="height: 115px;">
						<?php echo "We work with you and assist you to identify the optimal SPM solution for your organization.";?>
					</div>
						<a href="consulting.php" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row"
		style="margin-top: 30px; padding-left: 70px; background-color: #f1f1f1 !important; padding-top: 70px; padding-bottom: 50px;">
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-5 custom">
				<div class="card">
					<div class="card-body">
						<div class="row saple">
							<i class="fa fa-3x fa-cubes"></i>
						</div>
						<div class="row saple hrt">
							<h3 class="text-center">Implementation Help &amp; Support</h3>
						</div>
						<div class="row">
							<div class="content">
								<p>As a leading implementation vendor, we are ready to
									customize SPM software to your unique needs.</p>
							</div>
						</div>
						<div class="row">
							<div class="link">
								<span class="btn btn-lg btn-block btn-secondary"> Learn More <i
									class="fa fa-angle-right"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 custom">
				<div class="card">
					<div class="card-body">
						<div class="row saple">
							<i class="fa fa-3x fa-comments-o"></i>
						</div>
						<div class="row saple hrt">
							<h3 class="text-center">Get Support for an Existing Solution</h3>
						</div>
						<div class="row">
							<div class="content1">
								<p>Is your SPM solution working for your organization? We can
									audit and improve existing solutions.</p>
							</div>
						</div>
						<div class="row">
							<div class="link">
								<span class="btn btn-lg btn-block btn-secondary"> Learn More <i
									class="fa fa-angle-right"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row" style="height: 200px; margin-bottom: 30px;margin-top:20px;">
		<div class="col-md-10 col-md-offset-1">
			<div class="your-class">
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;padding-top:0%;">Bonus</div>
  						<div class="card-body">
    							<p class="card-text">calculated based on a target amount that is multiplied by one or more performance factors</p>
    							<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>

				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Commission</div>
  						<div class="card-body">
    							<p class="card-text">A type of incentive often expressed as a percentage of revenues/sales</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Channel</div>
  						<div class="card-body">
    							<p class="card-text">A medium for distributing or selling products or services. </p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Draw</div>
  						<div class="card-body">
    							<p class="card-text">An amount of money that a payee may "borrow" against their future income</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Guarantee</div>
  						<div class="card-body">
    							<p class="card-text">A minimum amount guaranteed to new sales representatives</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Quota</div>
  						<div class="card-body">
    							<p class="card-text">A target amount that a salesperson must sell for a particular period</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Recurring Revenue</div>
  						<div class="card-body">
    							<p class="card-text">Services that are paid on a regular frequency </p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Rollup</div>
  						<div class="card-body">
    							<p class="card-text">Refers to sales credit that is rolled from one payee to another, </p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Sales Compensation</div>
  						<div class="card-body">
    							<p class="card-text">An additional incentive given to the sales rep to drive certain behaviors, generally for a specified time period</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Split</div>
  						<div class="card-body">
    							<p class="card-text">A cost or payment that is split between two or more entities </p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Territory</div>
  						<div class="card-body">
    							<p class="card-text">Territories usually help define which salesperson gets credit for sales.</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Threshold</div>
  						<div class="card-body">
    							<p class="card-text">The lowest performance level that must be achieved in order to earn an incentive payment.</p>
 		 						<h6 class="card-text"><a href="#">Know More</a></h6> 
 		 				</div>
				</div>
				<div class="card bg-light mb-3 concepts" style="max-width: 18rem;margin-top:5%;">
  					<div class="card-header" style="margin-top:15%;">Workflow</div>
  						<div class="card-body">
    							<p class="card-text">The automation of a business process.</p>
								<h6 class="card-text"><a href="#">Know More</a></h6> 		 				
 		 				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row" style="margin-top: 0%;">
		<div class="col-md-12" style="margin-top: 0%; text-align: center;">
			<span style="font-size: 25px; color: #004080;">Why Diyam?</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1"
			style="margin-top: 10px; text-align: center; color: #080808cc;">
			<span style="font-size: 17px;">Diyam has successfully delivered sales
				performance management solutions to clients in variety of
				industries. Our experts know how to apply SPM technology to take
				your sales organization to the next level.</span>
		</div>
	</div>
	<div class="row" style="margin-top: 30px; margin-bottom: 50px;">
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-3">
				<div class="card" style="margin-left: -50%;">
					<div class="card-body">
						<img src="Images/wrench.png">
						<h2 style="text-align: center;">Discover</h2>
						<span style="text-align: center; font-size: 17px;color: #004080;">Identify the business needs for SPM Solution.</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="margin-left: -50%;">
					<div class="card-body">
						<img src="Images/search.png">
						<h2 style="text-align: center;">Design</h2>
						<span style="text-align: center; font-size: 17px;color: #004080;">Design to meet your business needs</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="margin-left: -50%;">
					<div class="card-body">
						<img src="Images/wrench.png">
						<h2 style="text-align: center;">Deliver</h2>
						<span style="text-align: center; font-size: 17px;color: #004080;">Design &amp; deploy the right solution</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="margin-left: -50%;">
					<div class="card-body">
						<img src="Images/refresh.png">
						<h2 style="text-align: center;">Manage</h2>
						<span style="text-align: center; font-size: 17px;color: #004080;">Manage &amp; deliver the implemention solution.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="contactContent" style="display:none;">
    <div class="mod-cont">
  </div>
  </div>
   <iframe src="Portfolio.php" id="port" style="width:100%;height:80%; display:none;"></iframe>
   <iframe src="resources.php" id="reso" style="width:100%;height:80%; display:none;"></iframe>
   <iframe src="SPM.php" id="sp" style="width:100%;height:80%; display:none;"></iframe>
   <hr/>
	<div id="footer">
	<div class="row">
		<div
			class="collapse navbar-collapse navbar-static-top col-md-5 col-md-offset-1"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-md-offset-5" style="padding-left: 14%;">
			<ul class="list-inline">
				<li><a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=DiyamInfotech" target="_blank" title="" data-toggle="tooltip"
					data-original-title="Diyam on Twitter"> <span
						class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i
							class="fa fa-stack-1x fa-inverse fa-twitter"></i>
					</span>
				</a></li>
				<li><a href="https://www.facebook.com/diyaminfotech/" target="_blank" title="" data-toggle="tooltip"
					data-original-title="Diyam on Facebook"> <span
						class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i
							class="fa fa-stack-1x fa-inverse fa-facebook"></i>
					</span>
				</a></li>
				<li><a href="https://www.linkedin.com/company/diyam-infotech-pvt-ltd" target="_blank" title="" data-toggle="tooltip"
					data-original-title="Diyam on LinkedIn"> <span
						class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i
							class="fa fa-stack-1x fa-inverse fa-linkedin"></i>
					</span>
				</a></li>
			</ul>
		</div>
	</div>
	
		
	
	</div>
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script type="text/javascript" src="slick.js"></script>
</body>
