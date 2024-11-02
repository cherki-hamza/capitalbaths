<li>
    <div class="dropdown dropdown-cart">
        <a href="{{ route('shoping_cart') }}" class="cart_bt"><strong>0</strong></a>
        <div class="dropdown-menu">
            <ul>

                <span class="empty-cart-message" style="display: none;">Your cart is empty.</span>

            </ul>
            <div class="total_drop">
                <div class="clearfix"><strong>Total</strong><span>00
                        <span> AED </span></span></div>
                <a href="{{ route('shoping_cart') }}" class="btn_1 outline">View Cart</a>
                <a href="{{ route('checkout_page') }}" class="btn_1">Checkout</a>
            </div>
        </div>
    </div>
    <!-- /dropdown-cart-->
</li>

