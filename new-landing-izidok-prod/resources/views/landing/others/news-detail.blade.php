@extends('landing.app')

@section('content')
    @include('landing.header-page')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="container">
                <div class="d-flex flex-column flex-xl-row">
                    <div class="flex-lg-row-fluid me-xl-15">
                        <div class="mb-10">
                            @include('landing.others.news.'.$blade)
                        </div>
                        <a href="{{ route('news-update') }}" class="fs-6 fw-semibold link-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection