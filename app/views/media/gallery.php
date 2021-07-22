<?php $this->setSiteTitle('Photo Gallery'); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> Two Hearts Of Love <span> - </span> <small> Live</small></span></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-grid>
                <!-- LEFT COLUMN -->
                <div class="uk-width-1-1@s">
                    <div class="uk-child-width-expands" uk-grid>
                        <div class="others" uk-filter="target: .gallery-filter; animation: fade">
                            <ul class="uk-subnav uksubnav-pill uk-flex uk-flex-center uk-column-1-4 uk-margin-large-bottom">
                                <li class="uk-active uk-button uk-button-primary uk-margin-bottom" uk-filter-control><a href="#" class="txt-white">All</a></li>
                                <?php if(!empty($this->sub)): ?>
                                    <?php foreach($this->sub as $key => $val): ?>
                                        <li class="uk-button uk-button-primary uk-margin-bottom" uk-filter-control="[data-tags*='tag<?=$key;?>']"><a href="#" class="txt-white"><?=$val?></a></li>
                                    <?php endforeach; ?>
                                    <li class="uk-active uk-button uk-button-default uk-margin-bottom" uk-filter-control="sort: data-tags"><a href="#">Ascending</a></li>
                                    <li class="uk-button uk-button-default uk-margin-bottom" uk-filter-control="sort: data-tags; order: desc"><a href="#">Descending</a></li>
                                <?php else: ?>
                                    <div class="h2">No Category Yet</div>
                                <?php endif; ?>                                
                            </ul>
                            <ul class="gallery-filter uk-child-width-1-2 uk-child-width-1-4@m uk-text-center" uk-grid uk-lightbox="animation: fade">
                                <?php if(!empty($this->medias)): ?>
                                    <?php foreach($this->medias as $key => $val): ?>
                                        <div data-tags="tag<?=$val->sub_cat_id;?>" style="height: 200px !important">
                                            <a href="<?=ABS_PATH.$val->media?>" class="uk-inline" data-caption="<?=$val->title?>">
                                                <img src="<?=ABS_PATH.$val->media?>" alt="alt" style="height: 200px !important">
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="h2">No Photos In Gallery Yet</div>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<?php $this->end(); ?>