@extends('layout.main')
@section('title')
   {{ json_decode($faculty->name, true)[App::getLocale()] }}
@endsection
@section('section')
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0"> {{ json_decode($faculty->name, true)[App::getLocale()] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">@lang('contact.home')</a></li>
            <li><a href="{{ route('faculties') }}"> @lang('structure.faculties') </a></li>
            <li class="current"> {{ json_decode($faculty->name, true)[App::getLocale()] }}</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="blog-details" class="blog-details leadership section">
      <div class="container" data-aos="fade-up">
          <article class="article">
            <div class="article-header">
                <h1 class="title" data-aos="fade-up" data-aos-delay="100">
                  {{ json_decode($faculty->name, true)[App::getLocale()] }}
                </h1>
            </div>
            <div class="article-wrapper">
              <aside class="table-of-contents" data-aos="fade-left">
                <h3>Kafedralar ro'yxati</h3>
                <nav>
                  <ul>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#skeuomorphism">The Skeuomorphic Era</a></li>
                    <li><a href="#flat-design">Flat Design Revolution</a></li>
                    <li><a href="#material-design">Material Design</a></li>
                    <li><a href="#neumorphism">Rise of Neumorphism</a></li>
                    <li><a href="#future">Future Trends</a></li>
                  </ul>
                </nav>
              </aside>

              <div class="article-content">
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.

                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                The journey of user interface design has been marked by significant shifts in aesthetic approaches, each era bringing its own unique perspective on how digital interfaces should look and feel.

                From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.

              </div>
            </div>

            <div class="article-footer" data-aos="fade-up"></div>
          </article>

          <div class="intro-wrapper">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="intro-image">
                <img src="assets/img/education/teacher-5.webp" alt="School Leadership" class="img-fluid rounded-lg">
                <div class="experience-badge">
                  <span class="years">35+</span>
                  <span class="text">Years of Educational Excellence</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
              <div class="intro-content">
                <span class="subtitle">Fakultet dekani</span>
                <h2 class="title">Inspiring Leaders Shaping Tomorrow's Generation</h2>
                <div class="highlights">
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Expert Faculty</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="content">
                      <h4>Academic Excellence</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="leadership-section" data-aos="fade-up">
          <div class="section-header text-center">
            <h4 class="title">Fakultet xodimlari</h2>
          </div>

          <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-m-4.webp" alt="Principal" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Dr. Robert Williams</h4>
                      <p>Principal</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Dr. Robert Williams</h4>
                    <p class="position">Principal</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-f-6.webp" alt="Vice Principal" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Dr. Jennifer Parker</h4>
                      <p>Vice Principal</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Dr. Jennifer Parker</h4>
                    <p class="position">Vice Principal</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-m-9.webp" alt="Academic Dean" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Prof. Michael Stevens</h4>
                      <p>Academic Dean</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Prof. Michael Stevens</h4>
                    <p class="position">Academic Dean</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-f-5.webp" alt="Student Affairs" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Dr. Angela Martinez</h4>
                      <p>Student Affairs</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Dr. Angela Martinez</h4>
                    <p class="position">Student Affairs</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-f-7.webp" alt="Admissions Director" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Sophia Rodriguez</h4>
                      <p>Admissions Director</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Sophia Rodriguez</h4>
                    <p class="position">Admissions Director</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-m-8.webp" alt="Technology Director" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>James Thompson</h4>
                      <p>Technology Director</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>James Thompson</h4>
                    <p class="position">Technology Director</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-m-3.webp" alt="Athletics Director" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Daniel Wilson</h4>
                      <p>Athletics Director</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Daniel Wilson</h4>
                    <p class="position">Athletics Director</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="team-card">
                <div class="card-inner">
                  <div class="card-front">
                    <div class="member-image">
                      <img src="assets/img/person/person-f-4.webp" alt="Counseling Head" class="img-fluid">
                    </div>
                    <div class="member-info">
                      <h4>Dr. Emily Chen</h4>
                      <p>Counseling Head</p>
                    </div>
                  </div>
                  <div class="card-back">
                    <h4>Dr. Emily Chen</h4>
                    <p class="position">Counseling Head</p>
                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor euismod
                      lobortis.</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
