<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/assets/admin') }}/index3.html" class="brand-link">
        <img src="{{ asset('/assets/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/assets/admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Book
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('book.index') }}" class="nav-link">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>All Book</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('book.create') }}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Book</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Job Circular
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('job.index') }}" class="nav-link">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>Job Circular List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('job.create') }}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Job Circular</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subjects.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-book"></i>
                        Subject
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('topics.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-simple"></i>
                        Topic
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-pdf"></i>
                        <p>
                            Lecture Sheet
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sheets.index') }}" class="nav-link">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>Lecture Sheets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sheets.create') }}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Sheet</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-brands fa-gg"></i>
                        <p>
                            Current GK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('gks.index') }}" class="nav-link">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>GK List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gks.create') }}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add GK</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('exams.index') }}" class="nav-link">
                        <i class="nav-icon fa-regular fa-rectangle-list"></i>
                        Exam
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-excel"></i>
                        <p>
                            Question
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('questions.index') }}" class="nav-link">
                                <i class="fas fa-border-all nav-icon"></i>
                                <p>All Question</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('questions.create') }}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Question</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('districts.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-city"></i>
                        District
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('upzilas.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-tree-city"></i>
                        Upzila
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
