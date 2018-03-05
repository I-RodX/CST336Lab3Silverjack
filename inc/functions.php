<?php
    $suits=array("daimonds","clubs","hearts", "spades");
    $cardValues=array("1","2","3","4","5","6","7","8","9","10","11","12","13");
    $deck = array();
    foreach($suits as $suit){
        foreach($cardValues as $cardValue){
            $deck[] = array("cardValue"=>$cardValue,"suit"=>$suit);
        }
    }
   
    function shuffleDeck(){
        global $deck;
        shuffle($deck);
    }
    
    function drawCard(){
        global $deck;
        $card = array_shift($deck);
        
        return $card;
    }
    
?>