<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Medlinx Asia Teknologi</title>

    <meta name="description"
        content="Medlinx Asia Teknologi Berinovasi memberikan solusi teknologi bagi industri kesehatan Indonesia">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/LineIcons.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <link href="{{ asset('landing/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('landing.navbar')
    @include('landing.home')
    @include('landing.about')
    @include('landing.product')
    @include('landing.solution')
    @include('landing.portfolio')
    @include('landing.rewards')
    @include('landing.testimoni')
    @include('landing.partner')
    @include('landing.contact')
    @include('landing.footer')

    <div class="loading" style="display: none;">
        <p>Sedang proses pengiriman...</p>
    </div>

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== Jquery js ======-->
    <script src="{{ asset('landing/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing/js/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('landing/js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('landing/js/ajax-contact.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('landing/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('landing/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing/js/scrolling-nav.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <script src="{{ asset('landing/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.validate.js') }}"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var s, t;
            s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = 'https://s3-ap-southeast-1.amazonaws.com/qiscus-sdk/public/qismo/qismo-v4.js';
            s.async = true;
            s.onload = s.onreadystatechange = function() {
                window.QismoApp = new Qismo('aral-ulpeolyn9fplvcb0', {
                    options: {
                        channel_id: 823,
                        extra_fields: [],
                    },
                    onRoomChanged(data) {
                        QismoApp.sendMessage({
                            event_name: "send-message",
                            text: "Get Started"
                        });
                    }
                });
            }
            t = document.getElementsByTagName('script')[0];
            t.parentNode.insertBefore(s, t);
        });

        $(document).ready(function() {
            $("#contact-form").validate();
        });

        $(document).on('click', '.btn-solution', function(e) {
            e.preventDefault()
            $('input#subject').val($(this).data('name'))
            $('.kontak').trigger('click')
        });
        $(document).on('click', 'input[name=type]', function(e) {
            $('.btn-contact').prop('disabled', false)
        })

        $(document).on('click', '.btn-contact', function(e) {
            e.preventDefault()
            subject = $('input[name=subject]').val()
            name = $('input[name=name]').val()
            hp = $('input[name=phone]').val()
            email = $('input[name=email]').val()
            type = $('input[name=type]:checked').val()
            message = $('textarea#message').val()

            if (name == '' || hp == '' || email == '' || message == '') {
                Swal.fire(
                    'Oops!',
                    "Silakan lengkapi inputan terlebih dahulu.",
                    'error'
                )
            } else {
                $('.loading').show();
                $('.loading').fadeIn('slow');
                $.ajax({
                    type: "POST",
                    url: "{{ route('send-message') }}",
                    dataType: "JSON",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        subject: subject,
                        name: name,
                        hp: hp,
                        email: email,
                        type: type,
                        message: message,
                    },
                    success: function(data) {
                        if (data.status) {
                            $('.loading').fadeOut('slow');
                            $('.loading').hide();
                            $('input[name=subject]').val('')
                            $('input[name=name]').val('')
                            $('input[name=phone]').val('')
                            $('input[name=email]').val('')
                            $('input[name=type]').prop('checked', false)
                            $('textarea#message').val('')
                            $('.btn-contact').prop('disabled', true)
                            Swal.fire(
                                'Success!',
                                "Pesan akan kami proses. Terima kasih sudah menghubungi kami.",
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'Oops!',
                                data.message,
                                'error'
                            )
                        }
                    }
                });
            }
        })
    </script>

</body>

</html>
