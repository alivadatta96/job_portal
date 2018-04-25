<?php
set_time_limit(0);
ini_set('memory_limit', '-1');
include("membersonly.inc.php");
date_default_timezone_set('Asia/Kolkata');
$dttm=date('d-m-Y H:i:s a');
$acnm=$_REQUEST['acnm'];
$acnm2=$_REQUEST['acnm2'];
$sct=$_REQUEST['sct'];
$sct2=$_REQUEST['sct2'];
$bnm=$_REQUEST[bnm];
$bnm2=$_REQUEST['bnm2'];
$q="";
$q2="";
$bthnm="";
$bthnm2="";
for($tb=0;$tb<count($bnm);$tb++)
{
    if($tb==0)
    {
        $bthnm="sl= ".$bnm[$tb];
    }
    else
    {
        $bthnm.=" or sl= ".$bnm[$tb];
    }
}
for($tb2=0;$tb2<count($bnm2);$tb2++)
{
    if($tb2==0)
    {
        $bthnm2="sl= ".$bnm2[$tb2];
    }
    else
    {
        $bthnm2.=" or sl= ".$bnm2[$tb2];
    }
}

if($bthnm!="")
{
	$q="and ( $bthnm )";
}
if($bthnm2!="")
{
	$q2="and ( $bthnm2 )";
}

if($sct=="" or $sct==0)
{
	$p="and scd!='0'";
}
else
{
	$p="and scd='$sct'";
}

if($sct2=="" or $sct2==0)
{
	$p1="and scd!='0'";
}
else
{
	$p1="and scd='$sct2'";
}


$val=array();
$query = "SELECT * FROM main_dmatc where acd='$acnm' ".$p.$q;
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$bnm=$row['lbl'];
	
	$ltln=$row['ltln'];
    $sl=$row['sl'];
    $a=$bnm."@".$ltln."@".$sl;
    array_push($val,$a);
}

$val2=array();
$query = "SELECT * FROM main_dmatc where acd='$acnm2' ".$p1.$q2;
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$bnm=$row['lbl'];

	$ltln=$row['ltln'];
    $sl=$row['sl'];
    $a=$bnm."@".$ltln."@".$sl;
    array_push($val2,$a);
}
//echo $query;
?>
<table class="table table-hover table-striped table-bordered" border="1">
<tr>
<td>Matrix</td>
<?
$x=0;
while($x<count($val))
{
    $tv=$val[$x];
    $etv=explode("@",$tv);
    $btnm=$etv[0];
    ?>
    <td><?=$btnm;?></td>
    <?
    $x+=1;
}

?>
</tr>
<?
$y=0;
while($y<count($val2))
{
    $z=0;
    echo "<tr>";
    $tv1=$val2[$y];
    $etv1=explode("@",$tv1);
    $btnm1=$etv1[0];
    $ltln1=$etv1[1];
    $sl1=$etv1[2];
    ?>
    <td><?=$btnm1;?></td>
    <?
    while($z<count($val))
{
 
    $tv2=$val[$z];
    $etv2=explode("@",$tv2);
    $btnm2=$etv2[0];
    $ltln2=$etv2[1];
    $sl2=$etv2[2];
    if($sl1>$sl2)
    {
    	$q1=mysql_query("SELECT * FROM main_dmat where frm='$sl2' and dto='$sl1'");
        }
        else
        {
        $q1=mysql_query("SELECT * FROM main_dmat where frm='$sl1' and dto='$sl2'");    
        }
        $mcnt=mysql_num_rows($q1);
        if($mcnt==0)
        {
            $dstn=0;
        }
        else
        {
	while($R1=mysql_fetch_array($q1))
	{

		$dstn=$R1['dstn'];	
		
	}
    }
    $fsl=$sl1."@".$sl2;
    $key=base64_encode($fsl);
    ?>
    <td>
     <?
     if($mcnt>0)
     {
     ?>   
    <a href="http://www.nadiaelection2016.in/vroute.php?key=<?=$key;?>" target="_blank"><?=$dstn;?></a>
    <?
    }
    else
    {
        echo $dstn;
    }
    ?>
    </td>
    <?
    if($y>=$z)
    {
       $dval=0; 
    }
    else
    {
        
        //$dd=getDistanceBetweenPoints($lat1, $lng1, $lat2, $lng2);
        /*
        try
        {
      $dist = GetDrivingDistance($lat1, $lng1, $lat2, $lng2);
      $dval=$dist['distance']."(".$dist['time'].")";
      } 
      catch(Exception $e)
{
    $dval=$e->getMessage();
} */
        
    }
    
    
    mysql_free_result($q1);
    $z+=1;
    }
    
    
    $y+=1;
    echo "</tr>";
}

?>
</table>