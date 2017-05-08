<div class="col-md-8 col-md-offset-2">
            <div class="wizard-container">
                <div class="card wizard-card" data-color="red" id="calculator-content" >
                    <form id="calculator-form" role="form">
                        <input type="hidden" name="action" value="dd_calculate"/>
                        <input type="hidden" id="imperialMeasurement" name="imperialMeasurement" value="1"/>
                        <div class="wizard-header">
                            <h3 class="wizard-title">Calculate Your Personal Macronutrients</h3>
                            <h5>We will taylor all meals to your needs.</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#demographic" data-toggle="tab">Demographic</a></li>
                                <li><a href="#body-type" data-toggle="tab">Body Type</a></li>
                                <li><a href="#status-quo" data-toggle="tab">Status Quo</a></li>
                                <li><a href="#goals" data-toggle="tab">Goals</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane container" id="demographic">
                                <div class="row">
                                    <h4> Let's start with some basic information</h4>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                               <i class="fa fa-envelope fa-fw"></i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email<small> (required)</small></label>
                                                <input name="email" class="form-control valid" aria-required="true" aria-invalid="false" type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1 input-group">
                                        <span class="input-group-addon"><label id="gender-label">Gender</label></span>
                                        <label class="col-xs-3">
                                            <input type="radio" name="gender" id="male" value="0" onclick="clickMale();">
                                            <i class="fa fa-male fa-fw left"></i>&nbsp;Male
                                        </label>
                                        <label class="col-xs-3">
                                            <input type="radio" name="gender" id="female" value="1" onclick="clickFemale();">
                                            <i class="fa fa-female fa-fw left"></i>&nbsp;Female
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-md-offset-1 input-group">
                                        <div id="measurementContainer">
                                            <span>You are using <strong id="currentMeasurement">Imperial</strong>. Switch to <a href="#" onClick="measurementClicked(); return false;" id="measurementLink">Metric</a> ? </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-md-offset-1">
                                        <span class="form-inline">
                                            <div class="col-xs-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                       <i class="fa fa-balance-scale fa-fw"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label id="weightLabel" class="control-label">Weight <small>(lbs)</small></label>
                                                        <input name="weight" class="form-control valid" aria-required="true" aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                       <i class="fa fa-birthday-cake fa-fw"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Age<small> (required)</small></label>
                                                        <input name="age" class="form-control valid" aria-required="true" aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-md-offset-1">
                                        <span class="form-inline">
                                            <div class="col-xs-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                       <i class="fa fa-arrow-circle-up fa-fw"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label id="heightLabel" class="control-label">Height (feet)</label>
                                                        <input name="height" class="form-control valid" type="text">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div id="inches" class="input-group">
                                                    <span class="input-group-addon">
                                                       <i class="fa fa-arrow-circle-o-up fa-fw"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Height (inches)</label>
                                                        <input name="heightInches" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="body-type">
                                <h4> What body type are you? </h4>

                                <div class="row">
                                    <div class="input-group">
                                        <div class="col-xs-4">
                                            <div class="card card-product">
                                                <div class="card-image">
                                                    <a href="#pablo">
                                                        <img id="ectoImg" class="img" />
                                                    </a>
                                                </div>

                                                <div class="content">
                                                    <h4 class="card-title">
                                                        <a href="#pablo">Ectomorph</a>
                                                    </h4>
                                                    <div class="card-description bt-card">
                                                        An ectomorph is a typical skinny guy. Ecto&#39;s have a light build with small joints and lean muscle. Usually ectomorph&#39;s have long thin limbs with stringy muscles. Shoulders tend to be thin with little width.
                                                    </div>
                                                    <div class="footer">
                                                        <div class="stats">
                                                            <input type="radio" name="bodyType" value="0">&nbsp;Select
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="card card-product">
                                                <div class="card-image">
                                                    <a href="#pablo">
                                                        <img id="endoImg" class="img" />
                                                    </a>
                                                </div>

                                                <div class="content">
                                                    <h4 class="card-title">
                                                        <a href="#pablo">Endomorph</a>
                                                    </h4>
                                                    <div class="card-description bt-card">
                                                        The endomorph body type is solid and generally soft. Endomorphs gain fat very easily. Endo&#39;s are usually of a shorter build with thick arms and legs. Muscles are strong, especially the upper legs. Endomorphs find they are naturally strong in leg exercises like the squat.
                                                    </div>
                                                    <div class="footer">
                                                        <div class="stats">
                                                            <input type="radio" name="bodyType" value="2">&nbsp;Select
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="card card-product">
                                                <div class="card-image">
                                                    <a href="#pablo">
                                                        <img id="mesoImg" class="img" />
                                                    </a>
                                                </div>

                                                <div class="content">
                                                    <h4 class="card-title">
                                                        <a href="#pablo">Mesomorph</a>
                                                    </h4>
                                                    <div class="card-description bt-card">
                                                        A mesomorph has a large bone structure, large muscles and a naturally athletic physique. Mesomorphs are the best body type for bodybuilding. They find it quite easy to gain and lose weight. They are naturally strong which is the perfect platform for building muscle.
                                                    </div>
                                                    <div class="footer">
                                                        <div class="stats">
                                                            <input type="radio" name="bodyType" value="1">&nbsp;Select
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="tab-pane" id="status-quo">
                                <h4>What is your daily physical activity?</h4>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <table border="0" width="90%" id="wizard-table">
                                            <tr>
                                                <td width="20%"><label id="gender-label" class="control-label">Days</label></td>
                                                <td width="18%" align="left"><input type="radio" name="frequency" id="0" value="0"><span class="status-label">None</span></td>
                                                <td width="18%" align="left"><input type="radio" name="frequency" id="1" value="1"><span class="status-label">1-2</span></td>
                                                <td width="18%" align="left"><input type="radio" name="frequency" id="2" value="2"><span class="status-label">3-4</span></td>
                                                <td width="26%" align="left"><input type="radio" name="frequency" id="3" value="3"><span class="status-label">5 or more</span></td>
                                            </tr>
                                            <tr>
                                                <td><label id="gender-label" class="control-label">Minutes</label></td>
                                                <td align="left"><input type="radio" name="duration" id="0" value="0"><span class="status-label">0-30</span></td>
                                                <td align="left"><input type="radio" name="duration" id="1" value="1"><span class="status-label">31-60</span></td>
                                                <td colspan="2" align="left"><input type="radio" name="duration" id="2" value="1"><span class="status-label">60 or more</span></td>
                                            </tr>
                                            <tr>
                                                <td><label id="gender-label" class="control-label">Intensity</label></td>
                                                <td align="left"><input type="radio" name="intensity" id="0" value="0"><span class="status-label">Sedentary</span></td>
                                                <td align="left"><input type="radio" name="intensity" id="1" value="1"><span class="status-label">Light</span></td>
                                                <td align="left"><input type="radio" name="intensity" id="2" value="2"><span class="status-label">Moderate</span></td>
                                                <td align="left"><input type="radio" name="intensity" id="3" value="3"><span class="status-label">Extreme</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <hr/>
                                <h4>What is your diet?</h4>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <table border="0" width="90%" id="wizard-table">
                                            <tr>
                                                <td width="20%"><label id="gender-label" class="control-label">Meals Per Day</label></td>
                                                <td colspan="4" width="15%" align="left">
                                                    <select class="col-xs-4" id="meals" name="meals">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="20%"><label id="gender-label" class="control-label">Eat Out Per Week</label></td>
                                                <td width="18%" align="left"><input type="radio" name="eatOut" id="0" value="0"><span class="status-label">0-3</span></td>
                                                <td width="18%" align="left"><input type="radio" name="eatOut" id="1" value="1"><span class="status-label">4-6</span></td>
                                                <td width="18%" align="left"><input type="radio" name="eatOut" id="2" value="2"><span class="status-label">7-10</span></td>
                                                <td width="26%" align="left"><input type="radio" name="eatOut" id="3" value="3"><span class="status-label">11 or more</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="goals">
                                <h4>What are your goals?</h4>
                                <div class="row">
                                    <div class="col-xs-12 col-xs-offset-1 input-group">
                                        <span class="input-group-addon"><label id="gender-label">Goal</label></span>
                                        <label class="col-xs-2">
                                            <input type="radio" name="goal" value="0">&nbsp;Lose Fat
                                        </label>
                                        <label class="col-xs-3">
                                            <input type="radio" name="goal" value="1">&nbsp;Gain Muscle
                                        </label>
                                        <label class="col-xs-4">
                                            <input type="radio" name="goal" value="2">&nbsp;Lose Fat & Gain Muscle
                                        </label>
                                        <label>
                                            <input type="radio" name="goal" value="3">&nbsp;Maintain
                                        </label>
                                    </div>
                                </div>
                                <hr/>
                                <h4>If you are a fitness competitor please answer below</h4>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1 input-group">
                                        <span class="input-group-addon"><label id="gender-label">Are you a:</label></span>
                                        <label class="col-xs-5">
                                            <input type="radio" name="goal" value="0">&nbsp;Performance Athlete
                                        </label>
                                        <label class="col-xs-4">
                                            <input type="radio" name="goal" value="1">&nbsp;Fitness Competitor
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-danger  btn-wd' name='next' value='Next' />
                                <input type='submit' id="calc-button" class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>


        <script>
            var gender = "male";
            setImages();
            function getEctoImgUrl() {
                return pluginUrl + "/assets/img/" +  gender + "/ectomorph.png";
            }
            function getEndoImgUrl() {
                return pluginUrl + "/assets/img/" +  gender + "/endomorph.png";
            }
            function getMesoImgUrl() {
                return pluginUrl + "/assets/img/" +  gender + "/mesomorph.png";
            }

            function setImages() {
                jQuery("#endoImg").attr("src",getEndoImgUrl());
                jQuery("#ectoImg").attr("src",getEctoImgUrl());
                jQuery("#mesoImg").attr("src",getMesoImgUrl());
            }

            function measurementClicked() {

                //console.log("measurementClicked");
                var currentlyImperial = jQuery("#imperialMeasurement").val();
                if(currentlyImperial < 1) {
                    currentlyImperial = 1;
                }else {
                    currentlyImperial = 0;
                }
                jQuery("#imperialMeasurement").val(currentlyImperial);

                //console.log("currentlyImperial: " +currentlyImperial);

                var weightLabel = "Weight (lbs)";
                var heightLabel = "Height (feet)";
                var currentMeasurment = "Imperial";
                var linkMeasurement = "Metric";

                if(currentlyImperial > 0) {
                    //console.log("showing the inches group");
                    jQuery("#inches").show();
                } else {
                    weightLabel = "Weight (kg)";
                    heightLabel = "Height (cm)";
                    currentMeasurment = "Metric";
                    linkMeasurement = "Imperial";
                    //console.log("hiding the inches group");
                    jQuery("#inches").hide();
                }
                jQuery("#weightLabel").html(weightLabel);
                jQuery("#heightLabel").html(heightLabel);
                jQuery("#currentMeasurement").html(currentMeasurment);
                jQuery("#measurementLink").html(linkMeasurement);

                //console.log("ending method");


            }

            function clickMale() {
                gender = "male";
                setImages();
            }
            function clickFemale() {
                gender = "female";
                setImages();
            }
        </script>