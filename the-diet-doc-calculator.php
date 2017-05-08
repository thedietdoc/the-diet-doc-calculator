<?php
/**
 * Plugin Name:       The Diet Doc Dohicky Calculators
 * Plugin URI:        https://www.babyibexrule.com
 * Description:       Macro Nutrient Calculator provided by Dr. Joe Klmemczewski and his trusty sidekick
 * Version:           1.1.0
 * Author:            Brian Zooxinator
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       the-diet-doc-calculator
 */

include "model/Calculator.php";

global $imgPath;;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

class TheDietDocCalculator {

    function fix_jquery() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('fix-jquery', plugin_dir_url(__FILE__) . 'assets/js/fix-jquery.js', array('jquery'), null, false);

    }
    function enqueue_styles() {

        wp_enqueue_style( 'material-icons-style',plugin_dir_url(__FILE__) . 'assets/css/material-icons.css');
        wp_enqueue_style( 'font-awesom-style', plugin_dir_url(__FILE__) . 'assets/css/font-awesome.css');

        //wp_enqueue_style( 'demo-style', plugin_dir_url(__FILE__) . 'assets/css/demo.css');
        wp_enqueue_style( 'material-bootstrap-wizard-style', plugin_dir_url(__FILE__) . 'assets/css/material-bootstrap-wizard.css');
        wp_enqueue_style( 'material-bootstrap-wizard-style', plugin_dir_url(__FILE__) . 'assets/css/bootstrap-theme.css');
        //wp_enqueue_style( 'material-validation-style', plugin_dir_url(__FILE__) . 'assets/css/jquery.material.form.min.css');
        //wp_enqueue_style( 'material-style', plugin_dir_url(__FILE__) . 'assets/css/material.min.css');
        //wp_enqueue_style( 'material-colors-style', plugin_dir_url(__FILE__) . 'assets/css/material.colors.css');
        //wp_enqueue_style( 'material-stepper-style', plugin_dir_url(__FILE__) . 'assets/css/stepper.min.css');
        wp_enqueue_style( 'calculator-style', plugin_dir_url(__FILE__) . 'assets/css/calculator.css');
    }
    function enqueue_scripts() {




            //wp_enqueue_script('fix-jquery', plugin_dir_url(__FILE__) . 'assets/js/bootstrap.min.js', array('jquery'), null, true);


            //wp_enqueue_script('additional-methods-script', plugin_dir_url(__FILE__) . 'assets/js/additional-methods.min.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('validation-script', plugin_dir_url(__FILE__) . 'assets/js/jquery.material.form.min.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('material-script', plugin_dir_url(__FILE__) . 'assets/js/material.min.js', array(), null, true);
            //wp_enqueue_script('stepper-script', plugin_dir_url(__FILE__) . 'assets/js/stepper.min.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('calc-script', plugin_dir_url(__FILE__) . 'assets/js/stepper-nonlinear.js', array('fix-jquery'), null, true);
            wp_enqueue_script('jquery-bootstrap-script', plugin_dir_url(__FILE__) . 'assets/js/jquery.bootstrap.js', array('fix-jquery'), null, true);
            wp_enqueue_script('dd-script', plugin_dir_url(__FILE__) . 'assets/js/dd-calc.js', array('fix-jquery'), null, true);
            wp_enqueue_script('wizard-script', plugin_dir_url(__FILE__) . 'assets/js/material-bootstrap-wizard.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('jquery-validation-script', plugin_dir_url(__FILE__) . 'assets/js/jquery.validate.min.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('validate-script', plugin_dir_url(__FILE__) . 'assets/js/jquery.validate.min.js', array('fix-jquery'), null, true);
            //wp_enqueue_script('validation-script', plugin_dir_url(__FILE__) . 'assets/js/modernizr-custom.js', array('fix-jquery'), null, true);


    }

    function dd_custom_head() {
        $this->fix_jquery();
        echo '<script type="text/javascript">var ajaxurl = \'' . admin_url('admin-ajax.php') . '\';</script>';
        echo '<script type="text/javascript">var pluginUrl = \'' . plugin_dir_url( __FILE__ ) . '\';</script>';
    }

    public function createCalculator($attrs)    {
        return include_once("inc/boot-wizard.php");
    }

    public function createTestCalculator($attrs)    {
        return include_once("test_calculator.php");
    }

    function dd_calculate() {

        $calculator = new Calculator($_POST);

        $heightFeet = $_POST['height'];


        $gender = $_POST['gender'];
        //$age = $_POST['age'];

        $weight1 = $calculator->profile->weightLbs;
        $bodyType = $_POST['bodyType'];
        $duration = $_POST['duration'];
        $frequency = $_POST['frequency'];
        $intensity = $_POST['intensity'];
        $meals = $_POST['meals'];
        $eatOut = $_POST['eatOut'];
        $goal = $_POST['goal'];
        $persona = $_POST['persona'];
        if($persona == null) {
            $persona = 0;
        }
        $macros = $calculator->calculate();
        //
        //$height = $calculator->profile->heightCm;
        //$weight = $calculator->profile->weightKg;
        $calories = $macros->harrisBendict;

        /* if($gender == "male"){
             $calories = ($weight*10)+($height*6.25)-(5*$calculator->profile->age)+5;
         } else {
             $calories = (($weight*10)+($height*6.25)-(2*$calculator->profile->age))-161;
         }*/

        $goalAdjustment = 0;
        if($gender == 0) {
            if($goal == 0) { // lose fat
                // nothing
            } else if($goal == 1) { // gain muscle
                $goalAdjustment = 0.4;
            } else if($goal == 2) { // gain muscle & lose fat
                $goalAdjustment = 0.1;
            } else if($goal == 3) { // maintain
                $goalAdjustment =0.25;
            }
        }else{
            if($goal == 0) { // lose fat
                // nothing
                $goalAdjustment = -0.10;
            } else if($goal == 1) {
                //$goalAdjustment = 0.3;
                $goalAdjustment = 0.20;
            } else if($goal == 2) {
                //$goalAdjustment = 0.05;
                $goalAdjustment = -0.05;
            } else if($goal == 3) {
                $goalAdjustment = 0.0;
            }
        }
        $result = $calories + ($calories * $goalAdjustment);


        $btAdjustment = 0;
        if($gender == 0) {
            if($bodyType == 0) { // lose fat
                // nothing
                $btAdjustment = 0.2;
            } else if($bodyType == 1) { // gain muscle
                $btAdjustment = 0.1;
            } else if($bodyType == 2) { // gain muscle & lose fat
                $btAdjustment = 0.0;
            }
        }else{
            if($bodyType == 0) { // lose fat
                // nothing
                $btAdjustment = 0.10;
            } else if($bodyType == 1) {
                //$goalAdjustment = 0.3;
                $btAdjustment = 0.0;
            } else if($bodyType == 2) {
                //$goalAdjustment = 0.05;
                $btAdjustment = -0.1;
            }
        }
        $result = $result + ($calories * $btAdjustment);


        $frequencyAdjustment = 0;
        if($frequency == 0) { // lose fat
            // nothing
        } else if($frequency == 1) { // 1-2
            $frequencyAdjustment = 0.02;
        } else if($frequency == 2) { //3-4
            $frequencyAdjustment = 0.04;
        } else if($frequency == 3) { // 5-7
            $frequencyAdjustment = 0.06;
        }
        $result += ($result * $frequencyAdjustment);

        $durationAdjustment = 0;
        if($gender == 0) {
            if($duration == 0) { // 0-30
                $durationAdjustment = 0.02;
            } else if($duration == 1) { // 31-60
                $durationAdjustment = 0.04;
            } else if($duration == 2) { // over hour
                $durationAdjustment = 0.06;
            }
        }else{
            if($duration == 0) { // 0-30
                $durationAdjustment = 0.01;
            } else if($duration == 1) { // 31-60
                $durationAdjustment = 0.02;
            } else if($duration == 2) { // over hour
                $durationAdjustment = 0.03;
            }
        }
        $result += ($result * $durationAdjustment);

        $mealsAdjustment = 0;
        if($gender == 0) {
            if($meals == 1) { // 31-60
                $mealsAdjustment = -0.20;
            } else if($meals == 2) { // over hour
                $mealsAdjustment = -0.20;
            } else if($meals == 3) { // over hour
                $mealsAdjustment = -0.05;
            } else if($meals == 4) { // over hour
                $mealsAdjustment = -0.05;
            } else if($meals == 5) { // over hour
                // nothing
            } else if($meals == 6) { // 31-60
                // nothing
            } else if($meals == 7) { // over hour
                $mealsAdjustment = 0.10;
            } else if($meals == 8) { // over hour
                $mealsAdjustment = 0.10;
            } else if($meals == 9) { // over hour
                $mealsAdjustment = 0.10;
            } else if($meals == 10) { // over hour
                $mealsAdjustment = 0.10;
            }

        }else{
            if($meals == 1) { // 31-60
                $mealsAdjustment = -0.25;
            } else if($meals == 2) { // over hour
                $mealsAdjustment = -0.25;
            } else if($meals == 3) { // over hour
                $mealsAdjustment = -0.10;
            } else if($meals == 4) { // over hour
                $mealsAdjustment = -0.10;
            } else if($meals == 5) { // over hour
                // nothing
            } else if($meals == 6) { // 31-60
                // nothing
            } else if($meals == 7) { // over hour
                $mealsAdjustment = 0.05;
            } else if($meals == 8) { // over hour
                $mealsAdjustment = 0.05;
            } else if($meals == 9) { // over hour
                $mealsAdjustment = 0.05;
            } else if($meals == 10) { // over hour
                $mealsAdjustment = 0.05;
            }
        }
        $result += ($result * $mealsAdjustment);



        $eatOutAdjustment = 0;
        if($eatOut == 0) { // 0-30
            // nothing
        } else if($eatOut == 1) { // 31-60
            $eatOutAdjustment = -0.025;
        } else if($eatOut == 2) { // over hour
            $eatOutAdjustment = -0.05;
        } else if($eatOut == 3) { // over hour
            $eatOutAdjustment = -0.10;
        }
        $result += ($result * $eatOutAdjustment);


        $proteinGoalAdjustment = 0;
        if($goal == 0) { // loase fat
            $proteinGoalAdjustment = 0.75;
        } else if($goal == 1) { //gain muscle
            $proteinGoalAdjustment = .85;
        } else if($goal == 2) { // lose and gain

            $proteinGoalAdjustment = 0.70;
        } else if($goal == 3) { // maintain
            $proteinGoalAdjustment = 0.65;
        }

        $personaAdjustment = 0;
        if($gender == 0) {
            if($persona == 0) { // 0-30
                $personaAdjustment = 0;
            } else if($persona == 1) { // 31-60
                $personaAdjustment = 0.15;
            } else if($persona == 2) { // over hour
                $personaAdjustment = 0.10;
            }
        }else{
            if($persona == 0) { // 0-30
                $personaAdjustment = 0.0;
            } else if($persona == 1) { // 31-60
                $personaAdjustment = 0.10;
            } else if($persona == 2) { // over hour
                $personaAdjustment = 0.05;
            }
        }
        $result += ($result * $personaAdjustment);


        $proteinIntensityAdjustment = 0;
        if($intensity == 2) {
            $proteinIntensityAdjustment = 0.05;
        } else if($intensity == 3) {
            $proteinIntensityAdjustment = 0.10;
        }

        $proteinBodyTypeAdjustment = 0;
        if($bodyType == 0) { //Ectomorph
            $proteinBodyTypeAdjustment = 0.10;
        } else if($bodyType == 1) { //Mesomorph
            $proteinBodyTypeAdjustment = 0.05;
        }

        $personaProteinAdjusted = 0;

        $personaProteinAdjustment = 0;
        $personaFatAdjustment = 0;
        $proteinIntensityAdjusted = 0;
        $proteinBodyTypeAdjusted = 0;

        if($persona == 0) { // 0-30
            $personaProteinAdjustment = 0;
            $personaFatAdjustment=0;
        } else if($persona == 1) { // 31-60
            $personaProteinAdjustment = 0.10;
            $personaFatAdjustment = 0.10;
        } else if($persona == 2) { // over hour
            $personaProteinAdjustment = 0.20;
            $personaFatAdjustment = 0.05;
        }



        $proteinGoalAdjusted = round($weight1 * $proteinGoalAdjustment);
        if($proteinIntensityAdjustment == 0) {
            $proteinIntensityAdjusted = $proteinGoalAdjusted;
        } else {
            $proteinIntensityAdjusted = $proteinGoalAdjusted + ($proteinGoalAdjusted * $proteinIntensityAdjustment);
        }
        $proteinIntensityAdjusted = round($proteinIntensityAdjusted);

        if($personaProteinAdjustment == 0) {
            $personaProteinAdjusted = $proteinIntensityAdjusted;
        } else {
            $personaProteinAdjusted = $proteinIntensityAdjusted + ($proteinIntensityAdjusted * $personaProteinAdjustment);
        }
        $personaProteinAdjusted = round($personaProteinAdjusted);



        if($proteinBodyTypeAdjustment == 0) {
            $proteinBodyTypeAdjusted = $personaProteinAdjusted;
        } else {
            $proteinBodyTypeAdjusted = $personaProteinAdjusted + ($personaProteinAdjusted * $proteinBodyTypeAdjustment);
        }
        $proteinBodyTypeAdjusted = round($proteinBodyTypeAdjusted);

        $protein = $proteinBodyTypeAdjusted;

        $fatGoalAdjusted = 0;
        $fatGoalAdjustment = 0;
        if($goal == 0) {
            $fatGoalAdjustment = 0.20;
        } else if($goal == 1) {
            $fatGoalAdjustment = 0.30;
        } else if($goal == 2) {
            $fatGoalAdjustment = 0.2225;
        } else if($goal == 3) {
            $fatGoalAdjustment = 0.25;
        }

        $fatGoalAdjusted = round(($result * $fatGoalAdjustment));

        $fatBodyTypeAdjusted = 0;
        $fatBodyTypeAdjustment = 0;
        $personaFatAdjusted = 0;
        if($bodyType == 0) { //Ectomorph
            $fatBodyTypeAdjustment = 0.05;
        } else if($bodyType == 2) { //Mesomorph
            $fatBodyTypeAdjustment = -0.05;
        }
        if($fatBodyTypeAdjustment == 0) {
            $fatBodyTypeAdjusted = round($fatGoalAdjusted);
        }else {
            $fatBodyTypeAdjusted = round($fatGoalAdjusted + ($fatGoalAdjusted * $fatBodyTypeAdjustment));
        }

        if($personaFatAdjustment == 0) {
            $personaFatAdjusted = round($fatBodyTypeAdjusted);
        }else {
            $personaFatAdjusted = round($fatBodyTypeAdjusted + ($fatBodyTypeAdjusted * $personaFatAdjustment));
        }

        $fat = round($personaFatAdjusted / 9);

        $proteinCals = round($protein * 4);
        $fatCals = round($fat * 9);
        $remainderCals = round($result - ($proteinCals + $fatCals));
        $carbs = $remainderCals /4;

        // NON AGGREGATE
        //$result = $calories + ($calories * $goalAdjustment) + ($calories * $intensityAdjustment) + ($calories * $durationAdjustment);
        //$carbCalories = $result - (($protein * 4) + $fat);
        //$protein = $protein / 4;
        $imgPath = plugin_dir_url( __FILE__ ) . "/assets/img";
        $variables = array("imgPath"=>$this->imgPath, "calories"=>round($result), "protein"=>round($protein), "carbs"=>round($carbs), "fat"=>round($fat));

        ob_start();
        require "inc/macro_label.php";
        $page = ob_get_clean();


        $arr = array("measurement" => $calculator->profile->measurement,"page" => $page,"personaFatAdjustment" => $personaFatAdjustment,"personaFatAdjusted" => $personaFatAdjusted,"personaProteinAdjusted" => $personaProteinAdjusted,"personaProteinAdjustment" => $personaProteinAdjustment,"personaAdjustment" => $personaAdjustment,"fatCals" => $fatCals,
            "proteinCals" => $proteinCals,"fatBodyTypeAdjusted" => $fatBodyTypeAdjusted,"fatGoalAdjusted" => $fatGoalAdjusted,
            "proteinBodyTypeAdjusted" => $proteinBodyTypeAdjusted,"proteinIntensityAdjusted" => $proteinIntensityAdjusted,
            "proteinGoalAdjusted" => $proteinGoalAdjusted,"remainderCals" => $remainderCals,"mealsAdjustment" => $mealsAdjustment,
            "eatOutAdjustment" => $eatOutAdjustment,"fatBodyTypeAdjustment" => $fatBodyTypeAdjustment,
            "proteinBodyTypeAdjustment" => $proteinBodyTypeAdjustment, "weightLbs" => $weight1,
            "proteinGoalAdjustment" => $proteinGoalAdjustment, "fatGoalAdjustment" => $fatGoalAdjustment,
            "proteinIntensityAdjustment" => $proteinIntensityAdjustment,  "frequencyAdjustment" => $frequencyAdjustment,
            "durationAdjustment" => $durationAdjustment, "goalAdjustment" => $goalAdjustment, "height" => round($calculator->profile->heightCm), "weight" => $calculator->profile->weightKg, "harrisBenedict" => round($calories), "calories" => round($result), "protein" => round($protein), "carbs" => round($carbs), "fat" => round($fat));
        //$arr = array("goalAdjustment" => $goalAdjustment, "intensityAdjustment" => $intensityAdjustment,"height" => $height, "weight" => $weight, "harrisBenedict" => $calories, "calories" => $result, "protein" => "150", "carbs" => "200", "fat" => "40");




        status_header(200);
        echo wp_json_encode($arr);
        //wp_die("Server received '$data' from your browser.");
        wp_die();
        // }
    }


}


