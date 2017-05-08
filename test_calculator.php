<style>
    .testLabel {
        font-weight: bold;

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-offset-2">
           <form id="calculator-form" role="form">
                <input type="hidden" name="tester" value="1"/>
                <input type="hidden" name="action" value="dd_calculate"/>
                <table border="1" width="100%">
                    <tr>
                        <td class="testLabel" width="20%">Gender</td>

                        <td>
                            <input type="radio" name="gender" value="0" checked> Male<br>
                            <input type="radio" name="gender" value="1"> Female<br>
                        </td>
                        <td class="testLabel" width="20%">Age</td>
                        <td><input type="text" name="age" id="age"/> years old</td>
                    </tr>
                    <tr>
                        <td class="testLabel">Height</td>
                        <td>
                            <select id="heig    htF" name="heightF">
                                <option value="1">1 Foot</option>
                                <option value="2">2 Feet</option>
                                <option value="3">3 Feet</option>
                                <option value="4">4 Feet</option>
                                <option value="5">5 Feet</option>
                                <option value="6">6 Feet</option>
                                <option value="7">7 Feet</option>
                            </select>&nbsp;
                            <select id="heightI" name="heightI">
                                <option value="0">--</option>
                                <option value="1">1 Inch</option>
                                <option value="2">2 Inches</option>
                                <option value="3">3 Inches</option>
                                <option value="4">4 Inches</option>
                                <option value="5">5 Inches</option>
                                <option value="6">6 Inches</option>
                                <option value="7">7 Inches</option>
                                <option value="8">8 Inches</option>
                                <option value="9">9 Inches</option>
                                <option value="10">10 Inches</option>
                                <option value="11">11 Inches</option>
                            </select>
                        </td>
                        <td class="testLabel">Weight</td>
                        <td>
                            <input type="text" id="weight" name="weight"/>lbs
                        </td>
                   </tr>
                    <tr>
                        <td class="testLabel">Bodytype</td>
                        <td>
                            <input type="radio" name="bodyType" value="0" checked> Ectomorph<br>
                            <input type="radio" name="bodyType" value="1"> Mesomorph<br>
                            <input type="radio" name="bodyType" value="2"> Endomorph<br>
                        </td>
                        <td class="testLabel">Persona</td>
                        <td>
                            <input type="radio" name="persona" value="0" checked> I want to transform my physique<br>
                            <input type="radio" name="persona" value="1"> I am a performance athlete<br>
                            <input type="radio" name="persona" value="2"> I am a physique competitor<br>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="4">For the next values 0 = "none" and 4 = "most"</th>
                        </tr>
                    <tr>
                        <td class="testLabel">Activity Frequency</td>
                        <td>
                            <input type="radio" name="frequency" value="0" checked> 0 (none)<br>
                            <input type="radio" name="frequency" value="1"> 1 (1-2 days)<br>
                            <input type="radio" name="frequency" value="2"> 2 (3-4 days)<br>
                            <input type="radio" name="frequency" value="3"> 3 (5-7 days)<br>

                        </td>
                        <td class="testLabel">Activity Duration</td>
                        <td>
                            <input type="radio" name="duration" value="0" checked> 0 - 30<br>
                            <input type="radio" name="duration" value="1"> 31 - 60<br>
                            <input type="radio" name="duration" value="2"> Over an hour<br>

                        </td>
                    </tr>
                    <tr>
                        <td class="testLabel">Intensity Level</td>
                        <td>
                            <input type="radio" name="intensity" value="0" checked> 0 (none)<br>
                            <input type="radio" name="intensity" value="1"> 1 (a little)<br>
                            <input type="radio" name="intensity" value="2"> 2 (I sweat)<br>
                            <input type="radio" name="intensity" value="3"> 3 (I am a boss)<br>

                        </td>
                        <td class="testLabel">Goal</td>
                        <td>

                            <input type="radio" name="goal" value="0"> Lose Fat<br>
                            <input type="radio" name="goal" value="1"> Gain Muscle<br>
                            <input type="radio" name="goal" value="2"> Gain Muscle & Lose Fat<br>
                            <input type="radio" name="goal" value="3"> Maintain<br>
                        </td>
                    </tr>
                    <tr>
                        <td class="testLabel">Meals per day</td>
                        <td>
                            <select id="meals" name="meals">
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
                        <td class="testLabel">Eat Out per week</td>
                        <td>
                            <input type="radio" name="eatOut" value="0" checked>0-3<br>
                            <input type="radio" name="eatOut" value="1">4-6<br>
                            <input type="radio" name="eatOut" value="2">7-10<br>
                            <input type="radio" name="eatOut" value="3">11-14<br>
                        </td>
                    </tr>
                    <tr>
                        <td></td> <td></td>
                        <td></td>
                        <td>
                            <input type="button" value="Clear" id="clear-button">
                            <input type="submit" value="Calculate" id="test-calc-button">
                        </td>
                    </tr>
        </table>
                </form>
        </div>
    </div>

    <div id="calculator-content">
    </div>

</div>
