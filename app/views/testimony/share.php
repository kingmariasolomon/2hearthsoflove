<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Share Your Testimonies'); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="txt-grad1">Share Your Testimonies</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-child-width-1-1" uk-grid>
                <div>
                    <h5 class="uk-text-lead">Testimony is a proof of Powerful intervensions in our lives. Kindly share yours to lift the spirit of those who are about to give up, and to make the unbelived to belive in the power of God</h5>
                    <p class="uk-text-bold">matt 3:5 (GoodNews)</p>
                </div>
                <div class="">
                    <form class="uk-form-stacked" action="<?=$this->postAction?>" method="post">
                        <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?>
                        <div class="uk-child-width-1-2@s uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('text', 'First Name', 'fname', $this->share->fname, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Last Name', 'lname',  $this->share->lname, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('email', 'E-mail', 'email',  $this->share->email, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Phone', 'phone',  $this->share->phone, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-child-width-1-1@s uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('text', 'Title', 'title',  $this->share->title, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-clearfix">
                             <?= FH::textAreaBlock('Testimony', 'testimony',  $this->share->testimony, ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'10', 'placeholder'=>'Narrate Your Testimony...'], ['class'=>'uk-margin uk-width-1-1@s uk-width-3-4@m']);?>
                        </div>
                       
                        <div class="uk-child-width-1-1@s" uk-grid>
                            <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
                                <div class="h4 uk-width-1-1">Are Your A Regular Member</div>
                                <label for=""><input type="radio" class="uk-radio" name="regular_member" value="1">Yes</label>
                                <label for=""><input type="radio" class="uk-radio" name="regular_member" value="0">No</label>
                            </div>
                        </div>
                       
                        <div class="uk-child-width-1-1@s" uk-grid>
                            <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
                                <div class="h4 uk-width-1-1">Do You Give Permission For Your Testimony To Be Included In Our website?</div>
                                <label for=""><input type="radio" class="uk-radio" name="include_in_website" value="1">Yes</label>
                                <label for=""><input type="radio" class="uk-radio" name="include_in_website" value="0">No</label>
                            </div>
                        </div>
                       
                        <div class="uk-child-width-1-1@s" uk-grid>
                            <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
                                <div class="h4 uk-width-1-1">Do You Give Permission For Your Testimony To Be Included In Our website?</div>
                                <label for=""><input type="radio" class="uk-radio" name="include_name" value="1">Yes</label>
                                <label for=""><input type="radio" class="uk-radio" name="include_name" value="0">No</label>
                            </div>
                        </div>

                        <div class="uk-flex uk-flex-right">
                            <?= FH::submitBlock('Submit Request', ['class'=>'uk-button uk-button-default uk-button-danger'], ['class'=>'uk-margin uk-text-right']);?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <a class="no_link uk-box-shadow" href="<?=$_SERVER['HTTP_REFERER'];?>" uk-toggle uk-tooltip="title: Return; pos:left">
        <span class="uk-icon mod-icon-button mini-pulse uk-text-primary uk-margin-left" uk-icon="icon:arrow-left; ratio:1.5"></span>
    </a>
</div>

<?php $this->end(); ?>