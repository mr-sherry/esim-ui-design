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
                        <a class="nav-link" href="#">Local</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Regional</a>
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

    <div class="container regions-grid">
        <div class="row g-4">
            <!-- Africa -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&auto=format&fit=crop"
                        alt="Africa" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>Africa</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Asia -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=800&auto=format&fit=crop"
                        alt="Asia" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>Asia</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Caribbean -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800&auto=format&fit=crop"
                        alt="Caribbean" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>Caribbean</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Europe -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?w=800&auto=format&fit=crop"
                        alt="Europe" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>Europe</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- GCC Middle East -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&auto=format&fit=crop"
                        alt="GCC Middle East" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>GCC Middle East</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Middle East -->
            <div class="col-lg-4 col-md-6">
                <div class="region-card">
                    <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=800&auto=format&fit=crop"
                        alt="Middle East" class="region-card-bg">
                    <div class="region-info">
                        <div class="region-details">
                            <h5>Middle East</h5>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="region-arrow bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
