<?php

class Pages{
    public function __construct($pages){
        foreach ($pages as $value){
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/SGA-2.4.2/' . $value);
        }

    }
}