<!-- COMMON SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.7.1.js"
integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!-- Bootstrap JS (Optional for responsive features) -->


<script src="{{ asset('assets/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
@yield('video_script')
<script src="{{ asset('assets/js/capitalbaths.js') }}"></script>

{{-- script for cart  --}}
<script src="{{ asset('assets/js/cart.js') }}"></script>

<script>
    // Function to initialize cart display on page load
    function initializeCartDisplay() {
        // Get existing cart from localStorage
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        // Update cart display
        updateCartDisplay(cart);
    }

    // Function to update cart display
    function updateCartDisplay(cart) {
        const cartList = document.querySelector('.dropdown-menu ul');
        const emptyMessage = document.querySelector('.empty-cart-message'); // Reference to the empty message element
        cartList.innerHTML = ''; // Clear existing cart items
        let total = 0; // Initialize total

        if (cart.length === 0) {
            // If the cart is empty, display the empty message
            if (emptyMessage) {
                emptyMessage.style.display = 'block'; // Show the empty message
            }
        } else {
            // Hide the empty message if cart is not empty
            if (emptyMessage) {
                emptyMessage.style.display = 'none'; // Hide the empty message
            }

            cart.forEach(item => {
                const listItem = document.createElement('li');
                // Construct the link dynamically as a JavaScript string

                const productLink = `/shop/product/${item.id}/${item.slug}`;
                listItem.innerHTML = `
                  <a href="${productLink}">
                        <figure><img src="${item.image}" alt="${item.name}" width="50" height="50"></figure>
                        <strong><span>${item.quantity}x ${item.name}</span>${(item.price * item.quantity)} AED</strong>
                    </a>
                `;
                cartList.appendChild(listItem);

                total += item.price * item.quantity; // Update total price
            });

            // Update total price in cart
            const totalDrop = document.querySelector('.total_drop .clearfix');
            if (totalDrop) {
                totalDrop.innerHTML = `<strong>Total</strong><span>${total} <span>AED</span></span>`;
            }

            // Update cart count in cart button
            const cartCount = document.querySelector('.cart_bt strong');
            if (cartCount) {
                cartCount.textContent = cart.reduce((acc, item) => acc + item.quantity, 0); // Update cart item count based on quantity
            }
        }
    }

    // Event listener for remove item action
    document.querySelector('.dropdown-menu').addEventListener('click', function(e) {
        if (e.target.closest('.action')) {
            const productId = e.target.closest('.action').dataset.id;
            removeFromCart(productId);
        }
    });

    // Function to remove item from cart
    function removeFromCart(productId) {
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        cart = cart.filter(item => item.id !== productId); // Filter out the item to remove
        localStorage.setItem('shoppingCart', JSON.stringify(cart)); // Save updated cart
        updateCartDisplay(cart); // Refresh display
    }

    // Initialize cart display on page load
    initializeCartDisplay();
</script>


{{-- add custom script --}}
@yield('script')
