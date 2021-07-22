<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
    <link href="<?=PROOT?>assets/plugin/chartjs/Chart.min.css" rel="stylesheet">
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3"> Dashboard</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-4" uk-grid>
                <div>
                    <div class="uk-card uk-card-small uk-card-primary uk-card-body uk-border-rounded bg_blue">
                        <div style="margin-top:-10px; margin-left:-10px">
                            <h2 class="uk-text-bold uk-margin-small-bottom">150</h2>
                            <h5 class="uk-margin-remove-top uk-margin-bottom">New Order</h5>
                        </div>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light uk-padding-remove uk-text-center" style="padding:3px !important">
                            <p>Default Lorem</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-primary uk-card-body uk-border-rounded bg_gold">
                        <div style="margin-top:-10px; margin-left:-10px">
                            <h2 class="uk-text-bold uk-margin-small-bottom">150</h2>
                            <h5 class="uk-margin-remove-top uk-margin-bottom">User Registration</h5>
                        </div>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light uk-padding-remove uk-text-center" style="padding:3px !important">
                            <p>Default Lorem</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-primary uk-card-body uk-border-rounded bg_green">
                        <div style="margin-top:-10px; margin-left:-10px">
                            <h2 class="uk-text-bold uk-margin-small-bottom">150</h2>
                            <h5 class="uk-margin-remove-top uk-margin-bottom">Uniqe Visitors</h5>
                        </div>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light uk-padding-remove uk-text-center" style="padding:3px !important">
                            <p>Default Lorem</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-primary uk-card-body uk-border-rounded site-red-backgrond">
                        <div style="margin-top:-10px; margin-left:-10px">
                            <h2 class="uk-text-bold uk-margin-small-bottom">150</h2>
                            <h5 class="uk-margin-remove-top uk-margin-bottom">Blog Traffic Rate</h5>
                        </div>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light uk-padding-remove uk-text-center" style="padding:3px !important">
                            <p>Default Lorem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->
<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-2" uk-grid>
                <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <canvas id="barChart" width="400" height="400"></canvas>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <canvas id="lineChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <hr class="pr__vr__section"> -->
<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-2" uk-grid>
                <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <ul class="uk-tab-bottom" uk-tab>
                            <li class="uk-active"><a href="#">Left</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <canvas id="pieChart" width="400" height="400"></canvas>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <canvas id="doughnutChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <hr class="pr__vr__section"> -->
<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <ul class="uk-tab-bottom" uk-tab>
                            <li class="uk-active"><a href="#">Left</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                        <canvas id="mixedChart" width="400" height="400"></canvas>
                    </div>
                </div>
                <!-- <div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded">
                        <canvas id="Chart" width="400" height="400"></canvas>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->

<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script src="<?=PROOT?>assets/plugin/chartjs/Chart.min.js"></script>
<script>
    // data source
    var data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };
    var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
    // bar
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
    // line 
    var ctx = document.getElementById('lineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
    // For a pie chart
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });

    // And for a doughnut chart
    var ctx = document.getElementById('doughnutChart').getContext('2d');
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
    });

    // area
    var ctx = document.getElementById('mixedChart').getContext('2d');
    var mixedChart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'Bar Dataset',
                data: [10, 20, 30, 40],
                // this dataset is drawn below
                order: 1
            }, {
                label: 'Line Dataset',
                data: [10, 10, 10, 10],
                type: 'line',
                // this dataset is drawn on top
                order: 2
            }],
            labels: ['January', 'February', 'March', 'April']
        },
        options: options
    });
    
</script>
<?php $this->end(); ?>