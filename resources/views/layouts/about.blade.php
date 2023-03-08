<section class="section-about bgc-one" id="section-about">
<div class="container">
    
    <h2>Товары</h2>
	<h6>*цены при покупке могут отличаться</h6>
    <div class="underline">
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, quia. Obcaecati quod ab mollitia maiores ducimus, dolor natus qui quaerat illum praesentium iste quia voluptate delectus distinctio blanditiis sit totam.
    </p>

	<div class="product_grid">
	<div class="row">
						@for ($i = 0; $i < $count; $i++)
		                @foreach($products[$i] as $product)
						<!-- Product -->
						@php
						$image='';
						
						if(count($product->images)>0){
							$image=$product->images[0]['img'];
						} else {
							$image='no_image.jpg';
						}
						@endphp
						<div class="col-md-4">
						<div class="product">
						    <p><a href="{{ route('product.show', $product -> id) }}">{{ $product->title }}</a></p>
							<div class="product_image"><img src="{{ Storage::url('/mini/' . 'mini'. $image)}}" alt="{{$product->title}}"></div>
							<div class="product_content">
								
								@if($product -> new_price != NULL)
								   <div style="text-decoration: line-through">Старая цена: {{$product->price}} руб.</div>
								   <div class="product_price">Новая цена: {{$product->new_price}} руб.</div>
								   @else
								   <div class="product_price">Цена: {{$product->price}} руб.</div>
								@endif
							</div>
						</div>
						</div>
                        @endforeach
						@endfor
					</div>
					</div>
				
	
	

</section>