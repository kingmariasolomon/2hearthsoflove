<?php $this->setSiteTitle('Calender'); ?>
<?php $this->start('head'); ?>
<link href="<?=PROOT?>assets/plugin/fullcaledar/main.css" type="text/css" rel="stylesheet" />

<style>
    #calendar {
        max-width: 100%;
        margin: 0 auto;
    }
    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }
    #top {
        /* background: #eee; */
        border-bottom: 1px solid #ddd;
        padding: 3px 10px;
        margin: 20px 0px;
        line-height: 40px;
        font-size: 19px;
    }
</style>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="txt-grad1">Programe Calender</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-1">
                    <div id='top' class="uk-margin bg-grad2 uk-light">
                        <span class="uk-display-inline-block txt-white">Locales:</span>
                        <div class="uk-margin-left uk-display-inline-block">
                            <select id='locale-selector' class="uk-select txt-white" style="color:white;"></select>
                        </div>                        
                        
                    </div>
                    <div id="calendar" style="height: 800px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
        <h1 class="uk-heading-bullet"><span class="uk-text-danger">Google Calender</span></h1>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-flex uk-flex-around">
                <div class="uk-width-1-2">
                    <div id="loading">Loading...</div>
                    <div id="google-calendar" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<script src="<?=PROOT?>assets/plugin/fullcaledar/main.js"></script>
<script src='<?=PROOT?>assets/plugin/fullcaledar/locales-all.js'></script>
<!-- Two Heats Of Love Calendar -->
<script>
    /* initialize the calendar
     -----------------------------------------------------------------*/
    var storage = window.localStorage;
    var eventData = [];

    document.addEventListener('DOMContentLoaded', function() {
        eventData = JSON.parse(storage.getItem("eventData"));
        eventData.forEach(element => {
            element.start = new Date(element.start);
            element.end = new Date(element.end);
            element.backgroundColor = String(element.backgroundColor);
            element.borderColor = String(element.borderColor);
        });

        var initialLocaleCode = 'en';
        var localeSelectorEl = document.getElementById('locale-selector');
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay,listMonth,listWeek,listDay,listYear'
            },
            views: {
                listDay: { buttonText: 'list day' },
                listWeek: { buttonText: 'list week' },
                listMonth: { buttonText: 'list month' },
                listYear: { buttonText: 'list year' }
            },
            // initialDate: '2020-09-12',
            locale: initialLocaleCode,
            weekNumbers: true,
            businessHours: true,
            navLinks: true, // can click day/week names to navigate views
            dayMaxEvents: true, // allow "more" link when too many events
            events: eventData,
        });

        calendar.render();

        // build the locale selector's options
        calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
            var optionEl = document.createElement('option');
            optionEl.value = localeCode;
            optionEl.selected = localeCode == initialLocaleCode;
            optionEl.innerText = localeCode;
            localeSelectorEl.appendChild(optionEl);
        });

        // when the selected option changes, dynamically change the calendar option
        localeSelectorEl.addEventListener('change', function() {
            if (this.value) {
                calendar.setOption('locale', this.value);
            }
        });

    });

</script>

<!-- google calender -->
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var G_calendarEl = document.getElementById('google-calendar');

    var G_calendar = new FullCalendar.Calendar(G_calendarEl, {

      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
      },

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

      // US Holidays
      events: 'en.usa#holiday@group.v.calendar.google.com',

      eventClick: function(arg) {
        // opens events in a popup window
        window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

        arg.jsEvent.preventDefault() // don't navigate in main tab
      },

      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }

    });

    G_calendar.render();
  });

</script>
<?php $this->end(); ?>