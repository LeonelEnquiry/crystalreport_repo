<?php
require_once('../library.php');
require_once('../access/RestrictAgencyStaff.php');

$supervisor=$identity->first_name.' '.$identity->family_name;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CC FR/DR Reports</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />


<style type="text/css">

	.row{margin-bottom:15px;
	}
	p{
	padding-right: .5in;	
	}
	h3 {
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color: #23BF4C;
	}
	h2 {
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color: #23BF4C;
	}
	
	
a {
	font-size: 14px;		
	font-weight: 600;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	}
	
</style>

<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
	
<body>

<div id="mainContent" style="width:1150px !important;">
<?php include_once('HeaderAgency.php'); ?>
<p class="heading1">FR & DR Reports</p>	
<main class="row">
<div class="col-md-8">
      
  <p>  </p>
  <p>  Hover over the titles on the right to see a sample below.  Click on the name to open.</p>
  <img src="../Images/RPTFROperatingSummary.png" alt="" width="630" height="395" id="view"/>    </div>
	 
	<div class="col-md-4" id="reports">
	
		
<section>
        <h4> Daily Reports</h4>
        <ul>
		<li><a href="http://testcitycoach.solutionsfortransit.net/VACReports/VACFRMilesHrsDetails" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTFRMiHrsDetails.png',1)" onMouseOut="MM_swapImgRestore()">Fixed Route Miles & Hours Details</a></li>	
		<li><a href="http://localhost/VACReports/VACDRMilesHrsDetails" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTDRMiHrsDetails.png',1)" onMouseOut="MM_swapImgRestore()">Special Services Miles & Hours Details</a></li>	
       	<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACCCDMilesHrsDetails" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTCCDMiHrsDetails.png',1)" onMouseOut="MM_swapImgRestore()">City Coach Direct Miles & Hours Details</a></li>
		
		</ul>
</section>
		
<section>
        <h4> Monthly Reports</h4>
        <ul>
        <li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACFRTotalMiHrsbyDay" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTFRTotalMiHrsbyDay.png',1)" onMouseOut="MM_swapImgRestore()">Fixed Route Total Miles & Hours by Day</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACDRTotalMiHrsbyDay" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTDRTotalMiHrsbyDay.png',1)" onMouseOut="MM_swapImgRestore()">Special Services Total Miles & Hours by Day</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACCCDTotalMiHrsbyDay" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTCCDTotalMiHrsbyDay.png',1)" onMouseOut="MM_swapImgRestore()">City Coach Total Miles & Hours by Day</a></li>
	<br>		
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACFROperatingSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTFROperatingSummary.png',1)" onMouseOut="MM_swapImgRestore()">Fixed Route Operating Summary</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACFROperatingSummarybyRoute" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTFROperatingSummarybyRoute.png',1)" onMouseOut="MM_swapImgRestore()">Fixed Route Operating Summary by Route</a></li>	
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACDROperatingSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTDROperatingSummary.png',1)" onMouseOut="MM_swapImgRestore()">Special Services Operating Summary</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACCCDOperatingSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTCCDOperatingSummary.png',1)" onMouseOut="MM_swapImgRestore()">City Coach Direct Operating Summary</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACDRCOperatingSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTDRCOperatingSummary.png',1)" onMouseOut="MM_swapImgRestore()">DR Combined Operating Summary</a></li>	
			
	<br>		
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACRidershipSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTRidershipSummary.png',1)" onMouseOut="MM_swapImgRestore()">Ridership Summary prior to 7/31/22</a></li>
		<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACRidershipSummaryBlocks" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTRidershipSummaryBlocks.png',1)" onMouseOut="MM_swapImgRestore()">Ridership Summary 8/1/22 to Present</a></li>	
		</ul>
</section>
	<section>
        <h4> CH Finance Reports</h4>
        <ul>
	<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACFRCCDOperatingSummary" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTFRCCDOperatingSummary.png',1)" onMouseOut="MM_swapImgRestore()">Fixed Route/CCD Operating Summary</a></li>
		
		</ul>
</section>
<section>
        <h4> Operations Reports</h4>
        <ul>
	<li><a href="http://citycoach.solutionsfortransit.net/VACReports/VACTypicalDay" target="_new" onMouseOver="MM_swapImage('view','','../images/RPTTypicalDay.png',1)" onMouseOut="MM_swapImgRestore()">"Typical Day" per Schedule</a></li>
		
		</ul>
</section>		
			
     
	</body>
</html>