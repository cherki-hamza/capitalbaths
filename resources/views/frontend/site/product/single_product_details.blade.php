@extends('frontend.layouts.master')

@section('title','Product details')

@section('style')
<link href="{{ asset('assets/css/product_page.css') }}" rel="stylesheet">
<style>
    /* desktop and responsive menu */
.showrooms_desktop {
  margin-left: 102px !important;
  float: unset;
  position: absolute;
  margin-left: -92px;
  margin-top: 19px;
  text-decoration: none;
  color: black;
}
@media (max-width: 700px) {

  .capithalbaths_responsive {
    display: none;
  }

  #showrooms_mobile {
    left: -91px;
    font-size: 18px;
    top: -9px;
  }

  .mobile_category {
    display: none !important;
  }
}
</style>
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
        <main>
			<div class="container margin_30">
				<div style="display: none;" class="countdown_inner">
					<div class="countdown"></div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="all">
							<div class="slider">
								<div class="owl-carousel owl-theme main">
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/5/0/506b743f0aeaae6ba0322f435c55b756fb748f12292b9682df778576bb58ae63.jpeg);"
										class="item-box"></div>
									<div style="background-image: url(https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp);"
										class="item-box"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/3/7/3700decda3c001e61bf6b83bbe26cc43c930cdb2e166191d5dd04fb333a40467.jpeg);"
										class="item-box"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/c/5/c5494bb24e6dfdba26b87f81dbead3cda6f63e1913f1442bf001878a17420a6e.jpeg);"
										class="item-box"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/4/a/4aea0cffb121e92af4a7968e26a6403d54fb5816f3af61ca6326bb5fcd95c500.jpeg);"
										class="item-box"></div>
									<div style="background-image: url(https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp);"
										class="item-box"></div>
								</div>
								<div class="left nonl"><i class="ti-angle-left"></i></div>
								<div class="right"><i class="ti-angle-right"></i></div>
							</div>
							<div class="slider-two">
								<div class="owl-carousel owl-theme thumbs">
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/5/0/506b743f0aeaae6ba0322f435c55b756fb748f12292b9682df778576bb58ae63.jpeg);"
										class="item active"></div>
									<div style="background-image: url(https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp);"
										class="item"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/3/7/3700decda3c001e61bf6b83bbe26cc43c930cdb2e166191d5dd04fb333a40467.jpeg);"
										class="item"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/c/5/c5494bb24e6dfdba26b87f81dbead3cda6f63e1913f1442bf001878a17420a6e.jpeg);"
										class="item"></div>
									<div style="background-image: url(https://sanipexgroup.com/media/catalog/product/cache/d49785f6a24dddad2b38555aae019006/4/a/4aea0cffb121e92af4a7968e26a6403d54fb5816f3af61ca6326bb5fcd95c500.jpeg);"
										class="item"></div>
									<div style="background-image: url(https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp);"
										class="item"></div>
								</div>
								<div class="left-t nonl-t"></div>
								<div class="right-t"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Category</a></li>
								<li>WC</li>
							</ul>
						</div>
						<!-- /page_header -->
						<div class="prod_info">
							<h1>M-Line Back to Wall Rimless WC</h1>

							<div class="prod_options">
								<div class="row">
									<label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong style="font-size: 16px;font-weight: 600;">Color:</strong></label>
									<div class="col-xl-8 col-lg-8 col-md-8 col-8 colors">
										<ul>
											<li><a style="background-color: #4C6457;" href="#0"
													class="color color_1 active"></a></li>
											<li><a style="background-color: #D8A7A2;" href="#0"
													class="color color_2"></a></li>
											<li><a style="background-color: #46454A;" href="#0"
													class="color color_3"></a></li>
											<li><a style="background-color: #B9B4B1;" href="#0"
													class="color color_4"></a></li>
											<li><a style="background-color: white;border: black solid 1px;color:black"
													href="#0" class="color color_4"></a></li>
										</ul>
									</div>
								</div>
								<div class="row">
									<label class="col-xl-5 col-lg-5 col-md-6 col-6">
										<strong>Technical Specifications</strong> <a href="#0" data-bs-toggle="modal"
											data-bs-target="#size-modal"><i class="ti-help-alt"></i></a>
									</label>
									<div class="col-xl-4 col-lg-5 col-md-6 col-6">

									</div>
								</div>

								<div class="row">
									<label class="col-xl-10 col-lg-10 col-md-12 col-12">
										<strong> <a href="#"> Contact Us </a> for up-to-date stock availability and bulk quantities</strong>
									</label>
								</div>

							</div>

                            {{-- start select color --}}
                            <style>
                                * {
                                    box-sizing: border-box;
                                    font-family: "Arial";
                                }

                                .wrapper-dropdown {
                                    position: relative;
                                    background: #FFF;
                                    color: #2e2e2e;
                                    outline: none;
                                    cursor: pointer;
                                }

                                .wrapper-dropdown > span {
                                    width: 100%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    border: 1px solid #ababab;
                                    padding: 5px;
                                    font-size: 16px;
                                }

                                .wrapper-dropdown > span .color-box-selected {
                                    width: 20px;
                                    height: 20px;
                                    border-radius: 50%;
                                    display: inline-block;
                                    margin-right: 10px;
                                    border: 1px solid #ababab;
                                }

                                .wrapper-dropdown .dropdown {
                                    position: absolute;
                                    z-index: 10;
                                    top: 100%;
                                    left: 0;
                                    right: 0;
                                    background: #fff;
                                    font-weight: normal;
                                    list-style-type: none;
                                    padding-left: 0;
                                    margin: 0;
                                    border: 1px solid #ababab;
                                    border-top: 0;
                                }

                                .wrapper-dropdown .dropdown li {
                                    display: flex;
                                    align-items: center;
                                    text-decoration: none;
                                    color: #2e2e2e;
                                    padding: 5px;
                                    cursor: pointer;
                                }

                                .wrapper-dropdown .dropdown li:hover {
                                    background: #eee;
                                    cursor: pointer;
                                }

                                .color-box {
                                    width: 20px;
                                    height: 20px;
                                    border-radius: 50%;
                                    margin-right: 10px;
                                    display: inline-block;
                                    border: 1px solid #ababab;
                                }

                                /* start css for pdf button*/
                                 /* Modal (hidden by default) */
                                    .pdf-modal {
                                        display: none;
                                        position: fixed;
                                        z-index: 1000;
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                        height: 100%;
                                        background-color: rgba(0, 0, 0, 0.5);
                                    }

                                    /* Modal Content */
                                    .pdf-modal-content {
                                        background-color: white;
                                        margin: 8% auto;
                                        padding: 20px;
                                        border: 1px solid #888;
                                        width: 80%;
                                    }

                                    /* Close Button */
                                    .pdf-modal-content .close {
                                        color: #aaa;
                                        float: right;
                                        font-size: 28px;
                                        font-weight: bold;
                                    }

                                    .pdf-modal-content .close:hover,
                                    .pdf-modal-content .close:focus {
                                        color: black;
                                        text-decoration: none;
                                        cursor: pointer;
                                    }

                                /*  end css for the pdf button */

                            </style>
                            <div class="row my-4">
                                <label style="color: green;font-size: 14px;" for="manual-color-input">(Select Color or enter code , name:)</label>
                                <label class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <strong style="font-size: 16px;font-weight: 600;">Drawer Color:</strong>
                                </label>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                    <div class="custom-select-form">
                                        <div class="color-picker">
                                            <div class="wrapper-dropdown" data-input-id="drawer_color_name">
                                                <span class="selector wide">
                                                    <span class="color-box-selected" style="background-color: #D8A7A2;"></span>
                                                    Select Color
                                                </span>
                                                <ul class="dropdown" style="display: none;">
                                                    <li data-color="light-pink" data-bg-color="#D8A7A2">
                                                        <span class="color-box" style="background-color: #D8A7A2;"></span>Light Pink
                                                    </li>
                                                    <li data-color="gray-green" data-bg-color="#4C6457">
                                                        <span class="color-box" style="background-color: #4C6457;"></span>Gray Green
                                                    </li>
                                                    <li data-color="dark-gray" data-bg-color="#46454A">
                                                        <span class="color-box" style="background-color: #46454A;"></span>Dark Gray
                                                    </li>
                                                    <li data-color="black" data-bg-color="black">
                                                        <span class="color-box" style="background-color: black;"></span>Black
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- start select pdf colors -->
									<div class="row my-4">


										<div class="col-xl-5 col-lg-5 col-md-6 col-6">
											<label style="color: green;font-size: 14px;" for="manual-color-input">(Pick color from pdf colors)</label>
											<button style="margin-top: 10px;margin-top: 10px;border: 2px solid gray;color: gray;background-color: white;padding: 5px 15px;border-radius: 8px;font-size: 18px;font-weight: bold;" class="btn btn-secondary" id="show-pdf-button">
												View Colors PDF
											</button>

										</div>
										<div class="col-xl-4 col-lg-5 col-md-6 col-6">


                                            <div class="">
												<label for="manual-color-input">Enter Color Code or Name:</label>
												<input style="font-size: 12px;margin-top: 10px;" type="text" id="drawer_color_name" class="form-control" placeholder="e.g. #D8A7A2 or Light Pink">
											</div>


										</div>
										<!-- Popup Modal for PDF Viewer -->
										<div id="pdfModal" class="pdf-modal" style="display:none;">
											<div class="pdf-modal-content">
												<span class="close">&times;</span>
												<embed src={{ asset('assets/files/colors_palete.pdf') }} type="application/pdf" width="100%" height="600px">
											</div>
										</div>

									</div>
									<!-- end select pdf colors -->
                            {{-- end select color --}}

							<div class="row">
								<label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity:</strong></label>
								<div class="col-xl-4 col-lg-5 col-md-6 col-6">
									<div class="numbers-row">
										<input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="price_main"><span class="new_price">AED 2,995</span><span
										class="percentage">-20%</span> <span class="old_price">AED 3,364</span></div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div style="margin-top: 10px;" class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
							</div>
						</div>
					</div>
					<!-- /prod_info -->
					<div class="product_actions">
						<ul>
							<li>
								<a href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
							</li>
						</ul>
					</div>
					<!-- /product_actions -->
				</div>
			</div>
			<!-- /row -->
			</div>
			<!-- /container -->

			<div class="tabs_product">
				<div class="container">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
						</li>
						<li class="nav-item">
							<a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Spesifications</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /tabs_product -->
			<div class="tab_content_wrapper">
				<div class="container">
					<div class="tab-content" role="tablist">
						<div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
							<div class="card-header" role="tab" id="heading-A">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false"
										aria-controls="collapse-A">
										Description
									</a>
								</h5>
							</div>
							<div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
								<div class="card-body">
									<div class="row justify-content-between">
										<div class="col-lg-6">
											<h3>Details</h3>
											<p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his,
												harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno
												sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad
												has.</p>
											<p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim
												aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has.
												Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong>
												te his, alia lobortis vis ea.</p>
											<p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis
												numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci
												elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
										</div>
										<div class="col-lg-5">
											<h3>Specifications</h3>
											<div class="table-responsive">
												<table class="table table-sm table-striped">
													<tbody>
														<tr>
															<td><strong>Color</strong></td>
															<td>Blue, Purple</td>
														</tr>
														<tr>
															<td><strong>Size</strong></td>
															<td>150x100x100</td>
														</tr>
														<tr>
															<td><strong>Weight</strong></td>
															<td>0.6kg</td>
														</tr>
														<tr>
															<td><strong>Manifacturer</strong></td>
															<td>Manifacturer</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- /table-responsive -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /TAB A -->
						<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
							<div class="card-header" role="tab" id="heading-B">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
										aria-controls="collapse-B">
										Technical Specifications
									</a>
								</h5>
							</div>
							<div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
								<div class="card-body">
									<div class="row justify-content-between">
										<div class="col-lg-6">
											<div class="review_content">
												<div class="clearfix add_bottom_10">
													spacification 1
												</div>
												<h4>"Commpletely satisfied"</h4>
												<p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea.
													Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
													fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
													petentium cu his.</p>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="review_content">
												<div class="clearfix add_bottom_10">
													spacification 2
												</div>
												<h4>"Always the best"</h4>
												<p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
													fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
													petentium cu his.</p>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /card-body -->
							</div>
						</div>
						<!-- /tab B -->
					</div>
					<!-- /tab-content -->
				</div>
				<!-- /container -->
			</div>
			<!-- /tab_content_wrapper -->

			<div class="container margin_60_35">
				<div class="main_title">
					<h2>Related</h2>
					<span>Products</span>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="owl-carousel owl-theme products_carousel">
					<div class="item">
						<div class="grid_item">
							<span class="ribbon new">New</span>
							<figure>
								<a href="#">
									<img class="owl-lazy"
										src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp"
										data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
							<a href="#">
								<h3>ACG React Terra</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$110.00</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
								</li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /item -->
					<div class="item">
						<div class="grid_item">
							<span class="ribbon new">New</span>
							<figure>
								<a href="#">
									<img class="owl-lazy"
										src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19.jpg"
										data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19.jpg" alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
							<a href="#">
								<h3>Air Zoom Alpha</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$140.00</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
								</li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /item -->
					<div class="item">
						<div class="grid_item">
							<span class="ribbon hot">Hot</span>
							<figure>
								<a href="#">
									<img class="owl-lazy"
										src="https://capitalbaths.com/wp-content/uploads/2023/11/shower-glass-cat01.webp"
										data-src="https://capitalbaths.com/wp-content/uploads/2023/11/shower-glass-cat01.webp"
										alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
							<a href="#">
								<h3>Air Color 720</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$120.00</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
								</li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /item -->
					<div class="item">
						<div class="grid_item">
							<span class="ribbon off">-30%</span>
							<figure>
								<a href="#">
									<img class="owl-lazy"
										src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit18-1.jpg"
										data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit18-1.jpg"
										alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
							<a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit18-1.jpg">
								<h3>Okwahn II</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$90.00</span>
								<span class="old_price">$170.00</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
								</li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /item -->
					<div class="item">
						<div class="grid_item">
							<span class="ribbon off">-50%</span>
							<figure>
								<a href="#">
									<img class="owl-lazy"
										src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit47.jpg"
										data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit47.jpg" alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
							<a href="#">
								<h3>Air Wildwood ACG</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$75.00</span>
								<span class="old_price">$155.00</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
								</li>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /item -->
				</div>
				<!-- /products_carousel -->
			</div>
			<!-- /container -->

			<div class="feat">
				<div class="container">
					<ul>
						<li>
							<div class="box">
								<i class="ti-gift"></i>
								<div class="justify-content-center">
									<h3>Free Shipping</h3>
									<p>For all oders over $99</p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<i class="ti-wallet"></i>
								<div class="justify-content-center">
									<h3>Secure Payment</h3>
									<p>100% secure payment</p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<i class="ti-headphone-alt"></i>
								<div class="justify-content-center">
									<h3>24/7 Support</h3>
									<p>Online top support</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>



	    </main>
		<!-- end main -->



