<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="BI.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Portfolio.css">

</head>
<style>

</style>
<body>
<div class="container">
	<div class="bgBI">
	<div class="w3-container w3-center w3-animate-zoom">
		<div class="tab">
          <button class="tablinks" onmouseover="opentab(event, 'BI')">Business Intelligence</button>
          <button class="tablinks" onmouseover="opentab(event, 'BA')">Business Analytics</button>
          <button class="tablinks" onmouseover="opentab(event, 'Data')">Data Integration Solutions</button>
        </div>

		
        <div id="BI" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
        <?php 
          echo "<h3>Business Intelligence</h3>";
          echo "<p align=left><i>Yes, you hear the word buzz... here comes the Business intelligence!!!</i></p>";
          echo "<p align=left><i>BI has come a long way - from assistance with report generation to self-service platforms for discovery and analytical insight.</i></p>";
          echo "<p align=left><i>BI tools are essentially data-driven Decision Support Systems (DSS). BI is sometimes used interchangeably with briefing books, report and query tools and executive information systems.</i></p>";
          echo "<p align=left><i>BI supports corporate executives, business managers and other operational workers which makes better and more informed business decisions. Companies also use BI to cut costs, identify new business opportunities, and spot inefficient business processes ripe for re-engineering.</i></p><br>";
          echo "<p align=left><i>What We Do...</i></p>";
          echo "<p align=left><i>We refer to the tools, technologies, applications and practices used to collect, integrate, analyze, and present an organization’s raw data in order to create insightful and actionable business information. We provide a technology-driven process is made up of several related activities including Data mining, online analytical processing, Querying and Reporting with high quality using tools like Power BI, Mule Soft and so on..</i></p>";
         ?>
        </div>
		</div>
        <div id="BA" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
          <?php 
          echo "<h3>Business Analytics</h3>";
          echo "<p align=left><i>Business analytics (BA) refers to skills, technologies, practices for continuous iterative exploration and investigation of past business performance to gain insight and drive business planning. Business analytics focuses on developing new insights and understanding of business performance based on data and Statistical methods.</i></p>";
          echo "<p align=left><i>In other words, querying, reporting, OLAP known as BI, and alert tools can answer questions such as what happened, how many, how often, where the problem is, and what actions are needed. Business analytics can answer questions like why is this happening, what if these trends continue, what will happen next (predict), and what is the best outcome that can happen (optimize). </i></p><br>";
          echo "<p align=left><i>What We Do...</i></p>";
          echo "<p align=left><i>With BA we provide extensive use of data, statistical analysis, including explanatory and Predictive modeling and fact-based management to drive decision making. Analytics may be used as input for human decisions or may drive fully automated decisions. </i></p>";
         ?> 
        </div>
		</div>
        <div id="Data" class="tabcontent">
        <div class="w3-container w3-center w3-animate-zoom">
           <?php 
          echo "<h3>Data Integration Solutions</h3>";
          echo "<p align=left><i>Data integration is the combination of technical and business processes used to combine data from disparate sources into meaningful and valuable information. A complete data integration solution delivers trusted data from various sources.</i></p><br>";
          echo "<p align=left><i>What We Do...</i></p>";
          echo "<p align=left><i>We transform data in any style and deliver it to any system, supporting faster time to value and reduced IT risk. The integrated platform delivers a wide range of data quality capabilities from data profiling, standardization, matching and enrichment to active data-quality monitoring.</i></p>";
         ?> 
        </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>