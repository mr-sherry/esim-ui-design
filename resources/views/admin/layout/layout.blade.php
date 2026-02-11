<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>

<body>
    <div class="d-flex">
        <div style="width:280px">
            @include('admin.layout.components.sidebar')
        </div>
        <main class="main-div-2" style="width: calc(100% - 280px)">
            @include('admin.layout.components.header')
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openCartBtn = document.getElementById('openCartBtn');
            const closeCartBtn = document.getElementById('closeCartBtn');
            const continueShoppingBtn = document.getElementById('continueShoppingBtn');
            const sheetBackdrop = document.getElementById('sheetBackdrop');
            const cartSheet = document.getElementById('cartSheet');

            // Open cart sheet
            function openCart() {
                sheetBackdrop.classList.add('active');
                cartSheet.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            // Close cart sheet
            function closeCart() {
                sheetBackdrop.classList.remove('active');
                cartSheet.classList.remove('active');
                document.body.style.overflow = '';
            }

            // Event listeners - Header cart button
            if (openCartBtn) {
                openCartBtn.addEventListener('click', openCart);
            }

            if (closeCartBtn) {
                closeCartBtn.addEventListener('click', closeCart);
            }

            if (continueShoppingBtn) {
                continueShoppingBtn.addEventListener('click', closeCart);
            }

            // Close on backdrop click
            if (sheetBackdrop) {
                sheetBackdrop.addEventListener('click', closeCart);
            }

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && cartSheet.classList.contains('active')) {
                    closeCart();
                }
            });

            // Header functionality
            const backBtn = document.getElementById('backBtn');
            if (backBtn) {
                backBtn.addEventListener('click', function() {
                    window.history.back();
                });
            }

            const menuToggle = document.getElementById('menuToggle');
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    // Add your sidebar toggle logic here
                    console.log('Menu toggle clicked');
                });
            }

            const userMenu = document.getElementById('userMenu');
            if (userMenu) {
                userMenu.addEventListener('click', function() {
                    // Add your user dropdown logic here
                    console.log('User menu clicked');
                });
            }

            const themeToggle = document.getElementById('themeToggle');
            if (themeToggle) {
                themeToggle.addEventListener('click', function() {
                    // Add your theme toggle logic here
                    console.log('Theme toggle clicked');
                });
            }
        });

        // Update cart item quantity
        function updateCartQty(itemId, change) {
            const qtyElement = event.target.closest('.cart-item-qty').querySelector('.cart-item-qty-value');
            let currentQty = parseInt(qtyElement.textContent);
            let newQty = currentQty + change;

            if (newQty < 1) newQty = 1;
            if (newQty > 10) newQty = 10;

            qtyElement.textContent = newQty;
            updateSubtotal();
        }

        // Remove cart item
        function removeCartItem(itemId) {
            if (confirm('Remove this item from cart?')) {
                event.target.closest('.cart-item').remove();
                updateCartBadge();
                updateSubtotal();
                checkEmptyCart();
            }
        }

        // Update cart badge
        function updateCartBadge() {
            const cartItems = document.querySelectorAll('.cart-item');
            const badge = document.getElementById('cartBadge');
            if (badge) {
                badge.textContent = cartItems.length;
                badge.style.display = cartItems.length === 0 ? 'none' : 'flex';
            }
        }

        // Update subtotal
        function updateSubtotal() {
            const subtotalElement = document.getElementById('subtotalValue');
            const cartItems = document.querySelectorAll('.cart-item');

            let total = 0;
            cartItems.forEach(item => {
                const price = parseFloat(item.querySelector('.cart-item-price').textContent.replace('$', ''));
                const qty = parseInt(item.querySelector('.cart-item-qty-value').textContent);
                total += price * qty;
            });

            if (subtotalElement) {
                subtotalElement.textContent = '$' + total.toFixed(2);
            }
        }

        // Check if cart is empty
        function checkEmptyCart() {
            const cartContent = document.getElementById('cartContent');
            const cartItems = document.querySelectorAll('.cart-item');

            if (cartItems.length === 0 && cartContent) {
                cartContent.innerHTML = `
                <div class="empty-cart">
                    <svg class="empty-cart-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    <p class="empty-cart-text">Your cart is empty</p>
                </div>
            `;
            }
        }
    </script>

    <script>
        const root = document.documentElement;
        const toggleBtn = document.getElementById("themeToggle");
        const menu = document.getElementById("themeMenu");

        const applyTheme = (theme) => {
            root.classList.remove("light");

            if (theme === "light") {
                root.classList.add("light");
            }

            if (theme === "system") {
                if (window.matchMedia("(prefers-color-scheme: light)").matches) {
                    root.classList.add("light");
                }
            }
        };

        // Load saved theme
        const savedTheme = localStorage.getItem("theme") || "system";
        applyTheme(savedTheme);

        // Toggle dropdown
        toggleBtn.addEventListener("click", () => {
            toggleBtn.parentElement.classList.toggle("open");
        });

        // Handle menu clicks
        menu.addEventListener("click", (e) => {
            const btn = e.target.closest("button");
            if (!btn) return;

            const theme = btn.dataset.theme;
            localStorage.setItem("theme", theme);
            applyTheme(theme);

            toggleBtn.parentElement.classList.remove("open");
        });

        // Close when clicking outside
        document.addEventListener("click", (e) => {
            if (!toggleBtn.parentElement.contains(e.target)) {
                toggleBtn.parentElement.classList.remove("open");
            }
        });

        // Listen for system changes
        window
            .matchMedia("(prefers-color-scheme: light)")
            .addEventListener("change", (e) => {
                if (localStorage.getItem("theme") === "system") {
                    root.classList.toggle("light", e.matches);
                }
            });
    </script>


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




</body>

</html>
