<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                // Display the first 6 even numbers greater than 12 using a for loop
                $pollo= 1; 
                for($i=12; $i>=12;$i=$i+2){
                   if ($pollo<7){
                        echo $i . "<br />";
                   } else {
                       break;
                   }
                    $pollo++; 
                    
                } 
                    //for($i = 13; $i<=24; $++){
                       // if ($i % 2 == 0){
                            //echo 'even';
                        //} else{
                            //"odd';
                           // }"
                        
                        
                    
        
            ?>

        </p>
	</body>
</html>