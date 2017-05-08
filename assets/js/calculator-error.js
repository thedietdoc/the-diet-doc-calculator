(function () {
    // Error state demonstration
    var demoErrorState = function () {
        var element = document.querySelector('.mdl-stepper#demo-error-state');

        if (!element) return;

        var stepper = element.MaterialStepper;
        var steps = element.querySelectorAll('.mdl-step');
        var step;

        for (var i = 0; i < steps.length; i++) {
            step = steps[i];
            step.addEventListener('onstepnext', function (e) {
                var input = this.querySelector('input#step-error-number');

                if (input) {

                    if (input.value > 10) {
                        // If input number > 10 just move forward
                        stepper.next();
                    } else {
                        var message = this.querySelector('input#step-error-message').value;

                        if (!message) {
                            message = 'Please number greater than 10';
                        }
                        // {element}.MaterialStepper.error(message) change the state of current step to "error"
                        // and display the message passed as parameter
                        stepper.error(message);
                    }
                } else {
                    stepper.next();
                }
            });
        }
        element.addEventListener('onsteppercomplete', function (e) {
            var toast = document.querySelector('#snackbar-stepper-complete');

            if (!toast) return;

            toast.MaterialSnackbar.showSnackbar({
                message: 'Stepper with error state are completed',
                timeout: 4000,
                actionText: 'Ok'
            });
        });
    };

    window.addEventListener('load', demoErrorState);
})();