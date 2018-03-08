<?php
   
    $deck = array();
  
   
    function shuffleDeck(){
        global $deck;
        shuffle($deck);
    }
    
    function drawCard(){
        global $deck;
        $card = array_shift($deck);
        echo $card['cardValue']." of ". $card['suit'];
    }
    
    function setup(){
        global $deck;
        $suits=array("daimonds","clubs","hearts", "spades");
        $cardValues=array("1","2","3","4","5","6","7","8","9","10","11","12","13");
         
        foreach($suits as $suit){
            foreach($cardValues as $cardValue){
                $deck[] = array("cardValue"=>$cardValue,"suit"=>$suit);
            }
        }
        
        shuffleDeck($deck);
    }
    
?>