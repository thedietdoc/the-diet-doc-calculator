<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="purple" id="wizard">
                    <form action="" method="" class="material">
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Get Your Custom Macronutrients
                            </h3>
                            <h5>This is the beginning of the life you weren't aware of.</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#demographicsLink" data-toggle="tab">Demographics</a></li>
                                <li><a href="#bodyTypeLink" data-toggle="tab">Body Type</a></li>
                                <li><a href="#activityLink" data-toggle="tab">Activity</a></li>
                                <li><a href="#durationLink" data-toggle="tab"> Duration</a></li>
                                <li><a href="#intensityLink" data-toggle="tab">Intensity</a></li>
                                <li><a href="#goalLink" data-toggle="tab">Goal</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="demographicsLink">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Let's start with the basic details.</h4>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your Email</label>
                                                <input name="name" type="text" class="form-control" required>
                                                <label name="message"></label>
                                            </div>
                                        </div>

                                        <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your Password</label>
                                                <input name="name2" type="password" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <select class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Daily Budget</label>
                                            <select class="form-control">
                                                <option disabled="" selected=""></option>
                                                <option value="Afghanistan"> < $100 </option>
                                                <option value="Albania"> $100 - $499 </option>
                                                <option value="Algeria"> $499 - $999 </option>
                                                <option value="American Samoa"> $999+ </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bodyTypeLink">
                                <h4 class="info-text">What is your body type? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
                                                <input type="radio" name="job" value="Design">
                                                <div class="icon">
                                                    <i class="material-icons">weekend</i>
                                                </div>
                                                <h6>Single</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="material-icons">home</i>
                                                </div>
                                                <h6>Family</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="material-icons">business</i>
                                                </div>
                                                <h6>Business</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="activityLink">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description.</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Room description</label>
                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Example</label>
                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="durationLink">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description.</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Room description</label>
                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Example</label>
                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="intensityLink">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description.</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Room description</label>
                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Example</label>
                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="goalLink">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description.</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Room description</label>
                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Example</label>
                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-twitter btn-wd' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-facebook btn-wd' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input id="defaultBtn" type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                                <div class="footer-checkbox">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                            </label>
                                            Subscribe to our newsletter
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div> <!-- row -->
</div> <!--  big container -->