<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">

            <a href="{{URL::route("adminDashboard")}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span> General Settings</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{URL::route("supplierList")}}"><i class="fa fa-cog"></i> Supplier Settings</i></a>
                </li>
                <li>
                    <a href="{{URL::route("customerList")}}"><i class="fa fa-cog"></i> Customer Settings</i></a>
                </li>
                <li>
                    <a href="{{URL::route("brandList")}}"><i class="fa fa-cog"></i> Brand Settings</i></a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span>Order Manager</span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{URL::route("allOrders")}}"><i class="fa fa-list"></i>Order List</a>
                </li>

                <li>
                    <a href=""><i class="fa fa-list"></i>Sub Menu</a>
                    <a href=""><i class="fa fa-list"></i>Sub Menu</a>
                </li>

                <li>
                    <a href=""><i class="fa fa-list"></i>Sub Menu </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <?php if (Auth::user()->role === 'admin') { ?>
            <li>
                <a href="#"><i class="fa fa-users"></i>User Manager</a>
                <ul class="treeview-menu">
                    <li>
                        <a href=""><i class="fa fa-list"></i>Sub Menu </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-list"></i>Sub Menu</a>
                        <a href=""><i class="fa fa-list"></i>Sub Menu</a></li>
            </li>
            <li>
                <a href=""><i class="fa fa-list"></i>Sub Menu</a>
                <a href=""><i class="fa fa-list"></i>Sub Menu</a></li>
            </li>
            <li>
                <a href=""><i class="fa fa-list"></i>Sub Menu </a>
            </li>
              </ul>
        </li>
    <?php } ?>
</li>
</ul>
</section>
<!-- /.sidebar -->