@extends('admin.layout.layout')



@section('content')
    <!-- Search Modal Backdrop -->
    <div class="search-modal-backdrop" id="searchModalBackdrop">
        <div class="search-modal">
            <button class="modal-close" id="closeModal">×</button>
            <h3>Search your destination</h3>

            <input type="text" class="modal-search-input" placeholder="Enter your destination" id="modalSearchInput">

            <div class="top-destinations">
                <h4>Top Destinations</h4>
                <div class="destinations-list">
                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/ae.png" alt="UAE" class="destination-flag">
                            <p class="destination-name">United Arab Emirates</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/gr.png" alt="Greece" class="destination-flag">
                            <p class="destination-name">Greece</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/gb.png" alt="UK" class="destination-flag">
                            <p class="destination-name">United Kingdom</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/fr.png" alt="France" class="destination-flag">
                            <p class="destination-name">France</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/it.png" alt="Italy" class="destination-flag">
                            <p class="destination-name">Italy</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/es.png" alt="Spain" class="destination-flag">
                            <p class="destination-name">Spain</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/us.png" alt="USA" class="destination-flag">
                            <p class="destination-name">United States</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>

                    <div class="destination-item">
                        <div class="destination-left">
                            <img src="https://flagcdn.com/w80/au.png" alt="Australia" class="destination-flag">
                            <p class="destination-name">Australia</p>
                        </div>
                        <span class="destination-arrow">›</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-nav">
        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Local</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Regional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Global</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <div class="search-wrapper">
                    <input type="text" class="form-control search-input" placeholder="Search your destination"
                        id="mainSearchInput" readonly>
                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg></span>
                </div>

                <div class="data-type-tabs">
                    <button class="data-type-btn active">Data Only</button>
                    <button class="data-type-btn">Data Voice</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container countries-grid">
        <div class="row g-4">



            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="country-card">
                    <div class="country-info">
                        <img src="https://flagcdn.com/w80/at.png" alt="Austria" class="flag-icon">
                        <div class="country-details">
                            <h5>Austria</h5>
                            <p>Starts at $1.35</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="text-white" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="country-card">
                    <div class="country-info">
                        <img src="https://flagcdn.com/w80/az.png" alt="Azerbaijan" class="flag-icon">
                        <div class="country-details">
                            <h5>Azerbaijan</h5>
                            <p>Starts at $3.14</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="text-white" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="country-card">
                    <div class="country-info">
                        <img src="https://flagcdn.com/w80/bs.png" alt="Bahamas" class="flag-icon">
                        <div class="country-details">
                            <h5>Bahamas</h5>
                            <p>Starts at $5.90</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="text-white" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="country-card">
                    <div class="country-info">
                        <img src="https://flagcdn.com/w80/bh.png" alt="Bahrain" class="flag-icon">
                        <div class="country-details">
                            <h5>Bahrain</h5>
                            <p>Starts at $4.02</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="text-white" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </div>
            </div>


        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mainSearchInput = document.getElementById('mainSearchInput');
                const searchModalBackdrop = document.getElementById('searchModalBackdrop');
                const closeModal = document.getElementById('closeModal');
                const modalSearchInput = document.getElementById('modalSearchInput');

                mainSearchInput.addEventListener('click', function() {
                    searchModalBackdrop.classList.add('active');
                    setTimeout(() => {
                        modalSearchInput.focus();
                    }, 100);
                });

                closeModal.addEventListener('click', function() {
                    searchModalBackdrop.classList.remove('active');
                });

                searchModalBackdrop.addEventListener('click', function(e) {
                    if (e.target === searchModalBackdrop) {
                        searchModalBackdrop.classList.remove('active');
                    }
                });

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && searchModalBackdrop.classList.contains('active')) {
                        searchModalBackdrop.classList.remove('active');
                    }
                });

                const destinationItems = document.querySelectorAll('.destination-item');
                destinationItems.forEach(item => {
                    item.addEventListener('click', function() {
                        const countryName = this.querySelector('.destination-name').textContent;
                        console.log('Selected:', countryName);
                        searchModalBackdrop.classList.remove('active');
                    });
                });
            });
        </script>
    </div>
@endsection
