{{-- @extends('preview.iziklaim.landing.app') --}}
@extends('landing-side')


@section('content')
    @php
        function extractParagraphs($data)
        {
            // Remove <figure> elements
            $dataWithoutFigure = preg_replace('/<figure[^>]*>.*?<\/figure>/s', '', $data);

            // Extract content inside <p> tags
            preg_match_all('/<p>(.*?)<\/p>/', $dataWithoutFigure, $matches);

            // Return the extracted content as an array
            return $matches[1];
        }
    @endphp
    <style>
        .text-justify {
            text-align: justify;
        }
    </style>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="container">
                <div class="d-flex flex-column flex-xl-row">
                    <div class="flex-lg-row-fluid me-xl-15">

                        <div class="mb-17 text-center">

                            <div class="mb-8">
                                <div class="overlay mb-2">
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded">
                                        <img class="img-fluid rounded" src="{{ $news[0]['images'] }}" alt="">
                                    </div>
                                </div>
                                <p href="#" class="text-dark text-justify fs-3 fw-bold">{{ $news[0]['title'] }}</p>
                            </div>
                            <div class=" text-justify">

                                <p class="mb-8">
                                    @if ($news['0']['desc'] != null)
                                        {!! substr(extractParagraphs($news['0']['desc'])[1], 0, 300) !!}...
                                    @endif
                                </p>
                                <p>
                                    <a href="{{ url('view/news/iziklaim/' . $news[0]['slug']) }}">Baca
                                        selengkapnya</a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-5 mb-5">
                            <div class="row g-10">
                                @foreach ($news as $item)
                                    <div class="col-md-4">
                                        <div class="card-xl-stretch">
                                            <a
                                                href="{{ $item['check'] == null ? url('view/news/iziklaim/' . $item['slug']) : $item['check'] }}"><img
                                                    class="img-fluid rounded w-100" src="{{ $item['images'] }}"
                                                    alt=""></a>
                                            <div class="mt-3">
                                                <a href="{{ $item['check'] == null ? url('view/news/iziklaim/' . $item['slug']) : $item['check'] }}"
                                                    class="text-hover-primary text-dark lh-base">{{ $item['title'] }}</a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
