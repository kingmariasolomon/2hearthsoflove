<?php 
use Core\Router;
use Core\Pagination;
use Core\H;
$months = H::monthsIndex();
$menu = Router::getMenu('menu_acl');
$single_blog_link = substr($menu['Blog'], 0, stripos($menu['Blog'],'page'));
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

$paging = new Pagination();
$paging->set('urlscheme',PROOT.'blog/page/%page%');
$paging->set('perpage',5);//THIS MUST ALSO BE SET TO BE THE SAME IN BLOGS CONTROLLER pageAction method IN $limit = 5 VARIABLE;
// SETTING THIS FROM THE  URL WILL CAUSE SECURITY ISSUES
$paging->set('page',max(1,intval(isset($url[2])? $url[2] : 1)));
$paging->set('total',$this->total);
$paging->set('nexttext','Next');
$paging->set('prevtext','Previous');
$paging->set('focusedclass','selected');
$paging->set('delimiter','');
$paging->set('numlinks',5);

$this->setSiteTitle('Blog');
$this->start('body'); 
?>

<section class="uk-section uk-dark">
    <div class="uk-container uk-container-medium">
        <div class="uk-flex uk-flex-between">
            <div class="">
                <h1 class="uk-heading-bullet"><span class="txt-grad1">Welcome To Blog Page</span></h1>
            </div>
            <div class="uk-margin uk-padding-small uk-box-shadow-medium">
                <div class="uk-width-medium uk-padding-small">
                    <form id="search_form" method="POST" action="<?=PROOT.'blog/page/1';?>" class="uk-search uk-search-default uk-width-expands">
                        <a id="search_btn" href="#" class="uk-search-icon-flip" uk-search-icon></a>
                        <input id="search_input" name="input" type="search" class="uk-search-input" placeholder="Search ...">
                    </form>
                </div>
            </div>
        </div>
        
        <div class="uk-child-width-1-1@s uk-grid-column-large" uk-grid>
            <!-- LEFT COLUMN -->
            <div class="uk-width-2-3@m uk-padding uk-padding-remove-top">
            <?php if(!empty($this->blogs)): ?>
                <?php foreach($this->blogs as $k => $val): 
                    $date = explode('-', explode(' ', $val->date)[0]);
                ?>
                <div class="single-content uk-margin-large-bottom">
                    <div class="uk-width-1-1@s">
                        <div class="uk-overflow-hidden uk-inline">
                            <img src="<?=ABS_PATH?><?=$val->pix?>" alt="BLOG IMAGE" uk-img>
                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-flex uk-flex-middle">
                                <p class="uk-text-capitalize"><?=$val->author['name']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s">
                        <div class="uk-margin-medium-bottom uk-margin-small-top">
                            <h2 class="uk-text-capitalize font-bold"><a href="<?=(isset($menu['Blog']))? $single_blog_link .'details/'.$val->id : "";?>"> <?=$val->title?></a></h2>
                            <div>
                            <?=H::limit_text(html_entity_decode($val->body), 20)?>
                            </div>
                            <p>
                                <div class="uk-flex uk-flex-between uk-text-capitalize">
                                    <div><span class="uk-margin-small-right" uk-icon="calendar"></span><?=$date[2]. ' '. $months[$date[1]];?></div>
                                    <div><span class="uk-margin-small-right"><i class="far fa-eye"></i></span><?=$val->no_of_views?></div>
                                    <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                    <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                                </div>
                            </p>
                            <p class="uk-text-right">
                                <a href="<?=(isset($menu['Blog']))? $single_blog_link .'details/'.$val->id : "";?>" class="uk-button uk-button-primary">Read More</a>
                            </p>
                        </div>
                        <hr class="uk-hr">
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="uk-flex-center" uk-grid>
                    <div class="pagination">
                        <ul class="uk-pagination uk-flex-center" uk-margin>
                            <?php $paging->display(); ?>
                        </ul>
                    </div> 
                </div>
            <?php else: require_once "app/views/layouts/includes/commingsoon.php"; ?>
            <?php endif; ?>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="uk-width-1-3@m">
                <div class="uk-border-rounded uk-padding" style="border: 1px solid #eee;">
                    <div class="category uk-margin-large-bottom">
                        <div class="uk-background-primary uk-light">
                            <h3 class="uk-text-center">Post Categories</h3>
                        </div>
                        <?php if(!empty($this->categories)): ?>
                        <ul class="uk-list uk-list-divider uk-list-large uk-text-capitalize">
                            <?php foreach($this->categories as $k => $v): 
                                $nk = explode("-", $k);
                            ?>
                            <li data-id="<?=$nk[1]?>">
                                <a href="<?=PROOT.'blog/pagecategory/1/'.$nk[1];?>" class="uk-link-reset"><span><?=$v?><i class="uk-badge uk-float-right"><?=$nk[0]?></i></span></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <hr class="uk-hr">
                    <div class="adsense uk-margin-large-bottom">
                        <div class="uk-height-medium uk-text-center">
                            <h3>Google ADSense</h3>
                            <p uk-margin>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Top Left...', pos: 'top-left'})">Top Left</button>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Top Center...', pos: 'top-center', status: 'warning'})">Top Center</button>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Top Right...', pos: 'top-right'})">Top Right</button>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Bottom Left...', pos: 'bottom-left'})">Bottom Left</button>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Bottom Center...', pos: 'bottom-center'})">Bottom Center</button>
                                <button class="uk-button uk-button-default" type="button" onclick="UIkit.notification({message: 'Bottom Right...', pos: 'bottom-right'})">Bottom Right</button>
                            </p>
                        </div>
                    </div>
                    <hr class="uk-hr">
                    <div class="popular uk-margin-large-bottom">
                        <div class="uk-background-primary uk-light">
                            <h3 class="uk-text-center">Popular Posts</h3>
                        </div>
                        <?php if(!empty($this->popular)): ?>
                        <ul class="uk-list uk-list-divider  uk-list-large uk-grid-match">
                            <?php foreach($this->popular as $pk => $pv): ?>
                            <li class="uk-margin-remove-top uk-padding-medium uk-padding-remove-horizontal uk-padding-remove-bottom">
                                <div class="uk-width-1-3">
                                <a href="<?=(isset($menu['Blog']))? $single_blog_link .'details/'.$pv->id : "";?>">
                                    <img src="<?=ABS_PATH. $pv->pix?>" alt="Post image">
                                </a>
                                </div>
                                <div class="uk-width-2-3 uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                                    <h5 class="uk-margin-remove uk-text-bold uk-text-truncate"><?=$pv->title?></h5>
                                    <p class="uk-margin-remove uk-text-lighter font12"><?=H::dateDiff($pv->date);?></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->end(); ?>
<?php $this->start('foot'); ?>
<script>
    $(document).ready(function () {
        var ht = [];
        $(".inner_col").each(function () {
            ht.push($(this).height());
        });
        var maxHt = Math.max.apply(null, ht);
        $(".inner_col").height(maxHt);

        $("#search_btn").click(function (e) {
            e.preventDefault();
            var input = $("#search_input").val();
            var action = $("#search_form").attr("action");
            var link = action+"/"+input;
            $("#search_form").attr({"action": link}).submit();
        })
    });
</script>
<?php $this->end(); ?>