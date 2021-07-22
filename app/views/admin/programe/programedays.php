<?php 
use Core\FH;
use Core\H;

$pro_days = (isset($this->programe_days) && !empty($this->programe_days))? $this->programe_days : [];
setcookie('programes', json_encode($this->programe_days), time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Programe Days</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <!-- PROGRAME DAYS -->
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center bg_green" style="padding:12px !important; color:#fff; font-size:20px;font-weight:bolder">
                            <p>Programe Days</p>
                        </div>
                        <div class=" uk-margin-medium-top uk-grid-small" uk-grid>
                            <div class="uk-width-1-1@s uk-width-2-3@m">
                                <div id="program_container" class="uk-child-width-auto uk-grid-small" uk-grid>
                                <?php foreach($pro_days as $val): ?>
                                    <div class="prg_card" index="<?=$val->index?>">
                                        <i class="uk-icon off-btn delete_pro" uk-icon="icon:trash" onclick="deleteProgram(this, all_program, 'programe_days')"></i>
                                        <i class="uk-icon off-btn edit_pro" uk-icon="icon:pencil" onclick="editProgram(this, 'program_form')"></i>
                                        <div class="uk-card uk-card-secondary uk-border-rounded uk-card-small uk-card-body">
                                            <p class="p_title uk-margin-remove">
                                                <?=$val->programe_title;?>
                                                <hr class="uk-margin-remove-top">
                                                <span class="p_day"><?=$val->programe_day;?> </span>
                                                <span class="p_timer"><?=$val->programe_time;?></span>
                                                <span class="uk-margin-right p_ampm"><?=$val->am_pm;?></span>
                                                <span class="p_location"><?=$val->programe_location;?></span>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-3@m">
                                <form id="program_form" class="uk-form-stacked" action="" method="post">
                                    <?= FH::displayErrors($this->displayErrors);?>
                                    <?= FH::iconInputBlock('text', 'label', 'programe_title', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: grid"], ["class"=>"uk-input","placeholder"=>"Programe Title"], ["class"=>"uk-margin-small"]);?>

                                    <?= FH::selectBlock("", 'programe_day', H::weekDays(), ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-small"]);?>

                                    <div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
                                        <?= FH::iconInputBlock('time', 'label', 'programe_time', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: clock"], ["class"=>"uk-input","placeholder"=>"Programe Time"], ["class"=>"uk-margin-small"]);?>

                                        <?= FH::selectBlock("", 'am_pm', H::dayNight(), ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-small uk-margin-remove-top"]);?>
                                    </div>

                                    <?= FH::iconInputBlock('text', 'label', 'programe_location', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: location"], ["class"=>"uk-input","placeholder"=>"Programe Location"], ["class"=>"uk-margin-small"]);?>
                                    <input type="hidden" name="index" id="index" value="">
                                    <?= FH::submitBlock('Generate Card', ['id'=>'programe_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-right']);?>
                                </form>
                            </div>
                            <div class="uk-width-1-1@s uk-text-center">
                                <?= FH::submitBlock('Complete Action', ['id'=>'programe_btn_save','class'=>'uk-button uk-button-primary uk-button-medium'], ['class'=>'uk-margin uk-text-center']);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
        $(document).ready(function(){
            all_program = []
            setLocalStorage(JSON.parse(getCookie('programes')), all_program);

            $('#programe_btn').click(function (e) {
                e.preventDefault();
                Sarray = $("#program_form").serializeArray();
                var objectF = loopFormSerializedArray(Sarray);
                if($("#program_form").find('#index').val().length === 0){
                    buildCard("#program_container", 'program_form', [all_program,"programe_days"], '', objectF.programe_title, [objectF.programe_day, objectF.programe_time, objectF.am_pm, objectF.programe_location, objectF.index]);
                    all_program[all_program.length] = objectF.index;
                    storage.setItem(objectF.index, JSON.stringify(objectF));
                }else{
                    objectF.index = $("#program_form").find('#index').val();
                    $("#program_container").find('div[index='+objectF.index+']').remove();
                    buildCard("#program_container", 'program_form', [all_program,"programe_days"], '', objectF.programe_title, [objectF.programe_day, objectF.programe_time, objectF.am_pm, objectF.programe_location, objectF.index]);
                    storage.setItem(objectF.index, JSON.stringify(objectF));
                    // bellow is a duplicate code modify it later
                    var container = [];
                    for(i=0; i<all_program.length; i++){
                        container[i] = JSON.parse(storage.getItem(all_program[i]));
                    }
                    let containerString = JSON.stringify(container);
                    saveJson(PROOT+'admin/saveJson/programe_days', 'programe_days', containerString, function (rep) {
                        if(rep.success){
                            Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', "Programe Edited Successfuly");
                        }
                    });
                }
                $("#program_form")[0].reset();$("#program_form").find('#index').val('');
            });

            $('#programe_btn_save').click(function (e) {
                var container = [];
                if(all_program.length == 0) return Toast('bg_red', 'txt-white', 'uk-position-top-right', "Nothing to save!!! Fill The Form In The Panel");
            
                for(i=0; i<all_program.length; i++){
                    container[i] = JSON.parse(storage.getItem(all_program[i]));
                }
                let containerString = JSON.stringify(container);
                saveJson(PROOT+'admin/saveJson/programe_days', 'programe_days', containerString, function (rep) {
                    if(rep.success){
                        Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', rep.data.msg);
                        // storage.clear();
                        for(i=0; i<all_program.length; i++){
                            storage.removeItem(all_program[i]);
                        }
                    }
                });
            });

        });
    </script>
<?php $this->end(); ?>