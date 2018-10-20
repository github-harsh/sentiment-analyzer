
<!--initialHTML-->

<?php echo $__env->make('layout.initialHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--initialHTML-->



<!--header-->

<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--header-->



<div class="product">
	<div class="container">
			
		<div class="spec ">
			<h3><?php echo e($phone_details[0]->phone_name); ?></h3>
			<h5>A1533</h5>>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>



<div class=" con-w3l">
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="product/<?php echo e($phone_details[0]->company_id); ?>" class="offer-img">
										<img src="images/of16.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"><?php echo e($phone_details[0]->phone_name); ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>$7.00</label><em class="item_price">$<?php echo e($phone_details[0]->phone_id); ?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
						
							
				</div>

		</div>
	</div>



<!--footer-->

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--footer-->




<!--finalHTML-->

<?php echo $__env->make('layout.finalHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--finalHTML-->