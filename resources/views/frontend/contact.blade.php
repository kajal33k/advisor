@extends('component.main')

@section('title', 'Contact | Financial Future')
@section('content')

<section class="relative overflow-hidden bg-gradient-to-br from-[#132615] via-[#0b4128] to-[#858B48]  pt-28 pb-16 sm:pt-32 sm:pb-20 lg:pt-36 lg:pb-24">
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

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-2 text-sm font-semibold text-white backdrop-blur-xl">
            Trusted financial advisors
        </div>
        <h1 data-aos="fade-up" data-aos-delay="100" class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.05] tracking-tight text-white">
            Contact
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#d6a437] to-[#facc15]">
                Future Finance
            </span>
        </h1>
        <p data-aos="fade-up" data-aos-delay="200" class="mx-auto mt-7 max-w-3xl text-base sm:text-lg lg:text-xl leading-8 text-white/80">
            Reach out for investment guidance, insurance planning or a simple second opinion on your financial goals. We will respond with clear next steps.
        </p>
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
        <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr]">
            <div>
                <div data-aos="fade-up" class="inline-flex items-center gap-2 rounded-full bg-[#166534]/10 px-5 py-2 text-sm font-semibold text-[#166534]">
                    Get in touch
                </div>
                <h2 data-aos="fade-up" data-aos-delay="100" class="mt-6 text-4xl sm:text-5xl font-black leading-tight text-[#071a2f]">
                    Let us discuss your
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#166534] to-[#d6a437]">
                        financial goals
                    </span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-base sm:text-lg leading-8 text-slate-600">
                    Whether you need investment support, retirement planning or wealth protection, our team is ready to help you move forward with confidence.
                </p>

                <div class="mt-10 space-y-5">
                    <div data-aos="fade-up" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=7880&format=png&color=103e24" alt="Address" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Office address</h3>
                            <p class="mt-2 leading-7 text-slate-600">Future Finance Advisory<br>Mumbai, Maharashtra, India</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="100" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d6a437]/15 p-2">
                            <img src="https://img.icons8.com/?size=100&id=35934&format=png&color=103e24" alt="Phone" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Phone number</h3>
                            <p class="mt-2 leading-7 text-slate-600">+91 98765 43210</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#166534]/10 p-2">
                            <img src="https://img.icons8.com/?size=100&id=12446&format=png&color=103e24" alt="Email" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Email address</h3>
                            <p class="mt-2 leading-7 text-slate-600">support@futurefinance.com</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300" class="group flex items-start gap-5 rounded-[28px] border border-gray-100 bg-white p-6 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#d6a437]/15 p-2">
                            <img src="https://img.icons8.com/?size=100&id=hz8z3EczFNgj&format=png&color=103e24" alt="Hours" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071a2f]">Working hours</h3>
                            <p class="mt-2 leading-7 text-slate-600">Monday - Saturday<br>9:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-delay="150" class="relative">
                <div class="rounded-[36px] border border-gray-100 bg-white p-6 sm:p-8 shadow-[0_30px_100px_rgba(15,23,42,0.12)]">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-[#d6a437]/10 px-4 py-2 text-sm font-semibold text-[#9a6b12]">
                            Send message
                        </div>
                        <h3 class="mt-5 text-3xl font-black text-[#071a2f]">Request a consultation</h3>
                        <p class="mt-4 leading-7 text-slate-600">Fill out the form and we will reach out with the right advisor for your needs.</p>
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
                            <label class="mb-3 block text-sm font-semibold text-[#071a2f]">What do you need help with?</label>
                            <select class="w-full h-14 rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10">
                                <option>Select a service</option>
                                <option>Investment planning</option>
                                <option>Insurance support</option>
                                <option>Retirement planning</option>
                                <option>General consultation</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-3 block text-sm font-semibold text-[#071a2f]">Message</label>
                            <textarea rows="5" placeholder="Tell us about your goals" class="w-full rounded-2xl border border-gray-200 bg-[#f8fafc] px-5 py-4 outline-none transition focus:border-[#166534] focus:ring-4 focus:ring-[#166534]/10"></textarea>
                        </div>
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-2xl bg-[#166534] px-7 py-4 font-bold text-white shadow-xl transition duration-300 hover:-translate-y-1 hover:bg-[#12492a] hover:shadow-2xl">
                            Send inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-white py-20">
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
        <div class="grid gap-6 lg:grid-cols-3">
            <div data-aos="fade-up" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Fast response</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">We reply quickly</h3>
                <p class="mt-3 leading-7 text-slate-600">Expect a timely response so you can move ahead without delay.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Personal guidance</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Talk to the right expert</h3>
                <p class="mt-3 leading-7 text-slate-600">We connect you with advice that matches your goals and priorities.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-[28px] bg-[#f8fafc] p-7 border border-gray-100 shadow-md">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-[#166534]">Simple next step</p>
                <h3 class="mt-4 text-2xl font-black text-[#071a2f]">Easy to start</h3>
                <p class="mt-3 leading-7 text-slate-600">A short conversation is enough to get a practical roadmap.</p>
            </div>
        </div>
    </div>
</section>

@endsection
