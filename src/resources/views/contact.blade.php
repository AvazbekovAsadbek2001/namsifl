@extends('layout.main')
@section('title')
    Contact
@endsection
@section('section')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">@lang('contact.contact')</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">@lang('contact.home')</a></li>
                    <li class="current">@lang('contact.contact')</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-main-wrapper">
                <div class="map-wrapper">
                    <iframe style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1821.013137245764!2d71.509231!3d41.006738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15fb92619a203113!2sNamangan%20State%20Institute%20of%20Foreign%20Languages!5e0!3m2!1suz!2sus!4v1670705393104!5m2!1suz!2sus">
                    </iframe>
                </div>

                <div class="contact-content">
                    <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-card">
                            <div class="icon-box"><i class="bi bi-geo-alt"></i></div>
                            <div class="contact-text">
                                <h4>@lang('contact.location')</h4>
                                <p>Namangan viloyati, To‘raqo‘rg‘on tumani, “Yangiobod” MFY, Saodat ko‘chasi, 28-uy</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="icon-box"><i class="bi bi-envelope"></i></div>
                            <div class="contact-text">
                                <h4>@lang('contact.email')</h4>
                                <p>info@namsifl.uz</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="icon-box"><i class="bi bi-telephone"></i></div>
                            <div class="contact-text">
                                <h4>@lang('contact.phone')</h4>
                                <p>+998 (69) 442-11-67</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="icon-box"><i class="bi bi-clock"></i></div>
                            <div class="contact-text">
                                <h4>@lang('contact.hours')</h4>
                                <p>@lang('contact.hours_time')</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                        <h3>@lang('contact.contact')</h3>
                        <p>@lang('contact.contact_text')</p>

                        <form action="/}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="@lang('contact.your_name')" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" name="email" class="form-control" placeholder="@lang('contact.your_email')" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" name="subject" class="form-control" placeholder="@lang('contact.subject')" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="message" class="form-control" rows="5" placeholder="@lang('contact.message')" required></textarea>
                            </div>

                            <div class="my-3">
                                <div class="loading">@lang('contact.loading')</div>
                                <div class="error-message"></div>
                                <div class="sent-message">@lang('contact.sent_success')</div>
                            </div>

                            <div class="form-submit">
                                <button type="submit">@lang('contact.send_message')</button>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
