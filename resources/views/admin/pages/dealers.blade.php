@extends('admin.layout.layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <div class="dealers-container">
        <!-- Header Section -->
        <div class="dealers-header">
            <div class="header-left-main">
                <h1 class="page-title">Dealers</h1>
                <p class="page-subtitle">You can manage dealers here</p>
            </div>
            <div class="header-right">
                <button class="btn-add-dealer">
                    <svg class="icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="2" />
                        <path d="M10 6V14M6 10H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    Add Dealer
                </button>
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
                            Name
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
                            Status
                            <svg class="sort-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 3v6M6 3l-2 2M6 3l2 2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </th>
                        <th>
                            Balance($)
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $dealers = [
                            [
                                'id' => '100221',
                                'name' => 'ali testing',
                                'email' => 'alitestingdealer@gmail.com',
                                'status' => 'active',
                                'balance' => '0.00',
                                'created' => 'Nov 13, 2025, 02:05 PM',
                            ],
                            [
                                'id' => '100016',
                                'name' => 'Ali Raza',
                                'email' => 'codlea@gmail.com',
                                'status' => 'active',
                                'balance' => '0.00',
                                'created' => 'Nov 11, 2025, 04:31 PM',
                            ],
                            [
                                'id' => '97916',
                                'name' => 'Hafsa Bashir1',
                                'email' => 'hhafsab345+sqa@gmail.com',
                                'status' => 'active',
                                'balance' => '2.00',
                                'created' => 'Oct 21, 2025, 11:09 AM',
                            ],
                            [
                                'id' => '77589',
                                'name' => 'osiris',
                                'email' => 'info@nexuspayusa.com',
                                'status' => 'active',
                                'balance' => '0.00',
                                'created' => 'Apr 07, 2025, 10:56 PM',
                            ],
                            [
                                'id' => '68776',
                                'name' => 'abc',
                                'email' => 'abc@esimcard.com',
                                'status' => 'active',
                                'balance' => '0.00',
                                'created' => 'Feb 06, 2025, 12:13 PM',
                            ],
                        ];
                    @endphp

                    @foreach ($dealers as $dealer)
                        <tr>
                            <td>{{ $dealer['id'] }}</td>
                            <td>{{ $dealer['name'] }}</td>
                            <td>{{ $dealer['email'] }}</td>
                            <td><span class="status-badge status-{{ $dealer['status'] }}">{{ $dealer['status'] }}</span>
                            </td>
                            <td class="balance">${{ $dealer['balance'] }}</td>
                            <td>{{ $dealer['created'] }}</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-action" title="View">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9 5.25C6.375 5.25 4.125 6.75 3 9c1.125 2.25 3.375 3.75 6 3.75s4.875-1.5 6-3.75c-1.125-2.25-3.375-3.75-6-3.75z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="9" r="1.5" stroke="currentColor"
                                                stroke-width="1.5" />
                                        </svg>
                                    </button>
                                    <button class="btn-action" title="Edit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M12.75 2.25l3 3L6 15H3v-3L12.75 2.25z" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="btn-action" title="Settings">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <circle cx="9" cy="9" r="2" stroke="currentColor"
                                                stroke-width="1.5" />
                                            <path
                                                d="M9 1.5v1.5m0 12v1.5M1.5 9h1.5m12 0h1.5m-2.121-5.121l1.06-1.06M4.06 13.94l1.061-1.061m7.818 0l1.061 1.061M4.06 4.061l1.061 1.061"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
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
    <!-- Add Dealer Modal -->
    <div id="addDealerModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h2 class="modal-title">Add Dealer</h2>
                    <p class="modal-subtitle">You can add dealer here</p>
                </div>
                <button class="btn-close" id="closeModal">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <form id="addDealerForm" class="dealer-form">
                <div class="form-group">
                    <label for="dealerName">Name</label>
                    <input type="text" id="dealerName" name="name" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="dealerEmail">Email</label>
                    <input type="email" id="dealerEmail" name="email" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="dealerPassword">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="dealerPassword" name="password" class="form-input" required>
                        <button type="button" class="btn-toggle-password" data-target="dealerPassword">
                            <svg class="eye-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 6C7.5 6 5.5 7.5 4.5 10c1 2.5 3 4 5.5 4s4.5-1.5 5.5-4c-1-2.5-3-4-5.5-4z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="10" cy="10" r="2" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dealerConfirmPassword">Confirm Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="dealerConfirmPassword" name="confirm_password" class="form-input"
                            required>
                        <button type="button" class="btn-toggle-password" data-target="dealerConfirmPassword">
                            <svg class="eye-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 6C7.5 6 5.5 7.5 4.5 10c1 2.5 3 4 5.5 4s4.5-1.5 5.5-4c-1-2.5-3-4-5.5-4z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="10" cy="10" r="2" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dealerStatus">Status</label>
                    <select id="dealerStatus" name="status" class="form-select" required>
                        <option value="">Select a status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Add Dealer</button>
            </form>
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

    <!-- Add Dealer Modal -->
    <div id="addDealerModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h2 class="modal-title">Add Dealer</h2>
                    <p class="modal-subtitle">You can add dealer here</p>
                </div>
                <button class="btn-close" id="closeModal">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <form id="addDealerForm" class="dealer-form">
                <div class="form-group">
                    <label for="dealerName">Name</label>
                    <input type="text" id="dealerName" name="name" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="dealerEmail">Email</label>
                    <input type="email" id="dealerEmail" name="email" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="dealerPassword">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="dealerPassword" name="password" class="form-input" required>
                        <button type="button" class="btn-toggle-password" data-target="dealerPassword">
                            <svg class="eye-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 6C7.5 6 5.5 7.5 4.5 10c1 2.5 3 4 5.5 4s4.5-1.5 5.5-4c-1-2.5-3-4-5.5-4z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="10" cy="10" r="2" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dealerConfirmPassword">Confirm Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="dealerConfirmPassword" name="confirm_password" class="form-input"
                            required>
                        <button type="button" class="btn-toggle-password" data-target="dealerConfirmPassword">
                            <svg class="eye-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 6C7.5 6 5.5 7.5 4.5 10c1 2.5 3 4 5.5 4s4.5-1.5 5.5-4c-1-2.5-3-4-5.5-4z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="10" cy="10" r="2" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dealerStatus">Status</label>
                    <select id="dealerStatus" name="status" class="form-select" required>
                        <option value="">Select a status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Add Dealer</button>
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

            // Add Dealer Form submission with AJAX
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                const data = {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    password: formData.get('password'),
                    confirm_password: formData.get('confirm_password'),
                    status: formData.get('status'),
                    _token: '{{ csrf_token() }}'
                };

                if (data.password !== data.confirm_password) {
                    alert('Passwords do not match!');
                    return;
                }

                const submitBtn = form.querySelector('.btn-submit');
                submitBtn.disabled = true;
                submitBtn.textContent = 'Adding...';

                fetch('', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.success) {
                            alert('Dealer added successfully!');
                            closeModal();
                            location.reload();
                        } else {
                            alert(result.message || 'Error adding dealer');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Add Dealer';
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
        });
    </script>
@endsection
