

<style>


    .macro-label {
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        margin: 0 auto;
    }
    .macro-label ul {
        list-style: none;
        overflow: hidden;
        padding-left: 0;
    }
    .macro-label ul li {
        float: left;
        display: block;
        padding: 0 5px 5px 0;

    }
    .macro-label ul li .macro-label__item {

        height: 100px;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    }

    .macro-label ul li .macro-label__item .macro-label__value span {
        position: relative;
        top: 30px;
        color: #ffffff;
        text-shadow: 0px 1px 2px #555;
    }

    .macro-label__item .macro-label__value {
        text-align: center;
        margin-bottom: 2px;
        height: 66%;
        font-size: 24px;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.14);
    }

    .macro-label__item .macro-label__label {
        text-align:  center;
        vertical-align: middle;
        height: 33%;
        font-size: 14px;
        color: #5C5C5C;
        background-color: #ffffff;
        line-height: 30px;
        font-weight: 600;
    }

    .macro-label__item .macro-label__value span {
        vertical-align: text-bottom;
    }


    #calories {
        background-image: url("<?php echo $imgPath ?>/red-pentagonal-background-200.png");
        background-color: #E53935;
    }
    #protein {
        background-image: url("<?php echo $imgPath ?>/green-pentagonal-background-200.png");
        background-color: #43A047;

    }
    #carbs {
        background-image: url("<?php echo $imgPath ?>/cyan-pentagonal-background-200.png");
        background-color: #00ACC1;

    }
    #fat {
        background-image: url("<?php echo $imgPath ?>/amber-pentagonal-background-200.png");
        background-color: #FFB300;

    }
    span.small-label {
        font-size: 12px;
        color: #777777;
        padding-left: 5px;
    }

</style>

<div class="row">
    <div class="macro-label col-md-12">
        <ul>
            <li class="col-md-3">
               <div class="macro-label__item">
                   <div id="calories" class="macro-label__value"><span><?php echo $variables["calories"] ?></span><span class="small-label">grams</span></div>
                   <div class="macro-label__label">Calories</div>
               </div>
            </li>
            <li class="col-md-3">
                <div class="macro-label__item">
                    <div id="protein" class="macro-label__value"><span><?php echo $variables["protein"] ?></span><span class="small-label">grams</span></div>
                    <div class="macro-label__label">Protein</div>
                </div>
            </li>
            <li class="col-md-3">
                <div class="macro-label__item">
                    <div id="carbs" class="macro-label__value"><span><?php echo $variables["carbs"] ?></span><span class="small-label">grams</span></div>
                    <div class="macro-label__label">Carbohydrates</div>
                </div>
            </li>
            <li class="col-md-3">
                <div class="macro-label__item">
                    <div id="fat" class="macro-label__value"><span><?php echo $variables["fat"] ?></span><span class="small-label">grams</span></div>
                    <div class="macro-label__label">Fat</div>
                </div>
            </li>
        </ul>
    </div>
</div>