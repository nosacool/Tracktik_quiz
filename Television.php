<?php
require_once('ElectronicItem.php');
require_once('ElectronicItems.php');
require_once('AdditionalFunctions_interface.php');

Class Television extends ElectronicItem implements AdditionalFunctions{

private $extras = array();
private $numOfExtras = 0 ;

public function __construct()
 {

   $this->setType('television');
 }

public function maxExtras(){
            return false; // Has not maxed out number of extras allowed so can proceed to add extras.
}

public function addExtras(ElectronicItem $extra){
    if(!$this->maxExtras()){
        $this->extras[] = $extra;
        $this->price = $this->price + $extra->getPrice();
        $this->numOfExtras = $this->getTotalNumOfExtraItems();
        return true;
    }
    throw new Exception("Exceeded Limit of Extras", 1);
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