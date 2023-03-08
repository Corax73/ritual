@include('layouts.head')
<body>
<!-- ===== preloader ===== -->
<div class="preloaders">
  <div class="preloaders-gif">&nbsp;</div>
</div>

@include('layouts.headshow')
<body>
<p align="center"><a href="{{ url('/') }}">На главную</a></p>
<div class="container">
        <div class="col-8">
        <form method="POST" action="{{ route('product.destroy', $product -> id) }}" accept-charset="UTF-8">
        @csrf
        @method ('delete')
            <h2>{{ $product -> title }}</h2>
            <h3>{{ $product -> description }}</h3>
            <h3>@if($product -> new_price != NULL)
								   <div style="text-decoration: line-through">Старая цена: {{$product -> price}} руб.</div>
								   <div class="product_price">Новая цена: {{$product -> new_price}} руб.</div>
								   @else
								   <div class="product_price">Цена: {{$product -> price}} руб.</div>
								@endif</h3>
                <h6>*цены при покупке могут отличаться</h6>
            @foreach ($images as $image)
            <div style="overflow: auto;"><p><img src="{{ Storage::url($image -> img) }}" alt=""></p></div>
            @if (Auth::check())
            <button type="submit" name="download" value="{{ $image -> img }}">Скачать</button>
            @endif
            @endforeach
            @if (Auth::check())
            <button type="submit" name="action" value="delete" class="btn btn-danger">Удалить</button>
            <a href="{{ route('product.edit', $product -> id) }}">Редактировать товар</a>
            @endif
        </form>
        </div>
        <a href="{{ route('home.index') }}">На главную</a>
</div>
@include('layouts.footer')
@include('layouts.jsscript')
</body>
</html>