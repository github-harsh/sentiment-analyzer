
<!--initialHTML-->

<?php echo $__env->make('layout.initialHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--initialHTML-->



<!--header-->

<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--header-->



<div class="product">
	<div class="container">
			
		<div class="spec">
			<h3><?php echo e($phone_name[0]->phone_name); ?></h3>
			<h5>A1533</h5>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>



		<div class=" con-w3l">
			<div class="col-md-3 ">
				<div class="col-m">
					<a href="<?php echo e($phone_details[0]->phone_id); ?>" class="offer-img">
						<script type="text/javascript">
						var phone_id = <?php echo $phone_details[0]->phone_id; ?>;
						console.log(phone_id);
						document.write("<img src='images/phones/phone-"+phone_id+".jpg' class='img-responsive' alt=''>");
						</script>

						<!-- <img src="images/phones/htc-one-m8.png" class="img-responsive" alt=""> -->
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.html"><?php echo e($phone_name[0]->phone_name); ?></a></h6>							
						</div>
						<div class="mid-2">
							<br>
							<p>
								<em class="item_price"></em>
							</p>
							<div class="block">
								<div class="starbox small ghosting"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/galaxy-s7-edge.png">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-7">
				<div class="jumbotron">
				<div class="container">
  					<h4>Phone Specifications</h4>
  					<p></p>
  					<h5>Screen : <?php echo e($phone_details[0]->phone_screen_size); ?> inches</h5>
  					<p></p>
  					<h5>Color :  <?php echo e($phone_details[0]->phone_color); ?> </h5>
  					<p></p>
  					<h5>RAM :  <?php echo e($phone_details[0]->phone_ram); ?> GB</h5>
  					<p></p>
  					<h5>Price :  <?php echo e($phone_details[0]->phone_price); ?></h5>
				</div>
				</div>
			</div>	
		</div>
	</div>

		<div class="container">
			<div class="spec">
				<h3>Review</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>	

			<div class="spec">	
				<!-- <div class="text-center col-md-4 col-md-offset-4"> -->
				<div class="review_font"> <h4> Based on <?php echo e($total_reviews); ?> reviews this phone has a rating of </h4> </div>
				<h4><?php echo e($rating_of_phone); ?> / 10</h4>
				<div id="stars">
					<h4>
						<script type="text/javascript">
							var phone_rating = <?php echo $rating_of_phone; ?>;
							phone_rating = phone_rating / 2;
							console.log(phone_rating);
							phone_rating = Math.round(phone_rating);
							for (var i = 0 ; i < phone_rating; i++) 
							{
								document.write("<span class ='glyphicon glyphicon-star'></span>");
							}

							for (var i = 0 ; i < (5 - phone_rating) ; i++)
							{
								document.write("<span class ='glyphicon glyphicon-star-empty'></span>");
							}
						</script>
					</h4>
				</div>
			</div>
				<!-- </div> -->
		</div>



<!--  -->
<br><br><hr><br><br>

<div class="container">
	<form method="POST" action="/ProductReviewSite/public/<?php echo e($phone_details[0]->phone_id); ?>/review" >
		<?php echo csrf_field(); ?>

		<h3>Post a reivew</h3>
		<div class="form-group">				
			<textarea name="review_textarea" id="review_textarea" class="form-control"  rows="7" style="resize: none;" ></textarea>
		</div>
		<div class="form-group">	
			<button type="submit" id="review_submit_button" class="btn btn-success"> Submit Reivew </button>
		</div>
	</form>
</div>


<!-- <script type="text/javascript">
	function add_review()
		{
			var counter = 1;
			var add_review = document.getElementById('place_reviews_here');
			add_review.innerHTML += 
			"<div class='list-group-item' id = 'review"+ counter++ +"' style='font-size: 20px;'></div>"; 

			//Put content of text area in textbox.
			var text_area = document.getElementById('review_textarea');


			var review_textbox = document.getElementById('review1');
			review_textbox.value = "hihihihihihih";
			// document.querySelector(".list-group-item").innerHTML += text_area.value; 
			review_textbox.value = text_area.value;
		}
</script>
 -->		

 	<!--Display all reviews on the page one below the other-->
	<div class="container" >	
		<div class="list-group" id="place_reviews_here">
			<?php $__currentLoopData = $phone_reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			  <div class="list-group-item" style = "font-size: 20px;">
			    <?php echo e($review->review); ?>

			  </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>	
	</div>
		
</div>



<!--footer-->
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--footer-->




<!--finalFooter-->
<?php echo $__env->make('layout.finalHTML', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--finalFooter-->