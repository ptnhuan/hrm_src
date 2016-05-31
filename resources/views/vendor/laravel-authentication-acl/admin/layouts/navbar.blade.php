<?php

$less = new lessc;
$less->compileFile(public_path() . '/packages/jacopo/laravel-authentication-acl/less/header-main.less', public_path() . '/packages/jacopo/laravel-authentication-acl/_css/header-main.css');
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <header class="main-header">
        <a href="#" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <img src="images/Apple_logo_black.svg.png" width="25px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <ul class="nav navbar-nav">

                @if(isset($menu_items))
                @foreach($menu_items as $item)
                <li class="{!! LaravelAcl\Library\Views\Helper::get_active_route_name($item->getRoute()) !!}"> <a href="{!! $item->getLink() !!}">{!!$item->getName()!!}</a></li>
                @endforeach
                @endif
            </ul>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="drop message-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="drop-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="/*overflow: hidden*/; width: 100%; height: 200px;">

                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <li class="drop notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="drop-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>

                    <li class="drop user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 17])
                            <span id="nav-email">{!! isset($logged_user) ? $logged_user->email : 'User' !!}</span> <i class="fa fa-caret-down"></i>

                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="drop-menu">
                            <li class="user-header">
                                @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 30])
                                <p>
                                    <span id="nav-email">{!! isset($logged_user) ? $logged_user->email : 'User' !!}</span> <i class="fa fa-caret-down"></i>
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{!! URL::route('users.selfprofile.edit') !!}" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Your profile</a></a>
                                </div>
                                <div class="pull-right">
                                    <a href="{!! URL::route('user.logout') !!}" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>

<!-- <div class="container-fluid margin-right-15">
        <div class="navbar-header">
            <a class="navbar-brand bariol-thin" href="#">{{$app_name}}</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-main-menu">
           
            <div class="navbar-nav nav navbar-right">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown-profile">
                       @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 30])
                            <span class="hidden-xs"></span>
                        <span id="nav-email">{!! isset($logged_user) ? $logged_user->email : 'User' !!}</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                            <li>
                                <a href="{!! URL::route('users.selfprofile.edit') !!}"><i class="fa fa-user"></i> Your profile</a>
                            </li>
                            <li class="divider"></li>
                        <li>
                            <a href="{!! URL::route('user.logout') !!}"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </div> nav-right 
        </div>/.nav-collapse 
    </div>-->
