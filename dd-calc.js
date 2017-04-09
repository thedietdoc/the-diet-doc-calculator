$(document).ready(function () {

    $("#clear-button").click(function(e) {
        e.preventDefault();
        $('#calcResults').html("");
    });

    $("#calc-button").click(function(e) {
        e.preventDefault();
        $('#calcResults').html("");

       /* var formData = $("#calculator-form").serializeArray();
        var URL = ajaxurl;
        $.post(URL,
            formData,
            function(data, textStatus, jqXHR) {
                console.error(data);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error("ERROR: " + errorThrown)
            });*/
        var formData = $("#calculator-form").serialize();
        /*var measurement = $('#calculator-form input[name="measurement"]:checked').value;
        var gender = $('#calculator-form input[name="gender"]:checked').value;
        var bodyType = $('#calculator-form input[name="bodyType"]:checked').value;
        var goal = $('#calculator-form input[name="goal"]:checked').value;
        var activityLevel = $('input[name="activityLevel"]:checked').value;*/
        var theData = { action: "dd_calculate",
                        data: formData/*,
                        measurement: measurement,
                        gender: gender,
                        bodyType: bodyType,
                        activityLevel: activityLevel,
                        goal: goal*/};
        console.log(theData);

        $.ajax({
            url: ajaxurl,
            type: "POST",

            data: formData,
            success: function(data) {

                var parseData = jQuery.parseJSON(data);
                console.log("SUCCESS: " + data)
                //$('#calcResults').append(data);
                $('#calcResults').append('<div id="data-panel"> \
		  	<div class="col-md-6">\
				<table class="table table-striped">\
				  <tr>\
				  	<td>Calories</td>\
				  	<td>'+ parseData.calories +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Protein</td>\
				  	<td>'+ parseData.protein +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Carbohydrates</td>\
				  	<td>'+ parseData.carbs +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Fat</td>\
				  	<td>'+ parseData.fat +'</td>\
				  </tr>\
				  <tr>\
				  	<td>&nbsp;</td>\
				  	<td></td>\
				  </tr>\
				   <tr>\
				  	<td colspan="2" class="testLabel">Calculated Using:</td>\
				  </tr>\
				   <tr>\
				  	<td>Harris Benedict Calories</td>\
				  	<td>'+ parseData.harrisBenedict +'</td>\
				  </tr>\
				    <tr>\
				  	<td> Weight (kg)</td>\
				  	<td>'+ parseData.weight +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Weight (lbs)</td>\
				  	<td>'+ parseData.weightLbs +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Height (cm)</td>\
				  	<td>'+ parseData.height +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Intensity Adj</td>\
				  	<td>'+ parseData.intensityAdjustment +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Goal Adjustment </td>\
				  	<td>'+ parseData.goalAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Duration Adjustment </td>\
				  	<td>'+ parseData.durationAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> BodyType Adjustment </td>\
				  	<td>'+ parseData.bodyTypeAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Activity Adjustment </td>\
				  	<td>'+ parseData.activityAdjustment +'</td>\
				  </tr>\
				    <tr>\
				  	<td>Macro Goal Adjustment</td>\
				  	<td>'+ parseData.macroGoalAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Fat Goal Adjustment </td>\
				  	<td>'+ parseData.fatGoalAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Protein Goal Adjustment </td>\
				  	<td>'+ parseData.proteinGoalAdjustment +'</td>\
				  </tr>\
				</table>\
			</div>\
		</div>');
        },
            error:function(xhr, status, error) {

                alert(error);
            }
        });

       /*$.ajax({
            url: ajaxurl,
            type: "POST",
            dataType: "json",
             data: theData ,

            success: function(response) {
                console.log("Success: " + response);

            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });*/

    });


    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        prevStepWizard.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');

        if(!timeFilled) {
            fillTime();
        }
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
    for(var i = 1; i < 111;i++) {
        if(i != 1) {
            $('#age').append($('<option>', {value: i, text: i + ' Years Old'}));
        } else {
            $('#age').append($('<option>', {value: i, text: i + ' Year Old'}));
        }
    }


    for (var i = 0; i < 60; i += 5) {

        var time = i + " Minutes";

        //var time = moment().duration(i, "minutes").format();
        $('#activityDurationM').append($('<option>', {value: i, text: time}));
    }



});

function fillTime() {

   // var duration = moment.duration(123, "minutes").format("h:mm");

    var str = moment.duration({"seconds":69}).humanize();
    console.log(str);

    for (var i = 0; i < 180; i += 5) {
        console.log("i is now: " + i);
        var time = moment.duration({"minutes":i}).format("hh:mm");
        console.log("writting time of : " + time);
        //var time = moment().duration(i, "minutes").format();
        $('#activityDuration').append($('<option>', {value: i, text: time}));
    }
    timeFilled = true;
}