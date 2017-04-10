<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle" disabled="disabled">
                    <span class="glyphicon glyphicon-user"></span>
                </a>

            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-primary btn-circle" id="Calc-step-2">
                    <span class="glyphicon glyphicon-text-width"></span>
                </a>

            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-primary btn-circle" id="Calc-step-3">
                    <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>

            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-primary btn-circle" id="Calc-step-4">
                    <span class="glyphicon glyphicon-time"></span>
                </a>

            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-primary btn-circle" id="Calc-step-5">
                    <span class="glyphicon glyphicon-asterisk"></span>
                </a>

            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-primary btn-circle" id="Calc-step-6">
                    <span class="glyphicon glyphicon-ok"></span>
                </a>

            </div>
        </div>
    </div>

    <form id="calculator-form" class="form-horizontal" role="form">

        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Demographics</legend>
                        <div class="row">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="email" required="required" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="gender" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-5">
                                    <div class="btn-group measurement" data-toggle="buttons">
                                        <label id="male" name="genderLabel" class="btn btn-primary active btn-md calc-btn">
                                            <input type="radio" name="gender"value="male">Male
                                        </label>
                                        <label id="female"  name="genderLabel" class="btn btn-primary sex btn-md calc-btn">
                                            <input type="radio" name="gender" value="female">Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="age" class="col-sm-2 control-label">Age</label>
                                <div class="input-group col-sm-5">
                                    <input type="text"  required="required" class="form-control" id="age" name="age" placeholder="Age">
                                    <div class="input-group-addon">&nbsp;years</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="height" class="col-sm-2 control-label">Height</label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="heightF" name="heightF">
                                        <option value="1">1 Foot</option>
                                        <option value="2">2 Feet</option>
                                        <option value="3">3 Feet</option>
                                        <option value="4">4 Feet</option>
                                        <option value="5">5 Feet</option>
                                        <option value="6">6 Feet</option>
                                        <option value="7">7 Feet</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" id="heightI" name="heightI">
                                        <option value="1">1 inch</option>
                                        <option value="2">2 inches</option>
                                        <option value="3">3 inches</option>
                                        <option value="4">4 inches</option>
                                        <option value="5">5 inches</option>
                                        <option value="6">6 inches</option>
                                        <option value="7">7 inches</option>
                                        <option value="4">8 inches</option>
                                        <option value="5">9 inches</option>
                                        <option value="6">10 inches</option>
                                        <option value="7">11 inches</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="height" class="col-sm-2 control-label">Weight</label>
                                <div class="input-group col-sm-5">
                                    <input type="text"  required="required" class="form-control" id="weight" name="weight" placeholder="Weight">
                                    <div class="input-group-addon">&nbsp;lbs</div>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <button class="btn btn-primary nextBtn pull-right btn-md calc-btn" type="button">Next</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Body Type</legend>
                        <div class="row">
                            <div class="form-group">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active sex btn-md calc-btn">
                                        <input type="radio" name="bodyType" id="ectomorph" value="ectomorph" autocomplete="off">Ectomorph
                                    </label>
                                    <label class="btn btn-primary sex btn-md calc-btn">
                                        <input type="radio" name="bodyType" id="mesomorph" value="mesomorph" autocomplete="off">Mesomorph
                                    </label>
                                    <label class="btn btn-primary sex btn-md calc-btn">
                                        <input type="radio" name="bodyType" id="endomorph" value="endomorph" autocomplete="off">Endomorph
                                    </label>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <button class="btn btn-secondary prevBtn btn-md pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-md pull-right calc-btn" type="button">Next</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Activity</legend>
                        <div class="row">
                            <div class="wizard-label">How much do you move?</div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="btn-group-vertical col-sm-5" data-toggle="buttons">
                                        <label class="btn btn-primary active activity btn-md">
                                            <input type="radio" name="activity" id="none" value="0" autocomplete="off">Not at all
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="activity" id="little" value="1" autocomplete="off">1 - 2 Days
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="activity" id="ok" value="2" autocomplete="off">3 - 4 Days
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="activity" id="push" value="3" autocomplete="off">5 - 7 Days
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row">
                            <button class="btn btn-secondary prevBtn btn-md pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-md pull-right calc-btn" type="button">Next</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Duration</legend>

                        <div class="row">
                            <div class="wizard-label">For how long do move?</div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="btn-group-vertical col-sm-5" data-toggle="buttons">
                                        <label class="btn btn-primary active activity btn-md">
                                            <input type="radio" name="duration" id="none" value="0" autocomplete="off">0 - 30 minutes
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="duration" id="little" value="1" autocomplete="off">31 - 60 minutes
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="duration" id="ok" value="2" autocomplete="off">Over an hour
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <button class="btn btn-secondary prevBtn btn-md pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-md pull-right calc-btn" type="button">Next</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Intensity</legend>
                        <div class="row">
                            <div class="wizard-label">How intense are your workouts?</div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="btn-group-vertical col-sm-5" data-toggle="buttons">
                                        <label class="btn btn-primary active activity btn-md">
                                            <input type="radio" name="intensity" id="nonexistent" value="0" autocomplete="off">Not very
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="intensity" id="talk" value="1" autocomplete="off">A Little
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="intensity" id="sweat" value="2" autocomplete="off">I Sweat a Little
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="intensity" id="iPush" value="3" autocomplete="off">I Push Hard
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row">
                            <button class="btn btn-secondary prevBtn btn-md pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-md pull-right calc-btn" type="button">Next</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-6">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <br/>
                    <fieldset>
                        <legend>Goal</legend>
                        <div class="row">
                            <div class="wizard-label">What is your primary goal?</div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="btn-group-vertical col-sm-5" data-toggle="buttons">
                                        <label class="btn btn-primary active activity btn-md">
                                            <input type="radio" name="goal" id="none" value="0" autocomplete="off">Lose Fat
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="goal" id="lose" value="1" autocomplete="off">Gain Muscle
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="goal" id="laid" value="2" autocomplete="off">Lose Fat & Gain Muscle
                                        </label>
                                        <label class="btn btn-primary sex btn-md">
                                            <input type="radio" name="goal" id="bullies" value="3" autocomplete="off">Maintain
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="row">
                            <button class="btn btn-secondary prevBtn btn-md pull-left calc-btn" type="button">Previous</button>
                            <button id="calc-button" class="btn btn-success btn-md pull-right calc-btn" type="submit">Submit</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row setup-content results" id="results"></div>
    </form>
</div>

<script>
    function setChecked() {
        alert("here");
    }
</script>