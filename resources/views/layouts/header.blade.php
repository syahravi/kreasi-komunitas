<header class="header header-nav-menu header-nav-top-line">
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="{{ asset('img/logo.png') }}" width="75" height="35" alt="Kreasi Komunitas" />
        </a>
        <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
            <i class="fas fa-bars"></i>
        </button>

        {{-- *start: header nav menu --}}
        <div class="header-nav collapse">
            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
                <nav>
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="">
                            <a class="nav-link" href="layouts-default.html">
                                Feed
                            </a>    
                        </li>
                        <li class="">
                            <a class="nav-link" href="layouts-default.html">
                                Discovery
                            </a>    
                        </li>
                        <li class="">
                            <a class="nav-link" href="layouts-default.html">
                                Spaces
                            </a>    
                        </li>
                        <li class="">
                            <a class="nav-link" href="layouts-default.html">
                                Events
                            </a>    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- *end: header nav menu --}}

    </div>

    {{-- *start: search & user box --}}
    <div class="header-right">

        <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search"><i class="bx bx-search"></i></a>
        <form action="pages-search-results.html" class="search nav-form d-none d-xl-inline-block">
            <div class="input-group">
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
            </div>
        </form>

        <span class="separator"></span>

        <ul class="notifications">
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                    <i class="bx bx-list-ol"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu large">
                    <div class="notification-title">
                        <span class="float-end badge badge-default">3</span>
                        Tasks
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-start">Use case diagram</span>
                                    <span class="message float-end text-dark">100%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-start">BAB I PENDAHULUAN</span>
                                    <span class="message float-end text-dark">98%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-start">Kreasi Komunitas</span>
                                    <span class="message float-end text-dark">5%</span>
                                </p>
                                <div class="progress progress-xs light mb-1">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                    <i class="bx bx-conversation"></i>
                    <span class="badge">4</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="float-end badge badge-default">230</span>
                        Messages
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <a href="#" class="clearfix">
                                    <figure class="image">
                                        <img src="{{ asset('img/sample-user.jpg') }}" alt="" class="rounded-circle" />
                                    </figure>
                                    <span class="title">Fajri Hidayat</span>
                                    <span class="message">Iya bagus.</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-end">
                            <a href="#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ asset('img/sample-user.jpg') }}" alt="Syahravi" class="rounded-circle" data-lock-picture="{{ asset('img/sample-user.jpg') }}" />
                </figure>
                <div class="profile-info" data-lock-name="Syahravi" data-lock-email="syahravi.id@gmail.com">
                    <span class="name">Syahravi</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- *end: search & user box --}}
    
</header>