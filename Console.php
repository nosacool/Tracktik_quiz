<?php
require_once('SharedLogic.php');

Class Console extends SharedLogic {  // Extends Base Class and Implements Interphase AdditionalFunctions

public function __construct()
 {

   $this->setType('console');
   $this->setAllowedNumberOfExtras(4);
 }

}



?>