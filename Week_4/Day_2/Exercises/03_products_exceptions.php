<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?
        /**
         * OVERVIEW:
         * So our boss is now happy that he can see the descriptions in a consistent manner.
         * However, he does not like the idea that the description still prints out even if
         * we don't provide all of the necessary information.  He also wants the color
         * field to consist of only a specific list of colors so that customers can search
         * by color.  He also hates the inconsitent formats of the price.  Sometimes they
         * have numbers only, sometimes they have $, etc.
         *
         * INSTRUCTIONS:
         * 1. Let's do some validation in the provideDescriptionForProductType.  First, Instead
         * of accessing our properties directly, let's create getter functions for them and
         * access our properties in the provideDescriptionForProductType using these getters.
         * If these values are empty, let's throw an exception with the message.
         * 'Empty value found';
         *
         * 2. Now, let's add some additional validation to a few of our accessors.  Let's only
         * red, blue, green, black, white, yellow to be valid colors.  If our color
         * is not one of these colors, let's throw an Exception.
         *
         * 3. In our price getter, let's throw an Exception if it has any non-numeric characters
         * in it (like the word dollars).  PHP has a function is_numeric($value) that
         * determines if the string is a valid number.  If it is not a number, throw
         * an exception with the message 'invalid number';
         *
         * 4. Now create the following objects:
         *
         * Clothing Objects:
         *
         * Name: Button Down Shirt
         * Price: $29.88
         * Brand: J Peterman
         * Color: Eye-piercingly bright red
         * Type: Shirt
         * Gender: Male
         *
         * Name: Headband
         * Price: 9 dollars
         * Brand: Nikee
         * Color: Magenta
         * Type: Headgear
         * Gender: Neutral
         *
         * Television Objects:
         *
         * Name: Giant TV
         * Price: $3900.90
         * Brand: Kramerica
         * DisplayType: LED
         * Size: 100 inches
         *
         * Name: Child Television
         * Price: 299
         * Brand: ChildCorp
         * DisplayType: Plasma
         * Size: 23x33
         *
         * 5. Echo out the descriptions.  If the description is valid display it.  If there
         * is an exception, display 'There was an error determining the description to this
         * product'.  Remember how to handle exceptions with try catch.
         *
         * @see http://php.net/manual/en/language.exceptions.php
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
    
        interface Describable {
          public function provideDescription();        
        }
        
        
          abstract class Product implements Describable(){
        
              protected $name;
              protected $brand;
              protected $price;
              
              public function __construct($name, $brand,$price){
                $this->name = $name;
                $this->brand = $brand;
                $this->price = $price;
            
              }
          
          abstract function provideDescriptionForProductType();
          
          public function provideDescription(){
            return $this->provideDescriptionForProductType;
          } 
          
          public function cleanname() {
            if (empty($this->name)){
            throw new Exception('is empty');
            }
            else{ 
              return $this->name
            }
          }
          public function clenbrand(){
           if (empty($this->brand)){
             throw new Exception('is bad')
          } 
           else{ 
             return $this->brand
             }
          public function cleanprice(){
            if (empty($this->price)){
              throw new exception('is free')
            }
            if { 
              return $this->price
            }
            else{
                throw new Exception('this option');
            }
          class Clothing extends Product {
            protected $size;
            protected $color;
            protected $type;
            protected $gender;
         
          public function __construct($name, $brand, $price, $size, $color, $type, $gender){
            parent::__construct($name, $brand, $price);
          $this->size = $size;
          $this->color = $color;
          $this->type = $type;
          $this->gender = $gender;
          }
          public function getSize() {
        if(empty($this->size)) {
            throw new Exception("No size entered");
        } else {
            return $this->size;
        }
    }

    public function getColor() {
        $colorArray = array ('red', 'blue', 'green', 'black', 'white', 'yellow');
        if (in_array()
        if((($this->color == "red") || ($this->color == "blue") || ($this->color == "green") || ($this->color == "black") || ($this->color == "white") || ($this->color == "yellow")) == false) {
            throw new Exception("Invalid color entered");
        } else {
            return $this->color;
        }
    }

    public function getType() {
        if(empty($this->type)) {
            throw new Exception("No type entered");
        } else {
            return $this->type;
        }
    }

    public function getGender() {
        if(empty($this->gender)) {
            throw new Exception("No gender entered");
        } else {
            return $this->gender;
        }
    }

    public function provideDescriptionForProductType() {
        try {
            return 'This is an article of clothing. It is a ' .  $this->getBrand() . ' ' . $this->getColor() . ' ' . $this->getGender() . ' ' . $this->getType() . ' of size ' . $this->getSize() .  '. It costs ' . $this->getPrice() . '.';
        } catch(Exception $e) {
            echo 'There was an error determining the description to this product <br />' . $e->getMessage() . '<br />';
        }
    }

}

class Television extends Product {
    protected $displaytype;
    protected $size;

    public function __construct($name, $brand, $price, $displaytype, $size) {
        parent::__construct($name, $brand, $price);

        $this->displaytype = $displaytype;
        $this->size = $size;
    }

    public function getDisplayType() {
        if(empty($this->displaytype)) {
            throw new Exception("No display type entered");
        } else {
            return $this->displaytype;
        }
    }

    public function getSize() {
        if(empty($this->size)) {
            throw new Exception("No size entered");
        } else {
            return $this->size;
        }
    }

    public function provideDescriptionForProductType() {
        return 'This is a ' . $this->getSize() . ' ' . $this->getBrand() . ' ' . $this->getDisplayType . ' Television';
    }
}

//$HawaiianShirt = new Product("Hawaiian Shirt", "Hang 10", "23.99", "Shirt With Flowers And Red in Color.  Size is Large.  Men Only.");
//$FourkTelevision = new Product("4k Television", "TVs Unlimited", "100.00", "Small Televison (19 inches).  Has resolution of 4k" );
//$ThreeDTV = new Product("3D TV", "LV", "100 dollars and 99 cents", "Does not come with glasses");
//$HawaiianSkirt = new Product("Hawaiian Skirt", "Hang 10", "25", "Womens skirt...size 6");
$ButtonDownShirt = new Clothing("Button Down Shirt", "J Peterson", 29.88, "medium", "Eye-piercingly bright red", "shirt", "male");
$HeadBand = new Clothing("Headband", "Nikee", "nine dollars", "large", "magenta", "headgear", "neutral");
$GiantTV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100in");
$ChildTelevision = new Television("Child Television", "ChildCorp", "299", "Plasma", "23x33");

try {
    echo $ButtonDownShirt->provideDescription();
    echo "<br />";
}
catch(Exception $E) {
    echo 'There was an error determining the description to this product <br />' .  $e->getMessage();
    echo "<br />";
}

try {
    echo $HeadBand->provideDescription();
    echo "<br />";
}catch(Exception $e) {
    echo 'There was an error determining the description to this product <br />' . $e->getMessage();
    echo "<br />";
}

try {
    echo $GiantTV->provideDescription();
    echo "<br />";
}catch(Exception $e) {
    echo 'There was an error determining the description to this product <br />' . $e->getMessage();
    echo "<br />";
}

try {
    echo $ChildTelevision->provideDescription();
    echo "<br />";
}catch(Exception $e) {
    echo 'There was an error determining the description to this product <br />' . $e->getMessage();
    echo "<br />";
}

          
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    </p>
  </body>
</html>