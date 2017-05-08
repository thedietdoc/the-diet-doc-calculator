<?php

/**
 * Created by PhpStorm.
 * User: ZooxPC
 * Date: 4/15/2017
 * Time: 3:41 PM
 */

include "Profile.php";
include "Macros.php";

class Calculator {

    public $actions = array("Actions in Calculator");
    public $profile;

    public function __construct($form) {
        $this->profile = new Profile($form);
    }

    public function calculate() {
        $macros = new Macros();
        self::addAction("Calculating Harris Bendict");
        $macros->harrisBendict = self::harrisBendict();
        self::addAction("Harris/Bendict: " + $macros->harrisBendict);
        $macros->calories = 1111;

        return $macros;
    }

    private function harrisBendict() {

        $sum = ($this->profile->weightKg*10)+($this->profile->heightCm*6.25);
        if(self::isMale()) {
            return $sum -(5*$this->profile->age)+5;
        } else {
            return $sum -(2*$this->profile->age)-161;
        }
    }

    private function addAction($message) {
        array_push($this->actions, $message);
    }

    private function isMale() {
        return $this->profile->isMale();
    }
}
