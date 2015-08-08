<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
          	// From within the PHP tags make your name render 3 different ways
          $name = "anthony castillo";
          echo $name;
          print $name;
          
          ?>
          <?= $name ?>
        </p>
	</body>
</html>