<div class="full_container">
    <div class="inner_container">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar_blog_1">
                <div class="sidebar-header">
                    <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive"
                                src="{{ asset('Template-Admin/images/logo/logo_icon.png') }}" alt="#" /></a>
                    </div>
                </div>
                <div class="sidebar_user_info">
                    <div class="icon_setting"></div>
                    <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive"
                                src="{{ asset('Template-Admin/images/layout_img/user_img.jpg') }}" alt="#" />
                        </div>
                        <div class="user_info">
                            <h6>John David</h6>
                            <p><span class="online_animation"></span> Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_blog_2">
                <h4>General</h4>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                            <li>
                                <a href="dashboard.html">> <span>Default Dashboard</span></a>
                            </li>
                            <li>
                                <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                    <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                            <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                            <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                            <li><a href="icons.html">> <span>Icons</span></a></li>
                            <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                    </li>
                    <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                    <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                            <li><a href="email.html">> <span>Email</span></a></li>
                            <li><a href="calendar.html">> <span>Calendar</span></a></li>
                            <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                    </li>
                    <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                    </li>
                    <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional
                                Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                            <li>
                                <a href="profile.html">> <span>Profile</span></a>
                            </li>
                            <li>
                                <a href="project.html">> <span>Projects</span></a>
                            </li>
                            <li>
                                <a href="login.html">> <span>Login</span></a>
                            </li>
                            <li>
                                <a href="404_error.html">> <span>404 Error</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                    <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                    <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- end sidebar -->
        <!-- right content -->
        <div id="content">
            <!-- topbar -->
            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                class="fa fa-bars"></i></button>
                        <div class="logo_section">
                            <a href="index.html"><img class="img-responsive"
                                    src="{{ asset('Template-Admin/images/logo/logo.png') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                            <div class="icon_info">
                                <ul>
                                    <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                class="badge">2</span></a></li>
                                    <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                class="badge">3</span></a></li>
                                </ul>
                                <ul class="user_profile_dd">
                                    <li>
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                class="img-responsive rounded-circle"
                                                src="{{ asset('Template-Admin/images/layout_img/user_img.jpg') }}"
                                                alt="#" /><span class="name_user">John David</span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="profile.html">My Profile</a>
                                            <a class="dropdown-item" href="settings.html">Settings</a>
                                            <a class="dropdown-item" href="help.html">Help</a>
                                            <a class="dropdown-item" href="#"><span>Log Out</span> <i
                                                    class="fa fa-sign-out"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                            <div class="full counter_section margin_bottom_30">
                                <div class="couter_icon">
                                    <div>
                                        <i class="fa fa-user yellow_color"></i>
                                    </div>
                                </div>
                                <div class="counter_no">
                                    <div>
                                        <p class="total_no">2500</p>
                                        <p class="head_couter">Welcome</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full counter_section margin_bottom_30">
                                <div class="couter_icon">
                                    <div>
                                        <i class="fa fa-clock-o blue1_color"></i>
                                    </div>
                                </div>
                                <div class="counter_no">
                                    <div>
                                        <p class="total_no">123.50</p>
                                        <p class="head_couter">Average Time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full counter_section margin_bottom_30">
                                <div class="couter_icon">
                                    <div>
                                        <i class="fa fa-cloud-download green_color"></i>
                                    </div>
                                </div>
                                <div class="counter_no">
                                    <div>
                                        <p class="total_no">1,805</p>
                                        <p class="head_couter">Collections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full counter_section margin_bottom_30">
                                <div class="couter_icon">
                                    <div>
                                        <i class="fa fa-comments-o red_color"></i>
                                    </div>
                                </div>
                                <div class="counter_no">
                                    <div>
                                        <p class="total_no">54</p>
                                        <p class="head_couter">Comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-3">
                            <div class="full socile_icons fb margin_bottom_30">
                                <div class="social_icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="social_cont">
                                    <ul>
                                        <li>
                                            <span><strong>35k</strong></span>
                                            <span>Friends</span>
                                        </li>
                                        <li>
                                            <span><strong>128</strong></span>
                                            <span>Feeds</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full socile_icons tw margin_bottom_30">
                                <div class="social_icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="social_cont">
                                    <ul>
                                        <li>
                                            <span><strong>584k</strong></span>
                                            <span>Followers</span>
                                        </li>
                                        <li>
                                            <span><strong>978</strong></span>
                                            <span>Tweets</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full socile_icons linked margin_bottom_30">
                                <div class="social_icon">
                                    <i class="fa fa-linkedin"></i>
                                </div>
                                <div class="social_cont">
                                    <ul>
                                        <li>
                                            <span><strong>758+</strong></span>
                                            <span>Contacts</span>
                                        </li>
                                        <li>
                                            <span><strong>365</strong></span>
                                            <span>Feeds</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="full socile_icons google_p margin_bottom_30">
                                <div class="social_icon">
                                    <i class="fa fa-google-plus"></i>
                                </div>
                                <div class="social_cont">
                                    <ul>
                                        <li>
                                            <span><strong>450</strong></span>
                                            <span>Followers</span>
                                        </li>
                                        <li>
                                            <span><strong>57</strong></span>
                                            <span>Circles</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>