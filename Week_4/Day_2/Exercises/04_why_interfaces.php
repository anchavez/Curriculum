<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * So we want to create a feature that allows you to store your movies in our 'cloud'.
         *
         * We want to make sure that you can find and catalog your movies correctly, so we
         * would like to give users the ability to provide a description of these movies.
         *
         * We want users to also see any products they have ordered on the same page.
         *
         * Create a class called CloudMovieFile that also implements the Describable interface.  Use your imagination on
         * how this should describe itself.  Create an instance of Cloud movie.  Now create a Clothing object and a
         * Television object from the classes you built in the previous exercise.  Put these 3 objects in an array
         * names $customerItems.
         *
         * Create a new class called ItemDescriber.  Item describer should contain a method called
         * outputDescription.  This method should take an object that implements the Describable interface
         * as a parameter.  If the parameter does not implement the Describable interface, throw an exception
         * Otherwise, the outputDescription method should printout the description of the object that is passed in.
         *
         * @see  http://php.net/manual/en/language.operators.type.php
         *
         * For each object in the array, use the ItemDescriber to print out the description of all of your Describable
         * objects.
         *
         * Note that we can treat anything that wants to implment describable exactly the same, whether it is a
         * Product or a CloudMovieFile.  You could even create a Person class that implements Describable and
         * run it through the ItemDescriber method.
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
   
        interface Describable {
          public function provideDescription();        
        }
        
        class ItemDescriber {
          public function outputDescription($Describable){
          if ($Describable instanceof Describable){
              return $Describable->provideDescription();
          }else{
             throw new exception('Does not implement the describable interface');   
           }
          }
        }
          
          
          abstract class Product implements Describable {
        
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
            throw new exception('is empty');
            }
            else{ 
              return $this->name;
            }
          }
          public function clenbrand(){
           if (empty($this->brand)){
             throw new exception('is bad');
          } 
           else{ 
             return $this->brand;
             }
          }
          public function cleanprice(){
            if (empty($this->price)){
              throw new exception('is free');
            }
            else { 
              return $this->price;
            }
          }
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


     class CloudMovieFile implements Describable{
          protected $name;
          protected $gender;
          protected $price;
        
        public function __construct($name, $gender, $price){
          $this->name = $name;
          $this->gender = $gender;
          $this->price = $price;
        }
        public function provideDescription(){
          
          return 'My movie ' .  $this->name  . ' is like im doing this ' .  $this->gender  . ' and it cost ' . $this->price;
        
        }
     }
      $movieCloud = new CloudMovieFile('Anthony', 'action', 1000);
     
      
      
      
      $TV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100inch");  
      $clothing = new Clothing("Headband", "Nikee", 80, "large", "magenta", "headgear", "neutral");
      $customerItems = new ItemDescriber();
      $items = array($movieCloud, $TV, $clothing);
      
      
      foreach ($items as $item){
       try{
          $ItemDe = new ItemDescriber();
       } 
       echo $customerItems->outputDescription($item);
      }
       catch(Exception $E){
           echo $E->getmessage();
       }
   
   
   
    ?>
    </p>
  </body>
</html>