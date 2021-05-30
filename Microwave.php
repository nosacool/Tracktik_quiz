<?php
require_once('SharedLogic.php');

Class Microwave extends SharedLogic {

/**
 * Sets Type to be 'microwave' [ElectronicItem::types] and Sets allowed number of Extras to be 0
 */
public function __construct()
 {
   $this->setType('microwave'); // Sets the type to 'microwave'
   $this->setAllowedNumberOfExtras(0);
 }

}



?>