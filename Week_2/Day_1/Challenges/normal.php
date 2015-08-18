<!-- 
	Using everything you have learned and some googling 

	without using an array of months, find all the months that begin with "J"

	- Display the Month Number, Month Name, and how many characters are in that Month Name

	For example:
		7 - July - 4


 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
	<?php

		// code goes here ...
		for ($m=1; $m<=12; $m++) {
		    $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
			if( $month[0]=="J"){
			 $length = strlen($month);
			 echo $m . "-" . $month . "-" . $length . "<br />";
			}
	    }

	?>
</p>
</body>
</html>