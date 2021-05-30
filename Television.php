<?php

require_once('SharedLogic.php');

Class Television extends SharedLogic {
/**
 * Sets Type to be 'television' [ElectronicItem::types] and Sets allowed number of Extras to be null
 * 
 * 
 * @return boolean If it return True it means it has reached the maximum amount of extras else If False, It can still accept more extras
 */
public function __construct()
 {
   
   $this->setType('television'); //setting the type to be a television on initialization
   
 }


}



?>