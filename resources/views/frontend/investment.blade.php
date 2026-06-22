@extends('component.main')

@section('title', 'Investment Plans | Financial Future')
@section('content')

<section class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] pt-28 pb-16 sm:pt-32 sm:pb-20 lg:pt-36 lg:pb-24">
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
    <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-[#166534]/25 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl">
            <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-2 text-sm font-semibold text-white backdrop-blur-xl">
                Smart wealth solutions
            </div>
            <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.05] tracking-tight text-white">
                Investment plans
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                    designed for your future
                </span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-7 max-w-3xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
                Our investment approach is built to help you grow wealth steadily, protect what matters and keep your plan aligned with your long-term goals.
            </p>
            <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap gap-4">
                <a href="#plans" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                    Explore plans
                </a>
                <a href="/contact" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                    Talk to advisor
                </a>
            </div>
        </div>
    </div>
</section>

<section id="plans" class="relative overflow-hidden bg-[#f5f7fb] py-20 lg:py-28">
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
    <div class="absolute top-0 left-0 h-72 w-72 rounded-full bg-[#166534]/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-[#d6a437]/10 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-5 py-2 text-sm font-semibold text-[#166534]">
                Investment solutions
            </div>
            <h2 data-aos="fade-up" data-aos-delay="100" class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                Plans tailored to
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                    your financial goals
                </span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                Choose a strategy that fits your risk comfort, time horizon and long-term objectives. Each option is designed for clarity and measurable progress.
            </p>
        </div>

        <div class="mt-16 grid gap-7 md:grid-cols-2 xl:grid-cols-3">
            <div data-aos="fade-up" class="group rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=38915&format=png&color=103e24" alt="Growth investment plan" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Growth investment plan</h3>
                <p class="mt-5 leading-8 text-slate-600">Built for long-term capital appreciation and portfolio expansion.</p>
                <ul class="mt-6 space-y-3 text-sm text-slate-600">
                    <li>Long-term capital growth</li>
                    <li>Diversified allocation</li>
                    <li>Market-linked opportunity</li>
                    <li>Ongoing expert guidance</li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" class="group rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#d6a437]/15 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=11203&format=png&color=103e24" alt="Secure savings plan" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Secure savings plan</h3>
                <p class="mt-5 leading-8 text-slate-600">A more conservative approach focused on stability and capital protection.</p>
                <ul class="mt-6 space-y-3 text-sm text-slate-600">
                    <li>Stable returns</li>
                    <li>Lower risk exposure</li>
                    <li>Flexible duration</li>
                    <li>Protection-first structure</li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="group rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=8tQcBMfOTeaN&format=png&color=103e24" alt="Retirement planning" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Retirement planning</h3>
                <p class="mt-5 leading-8 text-slate-600">Future-focused solutions designed to support income and independence later in life.</p>
                <ul class="mt-6 space-y-3 text-sm text-slate-600">
                    <li>Retirement income planning</li>
                    <li>Long-term stability</li>
                    <li>Wealth preservation</li>
                    <li>Tax-aware investing</li>
                </ul>
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
        <div class="grid gap-16 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <div data-aos="fade-up">
                <div class="inline-flex items-center gap-2 rounded-full bg-[#d6a437]/15 px-5 py-2 text-sm font-semibold text-[#9a6b12]">
                    Why clients choose us
                </div>
                <h2 class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                    Investment strategies
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                        built around you
                    </span>
                </h2>
                <p class="mt-6 text-lg leading-8 text-slate-600">
                    We help you choose a plan based on goals, risk tolerance and timeline so the strategy feels practical and sustainable.
                </p>

                <div class="mt-10 space-y-5">
                    <div class="flex items-start gap-4 rounded-[26px] border border-gray-100 bg-[#f8fafc] p-5 shadow-sm">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=12457&format=png&color=103e24" alt="Personalized planning" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-[#071a2f]">Personalized planning</h4>
                            <p class="mt-2 leading-7 text-slate-600">Recommendations shaped to your life stage and priorities.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 rounded-[26px] border border-gray-100 bg-[#f8fafc] p-5 shadow-sm">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#d6a437]/15 p-2">
                            <img src="https://img.icons8.com/?size=100&id=fsEg7R6TluRd&format=png&color=103e24" alt="Expert market insights" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-[#071a2f]">Expert market insights</h4>
                            <p class="mt-2 leading-7 text-slate-600">Guidance informed by market trends and portfolio discipline.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="relative">
                <div class="overflow-hidden rounded-[34px] border border-gray-100 shadow-[0_30px_100px_rgba(15,23,42,0.12)]">
                    <img src="{{ asset('assets/image/in.png') }}" alt="Investment planning" class="h-[460px] w-full object-cover sm:h-[560px]" />
                </div>
                <div class="absolute -bottom-6 left-6 rounded-[28px] border border-white/15 bg-[#072f19] px-6 py-5 text-white shadow-2xl backdrop-blur-xl">
                    <p class="text-sm uppercase tracking-[0.22em] text-[#d6a437]">Simple process</p>
                    <p class="mt-2 text-lg font-semibold">Review. Plan. Invest. Rebalance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#f5f7fb] py-20 lg:py-28">
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
    <div class="absolute top-0 left-0 h-72 w-72 rounded-full bg-[#166534]/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-[#d6a437]/10 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-5 py-2 text-sm font-semibold text-[#166534]">
                Investment projects
            </div>
            <h2 data-aos="fade-up" data-aos-delay="100" class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                Featured projects that show
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                    how your money can work
                </span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                A cleaner project showcase makes it easier to compare different investment directions and understand the role each one can play.
            </p>
        </div>

        <div class="mt-16 grid gap-7 md:grid-cols-2 xl:grid-cols-3">
            <article data-aos="fade-up" class="group overflow-hidden rounded-[32px] border border-gray-100 bg-white shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="relative">
                    <img src="{{ asset('assets/image/img1.png') }}" alt="Equity growth project" class="h-56 w-full object-cover transition duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#071a2f]/80 via-transparent to-transparent"></div>
                    <div class="absolute left-5 top-5 rounded-full bg-white/15 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white backdrop-blur-xl">
                        Growth
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=38915&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                        </div>
                        <h3 class="text-2xl font-black text-[#071a2f]">Equity Growth Project</h3>
                    </div>
                    <p class="mt-4 leading-7 text-slate-600">A long-horizon portfolio idea built for capital appreciation and disciplined rebalancing.</p>
                    <div class="mt-6 flex flex-wrap gap-2 text-xs text-slate-500">
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">High growth</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Long term</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Dynamic</span>
                    </div>
                </div>
            </article>

            <article data-aos="fade-up" data-aos-delay="100" class="group overflow-hidden rounded-[32px] border border-gray-100 bg-white shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="relative">
                    <img src="{{ asset('assets/image/img2.png') }}" alt="Monthly income project" class="h-56 w-full object-cover transition duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#071a2f]/80 via-transparent to-transparent"></div>
                    <div class="absolute left-5 top-5 rounded-full bg-[#d6a437] px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-[#071a2f]">
                        Income
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-2xl bg-[#d6a437]/15 p-2">
                            <img src="https://img.icons8.com/?size=100&id=11203&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                        </div>
                        <h3 class="text-2xl font-black text-[#071a2f]">Monthly Income Project</h3>
                    </div>
                    <p class="mt-4 leading-7 text-slate-600">A steadier structure focused on recurring returns and more predictable cash flow support.</p>
                    <div class="mt-6 flex flex-wrap gap-2 text-xs text-slate-500">
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Stable</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Cash flow</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Practical</span>
                    </div>
                </div>
            </article>

            <article data-aos="fade-up" data-aos-delay="200" class="group overflow-hidden rounded-[32px] border border-gray-100 bg-white shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="relative">
                    <img src="{{ asset('assets/image/img3.png') }}" alt="Retirement security project" class="h-56 w-full object-cover transition duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#071a2f]/80 via-transparent to-transparent"></div>
                    <div class="absolute left-5 top-5 rounded-full bg-white/15 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white backdrop-blur-xl">
                        Retirement
                    </div>
                </div>
                <div class="p-7">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=102879&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                        </div>
                        <h3 class="text-2xl font-black text-[#071a2f]">Retirement Security Project</h3>
                    </div>
                    <p class="mt-4 leading-7 text-slate-600">A future-ready project concept built around preservation, income planning and peace of mind.</p>
                    <div class="mt-6 flex flex-wrap gap-2 text-xs text-slate-500">
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Secure</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Future focus</span>
                        <span class="rounded-full bg-[#f8fafc] px-3 py-2">Balanced</span>
                    </div>
                </div>
            </article>
        </div>

        <div class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
            <div data-aos="fade-up" class="rounded-[28px] bg-white p-6 border border-gray-100 shadow-md">
                <div class="h-10 w-10 rounded-2xl bg-[#166534]/10 p-2">
                    <img src="https://img.icons8.com/?size=100&id=38915&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                </div>
                <h4 class="mt-4 text-lg font-bold text-[#071a2f]">Visual comparison</h4>
                <p class="mt-2 text-sm leading-7 text-slate-600">See the different directions at a glance.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[28px] bg-white p-6 border border-gray-100 shadow-md">
                <div class="h-10 w-10 rounded-2xl bg-[#d6a437]/15 p-2">
                    <img src="https://img.icons8.com/?size=100&id=11203&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                </div>
                <h4 class="mt-4 text-lg font-bold text-[#071a2f]">Clear categories</h4>
                <p class="mt-2 text-sm leading-7 text-slate-600">Each project has a purpose and outcome.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[28px] bg-white p-6 border border-gray-100 shadow-md">
                <div class="h-10 w-10 rounded-2xl bg-[#166534]/10 p-2">
                    <img src="https://img.icons8.com/?size=100&id=24756&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                </div>
                <h4 class="mt-4 text-lg font-bold text-[#071a2f]">Responsive cards</h4>
                <p class="mt-2 text-sm leading-7 text-slate-600">Looks clean on desktop and mobile.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="rounded-[28px] bg-white p-6 border border-gray-100 shadow-md">
                <div class="h-10 w-10 rounded-2xl bg-[#d6a437]/15 p-2">
                    <img src="https://img.icons8.com/?size=100&id=7693&format=png&color=103e24" alt="" class="h-full w-full object-contain" />
                </div>
                <h4 class="mt-4 text-lg font-bold text-[#071a2f]">Hover interaction</h4>
                <p class="mt-2 text-sm leading-7 text-slate-600">Motion adds polish without feeling heavy.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#f5f7fb] py-20">
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
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div data-aos="fade-up" class="rounded-[28px] bg-white p-7 border border-gray-100 shadow-md">
                <h3 class="text-4xl font-black text-[#166534]">50K+</h3>
                <p class="mt-3 text-slate-500">Happy investors</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[28px] bg-white p-7 border border-gray-100 shadow-md">
                <h3 class="text-4xl font-black text-[#166534]">Rs. 50Cr+</h3>
                <p class="mt-3 text-slate-500">Assets managed</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[28px] bg-white p-7 border border-gray-100 shadow-md">
                <h3 class="text-4xl font-black text-[#166534]">98%</h3>
                <p class="mt-3 text-slate-500">Client retention</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="rounded-[28px] bg-white p-7 border border-gray-100 shadow-md">
                <h3 class="text-4xl font-black text-[#166534]">24/7</h3>
                <p class="mt-3 text-slate-500">Support available</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] py-20 lg:py-28">
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
            Get expert guidance
        </div>
        <h2 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-black leading-tight text-white">
            Start building your
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                financial future today
            </span>
        </h2>
        <p data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-7 max-w-3xl text-base sm:text-lg leading-8 text-white/80">
            Talk with our advisors to explore the right plan for growth, protection and long-term peace of mind.
        </p>
        <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="/contact" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                Request consultation
            </a>
            <a href="/service" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                View services
            </a>
        </div>
    </div>
</section>

@endsection
