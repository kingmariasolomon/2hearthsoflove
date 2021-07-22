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
            <h2 class="uk-heading-bullet"><span class="txt-grad3">Add New Media Clip</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <form id="form_branch" class="uk-form-stacked uk-margin-medium-left uk-margin-medium-right" action="<?=$this->postAction?>" method="post" enctype="multipart/form-data">
                <?= FH::displayErrors($this->displayErrors);?>
                <?= FH::csrfInput();?>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-2-3">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::inputBlock('text', 'Media Title', 'title',$this->medias->title, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <?= FH::textAreaBlock('Your message', 'description',$this->medias->description, ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'5', 'placeholder'=>'Enter Your Message...'], ['class'=>'uk-margin']);?>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::selectBlock("Choose A Category", 'cat_id', $this->cat, ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin"]);?>

                            <?= FH::selectBlock("Choose Sub Category", 'sub_cat_id', $this->sub, ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-medium"]);?>

                            <?= FH::inputBlock('date', 'Date Of Event', 'media_date', $this->medias->media_date, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <?= FH::fileInputBlock('file', 'Upload', 'media[]','icon=file-text=1.5', ['class'=>'uk-margin-medium', "multiple"=>"multiple"]);?>
                            <button id="clear-preview-images" class="uk-button uk-button-close uk-position-right red" type="button" style="background: #00000038;margin: 3px;height:50px;" uk-tooltip="Clear All Preview Image" uk-close></button>
                            <div id="image-preview-container"></div>
                        </div>
                    </div>
                </div>

                <button class="uk-hidden" name="submit_btn_hidden" id="submit_btn_hidden" type="submit"></button>
                <!-- floating button -->
                <div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right" uk-tooltip="title: Save Data; pos:left">
                    <button id="submit_btn" class="uk-button uk-button-text" type="submit">
                        <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: upload; ratio:1.1"></span>
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
</section>
<!-- <hr class="pr__vr__section"> -->


<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script src="<?=PROOT?>assets/plugin/ckeditor/ckeditor.js"></script>
<script src="<?=PROOT?>assets/js/initckeditor.js"></script>
<script>
$(document).ready(function(){

    $("#submit_btn").click(function(e){
        $("#submit_btn_hidden").click();
    });



    $("#media").change(function (e) {
        var form_data = new FormData();
        var files = e.target;

        previewFile(files, "#image-preview-container");
        $("#clear-preview-images").click(function (e) {
            $("#image-preview-container").empty();
        });

        if(files.length > 0){
            for (var i=0; i<files.length; i++) {
                form_data.append("media[]", files[i]);
            }
        }
        // $.ajax({
        //     url : PROOT+"media/multipleimage",
        //     enctype: 'multipart/form-data',
        //     type : "POST",
        //     data : form_data,
        //     processData: false,
        //     contentType: false,
        //     cache: false,
        //     cache: false,
        //     success : function(resp){
        //         console.log(resp);
        //         // if(resp.success){
        //         // }else{console.log(resp);}
        //     }
        // });
    });
    // $("#cat_id").change(function (e) {
    //     console.log(e.target);
    //     console.log(e.target.value);
    //     var val = $(this).val();
    //     var text_val = $(this).find("option[value="+val+"]").text();
    //     if(text_val.indexOf("Photo") != -1){
    //         console.log('image');
    //     }
    // });

    // $("#pix").change(function(){
    //     console.log(pix.files[0]);
    //     readURL('pix', '#piximg');
    // });

});
</script>
<?php $this->end(); ?>