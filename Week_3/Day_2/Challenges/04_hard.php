<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
<<<<<<< HEAD
             *
              Lets bring in the deck code from the past example. (normal)
              create a function that will create a deck of cards, randomize it and then return the deck
             */

              //function createDeck() {
                //return $deck;
              //}

            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
            //function dealCards(&$deck, $number_of_cards = 0) {

            //}

            //$player = dealCards($deck,10); // player should now have 10 random cards in his hand


             //* Find the valid hashtags in this string

             //Create a function that will find the 
                //- Hashtags are alphanumeric strings ([a-zA-Z0-9]) prefixed with the hash symbol "#" 
                //- (e.g. "#keyword" is a valid hashtag and #2Words!? counts as "2Words" only)
                //- Hashtags cannot be in the middle of a words or characters (e.g. "some#word" and ".?!#word" are invalid)
                //- Hash symbols ("#") alone are not valid
                //- If a word is preceded by more than one hash symbol, only one hashtag counts (e.g. "###keyword" counts only as "keyword")
                //- Since hashtags are only alphanumeric [a-zA-Z0-9] in case (e.g. "###keyword" counts only as "keyword")
             //*
            // */
 

             $sentence = 'this #free is ##wild , .?!#word #can #young #some#word ###keyword';
                // find a php function that will turn a string into words
             
             $words = explode(' ', $sentence);
             
             function hashtagFilter(&$word){
                 if(strpos($word,'#') ===0){
                    return false;
                 }
                //   $characters = array();
                //   for ($i = 1;$i< strlen($word); $i++){
                //       if ($word[$i]!="#"){
                //           array_push($characters,$word[$i]);
                //       }
                //   }  
                    // $word = '#' . implode('',$characters);
                    // return $word;
                     
                $word = '#' . str_replace("#", "", $word);
                return $word;
                 
             }
             function badhash($word){
                 if(strpos($word, '#')!==0){
                     return $word;
                     
               //funtion cleanStart
               
               
                 }
             
                 return false;
             }

             // now that you have words, loop around them to find the valid hashtags

             // store the bad and good hashtags in their appropriate locations
             $hashtags = array('bad_hashtags' => array(), 'good_hashtags' => array());
             $hashtags['good_hashtags'] = array_filter($words, 'Hashtagfilter');
             $hashtags['bad_hashtags']=array_filter($words, 'badhash');
             var_dump($hashtags);
        ?>

    </p>

    </body>
</html>
