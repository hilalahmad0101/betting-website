<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betlab - @yield('title')</title>

    <link rel="shortcut icon" type="image/png"
        href="{{ asset('admin/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-toggle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/css/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/iziToast_custom.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">


    <style>
        .cron-modal .modal-body {
            padding: 32px;
        }

        @media (max-width: 575px) {
            .cron-modal .modal-body {
                padding: 30px 15px;
            }
        }

        @media (max-width: 424px) {
            .cron-btn-group {
                flex-wrap: wrap;
            }

        }

        .cron-modal-header {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(222, 226, 230, 1);
            display: flex;
            gap: 10px;
            justify-content: space-between
        }

        .modal-header-top .modal-title i {
            font-size: 20px;
            color: hsl(var(--primary));
        }

        .modal-header-top .modal-title {
            font-weight: 700;
            font-size: 1.125rem;
        }

        .form-control[readonly],
        .form-control[disabled] {
            background-color: rgba(246, 246, 246, 1);
            pointer-events: none;
            border: none;
            border-radius: 5px !important;
        }

        .copy-text-btn {
            position: absolute;
            top: 50%;
            right: 0px;
            background: transparent;
            border: none;
            font-weight: 600;
            transform: translateY(-50%);
            font-size: 14px;
            z-index: 99;
            height: 100%;
            background: #f6f6f6;
        }

        .copy-text-btn i {
            margin-right: 5px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .cron-btn-group a.h-45 {
            line-height: 2.3;
        }
    </style>
    <style>
        .apexcharts-menu {
            min-width: 120px !important;
        }
    </style>
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar__main-logo"><img
                            src="{{ asset('images/logo.jpeg') }}"
                            alt="image"></a>
                </div>
                <div class="sidebar__menu-wrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item {{ Request::routeIs('admin.dashboard') ? 'active':'' }}">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Manage Bettors</span>
                                <span class="menu-badge menu-badge-level-one bg--warning ms-auto">
                                    <i class="fas fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/active"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Active Bettors</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/banned"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Banned Bettors</span>
                                            <span class="menu-badge bg--info ms-auto">1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/email-unverified"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Email Unverified</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/mobile-unverified"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Mobile Unverified</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/kyc-unverified"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Unverified</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/kyc-pending"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Pending</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/with-balance"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">With Balance</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Bettors</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/betlab/admin/users/send-notification"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Send Notification</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                    </ul>
                </div>
                <div class="version-info text-center text-uppercase">
                    <span class="text--primary">betlab</span>
                    <span class="text--success">V3.0 </span>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
                <form class="navbar-search">
                    <input type="search" name="#0" class="navbar-search-field" id="searchInput"
                        autocomplete="off" placeholder="Search here...">
                    <i class="las la-search"></i>
                    <ul class="search-list"></ul>
                </form>
            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">
                    <li>
                        <button type="button" class="primary--layer" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Visit Website">
                            <a href="https://script.viserlab.com/betlab" target="_blank"><i
                                    class="las la-globe"></i></a>
                        </button>
                    </li>
                    <li class="dropdown">
                        <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown"
                            data-display="static" aria-haspopup="true" aria-expanded="false">
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                                <i class="las la-bell  icon-left-right "></i>
                            </span>
                            <span class="notification-count">4</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                            <div class="dropdown-menu__header">
                                <span class="caption">Notification</span>
                                <p>You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-menu__body ">
                                <a href="https://script.viserlab.com/betlab/admin/notification/read/791"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">New member registered</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                1 hour ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://script.viserlab.com/betlab/admin/notification/read/787"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">SMS Error: Bad Credentials</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                18 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://script.viserlab.com/betlab/admin/notification/read/786"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Deposit request from bokshigonj</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                18 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://script.viserlab.com/betlab/admin/notification/read/784"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">SMS Error: Bad Credentials</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                19 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu__footer">
                                <a href="https://script.viserlab.com/betlab/admin/notifications"
                                    class="view-all-message">View all notifications</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="primary--layer" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="System Setting">
                            <a href="https://script.viserlab.com/betlab/admin/system-setting"><i
                                    class="las la-wrench"></i></a>
                        </button>
                    </li>
                    <li class="dropdown d-flex profile-dropdown">
                        <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="https://script.viserlab.com/betlab/assets/admin/images/profile/664b643e4aaa81716216894.png"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/betlab/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>

                            <a href="https://script.viserlab.com/betlab/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>

                            <a href="https://script.viserlab.com/betlab/admin/logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                        <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                            <i class="las la-sliders-h"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- navbar-wrapper end -->


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
               @yield('content')
            </div><!-- body-wrapper end -->
        </div>
    </div>




    <script src="{{ asset('admin/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('adminjs/vendor/bootstrap-toggle.min.js')}}"></script>


    <link href="{{ asset('admin/css/iziToast.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/iziToast_custom.css')}}" rel="stylesheet">
    <script src="{{ asset('admin/js/iziToast.min.js')}}"></script>

    <script>
        "use strict";
        const colors = {
            success: '#28c76f',
            error: '#eb2222',
            warning: '#ff9f43',
            info: '#1e9ff2',
        }

        const icons = {
            success: 'fas fa-check-circle',
            error: 'fas fa-times-circle',
            warning: 'fas fa-exclamation-triangle',
            info: 'fas fa-exclamation-circle',
        }

        const notifications = [];
        const errors = [];


        const triggerToaster = (status, message) => {
            iziToast[status]({
                title: status.charAt(0).toUpperCase() + status.slice(1),
                message: message,
                position: "topRight",
                backgroundColor: '#fff',
                icon: icons[status],
                iconColor: colors[status],
                progressBarColor: colors[status],
                titleSize: '1rem',
                messageSize: '1rem',
                titleColor: '#474747',
                messageColor: '#a2a2a2',
                transitionIn: 'obunceInLeft'
            });
        }

        @if (session()->has('success'))
            triggerToaster('success', "{{ session('success') }}");
        @endif
        @if (session()->has('error'))
            triggerToaster('error', "{{ session('error') }}");
        @endif
        function notify(status, message) {
            if (typeof message == 'string') {
                triggerToaster(status, message);
            } else {
                $.each(message, (i, val) => triggerToaster(status, val));
            }
        }
    </script>
    <script src="{{ asset('admin/js/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin/js/chart.js.2.8.0.js')}}"></script>
    <script src="{{ asset('admin/js/moment.min.js')}}"></script>
    <script src="{{ asset('admin/js/daterangepicker.min.js')}}"></script>
    <script src="{{ asset('admin/js/charts.js')}}"></script>

    <script src="{{ asset('admin/js/nicEdit.js')}}"></script>

    <script src="{{ asset('admin/js/select2.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.js')}}"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });
        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function() {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function() {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.makeSlug').on('input', function(e) {
                let name = this.value;
                let slug = name.replace(/\s+/g, '-').toLowerCase();
                $('[name=slug]').val(slug);
            });

            $('.checkSlug').on('keyup', function(e) {
                var keyCode = e.keyCode || e.which;
                var regex = /^[A-Za-z0-9]+$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (e.keyCode == 32) {
                    $(this).val($(this).val().replace(/\s+/g, '-'));
                }
            });
        })(jQuery);
    </script>

    <script>
        (function($) {
            "use strict";

            $(document).on('click', '.copyCronPath', function() {
                var copyText = document.getElementById('cronPath');

                copyText.select();
                copyText.setSelectionRange(0, 99999);

                document.execCommand('copy');
                $(this).find('.copyText').text('Copied');
                setTimeout(() => {
                    $(this).find('.copyText').text('Copy');
                }, 2000);
            });

        })(jQuery)
    </script>
    <script>
        "use strict";

        const start = moment().subtract(14, 'days');
        const end = moment();

        const dateRangeOptions = {
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 15 Days': [moment().subtract(14, 'days'), moment()],
                'Last 30 Days': [moment().subtract(30, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')],
                'Last 6 Months': [moment().subtract(6, 'months').startOf('month'), moment().endOf('month')],
                'This Year': [moment().startOf('year'), moment().endOf('year')],
            },
            maxDate: moment()
        }

        const changeDatePickerText = (element, startDate, endDate) => {
            $(element).html(startDate.format('MMMM D, YYYY') + ' - ' + endDate.format('MMMM D, YYYY'));
        }

     </script>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

</body>

</html>
