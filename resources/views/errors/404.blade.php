@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center display-1 fw-bold text-primary">
            404
            <div>
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-left me-1"></i>
                    Go Home
                </a>
            </div>
        </div>
    </div>
@endsection