<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
        </div>
        <!-- logo -->
        <div class="navbar-brand">
            <a href="{{ route('admin.home') }}">The Time admin</a>
        </div>
        <!-- end logo -->
        <div class="navbar-right">
            <!-- navbar menu -->
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-cog"></i>
                        </a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">ACCOUNT SETTINGS</li>
                            <li><a href="#"><i class="fa fa-fw fa-edit"></i> <span>Basic</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-bell"></i> <span>Notifications</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-sliders"></i> <span>Preferences</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-lock"></i> <span>Privacy</span></a></li>
                            <li class="menu-heading">BILLING</li>
                            <li><a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span>Invoices</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span>Payments</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-refresh"></i> <span>Renewals</span></a></li>
                            <li class="menu-button">
                                <a href="#" class="btn btn-primary"><i class="fa fa-rocket"></i> UPGRADE PLAN</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end navbar menu -->
        </div>
    </div>
</nav>
