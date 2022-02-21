<?php


function orderPizza($pizzatype, $clientName) 
{
    
    $pizzaPrice = calculateCosts($pizzatype);
    $address = 'unknown';

    if ($clientName == 'koen') {
        $address = 'a yacht in Antwerp';
    } 

    elseif ($clientName == 'manuele') {
        $address = 'somewhere in Belgium';
    } 

    elseif ($clientName == 'students') {
        $address = 'BeCode office';
    }

    echo $message = 
    "Creating new order... <br>"
    . "A {$pizzatype} pizza should be sent to  {$clientName}.<br>"
    . "The address: {$address}.<br>"
    . "The bill is €{$pizzaPrice}.<br>"
    . "Order finished.<br><br>";
}

function calculateCosts($pizzaType)
{
    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    }
    
    if ($pizzaType == 'golden') {
        $cost = 100;
    }

    if ($pizzaType == 'calzone') {
        $cost = 10;
    }

    if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    
    return $cost;
}

function placeOrderAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function placeOrder($confirmOrder) 
{
    if ($confirmOrder) {
        placeOrderAll();
    } 
  
}

placeOrder(true);