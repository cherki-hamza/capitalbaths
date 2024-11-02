    // Function to initialize cart display on page load
    function initializeCartDisplay() {
        // Get existing cart from localStorage
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        // Update cart display
        updateCartDisplay(cart);
    }

    // Start product to cart
    document.querySelector('#add_to_cart').addEventListener('click', function(e) {
        e.preventDefault();

        // Get product details
        const productId = parseInt(document.querySelector('.product_id').dataset.id);
        const productName = document.querySelector('.product_name').dataset.name;
        const productSlug = document.querySelector('.product_slug').dataset.slug;
        const productPrice = parseFloat(document.querySelector('.product_price').dataset.price);
        const productImage = document.querySelector('.product_image').src;

        // Get the quantity from the input field
        const quantityInput = document.querySelector('#product_quantity');
        const productQuantity = parseInt(quantityInput.value) || 1; // Default to 1 if input is not a valid number

        // Get existing cart from localStorage or initialize an empty array
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

        // Check if the product already exists in the cart
        const existingProductIndex = cart.findIndex(item => item.id === productId);

        if (existingProductIndex > -1) {
            // If product exists, increase the quantity and update price
            cart[existingProductIndex].quantity += productQuantity; // Update quantity
            cart[existingProductIndex].price += productPrice * productQuantity; // Update total price for this product
        } else {
            // If product doesn't exist, create a new product object with quantity
            const product = {
                id: productId,
                name: productName,
                slug: productSlug,
                price: productPrice * productQuantity, // Set total price for the initial quantity
                image: productImage,
                quantity: productQuantity // Initialize quantity
            };
            cart.push(product);
        }

        // Save updated cart back to localStorage
        localStorage.setItem('shoppingCart', JSON.stringify(cart));

        // Update cart display
        updateCartDisplay(cart);
        alert('Product added to cart! ' + productName);
        console.table(cart);
    });

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
                const productLink = `/shop/product/${item.id}/${item.slug}`;
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    <a href="${productLink}">
                        <figure><img src="${item.image}" alt="${item.name}" width="50" height="50"></figure>
                        <strong><span>${item.quantity}x ${item.name}</span>${item.price} AED</strong>
                    </a>
                `;
                cartList.appendChild(listItem);

                total += item.price; // Update total price
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

    // Initialize cart display on page load
    initializeCartDisplay();
