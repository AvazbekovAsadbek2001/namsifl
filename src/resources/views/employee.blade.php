@extends('layout.main')
@section('title')
   Employee
@endsection
@section('section')
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->
    <!-- Leadership Section -->
    <section id="leadership" class="leadership section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-wrapper">
          <div class="row align-items-center">
             <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="300">
              <div class="intro-content">
                <span class="subtitle">Rektor</span>
                <h2 class="title">Karimov Rivojiddin G‘ulomjonovich</h2>
                {{-- <p class="description">Yoshlar masalalari va ma’naviy-ma’rifiy ishlar bo‘yicha birinchi prorektori</p> --}}
                <div class="highlights">
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Phone number :</h4>
                      <p> +998912345678</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="icon-box">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="content">
                      <h4>Email address : </h4>
                      <p>email@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
             </div>
              <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="intro-image">
                  <img src="http://localhost:8000/assets/img/person/person-f-13.webp" alt="School Leadership" class="img-fluid rounded-lg" height="250">
                </div>
              </div>
          </div>
        <div>

        <div class="notice-wrapper">
          <div class="accordion mt-4 notice-items" id="rektorAccordion">
              <div class="accordion-item notice-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    🎓 Biografiya
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#rektorAccordion">
                  <div class="accordion-body">
                    Karimov Rivojiddin G‘ulomjonovich — Toshkent davlat yuridik universiteti bitiruvchisi, 
                    bir necha yillik ilmiy va tashkiliy tajribaga ega. U oliy ta’lim tizimida ko‘plab islohotlar tashabbuskori bo‘lgan.
                  </div>
                </div>
              </div>

              <div class="accordion-item notice-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    💼 Faoliyat yo‘nalishlari
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#rektorAccordion">
                  <div class="accordion-body">
                    Ilmiy-tadqiqot ishlari, yoshlar siyosati, xalqaro hamkorlik va universitetning 
                    innovatsion rivojlanishiga alohida e’tibor qaratadi.
                  </div>
                </div>
              </div>

              <div class="accordion-item notice-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    📋 Qo‘shimcha ma’lumotlar
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#rektorAccordion">
                  <div class="accordion-body">
                    <ul>
                      <li>Ilmiy darajasi: Yuridik fanlari doktori (PhD)</li>
                      <li>Lavozimi: Rektor</li>
                      <li>Tillar: O‘zbek, rus, ingliz</li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Leadership Section -->
@endsection