@extends('admin.layout.layout')

@section('content')
    <div class="dashboard-container">



        <div class="d-flex gap-4 align-items-center mb-4 stats-header">
            <h2 class="text-white mb-0">Statistics</h2>
            <div class="date-picker-wrapper">
                <button class="btn date-dropdown" type="button" id="dateRangeBtn">
                    <span id="selectedDateRange">Feb 5, 2026 - Feb 5, 2026</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="ms-2">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="daterange-picker" id="dateRangePicker">
                    <div class="daterange-picker-content">
                        <div class="daterange-header">
                            <div class="date-input-group">
                                <input type="number" class="date-input" id="startMonth" min="1" max="12"
                                    value="5">
                                <span class="date-separator">/</span>
                                <input type="number" class="date-input" id="startDay" min="1" max="31"
                                    value="5">
                                <span class="date-separator">/</span>
                                <input type="number" class="date-input year-input" id="startYear" min="2020"
                                    max="2030" value="2026">
                            </div>
                            <span class="date-range-separator">-</span>
                            <div class="date-input-group">
                                <input type="number" class="date-input" id="endMonth" min="1" max="12"
                                    value="2">
                                <span class="date-separator">/</span>
                                <input type="number" class="date-input" id="endDay" min="1" max="31"
                                    value="5">
                                <span class="date-separator">/</span>
                                <input type="number" class="date-input year-input" id="endYear" min="2020"
                                    max="2030" value="2026">
                            </div>
                        </div>

                        <div class="daterange-body">
                            <div class="calendars-section">
                                <div class="calendar-navigation">
                                    <button class="nav-btn" id="prevMonth">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M12.5 15l-5-5 5-5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <div class="calendar-months">
                                        <h3 class="calendar-month-title" id="month1Title">January 2026</h3>
                                        <h3 class="calendar-month-title" id="month2Title">February 2026</h3>
                                    </div>
                                    <button class="nav-btn" id="nextMonth">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7.5 15l5-5-5-5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="calendars-grid">
                                    <div class="calendar" id="calendar1">
                                        <div class="calendar-weekdays">
                                            <div class="weekday">Su</div>
                                            <div class="weekday">Mo</div>
                                            <div class="weekday">Tu</div>
                                            <div class="weekday">We</div>
                                            <div class="weekday">Th</div>
                                            <div class="weekday">Fr</div>
                                            <div class="weekday">Sa</div>
                                        </div>
                                        <div class="calendar-days" id="calendar1Days"></div>
                                    </div>

                                    <div class="calendar" id="calendar2">
                                        <div class="calendar-weekdays">
                                            <div class="weekday">Su</div>
                                            <div class="weekday">Mo</div>
                                            <div class="weekday">Tu</div>
                                            <div class="weekday">We</div>
                                            <div class="weekday">Th</div>
                                            <div class="weekday">Fr</div>
                                            <div class="weekday">Sa</div>
                                        </div>
                                        <div class="calendar-days" id="calendar2Days"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="presets-section">
                                <button class="preset-btn" data-preset="today">Today</button>
                                <button class="preset-btn" data-preset="yesterday">Yesterday</button>
                                <button class="preset-btn" data-preset="last7">Last 7 days</button>
                                <button class="preset-btn" data-preset="last14">Last 14 days</button>
                                <button class="preset-btn" data-preset="last30">Last 30 days</button>
                                <button class="preset-btn" data-preset="thisWeek">This Week</button>
                                <button class="preset-btn" data-preset="lastWeek">Last Week</button>
                                <button class="preset-btn" data-preset="thisMonth">This Month</button>
                                <button class="preset-btn" data-preset="lastMonth">Last Month</button>
                            </div>
                        </div>

                        <div class="daterange-footer">
                            <button class="btn-cancel" id="cancelBtn">Cancel</button>
                            <button class="btn-update" id="updateBtn">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="stats-overview-container">
            <h5 class="text-white mb-4 stats-overview-title">Stats Overview</h5>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">All Bundles Amount</p>
                                <h3 class="text-white mb-0 stat-card-value">$147.82</h3>
                            </div>
                            <div class="icon-wrapper icon-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer Sale Amount</p>
                                <h3 class="text-white mb-0 stat-card-value">$5.88</h3>
                            </div>
                            <div class="icon-wrapper icon-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer Profit</p>
                                <h3 class="text-white mb-0 stat-card-value">$0.35</h3>
                            </div>
                            <div class="icon-wrapper icon-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Bundle Count</p>
                                <h3 class="text-white mb-0 stat-card-value">33</h3>
                            </div>
                            <div class="icon-wrapper icon-yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer Bundle Count</p>
                                <h3 class="text-white mb-0 stat-card-value">3</h3>
                            </div>
                            <div class="icon-wrapper icon-purple">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                    <path
                                        d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">eSIM Sold</p>
                                <h3 class="text-white mb-0 stat-card-value">20</h3>
                            </div>
                            <div class="icon-wrapper icon-pink">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer eSIM Sold</p>
                                <h3 class="text-white mb-0 stat-card-value">2</h3>
                            </div>
                            <div class="icon-wrapper icon-lavender">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    <path
                                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Wallet Refill</p>
                                <h3 class="text-white mb-0 stat-card-value">$0</h3>
                            </div>
                            <div class="icon-wrapper icon-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-white mb-3 mt-3 stats-overview-title">Summary Cards</h5>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Balance</p>
                                <h3 class="text-white mb-0 stat-card-value">$147.82</h3>
                            </div>
                            <div class="icon-wrapper icon-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Bundle Sold</p>
                                <h3 class="text-white mb-0 stat-card-value">$5.88</h3>
                            </div>
                            <div class="icon-wrapper icon-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">eSIM Sold</p>
                                <h3 class="text-white mb-0 stat-card-value">$0.35</h3>
                            </div>
                            <div class="icon-wrapper icon-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-white mb-3 mt-3 stats-overview-title">All Time Statistics</h5>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Total Wallet Refill

                                </p>
                                <h3 class="text-white mb-0 stat-card-value">$147.82</h3>
                            </div>
                            <div class="icon-wrapper icon-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Total Bundles Sold

                                </p>
                                <h3 class="text-white mb-0 stat-card-value">$5.88</h3>
                            </div>
                            <div class="icon-wrapper icon-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Total eSIM Sold

                                </p>
                                <h3 class="text-white mb-0 stat-card-value">$0.35</h3>
                            </div>
                            <div class="icon-wrapper icon-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Total Dealers

                                </p>
                                <h3 class="text-white mb-0 stat-card-value">$147.82</h3>
                            </div>
                            <div class="icon-wrapper icon-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer Sales</p>
                                <h3 class="text-white mb-0 stat-card-value">$5.88</h3>
                            </div>
                            <div class="icon-wrapper icon-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-secondary stat-card-label">Dealer Profit

                                </p>
                                <h3 class="text-white mb-0 stat-card-value">$0.35</h3>
                            </div>
                            <div class="icon-wrapper icon-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-4">

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Monthly eSIM sales and profit overview</h3>
                            <p class="chart-subtitle">Last 6 months</p>
                        </div>
                        <div class="chart-body">
                            <canvas id="salesChart"></canvas>
                        </div>
                        <div class="chart-legend">
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-green"></span>
                                <span class="legend-label">esim_sold</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-blue"></span>
                                <span class="legend-label">bundle_count</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-purple"></span>
                                <span class="legend-label">sale</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-yellow"></span>
                                <span class="legend-label">profit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Customer Activity</h3>
                            <p class="chart-subtitle">Last 6 months</p>
                        </div>
                        <div class="chart-body">
                            <canvas id="activityChart"></canvas>
                        </div>
                        <div class="chart-legend">
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-green"></span>
                                <span class="legend-label">New Users</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-blue"></span>
                                <span class="legend-label">SIM Buy</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-purple"></span>
                                <span class="legend-label">Visitors</span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-dot legend-dot-yellow"></span>
                                <span class="legend-label">Renew Packages</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="top10-container">
            <div class="top10-header">
                <div>
                    <h1 class="top10-title">Top 10 Overview</h1>
                    <p class="top10-subtitle">See the leading countries, packages, and dealers for eSIM at a glance.</p>
                </div>
                <div class="top10-tabs">
                    <button class="tab-btn active">Countries</button>
                    <button class="tab-btn">Packages</button>
                    <button class="tab-btn">Dealers</button>
                </div>
            </div>

            <div class="top10-table-wrapper">
                <div class="table-controls">
                    <input type="text" class="table-search" placeholder="Filter rows...">
                    <div class="table-actions">
                        <button class="btn-export">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M14 10v2.667A1.333 1.333 0 0112.667 14H3.333A1.333 1.333 0 012 12.667V10M11.333 5.333L8 2m0 0L4.667 5.333M8 2v8"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Export
                        </button>
                        <button class="btn-view">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M6.667 2.667h-4A.667.667 0 002 3.333v4c0 .369.298.667.667.667h4A.667.667 0 007.333 7.333v-4A.667.667 0 006.667 2.667zM13.333 2.667h-4a.667.667 0 00-.666.666v4c0 .369.298.667.666.667h4A.667.667 0 0014 7.333v-4a.667.667 0 00-.667-.666zM6.667 9.333h-4A.667.667 0 002 10v4c0 .368.298.667.667.667h4a.667.667 0 00.666-.667v-4a.667.667 0 00-.666-.667zM13.333 9.333h-4a.667.667 0 00-.666.667v4c0 .368.298.667.666.667h4a.667.667 0 00.667-.667v-4a.667.667 0 00-.667-.667z"
                                    fill="currentColor" />
                            </svg>
                            View
                        </button>
                    </div>
                </div>

                <table class="top10-table">
                    <thead>
                        <tr>
                            <th>
                                Name
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M6 2v8M9 7L6 10 3 7" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </th>
                            <th>
                                Total Packages
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M6 2v8M9 7L6 10 3 7" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </th>
                            <th>
                                Total Price($)
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path d="M6 2v8M9 7L6 10 3 7" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="country-flag">US</span>
                                <span>United States</span>
                            </td>
                            <td>6</td>
                            <td>$10.02</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">EG</span>
                                <span>Egypt</span>
                            </td>
                            <td>2</td>
                            <td>$4.16</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">IT</span>
                                <span>Italy</span>
                            </td>
                            <td>1</td>
                            <td>$1.11</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">AX</span>
                                <span>Åland Islands</span>
                            </td>
                            <td>1</td>
                            <td>$1.69</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">PK</span>
                                <span>Pakistan</span>
                            </td>
                            <td>1</td>
                            <td>$6.23</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">CA</span>
                                <span>Canada</span>
                            </td>
                            <td>1</td>
                            <td>$2.71</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="country-flag">AL</span>
                                <span>Albania</span>
                            </td>
                            <td>1</td>
                            <td>$2.36</td>
                        </tr>
                    </tbody>
                </table>

                <div class="table-pagination">
                    <div class="pagination-info">
                        <span>Rows per page</span>
                        <select class="rows-select">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="pagination-controls">
                        <span class="page-info">Page 1 of 1</span>
                        <div class="pagination-buttons">
                            <button class="page-btn" disabled>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13 8H3M3 8l4 4M3 8l4-4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="page-btn" disabled>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M10 12l-4-4 4-4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="page-btn" disabled>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="page-btn" disabled>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8h10M13 8l-4-4M13 8l-4 4" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script>
            class DateRangePicker {
                constructor() {

                    this.endDate = new Date(2026, 1, 5);
                    this.tempStartDate = null;
                    this.tempEndDate = null;


                    this.init();
                }

                init() {
                    this.cacheElements();
                    this.attachEvents();
                    this.renderCalendars();
                    this.updateDisplay();
                }

                cacheElements() {
                    this.pickerBtn = document.getElementById('dateRangeBtn');
                    this.picker = document.getElementById('dateRangePicker');
                    this.selectedRangeDisplay = document.getElementById('selectedDateRange');

                    this.startMonthInput = document.getElementById('startMonth');
                    this.startDayInput = document.getElementById('startDay');
                    this.startYearInput = document.getElementById('startYear');
                    this.endMonthInput = document.getElementById('endMonth');
                    this.endDayInput = document.getElementById('endDay');
                    this.endYearInput = document.getElementById('endYear');

                    this.prevMonthBtn = document.getElementById('prevMonth');
                    this.nextMonthBtn = document.getElementById('nextMonth');
                    this.month1Title = document.getElementById('month1Title');
                    this.month2Title = document.getElementById('month2Title');

                    this.calendar1Days = document.getElementById('calendar1Days');
                    this.calendar2Days = document.getElementById('calendar2Days');

                    this.cancelBtn = document.getElementById('cancelBtn');
                    this.updateBtn = document.getElementById('updateBtn');

                    this.presetBtns = document.querySelectorAll('.preset-btn');
                }

                attachEvents() {

                    this.pickerBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        this.togglePicker();
                    });


                    this.picker.addEventListener('click', (e) => {
                        e.stopPropagation();
                    });


                    document.addEventListener('click', (e) => {
                        if (!this.picker.contains(e.target) && !this.pickerBtn.contains(e.target)) {
                            this.closePicker();
                        }
                    });


                    this.prevMonthBtn.addEventListener('click', () => this.navigateMonth(-1));
                    this.nextMonthBtn.addEventListener('click', () => this.navigateMonth(1));


                    [this.startMonthInput, this.startDayInput, this.startYearInput,
                        this.endMonthInput, this.endDayInput, this.endYearInput
                    ].forEach(input => {
                        input.addEventListener('change', () => this.handleInputChange());
                    });


                    this.presetBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            const preset = btn.dataset.preset;
                            this.applyPreset(preset);
                            this.highlightPreset(btn);
                        });
                    });


                    this.cancelBtn.addEventListener('click', () => this.closePicker());
                    this.updateBtn.addEventListener('click', () => this.updateDateRange());
                }

                togglePicker() {
                    const isShown = this.picker.classList.contains('show');
                    if (isShown) {
                        this.closePicker();
                    } else {
                        this.openPicker();
                    }
                }

                openPicker() {
                    this.tempStartDate = new Date(this.startDate);
                    this.tempEndDate = new Date(this.endDate);
                    this.picker.classList.add('show');
                    this.updateInputs();
                    this.renderCalendars();
                }

                closePicker() {
                    this.picker.classList.remove('show');
                    this.clearPresetHighlight();
                }

                navigateMonth(direction) {
                    this.currentMonth1.setMonth(this.currentMonth1.getMonth() + direction);
                    this.currentMonth2.setMonth(this.currentMonth2.getMonth() + direction);
                    this.renderCalendars();
                }

                renderCalendars() {
                    this.renderCalendar(this.calendar1Days, this.currentMonth1);
                    this.renderCalendar(this.calendar2Days, this.currentMonth2);
                    this.updateMonthTitles();
                }

                renderCalendar(container, month) {
                    container.innerHTML = '';

                    const year = month.getFullYear();
                    const monthIndex = month.getMonth();

                    const firstDay = new Date(year, monthIndex, 1).getDay();
                    const daysInMonth = new Date(year, monthIndex + 1, 0).getDate();
                    const daysInPrevMonth = new Date(year, monthIndex, 0).getDate();


                    for (let i = firstDay - 1; i >= 0; i--) {
                        const day = daysInPrevMonth - i;
                        const dayEl = this.createDayElement(day, monthIndex - 1, year, true);
                        container.appendChild(dayEl);
                    }


                    for (let day = 1; day <= daysInMonth; day++) {
                        const dayEl = this.createDayElement(day, monthIndex, year, false);
                        container.appendChild(dayEl);
                    }


                    const totalCells = container.children.length;

                    for (let day = 1; day <= remainingCells; day++) {
                        const dayEl = this.createDayElement(day, monthIndex + 1, year, true);
                        container.appendChild(dayEl);
                    }
                }

                createDayElement(day, month, year, isOtherMonth) {
                    const dayEl = document.createElement('div');
                    dayEl.className = 'calendar-day';
                    dayEl.textContent = day;

                    const date = new Date(year, month, day);
                    const today = new Date();

                    if (isOtherMonth) {
                        dayEl.classList.add('other-month');
                    }


                    if (this.isSameDay(date, today)) {
                        dayEl.classList.add('today');
                    }


                    if (this.tempStartDate && this.isSameDay(date, this.tempStartDate)) {
                        dayEl.classList.add('range-start');
                    }

                    if (this.tempEndDate && this.isSameDay(date, this.tempEndDate)) {
                        dayEl.classList.add('range-end');
                    }


                    if (this.tempStartDate && this.tempEndDate &&
                        date > this.tempStartDate && date < this.tempEndDate) {
                        dayEl.classList.add('in-range');
                    }


                    if (!isOtherMonth) {
                        dayEl.addEventListener('click', () => this.selectDate(date));
                    }

                    return dayEl;
                }

                selectDate(date) {
                    if (!this.tempStartDate || (this.tempStartDate && this.tempEndDate)) {

                        this.tempStartDate = date;
                        this.tempEndDate = null;
                    } else {

                        if (date < this.tempStartDate) {
                            this.tempEndDate = this.tempStartDate;
                            this.tempStartDate = date;
                        } else {
                            this.tempEndDate = date;
                        }
                    }

                    this.updateInputs();
                    this.renderCalendars();
                    this.clearPresetHighlight();
                }

                handleInputChange() {
                    const startMonth = parseInt(this.startMonthInput.value) - 1;
                    const startDay = parseInt(this.startDayInput.value);
                    const startYear = parseInt(this.startYearInput.value);

                    const endMonth = parseInt(this.endMonthInput.value) - 1;
                    const endDay = parseInt(this.endDayInput.value);
                    const endYear = parseInt(this.endYearInput.value);

                    this.tempStartDate = new Date(startYear, startMonth, startDay);
                    this.tempEndDate = new Date(endYear, endMonth, endDay);

                    this.renderCalendars();
                    this.clearPresetHighlight();
                }

                updateInputs() {
                    if (this.tempStartDate) {
                        this.startMonthInput.value = this.tempStartDate.getMonth() + 1;
                        this.startDayInput.value = this.tempStartDate.getDate();
                        this.startYearInput.value = this.tempStartDate.getFullYear();
                    }

                    if (this.tempEndDate) {
                        this.endMonthInput.value = this.tempEndDate.getMonth() + 1;
                        this.endDayInput.value = this.tempEndDate.getDate();
                        this.endYearInput.value = this.tempEndDate.getFullYear();
                    }
                }

                updateMonthTitles() {
                    const months = ['January', 'February', 'March', 'April', 'May', 'June',
                        'July', 'August', 'September', 'October', 'November', 'December'
                    ];

                    this.month1Title.textContent =
                        `${months[this.currentMonth1.getMonth()]} ${this.currentMonth1.getFullYear()}`;
                    this.month2Title.textContent =
                        `${months[this.currentMonth2.getMonth()]} ${this.currentMonth2.getFullYear()}`;
                }

                applyPreset(preset) {
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);

                    switch (preset) {
                        case 'today':
                            this.tempStartDate = new Date(today);
                            this.tempEndDate = new Date(today);
                            break;
                        case 'yesterday':
                            const yesterday = new Date(today);
                            yesterday.setDate(yesterday.getDate() - 1);
                            this.tempStartDate = new Date(yesterday);
                            this.tempEndDate = new Date(yesterday);
                            break;
                        case 'last7':
                            this.tempEndDate = new Date(today);
                            this.tempStartDate = new Date(today);
                            this.tempStartDate.setDate(this.tempStartDate.getDate() - 6);
                            break;
                        case 'last14':
                            this.tempEndDate = new Date(today);
                            this.tempStartDate = new Date(today);
                            this.tempStartDate.setDate(this.tempStartDate.getDate() - 13);
                            break;
                        case 'last30':
                            this.tempEndDate = new Date(today);
                            this.tempStartDate = new Date(today);
                            this.tempStartDate.setDate(this.tempStartDate.getDate() - 29);
                            break;
                        case 'thisWeek':
                            const startOfWeek = new Date(today);
                            startOfWeek.setDate(today.getDate() - today.getDay());
                            this.tempStartDate = new Date(startOfWeek);
                            this.tempEndDate = new Date(today);
                            break;
                        case 'lastWeek':
                            const lastWeekEnd = new Date(today);
                            lastWeekEnd.setDate(today.getDate() - today.getDay() - 1);
                            const lastWeekStart = new Date(lastWeekEnd);
                            lastWeekStart.setDate(lastWeekEnd.getDate() - 6);
                            this.tempStartDate = new Date(lastWeekStart);
                            this.tempEndDate = new Date(lastWeekEnd);
                            break;
                        case 'thisMonth':
                            this.tempStartDate = new Date(today.getFullYear(), today.getMonth(), 1);
                            this.tempEndDate = new Date(today);
                            break;
                        case 'lastMonth':
                            const lastMonth = new Date(today.getFullYear(), today.getMonth() - 1, 1);
                            const lastMonthEnd = new Date(today.getFullYear(), today.getMonth(), 0);
                            this.tempStartDate = new Date(lastMonth);
                            this.tempEndDate = new Date(lastMonthEnd);
                            break;
                    }


                    this.currentMonth1 = new Date(this.tempStartDate.getFullYear(), this.tempStartDate.getMonth(), 1);
                    this.currentMonth2 = new Date(this.tempEndDate.getFullYear(), this.tempEndDate.getMonth(), 1);

                    this.updateInputs();
                    this.renderCalendars();
                }

                highlightPreset(btn) {
                    this.clearPresetHighlight();
                    btn.classList.add('active');
                }

                clearPresetHighlight() {
                    this.presetBtns.forEach(btn => btn.classList.remove('active'));
                }

                updateDateRange() {
                    if (this.tempStartDate && this.tempEndDate) {
                        this.startDate = new Date(this.tempStartDate);
                        this.endDate = new Date(this.tempEndDate);


                        if (this.startDate > this.endDate) {
                            const temp = this.startDate;
                            this.startDate = this.endDate;
                            this.endDate = temp;
                        }

                        this.updateDisplay();
                        this.closePicker();
                    } else {
                        alert('Please select both start and end dates');
                    }
                }

                updateDisplay() {
                    const formatDate = (date) => {
                        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                        ];
                        const month = months[date.getMonth()];
                        const day = date.getDate();
                        const year = date.getFullYear();
                        return `${month} ${day}, ${year}`;
                    };

                    const startStr = formatDate(this.startDate);
                    const endStr = formatDate(this.endDate);

                    this.selectedRangeDisplay.textContent = `${startStr} - ${endStr}`;
                }

                isSameDay(date1, date2) {
                    return date1.getFullYear() === date2.getFullYear() &&
                        date1.getMonth() === date2.getMonth() &&
                        date1.getDate() === date2.getDate();
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                new DateRangePicker();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb'],
                    datasets: [{
                            label: 'esim_sold',
                            data: [2, 8, 2, 8, 12, 5],
                            borderColor: '#10b981',
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981',
                            pointBorderColor: '#10b981'
                        },
                        {
                            label: 'bundle_count',
                            data: [3, 8, 3, 2, 8, 5],
                            borderColor: '#3b82f6',
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#3b82f6',
                            pointBorderColor: '#3b82f6'
                        },
                        {
                            label: 'sale',
                            data: [5, 57, 35, 22, 22, 18],
                            borderColor: '#a855f7',
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#a855f7',
                            pointBorderColor: '#a855f7'
                        },
                        {
                            label: 'profit',
                            data: [2, 3, 5, 2, 5, 3],
                            borderColor: '#eab308',
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#eab308',
                            pointBorderColor: '#eab308'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    aspectRatio: 2,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            padding: 12,
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#333',
                            borderWidth: 1
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                color: '#1a1a1a'
                            },
                            ticks: {
                                color: '#888'
                            }
                        },
                        y: {
                            grid: {
                                color: '#1a1a1a',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#888'
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });

            const activityCtx = document.getElementById('activityChart').getContext('2d');
            const activityChart = new Chart(activityCtx, {
                type: 'pie',
                data: {
                    labels: ['New Users', 'SIM Buy', 'Visitors', 'Renew Packages'],
                    datasets: [{
                        data: [5, 3, 5, 0],
                        backgroundColor: [
                            '#10b981', // Green
                            '#3b82f6', // Blue
                            '#a855f7', // Purple
                            '#eab308' // Yellow
                        ],
                        borderWidth: 0,
                        borderColor: 'transparent'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    aspectRatio: 2,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            padding: 12,
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#333',
                            borderWidth: 1
                        }
                    }
                }
            });
        </script>

    </div>
@endsection
