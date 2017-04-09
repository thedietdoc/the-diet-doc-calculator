<div class="container">

    <div class="row">
        <div class="col">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Step 1</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Step 4</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>Step 5</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>Step 6</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col">
            <form id="calculator-form" role="form">
                <div class="row setup-content" id="step-1">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 1</h3>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input maxlength="100" name="email" required class="form-control" placeholder="Enter Your Email" type="text">
                            </div>
                            <div class="form-group">
                                <label class="my-label form-check-label">Gender</label>
                                <div class="btn-group measurement" data-toggle="buttons">
                                    <label class="btn btn-primary active sex btn-lg calc-btn">
                                        <input type="radio" name="gender" id="male" value="male" autocomplete="off" checked>Male
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="gender" id="female" value="female" autocomplete="off">Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label class="my-label" for="age">Age</label>
                                    <select class="form-control" id="age" name="age"></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="my-label" for="height">Height</label>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    there
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="my-label" for="age">Weight</label>
                                <input type="text" id="weight" name="weight"/><label id="weightLabel" class="measureLabel">lbs</label>
                            </div>
                            <hr/>
                            <button class="btn btn-primary nextBtn btn-lg pull-right btn-md calc-btn" type="button">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 2</h3>
                            <div class="form-group">
                                <label class="my-label">Body Type</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active sex btn-lg calc-btn">
                                        <input type="radio" name="bodyType" id="ectomorph" value="ectomorph" autocomplete="off">Ectomorph
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="bodyType" id="mesomorph" value="mesomorph" autocomplete="off">Mesomorph
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="bodyType" id="endomorph" value="endomorph" autocomplete="off">Endomorph
                                    </label>
                                </div>
                            </div>
                            <hr/>
                            <button class="btn btn-secondary prevBtn btn-lg pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-lg pull-right calc-btn" type="button">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 3</h3>
                            <div class="form-group">
                                <h4>How much do you move now?</h4>
                                <div class="btn-group-vertical" data-toggle="buttons">
                                    <label class="btn btn-primary active activity btn-lg calc-btn">
                                        <input type="radio" name="activityLevel" id="none" value="none" autocomplete="off" checked>None
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="activityLevel" id="little" value="little" autocomplete="off">A Little
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="activityLevel" id="ok" value="ok" autocomplete="off">I do OK
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="activityLevel" id="push" value="push" autocomplete="off">I Try to Push a Few Times a Week
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="activityLevel" id="aSeal" value="seal" autocomplete="off">Call Me a SEAL
                                    </label>
                                </div>
                            </div>
                            <hr/>
                            <button class="btn btn-secondary prevBtn btn-lg pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-lg pull-right calc-btn" type="button">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-4">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 4</h3>
                            <div class="form-group">
                                <h4>And for how long do you move?</h4>
                                <div class="col-md-4">

                                    <select class="form-control" id="activityDurationH" name="activityDurationH">
                                        <option value="0">--</option>
                                        <option value="1">1 Hour</option>
                                        <option value="2">2 Hours</option>
                                        <option value="3">3 Hours</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" id="activityDurationM" name="activityDurationM">
                                    </select>
                                </div>
                            </div>
                            <br/>
                            <hr/>
                            <button class="btn btn-secondary prevBtn btn-lg pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-lg pull-right calc-btn" type="button">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-5">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 5</h3>
                            <div class="form-group">
                                <h4>How intense are your workouts?</h4>
                                <div class="btn-group-vertical" data-toggle="buttons">
                                    <label class="btn btn-primary active activity btn-lg calc-btn">
                                        <input type="radio" name="intensityLevel" id="nonexistent" value="nonexistent" autocomplete="off" checked>Nonexistent
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="intensityLevel" id="talk" value="talk" autocomplete="off">I Workout In Between Talking to People
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="intensityLevel" id="sweat" value="sweat" autocomplete="off">I Sweat a Little
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="intensityLevel" id="iPush" value="push" autocomplete="off">I'm There, I Push
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="intensityLevel" id="boss" value="boss" autocomplete="off">You Know Nobody Like Me, I'm a Boss
                                    </label>
                                </div>
                            </div>
                            <hr/>
                            <button class="btn btn-secondary prevBtn btn-lg pull-left calc-btn" type="button">Previous</button>
                            <button class="btn btn-primary nextBtn btn-lg pull-right calc-btn" type="button">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="step-6">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Step 5</h3>
                            <div class="form-group">
                                <h4>What is you single most important first goal?</h4>
                                <div class="btn-group-vertical" data-toggle="buttons">
                                    <label class="btn btn-primary active activity btn-lg calc-btn">
                                        <input type="radio" name="goal" id="none" value="none" autocomplete="off" checked>Live Healthy
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="goal" id="lose" value="lose" autocomplete="off">Lose a Few Pounds
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="goal" id="laid" value="laid" autocomplete="off">Get Laid
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="goal" id="bullies" value="bullies" autocomplete="off">Take Care of Some Bullies
                                    </label>
                                    <label class="btn btn-primary sex btn-lg calc-btn">
                                        <input type="radio" name="goal" id="gSeal" value="seal" autocomplete="off">Call Me a SEAL
                                    </label>
                                </div>
                            </div>
                            <hr/>
                            <button class="btn btn-secondary prevBtn btn-lg pull-left calc-btn" type="button">Previous</button>
                            <button id="calc-button" class="btn btn-success btn-lg pull-right calc-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content results" id="results"></div>
            </form>
        </div>
    </div>

</div>

<script>

    function changeMeasurement() {
        console.log("Here");
        var weightLbl = "kg";
        var heightLbl = "cm";
        if ($('#measurement').prop('checked')) {
            weightLbl = "lbs";
            heightLbl = "inches";
        }
        $('#weightLabel').text(weightLbl);
        $('#heightLabel').text(heightLbl);

    }

</script>