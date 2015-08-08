<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <p>
        <?php
        /**
         * you have array and lets say we got this data from the DB so we cant change it when getting it from the DB 
         * so writing the correct syntax needed to fix each teacher's name
         */
        $teachers = [
            "Josph Backer",
            "Aric Schwartzenegger",
            "James Dallas"
        ];
        $teachers[0]= "anthony";
        $teachers[1]= "anthony";
        $teachers[2]= "anthony";
        print_r($teachers);
        var_dump ($teachers)
      ?>
      </p>
	</body>
</html>