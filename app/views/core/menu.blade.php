<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start ">
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="active open">
                <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">Setting</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>                    
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::to('/setting/field-types')}}"><i class="icon-home"></i> Field Types</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/setting/fields')}}"><i class="icon-home"></i> Fields</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/setting/field-groups')}}"><i class="icon-basket"></i> Field Groups</a>
                    </li>                   
                    <li>
                        <a href="{{URL::to('/setting/group-rules')}}"><i class="icon-basket"></i> Group rules</a>
                    </li>                   
                </ul>
            </li>                      
            @foreach (MenuModel::getObjectMenu() as $o)
            <li >
                <a href="{{URL::to('/tung/'.$o->tag)}}">
                    <i class="icon-rocket"></i>
                    <span class="title">{{$o->name}} </span>
                    <span class="arrow "></span>
                </a>                 
            </li>    
            @endforeach            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>