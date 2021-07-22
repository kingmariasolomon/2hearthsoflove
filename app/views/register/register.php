<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->setSiteTitle('Register'); ?>
<?php $this->start('body'); ?>

    <div class="uk-section uk-section-default uk-dark uk-background-cover" style="background-image:url(<?=ABS_PATH?>img/lid.jpg)">
        <div class="uk-container uk-container-xsmall">
            <div class="uk-child-width-expand@s uk-box-shadow-xlarge uk-padding" uk-grid>
                <div>
                    <h3 class="uk-text-center">Become A Memeber Today!</h3>
                    <p>Enter Your Informations Below</p><hr>
                    <form class="uk-form-stacked" action="" method="post">
                        <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?>
                        
                        <?= FH::inputBlock('text', 'First Name', 'fname',$this->newUser->fname, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('text', 'Last Name', 'lname',$this->newUser->lname, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('email', 'E-mail', 'email',$this->newUser->email, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('text', 'Username', 'username',$this->newUser->username, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('password', 'Password', 'password', $this->newUser->password, ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

                        <?= FH::inputBlock('password', 'Confirm Password', 'confirm', $this->newUser->getConfirm( ), ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input'], ['class'=>'uk-margin']);?>

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

                        <?= FH::submitBlock('Register', ['class'=>'uk-button uk-button-default uk-button-primary'], ['class'=>'uk-margin uk-text-right']);?>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $this->end(); ?>