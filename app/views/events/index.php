<?php
use Core\H;

$months = H::monthsIndex();
?>
<?php $this->setSiteTitle('Upcoming Events'); ?>
<?php $this->start('head'); ?>
    <link href="<?=PROOT?>assets/jquery-ui/jquery-ui.min.css" type="text/css" rel="stylesheet">
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<!-- NEWS SECTION -->
<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="uk-text-capitalize uk-text-danger">Special Announcement</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-grid>
                <!-- LEFT PANNEL -->
                <div class="uk-width-1-1@s uk-width-2-3@m uk-padding uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-child-width-1-1@s" uk-grid>
                        <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid2.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- RIGHT PANNEL -->
                <div class="uk-width-1-1@s uk-width-1-3@m">
                    <div class="uk-child-width-1-1@s" uk-grid>
                        <div class="uk-width-3-4@s uk-width-1-1@m">
                            <div class="intagram">
                                <h3><span uk-icon="instagram" class="uk-icon"></span> <span class="uk-text-primary uk-text-capitalize"> instagram feed</span></h3>
                                <div class="uk-card uk-card-default uk-card-body uk-height-medium">
                                    instagram feed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EVENT SECTION -->
<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="txt-grad1">Upcoming Events</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-grid>
                <!-- LEFT PANNEL -->
                <div class="uk-width-1-1@s uk-width-2-3@m uk-padding uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-child-width-1-1@s" uk-grid>
                        <?php if(!empty($this->events)): ?>
                            <?php foreach($this->events as $key => $val):
                                $date = explode('-', $val->event_date);
                            ?>
                                <div>
                                    <a class="eventlink" href="#eventmodal" uk-toggle>
                                        <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                            <div>
                                                <div class="event-img">
                                                    <img data-src="<?=ABS_PATH.$val->pix;?>" alt="image" width="100%" uk-img>
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove">
                                                <div class="uk-flex uk-flex-">
                                                    <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                        <h2 class="uk-margin-remove"><?=$months[$date[1]];?></h2>
                                                        <span class="uk-margin-remove"><?=$date[2]. ' '. $date[0];?></span>
                                                    </div>
                                                    <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                        <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title"><?=$val->title;?></span> </p>
                                                        <p class="uk-h4 uk-text-muted uk-margin-remove"><?=$val->venue;?></p>
                                                        <p class="uk-margin-remove uk-text-muted"><?=date("H:i A", strtotime($val->event_time));?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: require_once "app/views/layouts/includes/commingsoon.php";?>
                        <?php endif; ?>

                        <!-- <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid2.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid1.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid2.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid1.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="eventlink" href="#eventmodal" uk-toggle>
                                <div class="uk-child-width-1-1 uk-margin-bottom" uk-grid>
                                    <div>
                                        <div class="event-img">
                                            <img data-src="<?=ABS_PATH?>img/lid2.jpg" alt="image" width="100%" uk-img>
                                        </div>
                                    </div>
                                    <div class="uk-margin-remove">
                                        <div class="uk-flex uk-flex-">
                                            <div class="padding30 uk-background-primary uk-light uk-text-center">
                                                <h2 class="uk-margin-remove">Jan</h2>
                                                <span class="uk-margin-remove">29 2021</span>
                                            </div>
                                            <div class="padding30 uk-background-muted uk-flex-auto uk-dark">
                                                <p class="uk-uppercase uk-text-truncate uk-margin-remove"><span class="uk-h4 uk-text-bold event-title">Title Of The Event</span> </p>
                                                <p class="uk-h4 uk-text-muted uk-margin-remove">Venue Enugu Campground</p>
                                                <p class="uk-margin-remove uk-text-muted">29 Jan, 2019 - to - Febuary 2 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- RIGHT PANNEL -->
                <div class="uk-width-1-1@s uk-width-1-3@m">
                    <div class="uk-child-width-1-1@s" uk-grid>
                        <div>
                            <div class="search-calender uk-margin-large-bottom">
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-header">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="calendar"> </span><span class="uk-text-primary uk-text-bold"> Calendar Search</span>
                                    </div>
                                    <div class="uk-card-body">
                                        <div id="Scalendar"></div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div>
                            <hr class="uk-hr">
                            <div class="topevent uk-margin-large-bottom">
                                <div class="uk-dark">
                                    <h3 class="uk-text-bold"><span class="uk-text-primary"> Top Events</span></h3>
                                </div>
                                <ul class="uk-list uk-list-divider  uk-list-large uk-grid-match">
                                    <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                        <div class="uk-width-auto">
                                            <div class="small-img-container">
                                                <img src="<?=ABS_PATH?>img/lid2.jpg" alt="Post image">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                            <p class="uk-margin-remove uk-text-emphasis uk-text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur!</p>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-lighter uk-text-meta">29 Jan, 2019 - to - Febuary 2 2019</p>
                                        </div>
                                    </li>
                                    <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                        <div class="uk-width-auto">
                                            <div class="small-img-container">
                                                <img src="<?=ABS_PATH?>img/lid1.jpg" alt="Post image">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                            <p class="uk-margin-remove uk-text-emphasis uk-text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur!</p>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-lighter uk-text-meta">29 Jan, 2019 - to - Febuary 2 2019</p>
                                        </div>
                                    </li>
                                    <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                        <div class="uk-width-auto">
                                            <div class="small-img-container">
                                                <img src="<?=ABS_PATH?>img/lid2.jpg" alt="Post image">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                            <p class="uk-margin-remove uk-text-emphasis uk-text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur!</p>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-lighter uk-text-meta">29 Jan, 2019 - to - Febuary 2 2019</p>
                                        </div>
                                    </li>
                                    <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                        <div class="uk-width-auto">
                                            <div class="small-img-container">
                                                <img src="<?=ABS_PATH?>img/lid1.jpg" alt="Post image">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                            <p class="uk-margin-remove uk-text-emphasis uk-text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur!</p>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-lighter uk-text-meta">29 Jan, 2019 - to - Febuary 2 2019</p>
                                        </div>
                                    </li>
                                    <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                        <div class="uk-width-auto">
                                            <div class="small-img-container">
                                                <img src="<?=ABS_PATH?>img/lid2.jpg" alt="Post image">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                            <p class="uk-margin-remove uk-text-emphasis uk-text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur!</p>
                                            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-lighter uk-text-meta">29 Jan, 2019 - to - Febuary 2 2019</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-width-3-4@s uk-width-1-1@m">
                            <div class="intagram">
                                <h3><span uk-icon="instagram" class="uk-icon"></span> <span class="uk-text-primary uk-text-capitalize"> instagram feed</span></h3>
                                <div class="uk-card uk-card-default uk-card-body uk-height-large">
                                    instagram feed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- MODAL DIALOGE -->
