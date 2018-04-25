<?
$reqlevel=1;
include 'ck.php';


?>
<table border="1" align="center" width="800px">
<tr>
<th align="center" width="5%">Sl.</th>
<th align="center" width="5%">Name</th>
<th align="center" width="5%">Designation</th>
<th align="center" width="20%">Contact</th>
<th align="center" width="10%">Datetime</th>
<th align="center" width="10%">Qualification</th>
<th align="center" width="10%">Status</th>
<th align="center" width="10%">Action</th>
</tr>
<?

		
 
$f=0;
$select=mysql_query("select * from job_app where Status like 0");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
		 $Jobid=$r1['Jobid'];
          $Appid=$r1['Appid'];		 
		  $Datetime=$r1['Datetime']; 
		  $Status=$r1['Status'];
		  $Action=$r1['Action'];
	if($f%2==0)
	{
		$color="#2FDCC1";

		}
		else
		{
			$color="#9BFC6E";
		}
 $select1=mysql_query("select * from org_loc_vac where Sl='$Jobid'");
      while($r2=mysql_fetch_array($select1))   
	 {	
      $Designation=$r2['Designation'];
	 }
	

	 $select6=mysql_query("select * from main_signup where Username='$Appid'");
      while($r7=mysql_fetch_array($select6))   
	 {	
 $Name=$r7['Name'];
$Contact=$r7['Contact']; 
	 
	 }
		$select3=mysql_query("select * from stud_qualy where Studid='$Appid'");
      while($r4=mysql_fetch_array($select3))   
	 {	
      $Qualification=$r4['Qualification'];
	 	 $select4=mysql_query("select * from qualification");
      while($r5=mysql_fetch_array($select4))   
	 {
		 
		  
		   $Qualification=$r5['Qualification'];
	 }
	 }
	 }
	
	
	 ?>
<tr bgcolor="<?=$color;?>">
<td ><?=$f;?></td>
<td ><?=$Name;?></td>
<td ><?=$Designation;?></td>
<td ><?=$Contact;?></td>
<td ><?=$Datetime;?></td>
<td ><?=$Qualification;?></td>
<td ><?=$Status;?></td>
<td ><a href="app1.php?Appid=<?=$Appid;?>" title="Shortlisted">Shortlisted</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="app2.php?Sl=<?=$Sid;?>" title="Rejected">Rejected</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="app3.php?Sl=<?=$Sid;?>" title="Selected">Selected</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
	 
	 </table>
	
	