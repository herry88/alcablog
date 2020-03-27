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
                                <li><a href="icons-font-awesome-icons.html">Add Posting</a></li>
                                <li><a href="icons-fontello.html">List Posting</a></li>
                                
                            </ul>
                            <!-- /.child-list -->
                        </li>
                        <li class="has-sub">
                            <h3 class="title">Others</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="ui-modals.html">Portofolio</a></li>
                                <li><a href="ui-range-slider.html">Client</a></li>
                                <li><a href="ui-sweetalert.html">ContactList</a></li>
                                <li><a href="ui-treeview.html">Testimonial</a></li>
                                <li><a href="ui-typography.html">AboutUs</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                    </ul>
                    <!-- /.sub-menu mega -->
                </li>
                {{-- <li class="has-sub">
                    <a href="#"><i class="ico fa fa-bar-chart"></i><span>Charts</span></a>
                    <ul class="sub-menu single">
                        <li><a href="chart-3d.html">3D Charts</a></li>
                        <li><a href="chart-chartist.html">Chartist Charts</a></li>
                        <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="chart-dynamic.html">Dynamic Chart</a></li>
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-knob.html">Knob Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-other.html">Other Chart</a></li>
                    </ul>
                    <!-- /.sub-menu single -->
                </li>
                <li class="has-sub">
                    <a href="#"><i class="ico fa fa-th-large"></i><span>Forms</span></a>
                    <ul class="sub-menu single">
                        <li><a href="form-elements.html">General Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Form</a></li>
                        <li><a href="form-fileupload.html">Form Uploads</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                    </ul>
                    <!-- /.sub-menu single -->
                </li>
                <li>
                    <a href="inbox.html"><i class="ico fa fa-envelope"></i><span>Mail</span></a>
                </li>
                <li class="has-sub current">
                    <a href="#"><i class="ico fa fa-file-text"></i><span>Pages</span></a>
                    <ul class="sub-menu single">
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-recoverpw.html">Recover Password</a></li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                        <li><a href="page-404.html">Error 404</a></li>
                        <li><a href="page-500.html">Error 500</a></li>
                    </ul>
                    <!-- /.sub-menu single -->
                </li>
                <li class="has-sub">
                    <a href="#"><i class="ico fa fa-folder-open"></i><span>Extra Pages</span></a>
                    <ul class="sub-menu single">
                        <li><a href="extras-contact.html">Contact list</a></li>
                        <li><a href="extras-email-template.html">Email template</a></li>
                        <li><a href="extras-faq.html">FAQ</a></li>
                        <li><a href="extras-gallery.html">Gallery</a></li>
                        <li><a href="extras-invoice.html">Invoice</a></li>
                        <li><a href="extras-maps.html">Maps</a></li>
                        <li><a href="extras-pricing.html">Pricing</a></li>
                        <li><a href="extras-projects.html">Projects</a></li>
                        <li><a href="extras-taskboard.html">Taskboard</a></li>
                        <li><a href="extras-timeline.html">Timeline</a></li>
                        <li><a href="extras-tour.html">Tour</a></li>
                    </ul>
                    <!-- /.sub-menu single -->
                </li>
                <li class="has-sub">
                    <a href="#"><i class="ico fa fa-paper-plane"></i><span>Additions</span></a>
                    <ul class="sub-menu mega mega-2">
                        <li class="has-sub">
                            <h3 class="title">Tables</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                <li><a href="tables-editable.html">Editable Tables</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                        <li class="has-sub">
                            <h3 class="title">Others</h3>
                            <!-- .title -->
                            <ul class="child-list">
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="widgets.html">Widgets</a></li>
                            </ul>
                            <!-- /.child-list -->
                        </li>
                    </ul>
                    <!-- /.sub-menu mega -->
                </li> --}}
                <li class="current">Logout</li>
        </ul>
        <!-- /.menu -->
    </div>
    <!-- /.container -->
</nav>