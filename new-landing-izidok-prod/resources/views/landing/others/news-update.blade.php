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
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded">
                                        <img class="img-fluid rounded" src="{{ asset('images/news/izidok-menjadi-pionir.png') }}" alt="">
                                    </div>
                                </div>
                                <p href="#" class="text-dark text-justify fs-2 fw-bold">Menyambut 2024, izidok Siap Menjadi Pionir Ekosistem Kesehatan Digital di Indonesia</p>
                            </div>
                            <div class="fs-5 fw-semibold text-gray-600 text-justify">
                                <p class="mb-8">{{ substr("Perkembangan sistem pelayanan kesehatan di Indonesia saat ini sedang mengalami peningkatan yang cukup signifikan",0,300) }}...</p>
                                <p>
                                    <a href="{{ route('news-update-detail','izidok-siap-menjadi-pionir-ekosistem-kesehatan-digital-di-indonesia') }}">Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                        <div class="mb-17">
                            <div class="row g-10">
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','izidok-siap-menjadi-pionir-ekosistem-kesehatan-digital-di-indonesia') }}"><img class="img-fluid rounded w-100" src="{{ asset('images/news/izidok-menjadi-pionir.png') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','izidok-siap-menjadi-pionir-ekosistem-kesehatan-digital-di-indonesia') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Menyambut 2024, izidok Siap Menjadi Pionir Ekosistem Kesehatan Digital di Indonesia</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">Perkembangan sistem pelayanan kesehatan di Indonesia saat ini sedang mengalami peningkatan yang cukup signifikan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="{{ route('news-update-detail','izidok-Terus-Berkembang-Demi-Mendukung-Kebijakan-Pemerintah-Terkait-Rekam-Medis-Elektronik') }}"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news1.jpg') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="{{ route('news-update-detail','izidok-Terus-Berkembang-Demi-Mendukung-Kebijakan-Pemerintah-Terkait-Rekam-Medis-Elektronik') }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">izidok Terus Berkembang Demi Mendukung Kebijakan Pemerintah Terkait Rekam Medis Elektronik</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">Mendukung integrasi dengan sistem pemerintah seperti BPJS dan Satu Sehat untuk mempermudah pekerjaan fasilitas pelayanan kesehatan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="https://dailysocial.id/post/izidok-e-rekam-medis" target="_blank"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news2.jpg') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="https://dailysocial.id/post/izidok-e-rekam-medis" target="_blank" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Izidok Kembangkan Layanan e-Rekam Medis untuk Bantu Dokter Jalankan Praktik Mandiri</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">Memberikan dukungan fitur "stylus pen", agar dokter tetap bisa bekerja dengan kebiasaan lama</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-xl-stretch">
                                        <a href="https://www.jpnn.com/news/peduli-kemanusiaan-hidup-sehat-iziklaim-izidok-gelar-donor-darah" target="_blank"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news3.jpg') }}" alt=""></a>
                                        <div class="mt-3">
                                            <a href="https://www.jpnn.com/news/peduli-kemanusiaan-hidup-sehat-iziklaim-izidok-gelar-donor-darah" target="_blank" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">Peduli Kemanusiaan & Hidup Sehat, iziklaim & izidok Gelar Donor Darah</a>
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">Aplikasi iziklaim, sebuah platform sistem klaim elektronik untuk membantu pelayanan di rumah sakitl, bekerja sama dengan PMI Jakarta Selatan menggelar kegiatan donor darah di Fatmawati, Jakarta Selatan. Foto: dok pribadi for JPNN</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection