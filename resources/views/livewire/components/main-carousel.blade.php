@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush
<div>
    <!-- Slider main container -->
    <div class="swiper -z-50">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="rounded max-w-3xl overflow-hidden">
                    <img src="{{ asset('assets/img/carousel-lldikti.webp') }}" alt="maskot">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rounded max-w-3xl overflow-hidden">
                    <img src="https://i1.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/10/maskottfixxx.png" alt="maskot">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rounded max-w-3xl overflow-hidden">
                    <img src="https://i1.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/kampusmerdeka.png" alt="kampusmerdeka">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="rounded max-w-3xl overflow-hidden">
                    <img src="https://i0.wp.com/www.lldikti4.or.id/wp-content/uploads/2022/04/hardiknas-2022-01-rev-1.png" alt="hardiknas">
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            mousewheel: true,
            keyboard: true,
        });

    </script>
    @endpush
</div>
