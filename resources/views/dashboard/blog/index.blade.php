@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Our Blog</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        @can('admin')
            <a href="/dashboard/blog/create" class="mb-3 btn btn-primary">Create new blog</a>
        @endcan
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    @can('admin')
                        <th scope="col">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        @can('admin')
                            <td>
                                <a href="/dashboard/blog/{{ $blog->id }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                                <a href="/dashboard/blog/{{ $blog->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>
                                <form class="d-inline" action="/dashboard/blog/{{ $blog->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
