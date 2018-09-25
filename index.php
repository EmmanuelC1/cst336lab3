<?php
    function setup() 
    {
// Players take a seat at a table.
    seatPlayers();
// Dealer is selected.
    selectDealer();
// Cards taken out of box.
    takeCardsOutOfBox();
// Dealer shuffles the cards.
    shuffleCards();
// Player to the right of the deal cuts the cards.
    cutCards();
// Dealer deals cards according to the rules, starting to the left, and around to him
    deal();
    }
    
    function seatPlayers() 
    {
        return true;
    }
    
    function selectDealer() 
    {
        return true;
    }
    
    function takeCardsOutOfBox() 
    {
        return true;
    }
    
    function shuffleCards() 
    {
        return true;
    }
    
    function cutCards() 
    {
        return true;
    }
    
    function deal() 
    {
        return true;
    }
?>