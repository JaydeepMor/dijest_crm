<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CRM.">
        <meta name="author" content="Jaydeep Mor">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}">
        <!-- <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180"> -->

        <title>{{ env('APP_NAME', 'CRM') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet" defer>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/vendors/modernizr.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/vendors/jquery.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/vendors/bootstrap.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/vendors/plugins.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/vendors/app.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/vendors/charts/compCharts.js') }}" defer></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/themes.css') }}" type="text/css">
    </head>
    <body>
        <div id="app">
            @auth
                <div id="page-wrapper">
                    <div class="preloader themed-background">
                        <h1 class="push-top-bottom text-light text-center"><strong>{{ env('APP_NAME', 'CRM') }}</strong></h1>
                        <div class="inner">
                            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>{{ __('Loading..') }}</strong></h3>
                            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                        </div>
                    </div>
                </div>
            @endauth

            @auth
                <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations enable-cookies">
                    <!-- Alternative Sidebar -->
                    <div id="sidebar-alt">
                        <!-- Wrapper for scrolling functionality -->
                        <div id="sidebar-alt-scroll">
                            <!-- Sidebar Content -->
                            <div class="sidebar-content">
                                <!-- Sidebar Section -->
                                <a href="{{ route('index') }}" class="sidebar-title">
                                    <i class="gi gi-cogwheel pull-right"></i> <strong>{{ __('Sidebar') }}</strong>
                                </a>
                                <div class="sidebar-section">Section content..</div>
                                <!-- END Sidebar Section -->
                            </div>
                            <!-- END Sidebar Content -->
                        </div>
                        <!-- END Wrapper for scrolling functionality -->
                    </div>
                    <!-- END Alternative Sidebar -->

                    <!-- Main Sidebar -->
                    <div id="sidebar">
                        <!-- Wrapper for scrolling functionality -->
                        <div id="sidebar-scroll">
                            <!-- Sidebar Content -->
                            <div class="sidebar-content">
                                <!-- Brand -->
                                <a href="{{ route('index') }}" class="sidebar-brand">
                                    <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>{{ env('APP_NAME', 'CRM') }}</strong></span>
                                </a>
                                <!-- END Brand -->

                                <!-- User Info -->
                                <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                    <div class="sidebar-user-avatar">
                                        <a href="{{ route('index') }}">
                                            <img src="{{ asset('images/avatars/avatar.png') }}" alt="avatar">
                                        </a>
                                    </div>
                                    <div class="sidebar-user-name">John Doe</div>
                                    <div class="sidebar-user-links">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                    </div>
                                </div>
                                <!-- END User Info -->

                                <!-- Theme Colors -->
                                <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                                    <!-- You can also add the default color theme
                                    <li class="active">
                                        <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                                    </li>
                                    -->
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="{{ asset('css/themes/night.css') }}" data-toggle="tooltip" title="{{ __('Night') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="{{ asset('css/themes/amethyst.css') }}" data-toggle="tooltip" title="{{ __('Amethyst') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="{{ asset('css/themes/modern.css') }}" data-toggle="tooltip" title="{{ __('Modern') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="{{ asset('css/themes/autumn.css') }}" data-toggle="tooltip" title="{{ __('Autumn') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="{{ asset('css/themes/flatie.css') }}" data-toggle="tooltip" title="{{ __('Flatie') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="{{ asset('css/themes/spring.css') }}" data-toggle="tooltip" title="{{ __('Spring') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="{{ asset('css/themes/fancy.css') }}" data-toggle="tooltip" title="{{ __('Fancy') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="{{ asset('css/themes/fire.css') }}" data-toggle="tooltip" title="{{ __('Fire') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="{{ asset('css/themes/coral.css') }}" data-toggle="tooltip" title="{{ __('Coral') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="{{ asset('css/themes/lake.css') }}" data-toggle="tooltip" title="{{ __('Lake') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="{{ asset('css/themes/forest.css') }}" data-toggle="tooltip" title="{{ __('Forest') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="{{ asset('css/themes/waterlily.css') }}" data-toggle="tooltip" title="{{ __('Waterlily') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="{{ asset('css/themes/emerald.css') }}" data-toggle="tooltip" title="{{ __('Emerald') }}"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="{{ asset('css/themes/blackberry.css') }}" data-toggle="tooltip" title="{{ __('Blackberry') }}"></a>
                                    </li>
                                </ul>
                                <!-- END Theme Colors -->

                                <!-- Sidebar Navigation -->
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="{{ route('index') }}" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cogwheel sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">{{ __('Dropdown') }}</span></a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Link #1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Link #2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- END Sidebar Navigation -->
                            </div>
                            <!-- END Sidebar Content -->
                        </div>
                        <!-- END Wrapper for scrolling functionality -->
                    </div>
                    <!-- END Main Sidebar -->

                    <!-- Main Container -->
                    <div id="main-container">
                        <!-- Header -->
                        <header class="navbar navbar-default">
                            <!-- Left Header Navigation -->
                            <ul class="nav navbar-nav-custom">
                                <!-- Main Sidebar Toggle Button -->
                                <li>
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                        <i class="fa fa-bars fa-fw"></i>
                                    </a>
                                </li>
                                <!-- END Main Sidebar Toggle Button -->

                                <!-- Template Options -->
                                <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="gi gi-settings"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-custom dropdown-options">
                                        <li class="dropdown-header text-center">Header Style</li>
                                        <li>
                                            <div class="btn-group btn-group-justified btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                                <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                            </div>
                                        </li>
                                        <li class="dropdown-header text-center">Page Style</li>
                                        <li>
                                            <div class="btn-group btn-group-justified btn-group-sm">
                                                <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                                <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END Template Options -->
                            </ul>
                            <!-- END Left Header Navigation -->

                            <!-- Search Form -->
                            <form action="{{ route('index') }}" method="post" class="navbar-form-custom">
                                <div class="form-group">
                                    <input type="text" id="top-search" name="top-search" class="form-control" placeholder="{{ __('Search...') }}">
                                </div>
                            </form>
                            <!-- END Search Form -->

                            <!-- Right Header Navigation -->
                            <ul class="nav navbar-nav-custom pull-right">
                                <!-- Alternative Sidebar Toggle Button -->
                                <li>
                                    <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                        <i class="gi gi-share_alt"></i>
                                        <span class="label label-primary label-indicator animation-floating">4</span>
                                    </a>
                                </li>
                                <!-- END Alternative Sidebar Toggle Button -->

                                <!-- User Dropdown -->
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('images/avatars/avatar.png') }}" alt="avatar"> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                        <li class="dropdown-header text-center">Header</li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-clock-o fa-fw pull-right"></i>
                                                <span class="badge pull-right">10</span>
                                                Link #1
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                                <span class="badge pull-right">5</span>
                                                Link #2
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-magnet fa-fw pull-right"></i>
                                                <span class="badge pull-right">3</span>
                                                Link #3
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-question fa-fw pull-right"></i>
                                                <span class="badge pull-right">11</span>
                                                Link #4
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-user fa-fw pull-right"></i>
                                                Link #1
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-cog fa-fw pull-right"></i>
                                                Link #2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END User Dropdown -->
                            </ul>
                            <!-- END Right Header Navigation -->
                        </header>
                        <!-- END Header -->

                        <!-- Page content -->
                        <div id="page-content">
                            <!-- Page Header -->
                            <div class="content-header">
                                <div class="header-section">
                                    <h1>
                                        <i class="gi gi-brush hidden"></i>{{ __('Dashboard') }}<br><small>{{ __('Analytics') }}</small>
                                    </h1>
                                </div>
                            </div>

                            @include('partials.breadcrumbs')

                            <!-- END Page Header -->

                            @yield('content')
                        </div>
                        <!-- END Page Content -->

                        <!-- Footer -->
                        <footer class="clearfix">
                            <!-- <div class="pull-right">
                                Crafted with <i class="fa fa-heart text-danger"></i> by <a href="" target="_blank"></a>
                            </div> -->
                            <div class="pull-right">
                                <span id="year-copy"></span> &copy; <a href="https://dijestdesigns.com/" target="_blank">{{ __('Dijest Designs') }}</a>
                            </div>
                        </footer>
                        <!-- END Footer -->
                    </div>
                    <!-- END Main Container -->
                </div>
            @else
                <!-- Login Background -->
                <div id="login-background">
                    <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
                    <img src="{{ asset('images/login/login_header.jpg') }}" alt="Login Background" class="animation-pulseSlow">
                </div>
                <!-- END Login Background -->

                <div id="login-container" class="animation-fadeIn">
                    @yield('content')
                </div>
            @endauth
        </div>
    </body>

    <script type="text/javascript">
        setTimeout(function() {
            $(function(){
                CompCharts.init();
            });
        }, 2000);
    </script>
</html>
