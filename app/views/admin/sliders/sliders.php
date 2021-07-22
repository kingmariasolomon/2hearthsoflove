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
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Sliders</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <!-- SILIDER DATA INFOMATION -->
                <div class="uk-width-1-1@s uk-width-5-5@m uk-margin-large-top">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-width-1-1 uk-text-right uk-margin"><span>Click To Add Slider Images</span>
                            <a class="addslidermodal" href="#addslidermodal" uk-toggle><span class="uk-icon" uk-icon="icon: album; ratio:1.5"></span></a>
                        </div>
                        
                        <div id="slide-holder" class="slide-holder">
                        <?php if(isset($this->sliders) && !empty($this->sliders)): ?>
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true; autoplay-interval:2000; ratio:5:2; animation:push">
                                <ul class="uk-slideshow-items">
                                    <?php foreach($this->sliders as $key => $value): ?>
                                    <li>
                                        <img src="<?=ABS_PATH.$key; ?>" alt="banner-sliders" uk-cover>
                                        <?php if($value->addOverlay == 'on'): ?>
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-overlay uk-position-center uk-light">
                                            <<?=$value->leadh;?> uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="font1"><?=$value->leadht;?></<?=$value->leadh;?>>
                                            <<?=$value->subh;?> uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0" class="font2"><?=$value->subht;?></<?=$value->subh;?>>
                                        </div>
                                        <?php endif; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="#" class="uk-position-center-left uk-position-small uk-hidden-hover" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a href="#" class="uk-position-center-right uk-position-small uk-hidden-hover" uk-slidenav-next uk-slideshow-item="next"></a>
                                <div class="uk-position-bottom-center uk-poition-small">
                                    <ul class="uk-thumbnav">
                                    <?php $count = 0; foreach($this->sliders as $key => $value): ?>
                                        <li uk-slideshow-item="<?=$count;?>"><a href="#"><img src="<?=ABS_PATH.$key?>" alt="" width="100"></a></li>
                                    <?php $count++; endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="uk-inline uk-dark">
                                <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                                <a class="addslidermodal" href="#addslidermodal" uk-toggle><div class="uk-overlay uk-overlay-primary uk-position-center">
                                    <span class="site-red-color bg_light" uk-tooltip="CLICK TO ADD SLIDE SHOW IMAGES FOR YOUR HOME PAGE" uk-overlay-icon></span>
                                </div></a>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center" style="padding:6px !important">
                            <p>Slider Images</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->

<!-- ADD SLIDER IMAGES MODAL -->
<div id="addslidermodal" uk-modal>
    <div class="uk-modal-dialog uk-modal-large" uk-overflow-auto style="width:1000px">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h4 class="uk-text-muted">Add Sideshow Images For The Home Page</h4>
        </div>
        <div class="uk-modal-body">
            <div class="uk-child-width-1-1@s" uk-grid>
                <div class="">
                    <form id="form_sliders" class="uk-child-width-auto uk-grid-small" action="" method="post" enctype="multipart/form-data" uk-grid>
                        <?= FH::displayErrors($this->displayErrors);?>
                        <?= FH::fileInputBlock('file', 'Add Slider Image ', 'sliders','icon=plus-circle=1.5', ['uk-tooltip'=>'Add Image'], ['class'=>'uk-link text-decoration-none']);?>
                        <div class="">
                            <?= FH::checkboxBlock("Add-Overlay", "add-overlay", $checked=false, ['class'=>'uk-checkbox'], [])?>
                            <!-- <label for="add-overlay" class="uk-link text-decoration-none">Add Overlay <input id="add-overlay" name="add-overlay" type="checkbox" class="uk-checkbox" value="1" checked></label> -->
                        </div>
                        <div class="">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select class="uk-select" name="lead-h" id="lead-h" uk-tooltip="Select Lead Slider Text">
                                    <option value="">Lead Slider Header</option>
                                    <option value="h1">Header 1 </option>
                                    <option value="h2">Header 2</option>
                                    <option value="h3">Header 3</option>
                                    <option value="h4">Header 4</option>
                                    <option value="h5">Header 5</option>
                                    <option value="h6">Header 6</option>
                                </select>
                                <span class="uk-link">
                                    <span></span>
                                    <span uk-icon="icon:chevron-up; ratio:1.2"></span>
                                </span>
                            </div>
                        </div>
                        <div class="">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select name="sub-h" id="sub-h" uk-tooltip="Select Sub Slider Text">
                                    <option value="">Sub Slider Header</option>
                                    <option value="h1">Header 1 </option>
                                    <option value="h2">Header 2</option>
                                    <option value="h3">Header 3</option>
                                    <option value="h4">Header 4</option>
                                    <option value="h5">Header 5</option>
                                    <option value="h6">Header 6</option>
                                </select>
                                <span class="uk-link">
                                    <span></span>
                                    <span uk-icon="icon:chevron-down; ratio:1.2"></span>
                                </span>
                            </div>
                        </div>
                        <div class="">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select name="animation" id="animation" uk-tooltip="Add Animation Pattern">
                                    <option value="animation: slide">Slide Animations</option>
                                    <option value="animation: fade">Fade Animations</option>
                                    <option value="animation: scale">Scale Animations</option>
                                    <option value="animation: push">Push Animations</option>
                                    <option value="animation: pull">Pull Animations</option>
                                </select>
                                <span class="uk-link">
                                    <span></span>
                                    <span uk-icon="icon:settings; ratio:1.2"></span>
                                </span>
                            </div>
                        </div>
                        <input type="hidden" id="slider_Path" name="slider_Path">
                        <input type="hidden" id="old_slider_Path" name="old_slider_Path">
                        <?= FH::inputBlock('text', 'Enter Lead Slider Header Text', 'lead-h-text','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin-small uk-width-2-3']);?>

                        <?= FH::inputBlock('text', 'Enter Sub Slider Header Text', 'sub-h-text','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin-small uk-width-2-3']);?>

                        <?= FH::submitBlock('Save Slider Settings', ['class'=>'uk-button uk-button-small uk-button-danger', 'id'=>'slider_data'], ['class'=>'uk-width-1-3 uk-text-right']);?>
                    </form>
                </div>
                <div class="uk-margin-medium-bottom">
                    <div id="image-holder" class=""><img id="slider_img" class="" abspath="<?=ABS_PATH?>" src="<?=ABS_PATH?>img/lid1.jpg" alt="alt slider image"></div>
                </div>
            </div>
        </div>
        <!-- footer area -->
    </div>
