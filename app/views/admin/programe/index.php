<?php 
use Core\FH;
use Core\H;

$programe = (isset($this->programes) && !empty($this->programes))? $this->programes : [];//H::dnd($programe);
// setcookie('programes', json_encode($this->programes), time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> programes</h2> 
            <div><?php require_once "app/views/layouts/includes/searchandfilter.php"; ?></div> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div>
                <?php if(!empty($programe)): ?>
                    <table class="uk-table uk-table-divider">
                        <thead style="position:sticky; top:100px; z-index:10;background:#fff">
                            <tr>
                                <th><input type="checkbox" name="check_all_prg" id="check_all_prg" class="uk-checkbox"></th>
                                <th>TITLE</th>
                                <th>DAY</th>
                                <th>TIME</th>
                                <th>AM/PM</th>
                                <th>VENUE</th>
                                <th>OPRATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($programe as $key => $val): ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="pr_all<?=$key?>" value="<?=$key?>" class="uk-checkbox pr_all">
                                </td>
                                <td><?=$val->programe_title;?></td>
                                <td><?=$val->programe_day;?></td>
                                <td><?=$val->programe_time;?></td>
                                <td><?=$val->am_pm;?></td>
                                <td><?=$val->programe_location;?></td>
                                <td>
                                    <a href="<?=PROOT?>admin/editprograme/<?=$key?>" class="uk-text-success no_link">
                                        <i class="uk-icon" uk-icon="icon: pencil"></i> <sub><small> Edit</small></sub> 
                                    </a>
                                    <a href="<?=PROOT?>admin/deleteprograme/<?=$key?>" class="uk-text-danger no_link" onclick="if(!confirm('Are You Sure?')){ return false;}">
                                        <i class="uk-icon red" uk-icon="icon: trash"></i> <sub><small class="red"> Delete</small></sub>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: require_once "app/views/layouts/includes/emptystate.php";?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->

<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <a href="<?=PROOT?>admin/addnewprograme" class="uk-button uk-button-text no_link" type="submit" uk-tooltip="title: Add New; pos:left">
        <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: plus; ratio:1.5"></span>
    </a>
    <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large uk-margin-right uk-text-right" >
            <a id="delete_all_prg" class="no_link uk-box-shadow" href="#" uk-toggle uk-tooltip="title: Delete; pos:left">
                <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:trash; ratio:1.5"></span>
            </a>
        </ul>
    </div>
</div>

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
    $(document).ready(function(){
        $("#check_all_prg").click(function(){
            if(is_checked("#check_all_prg")){
                $(".pr_all").prop("checked", true);
            }else{
                $(".pr_all").prop("checked", false);
            }
        });
        $(".pr_all").click(function(){
            if($(this.id+":checked").length != 0){
                $("#check_all_prg").prop("checked", false);
            }
        });

        $("#delete_all_prg").click(function (e) {
            var delete_all_prg_array = [];
            e.preventDefault();
            $(".pr_all").each(function (i) {
                if($(this).prop("checked") == true){
                    delete_all_prg_array[delete_all_prg_array.length] = $(this).val();
                }
            });
            var deleteData = new FormData();
            deleteData.append("delete_data", JSON.stringify(delete_all_prg_array));console.log(delete_all_prg_array);
            $.ajax({
                url : PROOT+"admin/deletemultipleprograme/delete_data",
                enctype: 'multipart/form-data',
                type : "POST",
                data : deleteData,
                processData: false,
                contentType: false,
                success : function(resp){console.log(resp);
                    if(resp.success){
                        // Toast("bg_green", 'color', "", resp.data.msg);
                        location.reload();
                    }else{ console.log(resp); }
                }
            });
        });
        
    });
</script>
<?php $this->end(); ?>