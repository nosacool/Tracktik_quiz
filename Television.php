<?php

require_once('SharedLogic.php');

Class Television extends SharedLogic {
/**
 * Sets Type to be 'television' [ElectronicItem::types]
 */
public function __construct()
 {
   
   $this->setType('television'); //setting the type to be a television on initialization
   
 }


}



?>