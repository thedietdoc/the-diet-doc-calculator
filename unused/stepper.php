<?php $imgPath = plugin_dir_url( __FILE__ ) . "assets/img"; ?>

<style>

    #demo-error-state {
        margin: 0 auto;
        min-height: 575px;
    }

    .area {
        width: 100%;
        float: left;
        padding-bottom: 10px;
    }

    .area .input,
    .area .input label {
        width: 125px;
        float: left;
        position: relative;
    }

    .area .input {
        overflow: hidden;
        border-radius: 2px;
        transition: 300ms;
        -webkit-transition: 300ms;
        -ms-transition: 300ms;
        margin-right: 5px;
    }

    .area .input input {
        display: none;
    }

    .area .input label {
        cursor: pointer;
    }

    .no-active-radio label{
        color: rgba(0,0,0,.26);
    }
    .active-radio {
        color: #ffffff;
    }

    #demo-error-state-content .mdl-textfield {
        width: 100%;
    }
    .calculator-form {
        padding: 10px;
    }

    .demo-card-wide.mdl-card {
        width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('https://getmdl.io/assets/demos/welcome_card.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }
    .mdl-step.is-active .mdl-step__label-indicator {
        background-color: red;
        color: #ffffff;
    }
    .calc-table th {
        font-size: 14px;
    }
    .material-icons {
        vertical-align: middle;
        font-size: 18px;
    }
    .icon-text {
        vertical-align:middle;
    }
    .radio__label {

        color: rgba(0,0,0, 0.75);
        font-size: 16px;
        padding-bottom:10px;

    }

    .radio-field h5 {
        margin: 0 0 10px 0;
    }
    div.separator {
        padding: 15px;
        margin: 25px;
    }


    #wrapper {
        position: absolute;
        width: 100%;
        height: 100%;
        background: -webkit-linear-gradient(#A5B5BD 0, #7B847B 100%);
        background: -moz-linear-gradient(#A5B5BD 0, #7B847B 100%);
        background: -ms-linear-gradient(#A5B5BD 0, #7B847B 100%);
        background: -o-linear-gradient(#A5B5BD 0, #7B847B 100%);
        background: linear-gradient(#A5B5BD 0, #7B847B 100%);
    }

    .card {
        cursor: default;
        position: relative;
        width: 371px;
        top: 50%;
        left: 50%;
        transform: -webkit-translate(-50%, -50%);
        transform: -moz-translate(-50%, -50%);
        transform: -ms-translate(-50%, -50%);
        transform: -o-translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .card-header {
        width: 371px;
        height: 235px;
        background: url(<?php echo $imgPath ?>/background.jpg) no-repeat;
        background-size: 371px 235px;
        border-radius: 1px 1px 0 0;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .card:hover .card-header {
        background-size: 403px 267px;
        background-position: -16px -16px;
    }

    .card-header-mask {
        height: 100%;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .card:hover .card-header-mask {
        background-color: rgba(0, 0, 0, .6);
    }

    .card-header-date, .card-body-header-category {
        text-transform: uppercase;
        background-color: #EF5A31;
        color: #FFF;
        font-weight: bold;
        text-align: center;
    }

    .card-body-header-category {
        position: absolute;
        font-size: 13px;
        top: -31px;
        left: 0;
        padding: 8px 14px;
        line-height: 15px;
    }

    .card-header-date {
        float: right;
        margin: 20px 20px 0 0;
        border-radius: 50%;
        font-weight: bold;
        padding: 12px 15px;
        line-height: 15px;
    }

    .card-header-date-day {
        font-size: 18px;
    }

    .card-header-date-month {
        font-size: 11px;
    }

    .card-body {
        background-color: #FFF;
        border-radius: 0 0 1px 1px;
        padding: 0 26px 26px 26px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
    }

    .card-body-header {
        position: absolute;
        left: 0;
        padding: 26px;
        background-color: #FFF;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .card:hover .card-body-header {
        margin-top: -141px;
    }

    h1 {
        color: #23282D;
        letter-spacing: -1px;
        font-size: 24px;
        font-weight: bold;
    }

    .card-body-header-sentence {
        color: #EF5A31;
        margin-top: 14px;
        font-size: 19px;
    }

    .card-body-header-sentence span {
        font-style: italic;
    }

    .card-body-description {
        opacity: 0;
        color: #757B82;
        line-height: 30px;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .card:hover .card-body-description {
        opacity: 1;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .card-body-footer {
        position: relative;
        z-index: 10;
        margin-top: 14px;
        font-size: 14px;
        color: #9FA5A8;
    }

    .icon {
        display: inline-block;
        vertical-align: middle;
        margin-right: 2px;
    }

    .icon-time {
        margin-top: -3px;
        width: 10px;
        height: 17px;
        background: url(<?php echo $imgPath ?>/icon-time.png) no-repeat;
    }

    .icon-comment {
        margin-top: -2px;
        margin-left: 12px;
        width: 14px;
        height: 14px;
        background: url(<?php echo $imgPath ?>/icon-comment.png) no-repeat;
    }
</style>


<div class="mdl-grid">
    <div id="calculator-content" class="mdl-cell mdl-cell--12-col">
        <ul class="mdl-stepper mdl-stepper--horizontal" id="demo-error-state">
            <li class="mdl-step is-active">
                <span class="mdl-step__label">
                  <span class="mdl-step__title">
                    <span class="mdl-step__title-text">Demographics</span>
                  </span>
                </span>
                <div class="mdl-step__content" id="demo-error-state-content">
                    <form class="calculator-form">
                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" id="email" />
                            <label class="mdl-textfield__label" for="username"><i class="material-icons">email</i><span class="icon-text">Email</span></label>
                            <span class="mdl-textfield__error">Only valid email addresses!</span>
                        </div>
                        <div class="area">
                            <span class="input mdl-button mdl-js-button no-active-radio">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="male">
                            </span>
                            <span class="input mdl-button mdl-js-button no-active-radio">
                                <label for="female">Female</label>
                                <input type="radio" name="gender" id="female">
                            </span>

                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age">
                            <label class="mdl-textfield__label" for="age">Age</label>
                            <span class="mdl-textfield__error">Please enter a valid age!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="^(\d{1,5})\'((\s?)(-?)(\s?)([0-9]|(1[0-1]))\&quot;)?$"  id="height">
                            <label class="mdl-textfield__label" for="sample3">Height</label>
                            <span class="mdl-textfield__error">Please enter a valid height!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="weight">
                            <label class="mdl-textfield__label" for="age">Weight</label>
                            <span class="mdl-textfield__error">Please enter a valid weight!</span>
                        </div>
                    </form>
                </div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Next
                    </button>
                    <button disabled class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-back>
                        Back
                    </button>

                </div>
            </li>
            <li class="mdl-step">
                <span class="mdl-step__label">
                  <span class="mdl-step__title">
                    <span class="mdl-step__title-text">Body Type</span>
                  </span>
                </span>
                <div class="mdl-step__content calculator-content">
                    <div id="wrapper">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-mask">
                                <div class="card-header-date">
                                    <div class="card-header-date-day">12</div>
                                    <div class="card-header-date-month">May</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-header">
                                <div class="card-body-header-category">Photos</div>
                                <h1>True Paradise on Earth: Unknown Place</h1>
                                <p class="card-body-header-sentence">
                                    They call it <span>"</span>God's Own Country.<span>"</span>
                                </p>
                            </div>
                            <p class="card-body-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Molestias autem aliquid, recusandae maiores iste fuga,
                                explicabo dolor vitae magnam!
                            </p>
                            <div class="card-body-footer">
                                <i class="icon icon-time"></i> 6min. read
                                <i class="icon icon-comment"></i> 39 comments
                            </div>
                        </div>
                    </div>
                        </div>
                </div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Next
                    </button>
                    <button class="mdl-button" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
            <li class="mdl-step">
                <span class="mdl-step__label">
                  <span class="mdl-step__title">
                    <span class="mdl-step__title-text">Current Activity</span>
                  </span>
                </span>
                <div class="mdl-step__content calculator-content">
                    <form>
                        <div class="radio-field">
                            <h5>How many days a week do you work out?</h5>
                            <div class="area">
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="none">None</label>
                                    <input type="radio" name="activity" id="none">
                                </span>
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="oneTwo">1-2 days</label>
                                    <input type="radio" name="activity" id="oneTwo">
                                </span>
                                 <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="threeFour">3-4 days</label>
                                    <input type="radio" name="activity" id="threeFour">
                                </span>
                                 <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="fiveSeven">5-7 days</label>
                                    <input type="radio" name="activity" id="fiveSeven">
                                </span>
                            </div>
                            <div class="separator"></div>
                        </div>
                        <div class="radio-field">
                            <h5>How long do you work out?</h5>
                            <div class="area">
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="duration0">0-30 min</label>
                                    <input type="radio" name="duration" id="duration0">
                                </span>
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="duration1">31-60 min</label>
                                    <input type="radio" name="duration" id="duration1">
                                </span>
                                 <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="duration2">over an hour</label>
                                    <input type="radio" name="duration" id="duration2">
                                </span>
                            </div>
                            <div class="separator"></div>
                        </div>
                        <div class="radio-field">
                            <h5>How intense do you workout?</h5>
                            <div class="area">
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="intensity0">Not at All</label>
                                    <input type="radio" name="intensity" id="intensity0">
                                </span>
                                <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="intensity1">Recreational</label>
                                    <input type="radio" name="intensity" id="intensity1">
                                </span>
                                 <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="intensity2">Moderate</label>
                                    <input type="radio" name="intensity" id="intensity2">
                                </span>
                                 <span class="input mdl-button mdl-js-button no-active-radio">
                                    <label for="intensity3">High</label>
                                    <input type="radio" name="intensity" id="intensity3">
                                </span>
                            </div>
                            <div class="separator"></div>
                        </div>
                    </form>
                </div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Next
                    </button>
                    <button class="mdl-button" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
            <li class="mdl-step">
                <span class="mdl-step__label">
                  <span class="mdl-step__title">
                    <span class="mdl-step__title-text">Current Diet</span>
                  </span>
                </span>
                <div class="mdl-step__content calculator-content">
                    <h5>How many time a week do you eat out?</h5>
                    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
                        <select class="mdl-selectfield__select" id="eatOut" name="eatOut">
                            <option value="0">0-3 times</option>
                            <option value="1">4-6 times</option>
                            <option value="2">7-10</option>
                            <option value="3">11 or more</option>
                        </select>
                        <label for="professsion" class="mdl-selectfield__label">Eat Out a Week</label>
                        <span class="mdl-selectfield__error">Please select how many times you eat out.</span>
                    </div>
                </div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Next
                    </button>
                    <button class="mdl-button" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
            <li class="mdl-step">
                        <span class="mdl-step__label">
                          <span class="mdl-step__title">
                            <span class="mdl-step__title-text">Goals</span>
                        </span>
                        </span>
                <div class="mdl-step__content">

                </div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Get My Numbers
                    </button>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>