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
        <h1>Изменить товар</h1>
        <form method="post" action="{{ route('product.update', $product -> id) }}" enctype="multipart/form-data">
        @csrf
        @method ('patch')
        <div class="form-group">
                <label for="name">Название товара</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ $product -> title }}">
                @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Цена</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="price" value="{{ $product -> price }}">
                @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Новая цена</label>
                <input type="number" class="form-control" id="new_price" name="new_price" placeholder="price" value="{{ $product -> new_price ? $product -> new_price : NULL}}">
                @if ($errors->has('new_price'))
                <span class="text-danger">{{ $errors->first('new_price') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="body">Описание</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ $product -> description }}</textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
    <a href="{{ route('home.index') }}">На главную</a>
</div>
@include('layouts.footer')
@include('layouts.jsscript')
</body>
</html>