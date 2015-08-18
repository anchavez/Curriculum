<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array(
               array('numbers' => range(0, 100))
             );
            foreach ($inputs as $ArrayNum){
                foreach ($ArrayNum as $numbersArray){
                    foreach ($numbersArray as $num){
                        
                        if($num% 3 === 0 && $num%5 ==0){
                        echo "$num = FizzBuzz!";
                        echo "<br />";
                           }
                        elseif($num%5 == 0){
                        echo "$num = Buzz!";
                        echo "<br />";
                        }
                        elseif($num%3 == 0){
                            echo "$num = FizzBuzz!";
                            echo "<br />";
                        
                        
                        
                        
                        //print $num  % 3 == 0 ? "yes 3 $num" : "no 3 "$num";
                        //print "\n";
                        
                    }
                   }
        //die(var_dump($ArrayNum))
        //print $inputs[0]["numbers"][3];
        }
            }
        ?>

    </p>

    </body>
</html>
