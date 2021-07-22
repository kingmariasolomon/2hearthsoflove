<?php $this->setSiteTitle('About Us'); ?>
<?php $this->start('body'); ?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> About Two Hearts Of Love <span> - </span> <small> Deliverace Ministry</small></span></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-1">
                <?php if(!empty($this->about)): ?>
                    <div class="uk-word-wrap" class="font18 line-height180 word-space10">
                        <?=html_entity_decode($this->about)?>
                    </div>
                <?php else: require_once "app/views/layouts/includes/commingsoon.php";?>
                <?php endif; ?>
                </div>
                <!-- <div class="uk-width-1-1">
                    <img data-src="<?=ABS_PATH?>img/lid1.jpg" alt="" ALIGN="left" class="uk-responsive uk-padding uk-padding-remove-left uk-padding-remove-top uk-width-1-1@s uk-width-2-3@m" uk-img>
                    <span class="font18 line-height180 word-space10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vitae autem? Delectus, molestias commodi exercitationem numquam deserunt cum maiores labore accusamus culpa modi aut voluptate quod ea error reiciendis explicabo pariatur quidem earum, est repellendus? Doloribus vitae sed, perspiciatis mollitia delectus voluptates eum neque ad quae quisquam sapiente voluptas autem natus veniam ipsam temporibus eaque ex itaque. Dolores, harum. Laboriosam, maiores saepe fugiat debitis cum temporibus, quisquam praesentium blanditiis eum qui hic! Aut porro sapiente tempore, voluptas voluptate saepe iure maiores rem quas impedit asperiores suscipit nemo temporibus. Illo nulla libero ea amet vitae veritatis, sit iure. Officiis perspiciatis numquam laborum id. Ipsum esse eligendi ducimus ad placeat cum veniam totam ratione ipsa. Expedita porro nemo cumque quis deleniti soluta odit, vero, earum sed quo modi fugit, totam minima corrupti architecto aut asperiores cupiditate. Laborum facere excepturi neque libero exercitationem aspernatur dolor? Voluptates eligendi tempore, provident omnis tempora exercitationem? Soluta iure incidunt illum hic doloribus. Aut vel reprehenderit quaerat dicta dignissimos! Soluta, laborum neque architecto sed nobis cum quis quisquam est tempore, ullam, adipisci aliquam. Eos earum eum quidem dolores voluptatibus atque repellat rem consequuntur voluptatum culpa perspiciatis, vero provident aperiam tempore eius soluta at porro pariatur amet exercitationem ipsa hic! Harum ipsum molestiae, quod ratione facere repellat a omnis optio praesentium laboriosam non pariatur ducimus sit? Rerum a error, omnis nostrum dolor obcaecati perspiciatis, deleniti, quasi atque iusto distinctio laborum aspernatur quisquam? Magnam dolores id porro consequuntur tempora omnis cupiditate. Voluptate dicta magnam exercitationem provident laboriosam minima consectetur debitis.</span>
                </div> -->
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<section class="uk-section uk-dark">
    <div class="section-heading uk-margin-medium-bottom">
        <div class="uk-container">
            <h1 class="uk-heading-bullet"><span class="txt-grad1"> Programe Days</span></small></h1> 
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-child-width-expans@s uk-child-width-1-3@m uk-text-center" uk-grid>
                <?php if(!empty($this->programes)): ?>
                    <?php foreach($this->programes as $key => $val): ?>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <h3><span style="border-bottom: 1px solid #e3e3e3; padding:0px 7px 5px 5px" class="uk-text-primary"><?=$val->programe_title;?></span></h3>
                                <p><span class="uk-text-danger"><?=$val->programe_day;?> </span> <?=$val->programe_time;?><sub> <?=$val->am_pm;?></sub> <span class="uk-inline-block uk-margin-left"> <?=$val->programe_location;?></span></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: require_once "app/views/layouts/includes/commingsoon.php";?>
                <?php endif; ?>
            </div>
            <!-- <div class="uk-child-width-expans@s uk-child-width-1-3@m uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3><span style="border-bottom: 1px solid #e3e3e3; padding:0px 7px 5px 5px" class="uk-text-primary"> Deliverance Sesssion</span></h3>
                        <p><span class="uk-text-danger">Sundays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ugwu-DI-Nso</span></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3><span style="border-bottom: 1px solid #e3e3e3; padding:0px 7px 5px 5px" class="uk-text-primary"> Mid-Week Prayer</span></h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3><span style="border-bottom: 1px solid #e3e3e3; padding:0px 7px 5px 5px" class="uk-text-primary"> Prayers And Counseling</span></h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
            </div> -->
            <div class="uk-child-width-expans uk-text-center" uk-grid>
                <div>
                    <div class="uk-margin-medium-top">
                        <h3><span class="site-red-color font-bold"> HeadQuarters Location</span></h3>
                        <p><span class="uk-text-danger">Thursdays </span> 10<sub> AM</sub> <span class="uk-inline-block uk-margin-left"> Ukana</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<hr class="pr__vr__section">

<?php $this->end(); ?>