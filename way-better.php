<?php


function orderPizza($pizzatype, $clientName) 
{
    $pizzaPrice = getPrice($pizzatype);
    $address = getAddress($clientName);

    echo $message = 
    "Creating new order... <br>"
    . "A {$pizzatype} pizza should be sent to  {$clientName}.<br>"
    . "The address: {$address}.<br>"
    . "The bill is €{$pizzaPrice}.<br>"
    . "Order finished.<br><br>";
}

function getAddress($clientName)
{
    if ($clientName == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($clientName == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($clientName == 'students') {
        $address = 'BeCode office';
    }
    
    return $address;
}

function getPrice($pizzaType)
{
    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } elseif ($pizzaType == 'golden') {
        $cost = 100;
    } elseif ($pizzaType == 'calzone') {
        $cost = 10;
    } elseif ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    
    return $cost;
}

function placeAllOrders()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

placeAllOrders();