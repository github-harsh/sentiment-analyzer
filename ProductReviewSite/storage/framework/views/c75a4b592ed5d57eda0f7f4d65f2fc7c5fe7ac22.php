

						<!--initialHTML-->
						<?php echo $__env->make('layout.initialHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<!--initialHTML-->



						<!--header-->
						<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

									

										<?php $__currentLoopData = $all_phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phones): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
											<div class="col-md-3 pro-1">
												<div class="col-m">
													<a href="<?php echo e($phones->phone_id); ?>" class="offer-img">
														<script type="text/javascript">
															var phone_id = <?php echo $phones->phone_id; ?>;
															console.log(phone_id);
															document.write("<img src='images/phones/phone-"+phone_id+".jpg' class='img-responsive' alt=''>");
														</script>
														<!-- <img src="images/phones/google-pixel.jpg" class="img-responsive" alt=""> -->
													</a>
													<div class="mid-1">
														<div class="women">
															<h6><a href="<?php echo e($phones->phone_id); ?>"><?php echo e($phones->phone_name); ?></a></h6>							
														</div>
														<div class="mid-2">
															<div class="block">
																<div class="starbox small ghosting"> </div>
															</div>
															<div class="clearfix"></div>
														</div>
														<div class="add">
															<a class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" href="<?php echo e($phones->phone_id); ?>" data-image="images/of16.png">View
															</a>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</div>
								</div>


						<!--footer-->

						<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<!--footer-->




						<!--finalHTML-->

						<?php echo $__env->make('layout.finalHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<!--finalHTML-->
