<?php

require_once('SharedLogic.php');

Class Television extends SharedLogic {

public function __construct()
 {
   
   $this->setType('television'); //setting the type to be a television on initialization
   $this->setAllowedNumberOfExtras();
 }


}



?>