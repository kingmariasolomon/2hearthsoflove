<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Donations'); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-text-center"><span class="txt-grad1">Methods Of Giving</span></h1>  
            <hr class="uk-hr">
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-slider>
                <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider=""  uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300">
                    <ul class="uk-slider-items uk-grid-column-small uk-grid-match" uk-grid>
                        <li class="uk-width-1-3@m uk-text-center">
                            <div class="uk-flex uk-flex-column">
                                <div class=""><h2 class="uk-text-bold uk-text-muted">Online</h2></div>
                                <div class="uk-margin-top"><img src="<?=ABS_PATH?>img/aaa.jpg" width="100%" alt=""></div>
                                <div class="uk-margin-top"><button class="uk-button uk-button-large uk-width-1-1 uk-margin-small-bottom uk-button-danger uk-border-pill">Donate</button></div>
                            </div>
                        </li>
                        <li class="uk-width-1-3@m uk-text-center">
                            <div class="uk-flex uk-flex-column">
                                <div class=""><h2 class="uk-text-bold uk-text-muted">In Service</h2></div>
                                <div class="uk-margin-top"><img src="<?=ABS_PATH?>img/env/en1.jpg" width="100%" alt=""></div>
                                <div class="uk-margin-top"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nam adipisci soluta, laboriosam repudiandae at fugit</p></div>
                            </div>
                        </li>
                        <li class="uk-width-1-3@m uk-text-center">
                            <div class="uk-flex uk-flex-column">
                                <div class=""><h2 class="uk-text-bold uk-text-muted">With Text</h2></div>
                                <div class="uk-margin-top"><img src="<?=ABS_PATH?>img/phone/p1.jpg" width="100%" alt=""></div>
                                <div class="uk-margin-top"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nam adipisci soluta</p></div>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-dark uk-background-muted">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h3 class="uk-text-center"><span class="uk-text-secondary">Online Giving</span></h3>  
            <hr class="uk-hr">
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-child-width-1-1" uk-grid>
                <div class="credit_card uk-margin-large-bottom">
                    <p class="h4 uk-text-bold uk-text-uppercase">Credit Card Options</p>
                    <div class="uk-flex uk-flex-center uk-flex-wrap uk-flex-wrap-between">
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_gold" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_green" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_blue" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_red" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_orange" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="others uk-margin-large-top">
                    <p class="h4 uk-text-bold uk-text-uppercase">Other Options</p>
                    <div class="uk-flex uk-flex-center uk-flex-wrap uk-flex-wrap-between">
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_darkgrey" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_purple" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                        <a class="no_link" href="#giveonline" uk-toggle>
                            <div class="uk-card uk-card-primary uk-card-body uk-card-small uk-border-rounded uk-margin-right uk-margin-medium-bottom bg_blue" style="width:250px">
                                <p class="uk-h4 uk-margin-remove scale">Access Bank</p>
                                <small>Powerd By Stripe</small>
                                <span class="uk-icon uk-position-center-right uk-margin-right scale_no_origin" uk-icon="icon:heart; ratio:2"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <!-- <button class="uk-button uk-button-primary uk-border-circle" type="button">Ho</button> -->
    <span class="uk-icon mod-icon-button mini-pulse" uk-icon="icon: info; ratio:2"></span>
    <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large btn-li uk-margin-right uk-text-right" >
            <a class="no_link" href="#get_offering_report" uk-toggle><li class="uk-margin-top">Get Your Offering Reports <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:history; ratio:2"></span> </li></a>
            <a class="no_link" href="#get_offering_report" uk-toggle><li class="uk-margin-top">Recent Updates<span class="uk-icon uk-text-danger uk-margin-left" uk-icon="icon:microphone; ratio:2"></span> </li></a>
            <!-- <li><span class="uk-icon uk-text-warning" uk-icon="icon:heart; ratio:2"></span></li>
            <li><span class="uk-icon" uk-icon="icon:heart; ratio:2"></span></li> -->
        </ul>
    </div>
</div>

<!-- GIvE ONLINE TRANSACTION MODAL -->
<div id="giveonline" uk-modal>
    <div class="uk-modal-dialog" uk-overflow-auto>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h4 class="uk-text-muted">Donate Through {{transfer}}</h4>
        </div>
        <div class="uk-modal-body">
            <div class="uk-child-width-expand@s" uk-grid>
                <div>
                    <form class="uk-form-stacked" action="<?=PROOT?>" method="post">
                        <!-- <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?> -->
                        
                        <?= FH::inputBlock('email', 'Email', 'email','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-input'], ['class'=>'uk-margin-small']);?>

                        <div class="uk-margin-small">
                            <label class="uk-form-label uk-text-bold uk-text-muted" for="donation_type">Type Of Donation</label>
                            <select class="uk-select">
                                <option>Option 01</option>
                                <option>Option 02</option>
                            </select>
                        </div>

                        <?= FH::inputBlock('number', 'Amount', 'amount','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-input'], ['class'=>'uk-margin-small']);?>

                        <?= FH::textAreaBlock('Drop Your message If Any', 'message','', ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'3', 'placeholder'=>'Enter Your Message...'], ['class'=>'uk-margin-small']);?>

                        <div class="uk-margin-small">
                            <label class="uk-form-label uk-text-bold uk-text-muted" for="currency">Choose Currency</label>
                            <select class="uk-select">
                                <option>Option 01</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                        <div class=" uk-text-right">
                            <button class="uk-button uk-button-danger" type="button">Donate Now</button>
                        </div>
                        <!-- <?= FH::submitBlock('Login', ['class'=>'uk-button uk-button-default uk-button-primary'], ['class'=>'uk-margin-small']);?>
                        <div class="uk-text-right">
                            <a href="<?=PROOT?>register/register" class="uk-text-primary">Have You Registerd</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
        <!-- footer area -->
    </div>
</div>

<!-- GET YOUR OFFERING REPORT -->
<div id="get_offering_report" uk-modal>
    <div class="uk-modal-dialog" uk-overflow-auto>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h4 class="uk-text-muted">Get Your Offering Report</h4>
        </div>
        <div class="uk-modal-body">
            <div class="uk-child-width-expand@s" uk-grid>
                <div>
                    <small class="h5 uk-text-primary uk-display-block uk-margin-bottom uk-text-right uk-text-center@s">A mail will be sent you with a unique web address to view you giving history </small>
                    <form class="uk-form-stacked" action="<?=PROOT?>" method="post">
                        <!-- <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?> -->
                        
                        <?= FH::inputBlock('email', 'Email', 'email','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-input'], ['class'=>'uk-margin-small']);?>

                        <?= FH::inputBlock('text', 'Start Date', 'startdate','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-input datepicker flatpickr-input'], ['class'=>'uk-margin-small']);?>

                        <?= FH::inputBlock('text', 'End Date', 'enddate','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label uk-text-bold uk-text-muted'], ['class'=>'uk-input datepicker flatpickr-input'], ['class'=>'uk-margin-small']);?>

                        <div class=" uk-text-right">
                            <?= FH::submitBlock('Send Request', ['class'=>'uk-button uk-button-danger'], ['class'=>'uk-margin-small']);?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- footer area -->
    </div>
</div>
<?php $this->end(); ?>