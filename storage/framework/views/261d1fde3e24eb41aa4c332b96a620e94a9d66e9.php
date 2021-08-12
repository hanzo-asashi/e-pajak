<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/icofont.css')); ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/themify.css')); ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/flag-icon.css')); ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/feather-icon.css')); ?>">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/scrollbar.css')); ?>">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/bootstrap.css')); ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('assets/css/color-1.css')); ?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
              <li class="mega-menu outside">
                <a class="nav-link" href="#!"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="mobile-title d-none">
                          <h5>Mega menu</h5>
                          <i data-feather="x"></i>
                        </div>
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="#">Error page 400</a></li>
                            <li><a href="#">Error page 401</a></li>
                            <li><a href="#">Error page 403</a></li>
                            <li><a href="#">Error page 404</a></li>
                            <li><a href="#">Error page 500</a></li>
                            <li><a href="#">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="#">Login Simple</a></li>
                            <li><a href="#">Login Bg Image</a></li>
                            <li><a href="#">Login Bg video</a></li>
                            <li><a href="#">Register Simple</a></li>
                            <li><a href="#">Register Bg Image</a></li>
                            <li><a href="#">Register Bg video</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed-links">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="#">Search Website                                     </a></li>
                            <li><a href="#">Unlock User</a></li>
                            <li><a href="#">Forget Password</a></li>
                            <li><a href="#">Reset Password</a></li>
                            <li><a href="#">Maintenance</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li><a href="#">Basic Email</a></li>
                            <li><a href="#">Basic With Header</a></li>
                            <li><a href="#">Ecomerce Template</a></li>
                            <li><a href="#">Email Template 2</a></li>
                            <li><a href="#">Ecommerce Email</a></li>
                            <li><a href="#">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="#"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="#"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="#"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="#"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="#"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="level-menu outside">
                <a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Level Menu</span></a>
                <ul class="header-level-menu menu-to-be-close">
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                  <li>
                    <a href="#!" data-original-title="" title="">                               <i data-feather="users"></i><span>Users</span></a>
                    <ul class="header-level-sub-menu">
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user"></i><span>User Profile</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                    </ul>
                  </li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="airplay"></i><span>Kanban Board</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="heart"></i><span>Bookmark</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="zap"></i><span>Social App                     </span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary">
                            <i data-feather="star"></i>
                            <h6 class="f-18 mb-0">Bookmark</h6>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                              <div class="col-4 text-center"><i data-feather="activity"></i></div>
                              <div class="col-4 text-center"><i data-feather="users"></i></div>
                              <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                              <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                              <div class="col-4 text-center"><i data-feather="settings"></i></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li>
                            <button class="d-block flip-back" id="flip-back">Back</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <ul class="cart-dropdown onhover-show-div">
                  <li>
                    <h6 class="mb-0 f-20">Shoping Bag</h6>
                    <i data-feather="shopping-cart"></i>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="<?php echo e(asset('assets/images/ecommerce/01.jpg')); ?>" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="<?php echo e(asset('assets/images/ecommerce/03.jpg')); ?>" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                    </div>
                  </li>
                  <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="#">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="#">Checkout</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box                                    </h6>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="<?php echo e(asset('assets/images/user/2.jpg')); ?>" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body">
                        <span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media">
                  <img class="b-r-10" src="<?php echo e(asset('assets/images/dashboard/profile.jpg')); ?>" alt="">
                  <div class="media-body">
                    <span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper">
              <a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1"><?php echo e(trans('lang.General')); ?>  </h6>
                                <p class="lan-2"><?php echo e(trans('lang.Dashboards,widgets & layout.')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'active' : ''); ?>" href="#"><i data-feather="home"></i><span class="lan-3"><?php echo e(trans('lang.Dashboards')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;'); ?>">
                      <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='index' ? 'active' : ''); ?>" href="<?php echo e(route('index')); ?>"><?php echo e(trans('lang.Default')); ?></a></li>
                                <li><a class="lan-5 <?php echo e(Route::currentRouteName()=='dashboard-02' ? 'active' : ''); ?>" href="<?php echo e(route('dashboard-02')); ?>"><?php echo e(trans('lang.Ecommerce')); ?></a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/widgets' ? 'active' : ''); ?>" href="#"><i data-feather="airplay"></i><span class="lan-6"><?php echo e(trans('lang.Widgets')); ?></span>
                        <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/widgets' ? 'down' : 'right'); ?>"></i></div>
                      </a>
                      <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;'); ?>">
                                  <li><a href="<?php echo e(route('general-widget')); ?>" class="<?php echo e(Route::currentRouteName()=='general-widget' ? 'active' : ''); ?>"><?php echo e(trans('lang.General')); ?></a></li>
                                  <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-widget' ? 'active' : ''); ?>"><?php echo e(trans('lang.Chart')); ?></a></li>
                                </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'active' : ''); ?>" href="#"><i data-feather="layout"></i><span class="lan-7"><?php echo e(trans('lang.Page layout')); ?></span>
                        <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right'); ?>"></i></div>
                      </a>
                      <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;'); ?>">
                          <li><a href="<?php echo e(route('box-layout')); ?>" class="<?php echo e(Route::currentRouteName() == 'box-layout' ? 'active' : ''); ?>">Boxed</a></li>
                          <li><a href="<?php echo e(route('layout-rtl')); ?>" class="<?php echo e(Route::currentRouteName() == 'layout-rtl' ? 'active' : ''); ?>">RTL</a></li>
                          <li><a href="<?php echo e(route('layout-dark')); ?>" class="<?php echo e(Route::currentRouteName() == 'layout-dark' ? 'active fw-bold' : ''); ?>">Dark Layout</a></li>
                          <li><a href="<?php echo e(route('hide-on-scroll')); ?>" class="<?php echo e(Route::currentRouteName() == 'hide-on-scroll' ? 'active' : ''); ?>">Hide Nav Scroll</a></li>
                          <li><a href="<?php echo e(route('footer-light')); ?>" class="<?php echo e(Route::currentRouteName() == 'footer-light' ? 'active' : ''); ?>">Footer Light</a></li>
                          <li><a href="<?php echo e(route('footer-dark')); ?>" class="<?php echo e(Route::currentRouteName() == 'footer-dark' ? 'active' : ''); ?>">Footer Dark</a></li>
                          <li><a href="<?php echo e(route('footer-fixed')); ?>" class="<?php echo e(Route::currentRouteName() == 'footer-fixed' ? 'active' : ''); ?>">Footer Fixed</a></li>
                      </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8"><?php echo e(trans('lang.Applications')); ?></h6>
                                <p class="lan-9"><?php echo e(trans('lang.Ready to use Apps')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-danger"><?php echo e(trans('lang.New')); ?></label>
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/project' ? 'active' : ''); ?>" href="#">
                      <i data-feather="box"></i><span><?php echo e(trans('lang.Project')); ?> </span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/project' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/project' ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('projects')); ?>" class="<?php echo e(Route::currentRouteName()=='projects' ? 'active' : ''); ?>"><?php echo e(trans('lang.Project List')); ?></a></li>
                                <li><a href="<?php echo e(route('projectcreate')); ?>" class="<?php echo e(Route::currentRouteName()=='projectcreate' ? 'active' : ''); ?>"><?php echo e(trans('lang.Create new')); ?></a></li>
                            </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='file-manager' ? 'active' : ''); ?>" href="<?php echo e(route('file-manager')); ?>">
                      <i data-feather="git-pull-request"> </i><span><?php echo e(trans('lang.File manager')); ?></span>
                    </a>
                  </li>
                  <li class="sidebar-list">  
                    <label class="badge badge-info"><?php echo e(trans('lang.Latest')); ?></label>
                    <a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='kanban' ? 'active' : ''); ?>" href="<?php echo e(route('kanban')); ?>">
                      <i data-feather="monitor"> </i><span><?php echo e(trans('lang.Kanban Board')); ?></span>
                    </a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/ecommerce' ? 'active' : ''); ?>" href="#"><i data-feather="shopping-bag"></i><span><?php echo e(trans('lang.Ecommerce')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/ecommerce' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/ecommerce' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('product')); ?>" class="<?php echo e(Route::currentRouteName()=='product' ? 'active' : ''); ?>">Product</a></li>
                                  <li><a href="<?php echo e(route('product-page')); ?>" class="<?php echo e(Route::currentRouteName()=='product-page' ? 'active' : ''); ?>">Product page</a></li>
                                  <li><a href="<?php echo e(route('list-products')); ?>" class="<?php echo e(Route::currentRouteName()=='list-products' ? 'active' : ''); ?>">Product list</a></li>
                                  <li><a href="<?php echo e(route('payment-details')); ?>" class="<?php echo e(Route::currentRouteName()=='payment-details' ? 'active' : ''); ?>">Payment Details</a></li>
                                  <li><a href="<?php echo e(route('order-history')); ?>" class="<?php echo e(Route::currentRouteName()=='order-history' ? 'active' : ''); ?>">Order History</a></li>
                                  <li><a href="<?php echo e(route('invoice-template')); ?>" class="<?php echo e(Route::currentRouteName()=='invoice-template' ? 'active' : ''); ?>">Invoice</a></li>
                                  <li><a href="<?php echo e(route('cart')); ?>" class="<?php echo e(Route::currentRouteName()=='cart' ? 'active' : ''); ?>">Cart</a></li>
                                  <li><a href="<?php echo e(route('list-wish')); ?>" class="<?php echo e(Route::currentRouteName()=='list-wish' ? 'active' : ''); ?>">Wishlist</a></li>
                                  <li><a href="<?php echo e(route('checkout')); ?>" class="<?php echo e(Route::currentRouteName()=='checkout' ? 'active' : ''); ?>">Checkout</a></li>
                                  <li><a href="<?php echo e(route('pricing')); ?>" class="<?php echo e(Route::currentRouteName()=='pricing' ? 'active' : ''); ?>">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/email' ? 'active' : ''); ?>" href="#">
                      <i data-feather="mail"></i><span><?php echo e(trans('lang.Email')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/email' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/email' ? 'block' : 'none;'); ?>;">
                                <li><a href="<?php echo e(route('email-application')); ?>" class="<?php echo e(Route::currentRouteName()=='email-application' ? 'active' : ''); ?>">Email App</a></li>
                                <li><a href="<?php echo e(route('email-compose')); ?>" class="<?php echo e(Route::currentRouteName()=='email-compose' ? 'active' : ''); ?>">Email Compose</a></li>
                            </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/chat' ? 'active' : ''); ?>" href="#">
                      <i data-feather="message-circle"></i><span><?php echo e(trans('lang.Chat')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/chat' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/chat' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('chat')); ?>" class="<?php echo e(Route::currentRouteName()=='chat' ? 'active' : ''); ?>">Chat App</a></li>
                                <li><a href="<?php echo e(route('chat-video')); ?>" class="<?php echo e(Route::currentRouteName()=='chat-video' ? 'active' : ''); ?>">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
                      <i data-feather="users"></i><span><?php echo e(trans('lang.Users')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
                                <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Users Profile</a></li>
                                <li><a href="<?php echo e(route('edit-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='edit-profile' ? 'active' : ''); ?>">Users Edit</a></li>
                                <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Users Cards</a></li>
                            </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='bookmark' ? 'active' : ''); ?>" href="<?php echo e(route('bookmark')); ?>"><i data-feather="heart"> </i><span><?php echo e(trans('lang.Bookmarks')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='contacts' ? 'active' : ''); ?>" href="<?php echo e(route('contacts')); ?>"><i data-feather="list"> </i><span><?php echo e(trans('lang.Contacts')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='task' ? 'active' : ''); ?>" href="<?php echo e(route('task')); ?>"><i data-feather="check-square"> </i><span><?php echo e(trans('lang.Tasks')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='calendar-basic' ? 'active' : ''); ?> " href="<?php echo e(route('calendar-basic')); ?>"><i data-feather="calendar"> </i><span><?php echo e(trans('lang.Calendar')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='social-app' ? 'active' : ''); ?>" href="<?php echo e(route('social-app')); ?>"><i data-feather="zap"> </i><span><?php echo e(trans('lang.Social App')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='to-do' ? 'active' : ''); ?>" href="<?php echo e(route('to-do')); ?>"><i data-feather="clock"> </i><span><?php echo e(trans('lang.To-Do')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName() == 'search' ? 'active' : ''); ?>" href="<?php echo e(route('search')); ?>"><i data-feather="search"> </i><span><?php echo e(trans('lang.Search Result')); ?></span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6><?php echo e(trans('lang.Forms & Table')); ?></h6>
                              <p><?php echo e(trans('lang.Ready to use froms & tables')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/forms' ? 'active' : ''); ?>" href="#">
                      <i data-feather="file-text"></i><span><?php echo e(trans('lang.Forms')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/forms' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;'); ?>">
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : ''); ?>" href="#">Form Controls
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'block' : 'none;'); ?>;">
                          <li><a href="<?php echo e(route('form-validation')); ?>" class="<?php echo e(Route::currentRouteName()=='form-validation' ? 'active' : ''); ?>">Form Validation</a></li>
                                        <li><a href="<?php echo e(route('base-input')); ?>" class="<?php echo e(Route::currentRouteName()=='base-input' ? 'active' : ''); ?>">Base Inputs</a></li>
                                        <li><a href="<?php echo e(route('radio-checkbox-control')); ?>" class="<?php echo e(Route::currentRouteName()=='radio-checkbox-control' ? 'active' : ''); ?>">Checkbox & Radio</a></li>
                                        <li><a href="<?php echo e(route('input-group')); ?>" class="<?php echo e(Route::currentRouteName()=='input-group' ? 'active' : ''); ?>">Input Groups</a></li>
                                        <li><a href="<?php echo e(route('megaoptions')); ?>" class="<?php echo e(Route::currentRouteName()=='megaoptions' ? 'active' : ''); ?>">Mega Options</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'active' : ''); ?>" href="#">Form Widgets
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'block' : 'none;'); ?>;">
                            <li><a href="<?php echo e(route('datepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='datepicker' ? 'active' : ''); ?>">Datepicker</a></li>
                                            <li><a href="<?php echo e(route('time-picker')); ?>" class="<?php echo e(Route::currentRouteName()=='time-picker' ? 'active' : ''); ?>">Timepicker</a></li>
                                            <li><a href="<?php echo e(route('datetimepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='datetimepicker' ? 'active' : ''); ?>">Datetimepicker</a></li>
                                            <li><a href="<?php echo e(route('daterangepicker')); ?>" class="<?php echo e(Route::currentRouteName()=='daterangepicker' ? 'active' : ''); ?>">Daterangepicker</a></li>
                                            <li><a href="<?php echo e(route('touchspin')); ?>" class="<?php echo e(Route::currentRouteName()=='touchspin' ? 'active' : ''); ?>">Touchspin</a></li>
                                            <li><a href="<?php echo e(route('select2')); ?>" class="<?php echo e(Route::currentRouteName()=='select2' ? 'active' : ''); ?>">Select2</a></li>
                                            <li><a href="<?php echo e(route('switch')); ?>" class="<?php echo e(Route::currentRouteName()=='switch' ? 'active' : ''); ?>">Switch</a></li>
                                            <li><a href="<?php echo e(route('typeahead')); ?>" class="<?php echo e(Route::currentRouteName()=='typeahead' ? 'active' : ''); ?>">Typeahead</a></li>
                                            <li><a href="<?php echo e(route('clipboard')); ?>" class="<?php echo e(Route::currentRouteName()=='clipboard' ? 'active' : ''); ?>">Clipboard</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'active' : ''); ?>" href="#">Form Layout
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'block' : 'none;'); ?>;">
                                          <li><a href="<?php echo e(route('default-form')); ?>" class="<?php echo e(Route::currentRouteName()=='default-form' ? 'active' : ''); ?>">Default Forms</a></li>
                                          <li><a href="<?php echo e(route('form-wizard')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard' ? 'active' : ''); ?>">Form Wizard 1</a></li>
                                          <li><a href="<?php echo e(route('form-wizard-two')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-two' ? 'active' : ''); ?>">Form Wizard 2</a></li>
                                          <li><a href="<?php echo e(route('form-wizard-three')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-three' ? 'active' : ''); ?>">Form Wizard 3</a></li>
                                    </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/tables' ? 'active' : ''); ?>" href="#"><i data-feather="server"></i><span><?php echo e(trans('lang.Tables')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/tables' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/tables' ? 'block;' : 'none;'); ?>">
                      <li>
                        <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'active' : ''); ?>"  href="#">Bootstrap Tables
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'block' : 'none;'); ?>;">
                                          <li><a href="<?php echo e(route('bootstrap-basic-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : ''); ?>">Basic Tables</a></li>
                                          <li><a href="<?php echo e(route('bootstrap-sizing-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : ''); ?>">Sizing Tables</a></li>
                                          <li><a href="<?php echo e(route('bootstrap-border-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-border-table' ? 'active' : ''); ?>">Border Tables</a></li>
                                          <li><a href="<?php echo e(route('bootstrap-styling-table')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : ''); ?>">Styling Tables</a></li>
                                          <li><a href="<?php echo e(route('table-components')); ?>" class="<?php echo e(Route::currentRouteName()=='table-components' ? 'active' : ''); ?>">Table components</a></li>
                                    </ul>
                      </li>
                      <li>
                        <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api']) ? 'active' : ''); ?>" href="#">Data Tables
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'block' : 'none;'); ?>;">
                                            <li><a href="<?php echo e(route('datatable-basic-init')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-basic-init' ? 'active' : ''); ?>">Basic Init</a></li>
                                            <li><a href="<?php echo e(route('datatable-advance')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-advance' ? 'active' : ''); ?>">Advance Init</a></li>
                                            <li><a href="<?php echo e(route('datatable-styling')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-styling' ? 'active' : ''); ?>">Styling</a></li>
                                            <li><a href="<?php echo e(route('datatable-ajax')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ajax' ? 'active' : ''); ?>">AJAX</a></li>
                                            <li><a href="<?php echo e(route('datatable-server-side')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-server-side' ? 'active' : ''); ?>">Server Side</a></li>
                                            <li><a href="<?php echo e(route('datatable-plugin')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-plugin' ? 'active' : ''); ?>">Plug-in</a></li>
                                            <li><a href="<?php echo e(route('datatable-api')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-api' ? 'active' : ''); ?>">API</a></li>
                                            <li><a href="<?php echo e(route('datatable-data-source')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-data-source' ? 'active' : ''); ?>">Data Sources</a></li>
                                    </ul>
                      </li>
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'active' : ''); ?>" href="#">Ex. Data Tables
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'block' : 'none;'); ?>;">
                          <li><a href="<?php echo e(route('datatable-ext-autofill')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : ''); ?>">Auto Fill</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-basic-button')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : ''); ?>">Basic Button</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-col-reorder')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : ''); ?>">Column Reorder</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-fixed-header')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : ''); ?>">Fixed Header</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-html-5-data-export')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : ''); ?>">HTML 5 Export</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-key-table')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : ''); ?>">Key Table</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-responsive')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : ''); ?>">Responsive</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-row-reorder')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : ''); ?>">Row Reorder</a></li>
                          <li><a href="<?php echo e(route('datatable-ext-scroller')); ?>" class="<?php echo e(Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : ''); ?>">Scroller</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo e(route('jsgrid-table')); ?>" class="<?php echo e(Route::currentRouteName()=='jsgrid-table' ? 'active' : ''); ?>">Js Grid Table </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6><?php echo e(trans('lang.Components')); ?></h6>
                                <p><?php echo e(trans('lang.UI Components & Elements')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/ui-kits' ? 'active' : ''); ?>" href="#"><i data-feather="box"></i><span><?php echo e(trans('lang.Ui Kits')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/ui-kits' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/ui-kits' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(Route::currentRouteName()=='state-color' ? 'active' : ''); ?>">State color</a></li>
                      <li><a href="<?php echo e(route('typography')); ?>" class="<?php echo e(Route::currentRouteName()=='typography' ? 'active' : ''); ?>">Typography</a></li>
                      <li><a href="<?php echo e(route('avatars')); ?>" class="<?php echo e(Route::currentRouteName()=='avatars' ? 'active' : ''); ?>">Avatars</a></li>
                      <li><a href="<?php echo e(route('helper-classes')); ?>" class="<?php echo e(Route::currentRouteName()=='helper-classes' ? 'active' : ''); ?>">helper classes</a></li>
                      <li><a href="<?php echo e(route('grid')); ?>" class="<?php echo e(Route::currentRouteName()=='grid' ? 'active' : ''); ?>">Grid</a></li>
                      <li><a href="<?php echo e(route('tag-pills')); ?>" class="<?php echo e(Route::currentRouteName()=='tag-pills' ? 'active' : ''); ?>">Tag & pills</a></li>
                      <li><a href="<?php echo e(route('progress-bar')); ?>" class="<?php echo e(Route::currentRouteName()=='progress-bar' ? 'active' : ''); ?>">Progress</a></li>
                      <li><a href="<?php echo e(route('modal')); ?>" class="<?php echo e(Route::currentRouteName()=='modal' ? 'active' : ''); ?>">Modal</a></li>
                      <li><a href="<?php echo e(route('alert')); ?>" class="<?php echo e(Route::currentRouteName()=='alert' ? 'active' : ''); ?>">Alert</a></li>
                      <li><a href="<?php echo e(route('popover')); ?>" class="<?php echo e(Route::currentRouteName()=='popover' ? 'active' : ''); ?>">Popover</a></li>
                      <li><a href="<?php echo e(route('tooltip')); ?>" class="<?php echo e(Route::currentRouteName()=='tooltip' ? 'active' : ''); ?>">Tooltip</a></li>
                      <li><a href="<?php echo e(route('loader')); ?>" class="<?php echo e(Route::currentRouteName()=='loader' ? 'active' : ''); ?>">Spinners</a></li>
                      <li><a href="<?php echo e(route('dropdown')); ?>" class="<?php echo e(Route::currentRouteName()=='dropdown' ? 'active' : ''); ?>">Dropdown</a></li>  
                      <li><a href="<?php echo e(route('accordion')); ?>" class="<?php echo e(Route::currentRouteName()=='accordion' ? 'active' : ''); ?>">Accordion</a></li>
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="#">Tabs
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none;'); ?>;">
                          <li><a href="<?php echo e(route('tab-bootstrap')); ?>" class="<?php echo e(Route::currentRouteName()=='tab-bootstrap' ? 'active' : ''); ?>">Bootstrap Tabs</a></li>
                                        <li><a href="<?php echo e(route('tab-material')); ?>" class="<?php echo e(Route::currentRouteName()=='tab-material' ? 'active' : ''); ?>">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo e(route('box-shadow')); ?>" class="<?php echo e(Route::currentRouteName()=='box-shadow' ? 'active' : ''); ?>">Shadow</a></li>
                                <li><a href="<?php echo e(route('list')); ?>" class="<?php echo e(Route::currentRouteName()=='list' ? 'active' : ''); ?>">Lists</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/bonus-ui' ? 'active' : ''); ?>" href="#"><i data-feather="folder-plus"></i><span><?php echo e(trans('lang.Bonus Ui')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/ui-kits' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/bonus-ui' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('scrollable')); ?>" class="<?php echo e(Route::currentRouteName()=='scrollable' ? 'active' : ''); ?>">Scrollable</a></li>
                                  <li><a href="<?php echo e(route('tree')); ?>" class="<?php echo e(Route::currentRouteName()=='tree' ? 'active' : ''); ?>">Tree view</a></li>
                                  <li><a href="<?php echo e(route('bootstrap-notify')); ?>" class="<?php echo e(Route::currentRouteName()=='bootstrap-notify' ? 'active' : ''); ?>">Bootstrap Notify</a></li>
                                  <li><a href="<?php echo e(route('rating')); ?>" class="<?php echo e(Route::currentRouteName()=='rating' ? 'active' : ''); ?>">Rating</a></li>
                                  <li><a href="<?php echo e(route('dropzone')); ?>" class="<?php echo e(Route::currentRouteName()=='dropzone' ? 'active' : ''); ?>">dropzone</a></li>
                                  <li><a href="<?php echo e(route('tour')); ?>" class="<?php echo e(Route::currentRouteName()=='tour' ? 'active' : ''); ?>">Tour</a></li>
                                  <li><a href="<?php echo e(route('sweet-alert2')); ?>" class="<?php echo e(Route::currentRouteName()=='sweet-alert2' ? 'active' : ''); ?>">SweetAlert2</a></li>
                                  <li><a href="<?php echo e(route('modal-animated')); ?>" class="<?php echo e(Route::currentRouteName()=='modal-animated' ? 'active' : ''); ?>">Animated Modal</a></li>
                                  <li><a href="<?php echo e(route('owl-carousel')); ?>" class="<?php echo e(Route::currentRouteName()=='owl-carousel' ? 'active' : ''); ?>">Owl Carousel</a></li>
                                  <li><a href="<?php echo e(route('ribbons')); ?>" class="<?php echo e(Route::currentRouteName()=='ribbons' ? 'active' : ''); ?>">Ribbons</a></li>
                                  <li><a href="<?php echo e(route('pagination')); ?>" class="<?php echo e(Route::currentRouteName()=='pagination' ? 'active' : ''); ?>">Pagination</a></li>
                                  <li><a href="<?php echo e(route('breadcrumb')); ?>" class="<?php echo e(Route::currentRouteName()=='breadcrumb' ? 'active' : ''); ?>">Breadcrumb</a></li>
                                  <li><a href="<?php echo e(route('range-slider')); ?>" class="<?php echo e(Route::currentRouteName()=='range-slider' ? 'active' : ''); ?>">Range Slider</a></li>
                                  <li><a href="<?php echo e(route('image-cropper')); ?>" class="<?php echo e(Route::currentRouteName()=='image-cropper' ? 'active' : ''); ?>">Image cropper</a></li>
                                  <li><a href="<?php echo e(route('sticky')); ?>" class="<?php echo e(Route::currentRouteName()=='sticky' ? 'active' : ''); ?>">Sticky</a></li>
                                  <li><a href="<?php echo e(route('basic-card')); ?>" class="<?php echo e(Route::currentRouteName()=='basic-card' ? 'active' : ''); ?>">Basic Card</a></li>
                                  <li><a href="<?php echo e(route('creative-card')); ?>" class="<?php echo e(Route::currentRouteName()=='creative-card' ? 'active' : ''); ?>">Creative Card</a></li>
                                  <li><a href="<?php echo e(route('tabbed-card')); ?>" class="<?php echo e(Route::currentRouteName()=='tabbed-card' ? 'active' : ''); ?>">Tabbed Card</a></li>
                                  <li><a href="<?php echo e(route('dragable-card')); ?>" class="<?php echo e(Route::currentRouteName()=='dragable-card' ? 'active' : ''); ?>">Draggable Card</a></li>
                      <li>
                        <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'active' : ''); ?>" href="#">Timeline
                          <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2']) ? 'block' : 'none;'); ?>;">
                          <li><a href="<?php echo e(route('timeline-v-1')); ?>" class="<?php echo e(Route::currentRouteName()=='timeline-v-1' ? 'active' : ''); ?>">Timeline 1</a></li>
                                          <li><a href="<?php echo e(route('timeline-v-2')); ?>" class="<?php echo e(Route::currentRouteName()=='timeline-v-2' ? 'active' : ''); ?>">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/builders' ? 'active' : ''); ?>" href="#"><i data-feather="edit-3"></i><span><?php echo e(trans('lang.Builders')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/builders' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/builders' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('form-builder-1')); ?>" class="<?php echo e(Route::currentRouteName()=='form-builder-1' ? 'active' : ''); ?>"> Form Builder 1</a></li>
                                  <li><a href="<?php echo e(route('form-builder-2')); ?>" class="<?php echo e(Route::currentRouteName()=='form-builder-2' ? 'active' : ''); ?>"> Form Builder 2</a></li>
                                  <li><a href="<?php echo e(route('pagebuild')); ?>" class="<?php echo e(Route::currentRouteName()=='pagebuild' ? 'active' : ''); ?>">Page Builder</a></li>
                                  <li><a href="<?php echo e(route('button-builder')); ?>" class="<?php echo e(Route::currentRouteName()=='button-builder' ? 'active' : ''); ?>">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/animation' ? 'active' : ''); ?>" href="#"><i data-feather="cloud-drizzle"></i><span><?php echo e(trans('lang.Animation')); ?></span></a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/animation' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('animate')); ?>" class="<?php echo e(Route::currentRouteName()=='animate' ? 'active' : ''); ?>">Animate</a></li>
                                  <li><a href="<?php echo e(route('scroll-reval')); ?>" class="<?php echo e(Route::currentRouteName()=='scroll-reval' ? 'active' : ''); ?>">Scroll Reveal</a></li>
                                  <li><a href="<?php echo e(route('aos')); ?>" class="<?php echo e(Route::currentRouteName()=='aos' ? 'active' : ''); ?>">AOS animation</a></li>
                                  <li><a href="<?php echo e(route('tilt')); ?>" class="<?php echo e(Route::currentRouteName()=='tilt' ? 'active' : ''); ?>">Tilt Animation</a></li>
                                  <li><a href="<?php echo e(route('wow')); ?>" class="<?php echo e(Route::currentRouteName()=='wow' ? 'active' : ''); ?>">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/icons' ? 'active' : ''); ?>" href="#"><i data-feather="command"></i><span><?php echo e(trans('lang.Icons')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/icons' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/icons' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('flag-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='flag-icon' ? 'active' : ''); ?>">Flag icon</a></li>
                      <li><a href="<?php echo e(route('font-awesome')); ?>" class="<?php echo e(Route::currentRouteName()=='font-awesome' ? 'active' : ''); ?>">Fontawesome Icon</a></li>
                      <li><a href="<?php echo e(route('ico-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='ico-icon' ? 'active' : ''); ?>">Ico Icon</a></li>
                      <li><a href="<?php echo e(route('themify-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='themify-icon' ? 'active' : ''); ?>">Thimify Icon</a></li>
                      <li><a href="<?php echo e(route('feather-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='feather-icon' ? 'active' : ''); ?>">Feather icon</a></li>
                      <li><a href="<?php echo e(route('whether-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='whether-icon' ? 'active' : ''); ?>">Whether Icon</a></li>
                      <li><a href="<?php echo e(route('simple-line-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='simple-line-icon' ? 'active' : ''); ?>">Simple line Icon</a></li>
                      <li><a href="<?php echo e(route('material-design-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='material-design-icon' ? 'active' : ''); ?>">Material Design Icon</a></li>
                      <li><a href="<?php echo e(route('pe7-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='pe7-icon' ? 'active' : ''); ?>">pe7 icon</a></li>
                      <li><a href="<?php echo e(route('typicons-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='typicons-icon' ? 'active' : ''); ?>">Typicons icon</a></li>
                      <li><a href="<?php echo e(route('ionic-icon')); ?>" class="<?php echo e(Route::currentRouteName()=='ionic-icon' ? 'active' : ''); ?>">Ionic icon</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/buttons' ? 'active' : ''); ?>" href="#"><i data-feather="cloud"></i><span><?php echo e(trans('lang.Buttons')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/buttons' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/buttons' ? 'block;' : 'none;'); ?>">
                      <li><a href="<?php echo e(route('buttons')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons' ? 'active' : ''); ?>">Default Style</a></li>
                                  <li><a href="<?php echo e(route('buttons-flat')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons-flat' ? 'active' : ''); ?>">Flat Style</a></li>
                                  <li><a href="<?php echo e(route('buttons-edge')); ?>" class="<?php echo e(Route::currentRouteName()=='buttons-edge' ? 'active' : ''); ?>">Edge Style</a></li>
                                  <li><a href="<?php echo e(route('raised-button')); ?>" class="<?php echo e(Route::currentRouteName()=='raised-button' ? 'active' : ''); ?>">Raised Style</a></li>
                                  <li><a href="<?php echo e(route('button-group')); ?>" class="<?php echo e(Route::currentRouteName()=='button-group' ? 'active' : ''); ?>">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/charts' ? 'active' : ''); ?>" href="#"><i data-feather="bar-chart"></i><span><?php echo e(trans('lang.Charts')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/charts' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/charts' ? 'block;' : 'none;'); ?>"> 
                      <li><a href="<?php echo e(route('echarts')); ?>" class="<?php echo e(Route::currentRouteName()=='echarts' ? 'active' : ''); ?>">Echarts</a></li>
                      <li><a href="<?php echo e(route('chart-apex')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-apex' ? 'active' : ''); ?>">Apex Chart</a></li>
                                <li><a href="<?php echo e(route('chart-google')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-google' ? 'active' : ''); ?>">Google Chart</a></li>
                                <li><a href="<?php echo e(route('chart-sparkline')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-sparkline' ? 'active' : ''); ?>">Sparkline chart</a></li>
                                <li><a href="<?php echo e(route('chart-flot')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-flot' ? 'active' : ''); ?>">Flot Chart</a></li>
                                <li><a href="<?php echo e(route('chart-knob')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-knob' ? 'active' : ''); ?>">Knob Chart</a></li>
                                <li><a href="<?php echo e(route('chart-morris')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-morris' ? 'active' : ''); ?>">Morris Chart</a></li>
                                <li><a href="<?php echo e(route('chartjs')); ?>" class="<?php echo e(Route::currentRouteName()=='chartjs' ? 'active' : ''); ?>">Chatjs Chart</a></li>
                                <li><a href="<?php echo e(route('chartist')); ?>" class="<?php echo e(Route::currentRouteName()=='chartist' ? 'active' : ''); ?>">Chartist Chart</a></li>
                                <li><a href="<?php echo e(route('chart-peity')); ?>" class="<?php echo e(Route::currentRouteName()=='chart-peity' ? 'active' : ''); ?>">Peity Chart </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6><?php echo e(trans('lang.Pages')); ?></h6>
                                <p><?php echo e(trans('lang.All neccesory pages added')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='landing-page' ? 'active' : ''); ?>" href="<?php echo e(route('landing-page')); ?>"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='sample-page' ? 'active' : ''); ?>" href="<?php echo e(route('sample-page')); ?>"><i data-feather="file-text"> </i><span><?php echo e(trans('lang.Sample page')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='internationalization' ? 'active' : ''); ?>" href="<?php echo e(route('internationalization')); ?>"><i data-feather="globe"> </i><span><?php echo e(trans('lang.Internationalization')); ?></span></a></li>

                  <li class="mega-menu">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/others' ? 'active' : ''); ?>" href="#"><i data-feather="layers"></i><span><?php echo e(trans('lang.Others')); ?></span>
                      <div class="according-menu other"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/others' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'down' : 'right'); ?>"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('error-400')); ?>" class="<?php echo e(Route::currentRouteName()=='error-400' ? 'active' : ''); ?>">Error 400</a></li>
                                                   <li><a href="<?php echo e(route('error-401')); ?>" class="<?php echo e(Route::currentRouteName()=='error-401' ? 'active' : ''); ?>">Error 401</a></li>
                                                   <li><a href="<?php echo e(route('error-403')); ?>" class="<?php echo e(Route::currentRouteName()=='error-403' ? 'active' : ''); ?>">Error 403</a></li>
                                                   <li><a href="<?php echo e(route('error-404')); ?>" class="<?php echo e(Route::currentRouteName()=='error-404' ? 'active' : ''); ?>">Error 404</a></li>
                                                   <li><a href="<?php echo e(route('error-500')); ?>" class="<?php echo e(Route::currentRouteName()=='error-500' ? 'active' : ''); ?>">Error 500</a></li>
                                                   <li><a href="<?php echo e(route('error-503')); ?>" class="<?php echo e(Route::currentRouteName()=='error-503' ? 'active' : ''); ?>">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['login', 'login-one', 'login-two', 'login-bs-validation', 'login-bs-tt-validation', 'login-sa-validation', 'sign-up', 'sign-up-one', 'sign-up-two', 'sign-up-wizard', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'down' : 'right'); ?>"></i></div>     
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['login', 'login-one', 'login-two', 'login-bs-validation', 'login-bs-tt-validation', 'login-sa-validation', 'sign-up', 'sign-up-one', 'sign-up-two', 'sign-up-wizard', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('login')); ?>" target="_blank">Login Simple</a></li>
                                                  <li><a href="<?php echo e(route('login-one')); ?>" target="_blank">Login with bg image</a></li>
                                                  <li><a href="<?php echo e(route('login-two')); ?>" target="_blank">Login with image two </a></li>
                                                  <li><a href="<?php echo e(route('login-bs-validation')); ?>" target="_blank">Login With validation</a></li>
                                                  <li><a href="<?php echo e(route('login-bs-tt-validation')); ?>" target="_blank">Login with tooltip</a></li>
                                                  <li><a href="<?php echo e(route('login-sa-validation')); ?>" target="_blank">Login with sweetalert</a></li>
                                                  <li><a href="<?php echo e(route('sign-up')); ?>" target="_blank">Register Simple</a></li>
                                                  <li><a href="<?php echo e(route('sign-up-one')); ?>" target="_blank">Register with Bg Image </a></li>
                                                  <li><a href="<?php echo e(route('sign-up-two')); ?>" target="_blank">Register with Bg video</a></li>
                                                  <li><a href="<?php echo e(route('sign-up-wizard')); ?>" target="_blank">Register wizard</a></li>
                                                  <li><a href="<?php echo e(route('unlock')); ?>">Unlock User</a></li>
                                                  <li><a href="<?php echo e(route('forget-password')); ?>">Forget Password</a></li>
                                                  <li><a href="<?php echo e(route('reset-password')); ?>">Reset Password</a></li>
                                                  <li><a href="<?php echo e(route('maintenance')); ?>">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'down' : 'right'); ?>"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu"  style="display: <?php echo e(in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('comingsoon')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon' ? 'active' : ''); ?>">Coming Simple</a></li>
                                                   <li><a href="<?php echo e(route('comingsoon-bg-video')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon-bg-video' ? 'active' : ''); ?>">Coming with Bg video</a></li>
                                                   <li><a href="<?php echo e(route('comingsoon-bg-img')); ?>" class="<?php echo e(Route::currentRouteName()=='comingsoon-bg-img' ? 'active' : ''); ?>">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'down' : 'right'); ?>"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('basic-template')); ?>" class="<?php echo e(Route::currentRouteName()=='basic-template' ? 'active' : ''); ?>">Basic Email</a></li>
                                                   <li><a href="<?php echo e(route('email-header')); ?>" class="<?php echo e(Route::currentRouteName()=='email-header' ? 'active' : ''); ?>">Basic With Header</a></li>
                                                   <li><a href="<?php echo e(route('template-email')); ?>" class="<?php echo e(Route::currentRouteName()=='template-email' ? 'active' : ''); ?>">Ecomerce Template</a></li>
                                                   <li><a href="<?php echo e(route('template-email-2')); ?>" class="<?php echo e(Route::currentRouteName()=='template-email-2' ? 'active' : ''); ?>">Email Template 2</a></li>
                                                   <li><a href="<?php echo e(route('ecommerce-templates')); ?>" class="<?php echo e(Route::currentRouteName()=='ecommerce-templates' ? 'active' : ''); ?>">Ecommerce Email</a></li>
                                                   <li><a href="<?php echo e(route('email-order-success')); ?>" class="<?php echo e(Route::currentRouteName()=='email-order-success' ? 'active' : ''); ?>">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6><?php echo e(trans('lang.Miscellaneous')); ?></h6>
                                <p><?php echo e(trans('lang.Bouns pages & apps')); ?></p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/gallery' ? 'active' : ''); ?>" href="#"><i data-feather="image"></i><span><?php echo e(trans('lang.Gallery')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/gallery' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/gallery' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('gallery')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery' ? 'active' : ''); ?>">Gallery Grid</a></li>
                                <li><a href="<?php echo e(route('gallery-with-description')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery-with-description' ? 'active' : ''); ?>">Gallery Grid Desc</a></li>
                                <li><a href="<?php echo e(route('gallery-masonry')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery-masonry' ? 'active' : ''); ?>">Masonry Gallery</a></li>
                                <li><a href="<?php echo e(route('masonry-gallery-with-disc')); ?>" class="<?php echo e(Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : ''); ?>">Masonry with Desc</a></li>
                                <li><a href="<?php echo e(route('gallery-hover')); ?>" class="<?php echo e(Route::currentRouteName()=='gallery-hover' ? 'active' : ''); ?>">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/blog' ? 'active' : ''); ?>" href="#"><i data-feather="film"></i><span><?php echo e(trans('lang.Blog')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/blog' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/blog' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('blog')); ?>" class="<?php echo e(Route::currentRouteName()=='blog' ? 'active' : ''); ?>">Blog Details</a></li>
                                  <li><a href="<?php echo e(route('blog-single')); ?>" class="<?php echo e(Route::currentRouteName()=='blog-single' ? 'active' : ''); ?>">Blog Single</a></li>
                                  <li><a href="<?php echo e(route('add-post')); ?>" class="<?php echo e(Route::currentRouteName()=='add-post' ? 'active' : ''); ?>">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='faq' ? 'active' : ''); ?>" href="<?php echo e(route('faq')); ?>"><i data-feather="help-circle"> </i><span><?php echo e(trans('lang.FAQ')); ?></span></a></li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/job-search' ? 'active' : ''); ?>" href="#"><i data-feather="package"></i><span><?php echo e(trans('lang.Job Search')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/job-search' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/job-search' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('job-cards-view')); ?>" class="<?php echo e(Route::currentRouteName()=='job-cards-view' ? 'active' : ''); ?>">Cards view</a></li>
                                <li><a href="<?php echo e(route('job-list-view')); ?>" class="<?php echo e(Route::currentRouteName()=='job-list-view' ? 'active' : ''); ?>">List View</a></li>
                                <li><a href="<?php echo e(route('job-details')); ?>" class="<?php echo e(Route::currentRouteName()=='job-details' ? 'active' : ''); ?>">Job Details</a></li>
                                <li><a href="<?php echo e(route('job-apply')); ?>" class="<?php echo e(Route::currentRouteName()=='job-apply' ? 'active' : ''); ?>">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/learning' ? 'active' : ''); ?>" href="#"><i data-feather="radio"></i><span><?php echo e(trans('lang.Learning')); ?></span>
                      <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/learning' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/learning' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('learning-list-view')); ?>" class="<?php echo e(Route::currentRouteName()=='learning-list-view' ? 'active' : ''); ?>">Learning List</a></li>
                                <li><a href="<?php echo e(route('learning-detailed')); ?>" class="<?php echo e(Route::currentRouteName()=='learning-detailed' ? 'active' : ''); ?>">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/maps' ? 'active' : ''); ?>" href="#"><i data-feather="map"></i><span><?php echo e(trans('lang.Maps')); ?></span>
                        <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/maps' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/maps' ? 'block' : 'none;'); ?>;">
                        <li><a href="<?php echo e(route('map-js')); ?>" class="<?php echo e(Route::currentRouteName()=='map-js' ? 'active' : ''); ?>">Maps JS</a></li>
                                    <li><a href="<?php echo e(route('vector-map')); ?>" class="<?php echo e(Route::currentRouteName()=='vector-map' ? 'active' : ''); ?>">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/editors' ? 'active' : ''); ?>" href="#"><i data-feather="edit"></i><span><?php echo e(trans('lang.Editors')); ?></span>
                        <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/editors' ? 'down' : 'right'); ?>"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/editors' ? 'block' : 'none;'); ?>;">
                      <li><a href="<?php echo e(route('summernote')); ?>" class="<?php echo e(Route::currentRouteName()=='summernote' ? 'active' : ''); ?>">Summer Note</a></li>
                                  <li><a href="<?php echo e(route('ckeditor')); ?>" class="<?php echo e(Route::currentRouteName()=='ckeditor' ? 'active' : ''); ?>">CK editor</a></li>
                                  <li><a href="<?php echo e(route('simple-mde')); ?>" class="<?php echo e(Route::currentRouteName()=='simple-mde' ? 'active' : ''); ?>">MDE editor</a></li>
                                  <li><a href="<?php echo e(route('ace-code-editor')); ?>" class="<?php echo e(Route::currentRouteName()=='ace-code-editor' ? 'active' : ''); ?>">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName() == 'knowledgebase' ? 'active' : ''); ?>" href="<?php echo e(route('knowledgebase')); ?>"><i data-feather="sunrise"> </i><span><?php echo e(trans('lang.Knowledgebase')); ?></span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='support-ticket' ? 'active' : ''); ?>" href="<?php echo e(route('support-ticket')); ?>"><i data-feather="users"> </i><span><?php echo e(trans('lang.Support Ticket')); ?></span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Footer Fixed</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Page Layout</li>
                    <li class="breadcrumb-item active">Footer Fixed</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Sample Card</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                  </div>
                  <div class="card-body">
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                      enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                      nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer footer-fix">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <?php echo e(date('Y')); ?> © Cuba theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <!-- feather icon js-->
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
    <!-- scrollbar js-->
    <script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html><?php /**PATH D:\Homestead\cuba\resources\views/page-layout/footer-fixed.blade.php ENDPATH**/ ?>