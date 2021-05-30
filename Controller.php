<?php
require_once('ElectronicItem.php');
require_once('ElectronicItems.php');
require_once('AdditionalFunctions_interface.php');

Class Controller extends ElectronicItem implements AdditionalFunctions{

private $extras = array();
private $numOfExtras = 0 ;
const AllowedNumOfExtras = 0;


public function __construct()
 {
   $this->setType('controller'); //Sets type to be Controller as soon as object is initialized.
 }
/**
 *
 * @return boolean If it return True it means it has reached the maximum amount of extras else If False, It can still accept more extras
 */
public function maxExtras(){
        if(($this->numOfExtras < self::AllowedNumOfExtras)){
            return false; 
        }
        return true;  
}
// It was stated that Controllers will have no extras so the function to add extras is commented out.
/*public function addExtras(ElectronicItem $extra){
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
}*/


}



?>