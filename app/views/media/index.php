<?php $this->setSiteTitle('About Us'); ?>
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
                <div class="uk-width-1-1@s uk-width-2-3@m">
                    <div class="uk-child-width-expands" uk-grid>
                        <div>
                            <div class="local_video">
                                <div class="uk-card uk-card-default uk-card-body">
                                    <video width="100%" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" uk-video=""></video>
                                </div> 
                            </div>
                        </div>
                        <div class="uk-hidden">
                            <div class="youtube_video">
                                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" width="100%" height="500px" allowfullscreen uk-responsive uk-video="automute: false;"></iframe>
                            </div>
                        </div>
                        
                        <div class="uk-hidden">
                            <div class="local_audio">
                                <div class="uk-card uk-card-default uk-card-body">
                                    <audio controls>
                                        <source src="horse.ogg" type="audio/ogg">
                                        <source src="horse.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                                
                            </div>
                        </div>
                        <div class="others">
                            <div class="uk-column-1-4">
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                                <div class="uk-card uk-card-primary uk-card-body uk-margin-bottom">Item</div>
                            </div>
                        </div>
                        <div class="pagination">
                            <ul class="uk-pagination uk-flex-center" uk-margin>
                                <li><a href="#"><span uk-pagination-previous></span></a></li>
                                <li class="uk-active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><span uk-pagination-next></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- RIGHT COLUMN -->
                <div class="uk-width-1-1@s uk-width-1-3@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-text-primary font-bold">Media Categories</h3>
                        <ul id="medias" class="uk-list">
                            <li><span class="uk-margin-right" uk-icon="youtube"></span> Youtube Videos</li>
                            <li><span class="uk-margin-right" uk-icon="video-camera"></span> Our Media Videos</li>
                            <li><span class="uk-margin-right" uk-icon="play"></span> Audio Videos</li>
                            <li><span class="uk-margin-right" uk-icon="camera"></span> Photo Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- <section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> Programe Days</span></small></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-child-width-expans@s uk-child-width-1-3@m uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3>Deliverance Sesssion</h3>
                        <p><span class="uk-text-danger">Sundays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ugwu-DI-Nso</span></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3>Mid-Week Prayer</h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3>Prayers And Counseling</h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-expans uk-text-center" uk-grid>
                <div>
                    <div class="uk-margin-medium-top">
                        <h3><span class="site-red-color font-bold"> HeadQuarters Location</span></h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<hr class="pr__vr__section"> -->

<?php $this->end(); ?>