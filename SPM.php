
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="BI.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="spm.css">
</head>

<body>
<div class="container">
	<div class="bgICM">
	<div class="w3-container w3-center w3-animate-zoom">
	<div class="tab">
          <button class="tablinks" onmouseover="openspm(event, 'SPM')">Sales Performance Management</button>
          <button class="tablinks" onmouseover="openspm(event, 'ICM')">Incentive Compensation Management</button>
          <button class="tablinks" onmouseover="openspm(event, 'SPMvsICM')">SPM vs ICM</button>
        </div>

        <div id="SPM" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
        <?php 
          echo "<h1>Sales Performance Management</h1><br>";
          echo "<p align=left><i>Sales performance management is a comprehensive solution that helps organizations drive sales alignment from planning through execution while improving efficiency, accuracy and timeliness of the associated administrative processes.</i> </p><br>";
          echo "<p align=left><b><i>Motivate Sales</i></b></p>";
          echo "<p align=left><i>Engage Salespeople with easy to read sales data using personalized dashboards and reports. Build trust with the sales team through transparent reporting showing salespeople their commissions and the calculation process. Provides the interface for controlling what your salespeople can see based on their role and eligibility rules.</i></p><br>";
          echo "<p align=left><b><i>Automated Sales Comp</i></b></p>";
          echo "<p align=left><i>Automate the jobs that other products can’t handle. Manage complex sales crediting rules. Take control of all your sales and commission data.SPM uses sophisticated plan rules and calculations and eliminate the manual labor required to make payments and manage the commission process.</i></p><br>";
          echo "<p align=left><b><i>Dashboard & Reports</i></b></p>";
          echo "<p align=left><i>SPM delivers immediate and transparent communication via dashboards and a suite of reports. Information can be customized with secure access levels for sales, human resources, finance and management.</i></p><br>";
         ?>
        </div>
		</div>
        <div id="ICM" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
          <?php 
          echo "<h1>Incentive Compensation Management</h1>";
          echo "<p align=left><i>Incentive compensation is the supplementary money an employee makes for a certain level of performance on top of their regular, base salary. Incentive compensation plan (or incentive pay plan) is a statement outlining the commission a sales rep receives when they sell a certain amount of a given product.</i></p>";
          echo "<p align=left><b><i>Save Time</i></b>";
          echo "<p align=left><i>Your time is too valuable to calculate sales commission manually with spreadsheets. With few clicks you can automate the process using IBM Incentive Compensation Management. The audit log to keep track of all the adjustments and you will receive an email confirming when the completion of the automated tasks.</i></p>";
          echo "<p align=left><b><i>Ease of Use & Control</i></b>";
          echo "<p align=left><i>Incentive Compensation Management gives you the power and authority to set up precisely what you need to have your commission calculated in detail. Incentive Compensation Management play nice with data from other programs like Salesforce, with our progressive ICM software.</i></p>";
          echo "<p align=left><b><i>Integration</i></b>";
          echo "<p align=left><i>IBM ICM uses several technologies including APIs to integrate with many other platforms including accounting systems like Salesforce, PeopleSoft. IBM ICM can interface with multiple sources of data to download and import files.</i></p>";
          echo "<p align=left><b><i>Reports & Dashboard</i></p>";
          echo "<p align=left><i>Use IBM ICM report and dashboard builder to create the reports your business needs. IBM ICM comes with a suite of standard reports, which you can easily edit or create your own reports.</i></p>";
          ?> 
        </div>
		</div>
        <div id="SPMvsICM" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
           <?php 
          echo "<h1>SPM vs ICM</h1>";
          echo "<p align=left><i>Sales performance management is a comprehensive solution that helps organizations drive sales alignment from planning through execution while improving efficiency, accuracy and timeliness of the associated administrative processes.</i></p><br>";
          echo "<p align=left><i>Incentive compensation is the supplementary money an employee makes for a certain level of performance on top of their regular, base salary. Incentive compensation plan (or incentive pay plan) is a statement outlining the commission a sales rep receives when they sell a certain amount of a given product.</i></p><br>";
          
         ?> 
        </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
