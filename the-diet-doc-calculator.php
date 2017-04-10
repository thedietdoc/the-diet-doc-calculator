<?php
/**
 * Plugin Name:       The Diet Doc Macronutrient Calculator
 * Plugin URI:        https://github.com/thedietdoc/the-diet-doc-calculator
 * Description:       Macro Nutrient Calculator using proprietary algorithm created by Dr. Joe Klemczewski
 * Version:           1.0.3
 * Author:            Brian Szucs
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       the-diet-doc-calculator
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

class TheDietDocCalculator {
    /*public $gender;
    public $age;
    public $height;
    public $weight;
    public $bodyType;
    public $activity;
    public $duration;
    public $intensity;
    public $goal;*/
    private function is_bot()  {
        if (!isset($_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }

        $crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
        $crawlers = explode("|", $crawlers_agents);
        foreach ($crawlers as $crawler) {
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), trim($crawler)) !== false) {
                return true;
            }
        }
        return false;
    }

    public function __construct() {
        if (!$this->is_bot()) {


            //wp_enqueue_style('mdl-styles', plugin_dir_url(__FILE__) . 'stepper.min.css');
            wp_enqueue_script('jquery-script', plugin_dir_url( __FILE__ ) . 'public/js/jquery.js', array(), null, false);
            ///wp_enqueue_script('moment-scripts', plugin_dir_url(__FILE__) . 'public/js/moment.js', array("jquery-script"), null, false);
            //wp_enqueue_script('moment-duration-format-scripts', plugin_dir_url(__FILE__) . 'public/js/moment-duration-format.js', array("moment-script"), null, false);
            //wp_enqueue_script('chosenJqueryScript', plugin_dir_url( __FILE__ ) . 'chosen/chosen.jquery.js', array(), null, true);
            wp_enqueue_script('tether-script', plugin_dir_url( __FILE__ ) . 'public/tether/js/tether.min.js', array(), null, true);
            wp_enqueue_script('bootstrap-script', plugin_dir_url(__FILE__) . 'public/bootstrap/js/bootstrap.min.js', array(), null, true);
            wp_enqueue_script('bootstrap-toggle-script', plugin_dir_url(__FILE__) . 'public/bootstrap/js/bootstrap-toggle.min.js', array(), null, true);
            wp_enqueue_script('validator-script', plugin_dir_url( __FILE__ ) . 'public/bootstrap/js/bootstrap.validator.js', array(), null, false);

            //wp_enqueue_script('mdlScript', plugin_dir_url(__FILE__) . 'material.min.js', array(), null, false);
            //wp_enqueue_script('stepperScript', plugin_dir_url(__FILE__) . 'stepper.min.js', array(), null, false);

            //wp_enqueue_script('bootstrapWizardScript', plugin_dir_url( __FILE__ ) . 'bootstrap-wizard.js', array(), null, true);

            wp_enqueue_scripts( 'wp-utils' );
            wp_enqueue_script('dd-calculator-shortcode-scripts', plugin_dir_url(__FILE__) . 'dd-calc.js', array(), null, true);

            wp_enqueue_style('bootstrap-style', plugin_dir_url(__FILE__) . 'public/bootstrap/css/bootstrap.min.css');
            wp_enqueue_style('bootstrap-toggle-style', plugin_dir_url(__FILE__) . 'public/bootstrap/css/bootstrap-toggle.min.css');
            //wp_enqueue_style('chosenStyle', plugin_dir_url(__FILE__) . 'chosen/chosen.css');
            //wp_enqueue_style('bootstrap-wizard-style', plugin_dir_url(__FILE__) . 'bootstrap-wizard.css');
            //wp_enqueue_style('bootstrap-nav-wizard-style', plugin_dir_url(__FILE__) . 'public/bootstrap/css/bootstrap.nav.wizard.css');

            wp_enqueue_style('dd-calculator-shortcode-styles', plugin_dir_url(__FILE__) . 'dd-calc.css');
            //wp_enqueue_style('mdl-styles', plugin_dir_url(__FILE__) . 'material.min.css');
            //wp_enqueue_style('mdl-icon-styles', "https://fonts.googleapis.com/icon?family=Material+Icons");
            //wp_enqueue_style('mdl-icon-styles', "https://code.getmdl.io/1.1.3/material.indigo-pink.min.css");
        }
    }


    function dd_calculate() {

        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $heightF = $_POST['heightF'];
        $heightI = $_POST['heightI'];
        $weight1 = $_POST['weight'];
        $bodyType = $_POST['bodyType'];
        $duration = $_POST['duration'];
        $activity = $_POST['activity'];
        $intensity = $_POST['intensity'];
        $meals = $_POST['meals'];
        $eatOut = $_POST['eatOut'];
        $goal = $_POST['goal'];

        $height = (int) round((($heightF * 12) + $heightI) / 0.393701);
        $weight = $weight1 * 0.45359237;

        if($gender == "male"){
            $calories = ($weight*10)+($height*6.25)-(5*$age)+5;
        } else {
            $calories = (($weight*10)+($height*6.25)-(2*$age))-161;
        }

        $goalAdjustment = 0;
        if($gender == "male") {
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
            } else if($goal == 1) {
                $goalAdjustment = 0.3;
            } else if($goal == 2) {
                $goalAdjustment = 0.05;
            } else if($goal == 3) {
                $goalAdjustment = 0.2;
            }
        }
        $result = $calories + ($calories * $goalAdjustment);

        $activityAdjustment = 0;
        if($activity == 0) { // lose fat
            // nothing
        } else if($activity == 1) { // 1-2
            $activityAdjustment = 0.02;
        } else if($activity == 2) { //3-4
            $activityAdjustment = 0.04;
        } else if($activity == 3) { // 5-7
            $activityAdjustment = 0.06;
        }
        $result += ($result * $activityAdjustment);

        $durationAdjustment = 0;
        if($gender == "male") {
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
        if($gender == "male") {
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

        $intensityAdjustment = 0;
        if($gender == "male") {
            if($intensity == 2) {
                $intensityAdjustment = 0.05;
            } else if($intensity == 3) {
                $intensityAdjustment = 0.1;
            }
        }






        // MACROS
        $protein = 0;
        $fat = 0;
        $proteinGoalAdjustment = "";
        $fatGoalAdjustment = "";

        if($goal == 0) {
            $protein = $weight1 + .73;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .73";
        } else if($goal == 1) {
            $protein = $weight1 + 1.08;
            $proteinGoalAdjustment = "Multiply weight (lbs) * 1.08";
        } else if($goal == 2) {
            $protein = $weight1 + .73;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .73";
        } else if($goal == 3) {
            $protein = $weight1 + .55;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .55";
        }

        $macroActivityAdjustment = 0;
        if($activity == 1) {
            $protein += $protein * .02;
            $macroGoalAdjustment = "Adjust Protein by .02";
        } else if($activity == 2) {
            $protein += $protein * .04;
            $macroGoalAdjustment = "Adjust Protein by .04";
        } else if($activity == 3) {
            $protein += $protein * .06;
            $macroGoalAdjustment = "Adjust Protein by .06";
        }


        $proteinIntensityAdjustment = "";
        if($intensity == 2) {
            $protein += $protein * .06;
            $proteinIntensityAdjustment = "Adjust Protein by .06";
        } else if($intensity == 3) {
            $protein += $protein * .1;
            $proteinIntensityAdjustment = "Adjust Protein by .10";
        }

        $proteinBodyTypeAdjustment = "";
        if($bodyType == 0) { //Ectomorph
            $protein += $protein * .1;
            $proteinBodyTypeAdjustment = "Multiply Protein by .10";
        } else if($bodyType == 1) { //Mesomorph
            $protein += $protein * .05;
            $proteinBodyTypeAdjustment = "Multiply Protein by .05";
        }

        if($goal == 0) {
            $fat = ($result * .20);
            $fatGoalAdjustment = "Multiply calories * .20";
        } else if($goal == 1) {
            $fat = ($result * .30);
            $fatGoalAdjustment = "Multiply calories * .30";
        } else if($goal == 2) {
            $fat = ($result * .225);
            $fatGoalAdjustment = "Multiply calories * .2225";
        } else if($goal == 3) {
            $fat = ($result * .25);
            $fatGoalAdjustment = "Multiply calories * .25";
        }
        $fatBodyTypeAdjustment = "";
        if($bodyType == 0) { //Ectomorph
            $fat += $fat * .05;
            $fatBodyTypeAdjustment = "Multiply Fat by .10";
        } else if($bodyType == 2) { //Mesomorph
            $fat += $fat * -.05;
            $fatBodyTypeAdjustment = "Multiply Fat by -.05";
        }

        // NON AGGREGATE
        //$result = $calories + ($calories * $goalAdjustment) + ($calories * $intensityAdjustment) + ($calories * $durationAdjustment);
        $carbCalories = $result - (($protein * 4) + $fat);
        //$protein = $protein / 4;
        $fat = $fat / 9;
        $carbs = $carbCalories / 4;

        $arr = array("mealsAdjustment" => $mealsAdjustment,"eatOutAdjustment" => $eatOutAdjustment,"fatBodyTypeAdjustment" => $fatBodyTypeAdjustment,"proteinBodyTypeAdjustment" => $proteinBodyTypeAdjustment, "bodyTypeProteinAdjustment" => $proteinBodyTypeAdjustment, "weightLbs" => $weight1, "proteinGoalAdjustment" => $proteinGoalAdjustment, "fatGoalAdjustment" => $fatGoalAdjustment, "proteinIntensityAdjustment" => $proteinIntensityAdjustment,  "activityAdjustment" => $activityAdjustment,"durationAdjustment" => $durationAdjustment, "goalAdjustment" => $goalAdjustment, "height" => round($height), "weight" => round($weight), "harrisBenedict" => round($calories), "calories" => round($result), "protein" => round($protein), "carbs" => round($carbs), "fat" => round($fat));
        //$arr = array("goalAdjustment" => $goalAdjustment, "intensityAdjustment" => $intensityAdjustment,"height" => $height, "weight" => $weight, "harrisBenedict" => $calories, "calories" => $result, "protein" => "150", "carbs" => "200", "fat" => "40");

        status_header(200);
        echo wp_json_encode($arr);
        //wp_die("Server received '$data' from your browser.");
        wp_die();
        // }
    }

    function dd_calculateOLD() {
        //if (isset($_POST["calculate"]) && !empty($_POST["calculate"])) {
        //echo "Calculating...";

        //$peson = json_decode($_POST);

        /* $to = "brian@zooxmusic.com";
         $subject = "Learning how to send an Email in WordPress";
         $content = "WordPress <b>knowledge<b>";

         //add_filter( 'wp_mail_content_type', 'set_html_content_type' );

         $status = wp_mail($to, $subject, $content);*/
        // Handle request then generate response using echo or leaving PHP and using HTML

        //$formData = json_decode($_POST['data']);

        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $heightF = $_POST['heightF'];
        $heightI = $_POST['heightI'];
        $weight1 = $_POST['weight'];
        $bodyType = $_POST['bodyType'];
        $duration = $_POST['duration'];
        $activity = $_POST['activity'];
        $intensity = $_POST['intensity'];
        $goal = $_POST['goal'];

        $height = (int) round((($heightF * 12) + $heightI) / 0.393701);
        $weight = $weight1 * 0.45359237;

        //$calculator = new Calculator($this->gender, $this->age, $this->height, $this->weight, $this->bodyType, $this->activity, $this->duration, $this->intensity, $this->goal);
        //$macros = $calculator.calculate();

        if($gender == "male"){
            //(10 x weight in kg) +(6.25 height in cm) -(5 x age in years) +5
            $calories = ((($weight*10)+($height*6.25))+(5*$age))+5;
        } else {
            //(10 x weight in kg) + (6.25 height in cm) - (2 x age in years) - 161
            $calories = ((($weight*10)+($height*6.25))+(2*$age))-161;
        }
        $result = $calories;

        $goalAdjustment = 0;
        if($gender == "male") {
            if($goal == 1) {
                $goalAdjustment = 0.4;
            } else if($goal == 2) {
                $goalAdjustment = 0.1;
            } else if($goal == 3) {
                $goalAdjustment =0.25;
            }
        }else{
            if($goal == 1) {
                $goalAdjustment = 0.3;
            } else if($goal == 2) {
                $goalAdjustment = 0.05;
            } else if($goal == 3) {
                $goalAdjustment = 0.2;
            }
        }



        $intensityAdjustment = 0;
        if($gender == "male") {
            if($intensity == 2) {
                $intensityAdjustment = 0.05;
            } else if($intensity == 3) {
                $intensityAdjustment = 0.1;
            }
        }


        $durationAdjustment = 0;
        if($gender == "male") {
            if($duration == 0) {
                $durationAdjustment = 0.02;
            } else if($duration == 1) {
                $durationAdjustment = 0.04;
            } else if($duration == 2) {
                $durationAdjustment = 0.06;
            }
        }else{
            if($duration == 0) {
                $durationAdjustment = 0.01;
            } else if($duration == 1) {
                $durationAdjustment = 0.02;
            } else if($duration == 2) {
                $durationAdjustment = 0.03;
            }
        }


        $bodyTypeAdjustment = 0;
        if($gender == "male") {
            if($bodyType == 0) { //Ectomorph
                $bodyTypeAdjustment = 0.1;
            } else if($bodyType == 1) { //Mesomorph
                $bodyTypeAdjustment = 0.05;
            }
        }else{
            if($bodyType == 0) { //Ectomorph
                $bodyTypeAdjustment = 0.05;
            } else if($bodyType == 2) { //Mesomorph
                $bodyTypeAdjustment = -0.05;
            }
        }

        $activityAdjustment = 0;
        if($activity == 1) {
            $activityAdjustment = 0.02;
        } else if($activity == 2) {
            $activityAdjustment = 0.04;
        } else if($activity == 3) {
            $activityAdjustment = 0.06;
        }

        $result  += ($result * $goalAdjustment);
        //$result  += ($result * $intensityAdjustment);
        $result += ($result * $durationAdjustment);
        //$result += ($bodyTypeAdjustment * $result);
        $result += ($activityAdjustment * $result);



        // MACROS
        $protein = 0;
        $fat = 0;
        $proteinGoalAdjustment = "";
        $fatGoalAdjustment = "";

        if($goal == 0) {
            $protein = $weight1 + .73;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .73";
        } else if($goal == 1) {
            $protein = $weight1 + 1.08;
            $proteinGoalAdjustment = "Multiply weight (lbs) * 1.08";
        } else if($goal == 2) {
            $protein = $weight1 + .73;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .73";
        } else if($goal == 3) {
            $protein = $weight1 + .55;
            $proteinGoalAdjustment = "Multiply weight (lbs) * .55";
        }

        $macroActivityAdjustment = 0;
        if($activity == 1) {
            $protein += $protein * .02;
            $macroGoalAdjustment = "Adjust Protein by .02";
        } else if($activity == 2) {
            $protein += $protein * .04;
            $macroGoalAdjustment = "Adjust Protein by .04";
        } else if($activity == 3) {
            $protein += $protein * .06;
            $macroGoalAdjustment = "Adjust Protein by .06";
        }


        $proteinIntensityAdjustment = "";
        if($intensity == 2) {
            $protein += $protein * .06;
            $proteinIntensityAdjustment = "Adjust Protein by .06";
        } else if($intensity == 3) {
            $protein += $protein * .1;
            $proteinIntensityAdjustment = "Adjust Protein by .10";
        }

        $proteinBodyTypeAdjustment = "";
        if($bodyType == 0) { //Ectomorph
            $protein += $protein * .1;
            $proteinBodyTypeAdjustment = "Multiply Protein by .10";
        } else if($bodyType == 1) { //Mesomorph
            $protein += $protein * .05;
            $proteinBodyTypeAdjustment = "Multiply Protein by .05";
        }

        if($goal == 0) {
            $fat = ($result * .20);
            $fatGoalAdjustment = "Multiply calories * .20";
        } else if($goal == 1) {
            $fat = ($result * .30);
            $fatGoalAdjustment = "Multiply calories * .30";
        } else if($goal == 2) {
            $fat = ($result * .225);
            $fatGoalAdjustment = "Multiply calories * .2225";
        } else if($goal == 3) {
            $fat = ($result * .25);
            $fatGoalAdjustment = "Multiply calories * .25";
        }
        $fatBodyTypeAdjustment = "";
        if($bodyType == 0) { //Ectomorph
            $fat += $fat * .05;
            $fatBodyTypeAdjustment = "Multiply Fat by .10";
        } else if($bodyType == 2) { //Mesomorph
            $fat += $fat * -.05;
            $fatBodyTypeAdjustment = "Multiply Fat by -.05";
        }

        // NON AGGREGATE
        //$result = $calories + ($calories * $goalAdjustment) + ($calories * $intensityAdjustment) + ($calories * $durationAdjustment);
        $carbCalories = $result - (($protein * 4) + $fat);
        //$protein = $protein / 4;
        $fat = $fat / 9;
        $carbs = $carbCalories / 4;

        $arr = array("fatBodyTypeAdjustment" => $fatBodyTypeAdjustment,"proteinBodyTypeAdjustment" => $proteinBodyTypeAdjustment, "bodyTypeProteinAdjustment" => $proteinBodyTypeAdjustment, "weightLbs" => $weight1, "proteinGoalAdjustment" => $proteinGoalAdjustment, "fatGoalAdjustment" => $fatGoalAdjustment, "proteinIntensityAdjustment" => $proteinIntensityAdjustment,  "activityAdjustment" => $activityAdjustment,"durationAdjustment" => $durationAdjustment, "goalAdjustment" => $goalAdjustment, "height" => round($height), "weight" => round($weight), "harrisBenedict" => round($calories), "calories" => round($result), "protein" => round($protein), "carbs" => round($carbs), "fat" => round($fat));
        //$arr = array("goalAdjustment" => $goalAdjustment, "intensityAdjustment" => $intensityAdjustment,"height" => $height, "weight" => $weight, "harrisBenedict" => $calories, "calories" => $result, "protein" => "150", "carbs" => "200", "fat" => "40");

        status_header(200);
        echo wp_json_encode($arr);
        //wp_die("Server received '$data' from your browser.");
        wp_die();
        // }
    }

    function dd_custom_head() {
        echo '<script type="text/javascript">var ajaxurl = \'' . admin_url('admin-ajax.php') . '\';</script>';

    }

    public function createCalculator($attrs)    {
        return include_once("wizard.php");
    }

    public function createTestCalculator($attrs)    {
        return include_once("test_calculator.php");
    }


}


$bmiCalculatorPlugin = new TheDietDocCalculator();


add_action( 'wp_ajax_dd_calculate', array($bmiCalculatorPlugin,'dd_calculate' ));
add_action( 'wp_ajax_nopriv_dd_calculate', array($bmiCalculatorPlugin,'dd_calculate' ));

add_action('wp_head', array($bmiCalculatorPlugin, 'dd_custom_head'));

add_action( 'admin_post_dd_calculate', array($bmiCalculatorPlugin, 'prefix_admin_dd_calculate') );
add_shortcode('dd_calc', array($bmiCalculatorPlugin, 'createCalculator'));
add_shortcode('dd_test_calc', array($bmiCalculatorPlugin, 'createTestCalculator'));
//add_action( 'template_redirect',  array($bmiCalculatorPlugin,'wpse12535_redirect_sample'));