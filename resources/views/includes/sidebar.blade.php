@php
	$sidebarClass = (!empty($sidebarTransparent)) ? 'sidebar-transparent' : '';
@endphp
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar {{ $sidebarClass }}">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
        <ul class="nav">
			<li class="nav-search">
                <input type="text" class="form-control" placeholder="Sidebar Menu Filter..." data-sidebar-search="true" />
			</li>
			<li class="nav-header">Navigation</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- @can('view_company_details') --}}
                <li>
                    <a href="{{route('posts')}}">
                        <i class="fa fa-car"></i>
                        <span>Posts</span>
                    </a>
                </li>
            {{-- @endcan --}}
            {{-- @can('view_defaulters')
                <li>
                    <a href="{{route('defaulters')}}">
                        <i class="fa fa-credit-card"></i>
                        <span>Defaulters</span>
                    </a>
                </li>
            @endcan
            @can('manage_covers')
                <li>
                    <a href="{{route('active-covers')}}">
                        <i class="fa fa-bookmark"></i>
                        <span>Active Covers</span>
                    </a>
                </li>
            @endcan
            @can('manage_policies')
                <li>
                    <a href="{{route('insurance-policies')}}">
                        <i class="fa fa-file-alt"></i>
                        <span>All Insurance Policies</span>
                    </a>
                </li>
            @endcan
            @can('view_reports')
                <li class="has-sub ">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-chart-pie"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('company-report')}}">Client Report</a></li>
                        <li><a href="{{route('premiums-report')}}">Comprehensive Premium Report</a></li>
                        <li><a href="{{route('billing-report')}}">Comprehensive Cover Report</a></li>
                        <li><a href="{{route('events-report')}}">Vehicle Movement Report</a></li>
                        <li><a href="{{route('policies-report')}}">Motor Policy Report</a></li>
                        <li><a href="{{route('defaulters-report')}}">Defaulters Report</a></li>
                    </ul>
                </li>
            @endcan
            <li class="has-sub ">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cog"></i>
                    <span>Configurations</span>
                </a>
                <ul class="sub-menu">
                    @can('edit_configurations')<li><a href="{{route('general-settings')}}"><i class="fa fa-wrench"></i> General Config</a></li>@endcan
                    @can(['create_users','update_users'])<li><a href="{{route('users')}}"><i class="fa fa-users"></i> Users</a></li>@endcan
                    @can('manage_roles_permissions')<li><a href="{{route('roles.index')}}"><i class="fa fa-lock-open"></i> Roles & Permissions</a></li>@endcan
                    <li class="has-sub ">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-thumbs-up"></i>
                            <span>Approval Setups</span>
                        </a>
                        <ul class="sub-menu">
                            @can(['view_approvers','manage_approvers','approve_approvers'])<li><a href="{{route('approvers')}}">Approvers</a></li>@endcan
                            <li><a href="{{route('approvals')}}">My Approvals</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
			<!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

