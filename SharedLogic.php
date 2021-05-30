<?php

require_once('ElectronicItem.php');
require_once('ElectronicItems.php');

abstract Class SharedLogic extends ElectronicItem{

    private $allowedNumOfExtras ;
    private $extras = array();
    private $numOfExtras = 0 ;

    /**
 * maxExtras limits the number of extras an electronic item can have
 * @return boolean If it return True it means it has reached the maximum amount of extras else If False, It can still accept more extras
 */
    public function maxExtras(){
        if($this->getType() == 'television'){
            return false;
        }
        else{
            if(($this->numOfExtras < $this->allowedNumOfExtras)){
                return false; // Has not maxed out number of extras allowed so can proceed to add extras.
            }
            return true;
        }
    }

    protected function setAllowedNumberOfExtras($allowedNumOfExtras = null){
        $this->allowedNumOfExtras = $allowedNumOfExtras;
    }
/**
 * Adds an extra to [$extras] array and also updates the total price of the console with the price of the extra 
 * @param ElectronicItem $extra 
 * @throws Exception If Extras Limit has been exceeded.
 * @return boolean If it return True it means it has reached the maximum amount of extras else If False, It can still accept more extras
 */
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
    
    /**
 * This function gets the total number of extra in the [$extras] array 
 * @return integer Total number of extras associated with the Console
 */
    private function getTotalNumOfExtraItems(){
       
        return sizeof($this->extras);
    }
}

?>