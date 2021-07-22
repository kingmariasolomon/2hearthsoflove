<div id="admin_side_menu" class="side-menu-wrapper">
    <div class="sidenav uk-light">
        <ul class="uk-nav-default nav-sidebar uk-nav-parent-icon" uk-nav>
            <li class="nav-item">
                <a href="<?=PROOT?>admin">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: home;"></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div class="uk-text-capitalize">Dashboard</div>
                        </div>
                    </div>
                </a>
            </li>
                        
            <li class="nav-item uk-parent">
                <a href="#">
                    <span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: info;"></span>Organisation
                </a>
                <ul class="uk-nav-b">
                    <li><a href="<?=PROOT?>admin/companyinfo">Organisation Info</a></li>
                    <li><a href="<?=PROOT?>admin/sliders">Banner Sliders</a></li>
                    <li><a href="<?=PROOT?>admin/branches">Branches</a></li>
                    <li><a href="<?=PROOT?>admin/programe">Programe Days</a></li>
                    <li><a href="<?=PROOT?>admin/terms">Terms And Conditions</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?=PROOT?>admin/users">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: users;"></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div>Users</div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=PROOT?>admin/about">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left uk-margin-small-right fas fa-gg-circle" style='font-size:20px'></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div>Setup About</div>
                        </div>
                    </div>
                </a>
            </li>

            <li class="nav-item uk-parent">
                <a href="#">
                    <span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: grid;"></span>Blogging
                </a>
                <ul class="uk-nav-b">
                    <li><a href="<?=PROOT?>blog/blogs">Blog</a></li>
                    <li><a href="<?=PROOT?>blog/categories">categories</a></li>
                </ul>
            </li>

            <li class="nav-item uk-parent">
                <a href="#">
                    <span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: calendar;"></span>Events
                </a>
                <ul class="uk-nav-b">
                    <li><a href="<?=PROOT?>events/events">Upcoming Events</a></li>
                    <li><a href="<?=PROOT?>events/calendarView">Calendar</a></li>
                </ul>
            </li>

            <li class="nav-item uk-parent">
                <a href="#">
                    <span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: video-camera;"></span>Media
                </a>
                <ul class="uk-nav-b">
                    <li><a href="<?=PROOT?>media/mediacategory">Categories</a></li>
                    <li><a href="<?=PROOT?>media/mediasubcategory">Sub Categories</a></li>
                    <li><a href="<?=PROOT?>media/media">Media</a></li>
                </ul>
            </li>

            <li class="nav-item uk-parent">
                <a href="#">
                    <span class="uk-icon uk-margin-small-left uk-margin-small-right fab fa-bitcoin" style='font-size:20px'></span>Donations
                </a>
                <ul class="uk-nav-b">
                    <li><a href="<?=PROOT?>funding/donation">Donations</a></li>
                    <li><a href="<?=PROOT?>funding/fundCat">Funding Categories</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?=PROOT?>testimony/testimonies">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left fas fa-cross" style='font-size:20px'></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div>Testimonies</div>
                        </div>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=PROOT?>prayerrequest/prayerRequests">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left fas fa-pray" style='font-size:20px'></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div>Prayer Requests</div>
                        </div>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <div class="uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div class="uk-width-auto uk-preserve-width">
                            <div><span class="uk-icon uk-margin-small-left uk-margin-small-right" uk-icon="icon: cog;"></span></div>
                        </div>
                        <div class="uk-width-expand uk-padding-remove uk-margin-small-left uk-margin-remove-top">
                            <div>Settings</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>


























<!-- <div id="admin_side_menu" class="" uk-offcanvas="mode: slide; overlay: false">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li class="uk-parent">
                <a href="#">Parent</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item two</a></li>
                </ul>
            </li>
            <li class="uk-nav-header">Header</li>
            <li class=""><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: table;"></span> Item</a></li>
            <li class=""><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: thumbnails;"></span> Item Two</a></li>
            <li class="uk-nav-divider"></li>
            <li class=""><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: trash;"></span> Item Three</a></li>
        </ul>
    </div>
</div> -->