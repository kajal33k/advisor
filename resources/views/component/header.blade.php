<style>
.nav-link {
  position: relative;
  transition: color 0.3s ease, opacity 0.3s ease;
  color: #0f172a;
}

.nav-link:hover {
  color: #166534;
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 0;
  height: 2px;
  border-radius: 9999px;
  background: #d6a437;
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

.mobile-link {
  color: #0f172a;
  transition: color 0.25s ease;
}

.mobile-link:hover {
  color: #166534;
}
</style>

<header id="navbar" class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur border-b border-[#166534]/20 transition-all duration-300">
  <div class="max-w-7xl mx-auto flex items-center justify-between gap-4 px-6 py-4 lg:px-8">
    <a href="/" class="flex items-center gap-3 text-sm font-semibold tracking-wide text-[#0f172a]">
      <img src="{{ asset('assets/image/logo.png') }}" alt="Financial Future logo" class="h-12 w-auto object-contain" />
    
    </a>

    <nav class="hidden lg:flex items-center gap-8 text-sm font-medium">
      <a href="/" class="nav-link">Home</a>
      <a href="/about" class="nav-link">About</a>
      <a href="/service" class="nav-link">Services</a>
      <a href="/investment" class="nav-link">Investment Plans</a>
      <a href="/insight" class="nav-link">Insights</a>
      <a href="/contact" class="nav-link">Contact</a>
    </nav>

    <div class="hidden lg:flex items-center">
      <a href="/consultation"
         class="inline-flex items-center justify-center rounded-full bg-[#166534] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#00000014] transition duration-300 hover:-translate-y-0.5 hover:bg-[#14532d]">
        Get Consultation
      </a>
    </div>

    <button id="menuBtn" aria-expanded="false" aria-controls="mobileMenu" type="button"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#166534]/20 bg-white text-[#166534] shadow-sm transition hover:bg-[#ecfdf5] focus:outline-none lg:hidden">
      <span class="sr-only">Toggle navigation</span>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M4 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        <path d="M4 17H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <div id="mobileMenu"
       class="lg:hidden overflow-hidden border-t border-[#d6a437]/20 bg-white transition-all duration-300 max-h-0 opacity-0 pointer-events-none">
    <div class="space-y-4 px-6 py-5">
      <a href="/" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">Home</a>
      <a href="/about" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">About</a>
      <a href="/service" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">Services</a>
      <a href="/investment" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">Investment Plans</a>
      <a href="/insight" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">Insights</a>
      <a href="/contact" class="mobile-link block rounded-2xl px-4 py-3 text-sm font-medium hover:bg-[#f7f0e8]">Contact</a>

      <a href="/consultation"
         class="block rounded-2xl bg-[#166534] px-4 py-3 text-center text-sm font-semibold text-[#d6a437] transition hover:bg-[#14532d]">
        Get Consultation
      </a>
    </div>
  </div>
</header>

<script>
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');
const navbar = document.getElementById('navbar');
const mobileLinks = mobileMenu.querySelectorAll('a');

menuBtn.addEventListener('click', () => {
  const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
  menuBtn.setAttribute('aria-expanded', String(!expanded));
  mobileMenu.classList.toggle('max-h-96');
  mobileMenu.classList.toggle('opacity-100');
  mobileMenu.classList.toggle('pointer-events-auto');
});

mobileLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (mobileMenu.classList.contains('opacity-100')) {
      menuBtn.setAttribute('aria-expanded', 'false');
      mobileMenu.classList.remove('max-h-96', 'opacity-100', 'pointer-events-auto');
    }
  });
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('shadow-2xl');
  } else {
    navbar.classList.remove('shadow-2xl');
  }
});
</script>