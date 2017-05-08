<style>
    body {
        background-color: rgba(0, 0, 0, .02);
    }

    .mdl-stepper-demo .mdl-stepper {
        margin: auto;
    }

    .mdl-stepper > .mdl-step:not(:first-child) > .mdl-step__content {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .demo-card-wide.mdl-card {
        width: 90%;
        margin auto 0;
    }
    .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('https://getmdl.io/assets/demos/welcome_card.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }
</style>

        <ul class="mdl-stepper mdl-stepper--horizontal" id="demo-error-state">
            <li class="mdl-step">
                <span class="mdl-step__label">
                  <span class="mdl-step__title">
                    <span class="mdl-step__title-text">Title of step 1</span>
                    <span class="mdl-step__title-message">Input must be greater than 10</span>
                  </span>
                </span>
                <div class="mdl-step__content" id="demo-error-state-content">
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="step-error-number">
                            <label class="mdl-textfield__label" for="step-error-number">Test less than 10</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" id="step-error-message">
                            <label class="mdl-textfield__label" for="step-error-message">Alert message</label>
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
                <span class="mdl-step__title-text">Title of step 2</span>
              </span>
            </span>
                <div class="mdl-step__content"></div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Continue
                    </button>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-cancel>
                        Cancel
                    </button>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
            <li class="mdl-step">
            <span class="mdl-step__label">
              <span class="mdl-step__title">
                <span class="mdl-step__title-text">Title of step 3</span>
              </span>
            </span>
                <div class="mdl-step__content"></div>
                <div class="mdl-step__actions">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored mdl-button--raised" data-stepper-next>
                        Continue
                    </button>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-cancel>
                        Cancel
                    </button>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect" data-stepper-back>
                        Back
                    </button>
                </div>
            </li>
        </ul>
