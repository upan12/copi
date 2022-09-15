@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $menu->name }}</h1>
            <p>Price : {{ $menu->price }}</p>
            <p>Stock : {{ $menu->stock }}</p>
            <p>Variant : {{ $menu->variant }}</p>

            <a href="/dashboard/menu" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all posts</a>
            <a href="/dashboard/menu/{{ $menu->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/menu/{{ $menu->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($menu->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset($menu->image) }}" alt="" class="img-fluid mt-3 d-block">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?coffee" alt="coffee" class="img-fluid mt-3">
            @endif
            

        </div>
    </div>
</div>

@endsection