<!DOCTYPE html>
<!--
* CoreUI Pro based Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io/pro/
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/@coreui/chartjs/css/coreui-chartjs.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
</head>
<body class="c-app c-no-layout-transition">

@include('modules.core.menu_left')
<div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right c-sidebar-overlaid" id="aside">
    <button class="c-sidebar-close c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-show" responsive="true">
        <svg class="c-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
        </svg>
    </button>
    <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg></a></li>
    </ul>
    <!-- Tab panes-->
    <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Today</div>
                <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="{{asset('assets/img/avatars/7.jpg')}}" alt="user@email.com"></div>
                    <div>Meeting with <strong>Lucas</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-info">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                    <div>Skype with <strong>Megan</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 5pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-skype"></use>
                        </svg>&nbsp; On-line</small>
                </div>
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Tomorrow</div>
                <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                    <div>New UI Project - <strong>deadline</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 10 - 11pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                    <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                    <div><strong>Team meeting</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 6pm</small><small class="text-muted">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="c-aside-options">
                <div class="clearfix mt-4"><small><b>Option 1</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 2</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 3</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 4</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">25GB/256GB</small>
        </div>
    </div>
</div>
<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
            </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{route('customer.index')}}">@lang('messages.dashboard')</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
            <li class="c-header-nav-item px-3">
                <form action="{{route('language')}}" method="post">
                    @csrf
                    <select id="language" name="language" onchange="this.form.submit()">
                        <option value="vi" {{\Illuminate\Support\Facades\App::getLocale() =='vi'?'selected':''}}>VI</option>
                        <option value="en" {{\Illuminate\Support\Facades\App::getLocale() =='en'?'selected':''}}>EN</option>
                    </select>
                </form>

            </li>

        </ul>
        <ul class="c-header-nav mfs-auto">
            <li class="c-header-nav-item px-3 c-d-legacy-none">
                <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
                    <svg class="c-icon c-d-dark-none">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                    </svg>
                    <svg class="c-icon c-d-default-none">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                    </svg>
                </button>
            </li>
        </ul>
        <ul class="c-header-nav">
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg><span class="badge badge-pill badge-danger">5</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                        </svg> New user registered</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-danger">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                        </svg> User deleted</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-info">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                        </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                        </svg> New client</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-warning">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                        </svg> Server overloaded</a>
                    <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-xs">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </span><small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-xs">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </span><small class="text-muted">11444GB/16384MB</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-xs">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </span><small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                    </svg><span class="badge badge-pill badge-warning">15</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span></div><span class="progress progress-xs">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span></div><span class="progress progress-xs">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div><span class="progress progress-xs">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span></div><span class="progress progress-xs">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span></div><span class="progress progress-xs">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </span>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg><span class="badge badge-pill badge-info">7</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
                            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg> Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg> Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                        </svg> Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                        </svg> Comments<span class="badge badge-warning mfs-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg> Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg> Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                        </svg> Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                        </svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg> Lock Account</a><a class="dropdown-item" href="{{route('auth.logout')}}">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Logout</a>
                </div>
            </li>
            <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                </svg>
            </button>
        </ul>
        <div class="c-subheader justify-content-between px-3">
            <!-- Breadcrumb-->

            <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                    </svg></a><a class="c-subheader-nav-link" href="{{route('customer.index')}}">
                    <svg class="c-icon">
                        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-graph')}}"></use>
                    </svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                    </svg> &nbsp;Settings</a></div>
        </div>
    </header>
    @yield('content')
    @include('modules.core.footer')
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{asset('vendors/@coreui/coreui-pro/js/coreui.bundle.min.js')}}"></script>
<!--[if IE]><!-->
<script src="{{asset('vendors/@coreui/icons/js/svgxuse.min.js')}}"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->
<script src="{{asset('vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js')}}"></script>
<script src="{{asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('vendors/jquery/js/jquery.slim.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/datatables.js')}}"></script>
<script src="{{asset('js/toasts.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        setTimeout(function() {
            document.body.classList.remove('c-no-layout-transition')
        }, 2000);
    });
</script>
<script>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        toastr.success("{{\Illuminate\Support\Facades\Session::get('success')}}")
        @endif


</script>
</body>
</html>
