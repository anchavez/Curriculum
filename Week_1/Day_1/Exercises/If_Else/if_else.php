<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <!-- 
            You can rent a car if you are 25 years of age or older put an if statement in
            to render "You are old enough to rent a car! Yay!" when you are old enough
          -->
          <?php
          $me = 25;
          if ($me >= 25) {
            echo "You are old enough to rent a car.";
          }
          else {
            echo "You are not old enough to rent a car.";
          }
          
        
        
        ?>
        </p>
	</body>
</html>