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
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Terms And Conditions</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-large uk-child-width-1-4" uk-grid>
                <!-- PRIVACY POLICY DECLEARACION -->
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center site-red-backgrond" style="padding:6px !important">
                            <p>Privacy Policy</p>
                        </div>
                        <div class="uk-margin-medium-top">
                            <form id="form_privacy" class="uk-form-stacked" action="" method="post" enctype="multipart/form-data">
                                <?= FH::displayErrors($this->displayErrors);?>
                                <?= FH::textAreaBlock('Privacy Policy', 'privacy_policy', $this->privacy, ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'10', 'placeholder'=>'Privacy Policy Information...',  "style"=>"height: 300px"], ['class'=>'uk-margin']);?>
                                <?= FH::submitBlock('Save Privacy Terms', ['id'=>'privacy_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-right']);?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- TERMS OF USE DECLEARACION -->
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center bg_purple" style="padding:6px !important">
                            <p>Terms Of Use</p>
                        </div>
                        <div class="uk-margin-medium-top">
                            <form id="form_usage" class="uk-form-stacked" action="" method="post" enctype="multipart/form-data">
                                <?= FH::displayErrors($this->displayErrors);?>
                                <?= FH::textAreaBlock('Terms Of Use', 'terms_of_use', $this->terms, ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'10', 'placeholder'=>'Terms Of Use Declearation...'], ['class'=>'uk-margin']);?>
                                <?= FH::submitBlock('Save Usage Terms', ['id'=>'usage_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-right']);?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    initCkeditor('privacy_policy');// initialize ckeditor
    initCkeditor('terms_of_use');// initialize ckeditor

    $('#privacy_btn').click(function (e) {
        e.preventDefault();
        makeUploadAsync(PROOT+'admin/asyncSave/', '#form_privacy', '', function (resp) {
            if(resp.success) Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);
            if(resp.failure){ Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);console.log(resp);}
        });
    });

    $('#usage_btn').click(function (e) {
        e.preventDefault();
        makeUploadAsync(PROOT+'admin/asyncSave/', '#form_usage', '', function (resp) {
            if(resp.success) Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);
            if(resp.failure){ Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', resp.data.msg);console.log(resp);}
        });
    });
});

</script>
<?php $this->end(); ?>