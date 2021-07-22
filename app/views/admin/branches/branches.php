<?php 
use Core\FH;
use Core\H;

$branch = (isset($this->branches) && !empty($this->branches))? $this->branches : [];
setcookie('branches', json_encode($this->branches), time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Branches</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <!-- BRANCHES LOCATION -->
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-light uk-padding-remove uk-text-center site-red-backgrond" style="padding:12px !important; color:#fff; font-size:20px;font-weight:bolder">
                            <p>Organization Branches</p>
                        </div>
                        <div class=" uk-margin-medium-top uk-grid-small" uk-grid>
                            <div class="uk-width-1-1@s uk-width-1-3@m">
                                <form id="form_branch" class="uk-form-stacked" action="" method="post" enctype="multipart/form-data">
                                    <?= FH::displayErrors($this->displayErrors);?>
                                    <?= FH::iconInputBlock('text', 'label', 'branch_location', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: location"], ["class"=>"uk-input","placeholder"=>"Branch Location Address"], ["class"=>"uk-margin-small"]);?>
        
                                    <?= FH::iconInputBlock('text', 'label', 'b_community', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: grid"], ["class"=>"uk-input","placeholder"=>"Branch Community"], ["class"=>"uk-margin-small"]);?>

                                    <?= FH::iconInputBlock('text', 'label', 'b_state', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: clock"], ["class"=>"uk-input","placeholder"=>"State Of The Location"], ["class"=>"uk-margin-small"]);?>

                                    <?= FH::iconInputBlock('text', 'label', 'b_country', '', ["class"=>"uk-inline width100"], ["class"=>"uk-form-icon blue", "uk-icon"=>"icon: location"], ["class"=>"uk-input","placeholder"=>"Country Of The Location"], ["class"=>"uk-margin-small"]);?>

                                    <?= FH::selectBlock("", 'location_type', ["Branch"=>"Branch", "Headquaters"=>"Headquaters"], ["class"=>"uk-form-controls"], $labelAttrs=[], ["class"=>"uk-select"], ["class"=>"uk-margin-small uk-margin-remove-top"]);?>
                                    <input type="hidden" name="index" id="index" value="">
                                    <?= FH::submitBlock('Save', ['id'=>'branch_btn','class'=>'uk-button uk-button-danger uk-button-small'], ['class'=>'uk-margin uk-text-left']);?>
                                </form>
                            </div>
                            <div class="uk-width-1-1@s uk-width-2-3@m">
                                <div id="branch_container" class="uk-child-width-auto uk-grid-small" uk-grid>
                                <?php foreach($branch as $val): ?>
                                    <div class="prg_card" index="<?=$val->index?>">
                                        <i class="uk-icon off-btn delete_pro" uk-icon="icon:trash" onclick="deleteProgram(this, all_branch, 'branches')"></i>
                                        <i class="uk-icon off-btn edit_pro" uk-icon="icon:pencil" onclick="editProgram(this, 'form_branch')"></i>
                                        <div class="uk-card uk-card-secondary uk-border-rounded uk-card-small uk-card-body">
                                            <p class="p_title uk-margin-remove">
                                                <?=$val->location_type;?>
                                                <hr class="uk-margin-remove-top">
                                                <span class="p_day"><?=$val->b_community;?> </span>
                                                <span class="p_timer"><?=$val->b_state;?></span>
                                                <span class="uk-margin-right p_ampm"><?=$val->b_country;?></span>
                                                <span class="p_location"><?=$val->branch_location;?></span>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-text-center">
                                <?= FH::submitBlock('Complete Action', ['id'=>'branch_btn_save','class'=>'uk-button uk-button-primary uk-button-medium'], ['class'=>'uk-margin uk-text-center']);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->

<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <!-- <button class="uk-button uk-button-primary uk-border-circle" type="button">Ho</button> -->
    <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: plus; ratio:1.5"></span>
    <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large btn-li uk-margin-right uk-text-right" >
            <a class="no_link" href="#get_offering_report" uk-toggle>
                <li class="uk-margin-top">delete
                    <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:trash; ratio:1.5"></span>
                 </li>
            </a>
            <a class="no_link" href="#get_offering_report" uk-toggle>
                <li class="uk-margin-top">Updates
                    <span class="uk-icon uk-text-danger uk-margin-left" uk-icon="icon:microphone; ratio:1.5"></span>
                </li>
            </a>
            <!-- <li><span class="uk-icon uk-text-warning" uk-icon="icon:heart; ratio:2"></span></li>
            <li><span class="uk-icon" uk-icon="icon:heart; ratio:2"></span></li> -->
        </ul>
    </div>
</div>
<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
        $(document).ready(function(){
            all_branch = []; // set to global for local storage data structure
            setLocalStorage(JSON.parse(getCookie('branches')), all_branch);

            $('#branch_btn').click(function (e) {
                e.preventDefault();
                Sarray = $("#form_branch").serializeArray();
                var objectF = loopFormSerializedArray(Sarray);
                if($("#form_branch").find('#index').val().length === 0){
                    buildCard("#branch_container", 'form_branch', [all_branch, "branches"], '', objectF.location_type, [objectF.b_community, objectF.b_state, objectF.b_country, objectF.branch_location, objectF.index]);
                    all_branch[all_branch.length] = objectF.index;
                    storage.setItem(objectF.index, JSON.stringify(objectF));
                }else{
                    objectF.index = $("#form_branch").find('#index').val();
                    $("#branch_container").find('div[index='+objectF.index+']').remove();
                    buildCard("#branch_container", 'form_branch', [all_branch, "branches"], '', objectF.location_type, [objectF.b_community, objectF.b_state, objectF.b_country, objectF.branch_location, objectF.index]);
                    storage.setItem(objectF.index, JSON.stringify(objectF));
                    // bellow is a duplicate code modify it later
                    var container = [];
                    for(i=0; i<all_branch.length; i++){
                        container[i] = JSON.parse(storage.getItem(all_branch[i]));
                    }console.log(all_branch);
                    let containerString = JSON.stringify(container);
                    saveJson(PROOT+'admin/saveJson/branches', 'branches', containerString, function (rep) {
                        if(rep.success){
                            Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', "Programe Edited Successfuly");
                        }
                    });
                }
                $("#form_branch")[0].reset();$("#form_branch").find('#index').val('');
            });

            $('#branch_btn_save').click(function (e) {
                var container = [];
                if(all_branch.length == 0) return Toast('bg_red', 'txt-white', 'uk-position-top-right', "Nothing to save!!! Fill The Form In The Panel");
            
                for(i=0; i<all_branch.length; i++){
                    container[i] = JSON.parse(storage.getItem(all_branch[i]));
                }
                let containerString = JSON.stringify(container);
                saveJson(PROOT+'admin/saveJson/branches', 'branches', containerString, function (rep) {
                    if(rep.success){
                        Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', rep.data.msg);
                        // storage.clear();
                        for(i=0; i<all_branch.length; i++){
                            storage.removeItem(all_branch[i]);
                        }
                    }
                });
            });
        });
    </script>
<?php $this->end(); ?>