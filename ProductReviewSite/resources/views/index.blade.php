

						<!--initialHTML-->
						@include('layout.initialHTML')
						<!--initialHTML-->



						<!--header-->
						@include('layout.header')
						<!--header-->


						<div>
						    <div class="">
								<div class="banner-info">
									<h3>Find the right phone for you, with the right opinions. </h3>			
								</div>	
						    </div>
						</div>


						<!--content-->

							<!--content-->
								<div class="product">
									<div class="container">
									
										<div class="spec ">
											<h3>Phone Listings</h3>
											<div class="ser-t">
												<b></b>
												<span><i></i></span>
												<b class="line"></b>
											</div>
										</div>

									

										@foreach($all_phones as $phones)
											<div class="col-md-3 pro-1">
												<div class="col-m">
													<a href="{{ $phones->phone_id }}" class="offer-img">
														<script type="text/javascript">
															var phone_id = {!! $phones->phone_id !!};
															console.log(phone_id);
															document.write("<img src='images/phones/phone-"+phone_id+".jpg' class='img-responsive' alt=''>");
														</script>
														<!-- <img src="images/phones/google-pixel.jpg" class="img-responsive" alt=""> -->
													</a>
													<div class="mid-1">
														<div class="women">
															<h6><a href="{{ $phones->phone_id }}">{{$phones->phone_name}}</a></h6>							
														</div>
														<div class="mid-2">
															<div class="block">
																<div class="starbox small ghosting"> </div>
															</div>
															<div class="clearfix"></div>
														</div>
														<div class="add">
															<a class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" href="{{ $phones->phone_id }}" data-image="images/of16.png">View
															</a>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>


						<!--footer-->

						@include('layout.footer')

						<!--footer-->




						<!--finalHTML-->

						@include('layout.finalHTML')

						<!--finalHTML-->
