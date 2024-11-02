@extends('frontend.layouts.master')

@section('title','Shopping Cart page')

@section('style')
   <link href="{{ asset('assets/css/cart.css') }}" rel="stylesheet">
   <style>
    .box_cart ul li span {
      float: left;
      margin-left: 10px
    }
   </style>
@endsection

@section('content')
	@include('frontend.inc.top_header')
	<div id="page">
		@include('frontend.inc.menu')

		<div class="container my-2">
			<main class="bg_gray">
				<div class="container margin_30">
					<div class="page_header">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Capitalbaths</a></li>
								<li>Cart</li>
							</ul>
						</div>
						<h1>Cart page</h1>
					</div>

					<table class="table table-striped cart-list">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Subtotal</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="cart-items"></tbody> <!-- Cart items will be dynamically inserted here -->
					</table>
				</div>

				<div class="box_cart">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-xl-4 col-lg-4 col-md-6">
								<ul>
									<li style="display: none"><span>Subtotal</span> <span id="cart-subtotal">0.00</span> AED</li>
									<li><span></span></li>
									<li><span>Total</span> <span id="cart-total">0.00</span> AED</li>
								</ul>
								<a href="{{ route('checkout_page') }}" class="btn_1 full-width cart">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
@endsection

@section('script')
<script>
    // Fetch cart data from localStorage and populate the cart
    function loadCartItems() {
        const cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        const cartItemsContainer = document.getElementById('cart-items');
        let subtotal = 0;

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = `<tr><td colspan="5" class="text-center">Your cart is empty</td></tr>`;
        } else {
            cartItemsContainer.innerHTML = ''; // Clear previous items
            cart.forEach(item => {
                const productLink = `/shop/product/${item.id}/${item.slug}`;
                const itemSubtotal = item.price * item.quantity;
                subtotal += itemSubtotal;

                const row = `
                    <tr>
                        <td>
                            <div class="thumb_cart">
                                <a href="${productLink}">
                                <img src="${item.image}" class="lazy" alt="Image">
                                </a>
                            </div>
                            <span class="item_cart"> <a href="${productLink}">${item.name}</a></span>
                        </td>
                        <td><strong>${item.price.toFixed(2)} <span>AED</span></strong></td>
                        <td>
                            <div class="numbers-row">
                                <input type="text" value="${item.quantity}" data-id="${item.id}" class="qty2" name="quantity_${item.id}" readonly>
                                <div class="inc button_inc" onclick="changeQuantity(${item.id}, 1)">+</div>
                                <div class="dec button_inc" onclick="changeQuantity(${item.id}, -1)">-</div>
                            </div>
                        </td>
                        <td><strong>${itemSubtotal.toFixed(2)} <span>AED</span></strong></td>
                        <td class="options">
                            <a href="javascript:void(0);" onclick="removeItem(${item.id})"><i class="ti-trash"></i></a>
                        </td>
                    </tr>`;

                cartItemsContainer.insertAdjacentHTML('beforeend', row);
            });
        }

        document.getElementById('cart-subtotal').textContent = subtotal.toFixed(2);
        //document.getElementById('cart-subtotal').css('display','none');
        document.getElementById('cart-total').textContent = subtotal.toFixed(2); // Including fixed shipping
    }

    // Function to change quantity
    function changeQuantity(productId, delta) {
        const cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        const product = cart.find(item => item.id === productId);

        if (product) {
            product.quantity = Math.max(1, product.quantity + delta); // Ensure quantity is at least 1
            localStorage.setItem('shoppingCart', JSON.stringify(cart));
            loadCartItems(); // Reload cart items to reflect updated quantity
        }
    }

    // Function to remove an item from the cart
    function removeItem(productId) {
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem('shoppingCart', JSON.stringify(cart));
        loadCartItems(); // Reload cart items to reflect removed item
    }

    // Load cart items on page load
    document.addEventListener('DOMContentLoaded', loadCartItems);
</script>
@endsection

