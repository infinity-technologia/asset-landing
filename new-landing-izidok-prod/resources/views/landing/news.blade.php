<div class="py-20" id="news">
    <div class="container-fluid">
        <div class="my-17">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-0 col-md-2"></div>
                    <div class="col-8 text-center">
                        <h3 class="text-primary">News & Update</h3>
                    </div>
                    <div class="col-4 col-md-2 text-end my-auto">
                        <a href="{{ route('news-update') }}" class="fs-6 fw-semibold link-primary">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="tns tns-default">
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="5000" data-tns-controls="true"
                    data-tns-nav="true" data-tns-nav-position="bottom" data-tns-items="3" data-tns-center="false"
                    data-tns-dots="false" data-tns-prev-button="#kt_news_slider_prev1"
                    data-tns-next-button="#kt_news_slider_next1">
                    @foreach ($news as $item)
                        <div class="card-xl-stretch mx-3">
                            <a href="{{ '#' }}"><img class="img-fluid rounded w-100"
                                    src="{{ $item['images'] }}" alt=""></a>
                            <div class="py-5 px-4 text-start text-md-justify rounded-bottom">
                                <a href="{{ route('news-update-detail', 'izidok-siap-menjadi-pionir-ekosistem-kesehatan-digital-di-indonesia') }}"
                                    class="text-gray-800 fw-bold text-hover-primary text-dark lh-base">{{ $item['title'] }}</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="card-xl-stretch mx-3">
                        <a href="{{ route('news-update-detail','izidok-terus-berkembang-demi-mendukung-kebijakan-pemerintah-terkait-rekam-medis-elektronik') }}"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news1.jpg') }}" alt=""></a>
                        <div class="py-5 px-4 text-start text-md-justify rounded-bottom">
                            <a href="{{ route('news-update-detail','izidok-terus-berkembang-demi-mendukung-kebijakan-pemerintah-terkait-rekam-medis-elektronik') }}" class="text-gray-800 fw-bold text-hover-primary text-dark lh-base">izidok Terus Berkembang Demi Mendukung Kebijakan Pemerintah Terkait Rekam Medis Elektronik</a>
                        </div>
                    </div>
                    <div class="card-xl-stretch mx-3">
                        <a href="https://dailysocial.id/post/izidok-e-rekam-medis" target="_blank"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news2.jpg') }}" alt=""></a>
                        <div class="py-5 px-4 text-start text-md-justify rounded-bottom">
                            <a href="https://dailysocial.id/post/izidok-e-rekam-medis" target="_blank" class="text-gray-800 fw-bold text-hover-primary text-dark lh-base">Izidok Kembangkan Layanan e-Rekam Medis untuk Bantu Dokter Jalankan Praktik Mandiri</a>
                        </div>
                    </div>
                    <div class="card-xl-stretch mx-3">
                        <a href="https://www.jpnn.com/news/peduli-kemanusiaan-hidup-sehat-iziklaim-izidok-gelar-donor-darah" target="_blank"><img class="img-fluid rounded w-100" src="{{ asset('images/news/news2.jpg') }}" alt=""></a>
                        <div class="py-5 px-4 text-start text-md-justify rounded-bottom">
                            <a href="https://www.jpnn.com/news/peduli-kemanusiaan-hidup-sehat-iziklaim-izidok-gelar-donor-darah" target="_blank" class="text-gray-800 fw-bold text-hover-primary text-dark lh-base">Peduli Kemanusiaan & Hidup Sehat, Iziklaim & Izidok Gelar Donor Darah</a>
                        </div>
                    </div> --}}
                </div>
                <button class="btn btn-icon btn-active-color-primary" id="kt_news_slider_prev1">
                    <i class="ki-duotone ki-left fs-2x"></i>
                </button>
                <button class="btn btn-icon btn-active-color-primary" id="kt_news_slider_next1">
                    <i class="ki-duotone ki-right fs-2x"></i>
                </button>
            </div>
        </div>
    </div>
</div>
