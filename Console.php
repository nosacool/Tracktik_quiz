<?php
require_once('ElectronicItem.php');
require_once('ElectronicItems.php');
require_once('AdditionalFunctions_interface.php');

Class Console extends ElectronicItem implements AdditionalFunctions{  // Extends Base Class and Implements Interphase AdditionalFunctions

private $extras = array();
private $numOfExtras = 0 ;
const AllowedNumOfExtras = 4; // Console is set to only allow 4 extras 

public function __construct()
 {

   $this->setType('console');
 }

public function maxExtras(){ // Function returns false if it has not maxed out and true if it has maxed out on extras
        if(($this->numOfExtras < self::AllowedNumOfExtras)){
            return false; // Has not maxed out number of extras allowed so can proceed to add extras.
        }
        return true;  //// Has maxed out number of extras allowed so cannot proceed to add extras.
}

public function addExtras(ElectronicItem $extra){ // Function is used to add an extra to an Electronic item 
    if(!$this->maxExtras()){ // if false then proceed 
        $this->extras[] = $extra; // add an extra
        $this->price = $this->price + $extra->getPrice(); // update the price 
        $this->numOfExtras = $this->getTotalNumOfExtraItems(); // update number of extras available
        return true; 
    }
    throw new Exception("Exceeded Limit of Extras", 1); // else throw Exceeded limit exception
    return false;
}


private function getTotalNumOfExtraItems(){
   
    return sizeof($this->extras);
}

public function getTotalPriceOfExtras(){
    $totalPrice = 0;
    foreach($this->extras as $extra){
       $totalPrice +=$extra->getPrice();
    }
    return $totalPrice;
}


}



?>