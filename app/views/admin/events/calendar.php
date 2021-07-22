<?php 
use Core\FH;
use Core\H;

// H::dnd($this->calendar);
?>
<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>
<?php $this->start('head'); ?>
<link href="<?=PROOT?>assets/jquery-ui/jquery-ui.min.css" type="text/css" rel="stylesheet" />
<link href="<?=PROOT?>assets/plugin/fullcaledar/main.css" type="text/css" rel="stylesheet" />
<style>
/* .fc-theme-standard .fc-scrollgrid {
	border: 1px solid #93908e;
}
.fc-theme-standard td, .fc-theme-standard th {
	border: 1px solid #93908e;
} */
.fc-theme-standard .fc-scrollgrid {
	border: 1px solid #000;
}
.fc-theme-standard td, .fc-theme-standard th {
	border: 1px solid #000;
}.uk-modal-header {
	background: #b2b2b1;
    /* color: #fff; */
}.uk-modal-footer {
	background: #b2b2b1;
    color: #fff;
}.uk-modal-dialog {
	background: #b2b2b1;
}
.uk-input, .uk-select, .uk-textarea {
	border: 1px solid #4e4d4d;
	background: #767778;
	color: #fff;
}
label{
    color: #fff;
}
</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Calender</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small" uk-grid>
                <!-- <div class="uk-width-1-1@s uk-width-1-4@m">
                    <div class="sticky-top">
                        <div class="uk-card uk-card-small uk-card-primary uk-border-rounded uk-margin-small-bottom">
                            <div class="uk-card-header uk-text-center" style="border-bottom: 1px solid #938872;">
                                <h4 class="uk-card-title">Draggable Events</h4>
                            </div>
                            <div class="uk-card-body ">
                                <div id="external-events">
                                    <div class="external-event bg-success uk-margin">Lunch</div>
                                    <div class="external-event bg-warning uk-margin">Go home</div>
                                    <div class="external-event bg-info uk-margin">Do homework</div>
                                    <div class="external-event bg-primary uk-margin">Work on UI design</div>
                                    <div class="external-event bg-danger uk-margin">Sleep tight</div>
                                    <div class="checkboxuk-margin">
                                        <label for="drop-remove">
                                            <input class="uk-checkbox" type="checkbox" id="drop-remove">
                                            remove after drop
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card uk-card-small uk-card-primary uk-border-rounded uk-margin-small-bottom">
                            <div class="uk-card-header uk-text-center" style="border-bottom: 1px solid #938872;">
                                <h4 class="uk-card-title">Create Event</h4>
                            </div>
                            <div class="uk-card-body ">
                                <div class="uk-btn-group" style="width: 100%; margin-bottom: 10px;">
                                    <ul class="fc-color-picker uk-list uk-inline" id="color-chooser">
                                        <li><a class="" href="#"><i class="fas fa-square text-primary"></i></a></li>
                                        <li><a class="" href="#"><i class="fas fa-square text-warning"></i></a></li>
                                        <li><a class="" href="#"><i class="fas fa-square text-success"></i></a></li>
                                        <li><a class="" href="#"><i class="fas fa-square text-danger"></i></a></li>
                                        <li><a class="" href="#"><i class="fas fa-square uk-text-muted"></i></a></li>
                                    </ul>
                                </div>
                                <div class="uk-margin">
                                    <input id="new-event" type="text" class="uk-input uk-form-width-small" placeholder="Event Title">
                                    <button id="add-new-event" type="button" class="uk-button uk-button-primary uk-button bg-success" style="padding: 0 15px;color:#8f9393 !important;background:#3d8585;margin-left:-5px;">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="uk-width-1-1@s">
                    <div class="uk-card uk-card-small uk-card-body uk-card-primary uk-border-rounded uk-margin-small-bottom" style="background-color: #413939;">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->
<!-- floating button -->
<div class="circle-btn uk-position-fixed uk-position-medium uk-position-bottom-right">
    <a href="" onclick="return false;" uk-toggle="target: #addevent" class="uk-button uk-button-text no_link" uk-tooltip="title: Add New Event; pos:left">
        <span class="uk-icon mod-icon-button bg_gold" uk-icon="icon: plus; ratio:1.5"></span>
    </a>

</div>
<!-- EVENT MODAL DIALOG -->
<div id="addevent" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Add Event Data</h2>
            <p class="uk-text-right" id="error"></p>
        </div>
        <div class="uk-modal-body">
            <div class="uk-margin">
                <label for="title">Title Of Event</label>
                <input id="title" name="title" type="text" class="uk-input" placeholder="Enter Title">
            </div>
            <div class="uk-margin">
                <label for="color">Color Of Event</label>
                <input id="color" name="color" type="color" class="uk-input">
            </div>
            <div class="uk-margin">
                <label for="start">Start Date Of Event</label>
                <input id="start" name="start" type="date" class="uk-input">
            </div>
            <div class="uk-margin">
                <label for="end">End Date Of Event</label>
                <input id="end" name="end" type="date" class="uk-input">
            </div>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close">Cancel</button>
            <button id="saveEvent" class="uk-button uk-button-primary">Save Changes</button>
        </div>
    </div>
