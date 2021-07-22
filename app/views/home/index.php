<?php 
use Core\Router;
$menu = Router::getMenu('menu_acl');

$this->start('body'); 
?>

<hr class="pr__vr__section">
<section class="uk-section uk-dark">
    <div class="uk-container uk-container-medium" uk-scrollspy="cls: uk-animation-slide-left; delay: 500">
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid>
            <div>
                <div class="inner uk-height-match">
                    <span class="uk-icon site-darkblue-color" uk-icon="icon: mail;ratio: 1.5"></span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quidem voluptatum minus inventore? In quaerat neque quia beatae quas nihil!</p>
                    <div class="uk-animation-toggle" tabindex="0">
                        <button class="uk-button-small uk-button-danger uk-border-rounded uk-animation-scale-up">Subscribe</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="inner uk-height-match">
                    <span class="uk-icon site-darkblue-color" uk-icon="icon: home;ratio: 1.5"></span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut error impedit fuga aperiam laborum commodi optio, est illo. Quia, quam!</p>
                    <button class="uk-button-small uk-button-danger uk-border-rounded">Give</button>
                </div>
            </div>
            <div>
                <div class="inner uk-height-match">
                    <span class="uk-icon site-darkblue-color" uk-icon="icon: play-circle;ratio: 1.5"></span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, impedit perspiciatis? Unde esse reiciendis adipisci! Possimus, incidunt quas? Totam, omnis.</p>
                    <button class="uk-button-small uk-button-danger uk-border-rounded">Watch</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-section-xsmall uk-light bg-grad1">
    <div class="uk-container uk-container-xsmall bg-grad1 uk-padding-small uk-border-rounded" uk-scrollspy="cls: uk-animation-slide-top; delay: 500">
        <div class="uk-child-width-1-1@s uk-text-center" uk-grid>
            <div>
                <div class="inner">
                    <h2 class="uk-margin-remove">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, fugiat.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<section class="uk-section uk-dark">
    <div class="uk-container uk-container-medium" uk-scrollspy="cls: uk-animation-slide-right; delay: 300">
        <div class="uk-child-width-1-1@s uk-text-left" uk-grid>
            <h1 class="uk-margin-remove txt-grad1 uk-heading-bullet">About Two Hearts Of Love</h1>
            <div>
                <div class="inner uk-width-2-3@s">
                    <p class="uk-text-lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatibus illum modi temporibus omnis pariatur quasi officia ullam saepe quisquam dolor quae aperiam, hic vero aliquam nihil? Pariatur expedita harum, aut porro quaerat itaque perferendis repudiandae quae ut magni obcaecati mollitia vero quisquam tempora odio! Quod sequi nostrum culpa molestiae voluptate voluptates, molestias esse enim dolore dolores similique reprehenderit. Dolorum voluptatum dolor</p>
                </div>
            </div>
            <div>
                <div class="inner"><button class="uk-button-danger uk-button-small">Learn More...</button></div>
            </div>
        </div>
    </div>
</section>
<hr class="pr__vr__section">

<!-- EVENT SECTION -->
<section class="uk-section">
    <div class="uk-padding uk-flex uk-flex-between">
        <div class="">
            <h1 class="uk-margin-large-bottom uk-heading-bullet"><span class="txt-grad1"> Our Events</span></h1>
        </div>
        <div><a href="<?=(isset($menu['Events']))? $menu['Events'] : "";?>" class="uk-button uk-button-medium uk-button-danger">View All Events</a></div>
    </div>
    
    <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider="center: true; autoplay:true; autoplay-interval: 2000"  uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300">
        <ul class="uk-slider-items uk-grid-column-small uk-grid-match uk-background-muted" uk-grid>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-4@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-text-bolder uk-text-capitalize"><span class="site-darkblue-color font-bold"> Title Of Events</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="uk-text-right">
                            <a href="#" class="uk-button uk-button-text uk-text-danger uk-text-capitalize ">Read More</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<hr class="pr__vr__section">

<!-- BLOG SECTION -->
<section class="uk-section">
    <div class="uk-padding uk-flex uk-flex-between">
        <div class="">
            <h1 class="uk-margin-large-bottom uk-heading-bullet"><span class="txt-grad1"> Our Blog</span></h1>
        </div>
        <div><a href="<?=(isset($menu['Blog']))? $menu['Blog'] : "";?>" class="uk-button uk-button-medium uk-button-danger">All Blog Post</a></div>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true; autoplay:true; autoplay-interval: 2000"  uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300">
        <ul class="uk-slider-items uk-grid-column-small uk-grid-match uk-background-muted blog-content" uk-grid>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                            
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                            
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                            
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid1.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                            
                        </p>
                    </div>
                </div>
            </li>
            <li class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-border-rounded card-ctm-blog">
                    <div class="uk-card-media-top">
                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="">
                    </div>
                    <div class="uk-card-body bg-grad2 uk-light">
                        <h3 class="uk-text-bolder uk-text-capitalize"><a href="#" class="blog-title font-bold"> Blog Title</a></h3>
                        <p class="font20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ducimus obcaecati possimus ex pariatur voluptas praesentium delectus porro, dolorum nam.</p>
                        <p class="">
                            <div class="uk-flex uk-flex-between uk-text-capitalize font12">
                                <div><span class="uk-margin-small-right" uk-icon="calendar"></span> 13 Dec</div>
                                <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                            </div>
                            
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</section>
<hr class="pr__vr__section">




















<!-- <div onclick="ajaxTest();">Click me!!!</div> -->

<!-- <script>
    function ajaxTest(){
        $.ajax({
            url : '<?=PROOT?>home/testAjax',
            type : "POST",
            data : {model_id : 25},
            success : function(resp){
                if(resp.success){
                    alert(resp.data.name);
                }
                console.log(resp);
            }
        });
    }
</script> -->
<?php $this->end(); ?>