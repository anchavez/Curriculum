<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <h1>Color my food</h1>
      <br />
        <?php
        /**
        * I want to color code my fruits, vegtables and everything else is junk using color codes
        * Create an if/else if/else to accomplish this task
        */
       
        // food you are looking up
        $food = 'orange';

        // Fruits
        if($food == "grape" || $food == "lemon" || $food == "orange"  || $food == "banana"){
          $style = '#FF2424'; // redish color
        }
        // vegetables
        else if($food == "tomato" || $food == "carrot" || $food == "pumpkin"  || $food == "lettuce"){
          $style = '#4AFF4A'; // greenish color
        }
        // junk
        else{
          $style = '#966524'; // brown like poo
        }

        ?>
       <p style="color: <?=$style?>">
         <?= $food ?>
       </p>
	</body>
</html>