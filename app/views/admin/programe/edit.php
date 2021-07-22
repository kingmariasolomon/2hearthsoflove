<?php 
use Core\FH;
use Core\H;

$programe = (isset($this->programes) && !empty($this->programes))? $this->programes : [];//H::dnd($programe);
// setcookie('programes', json_encode($this->programes), time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">Edit programes</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <!-- PROGRAME DAYS -->
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <form id="program_form" class="uk-form-stacked" action="<?=$this->postAction?>" method="post">
                            <?= FH::displayErrors($this->displayErrors);?>
                            <?= FH::csrfInput();?>
                            <?= FH::iconInputBlock('text', 'label', 'programe_title', $programe->programe_title, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: grid"], ["class"=>"uk-input","placeholder"=>"Programe Title"], ["class"=>"uk-margin-small"]);?>

                            <?= FH::selectBlock("", 'programe_day', H::weekDays(), ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-small"], $programe->programe_day);?>

                            <div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
                                <?= FH::iconInputBlock('time', 'label', 'programe_time', $programe->programe_time, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: clock"], ["class"=>"uk-input","placeholder"=>"Programe Time"], ["class"=>"uk-margin-small"]);?>

                                <?= FH::selectBlock("", 'am_pm', H::dayNight(), ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-small uk-margin-remove-top"], $programe->programe_time);?>
                            </div>

                            <?= FH::iconInputBlock('text', 'label', 'programe_location', $programe->programe_location, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: location"], ["class"=>"uk-input","placeholder"=>"Programe Location"], ["class"=>"uk-margin-small"]);?>

                            <input type="hidden" name="index" id="index" value="<?=$programe->index?>">
                            <button class="uk-hidden" name="submit_btn_hidden" id="submit_btn_hidden" type="submit"></button>
                            <!-- <?= FH::submitBlock('Save', ['id'=>'branch_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-left']);?> -->


                            <!-- floating button -->
                            <div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right" uk-tooltip="title: Save Data; pos:left">
                                <button id="submit_btn" class="uk-button uk-button-text" type="submit">
                                    <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: upload; ratio:1.5"></span>
                                </button>
                                <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
                                    <ul class="uk-list uk-list-large uk-margin-right uk-text-right" >
                                        <a class="no_link uk-box-shadow" href="<?=$_SERVER['HTTP_REFERER'];?>" uk-toggle uk-tooltip="title: Return; pos:left">
                                            <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:arrow-left; ratio:1.5"></span>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->


<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
    $("#submit_btn").click(function(e){
        $("#submit_btn_hidden").click();
    });
</script>
<?php $this->end(); ?>