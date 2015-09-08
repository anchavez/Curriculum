<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Now we will add a handy method to our class.
     *
     * Copy your code from the previous exercise, then add a public method "isAlive" to the class.
     * The method should return a boolean value of true if the value of the "health" property is
     * greater than zero, otherwise it should return false.
     *
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////
     class LivingThing {
        public $name;
        public $health;
        public function isAlive(){
            if ($this->$health > 0){
                return true;
             // return ($this->health > 0);   
            }
        }
    }
    
    
    $monsters = array($rat, $goblin, $ogre);
    
    
    echo "<h3>Monsters!</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name: $monster->health</p>";
    }

    echo "<h3>Are the monsters alive?</h3>";

    foreach ($monsters as $monster) {
        echo "<p>$monster->name is " . ($monster->isAlive() ? 'alive' : 'dead') . "</p>";
    }

    ?>

</p>

</body>
</html>