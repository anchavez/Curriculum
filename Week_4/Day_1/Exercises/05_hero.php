<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * It's time to create a hero to dispatch these pesky monsters.
     *
     * Copy your code from the previous exercise.
     *
     * Add a SETTER method to your LivingThing class named "setHealth" that lets you update the value
     * of the "health" property.
     *
     * Now, create a NEW class "Hero" that EXTENDS the LivingThing class.
     *
     * Add a method to the Hero class named "attack" that takes as a parameter a LivingThing object.
     * The method should do three things:
     * 1. Reduce the LivingThing object's health by a random value between 0 and 10.
     * 2. Reduce the hero's health by a random value between 0 and 10.
     * 3. Print out how much damage the monster and hero did to each other.
     *
     * For help generating random numbers:
     * @see http://php.net/manual/en/function.mt-rand.php
     *
     * Give the Hero class another method named "fight" that takes as a parameter an array of LivingThing objects
     * and does the following:
     *  - For each LivingThing object in the array, call the "attack" method so the hero can attack the monster.
     *     - But, don't attack if the LivingThing is already dead!
     *  - Repeat the process until all the monsters or the hero is dead.
     *
     * Finally, you will need to create your hero object with the name "hero". Give them 100 health and a
     * name of your choice.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////
     class LivingThing { 
    protected $name;   
    protected $health;

    public function isAlive() {
      return ($this->health > 0);
    }
    public function __construct($name, $health) {
        $this->name = $name;
        $this->health = $health;

    }
    public function getName() {
        return $this->name;
    }
    public function getHealth() {
        return $this->health;
    }
    public function setHealth($newHealth) {
        $this->health = $newHealth;
    }
}

     
     
    class Hero extends LivingThing {
        public function attack($monster) {
           $damagetoHero = rand(0, 10);
           $this->health =  $this->health - $damagetoHero;
           $damagetoMonster = rand(0, 10);
           $monster->setHealth($monster->getHealth() - $damagetoMonster);
           echo "{$this->name} took {$damagetoHero} damage. {$this->name} has {$this->health} health! <br />";
           echo "{$monster->getName()} took {$damagetoMonster} damage. {$monster->getName()} has {$monster->getHealth()} health! <br />";
        }
        public function fight($monsters) {
            foreach ($monsters as $monster) {
                while ($this->isAlive() && $monster->isAlive()) {
                $this->attack($monster);
                    }
                }
            }
        }
    $hero = new Hero('Chuck', 100);
    $rat = new LivingThing ('rat', 5);
    $goblin = new LivingThing ('goblin', 30);
    $ogre = new LivingThing ('ogre', 50);
    
    $monsters = array($rat, $goblin, $ogre);

    echo "<h3>A hero emerges!</h3>";

    echo "<p>The noble {$hero->getName()} has vowed to defeat the monsters and save the realm.</p>";
    echo "<p>Will they be victorious?</p>";

    $hero->fight($monsters);

    if ($hero->isAlive()) {
        echo "<p>The hero {$hero->getName()} prevailed!</p>";
    }
    else {
        echo "<p>{$hero->getName()} was bested by the monsters. We are doomed.</p>";
    }

    ?>

</p>

</body>
</html>