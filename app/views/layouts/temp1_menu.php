<?php
    use Core\Session;
    use Core\H;
    use Core\Router;
    use App\Models\Users;
    $menu = Router::getMenu('menu_acl');
    // H::dnd($menu);
    $mm = explode('/', $_SERVER['PHP_SELF']);
    $ma = end($mm);
    // H::dnd($_SERVER['PHP_SELF']);
    $currentPage = H::currentPage();
?>

<div class="uk-section-primary uk-preserve-color">
    <!-- MOBILE NAVIGATION -->
    <div id="mobile_nav" uk-offcanvas="overlay:true; esc-close:true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="uk-width-1-2@s">

            </div>
            <ul class="uk-nav-primary uk-nav-center uk-nav-parent-icon" uk-nav>
            <?php foreach ($menu as $key => $val): 
                $active = ''; ?>
                <?php if(is_array($val)): ?>
                    <li class="uk-parent">
                        <a href="#"><?=$key;?></a>
                        <ul class="uk-nav-sub">
                            <?php foreach ($val as $k => $v): 
                                $active = ($v == $currentPage)? 'uk-active' : ''; ?>
                                <?php if($k == 'separator'): ?>
                                    <hr class="uk-divider-icon">
                                <?php else: ?>
                                    <li class="<?=$active;?>"><a href="<?=$v?>"><?=$k;?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else:  
                    $active = ($val == $currentPage)? 'uk-active' : '';?>
                    <li class="<?=$active;?>"><a href="<?=$val?>"><?=$key;?></a></li>
                <?php endif;  ?>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMP IN BANNER -->
    <div class="uk-inline">
        <img src="<?=ABS_PATH?>img/shopat.jpg" alt="banner image">
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-center uk-light">
            <h1 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="font1"><?=$this->siteTitle();?></h1>
            <!-- <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0" class="font2">Contact Us</p> -->
            <ul class="uk-breadcrumb">
                <li class="font2"><a href="<?=isset($menu['Home'])? $menu['Home'] : '';?>">Home</a></li>
                <li class="font2 uk-disabled"><a href="#"><?=$ma?></a></li>
            </ul>
        </div>
    </div>
    <!-- MAIN NAVIGATION BAR -->
    <div class="uk-position-top">
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top:200"style="background: rgba(0,0,0,0.1);">
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-expand">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="<?=ABS_PATH?>"><img src="<?=ABS_PATH?>assets/logo/logo1.jpg" alt="" width="60px" class="uk-margin-right"> 2Hearts Of Love</a>
                            <ul class="uk-navbar-nav uk-visible@s">
                            <?php foreach ($menu as $key => $val): 
                                $active = ''; ?>
                                <?php if(is_array($val)): ?>
                                    <li>
                                        <a href="#"><?=$key;?> <span class="caret"></span></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <?php foreach ($val as $k => $v): 
                                                    $active = ($v == $currentPage)? 'uk-active' : ''; ?>
                                                    <?php if($k == 'separator'): ?>
                                                        <hr class="uk-divider-icon">
                                                    <?php else: ?>
                                                        <li class="<?=$active;?>"><a href="<?=$v?>"><?=$k;?></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </li>
                                <?php elseif($key == 'Logout' || $key == 'Login' || $key == 'Register'): continue; ?>
                                <?php else:  
                                        $active = ($val == $currentPage)? 'uk-active' : '';?>
                                        <li class="<?=$active;?>"><a class="anko" href="<?=$val?>"><?=$key;?></a></li>
                                    <?php endif;  ?>
                                <?php endforeach; ?>
                            </ul>

                        </div>

                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav uk-visible@s">
                                <?php if(Users::currentUser()): ?>
                                    <li><a href="#">Hello <?=Users::currentUser()->fname;?></a></li>
                                    <li><a href="<?=isset($menu['Logout'])? $menu['Logout'] : '';?>">Logout</a></li>
                                <?php else: ?>
                                <li><a href="<?=isset($menu['Login'])? $menu['Login'] : '';?>">Sign In</a></li>
                                <li><a href="<?=isset($menu['Register'])? $menu['Register'] : ''?>">Sign Up</a></li>
                                <?php endif; ?>
                            </ul>
                            <ul class="uk-navbar-nav uk-hidden@s">
                                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #mobile_nav">
                                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
</div>