</div>

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script src="<?=PROOT?>assets/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=PROOT?>assets/plugin/fullcaledar/main.js"></script>

<script>
    
    // var date = new Date()
    var storage = window.localStorage;
    var eventData = [];
    // var d    = date.getDate(),
    //     m    = date.getMonth(),
    //     y    = date.getFullYear()
        
    document.addEventListener('DOMContentLoaded', function() {
        $.get(PROOT+"events/getEvents", function(data){
            storage.setItem("eventData", data);
        });
        eventData = JSON.parse(storage.getItem("eventData"));//console.log(eventData);return;
        eventData.forEach(element => {
            element.start = new Date(element.start);
            element.end = new Date(element.end);
            element.backgroundColor = String(element.backgroundColor);
            element.borderColor = String(element.borderColor);
        });
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            editable: true,
            headerToolbar: {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: eventData,
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                // var title = prompt("Enter Event Title");
                // var start = new Date(start.start);
                // var end = new Date(start.end);
                // UIkit.modal("#addevent").show();
                // $("#saveEvent").click(function (e) {
                //     var title = $("#title").val();
                //     var color = $("#color").val();
                //     var start = new Date($("#start").val());
                //     var end = new Date($("#end").val());
                //     if(title && color && start && end){
                //         $.ajax({
                //             url: PROOT+"events/createEvent",
                //             type: "POST",
                //             data: {title: title, start:start, end:end, backgroundColor: color,borderColor: color},
                //             success: function (rep) {
                //                 console.log(rep);
                //                 new FullCalendar.Calendar("refetchEvents")
                //             }
                //         });
                //     }
                // });
                // if(title){
                //     $.ajax({
                //         url: PROOT+"events/createEvent",
                //         type: "POST",
                //         data: {title: title, start:s, end:e, backgroundColor: '#00c0ef',borderColor: '#00c0ef'},
                //         success: function (rep) {
                //             console.log(rep);
                //             new FullCalendar.Calendar("refetchEvents")
                //         }
                //     });
                // }
            },
            editable: true,
            eventResize: function(event){
                even = event.event._def;
                even2 = event.event._instance.range;
                var id = even.publicId;
                var title = even.title;
                var s = even2.start;
                var e = even2.end;
                $.ajax({
                    url: PROOT+"events/updateEvent/"+id,
                    type: "POST",
                    data: {id: id, title: title, start:s, end:e},
                    success: function (rep) {
                        console.log(rep);
                        new FullCalendar.Calendar("refetchEvents")
                    }
                });
            },
            eventDrop: function(event){
                var color = event.el.attributes.style.nodeValue;
                color = color.substr(0, color.length-1).split(";");//console.log(color);return;
                even = event.event._def;
                even2 = event.event._instance.range;
                var id = even.publicId;
                var title = even.title;
                var start = even2.start;
                var end = even2.end;
                var border = color[0].substr(color[0].indexOf(":")+1, color[0].length).trim();
                var background = color[1].substr(color[1].indexOf(":")+1, color[1].length).trim();
                $.ajax({
                    url: PROOT+"events/updateEvent/"+id,
                    type: "POST",
                    data: {id: id, title: title, start:start, end:end, backgroundColor: background,borderColor: border},
                    success: function (rep) {
                        console.log(rep);
                        new FullCalendar.Calendar("refetchEvents")
                    }
                });
            },
            eventClick: function(event){
                even = event.event._def;
                if(confirm("Are You You Want To Delete This Event?")){
                    var id = even.publicId;
                    $.ajax({
                        url: PROOT+"events/deleteEvent/"+id,
                        type: "POST",
                        data: {id: id},
                        success: function (rep) {
                            console.log(rep);
                            new FullCalendar.Calendar("refetchEvents")
                        }
                    });
                }
            },
        });

        calendar.render();
        $("#saveEvent").click(function (e) {
            var title = $("#title").val();
            var color = $("#color").val();
            var start = new Date($("#start").val());
            var end = new Date($("#end").val());
            if(title && color && start && end){
                $.ajax({
                    url: PROOT+"events/createEvent",
                    type: "POST",
                    data: {title: title, start:start, end:end, backgroundColor: color,borderColor: color},
                    success: function (rep) {
                        console.log(rep);
                        UIkit.modal("#addevent").hide();location.reload();
                        new FullCalendar.Calendar("refetchEvents")
                    }
                });
            }
        });
    });
 

</script>
<?php $this->end(); ?>