$bmiCalculatorPlugin = new TheDietDocCalculator();

//add_filter( 'wp_default_scripts', array($bmiCalculatorPlugin,'dequeue_jquery_migrate' ));
//add_action('init',  array($bmiCalculatorPlugin,'register_styles' ));
//add_action( 'wp_enqueue_scripts',  array($bmiCalculatorPlugin,'enqueue_scripts' ));

add_action( 'wp_ajax_dd_calculate', array($bmiCalculatorPlugin,'dd_calculate'));
add_action( 'wp_ajax_nopriv_dd_calculate', array($bmiCalculatorPlugin,'dd_calculate' ));
add_action( 'admin_post_dd_calculate', array($bmiCalculatorPlugin, 'prefix_admin_dd_calculate') );
add_action('wp_head', array($bmiCalculatorPlugin, 'dd_custom_head'));
// wp_print_styles are at the bottom of the header
add_action('wp_print_styles', array($bmiCalculatorPlugin, 'enqueue_styles'));
add_action("wp_footer", array($bmiCalculatorPlugin, 'enqueue_scripts'));

add_shortcode('dd_calc', array($bmiCalculatorPlugin, 'createCalculator'));
add_shortcode('dd_test_calc', array($bmiCalculatorPlugin, 'createTestCalculator'));
//add_action( 'template_redirect',  array($bmiCalculatorPlugin,'wpse12535_redirect_sample'));