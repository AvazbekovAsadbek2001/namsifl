<footer id="footer" class="footer position-relative light-background">
    <div class="container footer-top">
        <div class="row gy-4 justify-content-center text-center text-lg-start">

            <!-- 1. Institut logosi va ijtimoiy tarmoqlar -->
            <div class="col-12 col-md-6 col-lg-4">
                <a href="/" class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="100" height="100">
                </a>
                <div class="footer-contact pt-3">
                    <p>@lang('loyout.note')</p>
                </div>
                <div class="social-links d-flex justify-content-center justify-content-lg-start mt-4">
                    <a href="https://t.me/ibratnamdchti" title="Telegram"><i class="bi bi-telegram"></i></a>
                    <a href="https://www.facebook.com/NSIFL?mibextid=ZbWKwL" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/namsifl.uz/" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="http://www.youtube.com/@NamSIFL" title="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://t.me/murojaatrektorgabot" title="Bot"><i class="bi bi-robot"></i></a>
                </div>
            </div>

            <!-- 2. Axborot xizmatlari -->
            <div class="col-12 col-md-6 col-lg-4">
                <h4>@lang('loyout.info_services')</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://hemis.namsifl.uz" target="_blank">@lang('loyout.links.hemis')</a></li>
                    <li class="mb-2"><a href="https://mt.namdchti.uz" target="_blank">@lang('loyout.links.moodle')</a></li>
                    <li class="mb-2"><a href="https://e-library.namsifl.uz" target="_blank">@lang('loyout.links.library')</a></li>
                    <li class="mb-2"><a href="https://edu.uz" target="_blank">@lang('loyout.links.edu')</a></li>
                    <li class="mb-2"><a href="https://dtm.uz" target="_blank">@lang('loyout.links.dtm')</a></li>
                </ul>
            </div>

            <!-- 3. Manzil -->
            <div class="col-12 col-md-6 col-lg-4">
                <h4>@lang('loyout.contact_title')</h4>
                <p class="mt-3"><strong>@lang('loyout.address'):</strong> @lang('loyout.address')</p>
                <p><strong>@lang('loyout.phone'):</strong> <a href="tel:+998694421167">+998 (69) 442-11-67</a></p>
                <p><strong>@lang('loyout.email'):</strong> <a href="mailto:info@namsifl.uz">info@namsifl.uz</a></p>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p><strong class="px-1 sitename">@lang('loyout.institute_name')</strong> <span>@lang('loyout.copyright')</span></p>
        <div class="credits">
            @lang('loyout.developed_by')
        </div>
    </div>
</footer>