</div>

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
    $(document).ready(function(){
        is_checked('#add-overlay', '#lead-h,#lead-h-text,#sub-h,#sub-h-text,#animation');

        $('#add-overlay').click(function (e) {
            var elem = '#add-overlay';
            is_checked(elem, '#lead-h,#lead-h-text,#sub-h,#sub-h-text,#animation');
        });

        $('#sliders').change(function(){
            makeUploadAsync('<?=PROOT?>admin/asyncSave/sliders/sliders/false', '#form_sliders', '#slider_img', function (resp, params) {
                if(resp.success) {
                    var path = $(params).attr('abspath');
                    $(params).attr({'src': path+resp.data.filepath});
                    $('#slider_Path').val(resp.data.filepath);
                    $('#old_slider_Path').val(resp.oldData);
                }else{ console.log(resp); }
            });
        });

        $('#slider_data').click(function(e){
            e.preventDefault();
            if($('#slider_Path').val() == '') {console.log('empty Slider image Element'); alert("Please Select An Image"); return false;}
            var slideImg = $('#slider_Path').val();
            var addOverlay = $('#add-overlay').val();
            var leadH = (addOverlay == 'on')? $('#lead-h').val() : '';
            var leadHT = (addOverlay == 'on')? $('#lead-h-text').val() : '';
            var subH = (addOverlay == 'on')? $('#sub-h').val() : '';
            var subHT = (addOverlay == 'on')? $('#sub-h-text').val() : '';
            var animation = (addOverlay == 'on')? $('#animation').val() : '';
            var slideData = ($('#old_slider_Path').val() != '')? JSON.parse($('#old_slider_Path').val()) : {};
            slideData[slideImg] = {
                    "leadh": leadH,
                    "leadht": leadHT,
                    "subh": subH,
                    "subht": subHT,
                    "addOverlay": addOverlay,
                    "animation": animation
                }
            var sliderJSON = JSON.stringify(slideData);     //console.log( sliderJSON);    // return;
            saveDataAsync('<?=PROOT?>admin/uploadSlider/sliders', sliderJSON, 'targetImgElement', function (resp) {
                console.log(resp);
                if(resp.success){ 
                    Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);
                    UIkit.modal('#addslidermodal').hide();
                }
            });
        });
    });

    function is_checked(element, selector){
        var checked = ":checked";
        if($(element+checked).length != 0){
            $(selector).removeAttr('disabled').next('span').removeClass('uk-text-muted').addClass('uk-link');
            $(element).val('on');
        }else{
            $(selector).attr({'disabled': 'disabled'}).next('span').removeClass('uk-link').addClass('uk-text-muted');
            $(element).val('off');
        }
    }
</script>
<?php $this->end(); ?>