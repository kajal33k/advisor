@extends('component.main')

@section('title', 'Insights | Financial Future')
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
                Market perspective
            </div>
            <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.05] tracking-tight text-white">
                Insights for
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                    smarter financial decisions
                </span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-7 max-w-3xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
                Explore clear, practical commentary on investing, retirement, wealth protection and long-term planning so you can make more informed choices.
            </p>
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
        <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
            <article data-aos="fade-up" class="overflow-hidden rounded-[34px] border border-gray-100 bg-white shadow-[0_30px_100px_rgba(15,23,42,0.12)]">
                <div class="relative">
                    <img src="{{ asset('assets/image/banner.png') }}" alt="Featured insight" class="h-72 w-full object-cover sm:h-96" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#071a2f]/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-4 py-2 text-xs font-semibold uppercase tracking-[0.22em] text-white backdrop-blur-xl">
                            <img src="https://img.icons8.com/?size=100&id=9919&format=png&color=ffffff" alt="" class="h-4 w-4 object-contain" />
                            Featured
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-[#d6a437] px-4 py-2 text-xs font-semibold uppercase tracking-[0.22em] text-[#071a2f]">
                            <img src="https://img.icons8.com/?size=100&id=7690&format=png&color=103e24" alt="" class="h-4 w-4 object-contain" />
                            Market update
                        </span>
                    </div>
                </div>
                <div class="p-7 sm:p-9">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Featured insight</p>
                    <h2 class="mt-4 text-3xl sm:text-4xl font-black leading-tight text-[#071a2f]">How to stay disciplined when markets move fast</h2>
                    <p class="mt-5 text-base sm:text-lg leading-8 text-slate-600">
                        Smart investing is often less about reacting quickly and more about staying consistent with a plan that fits your goals, time horizon and comfort with risk.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3 text-sm text-slate-500">
                        <span class="rounded-full bg-[#f8fafc] px-4 py-2">5 min read</span>
                        <span class="rounded-full bg-[#f8fafc] px-4 py-2">Wealth strategy</span>
                        <span class="rounded-full bg-[#f8fafc] px-4 py-2">Updated weekly</span>
                    </div>
                    <a href="/contact" class="mt-8 inline-flex items-center justify-center rounded-2xl bg-[#166534] px-7 py-4 font-bold text-white shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-[#12492a] hover:shadow-2xl">
                        Discuss your plan
                    </a>
                </div>
            </article>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-1">
                <div data-aos="fade-up" data-aos-delay="100" class="rounded-[30px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                    <div class="h-12 w-12 rounded-2xl bg-[#166534]/10 p-2">
                        <img src="https://img.icons8.com/?size=100&id=61221&format=png&color=103e24" alt="Retirement" class="h-full w-full object-contain" />
                    </div>
                    <p class="mt-4 text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Retirement</p>
                    <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Building income after work</h3>
                    <p class="mt-3 leading-7 text-slate-600">Retirement planning works best when income, inflation and lifestyle goals are reviewed together.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="rounded-[30px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                    <div class="h-12 w-12 rounded-2xl bg-[#d6a437]/15 p-2">
                        <img src="https://img.icons8.com/?size=100&id=2963&format=png&color=103e24" alt="Protection" class="h-full w-full object-contain" />
                    </div>
                    <p class="mt-4 text-sm font-semibold uppercase tracking-[0.22em] text-[#d6a437]">Protection</p>
                    <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Why insurance belongs in every plan</h3>
                    <p class="mt-3 leading-7 text-slate-600">Wealth building is stronger when your family and assets are properly protected.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="rounded-[30px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                    <div class="h-12 w-12 rounded-2xl bg-[#166534]/10 p-2">
                        <img src="https://img.icons8.com/?size=100&id=11167&format=png&color=103e24" alt="Allocation" class="h-full w-full object-contain" />
                    </div>
                    <p class="mt-4 text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Allocation</p>
                    <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Diversification without confusion</h3>
                    <p class="mt-3 leading-7 text-slate-600">A balanced mix can reduce concentration risk and improve consistency over time.</p>
                </div>
            </div>
        </div>

        <div class="mt-16 grid gap-7 md:grid-cols-2 xl:grid-cols-3">
            <article data-aos="fade-up" class="rounded-[32px] border border-gray-100 bg-white p-7 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <span class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-[#166534]">
                        <img src="https://img.icons8.com/?size=100&id=2988&format=png&color=103e24" alt="" class="h-4 w-4 object-contain" />
                        Planning
                    </span>
                    <span class="text-sm text-slate-500">Apr 2026</span>
                </div>
                <h3 class="mt-6 text-2xl font-black text-[#071a2f]">What a good financial goal actually looks like</h3>
                <p class="mt-4 leading-7 text-slate-600">The best goals are measurable, realistic and connected to a time frame you can act on.</p>
            </article>
            <article data-aos="fade-up" data-aos-delay="100" class="rounded-[32px] border border-gray-100 bg-white p-7 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <span class="inline-flex items-center gap-2 rounded-full bg-[#d6a437]/15 px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-[#9a6b12]">
                        <img src="https://img.icons8.com/?size=100&id=8166&format=png&color=103e24" alt="" class="h-4 w-4 object-contain" />
                        Markets
                    </span>
                    <span class="text-sm text-slate-500">Apr 2026</span>
                </div>
                <h3 class="mt-6 text-2xl font-black text-[#071a2f]">Avoiding emotional investment decisions</h3>
                <p class="mt-4 leading-7 text-slate-600">Reacting to headlines is usually more expensive than sticking to a written strategy.</p>
            </article>
            <article data-aos="fade-up" data-aos-delay="200" class="rounded-[32px] border border-gray-100 bg-white p-7 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <span class="inline-flex items-center gap-2 rounded-full bg-[#071a2f] px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white">
                        <img src="https://img.icons8.com/?size=100&id=7693&format=png&color=ffffff" alt="" class="h-4 w-4 object-contain" />
                        Protection
                    </span>
                    <span class="text-sm text-slate-500">Apr 2026</span>
                </div>
                <h3 class="mt-6 text-2xl font-black text-[#071a2f]">The role of insurance in long-term wealth</h3>
                <p class="mt-4 leading-7 text-slate-600">Protection helps preserve the plan when life changes unexpectedly.</p>
            </article>
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
        <div class="grid gap-6 lg:grid-cols-4">
            <div data-aos="fade-up" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <h3 class="text-3xl font-black text-[#166534]">12+</h3>
                <p class="mt-2 text-sm uppercase tracking-[0.2em] text-slate-500">Topics covered</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <h3 class="text-3xl font-black text-[#166534]">Weekly</h3>
                <p class="mt-2 text-sm uppercase tracking-[0.2em] text-slate-500">Fresh updates</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <h3 class="text-3xl font-black text-[#166534]">Clear</h3>
                <p class="mt-2 text-sm uppercase tracking-[0.2em] text-slate-500">Easy to follow</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <h3 class="text-3xl font-black text-[#166534]">Practical</h3>
                <p class="mt-2 text-sm uppercase tracking-[0.2em] text-slate-500">Built for action</p>
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
            Stay informed
        </div>
        <h2 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-black leading-tight text-white">
            Want a more personal
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                view of your finances?
            </span>
        </h2>
        <p data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-7 max-w-3xl text-base sm:text-lg leading-8 text-white/80">
            Reach out and we can walk through your current priorities, recent concerns and the next decisions that matter most.
        </p>
        <a data-aos="fade-up" data-aos-delay="300" href="/contact" class="mt-10 inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
            Talk to an advisor
        </a>
    </div>
</section>

@endsection
