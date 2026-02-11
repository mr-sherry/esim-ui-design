@extends('admin.layout.layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <div class="dealers-container">
        <!-- Header Section -->
        <div class="dealers-header">
            <div class="header-left-main">
                <h1 class="page-title">Credits</h1>
                <p class="page-subtitle">Manage credit transactions and balances
                </p>
            </div>

        </div>

        <!-- Controls Bar -->
        <div class="controls-bar">
            <button class="btn-filters">
                <svg class="icon-filter" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M2 4h14M4 9h10M7 14h4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                Apply Filters
            </button>
            <div class="controls-right">
                <button class="btn-icon" title="Refresh">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17 10a7 7 0 11-14 0 7 7 0 0114 0z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M13 7l3-3m0 0l-3-3m3 3h-3" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                </button>
                <button class="btn-export">
                    <svg class="icon-download" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 2v10m0 0l-3-3m3 3l3-3M3 16h12" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Export
                </button>
                <button class="btn-view">
                    <svg class="icon-view" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M2 5h14M2 9h14M2 13h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    View
                </button>
            </div>
        </div>

        <!-- Table Section -->
        <div class="table-wrapper">
            <table class="dealers-table">
                <thead>
                    <tr>
                        <th>
                            ID
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            User
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            Email
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            Amount
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            Description
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            Created At
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $dealers = [
                            [
                                'id' => '100221',
                                'user' => 'ali testing',
                                'email' => 'alitestingdealer@gmail.com',
                                'amount' => '12.73$',
                                'description' => 'hello i am here',
                                'created' => 'Nov 13, 2025, 02:05 PM',
                            ],
                            [
                                'id' => '100016',
                                'user' => 'Ali Raza',
                                'email' => 'codlea@gmail.com',
                                'amount' => '12.73$',
                                'description' => 'hello i am here',
                                'created' => 'Nov 11, 2025, 04:31 PM',
                            ],
                            [
                                'id' => '97916',
                                'user' => 'Hafsa Bashir1',
                                'email' => 'hhafsab345+sqa@gmail.com',
                                'amount' => '12.73$',
                                'description' => 'hello i am here',
                                'created' => 'Oct 21, 2025, 11:09 AM',
                            ],
                            [
                                'id' => '77589',
                                'user' => 'osiris',
                                'email' => 'info@nexuspayusa.com',
                                'amount' => '12.73$',
                                'description' => 'hello i am here',
                                'created' => 'Apr 07, 2025, 10:56 PM',
                            ],
                            [
                                'id' => '68776',
                                'user' => 'abc',
                                'email' => 'abc@esimcard.com',
                                'amount' => '12.73$',
                                'description' => 'hello i am here',
                                'created' => 'Feb 06, 2025, 12:13 PM',
                            ],
                        ];
                    @endphp

                    @foreach ($dealers as $dealer)
                        <tr>
                            <td>{{ $dealer['id'] }}<button class="copy-btn " data-copy="Hello World">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                    </svg>
                                </button></td>
                            <td>{{ $dealer['user'] }}</td>
                            <td>{{ $dealer['email'] }}</td>
                            <td><span class="status-badge status-{{ $dealer['amount'] }}">{{ $dealer['amount'] }}</span>
                            </td>
                            <td class="description">{{ $dealer['description'] }}</td>
                            <td>{{ $dealer['created'] }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="pagination-bar">
            <div class="rows-per-page">
                <span>Rows per page</span>
                <select class="rows-select">
                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <div class="pagination-info">
                Page 1 of 2
            </div>

            <div class="pagination-controls">
                <button class="btn-page" disabled>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M12 3L6 8l6 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M10 3L4 8l6 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <button class="btn-page" disabled>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 3L4 8l6 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <button class="btn-page">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 13l6-5-6-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <button class="btn-page">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 13l6-5-6-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M6 13l6-5-6-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!-- Filters Side Sheet -->
    <div id="filtersSideSheet" class="side-sheet">
        <div class="side-sheet-overlay"></div>
        <div class="side-sheet-content">
            <div class="side-sheet-header">
                <div>
                    <h2 class="side-sheet-title">Filters</h2>
                    <p class="side-sheet-subtitle">You can apply filters here</p>
                </div>
                <button class="btn-close-sheet" id="closeFilters">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <form id="filtersForm" class="filters-form">
                <div class="form-group">
                    <label for="filterDealerId">Dealer ID</label>
                    <input type="text" id="filterDealerId" name="dealer_id" class="form-input"
                        placeholder="Enter Dealer ID...">
                </div>

                <div class="form-group">
                    <label for="filterDealerName">Dealer Name</label>
                    <input type="text" id="filterDealerName" name="dealer_name" class="form-input"
                        placeholder="Enter Dealer Name...">
                </div>

                <div class="form-group">
                    <label for="filterDealerEmail">Dealer Email</label>
                    <input type="text" id="filterDealerEmail" name="dealer_email" class="form-input"
                        placeholder="Enter Dealer Email...">
                </div>

                <div class="form-group">
                    <label for="filterStatus">Status</label>
                    <select id="filterStatus" name="status" class="form-select">
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="suspended">Suspended</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="filterDateRange">Date Range</label>
                    <div class="date-input-wrapper">
                        <input type="text" id="filterDateRange" name="date_range" class="form-input"
                            placeholder="Select Date Range" readonly>
                        <svg class="date-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <rect x="3" y="4" width="14" height="13" rx="2" stroke="currentColor"
                                stroke-width="1.5" />
                            <path d="M3 8h14M7 2v3M13 2v3" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                </div>

                <button type="submit" class="btn-submit-filter">Submit</button>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal elements
            const modal = document.getElementById('addDealerModal');
            const btnAddDealer = document.querySelector('.btn-add-dealer');
            const btnClose = document.getElementById('closeModal');
            const form = document.getElementById('addDealerForm');

            // Side sheet elements
            const sideSheet = document.getElementById('filtersSideSheet');
            const btnFilters = document.querySelector('.btn-filters');
            const btnCloseFilters = document.getElementById('closeFilters');
            const filtersForm = document.getElementById('filtersForm');
            const sideSheetOverlay = sideSheet.querySelector('.side-sheet-overlay');

            // Open modal
            btnAddDealer.addEventListener('click', function() {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            // Close modal
            function closeModal() {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
                form.reset();
                document.querySelectorAll('.form-error').forEach(el => el.classList.remove('active'));
            }

            btnClose.addEventListener('click', closeModal);

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Open side sheet
            btnFilters.addEventListener('click', function() {
                sideSheet.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            // Close side sheet
            function closeSideSheet() {
                sideSheet.classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            btnCloseFilters.addEventListener('click', closeSideSheet);

            sideSheetOverlay.addEventListener('click', closeSideSheet);

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    if (modal.classList.contains('active')) {
                        closeModal();
                    }
                    if (sideSheet.classList.contains('active')) {
                        closeSideSheet();
                    }
                }
            });

            // Password toggle functionality
            document.querySelectorAll('.btn-toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const input = document.getElementById(targetId);

                    if (input.type === 'password') {
                        input.type = 'text';
                    } else {
                        input.type = 'password';
                    }
                });
            });



            // Filters Form submission with AJAX
            filtersForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(filtersForm);
                const filters = {
                    dealer_id: formData.get('dealer_id'),
                    dealer_name: formData.get('dealer_name'),
                    dealer_email: formData.get('dealer_email'),
                    status: formData.get('status'),
                    date_range: formData.get('date_range')
                };

                // Remove empty filters
                Object.keys(filters).forEach(key => {
                    if (!filters[key]) {
                        delete filters[key];
                    }
                });

                console.log('Applying filters:', filters);

                // Here you would typically make an AJAX call to filter the data
                // For now, we'll just close the side sheet
                // You can implement the actual filtering logic based on your backend

                const submitBtn = filtersForm.querySelector('.btn-submit-filter');
                submitBtn.disabled = true;
                submitBtn.textContent = 'Applying...';

                // Simulate API call
                setTimeout(() => {
                    alert('Filters applied! (This is a demo - implement actual filtering)');
                    closeSideSheet();
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Submit';

                    // You would typically reload the table with filtered data here
                    // location.reload(); or update table via AJAX
                }, 500);
            });


        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr for date range
            const dateRangeInput = document.getElementById('filterDateRange');

            flatpickr(dateRangeInput, {
                mode: 'range',
                dateFormat: 'Y-m-d',
                altFormat: 'M j, Y',
                altInput: true,
                showMonths: 1,
                onChange: function(selectedDates, dateStr, instance) {
                    if (selectedDates.length === 2) {
                        console.log('Date range selected:', dateStr);
                        // The date range is automatically set in the input value
                    }
                },
                onReady: function(selectedDates, dateStr, instance) {
                    // Customize the clear button if needed
                    instance.calendarContainer.classList.add('flatpickr-dark');
                }
            });

            document.addEventListener("click", async (e) => {
                const btn = e.target.closest(".copy-btn");
                if (!btn) return;

                const text = btn.dataset.copy;
                if (!text) return;

                try {
                    await navigator.clipboard.writeText(text);

                    btn.classList.add("copied");

                    const originalTitle = btn.title;
                    btn.title = "Copied!";

                    setTimeout(() => {
                        btn.classList.remove("copied");
                        btn.title = originalTitle || "";
                    }, 1200);
                } catch (err) {
                    console.error("Copy failed", err);
                }
            });

        });
    </script>
@endsection
