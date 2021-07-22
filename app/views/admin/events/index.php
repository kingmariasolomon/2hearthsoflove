<?php 
use Core\FH;
use Core\H;
?>
<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">Programe Events</h2> 
            <div><?php require_once "app/views/layouts/includes/searchandfilter.php"; ?></div> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div>
                <?php if(!empty($this->events)): ?>
                    <table class="uk-table uk-table-divider">
                        <thead>
                            <tr>
                                <th><input type="checkbox" name="check_all" id="check_all" class="uk-checkbox"></th>
                                <th>PICTURE</th>
                                <!-- <th>BODY</th> -->
                                <th>TITLE</th>
                                <th>VENUE</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>OPPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($this->events as $key => $val): ?>
                            <tr>
                                <td><input type="checkbox" name="br_all<?=$val->id?>" value="<?=$val->id?>" class="uk-checkbox br_all"></td>
                                <td><img id="piximg" width="200" src="<?=ABS_PATH.$val->pix;?>" alt="blog image"></td>
                                <td><?=$val->title;?></td>
                                <td><?=$val->venue;?></td>
                                <td><?=date("Y-m-d", strtotime($val->event_date));?></td>
                                <td><?=date("h:i A", strtotime($val->event_time));?></td>
                                <td>
                                    <a href="<?=PROOT?>events/editEvent/<?=$val->id?>" class="uk-text-success no_link">
                                        <i class="uk-icon" uk-icon="icon: pencil"></i> <sub><small> Edit</small></sub> 
                                    </a>
                                    <a href="<?=PROOT?>events/deleteAnEvent/<?=$val->id?>" class="uk-text-danger no_link" onclick="if(!confirm('Are You Sure?')){ return false;}">
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
    <a href="<?=PROOT?>events/addEvent" class="uk-button uk-button-text no_link" type="submit" uk-tooltip="title: Add New; pos:left">
        <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: plus; ratio:1.5"></span>
    </a>
    <div uk-drop="animation: uk-animation-slide-bottom-small; duration: 1000;offset: 5;pos: top-right">
        <ul class="uk-list uk-list-large uk-margin-right uk-text-right" >
            <a id="delete_all" class="no_link uk-box-shadow" href="#" uk-toggle uk-tooltip="title: Delete; pos:left">
                <span class="uk-icon uk-text-primary uk-margin-left" uk-icon="icon:trash; ratio:1.5"></span>
            </a>
        </ul>
    </div>
</div>

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
    $(document).ready(function(){
        $("#check_all").click(function(){
            if(is_checked("#check_all")){
                $(".br_all").prop("checked", true);
            }else{
                $(".br_all").prop("checked", false);
            }
        });
        $(".br_all").click(function(){
            if($(this.id+":checked").length != 0){
                $("#check_all").prop("checked", false);
            }
        });

        $("#delete_all").click(function (e) {
            e.preventDefault();     var delete_all_array = [];
            $(".br_all").each(function (i) {
                if($(this).prop("checked") == true){
                    delete_all_array[delete_all_array.length] = $(this).val();
                }
            });
            var deleteData = new FormData();
            deleteData.append("delete_data", JSON.stringify(delete_all_array));
            $.ajax({
                url : PROOT+"events/deletemultipleEvents/delete_data",
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