@extends('admin.layout.layout')

@section('content')
    <div class="page-container">
        <!-- User Information Card -->
        <div class="info-card">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
                <h2 class="card-title">User Information</h2>
            </div>

            <div class="info-grid">
                <div>
                    <div class="info-row">
                        <span class="info-label">ID</span>
                        <span class="info-value">108073</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Name</span>
                        <span class="info-value">Hafsa Bashir</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email</span>
                        <span class="info-value">hhafsab345+res@gmail.com</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Blocked</span>
                        <span class="badge badge-success">No</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Balance</span>
                        <span class="info-value">$0.00</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email Verified</span>
                        <span class="badge badge-success">Yes</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- User Refills Table -->
        <div class="table-card">
            <div class="table-header">
                <div class="card-header" style="margin: 0; padding: 0; border: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                        <path
                            d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                    </svg>
                    <h2 class="card-title">User Refills</h2>
                </div>

                <div class="table-actions">
                    <div class="export-wrapper">
                        <button class="btn btn-export" id="exportBtn1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                            </svg>
                            Export
                        </button>

                        <div class="export-dropdown" id="exportDropdown1">
                            <button>Export as PDF</button>
                            <button>Export as Excel</button>
                            <button>Export as CSV</button>
                        </div>
                    </div>

                    <div class="column-dropdown">
                        <button class="btn btn-view" id="refillsViewBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>
                            View
                        </button>

                        <div class="dropdown-menu" id="refillsDropdown">
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-refills-id" checked data-table="refills" data-column="id">
                                <label for="col-refills-id">ID</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-refills-source" checked data-table="refills"
                                    data-column="source">
                                <label for="col-refills-source">Source</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-refills-description" checked data-table="refills"
                                    data-column="description">
                                <label for="col-refills-description">Description</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-refills-amount" checked data-table="refills"
                                    data-column="amount">
                                <label for="col-refills-amount">Amount ($)</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-refills-created" checked data-table="refills"
                                    data-column="created">
                                <label for="col-refills-created">Created at</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="data-table" id="refillsTable">
                <thead>
                    <tr>
                        <th class="col-id">
                            ID
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-source">Source</th>
                        <th class="col-description">Description</th>
                        <th class="col-amount">Amount ($)</th>
                        <th class="col-created">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-id">019c0aa3-dead-73a8-a346-4501f4bcda32</td>
                        <td class="col-source">Manual Refill</td>
                        <td class="col-description">Credits received</td>
                        <td class="col-amount">1.00</td>
                        <td class="col-created">2026-01-28T12:46:14.000000Z</td>
                    </tr>
                </tbody>
            </table>

            <div class="table-footer">
                <div class="rows-per-page">
                    <span>Rows per page</span>
                    <select>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="pagination">
                    <span class="pagination-info">Page 1 of 1</span>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                            <path fill-rule="evenodd"
                                d="M4.854 3.646a.5.5 0 0 1 0 .708L1.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793l-2.147-2.146a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                            <path fill-rule="evenodd"
                                d="M11.146 3.646a.5.5 0 0 0 0 .708L14.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- ESIMs Purchased Table -->
        <div class="table-card">
            <div class="table-header">
                <div class="card-header" style="margin: 0; padding: 0; border: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h10V2a1 1 0 0 0-1-1zM3 4v8h10V4z" />
                    </svg>
                    <h2 class="card-title">Esims Purchased</h2>
                </div>

                <div class="table-actions">
                    <div class="export-wrapper">
                        <button class="btn btn-export" id="exportBtn2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                            </svg>
                            Export
                        </button>

                        <div class="export-dropdown" id="exportDropdown2">
                            <button>Export as PDF</button>
                            <button>Export as Excel</button>
                            <button>Export as CSV</button>
                        </div>
                    </div>


                    <div class="column-dropdown">
                        <button class="btn btn-view" id="esimsViewBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>
                            View
                        </button>

                        <div class="dropdown-menu" id="esimsDropdown">
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-id" checked data-table="esims" data-column="id">
                                <label for="col-esims-id">ID</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-iccid" checked data-table="esims"
                                    data-column="iccid">
                                <label for="col-esims-iccid">ICCID</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-status" checked data-table="esims"
                                    data-column="status">
                                <label for="col-esims-status">Status</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-provider" checked data-table="esims"
                                    data-column="provider">
                                <label for="col-esims-provider">Provider</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-installed" checked data-table="esims"
                                    data-column="installed">
                                <label for="col-esims-installed">Installed at</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-esims-created" checked data-table="esims"
                                    data-column="created">
                                <label for="col-esims-created">Created at</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="data-table" id="esimsTable">
                <thead>
                    <tr>
                        <th class="col-id">ID</th>
                        <th class="col-iccid">ICCID</th>
                        <th class="col-status">Status</th>
                        <th class="col-provider">Provider</th>
                        <th class="col-installed">Installed at</th>
                        <th class="col-created">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" class="empty-state">No results.</td>
                    </tr>
                </tbody>
            </table>

            <div class="table-footer">
                <div class="rows-per-page">
                    <span>Rows per page</span>
                    <select>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="pagination">
                    <span class="pagination-info">Page 1 of 1</span>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                            <path fill-rule="evenodd"
                                d="M4.854 3.646a.5.5 0 0 1 0 .708L1.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793l-2.147-2.146a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                            <path fill-rule="evenodd"
                                d="M11.146 3.646a.5.5 0 0 0 0 .708L14.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Bundles Purchased Table -->
        <div class="table-card">
            <div class="table-header">
                <div class="card-header" style="margin: 0; padding: 0; border: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 1 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                    </svg>
                    <h2 class="card-title">Bundles Purchased</h2>
                </div>

                <div class="table-actions">
                    <div class="export-wrapper">
                        <button class="btn btn-export" id="exportBtn3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                            </svg>
                            Export
                        </button>

                        <div class="export-dropdown" id="exportDropdown3">
                            <button>Export as PDF</button>
                            <button>Export as Excel</button>
                            <button>Export as CSV</button>
                        </div>
                    </div>

                    <div class="column-dropdown">
                        <button class="btn btn-view" id="bundlesViewBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>
                            View
                        </button>

                        <div class="dropdown-menu" id="bundlesDropdown">
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-id" checked data-table="bundles"
                                    data-column="id">
                                <label for="col-bundles-id">ID</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-name" checked data-table="bundles"
                                    data-column="name">
                                <label for="col-bundles-name">Name</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-provider" checked data-table="bundles"
                                    data-column="provider">
                                <label for="col-bundles-provider">Provider Name</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-total" checked data-table="bundles"
                                    data-column="total">
                                <label for="col-bundles-total">Data Total</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-remaining" checked data-table="bundles"
                                    data-column="remaining">
                                <label for="col-bundles-remaining">Data Remaining</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-price" checked data-table="bundles"
                                    data-column="price">
                                <label for="col-bundles-price">Price</label>
                            </div>
                            <div class="dropdown-item">
                                <input type="checkbox" id="col-bundles-created" checked data-table="bundles"
                                    data-column="created">
                                <label for="col-bundles-created">Created At</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="data-table" id="bundlesTable">
                <thead>
                    <tr>
                        <th class="col-id">ID</th>
                        <th class="col-name">Name</th>
                        <th class="col-provider">Provider Name</th>
                        <th class="col-total">Data Total</th>
                        <th class="col-remaining">Data Remaining</th>
                        <th class="col-price">Price</th>
                        <th class="col-created">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="empty-state">No results.</td>
                    </tr>
                </tbody>
            </table>

            <div class="table-footer">
                <div class="rows-per-page">
                    <span>Rows per page</span>
                    <select>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="pagination">
                    <span class="pagination-info">Page 1 of 1</span>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                            <path fill-rule="evenodd"
                                d="M4.854 3.646a.5.5 0 0 1 0 .708L1.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793l-2.147-2.146a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                    </button>
                    <button class="pagination-btn" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                            <path fill-rule="evenodd"
                                d="M11.146 3.646a.5.5 0 0 0 0 .708L14.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = [{
                    btn: 'refillsViewBtn',
                    menu: 'refillsDropdown',
                    table: 'refillsTable'
                },
                {
                    btn: 'esimsViewBtn',
                    menu: 'esimsDropdown',
                    table: 'esimsTable'
                },
                {
                    btn: 'bundlesViewBtn',
                    menu: 'bundlesDropdown',
                    table: 'bundlesTable'
                }
            ];

            dropdowns.forEach(dropdown => {
                const btn = document.getElementById(dropdown.btn);
                const menu = document.getElementById(dropdown.menu);
                const table = document.getElementById(dropdown.table);

                btn.addEventListener('click', function(e) {
                    e.stopPropagation();

                    document.querySelectorAll('.dropdown-menu').forEach(m => {
                        if (m !== menu) m.classList.remove('active');
                    });

                    menu.classList.toggle('active');
                });

                const checkboxes = menu.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        const column = this.dataset.column;
                        const isChecked = this.checked;

                        const cells = table.querySelectorAll(`.col-${column}`);
                        cells.forEach(cell => {
                            if (isChecked) {
                                cell.classList.remove('column-hidden');
                            } else {
                                cell.classList.add('column-hidden');
                            }
                        });
                    });
                });
            });

            const totalExports = 3;

            for (let i = 1; i <= totalExports; i++) {
                const btn = document.getElementById(`exportBtn${i}`);
                const dropdown = document.getElementById(`exportDropdown${i}`);

                btn.addEventListener("click", (e) => {
                    e.stopPropagation();


                    document.querySelectorAll(".export-dropdown").forEach(d => {
                        if (d !== dropdown) d.classList.remove("show");
                    });

                    dropdown.classList.toggle("show");
                });
            }


            document.addEventListener("click", () => {
                document.querySelectorAll(".export-dropdown")
                    .forEach(d => d.classList.remove("show"));
            });


        });
    </script>
@endsection
