<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->setSiteTitle('Login'); ?>
<?php $this->start('body'); ?>

    <div class="uk-section uk-section-default uk-dark uk-background-cover" style="background-image:url(<?=ABS_PATH?>img/lid.jpg)">
        <div class="uk-container uk-container-xsmall">
            <div class="uk-child-width-expand@s uk-box-shadow-xlarge uk-padding" uk-grid>
                <div>
                    <h3 class="uk-text-center">Login To Continue!</h3>
                    <form class="uk-form-stacked" action="<?=PROOT?>register/login" method="post">
                        <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?>
                        
                        <?= FH::inputBlock('text', 'Username', 'username',$this->login->username, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('password', 'Password', 'password','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::checkboxBlock('Remember Me', 'remember_me', $this->login->getRememberMeChecked(), ['class'=>'uk-checkbox'], ['class'=>'uk-margin ']);?>

                        <div class="uk-margin">
                            <div class="uk-flex uk-flex-center">
                                 <button class="uk-button uk-button-primary uk-width-2-3 uk-border-rounded uk-margin-small-bottom uk-text-capitalize">
                                     <span class="uk-icon uk-float-left uk-icon-button uk-text-danger" uk-icon="icon: google; ratio: 1.5" style="position:relative; left:-28px;"></span> 
                                     Sign In With Google
                                </button>
                            </div>
                        </div>
                       
                        <div class="uk-margin">
                            <div class="uk-flex uk-flex-center">
                                 <button class="uk-button uk-button-default uk-width-2-3 uk-border-rounded uk-margin-small-bottom uk-text-capitalize">
                                     <span class="uk-icon uk-float-left uk-icon-button uk-text-primary uk-background-muted" uk-icon="icon: facebook; ratio: 1.5" style="position:relative; left:-28px;"></span> 
                                     Sign In With Facebook
                                </button>
                            </div>
                        </div>

                        <?= FH::submitBlock('Login', ['class'=>'uk-button uk-button-default uk-button-primary'], ['class'=>'uk-margin']);?>
                        <div class="uk-text-right">
                            <a href="<?=PROOT?>register/register" class="uk-text-primary">Have You Registerd</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $this->end(); ?>