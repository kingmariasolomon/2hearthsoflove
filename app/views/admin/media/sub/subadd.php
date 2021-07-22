<?php 
use Core\FH;
use Core\H;
// H::dnd($this->postAction);
?>


<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">Add New Media Sub Category</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <form id="form_branch" class="uk-form-stacked uk-margin-medium-left uk-margin-medium-right" action="<?=$this->postAction?>" method="post" enctype="multipart/form-data">
                            <?= FH::displayErrors($this->displayErrors);?>
                            <?= FH::csrfInput();?>
                            <?= FH::inputBlock('text', 'Category Title', 'title','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'uk-margin']);?>
                            <input type="hidden" name="type" value="sub_media">

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
    $(document).ready(function(){

        $("#submit_btn").click(function(e){
            $("#submit_btn_hidden").click();
        });

    });
</script>
<?php $this->end(); ?>