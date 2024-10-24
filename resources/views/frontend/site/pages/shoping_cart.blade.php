@extends('frontend.layouts.master')

@section('title','Shoping Cart page')

@section('style')
   <link href="{{ asset('assets/css/cart.css') }}" rel="stylesheet">
@endsection


@section('content')
	<!-- start header top -->
	 @include('frontend.inc.top_header')
	<!-- end header top -->

	<!-- start first div of page -->
	<div id="page">


		<!-- start header -->
		 @include('frontend.inc.menu')
		<!-- end header -->

		<!-- start main -->
         <!-- start main -->
	  <div class="container my-2">
		<main class="bg_gray">
			<div class="container margin_30">
			<div class="page_header">
				<div class="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Capitalbaths</a></li>
						<li>Crat</li>
					</ul>
				</div>
				<h1>Cart page</h1>
			</div>
			<!-- /page_header -->
			<table class="table table-striped cart-list">
								<thead>
									<tr>
										<th>
											Product
										</th>
										<th>
											Price
										</th>
										<th>
											Quantity
										</th>
										<th>
											Subtotal
										</th>
										<th>

										</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>
											<div class="thumb_cart">
												<img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19-1.jpg" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19-1.jpg" class="lazy" alt="Image">
											</div>
											<span class="item_cart">1x Porcelain Counter</span>
										</td>
										<td>
											<strong>2000.00 <span>AED</span></strong>
										</td>
										<td>
											<div class="numbers-row">
												<input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
											<div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
										</td>
										<td>
											<strong>2000.00</strong>
										</td>
										<td class="options">
											<a href="#"><i class="ti-trash"></i></a>
										</td>
									</tr>

									<tr>
										<td>
											<div class="thumb_cart">
												<img src="https://capitalbaths.com/wp-content/uploads/2023/11/shower-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/shower-cat01.webp" class="lazy" alt="Image">
											</div>
											<span class="item_cart">Armor Okwahn II</span>
										</td>
										<td>
											<strong>500.00 <span>AED</span></strong>
										</td>
										<td>
											<div class="numbers-row">
												<input type="text" value="1" id="quantity_2" class="qty2" name="quantity_2">
											<div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
										</td>
										<td>
											<strong>500.00 </strong>
										</td>
										<td class="options">
											<a href="#"><i class="ti-trash"></i></a>
										</td>
									</tr>


								</tbody>
							</table>

							<!-- <div class="row add_top_30 flex-sm-row-reverse cart_actions">
							<div class="col-sm-4 text-end">
								<button type="button" class="btn_1 gray">Update Cart</button>
							</div>
								<div class="col-sm-8">
								<div class="apply-coupon">
									<div class="form-group">
										<div class="row g-2">
											<div class="col-md-6"><input type="text" name="coupon-code" value="" placeholder="Promo code" class="form-control"></div>
											<div class="col-md-4"><button type="button" class="btn_1 outline">Apply Coupon</button></div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- /cart_actions -->

			</div>
			<!-- /container -->

			<div class="box_cart">
				<div class="container">
				<div class="row justify-content-end">
					<div class="col-xl-4 col-lg-4 col-md-6">
				<ul>
					<li>
						<span>Subtotal</span> 2500.00
					</li>
					<li>
						<span>Shipping</span> 300
					</li>
					<li>
						<span>Total</span> 2800.00 <span>AED</span>
					</li>
				</ul>
				<a href="{{ route('checkout_page') }}" class="btn_1 full-width cart">Proceed to Checkout</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /box_cart -->

		</main>
	  </div>
	<!-- /main -->
		<!-- end main -->

@endsection

@section('script')

@endsection
