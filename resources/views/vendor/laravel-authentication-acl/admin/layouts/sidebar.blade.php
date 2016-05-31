<?php
include (public_path() . '/packages/jacopo/laravel-authentication-acl/less/lessc.inc.php');
$less = new lessc;
$less->compileFile(public_path() . '/packages/jacopo/laravel-authentication-acl/less/sidebar-left.less', public_path() . '/packages/jacopo/laravel-authentication-acl/_css/sidebar-left.css');
?>



<aside class="main-sidebar">
    <section class="sidebars" style="height: auto;">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/packages/jacopo/laravel-authentication-acl/images/user2-160x160.jpg'" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>


            </a></li>

            <li class="treeview">
                
                @if(isset($sidebar_items) && $sidebar_items)
                @foreach($sidebar_items as $name => $data)
                <a href="{!! $data['url'] !!}">
                    {!! $data['icon'] !!}  <span>{{$name}}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
                @endforeach
                @endif

            </li>
        </ul>
    </section>
</aside>

