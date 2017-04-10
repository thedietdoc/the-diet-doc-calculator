$(document).ready(function () {

    $("#clear-button").click(function(e) {
        e.preventDefault();
        //$('#calcResults').html("").fadeOut();
        $("#calcResults").fadeOut(3000, function() { $('#calcResults').html(""); });
    });

    $("#calc-button").click(function(e) {
        e.preventDefault();
        $('#calcResults').html("").fadeOut();

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

                var html = '<div id="data-panel"> \
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
				  	<td>Goal Adjustment </td>\
				  	<td>'+ parseData.goalAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Activity Adjustment </td>\
				  	<td>'+ parseData.activityAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Duration Adjustment </td>\
				  	<td>'+ parseData.durationAdjustment +'</td>\
				  </tr>\
				   <tr>\
				  	<td> Meal Count Adjustment </td>\
				  	<td>'+ parseData.mealsAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Eating Out Adjustment </td>\
				  	<td>'+ parseData.eatOutAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Protein Goal Adjustment </td>\
				  	<td>'+ parseData.proteinGoalAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Protein Intensity Adjustment </td>\
				  	<td>'+ parseData.proteinIntensityAdjustment +'</td>\
				  </tr>\
				   <tr>\
				  	<td> Protein Body Type Adjustment </td>\
				  	<td>'+ parseData.proteinBodyTypeAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Fat Goal Adjustment </td>\
				  	<td>'+ parseData.fatGoalAdjustment +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Fat Body Type Adjustment </td>\
				  	<td>'+ parseData.fatBodyTypeAdjustment +'</td>\
				  </tr>\
				</table>\
			</div>\
		</div>';
                $("#calcResults").append(html).fadeIn();
        },
            error:function(xhr, status, error) {

                console.error(error);
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
