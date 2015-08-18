<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

	Expected Results

	 3, 6, 9, 12, 15, 18, etc
	 6, 12, 18, 24, 30, etc

	 Divisible by 3 = ###
	 Divisible by 6 = ###

            if($i%3 === 0){
            if($i%6 === 0){
 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php
             // <!-- 
              //for($i=1;$<=100;$i++){
              //  if ($i %3 !=0 ){
                   // $i += 3 - ($i % 3);
               // }
               //}                
              //-->
                 $divisableByThree = array();
                 $alsoDivisableBySix = array();
                 
                        for($i=1;$i<=100;$i++){
                            
                            if($i%3 === 0){
                            $divisableByThree[]= $i;  
                            }
                            
                            if($i%6 === 0){
                            array_push($alsoDivisableBySix,$i);
                            }
                        }   
                        
                        echo implode(',', $divisableByThree);
                        echo '<br />';
                        echo implode(',',$alsoDivisableBySix);
                        echo '<br /><br />';
                        echo "Divisible by 3 = " . count($divisableByThree);
                        echo '<br />';
                        echo "Divisible by 6 = " . count($alsoDivisableBySix);
            
            ?>
        </p>
	</body>
</html>