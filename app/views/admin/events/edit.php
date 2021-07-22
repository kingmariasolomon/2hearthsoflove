<?php 
use Core\FH;
use Core\H;
?>
<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">Add New Event</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <form id="form_branch" class="uk-form-stacked uk-margin-medium-left uk-margin-medium-right" action="<?=$this->postAction?>" method="post" enctype="multipart/form-data">
                    <?= FH::displayErrors($this->displayErrors);?>
                    <?= FH::csrfInput();?>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::inputBlock('text', 'Event Title', 'title', $this->events->title, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <?= FH::inputBlock('text', 'Event Venue', 'venue', $this->events->venue, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <?= FH::inputBlock('date', 'Date Of Event', 'event_date', $this->events->event_date, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <?= FH::inputBlock('time', 'Time Of Event', 'event_time', $this->events->event_time, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <?= FH::selectBlock("Type Of Event", 'type', ["Event"=>"Event","News"=>"News"], ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin uk-margin-remove-top"], $this->events->type);?>
                        </div>
                    </div>
                    <div class="uk-width-2-3">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::fileInputBlock('file', 'Upload', 'pix','icon=file-text=1.5', ['class'=>'uk-margin']);?>
                            <img id="piximg" abspath="<?=ABS_PATH?>" src="<?=ABS_PATH.$this->events->pix?>" alt=" image">
                            <div id="image-preview-container"></div>
                            
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::textAreaBlock('Your message', 'description', $this->events->description, ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'25', 'placeholder'=>'Enter Your Message...'], ['class'=>'uk-margin']);?>
                        </div>
                    </div>

                    <button class="uk-hidden" name="submit_btn_hidden" id="submit_btn_hidden" type="submit"></button>
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
                </div>
            </form>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->


<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script src="<?=PROOT?>assets/plugin/ckeditor/ckeditor.js"></script>
<script src="<?=PROOT?>assets/js/initckeditor.js"></script>
<script>
$(document).ready(function(){
    initCkeditor('description');// initialize ckeditor

    $("#submit_btn").click(function(e){
        $("#submit_btn_hidden").click();
    });

    $("#pix").change(function (e) {
        var files = e.target;
        $("#piximg").remove();
        previewFile(files, "#image-preview-container");
        $("#clear-preview-images").click(function (e) {
            $("#image-preview-container").empty();
        });

    });
});
</script>
<?php $this->end(); ?>