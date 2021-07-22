<?php
use Core\FH;
?>
<?php $this->setSiteTitle('Prayer Request'); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="txt-grad1">Prayer Request</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-child-width-1-1" uk-grid>
                <div>
                    <h5 class="uk-text-lead">We want to pray in aggrement with you</h5>
                    <p class="uk-text-bold">matt 3:5 (GoodNews)</p>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus illum laudantium animi blanditiis vitae sed, voluptatibus, facilis, quaerat voluptatem rem reiciendis! Nobis reprehenderit autem corrupti aspernatur? Praesentium ab, soluta reiciendis quia doloremque non dolorum quaerat illo ad blanditiis nemo? Voluptatum deserunt eligendi voluptatem. Commodi optio, cupiditate suscipit odit perspiciatis eligendi.</p>
                </div>
                <div class="">
                    <form class="uk-form-stacked" action="" method="post">
                        <!-- <?= FH::csrfInput();?>
                        <?= FH::displayErrors($this->displayErrors);?> -->
                        <div class="uk-child-width-1-2@s uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('text', 'First Name', 'fname','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Last Name', 'lname','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-child-width-1-1@s uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('text', 'Address', 'address','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('text', 'City', 'city','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'State', 'state','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Zip', 'zip','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Country', 'country','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                        </div>

                        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium" uk-grid>
                            <?= FH::inputBlock('email', 'E-mail', 'email','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::inputBlock('text', 'Phone', 'phone','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>

                            <?= FH::selectBlock('How did you here about us', 'select', ['value1'=>'value one', 'value2'=>'value two'], ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-select uk-border-rounded'], ['class'=>'']);?>

                            <!-- <?= FH::inputBlock('text', 'Subject', 'subject','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?> -->
                        </div>

                        <div class="uk-clearfix">
                             <?= FH::textAreaBlock('Prayer Request', 'body','', ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'5', 'placeholder'=>'State Your Prayer Request...'], ['class'=>'uk-margin uk-width-1-1@s uk-width-2-3@m uk-float-right']);?>
                        </div>
                       

                        <div class="uk-flex uk-flex-right">
                            <?= FH::submitBlock('Submit Request', ['class'=>'uk-button uk-button-default uk-button-danger'], ['class'=>'uk-margin uk-text-right']);?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<?php $this->end(); ?>