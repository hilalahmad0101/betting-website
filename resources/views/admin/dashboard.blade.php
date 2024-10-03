@extends('layouts.auth')

@section('title')
    Dashboard
@endsection
@section('content')
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Dashboard</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <button class="btn btn-outline--primary btn-sm" data-bs-toggle="modal" data-bs-target="#cronModal">
                    <i class="las la-server"></i>Cron Setup </button>
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/users">
                    <div class="widget-seven bg--primary ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-users"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Total Bettors</p>
                                <h3 class="widget-seven__content-amount">3408</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/users/active">
                    <div class="widget-seven bg--success ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-user-check"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Active Bettors</p>
                                <h3 class="widget-seven__content-amount">3407</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/users/email-unverified">
                    <div class="widget-seven bg--danger ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="lar la-envelope"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Email Unverified Bettors</p>
                                <h3 class="widget-seven__content-amount">0</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/users/mobile-unverified">
                    <div class="widget-seven bg--warning ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-comment-slash"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Mobile Unverified Bettors</p>
                                <h3 class="widget-seven__content-amount">0</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-2 gy-4">
            <div class="col-xxl-6">
                <div class="card box-shadow3 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Deposits</h5>
                        <div class="widget-card-wrapper">

                            <div class="widget-card bg--success">
                                <a href="https://script.viserlab.com/betlab/admin/deposit/all" class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">$87,332.00</h6>
                                        <p class="widget-card-title">Total Deposited</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--warning">
                                <a href="https://script.viserlab.com/betlab/admin/deposit/pending"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="fas fa-spinner"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">58</h6>
                                        <p class="widget-card-title">Pending Deposits</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--danger">
                                <a href="https://script.viserlab.com/betlab/admin/deposit/rejected"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="fas fa-ban"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">0</h6>
                                        <p class="widget-card-title">Rejected Deposits</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--primary">
                                <a href="https://script.viserlab.com/betlab/admin/deposit/all" class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="fas fa-percentage"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">$835.90</h6>
                                        <p class="widget-card-title">Deposited Charge</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card box-shadow3 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Withdrawals</h5>
                        <div class="widget-card-wrapper">
                            <div class="widget-card bg--success">
                                <a href="https://script.viserlab.com/betlab/admin/withdraw/all"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="lar la-credit-card"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">$3,000.00</h6>
                                        <p class="widget-card-title">Total Withdrawn</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--warning">
                                <a href="https://script.viserlab.com/betlab/admin/withdraw/pending"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="fas fa-spinner"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">49</h6>
                                        <p class="widget-card-title">Pending Withdrawals</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--danger">
                                <a href="https://script.viserlab.com/betlab/admin/withdraw/rejected"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="las la-times-circle"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">1</h6>
                                        <p class="widget-card-title">Rejected Withdrawals</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>

                            <div class="widget-card bg--primary">
                                <a href="https://script.viserlab.com/betlab/admin/withdraw/all"
                                    class="widget-card-link"></a>
                                <div class="widget-card-left">
                                    <div class="widget-card-icon">
                                        <i class="las la-percent"></i>
                                    </div>
                                    <div class="widget-card-content">
                                        <h6 class="widget-card-amount">$21.20</h6>
                                        <p class="widget-card-title">Withdrawal Charge</p>
                                    </div>
                                </div>
                                <span class="widget-card-arrow">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/bet/pending">
                    <div class="widget-seven bg--warning  outline ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-pause-circle"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Pending Bet</p>
                                <h3 class="widget-seven__content-amount">514</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/deposit/pending">
                    <div class="widget-seven bg--amber  outline ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-wallet"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Pending Deposits</p>
                                <h3 class="widget-seven__content-amount">58</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/withdraw/pending">
                    <div class="widget-seven bg--orange  outline ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="las la-credit-card"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Pending Withdrawals</p>
                                <h3 class="widget-seven__content-amount">49</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <a href="https://script.viserlab.com/betlab/admin/ticket/pending">
                    <div class="widget-seven bg--primary  outline ">
                        <div class="widget-seven__content">
                            <span class="widget-seven__content-icon">
                                <span class="icon">
                                    <i class="la la-ticket"></i>
                                </span>
                            </span>
                            <div class="widget-seven__description">
                                <p class="widget-seven__content-title">Pending Tickets</p>
                                <h3 class="widget-seven__content-amount">49</h3>
                            </div>
                        </div>

                        <span class="widget-seven__arrow">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>


        <div class="row mb-none-30 mt-30">
            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h5 class="card-title">Deposit & Withdraw Report</h5>

                            <div id="dwDatePicker" class="border p-1 cursor-pointer rounded">
                                <i class="la la-calendar"></i>&nbsp;
                                <span></span> <i class="la la-caret-down"></i>
                            </div>
                        </div>
                        <div id="dwChartArea"> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h5 class="card-title">Transactions Report</h5>

                            <div id="trxDatePicker" class="border p-1 cursor-pointer rounded">
                                <i class="la la-calendar"></i>&nbsp;
                                <span></span> <i class="la la-caret-down"></i>
                            </div>
                        </div>
                        <div id="transactionChartArea"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-none-30 mt-5">
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title">Login By Browser (Last 30 days)</h5>
                        <canvas id="userBrowserChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login By OS (Last 30 days)</h5>
                        <canvas id="userOsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login By Country (Last 30 days)</h5>
                        <canvas id="userCountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>



        <div id="cronModal" class="modal fade cron-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="cron-modal-header">
                            <div class="modal-header-top">
                                <h5 class="modal-title" id="exampleModalLongTitle"><i
                                        class="las la-calendar text--primary"></i> Please Set Cron Job
                                </h5>
                                <p>Once per 5-10 minutes is ideal while once every minute is the best option
                                </p>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <div class="form-group">
                            <div class="justify-content-between d-flex flex-wrap mb-1">
                                <label class="fw-bold">Cron Command</label>
                                <small class="fst-italic">
                                    Last Cron Run: <strong>1 week ago</strong>
                                </small>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" id="cronPath"
                                    value="curl -s https://script.viserlab.com/betlab/cron" readonly>
                                <button type="button"
                                    class="input-group-text copy-text-btn copyCronPath text--primary"><i
                                        class="fas fa-copy"></i> <span class="copyText text--primary">Copy</span></button>
                            </div>
                        </div>
                        <div class="justify-content-between cron-btn-group d-flex gap-2">
                            <a href="https://script.viserlab.com/betlab/admin/cron/index"
                                class="btn btn-outline--primary  w-100 h-45"><i class="fas fa-cog"></i>
                                Cron Job Setting</button>
                                <a href="https://script.viserlab.com/betlab/cron?target=all"
                                    class="btn btn-outline--warning w-100 h-45"><i class="fas fa-bolt"></i> Run
                                    Manually</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
@endsection
