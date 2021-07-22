<?php
use Core\FH;
use Core\H;
?>

    <form class="uk-form-stacked" action="" method="post">
        <?= FH::csrfInput();?>
        <?= FH::displayErrors($this->displayErrors);?>
        <div class="uk-child-width-1-2@s uk-margin-medium" uk-grid>
            <?= FH::inputBlock('text', 'First Name', 'fname','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

            <?= FH::inputBlock('text', 'Last Name', 'lname','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
        </div>

        <div class="uk-child-width-1-2@s uk-margin-medium" uk-grid>
            <?= FH::inputBlock('email', 'E-mail', 'email','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

            <?= FH::inputBlock('text', 'Subject', 'subject','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
        </div>

        <?= FH::textAreaBlock('Your message', 'body','', ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'5', 'placeholder'=>'Enter Your Message...'], ['class'=>'uk-margin']);?>

        <div class="uk-flex uk-flex-between uk-flex-middle">
            <!-- <div> -->
                <div class="uk-text-left">
                    <a href="<?=PROOT?>" class="uk-text-primary">Cancel</a>
                </div>
                <?= FH::submitBlock('Save', ['class'=>'uk-button uk-button-default uk-button-primary'], ['class'=>'uk-margin uk-text-right']);?>
            <!-- </div> -->
        </div>
    </form>


