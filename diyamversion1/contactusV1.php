<head>
<link href="ReqStyleSheets/bootstrap.min.css" rel="stylesheet"
	id="bootstrap-css">
<script src="ReqScripts/jquery-1.11.1.min.js"></script>
<script src="ReqScripts/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="contactusV1Style.css">
<script src="conatctusV1Script.js"></script>
</head>
<body>
	<div class="col-md-4">
		<h3>ADDRESS</h3>
		<p>I608 Ittina mahavir apartment</p>
		<p>Neeladri road</p>
		<p>Electronic City Phase 1</p>
		<p>Banglore 560100</p>
		<h3>Contact Us</h3>
		<div class="row">
			<div class="col-md-1"
				style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
				<i class="fas fa-phone"
					style="font-size: 20px; color: Blue; transform: rotate(90deg);"></i>
			</div>
			<div class="col-md-4"
				style="text-align: left; padding-left: 5px; padding-bottom: 3px;">
				<P>+91 8754541474</P>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"
				style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
				<i class="fas fa-envelope" style="font-size: 20px; color: Blue"></i>
			</div>
			<div class="col-md-6"
				style="text-align: left; padding-left: 5px; padding-top: 3px;">
				<p>contactus@diyaminfotech.com</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1"
			style="margin-left: 20px; margin-top: 20px;">
			<form action="#" id="form" method="post" name="form">

				<div class="form-group">
					<label for=" Name"> Name*</label> <input class="form-control"
						id="Name" placeholder="Enter Name" name="fname">
				</div>
				<div class="form-group">
					<label for="Mobile No">Mobile No*</label> <input
						class="form-control" id="LName" placeholder="Enter Mobile No"
						name="lname">
				</div>
				<div class="form-group">
					<label for="Email">Email*</label> <input class="form-control"
						id="Email" placeholder="Enter Email" name="email">
				</div>
				<div class="form-group">
					<label for="message">Message*</label>
					<textarea id="message" class="form-control" name="message"
						placeholder="Share your thoughts.."></textarea>
				</div>

				<button type="submit" name="submit" style="float: center;"
					class="btn btn-default">Send</button>
			</form>


			<h3><?php include "NewSendEmail.php";?></h3>
		</div>

	</div>
</body>