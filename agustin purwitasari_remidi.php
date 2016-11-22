<table border='1'>
	<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
</tr>
</tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
  <td>
  	<?php
  	$n1="AGUSTIN PURWITASARI" ;
  	echo $n1;
  	?>
  	</td>
  	<td>
  	<?php
  	$sA = substr_count($n1,"A") ;
  	echo $sA;
  	?>
  	</td>
  	  <td>
  	<?php
  	$sE = substr_count($n1,"E") ;
  	echo $sE
  	?>
  	</td>
  	  <td>
  	<?php
  	 $sI = substr_count($n1,"I") ;
  	 echo $sI
  	?>
  	</td>
  	  <td>
  	<?php
  	 $sU = substr_count($n1,"U") ;
  	 echo $sU
  	?>
  	</td>
  	  <td>
  	<?php
  	 $sO = substr_count($n1,"O") ;
  	 echo $sO
  	?>
  	</td>
  </tr>
  </table>