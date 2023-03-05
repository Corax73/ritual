@include('layouts.head')
<body>
<!-- ===== preloader ===== -->
<div class="preloaders">
  <div class="preloaders-gif">&nbsp;</div>
</div>

@include('layouts.headshow')
<body>
<p align="center"><a href="{{ url('/') }}">Home</a></p>
<div class="container">
        <div class="col-8">
        <form method="POST" action="{{ route('product.destroy', $product -> id) }}" accept-charset="UTF-8">
        @csrf
        @method ('delete')
            <h2>{{ $product->title }}</h2>
            <h3>{{ $product->description }}</h3>
            @foreach ($images as $image)
            <p><img src="{{ Storage::url($image->img) }}" alt=""></p>
            @if (Auth::check())
            <button type="submit" name="download" value="{{ $image->img }}">Скачать</button>
            @endif
            @endforeach
            @if (Auth::check())
            <button type="submit" name="action" value="delete" class="btn btn-danger">Удалить</button>
            @endif
        </form>
        <a href="{{ route('product.edit', $product -> id) }}">Edit this product</a>
        </div>
        <a href="{{ route('home.index') }}">To the product</a>
</div>
@include('layouts.footer')
@include('layouts.jsscript')
</body>
</html>