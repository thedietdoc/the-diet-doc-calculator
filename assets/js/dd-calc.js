jQuery(document).ready(function($) {
	$("#imperialMeasurement").val(1);

    $("#clear-button").click(function(e) {
        e.preventDefault();
        //$('#calcResults').html("").fadeOut();
        $("#calculator-content").fadeOut(1500, function() { $('#calculator-content').html(""); });
    });

	$("#calc-button").click(function(e) {
		e.preventDefault();

		var formData = jQuery("#calculator-form").serialize();
		var theData = { action: "dd_calculate",
			data: formData};
		console.log(theData);

		jQuery.ajax({
			url: ajaxurl,
			type: "POST",

			data: formData,
			success: function(data) {
				jQuery('#calculator-content').html("").fadeOut();
				var parseData = jQuery.parseJSON(data);
				console.log("SUCCESS: " + data)
				var html = "<div class='wizard-header'><h3 class='wizard-title'>Your Personal Macronutrients</h3></div><div class='row'><div class='col-md-10 col-lg-offset-1'>" + parseData.page + "<div id='data-panel'></div></div>";
				jQuery("#calculator-content").append(html).fadeIn();
			},
			error:function(xhr, status, error) {
				console.error(error);
			}
		});

	});

	$("#test-calc-button").click(function(e) {
        e.preventDefault();


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
				$('#calculator-content').html("").fadeOut();
                var parseData = jQuery.parseJSON(data);
                console.log("SUCCESS: " + data)
                //$('#calcResults').append(data);

				var html = "<div class='wizard-container'><div class='row'><div class='col-md-8 col-lg-offset-2'>" + parseData.page + '<div id="data-panel"> \
		  	<div class="col-md-10">\
				<table class="table table-striped">\
				   <tr>\
				  	<td colspan="2" class="testLabel">Calculated Using:</td>\
				  </tr>\
				   <tr>\
				  	<td>Harris Benedict Calories</td>\
				  	<td>'+ parseData.harrisBenedict +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Measurement</td>\
				  	<td>'+ parseData.measurement +'</td>\
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
				   <tr>\
				  	<td> Persona Adjustment </td>\
				  	<td>'+ parseData.personaAdjustment +'</td>\
				  </tr>\
				  	<td> Frequency Adjustment </td>\
				  	<td>'+ parseData.frequencyAdjustment +'</td>\
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
				  	<td> Persona Protein Adjustment</td>\
				  	<td>'+ parseData.personaProteinAdjustment +'</td>\
				  </tr>\
				    <tr>\
				  	<td> Persona Protein Adjusted</td>\
				  	<td>'+ parseData.personaProteinAdjusted +'</td>\
				  </tr>\
				   <tr>\
				  	<td> Persona Fat Adjustment</td>\
				  	<td>'+ parseData.personaFatAdjustment +'</td>\
				  </tr>\
				    <tr>\
				  	<td> Persona Fat Adjusted</td>\
				  	<td>'+ parseData.personaFatAdjusted +'</td>\
				  </tr>\
				    <tr>\
				  	<td>Goal Adjusted Protein </td>\
				  	<td>'+ parseData.proteinGoalAdjusted +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Protein Intensity Adjustment </td>\
				  	<td>'+ parseData.proteinIntensityAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Intensity Adjusted Protein  </td>\
				  	<td>'+ parseData.proteinIntensityAdjusted +'</td>\
				  </tr>\
				   <tr>\
				  	<td> Protein Body Type Adjustment </td>\
				  	<td>'+ parseData.proteinBodyTypeAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td> Body Type Adjusted  Protein  </td>\
				  	<td>'+ parseData.proteinBodyTypeAdjusted +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Fat Goal Adjustment </td>\
				  	<td>'+ parseData.fatGoalAdjustment +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Goal Fat Adjusted </td>\
				  	<td>'+ parseData.fatGoalAdjusted +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Fat Body Type Adjustment </td>\
				  	<td>'+ parseData.fatBodyTypeAdjustment +'</td>\
				  </tr>\
				  <tr>\
				  	<td>Body Type Fat Adjusted </td>\
				  	<td>'+ parseData.fatBodyTypeAdjusted +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Protein Calories </td>\
				  	<td>'+ parseData.proteinCals +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Fat Calories </td>\
				  	<td>'+ parseData.fatCals +'</td>\
				  </tr>\
				   <tr>\
				  	<td>Remainder Calories </td>\
				  	<td>'+ parseData.remainderCals +'</td>\
				  </tr>\
				</table>\
			</div>\
		</div></div></div></div>';
				$("#calculator-content").append(html).fadeIn();
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



	/*$('[data-toggle="wizard-radio"]').click(function(){
		wizard = $(this).closest('.wizard-card');
		wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
		$(this).addClass('active');
		$(wizard).find('[type="radio"]').removeAttr('checked');
		$(this).find('[type="radio"]').attr('checked','true');
	});*/


	/*$(".measurement-group .input input[type='radio']").click(function(e){

		//console.debug("selected: " + $("#selectedMeasurement").value());
		//console.debug("radio: " + $('input[name=measurement]:checked').val());


		console.log("here");
		console.debug($(this));
		$("#")


	});*/

/*
	$(".area .inputss").click(function(e) {
		var target = this;
		$(target).addClass('active');

		if ($(target).hasClass('active')) {
			$(target).removeClass('active')
			if ($(target).hasClass('active-2')) {
				console.log("in here");


				if ($("input", target).attr("type") == "radio") {
					var area = $(target).parent();

					// loop around and remove all from every sibling
					$(area).children().each(function () {
						$('div#testDiv').children().each(function () {
							console.debug($(this));
						});
					});
					$("span", area).removeClass("active-radio").addClass("no-active-radio");
					$(target).removeClass('no-active-radio');
						//$("span", area).removeClass('btn-success');
						//$(target).removeClass('no-active-radio').addClass("btn-success").addClass('active-radio');


					}
			}
			if ($(this).hasClass('active-2')) {
				$(this).removeClass('active-2')
			} else {
				$(this).addClass('active-2');
			}
		}


	});
*/

	});
});

/*$(".area .input").click(function(e) {
    var target = this;
    $(target).addClass('active');

    if ($(target).hasClass('active')) {
        $(target).removeClass('active')
        if ($(target).hasClass('active-2')) {

            if ($("input", target).attr("type") == "radio") {
                var area = $(target).parent();
                $("span", area).removeClass("active-radio").addClass("no-active-radio");
                $("span", area).removeClass('btn-primary').addClass("btn-default");
                $(target).removeClass('no-active-radio').addClass('active-radio');
                $(target).addClass('btn-default').addClass('btn-primary');
            }
        }
        if ($(target).hasClass('active-2')) {
            $(target).removeClass('active-2')
        } else {
            $(target).addClass('active-2');
        }
    }


});*/


