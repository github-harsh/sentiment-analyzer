
<!--initialHTML-->

@include('layout.initialHTML')

<!--initialHTML-->



<!--header-->

@include('layout.header')

<!--header-->



<div class="product">
	<div class="container">
			
		<div class="spec">
			<h3>{{ $phone_name[0]->phone_name }}</h3>
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
					<a href="{{ $phone_details[0]->phone_id }}" class="offer-img">
						<script type="text/javascript">
						var phone_id = {!! $phone_details[0]->phone_id !!};
						console.log(phone_id);
						document.write("<img src='images/phones/phone-"+phone_id+".jpg' class='img-responsive' alt=''>");
						</script>

						<!-- <img src="images/phones/htc-one-m8.png" class="img-responsive" alt=""> -->
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.html">{{ $phone_name[0]->phone_name }}</a></h6>							
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
  					<h5>Screen : {{ $phone_details[0]->phone_screen_size }} inches</h5>
  					<p></p>
  					<h5>Color :  {{ $phone_details[0]->phone_color }} </h5>
  					<p></p>
  					<h5>RAM :  {{$phone_details[0]->phone_ram }} GB</h5>
  					<p></p>
  					<h5>Price :  {{$phone_details[0]->phone_price }}</h5>
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
				<div class="review_font"> <h4> Based on {{ $total_reviews }} reviews this phone has a rating of </h4> </div>
				<h4>{{ $rating_of_phone }} / 10</h4>
				<div id="stars">
					<h4>
						<script type="text/javascript">
							var phone_rating = {!! $rating_of_phone !!};
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
	<form method="POST" action="/ProductReviewSite/public/{{ $phone_details[0]->phone_id }}/review" >
		{!! csrf_field() !!}
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
			@foreach($phone_reviews as $review)
			  <div class="list-group-item" style = "font-size: 20px;">
			    {{ $review->review }}
			  </div>
			@endforeach
		</div>	
	</div>
		
</div>



<!--footer-->
@include('layout.footer')
<!--footer-->




<!--finalFooter-->
@include('layout.finalHTML')
<!--finalFooter-->