<!DOCTYPE html>
<?php //Connection
error_reporting(0);
$serverName = "mssqllab.rhsmith.umd.edu,9758";
$connectionInfo = array( "Database"=>"BUDT758_DB_0504_12", "UID"=>"BUDT758_Student_233", "PWD"=>"Pass#234");
$con = sqlsrv_connect( $serverName, $connectionInfo);
if( $con ) {
     //echo "Connection established.<br />";
	}
else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jobseeker database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<div id="fh5co-page">
			<div class="fh5co-hero">
			<div class="fh5co-overlay">
			</div>
			<div class="fh5co-cover"  left = 10% >		
			<h2 color="white;"><b>JOB SEEKER DATABASE</b></h2>
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">
								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Candidates</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Companies</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Jobs</a>
								      </li>
								   </ul>
								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
										<form action="index.php" method="GET">
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Qualification:</label>
													<select required name="candQualification" class="cs-select cs-skin-border">
														<option value="" disabled selected >--Select One--</option>
														<option value="undergraduate">Undergraduate</option>
														<option value="Graduate">Graduate</option>
														<option value="phd.">Phd.</option>
													<select>
												</section>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">GPA:</label>
													<select name="candGPA" class="cs-select cs-skin-border">
														<option value="gpa_0" disabled selected >--Select One--</option>
														<option value="gpa_1">None</option>
														<option value="gpa_2">2.5-3.0</option>
														<option value="gpa_3">3.0-3.5</option>
														<option value="gpa_4">3.5-4.0</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Experience:</label>
													<select name="candExperience" class="cs-select cs-skin-border">
														<option value="exp_0" disabled selected >--Select One--</option>
														<option value="exp_1">None</option>
														<option value="exp_2">0-12 months</option>
														<option value="exp_3">12-36 months</option>
														<option value="exp_4">36-60 months</option>
														<option value="exp_5">>60 months</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Candidate Skills</label>
													<select name="skills" class="cs-select cs-skin-border">
														<option value="">All</option>
														<option value="Accounting">Accounting</option>
														<option value="Adobe Suite">Adobe Suite</option>
														<option value="C++">C++</option>
														<option value="Conflict resolution">Conflict resolution</option>
														<option value="Data Analysis">Data Analysis</option>
														<option value="Decision making">Decision making</option>
														<option value="Digital Marketing">Digital Marketing</option>
														<option value="Empathy">Empathy</option>
														<option value="Google Analytics">Google Analytics</option>
														<option value="Graphic Design">Graphic Design</option>
														<option value="Leadership">Leadership</option>
														<option value="Microsoft Office">Microsoft Office</option>
														<option value="Positive attitude">Positive attitude</option>
														<option value="Problem Solving">Problem Solving</option>
														<option value="Project Management">Project Management</option>
														<option value="Python">Python</option>
														<option value="R">R</option>
														<option value="SQL">SQL</option>
														<option value="System Administration">System Administration</option>
														<option value="Teamwork">Teamwork</option>
														<option value="Word Processing">Word Processing</option>
														<option value="Written and Verbal communication">Written and Verbal communication</option>
														</select>
												</div>
											</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Candidates">
												</div>
											</form> 
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<form action="index.php" method="GET">
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Industry </label>
													<select name="industry" class="cs-select cs-skin-border">
														<option value="" disabled selected>--Select One--</option>
														<option value="IT">IT</option>
														<option value="Accounting">Accounting</option>
														<option value="Consulting">Consulting</option>
														<option value="Finance">Finance</option>
														<option value="Insurance">Insurance</option>
														<option value="Communication">Communication</option>
														<option value="Banking">Banking</option>
														<option value="Software">Software</option>
														<option value="Ridesharing">Ridesharing</option>
														<option value="manufacturing ">manufacturing </option>
														<option value="Network">Network</option>
														<option value="Services">Services</option>
														<option value="Food">Food</option>
														<option value="Infrastructure">Infrastructure</option>
														<option value="Hotel">Hotel</option>
														<option value="Social network">Social network</option>
														<option value="Management">Management</option>
														<option value="MNC">MNC</option>
														<option value="Automobile">Automobile</option>
														<option value="Entertainment">Entertainment</option>
														<option value="Media">Media</option>
														<option value="Telecommunication">Telecommunication</option>
														<option value="Medicine">Medicine</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Search</label>
													<input type="text" class="form-control" id="searchValue" name="searchValue" placeholder="Enter desired company name"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Location</label>
													<select name="compLocation" class="cs-select cs-skin-border">
														<option value="" disabled selected>Select One</option>
														<option value="CA">CA</option>
														<option value="IL">IL</option>
														<option value="NY">NY</option>
														<option value="DC">DC</option>
														<option value="TX">TX</option>
														<option value="NJ">NJ</option>
														<option value="LA">LA</option>
														<option value="VA">VA</option>
														<option value=" PA"> PA</option>
														<option value=" CA"> CA</option>
														<option value=" NY"> NY</option>
														<option value=" OR"> OR</option>
														<option value=" NJ"> NJ</option>
														<option value=" South Korea"> South Korea</option>
														<option value=" Sweden"> Sweden</option>
														<option value=" TX"> TX</option>
														<option value=" France"> France</option>
														<option value=" MA"> MA</option>
														<option value=" MI"> MI</option>
														<option value=" IL"> IL</option>
														<option value=" WA"> WA</option>
														<option value=" Tokyo"> Tokyo</option>
														<option value=" Canada"> Canada</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Submit">
											</div>
										</div>
									 </div>
									 </form>
									 <div role="tabpanel" class="tab-pane" id="packages">
									 	<div class="row">
											<div class="col-sm-12 mt">
											<form action="index.php" method="GET">
												<section>
													<label for="class">Job Role:</label>
													<select required name="jobRole" class="cs-select cs-skin-border">
														<option value="Business Analyst">Business Analyst</option>
														<option value="IT Analyst">IT Analyst</option>
														<option value="System Analyst">System Analyst</option>
														<option value="Data Analyst">Data Analyst</option>
														<option value="Application Analyst">Application Analyst</option>
														<option value="Network Engineer">Network Engineer</option>
														<option value="Cyber Security Analyst">Cyber Security Analyst</option>
													</select>
												</section>
												<section>
													<label for="class">Job Type:</label>
													<select name="jobType" class="cs-select cs-skin-border">
														<option value="" disabled selected>Select One</option>
														<option value="Full time">Full time</option>
														<option value="Part time">Part time</option>
													</select>
												</section>
											<section>
													<label for="class">Sort results by:</label>
													<select required name="date" class="cs-select cs-skin-border">
														<option value="" disabled selected>Select One</option>
														<option value="postDate">Post Date</option>
														<option value="deadline">Deadline</option>
													</select>
											</section>
											<div class="input-field">
												<label for="from">Min Experience</label>
												<input type="text" class="form-control" name='minExp' id="minExp" placeholder="Enter minimum required experience"/>
											</div>	
												<section>
													<label for="class">Minimum required GPA:</label>
													<select id="minGPA" name="minGPA" class="cs-select cs-skin-border">
														<option value="0" disabled selected>Select One</option>
														<option value="2.5">2.5</option>
														<option value="3">3</option>
														<option value="3.3">3.3</option>
														<option value="3.5">3.5</option>
													</select>
												</section>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Submit">
												</div>
											</form>
												</div>
											</div>
										</div>
									 </div>
									</div>
								</div>
							</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
								<?php //candidate 
								$qualification = $_GET['candQualification'];
								if($qualification != NULL){
								   $experience = $_GET['candExperience'];
								   $gpa = $_GET['candGPA'];
								   $skills = $_GET['skills'];								   
									switch($gpa){
										default: {
											$gpaHigh = 0;
											$gpaLow = 4;	
										} 
									   case "gpa_1": {
										   $gpaHigh = 4;
										   $gpaLow = 0;
										}break;
									   case "gpa_2": {
										   $gpaHigh = 3;
										   $gpaLow = 2.5;
										}break;
									   case "gpa_3": {
										   $gpaHigh = 3.5;
										   $gpaLow = 3;
										}break;
									   case "gpa_4": {
										   $gpaHigh = 4;
										   $gpaLow = 3.5;
										}break;
									   }
									switch($experience){
										default: {
											$expHigh = 1000;
											$expLow = 0;	
										} break;
									   case "exp_1": {
										   $expHigh = 1000;
										   $expLow = 0;
										}break;		
									   case "exp_2": {
										   $expHigh = 12;
										   $expLow = 0;
										}break;
									   case "exp_3": {
										   $expHigh = 36;
										   $expLow = 12;
										}break;
									   case "exp_4": {
										   $expHigh = 60;
										   $expLow = 36;
										}break;
										case "exp_5": {
										   $expHigh = 1000;
										   $expLow = 60;
										}break;
									   }
										$candquery = "SELECT DISTINCT c.candId, c.candName, c.candLocation, c.candGPA, c.candExpMonths, c.candQualification,s.candSkill
														From [Jobseeker.Candidate] c, [Jobseeker.Candidate_Skills] s
														WHERE c.candId = s.candId AND c.candQualification='$qualification' AND s.candSkill LIKE '%$skills%' AND (c.candGPA >= $gpaLow AND c.candGPA <= $gpaHigh) AND  (c.candExpMonths >= $expLow AND c.candExpMonths <= $expHigh) ORDER BY s.candSkill;";										
										$result = sqlsrv_query($con,$candquery);
										$output .= '  
										   <table class="table">
											  <tr>
												<th width="max-content">Name</th>
												<th width="max-content">Location</th>
												<th width="max-content">GPA</th>
												<th width="max-content">Experience in Months</th>												
												<th width="max-content">Qualification</th>
												<th width="max-content">Candidate Skills</th>
											  </tr>';
										while($row = sqlsrv_fetch_array($result)){  
											$output .= '  
												<tr>    
												 <td width="max-content">'.$row["candName"].'</td>   
												 <td width="max-content">'.$row["candLocation"].'</td>
												 <td width="max-content">'.$row["candGPA"].'</td>
												 <td width="max-content">'.$row["candExpMonths"].'</td>
												 <td width="max-content">'.$row["candQualification"].'</td>
												 <td width="max-content">'.$row["candSkill"].'</td>
												</tr>  
												';  
												}
												$output .= "</table></div>"; 
												//echo $candquery;
												echo $output;
												if($result == NULL)
													echo "No results found";
										}
								?>
								<?php //company
								$industry=$_GET['industry'];
									if($industry != NULL){
										if($industry == 'Any')
											$industry = '';
										?><h3 top = "10px"><b>Results:</b></h3>
										<?php
										$searchValue=$_GET['searchValue'];	
										$compLocation=$_GET['compLocation'];
										if($compLocation == NULL)
											$compLocation="";
										$companyQuery = "SELECT compName, industry, compLocation, noOfEmployees, compDesc 
																FROM [Jobseeker.Company]
																WHERE industry = '".$industry."' AND compLocation LIKE '%".$compLocation."%' AND compName LIKE '%".$searchValue."%' ;";
										$result = sqlsrv_query($con,$companyQuery);
										$output .= '  
											   <table class="table">
												  <tr>
													<th width="max-content">Name</th>
													<th width="max-content">Company Industry</th>
													<th width="max-content">Company Location</th>
													<th width="max-content">Number of Employees</th>
													<th width="max-content">Description</th>
												  </tr>';
										while($row = sqlsrv_fetch_array($result)){  
												$output .= '  
													<tr>    
														 <td width="max-content">'.$row["compName"].'</td>   
														 <td width="max-content">'.$row["compLocation"].'</td>
														 <td width="max-content">'.$row["industry"].'</td>
														 <td width="max-content">'.$row["noOfEmployees"].'</td>
														 <td width="max-content">'.$row["compDesc"].'</td> 
													</tr>
													';  
													}  
													$output .= "</table></div>";
													//echo $companyQuery;
													echo $output;
										}
										?>
								<?php //job
								$jobRole = $_GET['jobRole'];
								if($jobRole != NULL){
										?><h3 top = "50px"><b>Results:</b></h3>
										<?php
										$jobType = $_GET['jobType'];
										if($jobType == NULL)
											$jobType="Full Time";
										$sortBy = $_GET['date'];
										$minGPA = $_GET['minGPA'];
										if($minGPA == NULL)
											$minGPA=0;
										$minExp = $_GET['minExp'];
										if($minExp == NULL)
											$minExp=0;
										$jobQuery = "SELECT j.jType, j.jRole, j.postDate, j.deadline, j.reqDocs, j.salary, j.minGPA, j.minExp, j.salary, c.compName
														FROM [Jobseeker.Job] j, [Jobseeker.Company] c
														WHERE j.compId = c.compId AND j.jType = '$jobType' AND j.jRole = '$jobRole' AND j.minGPA >= $minGPA AND j.minExp >= $minExp ORDER BY '$sortBy' ASC;";
										//echo $jobQuery;
										$result = sqlsrv_query($con,$jobQuery);
										$output .= '<table class="table">
													  <tr>
														<th width="max-content">Job Role</th>
														<th width="max-content">Job Type</th>
														<th width="max-content">Salary</th>
														<th width="max-content">Minimum Required GPA</th>
														<th width="max-content">Required Docs</th>
														<th width="max-content">Company Name</th>
													  </tr>';
										while($row = sqlsrv_fetch_array($result)){  
												$output .= '  
													<tr>    
														 <td width="max-content">'.$row["jRole"].'</td>   
														 <td width="max-content">'.$row["jType"].'</td>   
														 <td width="max-content">'.$row["salary"].'</td>   
														 <td width="max-content">'.$row["minGPA"].'</td>
														 <td width="max-content">'.$row["reqDocs"].'</td>
														 <td width="max-content">'.$row["compName"].'</td>
													</tr>  
													';  
													} 
													$output .= "</table></div>"; 
												echo $output;
										}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END fh5co-page -->
	</div>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	</body>
</html>
