@extends('layout.master')

<link rel="stylesheet" href="{{ url('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="card-title pt-2 pb-3">Welcome to Dashboard <strong> {{ auth()->user()->name }} !</strong></h4>
        <div class="row gy-4">
            <!-- Ratings -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body">
                                <div class="card-info mb-3 pb-2">
                                    <h5 class="mb-3 text-nowrap">Policies</h5>
                                    <div class="badge bg-label-primary rounded-pill lh-xs">Total Policies</div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <h3 class="mb-0 mt-1 me-2">{{ $state_count }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end">
                            <div class="card-body p-0 h-full">
                                <img src="{{ url('/total_appointments.png') }}" alt="Ratings" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Ratings -->

            <!-- Sessions -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body">
                                <div class="card-info mb-3 pb-2">
                                    <h5 class="mb-3 text-nowrap">Projects</h5>
                                    <div class="badge bg-label-success rounded-pill lh-xs">Total Projects</div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <h3 class="mb-0 mt-1 me-2">{{ $state_count }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end">
                            <div class="card-body p-0 h-full">
                                <img src="{{ url('/total_patients.png') }}" alt="Ratings" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sessions -->

            <!-- Customers -->
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body">
                                <div class="card-info mb-3 pb-2">
                                    <h5 class="mb-3 text-nowrap">Patients Visited</h5>
                                    <div class="badge bg-label-warning rounded-pill lh-xs">Today</div>
                                </div>
                                <div class="d-flex align-items-end d-flex align-items-end">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end">
                            <div class="card-body p-0 h-full">
                                <img src="{{ url('/patient_visited.png') }}" alt="Ratings" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--/ Customers -->

            <!-- Total Orders -->
            {{-- <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body">
                                <div class="card-info mb-3 pb-2">
                                    <h5 class="mb-3 text-nowrap">Financial Summary</h5>
                                    <div class="badge bg-label-secondary rounded-pill lh-xs">Today</div>
                                </div>
                                <div class="d-flex align-items-end">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end">
                            <div class="card-body p-0 h-full">
                                <img src="{{ url('/total_financials.png') }}" alt="Ratings" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-2">Sales Overview</h4>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="salesOverview" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverview">
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="me-2">Total 42.5k Sales</small>
                            <div class="d-flex align-items-center text-success">
                                <p class="mb-0">+18%</p>
                                <i class="mdi mdi-chevron-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between flex-wrap gap-3">
                        <div class="d-flex gap-3">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-primary rounded">
                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                </div>
                            </div>
                            <div class="card-info">
                                <h4 class="mb-0">8,458</h4>
                                <small class="text-muted">Customers</small>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-warning rounded">
                                    <i class="mdi mdi-poll mdi-24px"></i>
                                </div>
                            </div>
                            <div class="card-info">
                                <h4 class="mb-0">$28.5k</h4>
                                <small class="text-muted">Profit</small>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-info rounded">
                                    <i class="mdi mdi-trending-up mdi-24px"></i>
                                </div>
                            </div>
                            <div class="card-info">
                                <h4 class="mb-0">2,450k</h4>
                                <small class="text-muted">Transactions</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  --}}
            {{-- <div class="col-xxl-4 col-sm-6 box-col-6">
                <div class="card profile-box">
                  <div class="card-body">
                    <div class="media media-wrapper justify-content-between">
                      <div class="media-body">
                        <div class="greeting-user">
                          <h4 class="f-w-600">Welcome to GPM</h4>
                          <p>Here whats happing in your account today</p>
                          <div class="whatsnew-btn"><a class="btn btn-outline-white">Whats New !</a></div>
                        </div>
                      </div>
                      <div>
                        <div class="clockbox">
                          <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                            <g id="face">
                              <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                              <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
                              <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                            </g>
                            <g id="hour">
                              <path class="hour-hand" d="M300.5 298V142"></path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                            </g>
                            <g id="minute">
                              <path class="minute-hand" d="M300.5 298V67">   </path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                            </g>
                            <g id="second">
                              <path class="second-hand" d="M300.5 350V55"></path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9">   </circle>
                            </g>
                          </svg>
                        </div>
                        <div class="badge f-10 p-0" id="txt"></div>
                      </div>
                    </div>
                    <div class="cartoon"><img class="img-fluid" src="{{ url('/assets/images/dashboard/cartoon.svg')}}" alt="vector women with leptop"></div>
                  </div>
                </div>
              </div> --}}
            {{--  --}}
            {{-- <div class="col-lg-8 col-sm-12 app-calendar-content">
                <div class="card app-calendar-wrapper">
                    <div class="row g-0">
                        <!-- Calendar Sidebar -->
                        <div class="col app-calendar-sidebar w-full pt-1" id="app-calendar-sidebar">
                            <div class="p-4">

                                <!-- Filter -->
                                <div class="mb-4">
                                    <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                                </div>

                                <div class="form-check  form-check-primary mb-3">
                                    <input class="form-check-input select-all" type="checkbox" id="selectAll"
                                        data-value="all" checked />
                                    <label class="form-check-label" for="selectAll">View All</label>
                                </div>


                            </div>
                        </div>
                        <!-- /Calendar Sidebar -->

                        <!-- Calendar & Modal -->
                        <div class="col app-calendar-content">
                            <div class="card shadow-none border-0 border-start">
                                <div class="card-body pb-0">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <div class="app-overlay"></div>
                            <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar"
                                aria-labelledby="addEventSidebarLabel">
                                <div class="offcanvas-header pb-0">
                                    <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Appointment</h5>
                                    <div class="">
                                        <button class="btn btn-primary btn-detail me-sm-2 me-1">Detail</button>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="offcanvas-body">
                                    <form class="event-form pt-0" id="eventForm" onsubmit="return false">
                                        <div class="row">
                                            <input type="hidden" class="form-control" id="appointment_id"
                                                name="appointment_id" />
                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span id="dateTime" class="input-group-text"><i
                                                            class="mdi mdi-calendar"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="text" class="form-control" id="appointment_date"
                                                            name="appointment_date" required
                                                            placeholder="Appointment Date" />
                                                        <label for="appointment_date">Appointment Date & Time</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span id="day" class="input-group-text"><i
                                                            class="mdi mdi-calendar"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="text" class="form-control" id="appointment_day"
                                                            name="appointment_day" required
                                                            placeholder="Appointment Day" />
                                                        <input type="hidden" class="form-control" id="day_id"
                                                            name="day_id" />
                                                        <label for="appointment_day">Appointment Day</label>
                                                    </div>
                                                </div>
                                            </div>
                                           ol-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                            class="mdi mdi-whatsapp"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input required name="whatsapp_no" type="text"
                                                            id="whatsapp_no"
                                                            class="form-control phone-mask whtp-number-validate"
                                                            placeholder="Enter Whatsapp No."
                                                            aria-label="Enter Whatsapp No."
                                                            aria-describedby="basic-icon-default-`2" />
                                                        <label for="whatsapp_no">Whatsapp No</label>
                                                    </div>
                                                </div>
                                                <span class="text-danger validation-whtp-number" style="display: none;">
                                                    <i class="mdi mdi-alert"></i>Number is invalid
                                                </span>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-cash-multiple"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="number" class="form-control" id="charges"
                                                            name="charges" required placeholder="Enter Charges" />
                                                        <label for="charges">Charges</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-percent-outline"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="number" class="form-control" id="discount"
                                                            name="discount" placeholder="Enter Discount %" />
                                                        <label for="discount">Discount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-percent-outline"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="number" class="form-control" id="tax"
                                                            name="tax" placeholder="Enter Tax %" />
                                                        <label for="tax">Tax</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group input-group-merge my-2">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-percent-outline"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="number" class="form-control" id="share"
                                                            name="share" placeholder="Enter Share %" />
                                                        <label for="share">Share (Optional)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group input-group-merge my-2">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-cash-multiple"></i></span>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount" required placeholder="Enter Amount" />
                                                        <label for="amount">Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating form-floating-outline my-2">
                                                    <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
                                                    <label for="comment">Comment</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mb-3 d-flex justify-content-sm-between justify-content-start my-4 gap-2">
                                            <div class="d-flex">
                                                <button type="submit"
                                                    class="btn btn-primary btn-add-event me-sm-2 me-1">Add</button>
                                                <button type="reset"
                                                    class="btn btn-label-secondary btn-cancel me-sm-0 me-1"
                                                    data-bs-dismiss="offcanvas">
                                                    Cancel
                                                </button>
                                            </div>
                                            <button class="btn btn-label-danger btn-delete-event d-none">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Calendar & Modal -->
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Weekly Finance</h5>
                        </div>
                        <p class="mb-0 text-muted">Total PKR 10,000</p>
                    </div>
                    <div class="card-body">
                        <div id="weeklyOverviewChart"></div>
                        <div class="mt-1">
                            <div class="d-grid mt-3">
                                <button class="btn btn-primary" type="button">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Recent Transactions</h5>
                    </div>
                    <div class="card-body mt-2">

                    </div>
                </div>
            </div> --}}

            <!-- Content -->


            <!-- Sales Overview-->
            {{-- <div class="col-lg-6">
                    <div class="card h-100">
                      <div class="card-header">
                        <div class="d-flex justify-content-between">
                          <h4 class="mb-2">Sales Overview</h4>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="salesOverview"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverview">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <small class="me-2">Total 42.5k Sales</small>
                          <div class="d-flex align-items-center text-success">
                            <p class="mb-0">+18%</p>
                            <i class="mdi mdi-chevron-up"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body d-flex justify-content-between flex-wrap gap-3">
                        <div class="d-flex gap-3">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="mdi mdi-account-outline mdi-24px"></i>
                            </div>
                          </div>
                          <div class="card-info">
                            <h4 class="mb-0">8,458</h4>
                            <small class="text-muted">Customers</small>
                          </div>
                        </div>
                        <div class="d-flex gap-3">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-warning rounded">
                              <i class="mdi mdi-poll mdi-24px"></i>
                            </div>
                          </div>
                          <div class="card-info">
                            <h4 class="mb-0">$28.5k</h4>
                            <small class="text-muted">Profit</small>
                          </div>
                        </div>
                        <div class="d-flex gap-3">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-info rounded">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="card-info">
                            <h4 class="mb-0">2,450k</h4>
                            <small class="text-muted">Transactions</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
            <!--/ Sales Overview-->

            <!-- Ratings -->
            {{-- <div class="col-lg-3 col-sm-6">
                    <div class="card h-100">
                      <div class="row">
                        <div class="col-6">
                          <div class="card-body">
                            <div class="card-info mb-3 py-2 mb-lg-1 mb-xl-3">
                              <h5 class="mb-3 mb-lg-2 mb-xl-3 text-nowrap">Ratings</h5>
                              <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div>
                            </div>
                            <div class="d-flex align-items-end flex-wrap gap-1">
                              <h4 class="mb-0 me-2">8.14k</h4>
                              <small class="text-success">+15.6%</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end justify-content-center">
                          <div class="card-body pb-0 pt-3 position-absolute bottom-0">
                            <img
                              src="../../assets/img/illustrations/misc-server-error-illustration.png"
                              alt="Ratings"
                              width="95" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
            <!--/ Ratings -->

            <!-- Sessions -->
            {{-- <div class="col-lg-3 col-sm-6">
                    <div class="card h-100">
                      <div class="row">
                        <div class="col-6">
                          <div class="card-body">
                            <div class="card-info mb-3 py-2 mb-lg-1 mb-xl-3">
                              <h5 class="mb-3 mb-lg-2 mb-xl-3 text-nowrap">Sessions</h5>
                              <div class="badge bg-label-success rounded-pill lh-xs">Last Month</div>
                            </div>
                            <div class="d-flex align-items-end flex-wrap gap-1">
                              <h4 class="mb-0 me-2">12.2k</h4>
                              <small class="text-danger">-25.5%</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 text-end d-flex align-items-end justify-content-center">
                          <div class="card-body pb-0 pt-3 position-absolute bottom-0">
                            <img
                              src="../../assets/img/illustrations/card-session-illustration.png"
                              alt="Ratings"
                              width="81" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
            <!--/ Sessions -->

            <div class="col-lg-4 col-sm-12">
                {{-- <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Weekly Finance</h5>
                        </div>
                        <p class="mb-0 text-muted">Total PKR 10,000</p>
                    </div>
                    <div class="card-body">
                        <div id="weeklyOverviewChart"></div>
                        <div class="mt-1">
                            <div class="d-grid mt-3">
                                <button class="btn btn-primary" type="button">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Recent Transactions</h5>
                    </div>
                    <div class="card-body mt-2">

                    </div>
                </div> --}}
            </div>
            <!-- / Content -->
            {{-- <!-- Total Transactions & Report Chart -->
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="row">
                        <div class="col-md-7 col-12 order-2 order-md-0">
                            <div class="card-header">
                                <h5 class="mb-0">Total Transactions</h5>
                            </div>
                            <div class="card-body">
                                <div id="totalTransactionChart"></div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 border-start">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">Report</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="totalTransaction"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalTransaction">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0">Last month transactions $234.40k</p>
                            </div>
                            <div class="card-body pt-3">
                                <div class="row">
                                    <div class="col-6 border-end">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-success rounded">
                                                    <div class="mdi mdi-trending-up mdi-24px"></div>
                                                </div>
                                            </div>
                                            <p class="text-muted my-2">This Week</p>
                                            <h6 class="mb-0 fw-semibold">+82.45%</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <div class="mdi mdi-trending-down mdi-24px"></div>
                                                </div>
                                            </div>
                                            <p class="text-muted my-2">This Week</p>
                                            <h6 class="mb-0 fw-semibold">-24.86%</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <p class="text-muted mb-1">Performance</p>
                                        <h6 class="mb-0 fw-semibold">+94.15%</h6>
                                    </div>
                                    <button class="btn btn-primary" type="button">view report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Transactions & Report Chart -->

            <!-- Performance Chart -->
            <div class="col-12 col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Performance</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="performanceDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="performanceChart"></div>
                    </div>
                </div>
            </div>
            <!--/ Performance Chart -->

            <!-- Project Statistics -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Project Statistics</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="projectStatus" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-3 justify-content-between pb-2">
                                <h6 class="mb-0 small">NAME</h6>
                                <h6 class="mb-0 small">BUDGET</h6>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="../../assets/img/icons/misc/3d-illustration.png" alt="User"
                                                class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">3D Illustration</h6>
                                        <small class="text-muted">Blender Illustration</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$6,500</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="../../assets/img/icons/misc/finance-app-design.png" alt="User"
                                                class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Finance App Design</h6>
                                        <small class="text-muted">Figma UI Kit</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$4,290</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="../../assets/img/icons/misc/4-square.png" alt="User"
                                                class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">4 Square</h6>
                                        <small class="text-muted">Android Application</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$44,500</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="../../assets/img/icons/misc/delta-web-app.png" alt="User"
                                                class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Delta Web App</h6>
                                        <small class="text-muted">React Dashboard</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$12,690</div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="../../assets/img/icons/misc/ecommerce-website.png" alt="User"
                                                class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">eCommerce Website</h6>
                                        <small class="text-muted">Vue + Laravel</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$10,850</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Project Statistics -->

            <!-- Multiple widgets -->
            <div class="col-md-6 col-xl-4">
                <div class="row g-4">
                    <!-- Total Revenue chart -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                    <h4 class="mb-0 me-2">$42.5k</h4>
                                    <p class="mb-0 text-danger">-22%</p>
                                </div>
                                <span class="d-block mb-2 text-muted">Total Revenue</span>
                            </div>
                            <div class="card-body">
                                <div id="totalRevenue"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Revenue chart -->

                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-success rounded">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+38%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-3">
                                    <h5 class="mb-2">$13.4k</h5>
                                    <p class="text-muted">Total Sales</p>
                                    <div class="badge bg-label-secondary rounded-pill mt-1">Last Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-info rounded">
                                            <i class="mdi mdi-link mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+62%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-4">
                                    <h5 class="mb-2">142.8k</h5>
                                    <p class="text-muted">Total Impression</p>
                                    <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- overview Radial chart -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                    <h4 class="mb-0 me-2">$67.1k</h4>
                                    <p class="mb-0 text-success">+49%</p>
                                </div>
                                <span class="d-block mb-2 text-muted">Overview</span>
                            </div>
                            <div class="card-body">
                                <div id="overviewChart" class="d-flex align-items-center"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ overview Radial chart -->
                </div>
            </div>
            <!--/ Multiple widgets -->

            <!-- Sales Country Chart -->
            <div class="col-12 col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Sales Country</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="salesCountryDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0 text-muted">Total $42,580 Sales</p>
                    </div>
                    <div class="card-body pb-1 px-0">
                        <div id="salesCountryChart"></div>
                    </div>
                </div>
            </div>
            <!--/ Sales Country Chart -->

            <!-- Top Referral Source  -->
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title m-0">
                            <h5 class="mb-0">Top Referral Sources</h5>
                            <small class="text-muted">82% Activity Growth</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-3">
                        <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                            <li class="nav-item">
                                <div class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id"
                                    aria-controls="navs-orders-id" aria-selected="true">
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-google-plus">
                                        <i class="mdi mdi-google mdi-20px"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id"
                                    aria-controls="navs-sales-id" aria-selected="false">
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-facebook">
                                        <i class="mdi mdi-facebook mdi-20px"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id"
                                    aria-controls="navs-profit-id" aria-selected="false">
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-instagram">
                                        <i class="mdi mdi-instagram mdi-20px"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id"
                                    aria-controls="navs-income-id" aria-selected="false">
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-twitter">
                                        <i class="mdi mdi-twitter mdi-20px"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                    role="tab" data-bs-toggle="tab" aria-selected="false">
                                    <button type="button" class="btn btn-icon rounded bg-label-secondary">
                                        <i class="mdi mdi-plus mdi-20px"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <div class="tab-content p-0 ms-0 ms-sm-2">
                            <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                <th class="pe-0 text-end text-heading">total revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Email Marketing Campaign</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="pe-0 text-success">+24%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$42,857</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Google Workspace</td>
                                                <td class="pe-0">
                                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                </td>
                                                <td class="text-danger pe-0">-12%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$850</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Affiliation Program</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="text-success pe-0">+24%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$5,576</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Google Adsense</td>
                                                <td class="pe-0"><span class="badge rounded-pill bg-label-info">In
                                                        Draft</span></td>
                                                <td class="text-success pe-0">0%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="fw-medium ps-0 text-heading">parameter</th>
                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                <th class="pe-0 text-end text-heading">total revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Create Audiences in Ads Manager
                                                </td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="pe-0 text-danger">-8%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$322</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Facebook page advertising</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="text-success pe-0">+19%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$5,634</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Messenger advertising</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-danger">Expired</span></td>
                                                <td class="text-danger pe-0">-23%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$751</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Video campaign</td>
                                                <td class="pe-0">
                                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                </td>
                                                <td class="text-success pe-0">+21%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$3,585</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="fw-medium ps-0 text-heading">parameter</th>
                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                <th class="pe-0 text-end text-heading">total revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Create shopping advertising</td>
                                                <td class="pe-0"><span class="badge rounded-pill bg-label-info">In
                                                        Draft</span></td>
                                                <td class="pe-0 text-danger">-15%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$599</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">IGTV advertising</td>
                                                <td class="pe-0">
                                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                </td>
                                                <td class="text-success pe-0">+37%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$1,467</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Collection advertising</td>
                                                <td class="pe-0"><span class="badge rounded-pill bg-label-info">In
                                                        Draft</span></td>
                                                <td class="text-danger pe-0">0%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Stories advertising</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="text-success pe-0">+29%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$4,546</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                <th class="pe-0 text-end text-heading">total revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Interests advertising</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-danger">Expired</span></td>
                                                <td class="pe-0 text-success">+2%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$404</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Community advertising</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="text-success pe-0">+25%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$399</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Device advertising</td>
                                                <td class="pe-0">
                                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                </td>
                                                <td class="text-success pe-0">+21%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$177</td>
                                            </tr>
                                            <tr>
                                                <td class="text-heading fw-semibold ps-0">Campaigning</td>
                                                <td class="pe-0"><span
                                                        class="badge rounded-pill bg-label-primary">Active</span></td>
                                                <td class="text-danger pe-0">-5%</td>
                                                <td class="pe-0 text-end fw-semibold h6">$1,139</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Top Referral Source  -->

            <!-- Weekly Sales Chart-->
            <div class="col-12 col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Weekly Sales</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="weeklySalesDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-0">Total 85.4k Sales</p>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-6 d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3 d-flex flex-column">
                                    <small class="text-muted mb-1">Net Income</small>
                                    <h6 class="mb-0 fw-semibold">$438.5K</h6>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-warning rounded">
                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3 d-flex flex-column">
                                    <small class="text-muted mb-1">Expense</small>
                                    <h6 class="mb-0 fw-semibold">$22.4K</h6>
                                </div>
                            </div>
                        </div>
                        <div id="weeklySalesChart"></div>
                    </div>
                </div>
            </div>
            <!--/ Weekly Sales Chart-->

            <!-- visits By Day Chart-->
            <div class="col-12 col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Visits by Day</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="visitsByDayDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsByDayDropdown">
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0 text-muted">Total 248.5k Visits</p>
                    </div>
                    <div class="card-body">
                        <div id="visitsByDayChart"></div>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <h6 class="mb-1 fw-semibold">Most Visited Day</h6>
                                <p class="mb-0 text-muted">Total 62.4k Visits on Thursday</p>
                            </div>
                            <div class="avatar">
                                <div class="avatar-initial bg-label-warning rounded">
                                    <i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ visits By Day Chart-->

            <!-- Activity Timeline -->
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Activity Timeline</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="timelineDropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineDropdown">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 pb-1">
                        <ul class="timeline card-timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Create youtube video for next product 😎</h6>
                                        <small class="text-muted">Tomorrow</small>
                                    </div>
                                    <p class="text-muted mb-2">Product introduction and details video</p>
                                    <div class="d-flex">
                                        <a href="https://www.youtube.com/@pixinvent1515" target="_blank"
                                            class="text-truncate">
                                            <span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                                                <i class="mdi mdi-play text-white"></i>
                                            </span>
                                            <span
                                                class="fw-semibold text-muted">https://www.youtube.com/@pixinvent1515</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Received payment from usa client 😍</h6>
                                        <small class="text-muted">January, 18</small>
                                    </div>
                                    <p class="text-muted mb-2">Received payment $1,490 for banking ios app</p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Meeting with joseph morgan for next project</h6>
                                        <small class="text-muted">April, 23</small>
                                    </div>
                                    <p class="text-muted mb-2">Meeting Video call on zoom at 9pm</p>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" class="me-3">
                                            <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="20"
                                                class="me-2" />
                                            <span class="fw-semibold text-muted">presentation.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Activity Timeline --> --}}
        </div>
    </div>
    <!--/ Content -->
@endsection

<script src="{{ url('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let borderColor = '#25bdad';
        // Weekly Overview Line Chart
        // --------------------------------------------------------------------
        const weeklyOverviewChartEl = document.querySelector('#weeklyOverviewChart');
        const weeklyOverviewChartConfig = {
            chart: {
                type: 'line',
                height: 178,
                offsetY: -9,
                offsetX: -16,
                parentHeightOffset: 0,
                toolbar: {
                    show: false
                }
            },
            series: [{
                    name: 'Sales',
                    type: 'column',
                    data: [83, 68, 56, 65, 65, 50, 39]
                },
                {
                    name: 'Sales',
                    type: 'line',
                    data: [63, 38, 31, 45, 46, 27, 18]
                }
            ],
            plotOptions: {
                bar: {
                    borderRadius: 9,
                    columnWidth: '50%',
                    endingShape: 'rounded',
                    startingShape: 'rounded',
                    colors: {
                        ranges: [{
                            to: 50,
                            from: 40,
                            color: '#25bdad'
                        }]
                    }
                }
            },
            markers: {
                size: 3.5,
                strokeWidth: 2,
                fillOpacity: 1,
                strokeOpacity: 1,
                colors: ['#fff'],
                strokeColors: '#25bdad'
            },
            stroke: {
                width: [0, 2],
                colors: ['#25bdad']
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            colors: ['#bbbcc4'],
            grid: {
                strokeDashArray: 10,
                borderColor,
                padding: {
                    bottom: -10
                }
            },
            xaxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                tickPlacement: 'on',
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            yaxis: {
                min: 0,
                max: 90,
                show: true,
                tickAmount: 3,
                labels: {
                    formatter: function(val) {
                        return parseInt(val) + 'K';
                    },
                    style: {
                        fontSize: '0.75rem',
                        fontFamily: 'Inter',
                        colors: '#bbbcc4'
                    }
                }
            },
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };
        if (typeof weeklyOverviewChartEl !== 'undefined' && weeklyOverviewChartEl !== null) {
            const weeklyOverviewChart = new ApexCharts(weeklyOverviewChartEl, weeklyOverviewChartConfig);
            weeklyOverviewChart.render();
        }
    });
</script>
