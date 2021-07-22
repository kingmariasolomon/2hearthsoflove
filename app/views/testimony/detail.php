<?php
use Core\H;
?>
<?php $this->setSiteTitle('Testimonies Detail'); ?>
<?php $this->start('head'); ?>
    <link href="<?=PROOT?>assets/css/utilities.css" type="text/css" rel="stylesheet">
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> <?=($this->testimonies)? $this->testimonies->title: "Miraculouse Testimonies";?> </span></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <?php if(!empty($this->testimonies)): ?>
            <div class="uk-child-width-1-1@s uk-flex-center" uk-grid>
                <div class="uk-width-1-1">
                    <div class="event-details uk-child-width-1-1" uk-grid>
                        <div>
                            <ul class="uk-list uk-list-large">
                                <li class=""><span uk-icon="icon: user; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> <?=$this->testimonies->fname. " ". $this->testimonies->lname?></li>
                                <li class=""><span uk-icon="icon: mail; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> <?=$this->testimonies->email?></li>
                                <li class="uk-text-danger"><span uk-icon="icon: clock; ratio: 1.5" class="uk-icon uk-margin-small-right"></span><?=$this->testimonies->date?></li>
                            </ul>
                        </div>
                        <div>
                            <article class="uk-article">
                                <p class="uk-article-meta">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p class="uk-text-lead uk-dropcap"><?=$this->testimonies->testimony?></p>
                            </article>
                        </div>
                    </div>
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
    <a class="no_link uk-box-shadow" href="<?=$_SERVER['HTTP_REFERER'];?>" uk-toggle uk-tooltip="title: Return; pos:left">
        <span class="uk-icon mod-icon-button mini-pulse uk-text-primary uk-margin-left" uk-icon="icon:arrow-left; ratio:1.5"></span>
    </a>
</div>

<!-- MODAL DIALOGE -->
<div id="detail" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-1 uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('');" uk-height-viewport>
                <div class="uk-padding-large">
                    <h1><span class="txt-grad1 uk-text-capitalize">Title Heading For This Event</span></h1>
                    <hr class="uk-hr">
                    <div class="uk-child-width-1-1@s uk-flex-center uk-margin-medium-top" uk-grid>
                        <!-- RIGHT SIDE ON MOBILE AND LEFT ON LARGER SCREEN -->
                        <div class="uk-width-1-1">
                            <div class="event-details uk-child-width-1-1" uk-grid>
                                <div>
                                    <ul class="uk-list uk-list-large">
                                        <li class="uk-text-danger"><span uk-icon="icon: location; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> Location</li>
                                        <li class=""><span uk-icon="icon: calendar; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> Sarturday</li>
                                        <li class=""><span uk-icon="icon: clock; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> 10 : 30 am</li>
                                        <li class=""><span uk-icon="icon: location; ratio: 1.5" class="uk-icon uk-margin-small-right"></span> Location</li>
                                    </ul>
                                </div>
                                <div>
                                    <article class="uk-article">
                                        <p class="uk-article-meta">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="uk-text-lead uk-dropcap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, quaerat et ipsa repudiandae cupiditate laborum rem nam deleniti officia illo id aperiam ex sequi placeat aut repellendus praesentium possimus voluptatum? Facere, magnam quam? Perspiciatis maxime voluptate fuga magni quo fugit fugiat facilis error ipsa ipsum doloribus sed deserunt quis magnam enim porro dolores soluta, voluptatum harum mollitia, necessitatibus asperiores quia a iste?</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->end(); ?>
<?php $this->start('foot'); ?>
<?php $this->end(); ?>