<?php
require_once('SharedLogic.php');

Class Microwave extends SharedLogic {


public function __construct()
 {
   $this->setType('microwave'); // Sets the type to 'microwave'
   $this->setAllowedNumberOfExtras(0);
 }

}



?>