@extends('component.main')
@section('content')

<style>

    .hero-clip-shape{
        clip-path: polygon(12% 0%, 100% 0%, 100% 88%, 88% 100%, 0% 100%, 0% 12%);
    }

    .glass-card{
        backdrop-filter: blur(14px);
        background: rgba(255,255,255,0.72);
        border: 1px solid rgba(255,255,255,0.45);
    }

    .floating-animation{
        animation: floating 6s ease-in-out infinite;
    }

    @keyframes floating{
        0%,100%{
            transform: translateY(0px);
        }
        50%{
            transform: translateY(-14px);
        }
    }

    .rotate-animation{
        animation: rotateSlow 18s linear infinite;
    }

    @keyframes rotateSlow{
        from{
            transform: rotate(0deg);
        }
        to{
            transform: rotate(360deg);
        }
    }

    .interactive-card{
        transition: all 0.4s ease;
    }

    .interactive-card:hover{
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(15,23,42,0.12);
    }

</style>

<!-- PREMIUM FINANCE BANNER SLIDER -->
<section class="relative w-full overflow-hidden bg-gradient-to-b from-[#f8fafc] to-white pt-32 ">

    <!-- Background Glow -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-[#166534]/5 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 right-0 w-80 h-80 bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

    <!-- Container -->
    <div class="relative max-w-[1600px] mx-auto px-3 sm:px-5 lg:px-8">

        <!-- Top Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-8">

            <!-- Left -->
            <div class="max-w-2xl">


                <!-- Heading -->
                <h2
                    class="mt-5 text-[34px] sm:text-[46px] lg:text-[58px] font-black leading-[1] tracking-tight text-[#071a2f]"
                >

                    Financial Growth
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                        Built For Your Future
                    </span>

                </h2>

                <!-- Description -->
                <p
                    class="mt-5 max-w-2xl text-gray-600 text-sm sm:text-base lg:text-lg leading-7 sm:leading-8"
                >

                    Personalized investment, insurance and financial planning strategies designed to help you grow, protect and manage your wealth confidently.

                </p>

            </div>

            <!-- Right Controls -->
            <div class="flex items-center gap-3">

                <!-- Prev -->
                <button
                    id="prevBtn"
                    class="group flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-2xl border border-gray-200 bg-white shadow-lg transition duration-300 hover:-translate-y-1 hover:border-[#166534]/20 hover:bg-[#166534]"
                >

                    <img
                        src="https://img.icons8.com/?size=100&id=86999&format=png&color=103e24"
                        alt="Previous"
                        class="h-5 w-5 transition duration-300 group-hover:brightness-0 group-hover:invert"
                    >

                </button>

                <!-- Next -->
                <button
                    id="nextBtn"
                    class="group flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-2xl border border-gray-200 bg-white shadow-lg transition duration-300 hover:-translate-y-1 hover:border-[#166534]/20 hover:bg-[#166534]"
                >

                    <img
                        src="https://img.icons8.com/?size=100&id=85837&format=png&color=103e24"
                        alt="Next"
                        class="h-5 w-5 transition duration-300 group-hover:brightness-0 group-hover:invert"
                    >
                    

                </button>

            </div>

        </div>

        <!-- SLIDER WRAPPER -->
    <!-- Carousel Wrapper -->
    <div class="relative overflow-hidden ">

        <!-- Track -->
      <div
          id="carouselTrack"
          class="carousel-track flex"
        >

      <!-- Item -->
          <div class="min-w-full px-0 sm:px-2 rounded-[32px] ">

        <div class=" justify-center shadow-sm group relative overflow-hidden rounded-[32px] border border-white/20 bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">

          <img src="{{ asset('assets/image/img1.png') }}" alt="Slider Image" class="w-full h-[180px] sm:h-[260px] md:h-[360px] lg:h-[460px] object-cover rounded-[32px] transition duration-[1200ms] group-hover:scale-105">

             <div
        class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#071a2f]/70 via-[#071a2f]/20 to-transparent"
      ></div>
            </div>

          </div>

          <!-- Item -->
          <div class="min-w-full px-0 sm:px-2 rounded-[32px] ">

            <div class=" justify-center shadow-sm group relative overflow-hidden rounded-[32px] border border-white/20 bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">

              <img src="{{ asset('assets/image/img2.png') }}" alt="Slider Image" class="w-full h-[180px] sm:h-[260px] md:h-[360px] lg:h-[460px] object-cover rounded-[32px] transition duration-[1200ms] group-hover:scale-105">

               <div
        class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#071a2f]/70 via-[#071a2f]/20 to-transparent"
      ></div>
            </div>

          </div>

          <!-- Item -->
          <div class="min-w-full px-0 sm:px-2 rounded-[32px] ">

          <div class="absolute inset-0 bg-gradient-to-tr from-[#166534]/10 via-transparent to-[#ffdf82]/20 opacity-0 group-hover:opacity-100 transition duration-700 z-10"></div>

              <img src="{{ asset('assets/image/img3.png') }}" alt="Slider Image" class="w-full h-[180px] sm:h-[260px] md:h-[360px] lg:h-[460px] object-cover rounded-[32px] transition duration-[1200ms] group-hover:scale-105">

          <div
        class="absolute inset-x-0 bottom-0 h-32 "
      ></div>
      
            </div>

        </div>

    

      </div>


  </div>

    </div>

</section>



<!-- Premium Wealth Section -->
<section class="relative overflow-hidden bg-[#f5f7fb] py-20">

    <!-- Background Glow -->
    <div class="absolute top-0 left-0 w-[420px] h-[420px] bg-[#166534]/5 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-[#d6a437]/10 rounded-full blur-3xl"></div>

    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="
        background-image:
        linear-gradient(to right, #0f172a 1px, transparent 1px),
        linear-gradient(to bottom, #0f172a 1px, transparent 1px);
        background-size: 70px 70px;">
    </div>

    <!-- Container -->
    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- LEFT CONTENT -->
            <div class="relative z-10">

                <!-- Badge -->
                <div
                    data-aos="fade-right"
                    class="inline-flex items-center gap-4 rounded-full border border-[#166534]/10 bg-white px-6 py-3 shadow-sm">

                    <!-- Icon -->
                    <div class="w-10 h-10 rounded-full bg-[#166534]/10 flex items-center justify-center text-[#166534] text-lg">

                        🛡

                    </div>

                    <!-- Text -->
                    <span class="text-[#166534] text-sm font-bold tracking-[0.18em] uppercase">
                        Trusted by 50,000+ Investors Across India
                    </span>

                </div>

                <!-- Heading -->
                <div class="mt-10 max-w-2xl">

                    <h2
                        data-aos="fade-up"
                        data-aos-delay="100"
                        class="text-[#0f172a] font-extrabold leading-[0.92] tracking-tight text-[48px] sm:text-[66px] lg:text-[84px]">

                        Build Your

                        <span class="block">
                            Financial
                        </span>

                        <span class="bg-gradient-to-r from-[#166534] to-[#d6a437] bg-clip-text text-transparent">
                            Legacy Today
                        </span>

                    </h2>

                    <!-- Description -->
                    <p
                        data-aos="fade-up"
                        data-aos-delay="200"
                        class="mt-8 text-gray-600 text-[18px] sm:text-[20px] leading-9 max-w-2xl">

                        Smart investment strategies, retirement planning and wealth advisory solutions designed to secure your future and maximize long-term financial growth.

                    </p>

                </div>

                <!-- Buttons -->
                <div
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="flex flex-col sm:flex-row gap-5 mt-12">

                    <!-- Primary Button -->
                    <a href="#"
                        class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-[#166534] px-8 py-5 text-white text-lg font-semibold shadow-[0_20px_50px_rgba(22,101,52,0.18)] hover:bg-[#14532d] hover:-translate-y-1 transition duration-300">

                        Start Free Consultation

                        <span class="transition duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                    <!-- Secondary -->
                    <a href="#"
                        class="inline-flex items-center justify-center gap-3 rounded-2xl border border-gray-300 bg-white px-8 py-5 text-[#0f172a] text-lg font-semibold hover:bg-gray-50 hover:border-[#166534]/30 transition duration-300">

                        📞 Schedule a Call

                    </a>

                </div>

            </div>

            <!-- RIGHT STATS SECTION -->
            <div
                data-aos="fade-left"
                data-aos-delay="300"
                class="relative">

                <!-- Main Card -->
                <div class="relative rounded-[40px] bg-white border border-gray-100 p-8 sm:p-10 lg:p-12 shadow-[0_35px_90px_rgba(15,23,42,0.08)] overflow-hidden">

                    <!-- Decorative -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-[#166534]/10 rounded-full blur-3xl"></div>

                    <!-- Top -->
                    <div class="relative">

                        <!-- Small Label -->
                        <div class="inline-flex items-center gap-3 rounded-full bg-[#166534]/10 px-5 py-3">

                            <div class="w-3 h-3 rounded-full bg-[#166534]"></div>

                            <span class="text-[#166534] text-sm font-semibold">
                                Trusted Financial Performance
                            </span>

                        </div>

                        <!-- Heading -->
                        <h3 class="mt-8 text-[#0f172a] text-4xl sm:text-5xl font-extrabold leading-tight">

                            Helping Families
                            Build Wealth With Confidence

                        </h3>

                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-5 mt-12">

                        <!-- Stat -->
                        <div class="group rounded-3xl border border-gray-100 bg-[#f8fafc] p-7 hover:bg-white hover:shadow-xl transition duration-300">

                            <h4 class="text-[#0f172a] text-5xl font-extrabold">
                                ₹50Cr+
                            </h4>

                            <p class="mt-4 text-gray-500 text-lg">
                                Assets Managed
                            </p>

                        </div>

                        <!-- Stat -->
                        <div class="group rounded-3xl border border-gray-100 bg-[#f8fafc] p-7 hover:bg-white hover:shadow-xl transition duration-300">

                            <h4 class="text-[#166534] text-5xl font-extrabold">
                                98%
                            </h4>

                            <p class="mt-4 text-gray-500 text-lg">
                                Client Retention
                            </p>

                        </div>

                        <!-- Stat -->
                        <div class="group rounded-3xl border border-gray-100 bg-[#f8fafc] p-7 hover:bg-white hover:shadow-xl transition duration-300">

                            <h4 class="text-[#d6a437] text-5xl font-extrabold">
                                A+
                            </h4>

                            <p class="mt-4 text-gray-500 text-lg">
                                Financial Rating
                            </p>

                        </div>

                        <!-- Stat -->
                        <div class="group rounded-3xl border border-gray-100 bg-[#f8fafc] p-7 hover:bg-white hover:shadow-xl transition duration-300">

                            <h4 class="text-[#0f172a] text-5xl font-extrabold">
                                24/7
                            </h4>

                            <p class="mt-4 text-gray-500 text-lg">
                                Support Available
                            </p>

                        </div>

                    </div>

                 

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Coverage Section -->
<section class="relative overflow-hidden bg-white py-24 lg:py-32">

    <!-- Background Effects -->
    <div class="absolute top-0 left-0 w-[350px] h-[350px] bg-[#166534]/5 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.03]"
         style="
         background-image:
         linear-gradient(to right, #0f172a 1px, transparent 1px),
         linear-gradient(to bottom, #0f172a 1px, transparent 1px);
         background-size: 70px 70px;">
    </div>

    <!-- Container -->
    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center">

            <!-- Badge -->
            <div
                data-aos="fade-up"
                class="inline-flex items-center gap-3 rounded-full border border-[#166534]/15 bg-[#166534]/5 px-5 py-3 shadow-sm">

                <div class="w-8 h-8 rounded-full bg-[#166534]/10 flex items-center justify-center text-[#166534] text-sm">

                    🛡

                </div>

                <span class="text-[#166534] text-sm font-semibold tracking-wide">
                    Coverage Options
                </span>

            </div>

            <!-- Heading -->
            <h2
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-8 text-[#0f172a] font-extrabold leading-tight text-4xl sm:text-5xl lg:text-6xl">

                Insurance for

                <span class="bg-gradient-to-r from-[#166534] to-[#d6a437] bg-clip-text text-transparent">
                    Every Need
                </span>

            </h2>

            <!-- Description -->
            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="mt-8 text-gray-600 text-lg sm:text-xl leading-9">

                Whether you're protecting your family, home, health, or business, our personalized insurance solutions are designed to provide complete peace of mind and long-term security.

            </p>

        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-20">

            <!-- Card -->
            <div
                data-aos="fade-up"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 bg-white p-8 shadow-sm transition duration-500 hover:-translate-y-3 hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <!-- Top Glow -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#166534]/5 rounded-full blur-2xl"></div>

                <!-- Icon -->
                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#8ce2ad3a] group-hover:text-white">

                    <img src="https://img.icons8.com/?size=100&id=NjeRhi2Xlxho&format=png&color=103e24" alt="Auto Insurance" class="w-full h-full object-contain">

                </div>

                <!-- Content -->
                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Auto Insurance
                    </h3>

                    <p class="mt-5 text-gray-600 leading-8 text-lg">

                        Full coverage including liability, collision and comprehensive protection for your vehicles with bundle savings up to 25%.

                    </p>

                </div>

                <!-- Button -->
                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#166534] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

            <!-- Card -->
            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 bg-white p-8 shadow-sm transition duration-500 hover:-translate-y-3 hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <div class="absolute top-0 right-0 w-32 h-32 bg-[#ffdf82]/20 rounded-full blur-2xl"></div>

                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#ffdf82]/20 flex items-center justify-center text-4xl text-[#d6a437] transition duration-500 group-hover:bg-[#d6a43760] group-hover:text-white">

                    <img src="https://img.icons8.com/?size=100&id=hZrnMu3GWdU4&format=png&color=103e24" alt="Home Insurance" class="w-full h-full object-contain">

                </div>

                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Home Insurance
                    </h3>

                    <p class="mt-5 text-gray-600 leading-8 text-lg">

                        Protect your property from damage, theft, disasters and liability with fully customizable homeowner coverage plans.

                    </p>

                </div>

                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#166534] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

            <!-- Card -->
            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 bg-white p-8 shadow-sm transition duration-500 hover:-translate-y-3 hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <div class="absolute top-0 right-0 w-32 h-32 bg-[#166534]/5 rounded-full blur-2xl"></div>

                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#73cf974f] group-hover:text-white">

                    <img src ="https://img.icons8.com/?size=100&id=NR71eCj1xDa2&format=png&color=103e24" alt="Life Insurance" class="w-full h-full object-contain">

                </div>

                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Life Insurance
                    </h3>

                    <p class="mt-5 text-gray-600 leading-8 text-lg">

                        Secure your family's future with flexible term, whole life and universal life insurance plans starting affordably.

                    </p>

                </div>

                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#166534] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

            <!-- Card -->
            <div
                data-aos="fade-up"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 bg-white p-8 shadow-sm transition duration-500 hover:-translate-y-3 hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <div class="absolute top-0 right-0 w-32 h-32 bg-[#ffdf82]/20 rounded-full blur-2xl"></div>

                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#ffdf82]/20 flex items-center justify-center text-4xl text-[#d6a437] transition duration-500 group-hover:bg-[#d6a4376c] group-hover:text-white">

                    <img src="https://img.icons8.com/?size=100&id=MFof5Aea0GQi&format=png&color=103e24" alt="" class="">

                </div>

                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Health Insurance
                    </h3>

                    <p class="mt-5 text-gray-600 leading-8 text-lg">

                        Affordable individual and family health plans with extensive provider networks, dental and vision coverage.

                    </p>

                </div>

                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#166534] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

            <!-- Card -->
            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 bg-white p-8 shadow-sm transition duration-500 hover:-translate-y-3 hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <div class="absolute top-0 right-0 w-32 h-32 bg-[#166534]/5 rounded-full blur-2xl"></div>

                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#16653442] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=LulHCtBbujRA&format=png&color=103e24" alt="Business Insurance" class="w-full h-full object-contain">

                </div>

                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Business Insurance
                    </h3>

                    <p class="mt-5 text-gray-600 leading-8 text-lg">

                        Comprehensive liability, property and workers compensation insurance for businesses of every size.

                    </p>

                </div>

                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#166534] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

            <!-- Card -->
            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="group relative overflow-hidden rounded-[32px] border border-gray-100 transition duration-500 hover:-translate-y-3 p-6 shadow-sm hover:shadow-[0_30px_80px_rgba(15,23,42,0.12)]">

                <div class="absolute top-0 right-0 w-40 h-40 bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#646516]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#8a882c42] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=2I3HRlgV9aQI&format=png&color=103e24" alt="Umbrella Insurance" class="w-full h-full object-contain">

                </div>

                <div class="relative z-10 mt-8">

                    <h3 class="text-3xl font-bold text-black">
                        Umbrella Insurance
                    </h3>

                    <p class="mt-5 text-gray-900 leading-8 text-lg">

                        Additional liability protection beyond standard policies with coverage up to $5 million for total peace of mind.

                    </p>

                </div>

                <a href="#"
                   class="relative z-10 inline-flex items-center gap-3 mt-8 text-[#16422c] font-semibold text-lg group-hover:gap-5 transition-all duration-300">

                    Learn More

                    <span>→</span>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- Why Choose Us Section -->
<section class="relative overflow-hidden bg-[#f8fafc] py-24 lg:py-32">

    <!-- Background Effects -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-[#166534]/5 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 left-0 w-[350px] h-[350px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.03]"
         style="
         background-image:
         linear-gradient(to right, #0f172a 1px, transparent 1px),
         linear-gradient(to bottom, #0f172a 1px, transparent 1px);
         background-size: 70px 70px;">
    </div>

    <!-- Container -->
    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center">

            <!-- Badge -->
            <div
                data-aos="fade-up"
                class="inline-flex items-center gap-3 rounded-full border border-[#166534]/15 bg-white px-5 py-3 shadow-sm">

                <div class="w-8 h-8 rounded-full bg-[#166534]/10 flex items-center justify-center text-[#166534] text-sm">

                    ✨

                </div>

                <span class="text-[#166534] text-sm font-semibold tracking-wide">
                    Why Clients Choose Us
                </span>

            </div>

            <!-- Heading -->
            <h2
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-8 text-[#0f172a] font-extrabold leading-tight text-4xl sm:text-5xl lg:text-6xl">

                Financial Protection
                <span class="bg-gradient-to-r from-[#166534] to-[#d6a437] bg-clip-text text-transparent">
                    Backed by Trust
                </span>

            </h2>

            <!-- Description -->
            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="mt-8 text-gray-600 text-lg sm:text-xl leading-9">

                We combine personalized guidance, transparent policies and modern digital solutions to make insurance simple, reliable and stress-free for every client.

            </p>

        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-10 mt-20">

            <!-- Card 1 -->
            <div
                data-aos="fade-up"
                class="group relative overflow-hidden rounded-[32px] bg-white border border-gray-100 p-8 lg:p-10 shadow-sm transition duration-500 hover:-translate-y-2 hover:shadow-[0_30px_80px_rgba(15,23,42,0.10)] flex flex-col items-center">

                <!-- Glow -->
                <div class="absolute top-0 right-0 w-40 h-40 bg-[#166534]/5 rounded-full blur-3xl"></div>

                <!-- Icon -->
                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#1665345d] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=82688&format=png&color=103e24" alt="" class="w-full h-full object-contain">

                </div>

                <!-- Content -->
                <div class="relative z-10 mt-8 text-center">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Smarter Savings Plans
                    </h3>

                    <p class="mt-5 text-gray-600 text-lg leading-8">

                        Get access to customized policy bundles, loyalty rewards and cost-effective plans designed to maximize value without compromising coverage.

                    </p>

                </div>

            </div>

            <!-- Card 2 -->
            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="group relative overflow-hidden rounded-[32px] bg-white border border-gray-100 p-8 lg:p-10 shadow-sm transition duration-500 hover:-translate-y-2 hover:shadow-[0_30px_80px_rgba(15,23,42,0.10)] flex flex-col items-center">

                <div class="absolute top-0 right-0 w-40 h-40 bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

                <!-- Icon -->
                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#ffdf82]/20 flex items-center justify-center text-4xl text-[#c68d1e] transition duration-500 group-hover:bg-[#c68e1e77] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=9yZkLojBKpyI&format=png&color=103e24" alt="" class="w-full h-full object-contain">

                </div>

                <!-- Content -->
                <div class="relative z-10 mt-8 text-center">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Fast & Hassle-Free Claims
                    </h3>

                    <p class="mt-5 text-gray-600 text-lg leading-8">

                        Our dedicated support system ensures quick claim reviews, transparent updates and faster resolutions when you need help the most.

                    </p>

                </div>

            </div>

            <!-- Card 3 -->
            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="group relative overflow-hidden rounded-[32px] bg-white border border-gray-100 p-8 lg:p-10 shadow-sm transition duration-500 hover:-translate-y-2 hover:shadow-[0_30px_80px_rgba(15,23,42,0.10)] flex flex-col items-center">

                <div class="absolute top-0 right-0 w-40 h-40 bg-[#166534]/5 rounded-full blur-3xl"></div>

                <!-- Icon -->
                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#16653473] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=57925&format=png&color=103e24" alt="" class="w-full h-full object-contain">

                </div>

                <!-- Content -->
                <div class="relative z-10 mt-8 text-center">

                    <h3 class="text-3xl font-bold text-[#0f172a]">
                        Dedicated Financial Experts
                    </h3>

                    <p class="mt-5 text-gray-600 text-lg leading-8">

                        Work directly with experienced advisors who understand your goals and provide personalized guidance at every stage of your journey.

                    </p>

                </div>

            </div>

            <!-- Card 4 -->
            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="group relative overflow-hidden rounded-[32px]  p-8 lg:p-10 shadow-[0_25px_60px_rgba(22,101,52,0.20)] transition duration-500 hover:-translate-y-2 flex flex-col items-center">

                <div class="absolute top-0 right-0 w-44 h-44 bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

                <!-- Icon -->
                <div class="relative z-10 w-20 h-20 rounded-3xl bg-[#166534]/10 flex items-center justify-center text-4xl text-[#166534] transition duration-500 group-hover:bg-[#1665345e] group-hover:text-white">

                  <img src="https://img.icons8.com/?size=100&id=11460&format=png&color=103e24" alt="" class="w-full h-full object-contain">

                </div>

                <!-- Content -->
                <div class="relative z-10 mt-8 text-center">

                    <h3 class="text-3xl font-bold text-black">
                        Modern Digital Experience
                    </h3>

                    <p class="mt-5 text-gray-900 text-lg leading-8">

                        Access your policies, manage renewals, track claims and connect with advisors anytime through our secure and user-friendly digital platform.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Free Consultation Section -->
<section class="relative overflow-hidden bg-[#f8fafc] py-24 lg:py-32">

    <!-- Background Glow -->
    <div class="absolute top-0 left-0 w-[420px] h-[420px] bg-[#166534]/5 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>

    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-[0.03]"
         style="
         background-image:
         linear-gradient(to right, #0f172a 1px, transparent 1px),
         linear-gradient(to bottom, #0f172a 1px, transparent 1px);
         background-size: 70px 70px;">
    </div>

    <!-- Container -->
    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            <!-- LEFT CONTENT -->
            <div class="relative z-10">

                <!-- Label -->
                <div
                    data-aos="fade-up"
                    class="inline-flex items-center gap-4">

                    <div class="w-12 h-[2px] bg-[#166534]"></div>

                    <span class="text-[#166534] text-sm font-bold tracking-[0.25em] uppercase">
                        Free Consultation
                    </span>

                </div>

                <!-- Heading -->
                <div class="mt-8">

                    <h2
                        data-aos="fade-up"
                        data-aos-delay="100"
                        class="text-[#0f172a] font-extrabold leading-[1.05] text-4xl sm:text-5xl lg:text-6xl">

                        Ready To Take The
                        <span class="block text-[#166534]">
                            First Step Toward
                        </span>

                        Financial Freedom?

                    </h2>

                </div>

                <!-- Description -->
                <div
                    data-aos="fade-up"
                    data-aos-delay="150"
                    class="mt-10 space-y-7">

                    <p class="text-gray-600 text-lg leading-9 max-w-2xl">

                        Book a complimentary 30-minute consultation with our financial experts. No pressure, no complicated jargon — just honest guidance tailored to your financial goals.

                    </p>

                </div>

                <!-- Features -->
                <div
                    data-aos="fade-up"
                    data-aos-delay="200"
                    class="space-y-5 mt-12">

                    <!-- Feature -->
                    <div class="flex items-start gap-5 rounded-3xl bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-[#166534]/10 flex items-center justify-center text-[#166534] text-2xl flex-shrink-0">

                            ✔

                        </div>

                        <div>

                            <h4 class="text-2xl font-bold text-[#0f172a]">
                                100% Confidential Discussion
                            </h4>

                            <p class="mt-3 text-gray-500 leading-7">

                                Your financial information and personal goals remain completely private and secure.

                            </p>

                        </div>

                    </div>

                    <!-- Feature -->
                    <div class="flex items-start gap-5 rounded-3xl bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-[#ffdf82]/25 flex items-center justify-center text-[#c68d1e] text-2xl flex-shrink-0">

                            ✔

                        </div>

                        <div>

                            <h4 class="text-2xl font-bold text-[#0f172a]">
                                Personalized Financial Action Plan
                            </h4>

                            <p class="mt-3 text-gray-500 leading-7">

                                Get practical recommendations tailored to your income, investments and future goals.

                            </p>

                        </div>

                    </div>

                    <!-- Feature -->
                    <div class="flex items-start gap-5 rounded-3xl bg-white border border-gray-100 p-6 shadow-sm hover:shadow-lg transition duration-300">

                        <div class="w-14 h-14 rounded-2xl bg-[#166534]/10 flex items-center justify-center text-[#166534] text-2xl flex-shrink-0">

                            ✔

                        </div>

                        <div>

                            <h4 class="text-2xl font-bold text-[#0f172a]">
                                Available In Hindi & English
                            </h4>

                            <p class="mt-3 text-gray-500 leading-7">

                                Comfortable consultations in your preferred language for better understanding and clarity.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT FORM -->
            <div
                data-aos="fade-left"
                class="relative">

                <!-- Glow -->
                <div class="absolute inset-0 bg-[#166534]/10 blur-3xl rounded-full"></div>

                <!-- Form Card -->
                <div class="relative rounded-[40px] bg-white border border-gray-100 shadow-[0_30px_80px_rgba(15,23,42,0.08)] p-8 sm:p-10 lg:p-12">

                    <!-- Top -->
                    <div class="flex items-center justify-between gap-5">

                        <div>

                            <p class="text-[#166534] text-sm font-bold tracking-[0.25em] uppercase">
                                Consultation Form
                            </p>

                            <h3 class="mt-4 text-4xl font-extrabold text-[#0f172a]">
                                Let's Talk About
                                Your Future
                            </h3>

                        </div>

                        <!-- Icon -->
                        <div class="hidden sm:flex w-20 h-20 rounded-3xl bg-[#166534]/10 items-center justify-center text-4xl text-[#166534]">

                            💬

                        </div>

                    </div>

                    <!-- Form -->
                    <form class="mt-10 space-y-6">

                        <!-- Full Name -->
                        <div>

                            <label class="block text-[#0f172a] font-semibold mb-3">
                                Full Name
                            </label>

                            <input
                                type="text"
                                placeholder="Your name"
                                class="w-full h-16 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 text-lg text-[#0f172a] placeholder:text-gray-400 outline-none focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10 transition"
                            >

                        </div>

                        <!-- Phone -->
                        <div>

                            <label class="block text-[#0f172a] font-semibold mb-3">
                                Phone Number
                            </label>

                            <input
                                type="text"
                                placeholder="+91 98765 43210"
                                class="w-full h-16 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 text-lg text-[#0f172a] placeholder:text-gray-400 outline-none focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10 transition"
                            >

                        </div>

                        <!-- Email -->
                        <div>

                            <label class="block text-[#0f172a] font-semibold mb-3">
                                Email Address
                            </label>

                            <input
                                type="email"
                                placeholder="you@example.com"
                                class="w-full h-16 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 text-lg text-[#0f172a] placeholder:text-gray-400 outline-none focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10 transition"
                            >

                        </div>

                        <!-- Message -->
                        <div>

                            <label class="block text-[#0f172a] font-semibold mb-3">
                                Message
                            </label>

                            <textarea
                                rows="5"
                                placeholder="How can we help you?"
                                class="w-full rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 py-5 text-lg text-[#0f172a] placeholder:text-gray-400 outline-none focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10 transition resize-none"
                            ></textarea>

                        </div>

                        <!-- Button -->
                        <button
                            type="submit"
                            class="group relative inline-flex w-full items-center justify-center gap-3 overflow-hidden rounded-2xl bg-[#166534] px-8 py-5 text-lg font-bold text-white shadow-[0_20px_50px_rgba(22,101,52,0.25)] transition duration-300 hover:-translate-y-1 hover:bg-[#14532d]"
                        >

                            <span class="relative z-10">
                                Request Free Consultation
                            </span>

                            <span class="relative z-10 text-2xl transition group-hover:translate-x-1">
                                →
                            </span>

                            <!-- Hover Glow -->
                            <div class="absolute inset-0 bg-gradient-to-r from-[#166534] via-[#1f7a43] to-[#166534] opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        </button>

                        <!-- Privacy -->
                        <p class="text-center text-gray-500 text-sm leading-7">

                            We respect your privacy. Your information is safe with us and will never be shared with third parties.

                        </p>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



@endsection    
