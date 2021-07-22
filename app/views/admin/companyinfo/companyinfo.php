<?php 
use Core\FH;
use Core\H;

// prepare social media data
$social = $this->social_media;
$F = (isset($social->facebook)&&!empty($social->facebook))? $social->facebook: "";
$I = (isset($social->instagram)&&!empty($social->instagram))? $social->instagram: "";
$W = (isset($social->whatsapp)&&!empty($social->whatsapp))? $social->whatsapp: "";
$Y = (isset($social->youtube)&&!empty($social->youtube))? $social->youtube: "";
?>

<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Organisation Information Details'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<section class="uk-section uk-section-xsmall uk-dark uk-margin-large-bottom">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h3 class="uk-heading-bullet"><span class="txt-grad3"> Organisation Information</h3> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <!-- BASIC DATA -->
                <div class="uk-width-1-1@s uk-width-3-5@m">
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                        <h3 class="uk-text-muted uk-margin-small-bottom uk-text-capitalize">Basic Organisation Info</h3>
                        <form id="org_data" class="uk-form-stacked" action="<?=PROOT?>" method="post">
                            <?= FH::csrfInput();?>
                            <?= FH::displayErrors($this->displayErrors);?>
                            <?= FH::inputBlock('text', 'Organisation Name', 'name',$this->comp_info->name, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                            <?= FH::inputBlock('email', 'Email Address', 'email',$this->comp_info->email, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                            <?= FH::inputBlock('text', 'Phone Number', 'phone',$this->comp_info->phone, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                            <?= FH::inputBlock('text', 'Organisation Address', 'address',$this->comp_info->address, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>
                            
                            <?= FH::inputBlock('text', 'Organisation Website', 'website',$this->comp_info->website, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                            <?= FH::submitBlock('Save Profile Data', ['class'=>'uk-button uk-button-default uk-button-primary', 'id'=>'org_info'], ['class'=>'uk-margin uk-text-right']);?>
                        </form>
                    </div>
                </div>
                
                <div class="uk-width-1-1@s uk-width-2-5@m">
                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                        <!-- LOGO INFORMATION -->
                        <div>
                            <div class="uk-card uk-card-small uk-card-default uk-height-medium uk-card-body uk-border-rounded">
                                <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center" style="padding:6px !important">
                                    <p>Organisation Logo</p>
                                </div>
                                <div class="uk-inline uk-margin-medium-top">
                                    <img id="logo_img" abspath="<?=ABS_PATH?>" src="<?=ABS_PATH.$this->comp_info->logo;?>" alt="alt logo image">
                                    <form id="form_logo" class="uk-form-stacked" action="<?=PROOT?>" method="post" enctype="multipart/form-data">
                                        <?= FH::displayErrors($this->displayErrors);?>
                                        <div class="uk-overlay uk-overlay-primary uk-position-center uk-light uk-text-center">
                                            <?= FH::fileInputBlock('file', 'Upload', 'logo','icon=file-text=1.5', ['class'=>'uk-margin']);?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- SOCIAL MEDIAL INFORMATION -->
                        <div>
                            <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center bg_gold" style="padding:6px !important">
                                    <p>Social Media Information</p>
                                </div>
                                <div class="uk-margin-medium-top">
                                    <!-- <img id="logo_img" abspath="<?=ABS_PATH?>" src="<?=ABS_PATH.$this->comp_info->logo;?>" alt="alt logo image"> -->
                                    <form id="form_social" class="uk-form-stacked" action="" method="post">
                                        <?= FH::displayErrors($this->displayErrors);?>
                                        <?= FH::iconInputBlock('text', 'label', 'facebook', $F, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: facebook"], ["class"=>"uk-input","placeholder"=>"Facebook Page"], ["class"=>"uk-margin-small"]);?>
                                        <?= FH::iconInputBlock('text', 'label', 'instagram', $I, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon", "uk-icon"=>"icon: instagram"], ["class"=>"uk-input","placeholder"=>"Instagram Page"], ["class"=>"uk-margin-small"]);?>
                                        <?= FH::iconInputBlock('text', 'label', 'whatsapp', $W, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon green", "uk-icon"=>"icon: whatsapp"], ["class"=>"uk-input","placeholder"=>"WhatsApp link"], ["class"=>"uk-margin-small"]);?>
                                        <?= FH::iconInputBlock('text', 'label', 'youtube', $Y, ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon red", "uk-icon"=>"icon: youtube"], ["class"=>"uk-input","placeholder"=>"Youtube Channel"], ["class"=>"uk-margin-small"]);?>
                                        <?= FH::submitBlock('Save', ['id'=>'social_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-right']);?>
                                    </form>
                                </div>
                            </div>
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

        $('#logo').change(function(){
            makeUploadAsync(PROOT+'admin/asyncSave/logo/comp_info', '#form_logo', '#logo_img', function (resp, params) {
                if(resp.success) {
                    var path = $(params).attr('abspath');
                    $(params).attr({'src': path+resp.data.filepath});
                    Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);
                }else{   console.log(resp);   }
            });
        });

        $('#org_info').click(function(e){
            e.preventDefault();
            makeUploadAsync(PROOT+'admin/asyncSave/', '#org_data', '', function (resp) {
                if(resp.success) Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);
                if(resp.failure){ Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);console.log(resp);}
            });
        });

        $('#social_btn').click(function (e) {
            e.preventDefault();
            var form = $('#form_social');
            form.on('submit', function (e) {
                e.preventDefault();
                var fJson = {};
                var formarray = form.serializeArray();
                formarray.forEach(obj => {
                    fJson[obj.name] = obj.value;
                });
                let fJsonString = JSON.stringify(fJson);
                saveJson(PROOT+'admin/saveJson/social_media', 'social_media', fJsonString, function (rep) {
                    Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', rep.data.msg);
                });
            })
            form.trigger("submit").off("submit");
        });
    });
</script>
<?php $this->end(); ?>
