<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php
                  do {
                      $t = rand(1,7); 
                       echo $t . "<br />";
                  } while( $t!=7);
                  
          	    // code goes here ...

            ?>
        </p>
	</body>
</html>