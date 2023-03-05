<section class="section-about bgc-one" id="section-about">
<div class="container">
    
    <h2>About Product</h2>
	<h1>1111</h1>
    <div class="underline">
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, quia. Obcaecati quod ab mollitia maiores ducimus, dolor natus qui quaerat illum praesentium iste quia voluptate delectus distinctio blanditiis sit totam.
    </p>

	<div class="product_grid">
		<h1>1111</h1>
                        @foreach($products as $product)
						<!-- Product -->
						@php
						$image='';
						
						if(count($product->images)>0){
							$image=$product->images[0]['img'];
						} else {
							$image='no_image1.jpg';
						}
						@endphp
						<div class="product">
							<div class="product_image"><img src="{{ Storage::url('/mini/' . 'mini'. $image)}}" alt="{{$product->title}}"></div>
							<div class="product_content">
								
								@if($product -> new_price != NULL)
								   <div style="text-decoration: line-through">${{$product->price}}</div>
								   <div class="product_price">${{$product->new_price}}</div>
								   @else
								   <div class="product_price">${{$product->price}}</div>
								@endif
							</div>
						</div>
                        @endforeach
					</div>
				
	
	<div class="row">
		<div class="col-md-6">
			<!-- ===== Images ===== -->
			<div class="side-images pull-left">
				<img src="images/pro.jpg" alt="Feature" class="img-responsive">
			</div>
		</div>
		<div class="col-md-6">
			
			<div class="about text-left">
				
				<!-- ===== Features List ===== -->
				<ul class="feature-list">
					
					<li>
					<!-- ===== Icons ===== -->
					<div class="icon-custom pull-left">
						<i class="fa fa-laptop"></i>
					</div>
					<!-- ===== Detailt Post===== -->
					<div class="details pull-left">
						<h6>Fully Responsive</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nesciunt excepturi officiis, voluptates unde illum, sequi adipisci impedit mollitia vitae beatae, maiores architecto ipsum. Autem nobis tenetur expedita, pariatur enim!
						</p>
					</div>
					</li>
					
					<li>
					<!-- ===== Icons ===== -->
					<div class="icon-custom pull-left">
						<i class="fa fa-cog"></i>
					</div>
					<!-- ===== Details Post ===== -->
					<div class="details pull-left">
						<h6>Eesy edit</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet error cum, aut beatae officiis doloribus vel odit a quia veritatis illum ad minima vitae unde, mollitia sapiente placeat id fuga?
						</p>
					</div>
					</li>
					
					<li>
					<!-- ===== Icons ===== -->
					<div class="icon-custom pull-left">
						<i class="fa fa-photo"></i>
					</div>
					<!-- ===== Detail Post ===== -->
					<div class="details pull-left">
						<h6>Photo</h6>
						<p>
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque, dignissimos perspiciatis veritatis pariatur! Cupiditate minus sunt ex delectus possimus, adipisci et at animi eos soluta, ipsam, molestias facere dignissimos!
						</p>
					</div>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
	
</div> 

</section>