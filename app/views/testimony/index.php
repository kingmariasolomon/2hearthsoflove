<?php
use Core\Pagination;
use Core\H;
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];
$paging = new Pagination();
$paging->set('urlscheme',PROOT.'testimony/page/%page%');
$paging->set('perpage',1);
$paging->set('page',max(1,intval(isset($url[2])? $url[2] : 1)));
$paging->set('total',$this->total);
$paging->set('nexttext','Next');
$paging->set('prevtext','Previous');
$paging->set('focusedclass','selected');
$paging->set('delimiter','');
$paging->set('numlinks',5);
?>
<?php $this->setSiteTitle('Testimonies'); ?>
<?php $this->start('head'); ?>
    <link href="<?=PROOT?>assets/css/utilities.css" type="text/css" rel="stylesheet">
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> Miraculouse Testimonies </span></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <?php if(!empty($this->testimonies)): ?>
            <div class="uk-child-width-1-3" uk-grid>
                <?php foreach($this->testimonies as $k => $val): ?>
                <div class="">
                    <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                        <div class="uk-card-media-top">
                            <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                                <a href="<?=PROOT?>testimony/detail/<?=$val->id?>" class=" uk-text-capitalize no_link">
                            <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"><?=$val->title?></span></h3></a>
                            <p class="inner_col"><?=H::limit_text($val->testimony, 20)?></p>
                            <p class="uk-text-right">
                                <a href="<?=PROOT?>testimony/detail/<?=$val->id?>" uk-toggle class="uk-button uk-button-text uk-text-danger uk-text-capitalize read_more">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="uk-flex-center" uk-grid>
                <div class="pagination">
                    <ul class="uk-pagination uk-flex-center" uk-margin>
                        <?php $paging->display(); ?>
                    </ul>
                </div> 
            </div>
            <?php else: require_once "app/views/layouts/includes/commingsoon.php"; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <!-- <span class="mod-icon-button mini-pulse"><i class="fas fa-share "></i></span> -->
    <a href="<?=PROOT?>testimony/share" class="uk-button uk-button-text no_link" type="submit" uk-tooltip="Share Your Testimony">
        <span class="uk-icon mod-icon-button mini-pulse" uk-icon="icon: forward; ratio:1.7"></span>
    </a>
    <!-- <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large uk-margin-right uk-text-right" >
            <a class="no_link uk-box-shadow" href="<?=$_SERVER['HTTP_REFERER'];?>" uk-toggle uk-tooltip="title: Return; pos:left">
                <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:arrow-left; ratio:1.5"></span>
            </a>
        </ul>
    </div> -->
</div>

<?php $this->end(); ?>
<?php $this->start('foot'); ?>
<script>
    $(document).ready(function () {
        var ht = [];
        $(".inner_col").each(function () {
            ht.push($(this).height());
        });
        var maxHt = Math.max.apply(null, ht);
        $(".inner_col").height(maxHt);
    });
</script>
<?php $this->end(); ?>