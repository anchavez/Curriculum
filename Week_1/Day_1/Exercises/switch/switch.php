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
        * Create a switch to accomplish this task
        */
       
        // food you are looking up
        $food = 'tomato';

        switch ($food) {
          // fruits
          case 'grape':
          case 'lemon':
          case 'orange':
          case 'banana':
            $style = '#FF2424'; // redish color
            break;

          // vegetables
          case 'tomato':
          case 'carrot':
          case 'pumpkin':
          case 'lettuce':
            $style = '#4AFF4A'; // greenish color
            break;
          
          // junk
          default:
            $style = '#966524'; // brown like poo
            break;
        }

        ?>
       <p style="color: <?=$style?>">
         <?= $food ?>
       </p>
	</body>
</html>