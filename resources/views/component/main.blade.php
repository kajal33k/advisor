<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BASIC META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>@yield('title', 'Financial Future | Wealth Advisory')</title>
    <meta name="description" content="@yield('meta_description', 'Grow your wealth with smart financial strategies, investment planning and expert advisory services.')">

    <!-- FAVICON (optional) -->
    <link rel="icon" href="/favicon.ico">

    <!-- GOOGLE FONTS (PRELOAD FOR PERFORMANCE) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>

    :root{
      --primary: #166534;
      --secondary: #22c55e;
      --dark: #111827;
      --text: #4b5563;
      --bg: #ffffff;
      --light-bg: #f8fafc;
    }

    body{
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-style: Plus Jakarta Sans, sans-serif;
    }

    .hero-section{
      background:
      radial-gradient(circle at top left, rgba(34,197,94,0.10), transparent 25%),
      radial-gradient(circle at bottom right, rgba(15,23,42,0.05), transparent 30%),
      linear-gradient(180deg,#ffffff 0%,#f8fafc 100%);
    }

    .glass-card{
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.5);
    }

    .hero-image{
      animation: float 5s ease-in-out infinite;
    }

    @keyframes float{
      0%,100%{
        transform: translateY(0px);
      }
      50%{
        transform: translateY(-10px);
      }
    }

    .gradient-text{
      background: linear-gradient(to right,var(--primary),#0f172a);
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
    }

    .btn-primary{
      background: linear-gradient(135deg,var(--primary),#14532d);
    }

    .stats-card:hover{
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(15,23,42,0.08);
    }

</style>

    <!-- TAILWIND CONFIG (CUSTOM THEME) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#402e32',
                        gold: '#e3c472',
                        accent: '#cca290',
                    },
                    fontFamily: {
                        body: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <!-- TAILWIND CDN (DEV ONLY - REPLACE IN PROD) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- GLOBAL STYLES -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f9fafb;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="font-body text-gray-800">

    <!-- HEADER -->
    @include('component.header')

    <!-- MAIN CONTENT -->
    <main class="pt-0">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('component.footer')

    <!-- OPTIONAL GLOBAL JS -->
    <script>
        // Example: Scroll shadow for header
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-lg');
                } else {
                    navbar.classList.remove('shadow-lg');
                }
            }
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 1000,
    once: true
  });
});
</script>

<!-- main pge banner slider -->
 
<script>

  const track = document.getElementById("carouselTrack");

  const slides = document.querySelectorAll("#carouselTrack > div");

  const nextBtn = document.getElementById("nextBtn");

  const prevBtn = document.getElementById("prevBtn");

  let currentIndex = 0;

  const totalSlides = slides.length;

  function updateCarousel(){

    track.style.transform =
      `translateX(-${currentIndex * 100}%)`;

  }

  // Next
  nextBtn.addEventListener("click", () => {

    currentIndex++;

    if(currentIndex >= totalSlides){
      currentIndex = 0;
    }

    updateCarousel();

  });

  // Previous
  prevBtn.addEventListener("click", () => {

    currentIndex--;

    if(currentIndex < 0){
      currentIndex = totalSlides - 1;
    }

    updateCarousel();

  });

  // Autoplay
  setInterval(() => {

    currentIndex++;

    if(currentIndex >= totalSlides){
      currentIndex = 0;
    }

    updateCarousel();

  }, 2000);

