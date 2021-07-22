<?php 
use Core\FH;
?>
<div class="uk-margin-top uk-margin-bottom" uk-grid>
    <div class="uk-width-1-1">
        <div class="uk-clearfix" style="height: 45px;" k-grid>
            <div class="uk-width-1-3 uk-float-left uk-margin-medium-right">
                <div class="uk-inline" style="width:100% !important;">
                    <a href="#" class="uk-form-icon uk-form-icon-flip" uk-icon="search"></a>
                    <input type="text" class="uk-input" placeholder="Search key word">
                </div>
            </div>
            <div class="uk-float-left">
                <select name="capacity" id="capacity" class="uk-select">
                    <option value="">Number Of Items</option>
                    <option value="00">Number Of Items</option>
                </select>
            </div>
            <div class="uk-float-right">
                <select name="filter" id="filter" class="uk-select">
                    <option value="">Filter By</option>
                    <option value="00">Number Of Items</option>
                </select>
            </div>
        </div>
    </div>
</div>
<hr class="uk-divider-icon">