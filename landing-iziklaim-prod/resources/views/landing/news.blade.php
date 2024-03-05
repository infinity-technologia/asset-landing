<style>
    .text-url {
        color: black
    }

    .text-url:hover {
        color: blue;
    }
</style>
<section id="news" class="events section-bg">
    <div class="container-fluid px-5" data-aos="fade-up">
        <div class="section-title">
            <h2>NEWS</h2>
        </div>
        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($news as $ev)
                    <a style="text-url"
                        href="{{ $ev['check'] == null ? route('news.detail', $ev['slug']) : $ev['check'] }}">
                        <div class="swiper-slide">
                            <div class="events-item">
                                <div class="member">
                                    <div class="events-img">
                                        <img src="{{ $ev['images'] }}" class="img-fluid rounded" alt="">
                                    </div>
                                    <div class="member-info pt-3">
                                        <span class="text-url">{{ $ev['title'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev d-none d-md-block"></div>
            <div class="swiper-button-next d-none d-md-block"></div>
        </div>
    </div>
</section>
