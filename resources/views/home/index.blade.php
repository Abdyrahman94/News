@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="d-flex align-items-center justify-content-center" style="height: 70vh;">
            <div class="">
                <div class="display-3 text-success fw-bold">
                    {{ __('app.News Portal') }}
                </div>
                <div class="d-flex justify-content-center mt-2 ">
                    <a href="{{ route('login') }}" class="btn btn-primary"><span class="bi-box-arrow-in-right me-2"></span>{{ __('app.Login') }}</a>
                    <a href="{{ route('register') }}" class="btn btn-warning ms-2">{{ __('app.Register') }} <span class="bi-person-plus"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
