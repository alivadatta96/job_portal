<?
include 'ck.php';  
echo $user_currently_loged;
?>
  <html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-1.7.2.min.js"></script>
    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">
	<script>
$('.chosen-select').chosen(

);
</script>
<script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>


    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>
    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
 <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
        $(document).ready(function(){
           var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
             });
			 </script>
			 <script>
			 var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}
</script>
<style type="text/css">
.slidecontainer {
    width: 50%; /* Width of the outside container */
}

/* The slider itself */
.slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 100%; /* Full-width */
    height: 25px; /* Specified height */
    background: #d3d3d3; /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
    opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */ 
.slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
}
</style>

</head>
   <body>

   <form name="f1" method="post" action="jobval.php">
  <td align="right">Location:</td>
   <select name="bnm[]" class="chosen-select" multiple id="bnm" style="width:350px;">

		<option value="">ALL</option>
 <?
	 $select=mysql_query("select * from location") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $Location=$r1['Location'];
		  $Locsl=$r1['Sl'];
		  ?>
<option value="<?=$Locsl;?>"><?=$Location;?></option>
	<?
	 }
	 ?>
    </select>

	<br>
	<td align="right">Qualification:</td>
	<select name="bnm1[]" class="chosen-select" multiple id="bnm1"  style="width:350px;">

		<option value="">--select--</option>
 <?
  $select3=mysql_query("select * from qualification");
      while($r4=mysql_fetch_array($select3))   
	 {
		 
		  $Sl=$r4['Sl'];
		   $Qualification1=$r4['Qualification'];
		  
	 $select1=mysql_query("select * from stud_qualy where Studid='$user_currently_loged'") or die(mysql_error());;
      while($r2=mysql_fetch_array($select1))   
	 {
		  $Qualification=$r2['Qualification'];
	   
		  ?>
<option value="<?=$Sl;?>" <?=($Sl==$Qualification)? 'selected':''?>><?=$Qualification1;?></option>
	<?
	 }}
	 ?>
	
	
		
    </select>
	<br>
	
	<html>
	
	<body>
	
	<h1>Salary:</h1>
	<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
</div>
	</body>
	</html>
	<input type="submit" value=" Search">
	 
	</form>
</body>
 </html>
 