<div id="eventmodal" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-1 uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('');" uk-height-viewport>
                <div class="uk-padding-large">
                    <h1><span class="txt-grad1 uk-text-capitalize">Title Heading For This Event</span></h1>
                    <hr class="uk-hr">
                    <div class="uk-child-width-1-1@s uk-flex-center uk-margin-medium-top" uk-grid>
                        <!-- LEFT SIDE ON MOBILE AND RIGHT ON LARGER SCREEN -->
                        <div class="uk-width-1-2@m uk-flex-last@s">
                            <div class="event-slides">
                                <div uk-slideshow="animation:slide; autoplay: true; autoplay-interval: 2000;">
                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                        <ul class="uk-slideshow-items">
                                            <li><img src="<?=ABS_PATH?>img/lid1.jpg" alt="slider image" uk-cover></li>
                                            <li><img src="<?=ABS_PATH?>img/lid2.jpg" alt="slider image" uk-cover></li>
                                            <li><img src="<?=ABS_PATH?>img/lid1.jpg" alt="slider image" uk-cover></li>
                                            <li><img src="<?=ABS_PATH?>img/lid2.jpg" alt="slider image" uk-cover></li>
                                        </ul>
                                        <a href="#" class="uk-position-center-left uk-position-small uk-hidden-hover" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                        <a href="#" class="uk-position-center-right uk-position-small uk-hidden-hover" uk-slidenav-next uk-slideshow-item="next"></a>
                                    </div>
                                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                </div>
                            </div>
                        </div>
                        <!-- RIGHT SIDE ON MOBILE AND LEFT ON LARGER SCREEN -->
                        <div class="uk-width-1-2@m uk-flex-first@s">
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
<script src="<?=PROOT?>assets/jquery-ui/jquery-ui.min.js"></script>
<script>
    // The Calender
    $('#Scalendar').datepicker({
        format: 'L',
        inline: true
    })
</script>
<?php $this->end(); ?>