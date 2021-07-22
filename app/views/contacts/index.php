<?php $this->setSiteTitle('Contact Us'); ?>
<?php $this->start('body'); ?>
<!-- GOOGLE MAP SECTION -->
<div class="uk-section uk-section-default uk-dark">
    <div class="uk-width-1-1@s uk-box-shadow-xlarge uk-height-large">
        <h1 class="uk-text-center uk-text-muted"><span class="txt-grad1">Google Map Location</span></h1>
    </div>
</div>
<!-- contact form section -->
<div class="uk-section uk-section-default uk-dark">
    <div class="uk-container uk-container-small">
        <h2 class="uk-text-center"><span class="txt-grad1">Get in Touch</span></h2><hr>
        <div class="uk-grid-column-small" uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1@s">
                <?php $this->partial('contacts', 'form'); ?>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-child-width-1-1@s uk-margin-large-top" uk-grid>
                    <div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-width-auto"><span class="uk-margin-right" uk-icon="icon: home;ratio: 1.5"></span></div>
                            <div class="uk-width-expand">
                                <h4 class="uk-margin-remove">Enugu Nigeria</h4>
                                <p class="uk-margin-remove uk-text-meta">Udi ukana</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-width-auto"><span class="uk-margin-right" uk-icon="icon: phone; ratio: 1.5"></span></div>
                            <div class="uk-width-expand">
                                <h4 class="uk-margin-remove">+234 81 3584 2050</h4>
                                <p class="uk-margin-remove uk-text-meta">Mon to Sun 9am to 6pm</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-width-auto"><span class="uk-margin-right" uk-icon="icon: mail; ratio: 1.5"></span></div>
                            <div class="uk-width-expand">
                                <h4 class="uk-margin-remove">solomonking284@gmail.com</h4>
                                <p class="uk-margin-remove uk-text-meta">Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->end(); ?>