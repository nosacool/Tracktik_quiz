<?php
require_once('SharedLogic.php');

Class Console extends SharedLogic {  // Extends Base Class and Implements Interphase AdditionalFunctions


/**
 * Sets Type to be 'console' [ElectronicItem::types] and Sets allowed number of Extras to be 4
 */
public function __construct()
 {

   $this->setType('console');
   $this->setAllowedNumberOfExtras(4);
 }

}



?>