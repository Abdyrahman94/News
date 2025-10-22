@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="h3 fw-bold text-success mt-5">
            Categories
        </div>
        <div class="row row-cols-4 g-3 mt-2">
            @foreach ($categories as $category)
                <div class="col">
                    <div class="card p-2">
                        <div class="h4">
                            <a href="{{ route('post', ['categoryId' => $category->id]) }}" class="text-decoration-none text-success">{{ $category->name }}</a>
                             <span class="btn btn-success small">{{ $category->posts_count }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection