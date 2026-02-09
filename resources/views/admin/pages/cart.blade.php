@extends('admin.layout.layout')

@section('content')
    <button class="cart-icon-btn" id="openCartBtn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
        </svg>
        <span class="cart-badge" id="cartBadge">1</span>
    </button>

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

    <div class="container" style="padding: 2rem;">
        <h1 style="color: var(--text-primary); margin-bottom: 2rem;">Header</h1>

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

            // Event listeners
            openCartBtn.addEventListener('click', openCart);
            closeCartBtn.addEventListener('click', closeCart);
            continueShoppingBtn.addEventListener('click', closeCart);

            // Close on backdrop click
            sheetBackdrop.addEventListener('click', closeCart);

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && cartSheet.classList.contains('active')) {
                    closeCart();
                }
            });
        });

        // Update cart item quantity
        function updateCartQty(itemId, change) {
            const qtyElement = event.target.closest('.cart-item-qty').querySelector('.cart-item-qty-value');
            let currentQty = parseInt(qtyElement.textContent);
            let newQty = currentQty + change;

            if (newQty < 1) newQty = 1;
            if (newQty > 10) newQty = 10;

            qtyElement.textContent = newQty;

            // Update subtotal
            updateSubtotal();

            console.log('Updated quantity for item', itemId, 'to', newQty);
        }

        // Remove cart item
        function removeCartItem(itemId) {
            if (confirm('Remove this item from cart?')) {
                event.target.closest('.cart-item').remove();

                // Update badge and subtotal
                updateCartBadge();
                updateSubtotal();

                // Check if cart is empty
                checkEmptyCart();

                console.log('Removed item', itemId);
            }
        }

        // Update cart badge
        function updateCartBadge() {
            const cartItems = document.querySelectorAll('.cart-item');
            const badge = document.getElementById('cartBadge');
            badge.textContent = cartItems.length;

            if (cartItems.length === 0) {
                badge.style.display = 'none';
            } else {
                badge.style.display = 'flex';
            }
        }

        // Update subtotal
        function updateSubtotal() {
            // This is a simple example - in real implementation, calculate from cart items
            const subtotalElement = document.getElementById('subtotalValue');
            const cartItems = document.querySelectorAll('.cart-item');

            let total = 0;
            cartItems.forEach(item => {
                const price = parseFloat(item.querySelector('.cart-item-price').textContent.replace('$', ''));
                const qty = parseInt(item.querySelector('.cart-item-qty-value').textContent);
                total += price * qty;
            });

            subtotalElement.textContent = '$' + total.toFixed(2);
        }

        // Check if cart is empty
        function checkEmptyCart() {
            const cartContent = document.getElementById('cartContent');
            const cartItems = document.querySelectorAll('.cart-item');

            if (cartItems.length === 0) {
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
@endsection
