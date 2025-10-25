@extends('layouts.app')

@section('content')
    @include('alert.app')
    <form action="{{ route('logout') }}" method="post" class="text-end mt-2 me-5">
        @csrf
        <input type="hidden">
        <button type="submit" class="btn btn-danger border-2"><span class="bi bi-box-arrow-left me-2"></span>LogOut</button>
    </form>
    <div class="container-lg">
        <div class="h3 fw-bold text-success mt-5">
            {{ __('app.Posts') }}
        </div>
        <div class="row mt-5">
            <div class="col-3">
                <form action="{{ route('post.index') }}" method="get">
                    <label for="category" class="form-label">{{ __('app.Category') }}</label><br>
                    <select class="form-select mt-1" name="categoryId" id="category">
                        <option value="">-</option>
                        @foreach ($categories_2 as $category_2)
                            <option value="{{ $category_2->id }}">
                                {{ $category_2->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success me-1">{{ __('app.Submit') }}</button>
                        <button class="btn btn-danger"><a href="{{ route('post.index') }}"></a>{{ __('app.Reset') }}</button>
                    </div>
                </form>
            </div>
            <div class="col-9">
                <div class="row row-cols-4 g-2">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="border border-success rounded-3 p-3 h-100">
                                <div class="text-success">
                                    <span class="fw-bold">{{ __('app.Title') }}</span> {{ $post->title }}
                                </div>
                                <div class="text-primary small">
                                    <span class="fw-bold">{{ __('app.Category_id') }}</span> {{ $post->category_id }}
                                </div>
                                <div class="text-warning small">
                                    <span class="fw-bold">{{ __('app.View_count') }}</span> {{ $post->view_count }}
                                </div>
                                <div class="text-info small">
                                    <span class="fw-bold">{{ __('app.Like_count') }}</span> {{ $post->like_count }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4 text-success">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>

    </div>
@endsection
