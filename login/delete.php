<?php
include("conn.php");
$recsno=$_GET["recsno"];
$data=trim($recsno);
$ex=explode(" ",$data);
$size=sizeof($ex);
for($i=0;$i<$size;$i++) 
   {
		$id=trim($ex[$i]);
		$sql="delete from $user where id='$id'";
		$result=mysql_query($sql,$connection) or die(mysql_error());
   }
header("location: adduser.php");

?>