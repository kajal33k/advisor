@extends('component.main')

@section('title', 'About | Financial Future')
@section('content')

<section class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] pt-28  pb-16 sm:pt-32 sm:pb-20 lg:pt-36 lg:pb-24">
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
    <div class="absolute top-0 left-0 w-80 h-80 rounded-full bg-[#d6a437]/20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-[#166534]/20 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-12 items-center">
            <div class="max-w-3xl">
                <div data-aos="fade-right" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-5 py-2 text-sm font-semibold text-white backdrop-blur-xl">
                    Trusted financial advisors
                </div>

                <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.02] tracking-tight text-white">
                    About
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                        Future Finance
                    </span>
                </h1>

                <p data-aos="fade-up" data-aos-delay="200" class="mt-6 max-w-2xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
                    We help individuals, families and businesses build lasting wealth through investment planning, protection strategies and practical financial guidance tailored to real goals.
                </p>

                <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap gap-4">
                    <a href="#story" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        Discover Our Story
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                        Talk to an Advisor
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div data-aos="fade-up" data-aos-delay="350" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                      
                        <div class="mt-3 text-3xl font-black">50K+</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Clients</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                        
                        <div class="mt-3 text-3xl font-black">Rs. 50Cr+</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Managed</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="450" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                       
                        <div class="mt-3 text-3xl font-black">98%</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Retention</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="500" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                       
                        <div class="mt-3 text-3xl font-black">24/7</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Support</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-delay="150" class="relative">
                <div class="absolute -left-6 top-10 hidden h-28 w-28 rounded-full border border-white/15 bg-white/10 sm:block"></div>
                <div class="absolute -right-4 bottom-8 hidden h-20 w-20 rounded-full bg-[#d6a437]/25 blur-2xl sm:block"></div>

                <div class="overflow-hidden rounded-[34px] border border-white/15 bg-white/10 shadow-[0_30px_90px_rgba(0,0,0,0.3)] backdrop-blur-xl">
                    <img src="{{ asset('assets/image/about.png') }}" alt="About Future Finance" class="h-[420px] w-full object-cover sm:h-[520px]" />
                </div>

                <div class="absolute -bottom-6 left-6 right-6 rounded-[28px] border border-white/15 bg-[#072f1b] p-5 text-white shadow-2xl backdrop-blur-xl">
                    <p class="text-sm uppercase tracking-[0.28em] text-[#d6a437]">Our promise</p>
                    <p class="mt-3 text-base sm:text-lg leading-8 text-white/85">
                        Clear advice, long-term thinking and a plan that evolves as your life does.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="story" class="relative overflow-hidden bg-[#f5f7fb] py-20 lg:py-28">
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

    <div class="absolute top-0 left-0 h-80 w-80 rounded-full bg-[#166534]/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-[#d6a437]/10 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <div data-aos="fade-up">
                <div class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-5 py-2 text-sm font-semibold text-[#166534]">
                    Built around your goals
                </div>
                <h2 class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                    A modern advisory team
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                        focused on clarity
                    </span>
                </h2>
                <p class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                    We combine financial planning, insurance awareness and investment discipline to help clients move from uncertainty to confidence with practical, step-by-step guidance.
                </p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-white bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <h3 class="text-xl font-bold text-[#071a2f]">Personal strategy</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Plans shaped around your income, risk profile and life stage.</p>
                    </div>
                    <div class="rounded-3xl border border-white bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <h3 class="text-xl font-bold text-[#071a2f]">Long-term view</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">Advice that stays relevant as your priorities evolve.</p>
                    </div>
                </div>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div data-aos="fade-up" data-aos-delay="100" class="rounded-[30px] border border-gray-100 bg-white p-7 shadow-xl">
                    <div class="h-14 w-14 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-2">
                        <img src="https://img.icons8.com/?size=100&id=12457&format=png&color=103e24" alt="Understand" class="h-full w-full object-contain" />
                    </div>
                    <h3 class="mt-6 text-2xl font-black text-[#071a2f]">Understand</h3>
                    <p class="mt-3 leading-7 text-slate-600">We begin with your goals, family needs and current financial picture.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="rounded-[30px] border border-gray-100 bg-white p-7 shadow-xl">
                    <div class="h-14 w-14 rounded-2xl bg-[#d6a437]/15 flex items-center justify-center p-2">
                        <img src="https://img.icons8.com/?size=100&id=31197&format=png&color=103e24" alt="Plan" class="h-full w-full object-contain" />
                    </div>
                    <h3 class="mt-6 text-2xl font-black text-[#071a2f]">Plan</h3>
                    <p class="mt-3 leading-7 text-slate-600">We map out investment and protection steps with clear priorities.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="rounded-[30px] border border-gray-100 bg-white p-7 shadow-xl">
                    <div class="h-14 w-14 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-2">
                        <img src="https://img.icons8.com/?size=100&id=10060&format=png&color=103e24" alt="Execute" class="h-full w-full object-contain" />
                    </div>
                    <h3 class="mt-6 text-2xl font-black text-[#071a2f]">Execute</h3>
                    <p class="mt-3 leading-7 text-slate-600">We help implement the plan and review it regularly.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="rounded-[30px] border border-gray-100 bg-white p-7 shadow-xl text-[#103e24]">
                    <div class="h-14 w-14 rounded-2xl bg-white/10 flex items-center justify-center p-2">
                        <img src="https://img.icons8.com/?size=100&id=10445&format=png&color=103e24" alt="Review" class="h-full w-full object-contain" />
                    </div>
                    <h3 class="mt-6 text-2xl font-black">Review</h3>
                    <p class="mt-3 leading-7 text-slate-600">We keep the strategy aligned with life changes and market shifts.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-white py-20 lg:py-28">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-7 md:grid-cols-2 xl:grid-cols-4">
            <div data-aos="fade-up" class="rounded-[30px] border border-gray-100 bg-[#f8fafc] p-8 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Wealth planning</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Custom roadmaps</h3>
                <p class="mt-3 leading-7 text-slate-600">Investment guidance designed for each stage of life.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[30px] border border-gray-100 bg-[#f8fafc] p-8 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Protection</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Insurance support</h3>
                <p class="mt-3 leading-7 text-slate-600">A balanced approach to security and growth.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[30px] border border-gray-100 bg-[#f8fafc] p-8 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Confidence</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Simple advice</h3>
                <p class="mt-3 leading-7 text-slate-600">Clear recommendations that are easy to act on.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="rounded-[30px] border border-gray-100 bg-[#f8fafc] p-8 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Support</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Always available</h3>
                <p class="mt-3 leading-7 text-slate-600">Responsive guidance whenever you need a second opinion.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] py-20 lg:py-28">
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
    <div class="absolute top-0 left-0 h-80 w-80 rounded-full bg-[#d6a437]/20 blur-3xl"></div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-2 text-sm font-semibold text-white backdrop-blur-xl">
            Ready to start?
        </div>
        <h2 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-black leading-tight text-white">
            Let us build your
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                financial future together
            </span>
        </h2>
        <p data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-7 max-w-3xl text-base sm:text-lg leading-8 text-white/80">
            If you want a more organized wealth plan, we are here to help you get started with a practical conversation and a clear next step.
        </p>
        <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="/contact" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                Book a Consultation
            </a>
            <a href="/service" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                Explore Services
            </a>
        </div>
    </div>
</section>

@endsection
