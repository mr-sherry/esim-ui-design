@extends('admin.layout.layout')

@section('content')
    <div class="esims-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">My eSIMs</h1>
            <p class="page-subtitle">View and manage your eSIM profiles and activation details</p>
        </div>

        <!-- Table Actions Bar -->
        <div class="table-actions-bar">
            <div class="left-actions">
                <button class="btn btn-filters">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                    </svg>
                    Apply Filters
                </button>
            </div>

            <div class="right-actions">
                <button class="btn btn-refresh" title="Refresh">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                        <path
                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                    </svg>
                </button>

                <div class="dropdown-wrapper">
                    <button class="btn btn-export" id="exportBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                        </svg>
                        Export
                    </button>

                    <div class="export-dropdown" id="exportDropdown">
                        <button>Export as PDF</button>
                        <button>Export as Excel</button>
                        <button>Export as CSV</button>
                    </div>
                </div>

                <div class="dropdown-wrapper">
                    <button class="btn btn-view" id="viewBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg>
                        View
                    </button>

                    <div class="column-dropdown-menu" id="columnDropdown">
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-id" checked data-column="id">
                            <label for="col-id">ID</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-iccid" checked data-column="iccid">
                            <label for="col-iccid">ICCID</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-smdp" checked data-column="smdp">
                            <label for="col-smdp">SMDP + Address</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-matching" checked data-column="matching">
                            <label for="col-matching">Matching ID</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-bundle" checked data-column="bundle">
                            <label for="col-bundle">Bundle</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-number" checked data-column="number">
                            <label for="col-number">Number</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-status" checked data-column="status">
                            <label for="col-status">Status</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-installed" checked data-column="installed">
                            <label for="col-installed">Installed At</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-created" checked data-column="created">
                            <label for="col-created">Created At</label>
                        </div>
                        <div class="column-dropdown-item">
                            <input type="checkbox" id="col-actions" checked data-column="actions">
                            <label for="col-actions">Actions</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="esims-table-wrapper">
            <table class="esims-table" id="esimsTable">
                <thead>
                    <tr>
                        <th class="col-id">
                            ID
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-iccid">
                            ICCID
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-smdp">
                            SMDP + Address
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-matching">
                            Matching ID
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-bundle">Bundle</th>
                        <th class="col-number">Number</th>
                        <th class="col-status">
                            Status
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-installed">
                            Installed At
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-created">
                            Created At
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                        </th>
                        <th class="col-actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-id ">
                            <div class="id-cell">
                                <span class="id-text id-main">cedf1908-6d7...</span>
                                <button class="copy-btn"
                                    onclick="copyToClipboard('cedf1908-6d7a-73e8-a346-45022a2ce1bc')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="col-iccid">
                            <div class="copy-cell">
                                <span class="copy-text">89444227...</span>
                                <button class="copy-btn" onclick="copyToClipboard('89444227')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="col-smdp">
                            <div class="copy-cell">
                                <span class="copy-text">rsp-3104.1demia.io</span>
                                <button class="copy-btn" onclick="copyToClipboard('rsp-3104.1demia.io')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="col-matching">
                            <div class="copy-cell">
                                <span class="copy-text">K7IGF-T0...</span>
                                <button class="copy-btn" onclick="copyToClipboard('K7IGF-T0')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="col-bundle">
                            <span class="bundle-text">eSIM, 1GB, 7 Days, Canada, Unthrottled</span>
                        </td>
                        <td class="col-number">—</td>
                        <td class="col-status">
                            <span class="status-badge status-released">Released</span>
                        </td>
                        <td class="col-installed">—</td>
                        <td class="col-created">Jan 08, 2026, 05:12 PM</td>
                        <td class="col-actions">
                            <button class="action-btn" title="View Details">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </button>
                        </td>
                    </tr>


                </tbody>
            </table>

        </div>
        <!-- Table Footer -->
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
                <span class="pagination-info">Page 1 of 10</span>
                <button class="pagination-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                        <path fill-rule="evenodd"
                            d="M4.854 3.646a.5.5 0 0 1 0 .708L1.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0" />
                    </svg>
                </button>
                <button class="pagination-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                </button>
                <button class="pagination-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793l-2.147-2.146a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </button>
                <button class="pagination-btn">
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



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const exportBtn = document.getElementById('exportBtn');
            const exportDropdown = document.getElementById('exportDropdown');

            exportBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                exportDropdown.classList.toggle('active');
                columnDropdown.classList.remove('active');
            });

            const viewBtn = document.getElementById('viewBtn');
            const columnDropdown = document.getElementById('columnDropdown');

            viewBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                columnDropdown.classList.toggle('active');
                exportDropdown.classList.remove('active');
            });

            const checkboxes = columnDropdown.querySelectorAll('input[type="checkbox"]');
            const table = document.getElementById('esimsTable');

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

            document.addEventListener('click', function() {
                exportDropdown.classList.remove('active');
                columnDropdown.classList.remove('active');
            });

            exportDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });

            columnDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                const toast = document.getElementById('copyToast');
                toast.classList.add('active');

                setTimeout(function() {
                    toast.classList.remove('active');
                }, 2000);
            }).catch(function(err) {
                console.error('Failed to copy:', err);
            });
        }
    </script>
@endsection
