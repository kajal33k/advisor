@extends('component.main')

@section('title', 'Services | Financial Future')
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
                Trusted financial advisors
            </div>
            <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.05] tracking-tight text-white">
                Financial services
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                    built for your future
                </span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-7 max-w-3xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
                From investment planning to protection and retirement support, our services are designed to help people, families and businesses grow with clarity.
            </p>
            <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap gap-4">
                <a href="#services" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                    Explore services
                </a>
                <a href="/contact" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                    Book consultation
                </a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="relative overflow-hidden bg-[#f5f7fb] py-20 lg:py-28">
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
                Our services
            </div>
            <h2 data-aos="fade-up" data-aos-delay="100" class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                Smart financial solutions
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                    for every stage of life
                </span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                We combine planning, protection and guidance into services that are easy to understand and practical to use.
            </p>
        </div>

        <div class="mt-16 grid gap-7 md:grid-cols-2 xl:grid-cols-3 auto-rows-fr">
            <div data-aos="fade-up" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=ElT9laoIA7s0&format=png&color=103e24" alt="Wealth management" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Wealth management</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Personalized strategies designed to maximize returns and protect long-term value.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#d6a437]/15 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=117460&format=png&color=103e24" alt="Insurance planning" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Insurance planning</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Life, health and asset protection plans tailored to your situation.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=112609&format=png&color=103e24" alt="Investment advisory" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Investment advisory</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Portfolio support and market insight for steady wealth creation.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#d6a437]/15 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=UcRVbUSfa8rB&format=png&color=103e24" alt="Retirement planning" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Retirement planning</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Build a plan that supports future income and independence.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#166534]/10 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=35758&format=png&color=103e24" alt="Tax optimization" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Tax optimization</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Practical tax-saving strategies to improve financial efficiency.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="500" class="group flex h-full flex-col rounded-[32px] border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                <div class="h-16 w-16 rounded-2xl bg-[#d6a437]/15 flex items-center justify-center p-3">
                    <img src="https://img.icons8.com/?size=100&id=8902&format=png&color=103e24" alt="Family planning" class="h-full w-full object-contain" />
                </div>
                <h3 class="mt-7 text-2xl font-black text-[#071a2f]">Family planning</h3>
                <p class="mt-5 flex-1 leading-8 text-slate-600">Support for education, savings and family protection goals.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#f8fafc] py-16 lg:py-24">
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
    <div class="absolute top-0 right-0 w-72 h-72 bg-[#166534]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-[#d6a437]/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-3">
                <span class="w-10 h-[2px] bg-[#d6a437] rounded-full"></span>
                <span class="text-[#166534] text-sm sm:text-base font-bold tracking-wide uppercase">
                    How we work
                </span>
                <span class="w-10 h-[2px] bg-[#d6a437] rounded-full"></span>
            </div>

            <h2 class="mt-5 text-3xl sm:text-4xl lg:text-5xl font-black leading-tight tracking-tight text-[#071a2f]">
                A process that keeps
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                    things clear
                </span>
            </h2>

            <p class="mt-5 text-sm sm:text-base lg:text-lg leading-7 text-slate-600">
                A simple and structured financial planning process focused on clarity, confidence and long-term results.
            </p>
        </div>

        <div class="relative mt-14">
            <div class="hidden lg:block absolute top-14 left-1/2 -translate-x-1/2 w-[65%] border-t-2 border-dashed border-[#166534]/20"></div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div data-aos="fade-up" class="relative group">
                    <div class="absolute left-1/2 -translate-x-1/2 -top-5 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-[#166534] text-sm font-black text-white shadow-lg">1</div>
                    <div class="mx-auto flex h-44 w-44 items-center justify-center rounded-full border-4 border-[#166534] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                        <div class="flex h-32 w-32 items-center justify-center rounded-full bg-[#166534]/5">
                            <img src="https://img.icons8.com/?size=100&id=uJCDtVnI3uDq&format=png&color=103e24" alt="Understand" class="h-16 w-16" />
                        </div>
                    </div>
                    <div class="relative -mt-12 rounded-[28px] border border-gray-100 bg-white px-6 pt-16 pb-8 shadow-[0_25px_80px_rgba(15,23,42,0.08)] transition duration-500 group-hover:-translate-y-2">
                        <h3 class="text-3xl font-black leading-tight text-center text-[#071a2f]">Understand your needs</h3>
                        <div class="w-14 h-1 rounded-full bg-[#d6a437] mx-auto mt-6"></div>
                        <p class="mt-6 text-center text-gray-600 text-base leading-8">
                            We start with the goals, concerns and priorities that matter to you.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="relative group">
                    <div class="absolute left-1/2 -translate-x-1/2 -top-5 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-[#166534] text-sm font-black text-white shadow-lg">2</div>
                    <div class="mx-auto flex h-44 w-44 items-center justify-center rounded-full border-4 border-[#166534] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                        <div class="flex h-32 w-32 items-center justify-center rounded-full bg-[#d6a437]/5">
                            <img src="https://img.icons8.com/?size=100&id=PmVPWDjatbI3&format=png&color=103e24" alt="Plan" class="h-16 w-16" />
                        </div>
                    </div>
                    <div class="relative -mt-12 rounded-[28px] border border-gray-100 bg-white px-6 pt-16 pb-8 shadow-[0_25px_80px_rgba(15,23,42,0.08)] transition duration-500 group-hover:-translate-y-2">
                        <h3 class="text-3xl font-black leading-tight text-center text-[#071a2f]">Design the plan</h3>
                        <div class="w-14 h-1 rounded-full bg-[#d6a437] mx-auto mt-6"></div>
                        <p class="mt-6 text-center text-gray-600 text-base leading-8">
                            We outline practical options that fit your budget and timeline.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="relative group">
                    <div class="absolute left-1/2 -translate-x-1/2 -top-5 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-[#166534] text-sm font-black text-white shadow-lg">3</div>
                    <div class="mx-auto flex h-44 w-44 items-center justify-center rounded-full border-4 border-[#166534] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                        <div class="flex h-32 w-32 items-center justify-center rounded-full bg-[#166534]/5">
                            <img src="https://img.icons8.com/?size=100&id=hYq9l3OFpOtB&format=png&color=103e24" alt="Execute" class="h-16 w-16" />
                        </div>
                    </div>
                    <div class="relative -mt-12 rounded-[28px] border border-gray-100 bg-white px-6 pt-16 pb-8 shadow-[0_25px_80px_rgba(15,23,42,0.08)] transition duration-500 group-hover:-translate-y-2">
                        <h3 class="text-3xl font-black leading-tight text-center text-[#071a2f]">Execute and review</h3>
                        <div class="w-14 h-1 rounded-full bg-[#d6a437] mx-auto mt-6"></div>
                        <p class="mt-6 text-center text-gray-600 text-base leading-8">
                            We help implement the plan and review it regularly.
                        </p>
                    </div>
                </div>
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
                <p class="mt-3 text-slate-500">Clients served</p>
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
            Ready for the next step?
        </div>
        <h2 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-black leading-tight text-white">
            Let us shape a service plan
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                around your needs
            </span>
        </h2>
        <p data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-7 max-w-3xl text-base sm:text-lg leading-8 text-white/80">
            We are ready to help you choose the right mix of planning, protection and advisory support.
        </p>
        <a data-aos="fade-up" data-aos-delay="300" href="/contact" class="mt-10 inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
            Start a conversation
        </a>
    </div>
</section>

@endsection
