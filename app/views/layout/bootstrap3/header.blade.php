<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to('/'); ?>"><i class="glyphicon glyphicon-home"></i> Penyewaan Buku dan Komik</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav nav-pills nav-justified">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Member <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/member/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Member</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/member'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-import"></i> Entry <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/entry/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Entry</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/entry'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-hand-right"></i> Penyewaan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/penyewaan/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Penyewaan</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/penyewaan'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>


</nav>