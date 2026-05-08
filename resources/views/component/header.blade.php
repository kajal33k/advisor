<style>
.nav-link {
  position: relative;
  transition: 0.3s;
  color: #402e32;
}

.nav-link:hover {
  color: #e3c472;
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 0%;
  height: 2px;
  background: #e3c472;
  transition: 0.3s;
}

.nav-link:hover::after {
  width: 100%;
}

.mobile-link {
  color: #402e32;
}

.mobile-link:hover {
  color: #e3c472;
}
</style>

<header id="navbar" class="w-full fixed top-0 left-0 z-50 bg-white/95 backdrop-blur border-b border-[#cca290]/30 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- LOGO -->
    <div class="flex items-center gap-3">
    <img src="{{ asset('assets/image/logo.png') }}" class="w-full h-12 object-cover">
    </div>

    <!-- NAV LINKS -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
      <a href="/" class="nav-link">Home</a>
      <a href="/about" class="nav-link">About</a>
      <a href="/services" class="nav-link">Services</a>
      <a href="/products" class="nav-link">Investment Plans</a>
      <a href="/insights" class="nav-link">Insights</a>
      <a href="/contact" class="nav-link">Contact</a>
    </nav>

    <!-- CTA -->
    <div class="hidden md:block">
      <a href="/consultation"
         class="btn-primary px-5 py-4 rounded-full text-sm font-semibold shadow-md text-white hover:scale-105 transition">
        Get Consultation
      </a>
    </div>

    <!-- MOBILE BUTTON -->
    <button id="menuBtn" class="md:hidden text-[#402e32] text-2xl">
      ☰
    </button>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="hidden md:hidden px-6 pb-6 bg-white border-t border-[#C8861D]/20">
    <div class="flex flex-col gap-4 font-medium">
      <a href="/" class="mobile-link">Home</a>
      <a href="/about" class="mobile-link">About</a>
      <a href="/services" class="mobile-link">Services</a>
      <a href="/products" class="mobile-link">Investment Plans</a>
      <a href="/insights" class="mobile-link">Insights</a>
      <a href="/contact" class="mobile-link">Contact</a>

      <a href="/consultation" class="mt-3 px-4 py-2 bg-[#402e32] text-[#e3c472] rounded-lg text-center font-semibold">
        Get Consultation
      </a>
    </div>
  </div>
</header>

<script>
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const navbar = document.getElementById("navbar");

// mobile toggle
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});

// scroll effect (premium feel)
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add("shadow-lg");
  } else {
    navbar.classList.remove("shadow-lg");
  }
});
</script>