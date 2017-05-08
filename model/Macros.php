<?php

/**
 * Created by PhpStorm.
 * User: ZooxPC
 * Date: 4/15/2017
 * Time: 4:03 PM
 */
class Macros {

    public $calories;
    public $protein;
    public $carbs;
    public $fat;

    public $extra = array();
    public $harrisBendict;
    public $height;
    public $weight;


    public function getExtra($searchBy) {
        foreach ($this->extra as $key => $value) {
            if($searchBy == $key) return $value;
        }
    }
    public function addExtra($key, $value) {
        array_merge($this->extra, array($key => $value));
    }
}