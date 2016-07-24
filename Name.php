<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Name
 *
 * @author Inzynier
 */
class Name extends Connector{
    //put your code here
    public $_name= NULL;
    public function __construct($name) {
        $this->_name=$name;
}
}