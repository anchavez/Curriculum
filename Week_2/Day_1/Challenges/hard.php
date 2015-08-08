<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php
               for($i=1;$>=100;$i++){
                if ($i %3 !=0 ){
                    $$i += 3 - ($i % 3);
                }
               }                
              

            ?>
        </p>
	</body>
</html>