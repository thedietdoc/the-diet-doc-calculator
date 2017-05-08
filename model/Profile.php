<?php

/**
 * Created by PhpStorm.
 * User: ZooxPC
 * Date: 4/15/2017
 * Time: 3:15 PM
 */
class Profile {
    public $gender;
    public $measurement;
    public $age;
    public $heightFeet;
    public $heightInches;
    public $heightCm;
    public $weightLbs;
    public $weightKg;
    public $bodyType;
    public $persona;
    public $activity;
    public $intensity;
    public $duration;
    public $goal;
    public $meals;
    public $eatOut;

    public function __construct($form) {
        $this->gender = $form["gender"];
        $this->age = $form["age"];
        $this->measurement = $form["imperialMeasurement"];
        if(isset($form["tester"])) {
            $this->measurement = 1; //imperial
            $this->heightFeet = $form['heightF'];
            $this->heightInches = $form['heightI'];
            $this->weightLbs = $form['weight'];
            $this->heightCm = round((($this->heightFeet * 12) + $this->heightInches) / 0.393701);
            $this->weightKg = round($this->weightLbs * 0.45359237);
        } else {
            if($this->isImperial()) {
                $this->measurement = "IMPERIAL";
                $this->heightFeet = $form['height'];
                $this->heightInches = $form['heightInches'];
                $this->weightLbs = $form["weight"];

                $this->heightCm = round((($this->heightFeet * 12) + $this->heightInches) / 0.393701);
                $this->weightKg = round($this->weightLbs * 0.45359237);

            } else {
                $this->measurement = "METRIC";
                $this->heightCm = $form['height'];
                $this->weightKg = $form["weight"];

                $inches = $this->heightCm/2.54;
                $this->heightFeet = intval($inches/12);
                $this->heightInches = $inches%12;
                $this->weightLbs = round($this->weightKg * 2.20462);

            }
        }

        $this->bodyType = $form['bodyType'];
        $this->persona = $form["persona"];
        $this->activity = $form['activity'];
        $this->intensity = $form['intensity'];
        $this->duration = $form['duration'];
        $this->goal = $form['goal'];
        $this->meals = $form['meals'];
        $this->eatOut = $form['eatOut'];
    }

    public function isImperial() {
        return $this->measurement == "1";
    }

    public function isMale() {
        return $this->gender == 0;
    }
}