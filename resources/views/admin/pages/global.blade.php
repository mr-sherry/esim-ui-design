@extends('admin.layout.layout')

@section('content')
    <div class="plan-modal-backdrop" id="planModalBackdrop">
        <div class="plan-modal">
            <button class="plan-modal-close" id="closePlanModal">×</button>
            <h2 class="plan-modal-title" id="modalPlanTitle">eSIM, 1 GB, 7 Days, Global (Lite), Unthrottled</h2>

            <div class="plan-specs-grid">
                <div class="plan-spec-item">
                    <div class="spec-label">
                        <svg xmlns="http://www.w3.org/2000/svg" class="spec-icon" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.5 10a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5V8H5.5zM5 7h6V4.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5z" />
                        </svg>
                        <span>Data</span>
                    </div>
                    <div class="spec-value" id="modalData">1 GB</div>
                </div>

                <div class="plan-spec-item">
                    <div class="spec-label">
                        <svg xmlns="http://www.w3.org/2000/svg" class="spec-icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>Validity</span>
                    </div>
                    <div class="spec-value" id="modalValidity">7 Days</div>
                </div>

                <div class="plan-spec-item">
                    <div class="spec-label">
                        <svg xmlns="http://www.w3.org/2000/svg" class="spec-icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                        </svg>
                        <span>Speed Limit</span>
                    </div>
                    <div class="spec-value" id="modalSpeed">No</div>
                </div>

                <div class="plan-spec-item">
                    <div class="spec-label">
                        <svg xmlns="http://www.w3.org/2000/svg" class="spec-icon" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg>
                        <span>Tethering/Hotspot</span>
                    </div>
                    <div class="spec-value" id="modalTethering">Yes</div>
                </div>
            </div>

            <div class="countries-section">
                <div class="section-header">
                    <h3 class="section-title">Supported Countries & Networks</h3>
                    <div class="country-search-wrapper">
                        <input type="text" class="country-search-input" placeholder="Search country or network"
                            id="countrySearchInput">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="country-search-icon" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </div>
                </div>

                <div class="countries-list" id="countriesList">
                    <div class="country-network-item">
                        <div class="country-name">Albania</div>
                        <div class="network-providers">
                            <div class="network-provider">
                                <span class="provider-name">TELEKOM ALBANIA</span>
                                <div class="network-badges">
                                    <span class="network-badge">2G</span>
                                    <span class="network-badge">3G</span>
                                    <span class="network-badge">4G</span>
                                </div>
                            </div>
                            <div class="network-provider">
                                <span class="provider-name">Vodafone Albania</span>
                                <div class="network-badges">
                                    <span class="network-badge">2G</span>
                                    <span class="network-badge">3G</span>
                                    <span class="network-badge">4G</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-network-item">
                        <div class="country-name">Algeria</div>
                        <div class="network-providers">
                            <div class="network-provider">
                                <span class="provider-name">Orascom Algeria</span>
                                <div class="network-badges">
                                    <span class="network-badge">2G</span>
                                    <span class="network-badge">3G</span>
                                    <span class="network-badge">4G</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-network-item">
                        <div class="country-name">Andorra</div>
                        <div class="network-providers">
                            <div class="network-provider">
                                <span class="provider-name">Andorra Telecom</span>
                                <div class="network-badges">
                                    <span class="network-badge">2G</span>
                                    <span class="network-badge">3G</span>
                                    <span class="network-badge">4G</span>
                                    <span class="network-badge">5G</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="country-network-item">
                        <div class="country-name">Argentina</div>
                        <div class="network-providers">
                            <div class="network-provider">
                                <span class="provider-name">Movistar Argentina</span>
                                <div class="network-badges">
                                    <span class="network-badge">2G</span>
                                    <span class="network-badge">3G</span>
                                    <span class="network-badge">4G</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-info-box">
                <ul>
                    <li>eSim will be activated when first byte of data is consumed</li>
                    <li>If eSIM is not activated within 90 days, it will auto-activate and the plan validity will start</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container main-div">
        <div class="page-header">
            <h1 class="page-title">Pick the Best eSIM Plans for Global Travel</h1>

            <div class="filter-section">
                <div class="plan-type-tabs">
                    <button class="plan-type-btn active" data-type="data-only">Data Only</button>
                    <button class="plan-type-btn" data-type="data-call-sms">Data+Call+SMS</button>
                </div>

                <button class="filter-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                    </svg>
                    Filter Packages
                </button>
            </div>
        </div>

        <div class="plans-grid">
            <div class="plan-card" data-plan-id="1" data-plan-type="data-only">
                <div class="mt-5">
                    <div class="plan-badge">
                        <span class="unlimited-icon">∞</span>
                        <span>Unlimited Data</span>
                    </div>
                    <div class="plan-price">
                        $11.37 <span class="currency">USD</span>
                    </div>

                    <div class="plan-validity">
                        <select class="validity-dropdown">
                            <option value="1">1 Day</option>
                            <option value="7">7 Days</option>
                            <option value="30">30 Days</option>
                        </select>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/no.png" alt="Norway" class="country-flag">
                            <img src="https://flagcdn.com/w40/ch.png" alt="Switzerland" class="country-flag">
                            <img src="https://flagcdn.com/w40/af.png" alt="Afghanistan" class="country-flag">
                        </div>
                        <span class="country-count">+103</span>
                    </div>
                </div>

                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card selected" data-plan-id="2">
                <div class="mt-5">
                    <div class="plan-data">1 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>7 Days</span>
                    </div>
                    <div class="plan-price">
                        $3.35 <span class="currency">USD</span>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/hk.png" alt="Hong Kong" class="country-flag">
                            <img src="https://flagcdn.com/w40/af.png" alt="Afghanistan" class="country-flag">
                            <img src="https://flagcdn.com/w40/bd.png" alt="Bangladesh" class="country-flag">
                        </div>
                        <span class="country-count">+98</span>
                    </div>

                </div>
                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card" data-plan-id="3" data-plan-type="data-only">
                <div class="mt-5">
                    <div class="plan-data">1 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>30 Days</span>
                    </div>
                    <div class="plan-price">
                        $7.09 <span class="currency">USD</span>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/pt.png" alt="Portugal" class="country-flag">
                            <img src="https://flagcdn.com/w40/af.png" alt="Afghanistan" class="country-flag">
                            <img src="https://flagcdn.com/w40/bd.png" alt="Bangladesh" class="country-flag">
                        </div>
                        <span class="country-count">+145</span>
                    </div>
                </div>
                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card" data-plan-id="4" data-plan-type="data-only">
                <div class="mt-5">
                    <div class="plan-data">1 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>365 Days</span>
                    </div>
                    <div class="plan-price">
                        $7.31 <span class="currency">USD</span>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/pt.png" alt="Portugal" class="country-flag">
                            <img src="https://flagcdn.com/w40/af.png" alt="Afghanistan" class="country-flag">
                            <img src="https://flagcdn.com/w40/bd.png" alt="Bangladesh" class="country-flag">
                        </div>
                        <span class="country-count">+145</span>
                    </div>
                </div>
                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card" data-plan-id="5" data-plan-type="data-only">
                <div class="mt-5">
                    <div class="plan-data">3 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>30 Days</span>
                    </div>
                    <div class="plan-price">
                        $9.47 <span class="currency">USD</span>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/hk.png" alt="Hong Kong" class="country-flag">
                            <img src="https://flagcdn.com/w40/fr.png" alt="France" class="country-flag">
                            <img src="https://flagcdn.com/w40/bd.png" alt="Bangladesh" class="country-flag">
                        </div>
                        <span class="country-count">+98</span>
                    </div>
                </div>
                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>


            <div class="plan-card   selected" data-plan-id="6" data-plan-type="data-call-sms" style="display: none;">

                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Orange_logo.svg/200px-Orange_logo.svg.png"
                    alt="Orange" class="carrier-logo">

                <div class="mt-5">
                    <div class="plan-data">20 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>31 Days</span>
                    </div>
                    <div class="plan-price">
                        $17.84 <span class="currency">USD</span>
                    </div>

                    <div class="plan-features">
                        <div class="plan-feature calls">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <span>15 Minutes</span>
                        </div>
                        <div class="plan-feature sms">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg>
                            <span>50 SMS</span>
                        </div>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/no.png" alt="Norway" class="country-flag">
                            <img src="https://flagcdn.com/w40/ch.png" alt="Switzerland" class="country-flag">
                            <img src="https://flagcdn.com/w40/af.png" alt="Afghanistan" class="country-flag">
                        </div>
                        <span class="country-count">+102</span>
                    </div>
                </div>

                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card " data-plan-id="7" data-plan-type="data-call-sms" style="display: none;">
                <div class="network-type-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4.5 11.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5" />
                    </svg>
                    5G
                </div>

                <div class="mt-5">
                    <div class="plan-data">35 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>30 Days</span>
                    </div>
                    <div class="plan-price">
                        $23.1 <span class="currency">USD</span>
                    </div>

                    <div class="plan-features">
                        <div class="plan-feature calls">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <span>Unlimited Minutes</span>
                        </div>
                        <div class="plan-feature sms">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg>
                            <span class="plan-feature-text">Incoming Only</span>
                        </div>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/pl.png" alt="Poland" class="country-flag">
                            <img src="https://flagcdn.com/w40/ro.png" alt="Romania" class="country-flag">
                            <img src="https://flagcdn.com/w40/bg.png" alt="Bulgaria" class="country-flag">
                        </div>
                        <span class="country-count">+39</span>
                    </div>
                </div>

                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>

            <div class="plan-card " data-plan-id="8" data-plan-type="data-call-sms" style="display: none;">
                <div class="network-type-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4.5 11.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5" />
                    </svg>
                    5G
                </div>

                <div class="mt-5">
                    <div class="plan-data">25 GB</div>
                    <div class="plan-duration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                        </svg>
                        <span>30 Days</span>
                    </div>
                    <div class="plan-price">
                        $34.29 <span class="currency">USD</span>
                    </div>

                    <div class="plan-features">
                        <div class="plan-feature calls">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg>
                            <span>Unlimited Minutes</span>
                        </div>
                        <div class="plan-feature sms">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg>
                            <span class="plan-feature-text">Incoming Only</span>
                        </div>
                    </div>

                    <div class="plan-countries">
                        <svg xmlns="http://www.w3.org/2000/svg" class="globe-icon" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.0 7.0 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h3.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                        <div class="country-flags">
                            <img src="https://flagcdn.com/w40/hk.png" alt="Hong Kong" class="country-flag">
                            <img src="https://flagcdn.com/w40/kr.png" alt="South Korea" class="country-flag">
                            <img src="https://flagcdn.com/w40/ua.png" alt="Ukraine" class="country-flag">
                        </div>
                        <span class="country-count">+63</span>
                    </div>
                </div>

                <button class="view-details-btn">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="cart-actions">
            <div class="quantity-selector">
                <button class="quantity-btn" id="decreaseQty" aria-label="Decrease quantity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                    </svg>
                </button>
                <span class="quantity-value" id="quantityValue">1</span>
                <button class="quantity-btn" id="increaseQty" aria-label="Increase quantity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </button>
            </div>

            <button class="add-to-cart-btn" id="addToCartBtn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                    <path
                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                </svg>
                Add To Cart
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const planModalBackdrop = document.getElementById('planModalBackdrop');
            const closePlanModal = document.getElementById('closePlanModal');

            // Plan card selection
            const planCards = document.querySelectorAll('.plan-card');

            planCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    // Don't trigger selection if clicking on dropdown or view details button
                    if (e.target.closest('.validity-dropdown') || e.target.closest(
                            '.view-details-btn')) {
                        return;
                    }

                    // Remove selected class from all cards
                    planCards.forEach(c => c.classList.remove('selected'));

                    // Add selected class to clicked card
                    this.classList.add('selected');

                    const planId = this.dataset.planId;
                    console.log('Selected plan:', planId);
                });
            });

            // Plan type tabs
            const planTypeBtns = document.querySelectorAll('.plan-type-btn');

            planTypeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    planTypeBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const planType = this.dataset.type;
                    console.log('Plan type:', planType);

                    const allCards = document.querySelectorAll('.plan-card');

                    allCards.forEach(card => {
                        const cardType = card.dataset.planType;

                        if (planType === 'data-only') {
                            // Show only data-only cards
                            if (cardType === 'data-only' || !cardType) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        } else if (planType === 'data-call-sms') {
                            // Show only data-call-sms cards
                            if (cardType === 'data-call-sms') {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });

            const validityDropdowns = document.querySelectorAll('.validity-dropdown');

            validityDropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function(e) {
                    e.stopPropagation();
                });

                dropdown.addEventListener('change', function(e) {
                    e.stopPropagation();
                    console.log('Validity changed:', this.value);
                });
            });

            const viewDetailsBtns = document.querySelectorAll('.view-details-btn');

            viewDetailsBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const card = this.closest('.plan-card');
                    const planId = card.dataset.planId;

                    const data = card.querySelector('.plan-data')?.textContent || card
                        .querySelector('.plan-badge')?.textContent || 'Unlimited Data';
                    const duration = card.querySelector('.plan-duration span')?.textContent ||
                        '1 Day';

                    document.getElementById('modalPlanTitle').textContent =
                        `eSIM, ${data}, ${duration}, Global (Lite), Unthrottled`;
                    document.getElementById('modalData').textContent = data;
                    document.getElementById('modalValidity').textContent = duration;

                    planModalBackdrop.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });

            closePlanModal.addEventListener('click', function() {
                planModalBackdrop.classList.remove('active');
                document.body.style.overflow = '';
            });

            planModalBackdrop.addEventListener('click', function(e) {
                if (e.target === planModalBackdrop) {
                    planModalBackdrop.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && planModalBackdrop.classList.contains('active')) {
                    planModalBackdrop.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });

            const countrySearchInput = document.getElementById('countrySearchInput');
            const countriesList = document.getElementById('countriesList');

            if (countrySearchInput) {
                countrySearchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    const countryItems = countriesList.querySelectorAll('.country-network-item');

                    countryItems.forEach(item => {
                        const countryName = item.querySelector('.country-name').textContent
                            .toLowerCase();
                        const providerNames = Array.from(item.querySelectorAll('.provider-name'))
                            .map(p => p.textContent.toLowerCase())
                            .join(' ');

                        if (countryName.includes(searchTerm) || providerNames.includes(
                                searchTerm)) {
                            item.style.display = '';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            }

            const decreaseBtn = document.getElementById('decreaseQty');
            const increaseBtn = document.getElementById('increaseQty');
            const quantityValue = document.getElementById('quantityValue');
            const addToCartBtn = document.getElementById('addToCartBtn');

            let quantity = 1;
            const minQuantity = 1;
            const maxQuantity = 5;

            function updateButtons() {
                decreaseBtn.disabled = quantity <= minQuantity;
                increaseBtn.disabled = quantity >= maxQuantity;
            }

            decreaseBtn.addEventListener('click', function() {
                if (quantity > minQuantity) {
                    quantity--;
                    quantityValue.textContent = quantity;
                    updateButtons();
                }
            });

            increaseBtn.addEventListener('click', function() {
                if (quantity < maxQuantity) {
                    quantity++;
                    quantityValue.textContent = quantity;
                    updateButtons();
                }
            });

            addToCartBtn.addEventListener('click', function() {
                const selectedCard = document.querySelector('.plan-card.selected');

                if (!selectedCard) {
                    alert('Please select a plan first');
                    return;
                }

                const planId = selectedCard.dataset.planId;
                const planData = selectedCard.querySelector('.plan-data')?.textContent ||
                    selectedCard.querySelector('.plan-badge')?.textContent ||
                    'Unlimited Data';
                const planDuration = selectedCard.querySelector('.plan-duration span')?.textContent ||
                    '1 Day';
                const planPrice = selectedCard.querySelector('.plan-price')?.textContent?.trim() || '';

                const cartItem = {
                    planId: planId,
                    data: planData,
                    duration: planDuration,
                    price: planPrice,
                    quantity: quantity
                };

                console.log('Adding to cart:', cartItem);


                const originalText = addToCartBtn.innerHTML;
                addToCartBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
            </svg>
            Added to Cart!
        `;
                addToCartBtn.style.background = 'linear-gradient(135deg, #16a085 0%, #1abc9c 100%)';

                setTimeout(() => {
                    addToCartBtn.innerHTML = originalText;
                    addToCartBtn.style.background = '';
                }, 2000);


            });


            updateButtons();

        });
    </script>
@endsection
