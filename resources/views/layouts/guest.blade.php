<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betlab - @yield('title')</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/iziToast_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">


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

    @yield('content')


    <script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminjs/vendor/bootstrap-toggle.min.js') }}"></script>


    <link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/iziToast_custom.css') }}" rel="stylesheet">
    <script src="{{ asset('admin/js/iziToast.min.js') }}"></script>

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

        if (notifications.length) {
            notifications.forEach(element => {
                triggerToaster(element[0], element[1]);
            });
        }

        // if (errors.length) {
        //     errors.forEach(error => {
        @if (session()->has('success'))
            triggerToaster('success', "{{ session('success') }}");
        @endif
        @if (session()->has('error'))
            triggerToaster('error', "{{ session('error') }}");
        @endif
        //     });
        // }

        function notify(status, message) {
            if (typeof message == 'string') {
                triggerToaster(status, message);
            } else {
                $.each(message, (i, val) => triggerToaster(status, val));
            }
        }
    </script>
    <script src="{{ asset('admin/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.js.2.8.0.js') }}"></script>
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('admin/js/charts.js') }}"></script>

    <script src="{{ asset('admin/js/nicEdit.js') }}"></script>

    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>


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
