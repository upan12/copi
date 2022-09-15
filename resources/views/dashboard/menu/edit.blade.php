@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit menu</h1>
    </div>

    <form action="/dashboard/menu/{{ $menu->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                required autofocus value="{{ old('name', $menu->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                required value="{{ old('price', $menu->price) }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
                required value="{{ old('stock', $menu->stock) }}">
            @error('stock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="variant" class="form-label">Variant</label>
            <select class="form-select" name="variant">
                @if (old('variant', $menu->variant) == 'Hot')
                    <option selected value="Hot">Hot</option>
                    <option value="Ice">Ice</option>
                    <option value="Hot / Ice">Hot / Ice</option>
                @elseif (old('variant', $menu->variant) == 'Ice')
                <option value="Hot">Hot</option>
                <option selected value="Ice">Ice</option>
                <option value="Hot / Ice">Hot / Ice</option>
                @else
                    <option selected value="Hot / Ice">Hot / Ice</option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image's menu</label>
            <input type="hidden" name="oldImage" value="{{ $menu->image }}">
            @if ($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @endError" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @endError
        </div>
        {{-- <div class="mb-3">
            <label for="image" class="form-label">Post image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                accept="image/*" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/blog/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
