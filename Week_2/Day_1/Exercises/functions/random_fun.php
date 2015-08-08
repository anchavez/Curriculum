<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

            /*
             * Take the following sentence and "encrypt" it.
             * The "algorithm" is the following:
             *
             *
             */
            // Create an array with 100 random letters
            //
            $rr = array ();
            for ($i=0; $i<=100;$i=$i+1){
            $str = 'abcdef';
            $shuffled = str_shuffle($str);    
            array_push($rr, $shuffled);
            }
            print_r($rr);
            
            


        ?>

    </p>

    </body>
</html>