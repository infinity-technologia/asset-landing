@extends('landing.app')

@section('content')
    @include('landing.header-page')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="container">
                <div class="d-flex flex-column flex-xl-row">
                    <div class="flex-lg-row-fluid me-xl-15">
                        <div class="mb-17">
                            <div class="mb-8">
                                <div class="overlay mb-5">
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px">
                                        <img class="img-fluid rounded" src="{{ asset('images/news/news1.png') }}" alt="">
                                    </div>
                                </div>
                                <p href="#" class="text-dark text-justify fs-2 fw-bold">7 Cara Mengatasi Panas Dalam yang Efektif</p>
                            </div>
                            <div class="fs-5 fw-semibold text-gray-600 text-justify">
                                <p class="mb-8">{{ substr("First, a disclaimer - the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it's important to spend those vital hours planning your post and even thinking about",0,300) }}...</p>
                                <p>
                                    <a href="{{ route('news-update-detail','testing-detail') }}">Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                        <div class="mb-17">
                            <div class="row g-10">
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','testing-detail') }}"><img class="img-fluid rounded" src="{{ asset('images/news/news2.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','testing-detail') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Lorem 1</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We've been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection