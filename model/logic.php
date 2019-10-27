<?php 
require_once 'DataHandler.php';

class Logic {
    public function __construct() {
        $this->DataHandler = new DataHandler( "localhost", "mysql", "trailersite", "root", "");
    }

    public function __destruct() {
    }

   

}
?>