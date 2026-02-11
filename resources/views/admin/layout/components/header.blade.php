 <header class="header">
     <div class="header-left">
         <button class="header-icon-btn" id="backBtn">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                 <path fill-rule="evenodd"
                     d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
             </svg>
         </button>

         <button class="header-icon-btn" id="menuToggle">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                 <path fill-rule="evenodd"
                     d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
             </svg>
         </button>

         <div class="balance-badge">
             Your balance is: $13.92
         </div>
     </div>

     @if (Route::is('admin.dashboard'))
         <div class="header-search-wrapper">
             <input type="text" class="header-search-input" placeholder="Search your destination"
                 id="mainSearchInput" readonly>
             <div class="header-search-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                     <path
                         d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                 </svg>
             </div>

         </div>
     @endif
     <!-- Search Modal Backdrop -->
     <div class="search-modal-backdrop" id="searchModalBackdrop">
         <div class="search-modal">
             <button class="modal-close" id="closeModal">×</button>
             <h3>Search your destination</h3>

             <input type="text" class="modal-search-input" placeholder="Enter your destination"
                 id="modalSearchInput">

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


     <div class="header-right">
         <button class="cart-btn" id="openCartBtn">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                 <path
                     d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
             </svg>
             <span class="cart-badge" id="cartBadge">1</span>
         </button>

         <div class="user-menu" id="userMenu">
             <div class="user-avatar">ER</div>
             <div class="user-info">
                 <span class="user-name">eSIM Reseller</span>
                 <span class="user-email">sales@esimcard.com</span>
             </div>
             <div class="dropdown-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                     <path fill-rule="evenodd"
                         d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                 </svg>
             </div>
         </div>

         <div class="theme-dropdown">
             <button class="theme-toggle-btn" id="themeToggle" aria-haspopup="true" aria-expanded="false">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                     <path
                         d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                 </svg>
             </button>

             <div class="theme-menu" id="themeMenu">
                 <button data-theme="system">System</button>
                 <button data-theme="dark">Dark</button>
                 <button data-theme="light">Light</button>
             </div>
         </div>


     </div>
 </header>

 <div class="sheet-backdrop" id="sheetBackdrop"></div>

 <div class="cart-sheet" id="cartSheet">
     <div class="sheet-header">
         <h2 class="sheet-title">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" style="color: white">
                 <path
                     d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
             </svg>
             Review Your Cart
         </h2>
         <button class="sheet-close" id="closeCartBtn">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                 <path
                     d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
             </svg>
         </button>
     </div>

     <div class="sheet-content" id="cartContent">
         <div class="cart-item">
             <div class="cart-item-icon">
                 <img width="100px" src="https://partner.esimcard.com/images/globalMap.svg" alt="">
             </div>
             <div class="cart-item-details">
                 <div class="cart-item-title">Unlimited eSIM Data For 1 Days in Global</div>
                 <div class="cart-item-info">
                     <div class="cart-item-info-row">Data: <span>Unlimited</span></div>
                     <div class="cart-item-info-row">Duration: <span>1 Day</span></div>
                 </div>
                 <div class="cart-item-qty">
                     <button class="cart-item-qty-btn" onclick="updateCartQty(1, -1)">
                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                             viewBox="0 0 16 16">
                             <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                         </svg>
                     </button>
                     <span class="cart-item-qty-value">1</span>
                     <button class="cart-item-qty-btn" onclick="updateCartQty(1, 1)">
                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                             viewBox="0 0 16 16">
                             <path
                                 d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                         </svg>
                     </button>
                 </div>
             </div>
             <div class="cart-item-actions">
                 <div class="cart-item-price">$11.37</div>

                 <button class="cart-item-remove" onclick="removeCartItem(1)">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                         <path
                             d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                         <path
                             d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                     </svg>
                 </button>
             </div>
         </div>
     </div>

     <div class="sheet-footer">
         <div class="subtotal-row">
             <span class="subtotal-label">Sub Total</span>
             <span class="subtotal-value" id="subtotalValue">$11.37</span>
         </div>

         <button class="purchase-btn">
             Purchase Now
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                 <path fill-rule="evenodd"
                     d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
             </svg>
         </button>

         <button class="continue-shopping-btn" id="continueShoppingBtn">
             Continue Shopping
         </button>
     </div>


 </div>
