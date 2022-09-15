@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $blog->title }}</h1>

            <a href="/dashboard/blog" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all blog</a>
            <a href="/dashboard/blog/{{ $blog->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/blog/{{ $blog->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($blog->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid mt-3 d-block">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?coffee" alt="coffee" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $blog->body !!}
            </article>
            

        </div>
    </div>
</div>

@endsection