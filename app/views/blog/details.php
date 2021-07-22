<?php 
use Core\Router;
use Core\FH;
use Core\H;
use App\Models\Users;

$months = H::monthsIndex();
$menu = Router::getMenu('menu_acl');
$single_blog_link = substr($menu['Blog'], 0, stripos($menu['Blog'],'page'));

$this->setSiteTitle('Blog');
$this->start('body'); 
?>

<section class="uk-section uk-dark">
    <div class="uk-container uk-container-medium">
        <div class="uk-flex uk-flex-between">
            <div class="">
                <h1 class="uk-heading-bullet"><span class="txt-grad1">Topic Of This Blog Post</span></h1>
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
            <div class="uk-width-2-3@m">
                <?php if(!empty($this->blog)): ?>
                <div class="uk-padding uk-padding-remove-top inner_col">
                    <?php $date = explode('-', explode(' ', $this->blog->date)[0]); ?>
                    <div class="single-content uk-margin-small-bottom">
                        <div class="uk-width-1-1@s">
                            <h2 class="uk-text-capitalize font-bold"><a > <?=$this->blog->title?></a></h2>
                            <div class="uk-overflow-hidden uk-inline uk-margin-small-top">
                                <img src="<?=ABS_PATH. $this->blog->pix?>" alt="BLOG IMAGE" uk-img>
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-right uk-flex uk-flex-middle">
                                    <p class="uk-text-capitalize"><?=$this->blog->author['name']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@s">
                            <div class="uk-margin-medium-bottom uk-margin-medium-top">
                                <p class="font18 line-height180 word-space10 ">
                                    <?=html_entity_decode($this->blog->body)?>
                                </p>
                                <p>
                                    <div class="uk-flex uk-flex-between uk-text-capitalize">
                                        <div><span class="uk-margin-small-right" uk-icon="calendar"></span><?=$date[2]. ' '. $months[$date[1]];?></div>
                                        <div><span class="uk-margin-small-right"><i class="far fa-eye"></i></span><?=$this->blog->no_of_views?></div>
                                        <div><span class="uk-margin-small-right" uk-icon="heart"></span> 300</div>
                                        <div><span class="uk-margin-small-right" uk-icon="comments"></span> 700</div>
                                        <div class="">
                                            <ul class="uk-iconnav uk-flex-inline uk-flex-around">
                                                <li><a href="#" class="uk-margin-small-right" uk-icon="twitter"></a></li>
                                                <li><a href="#" class="uk-margin-small-right" uk-icon="facebook"></a></li>
                                                <li><a href="#" class="uk-margin-small-right" uk-icon="google-plus"></a></li>
                                                <li><a href="#" class="uk-margin-small-right" uk-icon="instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <hr class="uk-hr">
                        </div>
                    </div>

                    <div class="pagination uk-margin-large-bottom">
                        <div class="uk-clearfix">
                            <div class="uk-float-left">
                                <div class="uk-box-shadow-medium uk-padding-small uk-flex uk-visible-toggle" tabindex="-1">
                                    <div class="uk-inline uk-dark" style="width:70px; height:70px; overflow:hidden;">
                                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="" style="height: 100%;">
                                        <div class="uk-overlay-primary uk-position-cover uk-hidden-hover">
                                            <div class="uk-position-center">
                                                <span class="uk-overlay-icon blog-icon" uk-icon="arrow-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin-left">
                                        <span class="font12">Prev Post</span>
                                        <h5 class="font-bold uk-margin-remove font18">Post Topic come</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-float-right">
                                <div class="uk-box-shadow-medium uk-padding-small uk-flex uk-text-right uk-visible-toggle" tabindex="-1">
                                    <div class="uk-margin-right">
                                        <span class="font12">Next Post</span>
                                        <h5 class="font-bold uk-margin-remove font18">Post Topic come</h5>
                                    </div>
                                    <div class="uk-inline uk-dark" style="width:70px; height:70px; overflow:hidden;">
                                        <img src="<?=ABS_PATH?>img/lid2.jpg" alt="" style="height: 100%;">
                                        <div class="uk-overlay-primary uk-position-cover uk-hidden-hover">
                                            <div class="uk-position-center">
                                                <span class="uk-overlay-icon blog-icon" uk-icon="arrow-right"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="uk-hr">
                    <div id="comment_container" class="comments uk-margin-large-bottom uk-margin-large-top">
                        <h2 class="uk-margin-medium-bottom uk-heading-bullet uk-text-primary">Comments</h2>
                        <?php if(!empty($this->comment)): ?>
                        <ul id="comment_list" class="uk-comment-list">
                            <?php foreach($this->comment as $K => $v): ?>
                            <li class="comment_item">
                                <article class="uk-comment uk-visible-toggle" tabindex="-1">
                                    <header class="uk-comment-header uk-position-relative">
                                        <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar" src="<?=ABS_PATH. $v->pix?>" width="80" height="80" alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Anonymouse</a></h4>
                                                <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#"><?=H::dateDiff($v->date);?></a></p>
                                            </div>
                                        </div>
                                        <?php if(isset(Users::currentUser()->id) && Users::currentUser()->id == $v->user_id): ?>
                                        <div class="uk-position-top-right uk-position-small uk-hidden-hover">
                                            <a data-cid="<?=$v->id?>" class="edit_btn uk-link-muted uk-margin-right" href="javascript:void(0)"><i class="far fa-edit" style="font-size: 20px;"></i></a>
                                            <a data-cid="<?=$v->id?>" class="delete_btn uk-link-muted" href="javascript:void(0)"><i class="fas fa-trash-alt" style="font-size: 20px;"></i></a>
                                        </div>
                                        <?php endif; ?>
                                    </header>
                                    <div class="uk-comment-body">
                                        <p><?=html_entity_decode($v->comment)?></p>
                                    </div>
                                </article>
                                <!-- <ul>
                                    <li>
                                        <article class="uk-comment uk-comment-primary uk-visible-toggle" tabindex="-1">
                                            <header class="uk-comment-header uk-position-relative">
                                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-comment-avatar" src="<?=ABS_PATH?>img/lid1.jpg" width="80" height="80" alt="">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                    </div>
                                                </div>
                                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                            </header>
                                            <div class="uk-comment-body">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="uk-comment uk-visible-toggle" tabindex="-1">
                                            <header class="uk-comment-header uk-position-relative">
                                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img class="uk-comment-avatar" src="<?=ABS_PATH?>img/lid2.jpg" width="80" height="80" alt="">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                    </div>
                                                </div>
                                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                            </header>
                                            <div class="uk-comment-body">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </article>
                                    </li>
                                </ul> -->
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <hr class="uk-hr">
                    <div class="reply uk-box-shadow-medium uk-padding-large uk-margin-large-top">
                        <h2 class="uk-margin-bottom-remove uk-text-primary uk-heading-bullet">Reply To This Post</h2>
                        <form id="comment_form" name="comment_form" class="uk-form-stacked" action="" method="post">
                            <?= FH::csrfInput();?>
                            <div class="uk-child-width-1-1@s uk-margin-medium" uk-grid>
                                <?= FH::inputBlock('email', 'E-mail', 'email','', ['class'=>'uk-form-controls'], ['class'=>'uk-form-label'], ['class'=>'uk-input uk-border-rounded'], ['class'=>'']);?>
                                <input type="hidden" name="blog_id" id="blog_id" value="<?=$this->blog->id;?>">
                            </div>

                            <?= FH::textAreaBlock('Your message', 'comment','', ['class'=>'uk-form-label'], ['class'=>'uk-textarea uk-border-rounded', 'rows'=>'5', 'placeholder'=>'Enter Your Message...'], ['class'=>'uk-margin']);?>

                            <div class="">
                                <?= FH::submitBlock('Reply', ['class'=>'uk-button uk-button-default uk-button-primary'], ['class'=>'uk-margin uk-text-right']);?>
                            </div>
                        </form>
                    </div>
                </div>
                <?php else: require_once "app/views/layouts/includes/commingsoon.php"; ?>
                <?php endif; ?>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="uk-width-1-3@m">
                <div class="uk-border-rounded uk-padding inner_col" style="border: 1px solid #eee;">
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
const PROOT =  '/2021/2heartsoflove/';
const MALE_AVATAR =  "uploads/person/avatar.png";
    $(document).ready(function () {
        var ht = [];
        $(".inner_col").each(function () {
            ht.push($(this).height());
        });
        var maxHt = Math.max.apply(null, ht);
        $(".inner_col").height(maxHt);

        $("#comment_form").on("submit", function(e){
            e.preventDefault();
            var data = $("#comment_form").serializeArray();
            var dataObj = {};
            for (const key in data) {
                dataObj[data[key].name] = data[key].value
                if (data[key].value == "") {
                    UIkit.notification({message: 'Form Field Must Not Be Blank', pos: 'top-center', status: 'danger'})
                    return false;
                }
            }
            
            var formdata = new FormData($("#comment_form")[0]);

            $.ajax({
                url : PROOT+"comments/add",
                enctype: 'multipart/form-data',
                type : "POST",
                data : formdata,
                processData: false,
                contentType: false,
                // beforeSend: validate(data),
                // complete: finished(data),
                success : function(data, statustext, jqXHR){
                    UIkit.notification({message: data.msg, pos: 'top-center', status: 'warning'})
                    // console.log(data);
                    if (data.success) {
                        populateComment(data.data);
                        // $("#comment_form").reset();
                    }
                },
                error: function(jqXHR, statustext, error){
                    UIkit.notification({message: "An error occured: " + jqXHR.status + " " + jqXHR.statusText, pos: 'top-center', status: 'danger'})
                    console.log(jqXHR);
                    console.log(jqXHR.responseText);
                    // console.log(error);
                }
            });
        });

        $(".edit_btn").click(function (e) {
            var btn = $(this);
            var parentContainer = $(this).closest(".comment_item").find(".uk-comment-body > p");
            var id = btn.data("cid");
            // $.get(PROOT+"comments/edit/"+id, function(data, status){
            //     if (data.success) {
            //         UIkit.notification({message: data.msg, pos: 'top-center', status: 'warning'});
            //         parentContainer.remove();
            //         return false;
            //     }
            //     console.log(status);
            //     console.log(data);
            // });
        });

        $(".delete_btn").click(function (e) {
            var btn = $(this);
            var parentContainer = $(this).closest(".comment_item");
            var id = btn.data("cid");
            $.get(PROOT+"comments/delete/"+id, function(data, status){
                if (data.success) {
                    UIkit.notification({message: data.msg, pos: 'top-center', status: 'warning'});
                    parentContainer.remove();
                    return false;
                }
                console.log(status);
                console.log(data);
            });
        });

        $("#search_text").keyup(function (e) {
            var curr = $(this);
            var txt = curr.val();
            if(txt != ''){
                // $.post("demo_test_post.asp",
                // {
                //     name: "Donald Duck",
                //     city: "Duckburg"
                // },
                // function(data, status){
                //     alert("Data: " + data + "\nStatus: " + status);
                // });
            }
        });

        $("#search_btn").click(function (e) {
            e.preventDefault();
            var input = $("#search_input").val();
            var action = $("#search_form").attr("action");
            var link = action+"/"+input;
            $("#search_form").attr({"action": link}).submit();
        })
    });

    function populateComment(data){
        var comment = $("<li>").addClass("comment_item").append(
            $("<header>").addClass("uk-comment-header uk-position-relative").append(
                $("<div>").addClass("uk-grid-medium uk-flex-middle").attr("uk-grid", "").append(
                    $("<div>").addClass("uk-width-auto").append(
                        $("<img>").addClass("uk-comment-avatar").attr({"src": PROOT+data.pix, "width":"80", "height":"80", "alt":""})
                    )
                ).append(
                    $("<div>").addClass("uk-width-expand").append(
                        $("<h4>").addClass("uk-comment-title uk-margin-remove").append(
                            $("<a>").addClass("uk-link-reset").attr({"href":"#"}).text(data.name)
                        )
                    ).append(
                        $("<p>").addClass("uk-comment-meta uk-margin-remove-top").append(
                            $("<a>").addClass("uk-link-reset").attr({"href":"#"}).text("Now")
                        )
                    )
                )
            ).append(
                $("<div>").addClass("uk-position-top-right uk-position-small uk-hidden-hover").append(
                    $("<a>").addClass("edit_btn uk-link-muted uk-margin-right").attr({"href":"javascript:void(0)", "data-cid":data.id}).append(
                        $("<i>").addClass("far fa-edit").css({"font-size": "20px"})
                    )
                ).append(
                    $("<a>").addClass("delete_btn uk-link-muted").attr({"href":"javascript:void(0)", "data-cid":data.id}).append(
                        $("<i>").addClass("fas fa-trash-alt").css({"font-size": "20px"})
                    )
                )
            )
        ).append(
            $("<div>").addClass("uk-comment-body").append(
                $("<p>").text(data.comment)
            )
        )
        if($("#comment_list").length == 0){
            $("#comment_container").append(
                $("<ul>").addClass("uk-comment-list").attr({"id":"comment_list"}).append(comment)
            )
        }else{   $("#comment_list").prepend(comment) }
    }

    function validate(data){
        for (const key in data) {
            // console.log(data[key].value);
        }
    }
    function finished(data, status){
        // console.log(data);
    }
</script>
<?php $this->end(); ?>