</script>
<!-- CONSULTATION POPUP -->
<!-- FIXED PREMIUM CONSULTATION POPUP -->
<!-- RESPONSIVE CONSULTATION POPUP -->
<div
    id="consultationPopup"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-[#071a2f]/80 backdrop-blur-md p-3 sm:p-5"
>

    <!-- POPUP CARD -->
    <div
        id="popupCard"
        class="relative w-full max-w-5xl overflow-hidden rounded-[26px] sm:rounded-[36px] bg-white shadow-[0_40px_120px_rgba(0,0,0,0.35)] scale-95 opacity-0 transition-all duration-500 max-h-[95vh] overflow-y-auto"
    >

        <!-- CLOSE BUTTON -->
        <button
            id="closePopup"
            class="absolute top-3 right-3 sm:top-5 sm:right-5 z-50 flex h-10 w-10 sm:h-11 sm:w-11 items-center justify-center rounded-full bg-white text-[#0f172a] shadow-lg transition duration-300 hover:rotate-90 hover:bg-red-50 hover:text-red-500"
        >
            ✕
        </button>

        <!-- MAIN GRID -->
        <div class="grid lg:grid-cols-[1fr_0.92fr]">

            <!-- LEFT SIDE -->
            <div
                class="relative overflow-hidden bg-gradient-to-br from-[#071a2f] via-[#0d2d22] to-[#166534] px-5 py-10 sm:px-8 sm:py-12 lg:px-12 lg:py-14 text-white flex flex-col justify-center"
            >

                <!-- GLOW -->
                <div class="absolute top-0 left-0 w-72 h-72 rounded-full bg-[#ffdf82]/20 blur-3xl"></div>

                <div class="absolute bottom-0 right-0 w-72 h-72 rounded-full bg-[#166534]/30 blur-3xl"></div>

                <!-- CONTENT -->
                <div class="relative z-10">

                    <!-- MINI BADGE -->
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-4 py-2 backdrop-blur-xl"
                    >

                        <div class="h-2 w-2 rounded-full bg-[#ffdf82] animate-pulse"></div>

                        <span class="text-[10px] sm:text-xs font-semibold tracking-[0.2em] uppercase">
                            Free Financial Consultation
                        </span>

                    </div>

                    <!-- HEADING -->
                    <h2
                        class="mt-6 sm:mt-8 text-[32px] leading-[1.05] sm:text-[42px] lg:text-[52px] font-extrabold"
                    >

                        Build A Smarter

                        <span class="block text-[#ffdf82]">
                            Financial Future
                        </span>

                    </h2>

                    <!-- DESCRIPTION -->
                    <p
                        class="mt-5 sm:mt-7 text-white/80 text-sm sm:text-base lg:text-lg leading-7 sm:leading-8 max-w-lg"
                    >

                        Get personalized guidance from expert financial advisors to grow, manage and protect your wealth confidently.

                    </p>

                    <!-- FEATURES -->
                    <div class="space-y-4 mt-8 sm:mt-10">

                        <!-- FEATURE -->
                        <div
                            class="flex gap-3 sm:gap-4 rounded-2xl sm:rounded-3xl border border-white/10 bg-white/5 p-4 sm:p-5 backdrop-blur-xl"
                        >

                            <div
                                class="flex h-11 w-11 sm:h-12 sm:w-12 flex-shrink-0 items-center justify-center rounded-xl sm:rounded-2xl bg-[#ffdf82]/20 text-lg sm:text-xl text-[#ffdf82]"
                            >
                                ✔
                            </div>

                            <div>

                                <h4 class="text-base sm:text-lg font-bold">
                                    Personalized Advice
                                </h4>

                                <p class="mt-1 text-xs sm:text-sm leading-6 text-white/70">

                                    Tailored strategies for investments, retirement and wealth growth.

                                </p>

                            </div>

                        </div>

                        <!-- FEATURE -->
                        <div
                            class="flex gap-3 sm:gap-4 rounded-2xl sm:rounded-3xl border border-white/10 bg-white/5 p-4 sm:p-5 backdrop-blur-xl"
                        >

                            <div
                                class="flex h-11 w-11 sm:h-12 sm:w-12 flex-shrink-0 items-center justify-center rounded-xl sm:rounded-2xl bg-[#ffdf82]/20 text-lg sm:text-xl text-[#ffdf82]"
                            >
                                🛡
                            </div>

                            <div>

                                <h4 class="text-base sm:text-lg font-bold">
                                    100% Confidential
                                </h4>

                                <p class="mt-1 text-xs sm:text-sm leading-6 text-white/70">

                                    Your information remains private, safe and secure.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div
                class="relative bg-white px-5 py-8 sm:px-8 sm:py-10 lg:px-10 lg:py-12 flex flex-col justify-center"
            >

                <!-- BADGE -->
                <div
                    class="inline-flex w-fit items-center gap-2 rounded-full bg-[#166534]/10 px-4 py-2"
                >

                    <div class="h-2 w-2 rounded-full bg-[#166534]"></div>

                    <span class="text-[#166534] text-xs sm:text-sm font-semibold">
                        Get Started Today
                    </span>

                </div>

                <!-- TITLE -->
                <h3
                    class="mt-5 sm:mt-6 text-[28px] leading-[1.1] sm:text-[34px] lg:text-[40px] font-extrabold text-[#0f172a]"
                >

                    Request Your
                    Free Consultation

                </h3>

                <!-- FORM -->
                <form class="mt-6 sm:mt-8 space-y-4 sm:space-y-5">

                    <!-- INPUT -->
                    <div>

                        <label class="mb-2 block text-xs sm:text-sm font-semibold text-[#0f172a]">
                            Full Name
                        </label>

                        <input
                            type="text"
                            placeholder="Enter your name"
                            class="h-12 sm:h-14 w-full rounded-xl sm:rounded-2xl border border-gray-200 bg-[#f8fafc] px-4 sm:px-5 text-sm sm:text-[15px] outline-none transition duration-300 focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"
                        >

                    </div>

                    <!-- INPUT -->
                    <div>

                        <label class="mb-2 block text-xs sm:text-sm font-semibold text-[#0f172a]">
                            Phone Number
                        </label>

                        <input
                            type="text"
                            placeholder="+91 98765 43210"
                            class="h-12 sm:h-14 w-full rounded-xl sm:rounded-2xl border border-gray-200 bg-[#f8fafc] px-4 sm:px-5 text-sm sm:text-[15px] outline-none transition duration-300 focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"
                        >

                    </div>

                    <!-- INPUT -->
                    <div>

                        <label class="mb-2 block text-xs sm:text-sm font-semibold text-[#0f172a]">
                            Email Address
                        </label>

                        <input
                            type="email"
                            placeholder="you@example.com"
                            class="h-12 sm:h-14 w-full rounded-xl sm:rounded-2xl border border-gray-200 bg-[#f8fafc] px-4 sm:px-5 text-sm sm:text-[15px] outline-none transition duration-300 focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"
                        >

                    </div>

                    <!-- TEXTAREA -->
                    <div>

                        <label class="mb-2 block text-xs sm:text-sm font-semibold text-[#0f172a]">
                            Message
                        </label>

                        <textarea
                            rows="4"
                            placeholder="Tell us about your financial goals..."
                            class="w-full rounded-xl sm:rounded-2xl border border-gray-200 bg-[#f8fafc] px-4 sm:px-5 py-4 text-sm sm:text-[15px] outline-none transition duration-300 resize-none focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"
                        ></textarea>

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="group relative inline-flex w-full items-center justify-center gap-3 overflow-hidden rounded-xl sm:rounded-2xl bg-[#166534] px-6 py-3 sm:py-4 text-sm sm:text-base font-bold text-white shadow-[0_20px_50px_rgba(22,101,52,0.22)] transition duration-300 hover:-translate-y-1 hover:bg-[#14532d]"
                    >

                        <span class="relative z-10">
                            Book Free Consultation
                        </span>

                        <span class="relative z-10 text-lg sm:text-xl transition group-hover:translate-x-1">
                            →
                        </span>

                    </button>

                    <!-- PRIVACY -->
                    <p class="text-center text-[11px] sm:text-xs leading-6 text-gray-500">

                        Your information is completely secure and never shared.

                    </p>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- SCRIPT -->
<script>

    const popup = document.getElementById("consultationPopup");

    const popupCard = document.getElementById("popupCard");

    const closePopup = document.getElementById("closePopup");

    let popupShown = false;

    // SHOW POPUP AFTER 40% SCROLL
    window.addEventListener("scroll", () => {

        if (popupShown) return;

        const scrollTop =
            window.scrollY;

        const docHeight =
            document.documentElement.scrollHeight - window.innerHeight;

        const scrollPercent =
            (scrollTop / docHeight) * 100;

        if (scrollPercent >= 40) {

            popupShown = true;

            popup.classList.remove("hidden");

            popup.classList.add("flex");

            setTimeout(() => {

                popupCard.classList.remove("scale-95", "opacity-0");

                popupCard.classList.add("scale-100", "opacity-100");

            }, 50);

            document.body.style.overflow = "hidden";

        }

    });

    // CLOSE POPUP
    closePopup.addEventListener("click", closeModal);

    // CLICK OUTSIDE TO CLOSE
    popup.addEventListener("click", (e) => {

        if (e.target === popup) {

            closeModal();

        }

    });

    function closeModal() {

        popupCard.classList.remove("scale-100", "opacity-100");

        popupCard.classList.add("scale-95", "opacity-0");

        setTimeout(() => {

            popup.classList.remove("flex");

            popup.classList.add("hidden");

            document.body.style.overflow = "auto";

        }, 300);

    }

</script>

</body>
</html>