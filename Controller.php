<?php

require_once('SharedLogic.php');

Class Controller extends SharedLogic {


public function __construct()
 {
   $this->setType('controller'); //Sets type to be Controller as soon as object is initialized.
   $this->setAllowedNumberOfExtras(0); 
}


}



?>