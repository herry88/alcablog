<nav class="nav-horizontal">
    <button type="button" class="menu-close hidden-on-desktop js__close_menu"><i class="fa fa-times"></i><span>CLOSE</span></button>
    <div class="container">
        
        <ul class="menu">
                <li>
                    <a href="{{ route('home') }}"><i class="ico fa fa-home"></i><span>Dashboard</span></a>
                </li>
                <li class="has-sub">
                    <a href="#"><i class="ico fa fa-adjust"></i><span>Master Data</span></a>
                    <ul class="sub-menu mega mega-3">
                        <li class="has-sub">
                            <h3 class="title">Category</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="{{ route('category.create') }}">Add Category</a></li>
                                <li><a href="{{ route('category.index') }}">ListCategory</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                        <li class="has-sub">
                            <h3 class="title">Posting</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="{{ route('post.create') }}">Add Posting</a></li>
                                <li><a href="{{ route('post.index') }}">List Posting</a></li>
                                
                            </ul>
                            <!-- /.child-list -->
                        </li>
                        <li class="has-sub">
                            <h3 class="title">Working</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="{{ route('working.create') }}">Add Working</a></li>
                                <li><a href="{{ route('working.index') }}">ListWorking</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                        <li class="has-sub">
                            <h3 class="title">AboutUs</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="#">AboutUs</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                    </ul>
                    <!-- /.sub-menu mega -->
                    
                </li>
                <li class="current">Logout</li>
        </ul>
        <!-- /.menu -->
    </div>
    <!-- /.container -->
</nav>