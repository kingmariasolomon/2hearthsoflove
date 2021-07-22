<?php 
use Core\FH;
use Core\H;
// H::dnd(realpath("emptystate.php"));
?>

<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">About Organisation</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div>
                <?php if(!empty($this->about)): ?>
                    <div class="uk-word-wrap">
                        <?=html_entity_decode($this->about)?>
                    </div>
                <?php else: require_once "app/views/layouts/includes/emptystate.php";?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->
<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <a href="<?=PROOT?>admin/createabout" class="uk-button uk-button-text no_link" type="submit" uk-tooltip="title: Add New; pos:left">
        <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: plus; ratio:1.5"></span>
    </a>
    <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large uk-margin-right uk-text-right" >
            <li>
                <a id="clear" class="no_link uk-box-shadow" href="<?=PROOT?>admin/clearabout" uk-toggle uk-tooltip="title: Clear; pos:left">
                    <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:trash; ratio:1.5"></span>
                </a>
            </li>
            <li>
                <a id="edit" class="no_link uk-box-shadow" href="<?=PROOT?>admin/editabout" uk-toggle uk-tooltip="title: Edit; pos:left">
                    <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:pencil; ratio:1.5"></span>
                </a>
            </li>
            
        </ul>
    </div>
</div>

<?php $this->end(); ?>

<?php $this->start('foot'); ?>

<?php $this->end(); ?>