<html>
      <head><title>Afficher le tableau multiplication</title>
<style type="text/css">

.tableStyle{
background:#dbe5f1;
border:1px solid black;
width:600px;
margin:40px;
}
.tableStyle tr td{
border:1px solid black;
text-align:center;
}
</style>
</head>
</html>
<?php
function cl($i,$j)
 {
$r="background-color:chocolate";
$c="background-color:coral";

$k="background-color:khaki";
   if($i==0 ){
      return $r;
      }elseif($i%2==1){

     return $c;
         }else{
	   return $k;
	  }
 }
 echo"<h2> Tableau  de multiplication </h2>";
echo"<table  class='tableStyle'>";
 for($i=0;$i<9;$i++)
 {

  $r="background-color:chocolate";
$g="background-color:coral";
    echo"<tr>";
    for($j=0;$j<9;$j++)
   {
       $k=$i+1;
	   $l=$j+1;
	   $p=$l*$k;
     if( $j==0 and $i==0)
	   {
	   echo"<td style='$r;'> &nbsp  </td>";
       }elseif( $j==0 )
       {

	     echo "<td style='$r;'><b>$k</b></td>";
	   }else{
	         $c=cl($i,$j);
              if($i==$j or $i==0)
			  {

       echo"<td style='$c;'><b>$p</b></td>";
	       	     }else{
			     echo"<td style='$c;'>$p</td>";
			     }
	        }
	}

     echo"</tr>";

 }
echo"</table>";


?>
