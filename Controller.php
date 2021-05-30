<?php

require_once('SharedLogic.php');

Class Controller extends SharedLogic {

/**
 * Sets Type to be 'controller' [ElectronicItem::types] and Sets allowed number of Extras to be 0
 */
public function __construct()
 {
   $this->setType('controller'); //Sets type to be Controller as soon as object is initialized.
   $this->setAllowedNumberOfExtras(0); 
}


}



?>