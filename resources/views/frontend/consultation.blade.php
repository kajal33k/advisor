@extends('component.main')

@section('title', 'Consultation | Financial Future')
@section('content')

<section class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] pt-28 pb-16 sm:pt-32 sm:pb-20 lg:pt-36 lg:pb-24">
    <div class="absolute top-0 left-0 w-[350px] h-[350px] bg-[#166534]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>
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
        <div class="grid gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
            <div class="max-w-3xl">
                <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-2 text-sm font-semibold text-white backdrop-blur-xl">
                    Free initial consultation
                </div>

                <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.02] tracking-tight text-white">
                    Schedule a
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                        financial consultation
                    </span>
                </h1>

                <p data-aos="fade-up" data-aos-delay="200" class="mt-6 max-w-2xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
                    Tell us what you want to achieve and we will prepare a practical conversation focused on investment, protection, retirement and family goals.
                </p>

                <div data-aos="fade-up" data-aos-delay="300" class="mt-10 flex flex-wrap gap-4">
                    <a href="/contact" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        Contact us
                    </a>
                    <a href="/service" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                        Explore services
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div data-aos="fade-up" data-aos-delay="350" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                        <div class="text-3xl font-black">15 min</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Intro call</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                        <div class="text-3xl font-black">100%</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Personalized</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="450" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                        <div class="text-3xl font-black">24 hrs</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Reply time</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="500" class="rounded-3xl border border-white/10 bg-white/10 p-5 text-center text-white backdrop-blur-xl">
                        <div class="text-3xl font-black">0</div>
                        <p class="mt-2 text-xs uppercase tracking-[0.2em] text-white/70">Pressure</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-delay="150" class="relative">
                <div class="absolute -left-6 top-10 hidden h-28 w-28 rounded-full border border-white/15 bg-white/10 sm:block"></div>
                <div class="absolute -right-4 bottom-8 hidden h-20 w-20 rounded-full bg-[#d6a437]/25 blur-2xl sm:block"></div>

                <div class="rounded-[34px] border border-white/15 bg-white/10 p-4 shadow-[0_30px_90px_rgba(0,0,0,0.3)] backdrop-blur-xl">
                    <div class="rounded-[28px] bg-[#072f1b] p-7 sm:p-8 text-white">
                        <p class="text-sm uppercase tracking-[0.28em] text-[#d6a437]">What to expect</p>
                        <h2 class="mt-4 text-3xl font-black leading-tight">A focused conversation about your next step</h2>
                        <p class="mt-4 leading-8 text-white/80">
                            We listen first, then help you choose a path that fits your income, priorities and timeline.
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                <h3 class="text-lg font-bold text-white">Goal review</h3>
                                <p class="mt-2 text-sm leading-7 text-white/75">We clarify what matters most and where you want to be.</p>
                            </div>
                            <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                <h3 class="text-lg font-bold text-white">Simple roadmap</h3>
                                <p class="mt-2 text-sm leading-7 text-white/75">You get practical options, not jargon or pressure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#f5f7fb] py-20 lg:py-28">
    <div class="absolute top-0 left-0 w-[350px] h-[350px] bg-[#166534]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>
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
        <div class="grid gap-12 lg:grid-cols-[0.92fr_1.08fr] lg:items-start">
            <div>
                <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-5 py-2 text-sm font-semibold text-[#166534]">
                    Request consultation
                </div>
                <h2 data-aos="fade-up" data-aos-delay="100" class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                    Share your goals and
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                        we will guide the rest
                    </span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                    Use the form to send your details and a short note about what you need help with. We will respond with the right next step.
                </p>

                <div class="mt-10 space-y-5">
                    <div data-aos="fade-up" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=97586&format=png&color=103e24" alt="Planning" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Investment review</h3>
                            <p class="mt-2 leading-7 text-slate-600">Understand whether your current plan matches your target.</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="100" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d6a437]/15 p-2">
                            <img src="https://img.icons8.com/?size=100&id=117460&format=png&color=103e24" alt="Protection" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Protection check</h3>
                            <p class="mt-2 leading-7 text-slate-600">Look at insurance coverage and risk gaps in one place.</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=UcRVbUSfa8rB&format=png&color=103e24" alt="Retirement" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Retirement planning</h3>
                            <p class="mt-2 leading-7 text-slate-600">Build a future income plan that feels realistic and stable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-delay="150" class="relative">
                <div class="rounded-[36px] border border-gray-100 bg-white p-6 sm:p-8 shadow-[0_30px_100px_rgba(15,23,42,0.12)]">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-[#d6a437]/10 px-4 py-2 text-sm font-semibold text-[#9a6b12]">
                            Consultation form
                        </div>
                        <h3 class="mt-5 text-3xl font-black text-[#071a2f]">Book a conversation</h3>
                        <p class="mt-4 leading-7 text-slate-600">A short note is enough to help us prepare for your first discussion.</p>
                    </div>

                    <form class="mt-10 space-y-6">
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Full name</label>
                                <input type="text" placeholder="Enter your name" class="w-full h-14 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10" />
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Phone number</label>
                                <input type="text" placeholder="Enter your phone" class="w-full h-14 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10" />
                            </div>
                        </div>

                        <div>
                            <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Email address</label>
                            <input type="email" placeholder="Enter your email" class="w-full h-14 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10" />
                        </div>

                        <div>
                            <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Consultation topic</label>
                            <select class="w-full h-14 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10">
                                <option>Select a topic</option>
                                <option>Investment planning</option>
                                <option>Insurance planning</option>
                                <option>Retirement planning</option>
                                <option>Family financial goals</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Tell us what you need</label>
                            <textarea rows="5" placeholder="Share a short description of your goals" class="w-full rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 py-4 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"></textarea>
                        </div>

                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-2xl bg-[#166534] px-7 py-4 font-bold text-white shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-[#12492a] hover:shadow-2xl">
                            Request consultation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-white py-20">
    <div class="absolute top-0 left-0 w-[350px] h-[350px] bg-[#166534]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[#ffdf82]/20 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-[0.03]"
         style="
         background-image:
         linear-gradient(to right, #0f172a 1px, transparent 1px),
         linear-gradient(to bottom, #0f172a 1px, transparent 1px);
         background-size: 70px 70px;">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-3">
                <span class="w-10 h-[2px] bg-[#d6a437] rounded-full"></span>
                <span class="text-[#166534] text-sm sm:text-base font-bold tracking-wide uppercase">
                    How it works
                </span>
                <span class="w-10 h-[2px] bg-[#d6a437] rounded-full"></span>
            </div>
            <h2 class="mt-5 text-3xl sm:text-4xl lg:text-5xl font-black leading-tight tracking-tight text-[#071a2f]">
                A simple path from
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                    first note to action
                </span>
            </h2>
            <p class="mt-5 text-sm sm:text-base lg:text-lg leading-7 text-slate-600">
                We keep the process light and clear so you can move forward with confidence.
            </p>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-3">
            <div data-aos="fade-up" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Step 1</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Send your request</h3>
                <p class="mt-3 leading-7 text-slate-600">Share your basic details and the topic you want to discuss.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Step 2</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">We prepare the call</h3>
                <p class="mt-3 leading-7 text-slate-600">Our team reviews your request and matches the right advisor.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Step 3</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Get your roadmap</h3>
                <p class="mt-3 leading-7 text-slate-600">You receive practical next steps based on your goals and priorities.</p>
            </div>
        </div>

        <div class="mt-16 grid gap-6 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="rounded-[32px] border border-gray-100 bg-[#f8fafc] p-8 shadow-lg">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Frequently asked</p>
                <h3 class="mt-4 text-3xl font-black text-[#071a2f]">Common questions</h3>
                <div class="mt-8 space-y-5">
                    <div class="rounded-3xl bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-bold text-[#071a2f]">Is the first consultation free?</h4>
                        <p class="mt-2 leading-7 text-slate-600">Yes, the initial discussion is meant to understand your needs and outline the right direction.</p>
                    </div>
                    <div class="rounded-3xl bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-bold text-[#071a2f]">What should I prepare?</h4>
                        <p class="mt-2 leading-7 text-slate-600">Just a short summary of your goals, concerns and any current plan you already have.</p>
                    </div>
                    <div class="rounded-3xl bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-bold text-[#071a2f]">Can you help with more than one goal?</h4>
                        <p class="mt-2 leading-7 text-slate-600">Yes, we often combine investment, insurance and retirement guidance into one roadmap.</p>
                    </div>
                </div>
            </div>

            <div class="rounded-[32px] bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48] p-8 text-white shadow-xl">
                <p class="text-sm uppercase tracking-[0.28em] text-[#d6a437]">Ready when you are</p>
                <h3 class="mt-4 text-3xl font-black leading-tight">Start with a conversation, not a commitment</h3>
                <p class="mt-4 leading-8 text-white/80">
                    If you are unsure where to begin, a short consultation is the easiest way to get clarity and see your options.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="/contact" class="inline-flex items-center justify-center rounded-2xl bg-[#d6a437] px-7 py-4 font-bold text-[#071a2f] shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        Book now
                    </a>
                    <a href="/about" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur-xl transition duration-300 hover:bg-white/20">
                        Learn about us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
