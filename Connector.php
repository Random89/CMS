<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connector
 *
 * @author Inzynier
 */
class Connector {

    //put your code here
    public $inscription = NULL;
    public $_number = NULL;

    public function __construct($number) {
        $this->_number=$number;
        echo 'Konstruktor działa__';
    }

    public function getinscription() {
        echo $this->_number;
        echo $inscription = "getinscription working\n";
    }

    public function setinscription() {
        echo $inscription = "plus";
    }

}