@endsection

@section('script')
	<script src="{{ asset('assets/js/carousel_with_thumbs.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.wrapper-dropdown');

            dropdowns.forEach(dropdown => {
                const selector = dropdown.querySelector('.selector');
                const dropdownList = dropdown.querySelector('.dropdown');
                const selectedBox = selector.querySelector('.color-box-selected');
                const associatedInputId = dropdown.getAttribute('data-input-id'); // Get the input field ID from the data attribute
                const associatedInput = document.getElementById(associatedInputId); // Find the associated input field

                // Toggle dropdown visibility
                selector.addEventListener('click', function() {
                    dropdownList.style.display = dropdownList.style.display === 'none' ? 'block' : 'none';
                });

                // Handle color selection
                dropdownList.addEventListener('click', function(e) {
                    if (e.target.tagName === 'LI' || e.target.closest('li')) {
                        const selectedLi = e.target.closest('li');
                        const selectedColorText = selectedLi.textContent.trim();
                        const selectedBgColor = selectedLi.getAttribute('data-bg-color');

                        // Update background color of the selected color box
                        selectedBox.style.backgroundColor = selectedBgColor;

                        // Update the text to reflect the selected color
                        selector.lastChild.textContent = selectedColorText;

                        // Set the selected color name or code in the associated input field
                        associatedInput.value = selectedBgColor + " (" + selectedColorText + ")";

                        // Close the dropdown after selection
                        dropdownList.style.display = 'none';
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                dropdowns.forEach(dropdown => {
                    if (!dropdown.contains(e.target)) {
                        const dropdownList = dropdown.querySelector('.dropdown');
                        dropdownList.style.display = 'none';
                    }
                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pdfModal = document.getElementById("pdfModal");
            var showPdfButton = document.getElementById("show-pdf-button");

            var closeBtn = document.querySelector(".pdf-modal .close");

            // Show the modal when the button is clicked
            showPdfButton.onclick = function() {
                pdfModal.style.display = "block";
            };

            // Close the modal when the close button is clicked
            closeBtn.onclick = function() {
                pdfModal.style.display = "none";
            };

            // Close the modal when user clicks outside of the modal content
            window.onclick = function(event) {
                if (event.target == pdfModal) {
                    pdfModal.style.display = "none";
                }
            };
        });

    </script>
@endsection
