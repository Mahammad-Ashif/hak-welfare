@extends('client.layout.app')
@section('content')
    <!-- 3. HERO BANNER: Auto-Sliding Presentation Carousel -->
    <section class="relative min-h-[520px] lg:min-h-[580px] flex items-center overflow-hidden bg-brand-navy" id="hero-slider">
        
        <!-- Slide 1: Education for every child -->
        <div class="hero-slide active" style="background: linear-gradient(to right, rgba(8, 14, 30, 0.95) 20%, rgba(8, 14, 30, 0.78) 60%, rgba(8, 14, 30, 0.45) 100%), url('{{ asset('assets/media/images/education.jpg') }}') center/cover no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-10 sm:py-16 pb-28 sm:pb-16">
                <div class="max-w-3xl text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 text-xs sm:text-sm font-bold tracking-wider mb-6 backdrop-blur-md">
                        <i data-lucide="book-open" class="w-4 h-4 text-brand-amber"></i> PROGRAMME 01: EDUCATION FOR EVERY CHILD
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading leading-[1.1] mb-6">
                        Education for Every Child, <br class="hidden sm:inline"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 via-emerald-300 to-amber-300">
                            A Brighter Future for All.
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg lg:text-xl text-slate-200 leading-relaxed mb-8 font-light max-w-2xl">
                        Promoting educational equality by collecting and distributing free textbooks, notebooks, study materials, and running village learning centres.
                    </p>
                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#what-we-do" class="bg-brand-amber hover:bg-amber-400 text-slate-950 px-8 py-4 rounded-full font-black text-base transition-all transform hover:-translate-y-0.5 shadow-lg shadow-amber-500/25 flex items-center gap-2">
                            Explore Projects <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#donate-calc" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white px-7 py-4 rounded-full font-bold text-base transition-all flex items-center gap-2">
                            <i data-lucide="heart" class="w-4 h-4 text-rose-400 fill-current"></i> Sponsor a Student
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Rakto Bandhu Blood Support -->
        <div class="hero-slide" style="background: linear-gradient(to right, rgba(8, 14, 30, 0.95) 20%, rgba(8, 14, 30, 0.78) 60%, rgba(8, 14, 30, 0.45) 100%), url('{{ asset('assets/media/images/blood-donation.jpg') }}') center/cover no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-10 sm:py-16 pb-28 sm:pb-16">
                <div class="max-w-3xl text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-rose-500/20 border border-rose-400/30 text-rose-300 text-xs sm:text-sm font-bold tracking-wider mb-6 backdrop-blur-md">
                        <i data-lucide="droplet" class="w-4 h-4 text-rose-400"></i> "RAKTO BANDHU" LIVE BLOOD NETWORK
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading leading-[1.1] mb-6">
                        No Patient Should Suffer <br class="hidden sm:inline"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-300 via-pink-300 to-amber-300">
                            Due to Blood Unavailability.
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg lg:text-xl text-slate-200 leading-relaxed mb-8 font-light max-w-2xl">
                        A dedicated live voluntary blood donor network across districts of West Bengal, providing emergency and Thalassemia support 24/7.
                    </p>
                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#contact" class="bg-rose-600 hover:bg-rose-500 text-white px-8 py-4 rounded-full font-bold text-base transition-all transform hover:-translate-y-0.5 shadow-lg shadow-rose-600/30 flex items-center gap-2">
                            Register as Blood Donor <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#what-we-do" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white px-7 py-4 rounded-full font-bold text-base transition-all flex items-center gap-2">
                            View Blood Initiative
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Women & Youth Empowerment -->
        <div class="hero-slide" style="background: linear-gradient(to right, rgba(8, 14, 30, 0.95) 20%, rgba(8, 14, 30, 0.78) 60%, rgba(8, 14, 30, 0.45) 100%), url('{{ asset('assets/media/images/women-empowerment.jpg') }}') center/cover no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-10 sm:py-16 pb-28 sm:pb-16">
                <div class="max-w-3xl text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs sm:text-sm font-bold tracking-wider mb-6 backdrop-blur-md">
                        <i data-lucide="award" class="w-4 h-4 text-brand-amber"></i> SKILLS TURN DEPENDENCE INTO DIGNITY
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading leading-[1.1] mb-6">
                        Empowering Women & Youth <br class="hidden sm:inline"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 via-teal-300 to-amber-300">
                            With Stable Livelihoods.
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg lg:text-xl text-slate-200 leading-relaxed mb-8 font-light max-w-2xl">
                        Vocational training in tailoring, trades, digital skills, and micro-finance literacy, empowering women and rural youth to earn stable incomes.
                    </p>
                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#csr" class="bg-brand-forest hover:bg-emerald-600 text-white px-8 py-4 rounded-full font-bold text-base transition-all transform hover:-translate-y-0.5 shadow-lg shadow-emerald-700/30 flex items-center gap-2">
                            Sponsor a Skill Batch <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#how-we-work" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white px-7 py-4 rounded-full font-bold text-base transition-all">
                            Our Methodology
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4: Shudhu Du-Mutho Bhat (Food Relief) -->
        <div class="hero-slide" style="background: linear-gradient(to right, rgba(8, 14, 30, 0.95) 20%, rgba(8, 14, 30, 0.78) 60%, rgba(8, 14, 30, 0.45) 100%), url('{{ asset('assets/media/images/food-relief.jpg') }}') center/cover no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center py-10 sm:py-16 pb-28 sm:pb-16">
                <div class="max-w-3xl text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-500/20 border border-amber-400/30 text-amber-300 text-xs sm:text-sm font-bold tracking-wider mb-6 backdrop-blur-md">
                        <i data-lucide="hand-heart" class="w-4 h-4 text-brand-amber"></i> "SHUDHU DU-MUTHO BHAT"
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading leading-[1.1] mb-6">
                        Don't Leave the Deprived <br class="hidden sm:inline"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-orange-300 to-yellow-200">
                            People Behind.
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg lg:text-xl text-slate-200 leading-relaxed mb-8 font-light max-w-2xl">
                        A humanitarian initiative providing daily food support and clothing to homeless, shelterless, mentally challenged, and destitute individuals.
                    </p>
                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#donate-calc" class="bg-brand-amber hover:bg-amber-400 text-slate-950 px-8 py-4 rounded-full font-black text-base transition-all transform hover:-translate-y-0.5 shadow-lg flex items-center gap-2">
                            Donate Food & Ration <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                        </a>
                        <a href="#what-we-do" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white px-7 py-4 rounded-full font-bold text-base transition-all">
                            View All Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Navigation Controls & Indicator -->
        <div class="absolute bottom-4 sm:bottom-8 left-0 right-0 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-center sm:justify-between gap-3">
                <div class="flex items-center gap-2.5 order-2 sm:order-1" id="hero-dots">
                    <button class="w-10 h-2 rounded-full bg-brand-amber transition-all duration-300" onclick="goToSlide(0)" aria-label="Slide 1"></button>
                    <button class="w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" onclick="goToSlide(1)" aria-label="Slide 2"></button>
                    <button class="w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" onclick="goToSlide(2)" aria-label="Slide 3"></button>
                    <button class="w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" onclick="goToSlide(3)" aria-label="Slide 4"></button>
                </div>
                <div class="flex items-center justify-center gap-3 sm:gap-2 order-1 sm:order-2">
                    <button onclick="prevSlide()" class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white/15 hover:bg-white/25 backdrop-blur-md border border-white/20 text-white flex items-center justify-center transition-colors shadow-lg active:scale-95" aria-label="Previous Slide">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button onclick="nextSlide()" class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white/15 hover:bg-white/25 backdrop-blur-md border border-white/20 text-white flex items-center justify-center transition-colors shadow-lg active:scale-95" aria-label="Next Slide">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Wave transition -->
        <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
            <svg viewBox="0 0 1440 45" fill="none" class="w-full h-auto text-slate-50 preserve-3d">
                <path d="M0,20 C360,45 720,0 1080,30 C1260,45 1380,12 1440,20 L1440,45 L0,45 Z" fill="currentColor"></path>
            </svg>
        </div>
    </section>

    <!-- 4. KEY STATS FLOATING RIBBON -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-7 relative z-30">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5 sm:gap-6">
            
            <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-premium border border-slate-200/80 flex items-center gap-3.5 sm:gap-4 group hover:border-brand-blue hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                </div>
                <div class="min-w-0">
                    <span class="block text-2xl sm:text-3xl font-black font-heading text-slate-900 leading-none"><span class="counter" data-target="12000">0</span>+</span>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block truncate">Lives Touched Yearly</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-premium border border-slate-200/80 flex items-center gap-3.5 sm:gap-4 group hover:border-brand-forest hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-emerald-50 text-brand-forest flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <i data-lucide="map-pin" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                </div>
                <div class="min-w-0">
                    <span class="block text-2xl sm:text-3xl font-black font-heading text-slate-900 leading-none"><span class="counter" data-target="85">0</span>+</span>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block truncate">Communities Served</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-premium border border-slate-200/80 flex items-center gap-3.5 sm:gap-4 group hover:border-brand-amber hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <i data-lucide="shield-check" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                </div>
                <div class="min-w-0">
                    <span class="block text-2xl sm:text-3xl font-black font-heading text-slate-900 leading-none"><span class="counter" data-target="100">0</span>%</span>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block truncate">80G & 12A Certified</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-premium border border-slate-200/80 flex items-center gap-3.5 sm:gap-4 group hover:border-rose-600 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <i data-lucide="pie-chart" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                </div>
                <div class="min-w-0">
                    <span class="block text-xl sm:text-3xl font-black font-heading text-slate-900 leading-none whitespace-nowrap">₹<span class="counter" data-target="80">0</span> / ₹<span class="counter" data-target="100">0</span></span>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block truncate">Direct Fund Allocation</span>
                </div>
            </div>

        </div>
    </div>

    <!-- 5. SECTION: WHO WE ARE (Slide 02 Exact Content) -->
    <section class="py-14 sm:py-16 bg-slate-50 relative bg-mesh" id="who-we-are">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                <!-- Left Details -->
                <div class="lg:col-span-7 reveal">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100 text-brand-blue text-xs font-bold uppercase tracking-wider mb-4 border border-blue-200">
                        <span class="w-2 h-2 rounded-full bg-brand-blue"></span> WHO WE ARE
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading leading-tight mb-4">
                        A Hand Up, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-cobalt to-brand-forest">Not a Hand-out.</span>
                    </h2>
                    <h3 class="text-lg font-bold text-slate-700 mb-6 flex items-center gap-2">
                        <i data-lucide="shield" class="w-5 h-5 text-brand-forest"></i> Basudevpur Human Alliance's Kultural (H.A.K) Welfare Society
                    </h3>
                    
                    <div class="space-y-4 text-slate-600 text-base leading-relaxed font-normal">
                        <p class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm leading-relaxed">
                            <strong class="text-slate-900">Basudevpur Human Alliance's Kultural (H.A.K) Welfare Society</strong> was established in 2015 and registered under the <strong class="text-brand-blue">Societies Registration WEST BENGAL ACT XXVI of 1961 (Regd. No. S/2L-41093 / S0241093)</strong>.
                        </p>
                        <p class="leading-relaxed">
                            With commitment to work in the multifarious fields of social work for the people of backward villages and the underprivileged level, addressing to the needs and priorities of the poor, deprived, and marginalized sections of the community residing in rural areas and urban slums in particular, besides others.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-slate-900">Education, healthcare, microfinance, and women empowerment</strong> are some of the areas H.A.K is mainly focusing upon. The goal of the foundation is to help create a society where everyone is equal and prosperous and there is justice for all. With the aim to reduce the gap between haves and have-nots, H.A.K is working to provide all the basic resources to the poor and needy that are necessary to live.
                        </p>
                    </div>

                    <!-- Slide 2 Highlight Metrics -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 sm:gap-4 mt-8 pt-6 border-t border-slate-200">
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 text-center shadow-sm">
                            <span class="block text-2xl sm:text-3xl font-black font-heading text-brand-blue"><span class="counter" data-target="12000">0</span>+</span>
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block">Lives Touched Every Year</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 text-center shadow-sm">
                            <span class="block text-2xl sm:text-3xl font-black font-heading text-brand-forest"><span class="counter" data-target="85">0</span>+</span>
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block">Communities Served</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 text-center shadow-sm">
                            <span class="block text-2xl sm:text-3xl font-black font-heading text-brand-amber"><span class="counter" data-target="4">0</span></span>
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mt-1 block">Flagship Focus Areas</span>
                        </div>
                    </div>
                </div>

                <!-- Right Visuals & Verified Credentials Card -->
                <div class="lg:col-span-5 reveal">
                    <div class="relative">
                        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="{{ asset('assets/media/images/community-reach.jpg') }}" alt="Who We Are" class="w-full h-72 sm:h-[480px] object-cover" onerror="this.src='{{ asset('assets/media/images/education.jpg') }}'">
                        </div>
                        <div class="relative sm:absolute mt-4 sm:mt-0 sm:-bottom-6 sm:-left-6 max-w-sm sm:max-w-xs mx-auto sm:mx-0 glass-card p-4 sm:p-5 rounded-2xl shadow-xl border border-slate-200 text-left">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-xl bg-brand-forest text-white flex items-center justify-center font-bold flex-shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm font-heading">Govt. Verified NGO</h4>
                                    <span class="text-[11px] text-slate-500 font-mono">WB Regd. Act XXVI of 1961</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-600">80G & 12A Certified for Income Tax Exemption across India.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. SECTION: THE CHALLENGE (Slide 03 Verbatim & Ultra-Attractive Redesign) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-white via-slate-50 to-slate-100 relative overflow-hidden" id="the-challenge">
        <!-- Ambient background lighting -->
        <div class="absolute top-1/2 left-0 w-80 h-80 bg-rose-500/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-700 text-xs font-extrabold uppercase tracking-widest mb-4">
                    <i data-lucide="alert-triangle" class="w-4 h-4 text-rose-600"></i> Cause Behind Our Journey
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    The Challenge <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 via-orange-600 to-amber-600">We Face</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg leading-relaxed">
                    Our community is home to many daily wage earners who face financial challenges, limiting access to quality education, healthcare, and environmental awareness. Through our initiatives, we strive to improve educational opportunities, promote health and environmental consciousness, and provide essential services to underserved communities.
                </p>
            </div>

            <!-- Main Interactive Challenge Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Stat 1: 1 in 4 School Dropouts -->
                <div class="relative bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-rose-500 shadow-lg hover:shadow-2xl hover:shadow-rose-500/10 transition-all duration-500 reveal group flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-rose-50 rounded-bl-full -z-0 transition-all group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-rose-600 to-red-500 text-white flex items-center justify-center mb-6 shadow-md shadow-rose-500/30 group-hover:rotate-6 transition-transform">
                            <i data-lucide="graduation-cap" class="w-7 h-7"></i>
                        </div>
                        
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-4xl sm:text-5xl font-black font-heading text-rose-600 tracking-tight">1 in 4</span>
                            <span class="text-xs font-extrabold uppercase tracking-wider text-rose-500">Critical Ratio</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-3 font-heading">School Dropouts</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Children are out of school or at severe risk of dropping out due to study material and cost barriers.
                        </p>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-slate-100">
                        <div class="flex items-center gap-1.5 mb-2">
                            <div class="w-3 h-3 rounded-full bg-rose-600"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <span class="text-[11px] font-bold text-slate-500 ml-auto">25% Drop Out</span>
                        </div>
                        <span class="text-[11px] font-bold text-rose-600 flex items-center gap-1">
                            <i data-lucide="shield-alert" class="w-3.5 h-3.5"></i> HAK Intervenes with Book Banks
                        </span>
                    </div>
                </div>

                <!-- Stat 2: 68% Livelihood Insecurity -->
                <div class="relative bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-amber-500 shadow-lg hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-500 reveal delay-100 group flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-amber-50 rounded-bl-full -z-0 transition-all group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-amber-500 to-yellow-500 text-slate-950 flex items-center justify-center mb-6 shadow-md shadow-amber-500/30 group-hover:rotate-6 transition-transform">
                            <i data-lucide="briefcase" class="w-7 h-7"></i>
                        </div>
                        
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-4xl sm:text-5xl font-black font-heading text-amber-600 tracking-tight">68%</span>
                            <span class="text-xs font-extrabold uppercase tracking-wider text-amber-600">High Risk</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-3 font-heading">Livelihood Insecurity</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Of rural families lack a stable, year-round livelihood and rely purely on uncertain seasonal daily wages.
                        </p>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-slate-100">
                        <div class="w-full bg-slate-100 h-2 rounded-full mb-2 overflow-hidden">
                            <div class="bg-amber-500 h-full rounded-full" style="width: 68%;"></div>
                        </div>
                        <span class="text-[11px] font-bold text-amber-700 flex items-center gap-1">
                            <i data-lucide="wrench" class="w-3.5 h-3.5"></i> HAK Provides Vocational Skills
                        </span>
                    </div>
                </div>

                <!-- Stat 3: 40% Childhood Malnutrition -->
                <div class="relative bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-orange-500 shadow-lg hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 reveal delay-200 group flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-orange-50 rounded-bl-full -z-0 transition-all group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-orange-600 to-amber-600 text-white flex items-center justify-center mb-6 shadow-md shadow-orange-500/30 group-hover:rotate-6 transition-transform">
                            <i data-lucide="heart-pulse" class="w-7 h-7"></i>
                        </div>
                        
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-4xl sm:text-5xl font-black font-heading text-orange-600 tracking-tight">40%</span>
                            <span class="text-xs font-extrabold uppercase tracking-wider text-orange-600">Health Gap</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-3 font-heading">Child Malnutrition</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Of children under five face malnutrition and health vulnerabilities without timely maternal support.
                        </p>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-slate-100">
                        <div class="w-full bg-slate-100 h-2 rounded-full mb-2 overflow-hidden">
                            <div class="bg-orange-500 h-full rounded-full" style="width: 40%;"></div>
                        </div>
                        <span class="text-[11px] font-bold text-orange-700 flex items-center gap-1">
                            <i data-lucide="utensils" class="w-3.5 h-3.5"></i> HAK Drives Daily Meal Camps
                        </span>
                    </div>
                </div>

                <!-- Stat 4: 2 in 3 Women Lacking Skills -->
                <div class="relative bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-purple-600 shadow-lg hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-500 reveal delay-300 group flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-purple-50 rounded-bl-full -z-0 transition-all group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white flex items-center justify-center mb-6 shadow-md shadow-purple-500/30 group-hover:rotate-6 transition-transform">
                            <i data-lucide="user-check" class="w-7 h-7"></i>
                        </div>
                        
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-4xl sm:text-5xl font-black font-heading text-purple-600 tracking-tight">2 in 3</span>
                            <span class="text-xs font-extrabold uppercase tracking-wider text-purple-600">Gender Gap</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-3 font-heading">Women Unskilled</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Women have no access to vocational skills, independent income opportunities, or self-help credit.
                        </p>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-slate-100">
                        <div class="flex items-center gap-1.5 mb-2">
                            <div class="w-3 h-3 rounded-full bg-purple-600"></div>
                            <div class="w-3 h-3 rounded-full bg-purple-600"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <span class="text-[11px] font-bold text-slate-500 ml-auto">66% Need Training</span>
                        </div>
                        <span class="text-[11px] font-bold text-purple-700 flex items-center gap-1">
                            <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> HAK Runs Tailoring Academies
                        </span>
                    </div>
                </div>

            </div>

            <!-- Bottom Impact Callout Bar -->
            <div class="bg-gradient-to-r from-brand-midnight via-brand-navy to-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 reveal">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-400 border border-emerald-400/30 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold font-heading text-white">Turning Statistics into Stories of Hope</h4>
                        <p class="text-xs sm:text-sm text-slate-300">Together with local citizen committees and donors, we have already empowered over 12,000+ lives.</p>
                    </div>
                </div>
                <a href="#what-we-do" class="px-6 py-3 rounded-full bg-brand-amber hover:bg-amber-400 text-slate-950 font-black text-xs uppercase tracking-wider transition-all flex items-center gap-2 flex-shrink-0 shadow-md">
                    See Our Solutions <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- 7. SECTION: PURPOSE (Slide 04 - Vision, Mission & Values - Ultra-Attractive Redesign) -->
    <section class="py-14 sm:py-16 bg-gradient-to-br from-slate-950 via-brand-navy to-brand-midnight text-white relative overflow-hidden bg-grid-dark" id="purpose">
        <!-- Ambient Glowing Lights -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-brand-blue/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-brand-amber/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-extrabold uppercase tracking-widest mb-3">
                    <i data-lucide="compass" class="w-4 h-4 text-emerald-400"></i> PURPOSE & PHILOSOPHY
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-white tracking-tight">
                    Our Vision & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-amber via-yellow-300 to-emerald-400">Mission</span>
                </h2>
                <p class="text-slate-300 mt-4 text-base sm:text-lg font-light leading-relaxed">
                    Guided by the unwavering belief that every human being deserves dignity, opportunity, and the resources to build a self-reliant future.
                </p>
            </div>

            <!-- Vision Statement Master Glass Box -->
            <div class="relative bg-gradient-to-r from-white/10 via-white/5 to-white/10 backdrop-blur-2xl rounded-3xl p-6 sm:p-10 mb-12 border-2 border-white/20 hover:border-amber-400/50 transition-all duration-500 shadow-2xl reveal group overflow-hidden">
                <!-- Floating decorative quote mark -->
                <div class="absolute -right-4 -bottom-6 text-white/5 text-9xl font-serif select-none pointer-events-none">”</div>
                
                <div class="relative z-10 flex flex-col lg:flex-row items-start lg:items-center gap-8">
                    <div class="w-18 h-18 sm:w-20 sm:h-20 rounded-2xl bg-gradient-to-tr from-brand-amber via-yellow-400 to-amber-500 flex items-center justify-center text-slate-950 flex-shrink-0 shadow-xl shadow-amber-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i data-lucide="eye" class="w-10 h-10"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <span class="px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-xs font-black tracking-widest uppercase border border-amber-400/30">
                                OUR GUIDING VISION
                            </span>
                            <span class="text-slate-400 text-xs font-medium">· Verbatim</span>
                        </div>
                        <blockquote class="text-lg sm:text-2xl lg:text-2xl font-normal text-white leading-relaxed font-heading">
                            “To build an inclusive, educated, healthy, and environmentally conscious society where every individual—especially those from underserved communities—has equal access to opportunities, dignity, and a better quality of life.”
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- 5 Mission Pillars (Slide 04 PPT) -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-8 pb-3 border-b border-white/10">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-brand-amber/20 text-amber-400 flex items-center justify-center font-bold">
                            <i data-lucide="target" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold font-heading text-white">
                            Our Mission: 5 Strategic Pillars
                        </h3>
                    </div>
                    <span class="text-xs text-slate-400 hidden sm:inline-block uppercase tracking-wider font-mono">Action Roadmaps</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Mission 1: Education -->
                    <div class="bg-white/5 backdrop-blur-xl p-7 rounded-3xl border border-white/10 hover:border-blue-400/50 hover:bg-white/10 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 reveal flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-12 h-12 rounded-2xl bg-blue-500/20 text-blue-300 border border-blue-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="book-open" class="w-6 h-6"></i>
                                </div>
                                <span class="text-[11px] font-mono text-blue-300 px-2.5 py-1 rounded-full bg-blue-500/15 border border-blue-400/20">Pillar 01</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2.5 font-heading group-hover:text-blue-300 transition-colors">Promote Education</h4>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                                Support underprivileged children and students through educational assistance, school supplies, scholarships, and academic support.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between text-xs text-blue-300 font-semibold">
                            <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-4 h-4 text-blue-400"></i> Free Books & Fee Aid</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-400 group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <!-- Mission 2: Health -->
                    <div class="bg-white/5 backdrop-blur-xl p-7 rounded-3xl border border-white/10 hover:border-rose-400/50 hover:bg-white/10 hover:shadow-2xl hover:shadow-rose-500/10 transition-all duration-500 reveal delay-100 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-12 h-12 rounded-2xl bg-rose-500/20 text-rose-300 border border-rose-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="stethoscope" class="w-6 h-6"></i>
                                </div>
                                <span class="text-[11px] font-mono text-rose-300 px-2.5 py-1 rounded-full bg-rose-500/15 border border-rose-400/20">Pillar 02</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2.5 font-heading group-hover:text-rose-300 transition-colors">Enhance Health & Well-being</h4>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                                Organize medical, eye check-up, and blood donation camps while raising awareness about health, nutrition, and hygiene.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between text-xs text-rose-300 font-semibold">
                            <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-4 h-4 text-rose-400"></i> Free Medicine & Blood Aid</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-400 group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <!-- Mission 3: Community Empowerment -->
                    <div class="bg-white/5 backdrop-blur-xl p-7 rounded-3xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-500 reveal delay-200 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-12 h-12 rounded-2xl bg-amber-500/20 text-amber-300 border border-amber-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="users" class="w-6 h-6"></i>
                                </div>
                                <span class="text-[11px] font-mono text-amber-300 px-2.5 py-1 rounded-full bg-amber-500/15 border border-amber-400/20">Pillar 03</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2.5 font-heading group-hover:text-amber-300 transition-colors">Empower Communities</h4>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                                Encourage women's empowerment, skill development, self-employment, and support for senior citizens, differently abled individuals, and vulnerable children.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between text-xs text-amber-300 font-semibold">
                            <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-4 h-4 text-amber-400"></i> Vocational Tailoring Units</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-400 group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <!-- Mission 4: Culture & Inclusion -->
                    <div class="bg-white/5 backdrop-blur-xl p-7 rounded-3xl border border-white/10 hover:border-purple-400/50 hover:bg-white/10 hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-500 reveal flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/20 text-purple-300 border border-purple-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="palette" class="w-6 h-6"></i>
                                </div>
                                <span class="text-[11px] font-mono text-purple-300 px-2.5 py-1 rounded-full bg-purple-500/15 border border-purple-400/20">Pillar 04</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2.5 font-heading group-hover:text-purple-300 transition-colors">Preserve Culture & Inclusion</h4>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                                Promote cultural, educational, and community-based activities that foster talent, inclusion, and social harmony.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between text-xs text-purple-300 font-semibold">
                            <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-4 h-4 text-purple-400"></i> Social Harmony & Talent</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-400 group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                    <!-- Mission 5: Environment -->
                    <div class="bg-white/5 backdrop-blur-xl p-7 rounded-3xl border border-white/10 hover:border-emerald-400/50 hover:bg-white/10 hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 reveal delay-100 flex flex-col justify-between group md:col-span-2 lg:col-span-2">
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="leaf" class="w-6 h-6"></i>
                                </div>
                                <span class="text-[11px] font-mono text-emerald-300 px-2.5 py-1 rounded-full bg-emerald-500/15 border border-emerald-400/20">Pillar 05</span>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2.5 font-heading group-hover:text-emerald-300 transition-colors">Protect the Environment</h4>
                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 font-light">
                                Create awareness about environmental conservation and organize tree plantation drives to build a greener and more sustainable future.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between text-xs text-emerald-300 font-semibold">
                            <span class="flex items-center gap-1.5"><i data-lucide="check" class="w-4 h-4 text-emerald-400"></i> Tree Plantation Drives & Eco-Action</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-400 group-hover:text-white transition-colors"></i>
                        </div>
                    </div>

                </div>
            </div>

            <!-- The Values That Guide Us (Slide 04 Bottom Ribbon) -->
            <div class="p-6 sm:p-8 rounded-3xl bg-gradient-to-r from-white/10 via-white/5 to-white/10 border border-white/15 backdrop-blur-xl shadow-xl reveal">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-400/20 text-amber-400 flex items-center justify-center font-bold">
                            <i data-lucide="shield-alert" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="text-xs font-black uppercase tracking-widest text-amber-400 block">CORE PHILOSOPHY</span>
                            <h4 class="text-lg font-bold font-heading text-white">The 4 Values That Guide Us</h4>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 w-full lg:w-auto">
                        <div class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-xs flex items-center gap-2 hover:bg-emerald-500/20 hover:border-emerald-400/40 transition-colors">
                            <i data-lucide="shield" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i> Dignity
                        </div>
                        <div class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-xs flex items-center gap-2 hover:bg-blue-500/20 hover:border-blue-400/40 transition-colors">
                            <i data-lucide="scale" class="w-4 h-4 text-blue-400 flex-shrink-0"></i> Equity
                        </div>
                        <div class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-xs flex items-center gap-2 hover:bg-rose-500/20 hover:border-rose-400/40 transition-colors">
                            <i data-lucide="heart" class="w-4 h-4 text-rose-400 flex-shrink-0"></i> Compassion
                        </div>
                        <div class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white font-bold text-xs flex items-center gap-2 hover:bg-amber-500/20 hover:border-amber-400/40 transition-colors">
                            <i data-lucide="check-circle" class="w-4 h-4 text-amber-400 flex-shrink-0"></i> Accountability
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 8. SECTION: HOW WE WORK (Slide 05 - Ultra-Attractive Connected Roadmap) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white relative overflow-hidden" id="how-we-work">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-brand-blue text-xs font-extrabold uppercase tracking-widest mb-4">
                    <i data-lucide="workflow" class="w-4 h-4"></i> HOW WE WORK
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Our Approach to <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-forest to-brand-amber">Lasting Change</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg leading-relaxed">
                    A systematic, 4-stage lifecycle ensuring donor funds create self-sustaining community transformation from day one.
                </p>
            </div>

            <!-- Connected 4-Step Interactive Pipeline -->
            <div class="relative">
                
                <!-- Desktop Connection Line -->
                <div class="hidden lg:block absolute top-1/2 left-12 right-12 h-1 bg-gradient-to-r from-blue-400 via-emerald-400 via-amber-400 to-rose-400 -translate-y-16 -z-0 opacity-40"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
                    
                    <!-- 01 Identify -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-blue-500 shadow-xl hover:shadow-2xl hover:shadow-blue-500/15 transition-all duration-500 reveal group flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-brand-blue to-blue-500 text-white flex items-center justify-center font-black text-2xl shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">
                                    01
                                </div>
                                <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-extrabold text-xs uppercase tracking-wider border border-blue-200">Stage 1</span>
                            </div>
                            
                            <h3 class="text-2xl font-black text-slate-900 mb-3 font-heading group-hover:text-brand-blue transition-colors">Identify</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                                We find the families the system misses — the poorest, remotest, most excluded households in backward villages and urban slums.
                            </p>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-blue-600"></i> Field Household Surveys
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-blue-600"></i> Vulnerability Mapping
                            </div>
                        </div>
                    </div>

                    <!-- 02 Educate & Equip -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-emerald-500 shadow-xl hover:shadow-2xl hover:shadow-emerald-500/15 transition-all duration-500 reveal delay-100 group flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-brand-forest to-emerald-500 text-white flex items-center justify-center font-black text-2xl shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform">
                                    02
                                </div>
                                <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 font-extrabold text-xs uppercase tracking-wider border border-emerald-200">Stage 2</span>
                            </div>
                            
                            <h3 class="text-2xl font-black text-slate-900 mb-3 font-heading group-hover:text-brand-forest transition-colors">Educate & Equip</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                                We deliver schooling, study materials, skills, and healthcare support specifically tailored to each community's unique hurdles.
                            </p>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> Book Bank Distribution
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-600"></i> Free Health & Blood Camps
                            </div>
                        </div>
                    </div>

                    <!-- 03 Empower -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-amber-500 shadow-xl hover:shadow-2xl hover:shadow-amber-500/15 transition-all duration-500 reveal delay-200 group flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-brand-amber to-amber-400 text-slate-950 flex items-center justify-center font-black text-2xl shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform">
                                    03
                                </div>
                                <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-extrabold text-xs uppercase tracking-wider border border-amber-200">Stage 3</span>
                            </div>
                            
                            <h3 class="text-2xl font-black text-slate-900 mb-3 font-heading group-hover:text-amber-600 transition-colors">Empower</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                                We help people earn, lead, and advocate for themselves and their families through tailoring, trades, and financial literacy.
                            </p>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-amber-600"></i> Women Tailoring Training
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-amber-600"></i> Microfinance Linkages
                            </div>
                        </div>
                    </div>

                    <!-- 04 Sustain -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-rose-500 shadow-xl hover:shadow-2xl hover:shadow-rose-500/15 transition-all duration-500 reveal delay-300 group flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-rose-600 to-red-500 text-white flex items-center justify-center font-black text-2xl shadow-lg shadow-rose-500/30 group-hover:scale-110 transition-transform">
                                    04
                                </div>
                                <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-700 font-extrabold text-xs uppercase tracking-wider border border-rose-200">Stage 4</span>
                            </div>
                            
                            <h3 class="text-2xl font-black text-slate-900 mb-3 font-heading group-hover:text-rose-600 transition-colors">Sustain</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                                We build deep local ownership and citizen committees, so the positive change stays long after we step back.
                            </p>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-rose-600"></i> Village Leadership Councils
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-700">
                                <i data-lucide="check" class="w-4 h-4 text-rose-600"></i> Long-Term Autonomy
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 9. SECTION: WHAT WE DO — OUR ONGOING PROJECTS (Ultra-Attractive One-line Auto-Sliding Marquee) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-white via-slate-50 to-white relative overflow-hidden" id="what-we-do">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-brand-forest text-xs font-extrabold uppercase tracking-wider mb-3">
                        <i data-lucide="package" class="w-4 h-4 text-emerald-600"></i> WHAT WE DO
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                        Our Ongoing <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-forest to-brand-amber">Projects</span>
                    </h2>
                </div>
                <!-- <div class="text-slate-500 text-xs sm:text-sm max-w-md">
                    <p class="flex items-center gap-2 bg-white px-4 py-2 rounded-2xl border border-slate-200 shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Continuous auto-slider. <strong class="text-brand-blue font-bold">Hover any card to pause.</strong>
                    </p>
                </div> -->
            </div>
        </div>

        <!-- Continuous Infinite Marquee Auto-slider Container for Ongoing Projects -->
        <div class="marquee-container relative w-full py-4">
            <div class="marquee-track flex gap-6 px-4">
                
                <!-- Project 1: Education for every Child -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-blue hover:shadow-2xl hover:shadow-blue-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/education.jpg') }}" alt="Education for every Child" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-blue-400"></span> Project 01
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-blue-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Education
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-amber-400"></i> Zero Dropout Goal
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="book-open" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-blue transition-colors font-heading leading-snug">Education for Every Child</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Reduces educational inequality and creates better opportunities for future generations through learning centres and school supplies.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold border border-blue-100 flex items-center gap-1">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> 700+ Children Benefited
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Book bank for Needy -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-forest hover:shadow-2xl hover:shadow-emerald-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/hero-1.jpeg') }}" alt="Book bank for Needy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Project 02
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-emerald-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Literacy
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="library" class="w-3.5 h-3.5 text-emerald-300"></i> Free Textbooks
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 text-brand-forest flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-forest transition-colors font-heading leading-snug">Book Bank for Needy</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Promotes educational equality by collecting and distributing textbooks, notebooks, and reference materials to students who can’t afford them.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 text-brand-forest text-xs font-bold border border-emerald-100 flex items-center gap-1">
                            <i data-lucide="book-check" class="w-3.5 h-3.5"></i> Free Book Sets Distributed
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-forest group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Family Support -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-amber hover:shadow-2xl hover:shadow-amber-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/food-relief.jpg') }}" alt="Family Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span> Project 03
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-amber-500 text-slate-950 text-[10px] font-black uppercase tracking-wider shadow">
                                Welfare
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="heart-handshake" class="w-3.5 h-3.5 text-amber-300"></i> Direct Household Aid
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="home" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-700 transition-colors font-heading leading-snug">Family Support</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Provides essential assistance such as food, clothing, and household requirements to vulnerable families during challenging economic situations.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-800 text-xs font-bold border border-amber-200 flex items-center gap-1">
                            <i data-lucide="shopping-bag" class="w-3.5 h-3.5"></i> Emergency Ration Kits
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-amber group-hover:text-slate-950 flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 4: Emergency Medical Help -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-rose-500 hover:shadow-2xl hover:shadow-rose-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/medical-camp.jpg') }}" alt="Emergency Medical Help" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-rose-400"></span> Project 04
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-rose-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Health
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="activity" class="w-3.5 h-3.5 text-rose-400"></i> Free Medicine Supply
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="stethoscope" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition-colors font-heading leading-snug">Emergency Medical Help</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Supports individuals who require urgent healthcare assistance and helps vulnerable patients access diagnostic and essential medicines.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-600 text-xs font-bold border border-rose-100 flex items-center gap-1">
                            <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Free Checkups & Aid
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-rose-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 5: Women’s Health and Empowerment -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-pink-500 hover:shadow-2xl hover:shadow-pink-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/women-empowerment.jpg') }}" alt="Women Health & Empowerment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-pink-400"></span> Project 05
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-pink-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Empowerment
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="scissors" class="w-3.5 h-3.5 text-pink-300"></i> Vocational Tailoring
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="award" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-pink-600 transition-colors font-heading leading-snug">Women's Health & Empowerment</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Promotes awareness, dignity, and access to essential healthcare resources for women and girls through skill development and hygiene programs.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-pink-50 text-pink-600 text-xs font-bold border border-pink-100 flex items-center gap-1">
                            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Dignity & Hygiene Drives
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-pink-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 6: Disaster Management -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-red-500 hover:shadow-2xl hover:shadow-red-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/disaster-relief.jpeg') }}" alt="Disaster Management" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-red-400"></span> Project 06
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-red-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Relief
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="shield-alert" class="w-3.5 h-3.5 text-red-400"></i> Emergency Response
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="life-buoy" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-red-600 transition-colors font-heading leading-snug">Disaster Management</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Provides immediate assistance to communities affected by natural disasters through relief materials, essential food supplies, and shelter kits.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-red-50 text-red-600 text-xs font-bold border border-red-100 flex items-center gap-1">
                            <i data-lucide="truck" class="w-3.5 h-3.5"></i> Rapid Relief Dispatch
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-red-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 7: Shudhu Du-Mutho Bhat -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-indigo-500 hover:shadow-2xl hover:shadow-indigo-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/food-relief.jpg') }}" alt="Shudhu Du-Mutho Bhat" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-indigo-400"></span> Project 07
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-indigo-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Nutrition
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="utensils" class="w-3.5 h-3.5 text-indigo-300"></i> Zero Hunger Mission
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="hand-heart" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors font-heading leading-snug">"Shudhu Du-Mutho Bhat"</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Humanitarian initiative of H.A.K. Welfare society providing cooked food and clothing to homeless, destitute, and mentally challenged individuals.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-xs font-bold border border-indigo-100 flex items-center gap-1">
                            <i data-lucide="check" class="w-3.5 h-3.5"></i> Daily Cooked Meal Drives
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-indigo-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Project 8: Rakto Bandhu -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-rose-600 hover:shadow-2xl hover:shadow-rose-600/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/blood-donation.jpg') }}" alt="Rakto Bandhu" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-rose-400"></span> Project 08
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-rose-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                24/7 Live
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="droplet" class="w-3.5 h-3.5 text-rose-400"></i> Emergency Blood Aid
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="heart-pulse" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition-colors font-heading leading-snug">"Rakto Bandhu" Blood Support</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Encourages voluntary donation and connects live donors with Thalassemia and accident patients requiring urgent blood support across Bengal.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-600 text-xs font-bold border border-rose-100 flex items-center gap-1">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> 1,500+ Patients Reached
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-rose-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate set for seamless continuous marquee looping -->
                <!-- Duplicate Project 1 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-blue hover:shadow-2xl hover:shadow-blue-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/education.jpg') }}" alt="Education for every Child" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-blue-400"></span> Project 01
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-blue-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Education
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-amber-400"></i> Zero Dropout Goal
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="book-open" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-blue transition-colors font-heading leading-snug">Education for Every Child</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Reduces educational inequality and creates better opportunities for future generations through learning centres and school supplies.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold border border-blue-100 flex items-center gap-1">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> 700+ Children Benefited
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 2 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-forest hover:shadow-2xl hover:shadow-emerald-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/hero-1.jpeg') }}" alt="Book bank for Needy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Project 02
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-emerald-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Literacy
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="library" class="w-3.5 h-3.5 text-emerald-300"></i> Free Textbooks
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 text-brand-forest flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-forest transition-colors font-heading leading-snug">Book Bank for Needy</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Promotes educational equality by collecting and distributing textbooks, notebooks, and reference materials to students who can’t afford them.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 text-brand-forest text-xs font-bold border border-emerald-100 flex items-center gap-1">
                            <i data-lucide="book-check" class="w-3.5 h-3.5"></i> Free Book Sets Distributed
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-forest group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 3 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-brand-amber hover:shadow-2xl hover:shadow-amber-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/food-relief.jpg') }}" alt="Family Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span> Project 03
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-amber-500 text-slate-950 text-[10px] font-black uppercase tracking-wider shadow">
                                Welfare
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="heart-handshake" class="w-3.5 h-3.5 text-amber-300"></i> Direct Household Aid
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="home" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-700 transition-colors font-heading leading-snug">Family Support</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Provides essential assistance such as food, clothing, and household requirements to vulnerable families during challenging economic situations.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-800 text-xs font-bold border border-amber-200 flex items-center gap-1">
                            <i data-lucide="shopping-bag" class="w-3.5 h-3.5"></i> Emergency Ration Kits
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-brand-amber group-hover:text-slate-950 flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 4 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-rose-500 hover:shadow-2xl hover:shadow-rose-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="images/medical-camp.jpg" alt="Emergency Medical Help" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-rose-400"></span> Project 04
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-rose-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Health
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="activity" class="w-3.5 h-3.5 text-rose-400"></i> Free Medicine Supply
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="stethoscope" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition-colors font-heading leading-snug">Emergency Medical Help</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Supports individuals who require urgent healthcare assistance and helps vulnerable patients access diagnostic and essential medicines.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-600 text-xs font-bold border border-rose-100 flex items-center gap-1">
                            <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Free Checkups & Aid
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-rose-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 5 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-pink-500 hover:shadow-2xl hover:shadow-pink-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/women-empowerment.jpg') }}" alt="Women Health & Empowerment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-pink-400"></span> Project 05
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-pink-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Empowerment
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="scissors" class="w-3.5 h-3.5 text-pink-300"></i> Vocational Tailoring
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="award" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-pink-600 transition-colors font-heading leading-snug">Women's Health & Empowerment</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Promotes awareness, dignity, and access to essential healthcare resources for women and girls through skill development and hygiene programs.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-pink-50 text-pink-600 text-xs font-bold border border-pink-100 flex items-center gap-1">
                            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Dignity & Hygiene Drives
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-pink-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 6 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-red-500 hover:shadow-2xl hover:shadow-red-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/disaster-relief.jpeg') }}" alt="Disaster Management" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-red-400"></span> Project 06
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-red-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Relief
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="shield-alert" class="w-3.5 h-3.5 text-red-400"></i> Emergency Response
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-red-50 text-red-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="life-buoy" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-red-600 transition-colors font-heading leading-snug">Disaster Management</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Provides immediate assistance to communities affected by natural disasters through relief materials, essential food supplies, and shelter kits.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-red-50 text-red-600 text-xs font-bold border border-red-100 flex items-center gap-1">
                            <i data-lucide="truck" class="w-3.5 h-3.5"></i> Rapid Relief Dispatch
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-red-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 7 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-indigo-500 hover:shadow-2xl hover:shadow-indigo-500/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/food-relief.jpg') }}" alt="Shudhu Du-Mutho Bhat" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-indigo-400"></span> Project 07
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-indigo-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                Nutrition
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="utensils" class="w-3.5 h-3.5 text-indigo-300"></i> Zero Hunger Mission
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="hand-heart" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors font-heading leading-snug">"Shudhu Du-Mutho Bhat"</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Humanitarian initiative of H.A.K. Welfare society providing cooked food and clothing to homeless, destitute, and mentally challenged individuals.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-xs font-bold border border-indigo-100 flex items-center gap-1">
                            <i data-lucide="check" class="w-3.5 h-3.5"></i> Daily Cooked Meal Drives
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-indigo-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Project 8 -->
                <div class="w-[350px] sm:w-[390px] flex-shrink-0 bg-white rounded-2xl p-5 border-2 border-slate-200/80 hover:border-rose-600 hover:shadow-2xl hover:shadow-rose-600/15 transition-all duration-500 flex flex-col justify-between group overflow-hidden" aria-hidden="true">
                    <div>
                        <div class="relative h-52 rounded-xl overflow-hidden mb-4 bg-slate-900">
                            <img src="{{ asset('assets/media/images/blood-donation.jpg') }}" alt="Rakto Bandhu" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md border border-white/20 text-white text-[11px] font-black tracking-wider flex items-center gap-1.5 shadow">
                                <span class="w-2 h-2 rounded-full bg-rose-400"></span> Project 08
                            </span>
                            <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-rose-600 text-white text-[10px] font-extrabold uppercase tracking-wider shadow">
                                24/7 Live
                            </span>
                            <span class="absolute bottom-3 left-3 text-white text-xs font-bold flex items-center gap-1.5">
                                <i data-lucide="droplet" class="w-3.5 h-3.5 text-rose-400"></i> Emergency Blood Aid
                            </span>
                        </div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="heart-pulse" class="w-4 h-4"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition-colors font-heading leading-snug">"Rakto Bandhu" Blood Support</h3>
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                            Encourages voluntary donation and connects live donors with Thalassemia and accident patients requiring urgent blood support across Bengal.
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-3.5 border-t border-slate-100">
                        <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-600 text-xs font-bold border border-rose-100 flex items-center gap-1">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> 1,500+ Patients Reached
                        </span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-700 group-hover:bg-rose-600 group-hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm">
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. SECTION: OUR IMPACT (Slide 16 Exact Metrics & Animated Counter Dashboard) -->
    <section class="py-14 sm:py-16 bg-gradient-to-br from-brand-midnight via-brand-navy to-slate-950 text-white relative overflow-hidden" id="our-impact">
        <!-- Ambient lighting blobs -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-brand-blue/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-brand-forest/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Section Title Header -->
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-400/30 text-emerald-300 text-xs font-extrabold uppercase tracking-widest mb-4">
                    <i data-lucide="bar-chart-3" class="w-4 h-4 text-emerald-400"></i> OUR IMPACT SINCE 2015
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-white tracking-tight">
                    The Change We've <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 via-teal-300 to-amber-300">Made Together</span>
                </h2>
                <p class="text-slate-300 mt-4 text-base sm:text-lg font-light leading-relaxed">
                    Since 2015, with partners like you, H.A.K. Welfare Society has turned support into measurable, lasting, and accountable ground reality.
                </p>
            </div>

            <!-- Slide 16 Exact Impact Metrics - All Animated & Countable Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                
                <!-- Stat 1: 12,000+ Lives Impacted -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-amber-400/50 hover:bg-white/10 hover:shadow-glow-gold transition-all duration-500 reveal group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-amber-500/20 text-amber-300 border border-amber-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="users" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-300 text-[11px] font-extrabold uppercase tracking-wider border border-amber-400/20">Overall Reach</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-yellow-400" data-target="12000">0</span><span class="text-amber-400">+</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Lives Impacted Since 2015</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Underprivileged children, women, elderly, and rural families supported across welfare initiatives.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-amber-300">
                        <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> Continuous Year-on-Year Growth
                    </div>
                </div>

                <!-- Stat 2: 85+ Communities Reached -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-emerald-400/50 hover:bg-white/10 hover:shadow-glow-emerald transition-all duration-500 reveal delay-100 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="map-pin" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-300 text-[11px] font-extrabold uppercase tracking-wider border border-emerald-400/20">Ground Foothold</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-teal-400" data-target="85">0</span><span class="text-emerald-400">+</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Communities Served</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Active intervention presence in backward village gram panchayats and underserved urban slum clusters.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-emerald-300">
                        <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Deep Local Citizen Ownership
                    </div>
                </div>

                <!-- Stat 3: 9,500 Children in School Programmes -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-blue-400/50 hover:bg-white/10 hover:shadow-glow-blue transition-all duration-500 reveal delay-200 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-blue-500/20 text-blue-300 border border-blue-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="book-open" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-blue-500/10 text-blue-300 text-[11px] font-extrabold uppercase tracking-wider border border-blue-400/20">Education</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-400" data-target="9500">0</span><span class="text-blue-400">+</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Children in School Programmes</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Provided with free textbooks, reference kits, uniforms, and learning centre academic tutoring.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-blue-300">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Zero-Dropout Target Mission
                    </div>
                </div>

                <!-- Stat 4: 6,200 Women & Youth Trained -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-pink-400/50 hover:bg-white/10 transition-all duration-500 reveal delay-300 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-pink-500/20 text-pink-300 border border-pink-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="award" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-pink-500/10 text-pink-300 text-[11px] font-extrabold uppercase tracking-wider border border-pink-400/20">Empowerment</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-pink-300 to-rose-400" data-target="6200">0</span><span class="text-pink-400">+</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Women & Youth Trained</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Certified in tailoring, garment making, handicrafts, computer basics, and micro-business management.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-pink-300">
                        <i data-lucide="heart" class="w-3.5 h-3.5"></i> Self-Reliance & Dignity
                    </div>
                </div>

                <!-- Stat 5: 92% Graduates in Stable Livelihoods -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-amber-300/50 hover:bg-white/10 transition-all duration-500 reveal delay-400 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-yellow-500/20 text-yellow-300 border border-yellow-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="trending-up" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-yellow-500/10 text-yellow-300 text-[11px] font-extrabold uppercase tracking-wider border border-yellow-400/20">Success Rate</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-amber-300" data-target="92">0</span><span class="text-yellow-300">%</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Graduates in Stable Livelihoods</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Graduates earning regular, dignified income through self-employment, home tailoring, or local enterprise linkages.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-yellow-300">
                        <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Verified Field Outcome
                    </div>
                </div>

                <!-- Stat 6: 8 Districts Across West Bengal -->
                <div class="bg-white/5 backdrop-blur-xl p-6 rounded-2xl border border-white/15 hover:border-rose-400/50 hover:bg-white/10 transition-all duration-500 reveal delay-500 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-rose-500/20 text-rose-300 border border-rose-400/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="landmark" class="w-7 h-7"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-rose-500/10 text-rose-300 text-[11px] font-extrabold uppercase tracking-wider border border-rose-400/20">Districts</span>
                        </div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-white mb-2 tracking-tight">
                            <span class="counter text-transparent bg-clip-text bg-gradient-to-r from-rose-300 to-pink-400" data-target="8">0</span><span class="text-rose-400"> Core</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2 font-heading">Districts in West Bengal</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            South 24 PGS, North 24 PGS, Kolkata, Purulia, Bankura, Murshidabad, Howrah, and Hooghly.
                        </p>
                    </div>
                    <div class="pt-4 mt-6 border-t border-white/10 flex items-center gap-1.5 text-xs font-semibold text-rose-300">
                        <i data-lucide="compass" class="w-3.5 h-3.5"></i> 24/7 Field & Emergency Support
                    </div>
                </div>

            </div>

            <!-- Bottom Impact Quote Strip from Slide 16 -->
            <div class="p-6 sm:p-8 rounded-3xl bg-white/10 border border-white/20 backdrop-blur-xl text-center flex flex-col sm:flex-row items-center justify-between gap-6 reveal">
                <div class="flex items-center gap-3 text-left">
                    <div class="w-10 h-10 rounded-xl bg-amber-400 text-slate-950 flex items-center justify-center font-bold flex-shrink-0">
                        <i data-lucide="sparkles" class="w-5 h-5"></i>
                    </div>
                    <p class="text-sm font-medium text-slate-200">
                        "Real transformation is not an abstract concept — it is measurable lives saved, children educated, and families made self-reliant."
                    </p>
                </div>
                <a href="#csr" class="px-6 py-3 rounded-full bg-white text-slate-950 font-black text-xs uppercase tracking-wider hover:bg-amber-300 transition-all flex items-center gap-2 flex-shrink-0 shadow-lg">
                    Partner With Our Impact <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- 11. SECTION: OUR REACH (Slide 17 Exact Data & Ultra-Attractive Geographic Hub) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-slate-50 via-white to-slate-50 relative overflow-hidden" id="our-reach">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-brand-blue text-xs font-extrabold uppercase tracking-widest mb-4">
                    <i data-lucide="map-pin" class="w-4 h-4"></i> OUR REACH
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Where <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-forest to-brand-amber">We Work</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg leading-relaxed">
                    From remote backward villages to urban settlements, H.A.K Welfare Society works where the need is greatest — building deep, long-term roots in every community we enter.
                </p>
            </div>

            <!-- Top Level Geographic Key Metrics Bar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 reveal">
                
                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-brand-blue shadow-lg hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 flex items-center gap-6 group">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-brand-blue border border-blue-200 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i data-lucide="globe-2" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-brand-blue leading-none mb-1"><span class="counter" data-target="2">0</span>+</div>
                        <h3 class="text-base font-bold text-slate-900 font-heading">States Covered</h3>
                        <span class="text-xs font-semibold text-slate-500">West Bengal · Jharkhand · Bihar</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-brand-forest shadow-lg hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-300 flex items-center gap-6 group">
                    <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-brand-forest border border-emerald-200 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i data-lucide="map" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-brand-forest leading-none mb-1"><span class="counter" data-target="30">0</span></div>
                        <h3 class="text-base font-bold text-slate-900 font-heading">Districts Impacted</h3>
                        <span class="text-xs font-semibold text-slate-500">Active Volunteer Hubs</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-amber-500 shadow-lg hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-300 flex items-center gap-6 group">
                    <div class="w-16 h-16 rounded-2xl bg-amber-50 text-amber-700 border border-amber-200 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i data-lucide="home" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <div class="text-4xl sm:text-5xl font-black font-heading text-amber-700 leading-none mb-1"><span class="counter" data-target="85">0</span></div>
                        <h3 class="text-base font-bold text-slate-900 font-heading">Communities Served</h3>
                        <span class="text-xs font-semibold text-slate-500">Village & Slum Centers</span>
                    </div>
                </div>

            </div>

            <!-- Detailed State Operations Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                
                <!-- State 1: West Bengal -->
                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-brand-blue shadow-lg hover:shadow-2xl transition-all duration-500 reveal group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="px-3 py-1 rounded-full bg-blue-100 text-brand-blue font-bold text-xs uppercase tracking-wider">Primary Base (HQ)</span>
                            <span class="hidden sm:flex text-xs font-bold text-emerald-600 items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 pulse-badge"></span> <span class="counter" data-target="60">0</span>+ Active Centers
                            </span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-2 font-heading">West Bengal</h3>
                        <p class="text-xs text-slate-500 mb-4 font-semibold">Headquarters: Basudevpur · Estd. 2015</p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                            Core operations spanning 8 major districts across both North and South Bengal, running continuous education centres, Rakto Bandhu blood network, and free health camps.
                        </p>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-100">
                        <div class="text-xs font-bold text-slate-800 mb-1">Key Operational Districts:</div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Kolkata</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">South 24 PGS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">North 24 PGS</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Purulia</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Bankura</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Murshidabad</span>
                        </div>
                    </div>
                </div>

                <!-- State 2: Jharkhand -->
                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-brand-forest shadow-lg hover:shadow-2xl transition-all duration-500 reveal delay-100 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="px-3 py-1 rounded-full bg-emerald-100 text-brand-forest font-bold text-xs uppercase tracking-wider">Tribal & Rural Outreach</span>
                            <span class="hidden sm:flex text-xs font-bold text-emerald-600 items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> <span class="counter" data-target="15">0</span>+ Field Hubs
                            </span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-2 font-heading">Jharkhand</h3>
                        <p class="text-xs text-slate-500 mb-4 font-semibold">Extended Rural Interventions</p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                            Partnering with local grassroots volunteers to distribute study kits, conduct mobile eye and medical checkup camps, and provide seasonal winter and emergency relief.
                        </p>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-100">
                        <div class="text-xs font-bold text-slate-800 mb-1">Key Focus Sectors:</div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Book Bank Units</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Rural Medical Aid</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Winter Clothing</span>
                        </div>
                    </div>
                </div>

                <!-- State 3: Bihar -->
                <div class="bg-white rounded-2xl p-6 border-2 border-slate-200/80 hover:border-amber-500 shadow-lg hover:shadow-2xl transition-all duration-500 reveal delay-200 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-800 font-bold text-xs uppercase tracking-wider">Disaster & Relief</span>
                            <span class="hidden sm:flex text-xs font-bold text-emerald-600 items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> <span class="counter" data-target="10">0</span>+ Flood Hubs
                            </span>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-2 font-heading">Bihar</h3>
                        <p class="text-xs text-slate-500 mb-4 font-semibold">Rapid Response & Destitute Support</p>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 font-normal">
                            Coordinating disaster response networks for flood-affected families, distribution of dry rations, student book donations, and destitute elderly assistance.
                        </p>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-100">
                        <div class="text-xs font-bold text-slate-800 mb-1">Key Focus Sectors:</div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Flood Relief</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Food Rations</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-semibold">Child Education</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Geographic Summary Banner -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm text-center flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3 text-left">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-forest flex items-center justify-center font-bold flex-shrink-0">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <div class="font-bold text-slate-900 text-sm">Expanding Footprint in 2026+</div>
                        <div class="text-xs text-slate-500">Opening 25 new village study centres and expanding Rakto Bandhu helpline network.</div>
                    </div>
                </div>
                <a href="#contact" class="text-xs font-bold text-brand-blue hover:text-blue-700 underline flex items-center gap-1">
                    Partner in Your District <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- 12. SECTION: ACCOUNTABILITY (Slide 20 - Ultra-Attractive Financial Transparency Portal) -->
    <section class="py-14 sm:py-16 bg-white relative overflow-hidden" id="accountability">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-brand-forest text-xs font-extrabold uppercase tracking-widest mb-4">
                    <i data-lucide="pie-chart" class="w-4 h-4"></i> ACCOUNTABILITY & TRANSPARENCY
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Where Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-brand-blue">Support Goes</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg leading-relaxed">
                    We believe trust is earned through complete financial transparency. Every rupee is accounted for, documented, and independently audited.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-8">
                
                <!-- Left: Big Visual 80% Field Ratio Dashboard -->
                <div class="lg:col-span-5 reveal">
                    <div class="bg-gradient-to-br from-brand-midnight via-slate-900 to-brand-navy rounded-2xl p-6 sm:p-8 text-white shadow-2xl border border-slate-800 relative overflow-hidden flex flex-col justify-between h-full">
                        <div class="absolute top-0 right-0 w-48 h-48 bg-emerald-500/15 rounded-full blur-2xl pointer-events-none"></div>
                        
                        <div>
                            <span class="px-3.5 py-1 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 text-xs font-extrabold uppercase tracking-wider inline-block mb-6">
                                Industry-Leading Efficiency
                            </span>
                            
                            <div class="flex items-baseline gap-2 mb-4">
                                <span class="text-6xl sm:text-7xl font-black font-heading text-emerald-400 tracking-tight">₹80</span>
                                <span class="text-xl sm:text-2xl font-bold text-slate-200 font-heading">/ every ₹100</span>
                            </div>
                            
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 font-heading">
                                Direct to Ground-Level Field Programs
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6 font-light">
                                80% of total funds are directly invested into tangible materials — textbooks, nutrition, medical supplies, and skill machinery.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-white/10 space-y-3 text-xs text-slate-300">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
                                <span>Independently audited by Chartered Accountants annually</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="shield-check" class="w-4 h-4 text-amber-400"></i>
                                <span>Income Tax Dept 80G & 12A Certified (URN: AADAB4154EF20241)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: 4 Allocation Streams Breakdown with Progress Bars -->
                <div class="lg:col-span-7 reveal">
                    <div class="bg-slate-50 p-8 sm:p-10 rounded-3xl border-2 border-slate-200/80 shadow-lg space-y-6">
                        
                        <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                            <h3 class="text-xl font-black text-slate-900 font-heading">Direct Fund Allocation</h3>
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Per ₹10,000 Donation</span>
                        </div>

                        <!-- 1. 80% Field Materials -->
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-emerald-500 transition-colors shadow-sm">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">80%</div>
                                    <span class="font-bold text-slate-900 text-sm sm:text-base">Materials for Field Program</span>
                                </div>
                                <span class="font-black text-emerald-600 text-sm sm:text-base font-heading">₹8,000</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden mb-2">
                                <div class="bg-emerald-600 h-full rounded-full" style="width: 80%"></div>
                            </div>
                            <p class="text-xs text-slate-500">Textbooks, uniforms, food rations, diagnostic kits, and tailoring machines.</p>
                        </div>

                        <!-- 2. 10% Transportation -->
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-blue-500 transition-colors shadow-sm">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs">10%</div>
                                    <span class="font-bold text-slate-900 text-sm sm:text-base">Transportation & Logistics</span>
                                </div>
                                <span class="font-black text-blue-600 text-sm sm:text-base font-heading">₹1,000</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden mb-2">
                                <div class="bg-blue-600 h-full rounded-full" style="width: 10%"></div>
                            </div>
                            <p class="text-xs text-slate-500">Safely delivering relief supplies and volunteer medical teams to remote backward villages.</p>
                        </div>

                        <!-- 3. 5% Administration -->
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-amber-500 transition-colors shadow-sm">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-xs">5%</div>
                                    <span class="font-bold text-slate-900 text-sm sm:text-base">Governance & Administration</span>
                                </div>
                                <span class="font-black text-amber-700 text-sm sm:text-base font-heading">₹500</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden mb-2">
                                <div class="bg-brand-amber h-full rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-xs text-slate-500">Statutory filings, annual legal audits, documentation, and office operations.</p>
                        </div>

                        <!-- 4. 5% Fundraising -->
                        <div class="p-4 rounded-2xl bg-white border border-slate-200 hover:border-purple-600 transition-colors shadow-sm">
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-xs">5%</div>
                                    <span class="font-bold text-slate-900 text-sm sm:text-base">Fundraising & Communication</span>
                                </div>
                                <span class="font-black text-purple-700 text-sm sm:text-base font-heading">₹500</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden mb-2">
                                <div class="bg-purple-600 h-full rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-xs text-slate-500">Public awareness, donor communication, and corporate CSR outreach.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 13. SECTION: CSR & PARTNERSHIP PACKAGES (Slide 18 & 19 - Ultra-Attractive CSR Hub) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white relative overflow-hidden" id="csr">
        <!-- Ambient lighting -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-forest/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-blue/10 border border-brand-blue/20 text-brand-blue text-xs font-extrabold uppercase tracking-widest mb-3">
                    <i data-lucide="briefcase" class="w-4 h-4 text-brand-blue"></i> FOR OUR PARTNERS
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Corporate Partnership <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-forest to-brand-amber">Opportunities</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg font-light leading-relaxed">
                    A CSR partnership that delivers measurable ground impact — and an inspiring transformation story your employees and stakeholders will take pride in. Fully compliant with Section 135 & Section 80G.
                </p>
            </div>

            <!-- 4 Modern CSR Tiers from Slide 19 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                
                <!-- Tier 1: Supporter -->
                <div class="rounded-2xl p-6 bg-white border-2 border-slate-200/80 hover:border-brand-blue hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 reveal flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-blue-50 text-brand-blue text-[11px] font-black uppercase tracking-wider border border-blue-100">Tier 01</span>
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="award" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-1 font-heading group-hover:text-brand-blue transition-colors">Supporter</h3>
                        <div class="text-3xl font-extrabold text-brand-blue font-heading mb-4">₹5 Lakh</div>
                        
                        <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-100 mb-5">
                            <span class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider block mb-1">What It Funds:</span>
                            <p class="text-xs font-bold text-emerald-950 leading-snug">Educates 40 underprivileged children for a full academic year.</p>
                        </div>

                        <div class="space-y-2 mb-6">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Deliverables & Visibility:</span>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                                <span>Official website & annual report listing</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                                <span>Verified 80G tax deduction certificate</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                                <span>Quarterly student progress reports</span>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="mailto:societyhakwelfare@gmail.com?subject=CSR%20Partnership%20-%20Tier%2001%20Supporter%20(5%20Lakh)" class="w-full py-3 text-center rounded-xl bg-slate-100 border border-slate-200 font-bold text-slate-800 hover:bg-brand-blue hover:text-white hover:border-brand-blue transition-all duration-300 text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-sm">
                        Select Supporter <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Tier 2: Partner -->
                <div class="rounded-2xl p-6 bg-white border-2 border-slate-200/80 hover:border-brand-forest hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 reveal delay-100 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-emerald-50 text-brand-forest text-[11px] font-black uppercase tracking-wider border border-emerald-100">Tier 02</span>
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-brand-forest flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="sparkles" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-1 font-heading group-hover:text-brand-forest transition-colors">Partner</h3>
                        <div class="text-3xl font-extrabold text-brand-forest font-heading mb-4">₹15 Lakh</div>
                        
                        <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-100 mb-5">
                            <span class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider block mb-1">What It Funds:</span>
                            <p class="text-xs font-bold text-emerald-950 leading-snug">Runs a complete village learning centre end-to-end for 1 year.</p>
                        </div>

                        <div class="space-y-2 mb-6">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Deliverables & Visibility:</span>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-forest flex-shrink-0 mt-0.5"></i>
                                <span>Co-branded education centre branding</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-forest flex-shrink-0 mt-0.5"></i>
                                <span>Dedicated photo & video media package</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-forest flex-shrink-0 mt-0.5"></i>
                                <span>Employee volunteering day opportunities</span>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="mailto:societyhakwelfare@gmail.com?subject=CSR%20Partnership%20-%20Tier%2002%20Partner%20(15%20Lakh)" class="w-full py-3 text-center rounded-xl bg-slate-100 border border-slate-200 font-bold text-slate-800 hover:bg-brand-forest hover:text-white hover:border-brand-forest transition-all duration-300 text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-sm">
                        Select Partner <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Tier 3: Champion (RECOMMENDED / HIGHLIGHTED) -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-brand-navy via-slate-900 to-brand-midnight text-white shadow-2xl relative border-2 border-brand-amber reveal delay-200 flex flex-col justify-between group overflow-hidden">
                    <!-- Glow effect -->
                    <div class="absolute -top-12 -right-12 w-36 h-36 bg-amber-500/20 rounded-full blur-2xl pointer-events-none"></div>
                    
                    <span class="absolute top-4 right-4 bg-brand-amber text-slate-950 font-black text-[10px] uppercase tracking-wider py-1 px-3 rounded-full shadow-lg flex items-center gap-1">
                        <i data-lucide="star" class="w-3 h-3 fill-current"></i> Most Popular
                    </span>
                    
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-[11px] font-black uppercase tracking-wider border border-amber-400/30">Tier 03</span>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-1 font-heading">Champion</h3>
                        <div class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-400 font-heading mb-4">₹50 Lakh</div>
                        
                        <div class="p-3.5 rounded-xl bg-amber-500/15 border border-amber-400/30 mb-5">
                            <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider block mb-1">What It Funds:</span>
                            <p class="text-xs font-bold text-white leading-snug">Trains 250 rural women and youth into permanent stable livelihoods.</p>
                        </div>

                        <div class="space-y-2 mb-6">
                            <span class="text-[11px] font-bold text-amber-300/70 uppercase tracking-wider block">Deliverables & Visibility:</span>
                            <div class="flex items-start gap-2 text-xs text-slate-200">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5"></i>
                                <span>Named vocational training academy</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-200">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5"></i>
                                <span>CXO & Leadership field inauguration visit</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-200">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5"></i>
                                <span>Comprehensive ESG audit & CA certification</span>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="mailto:societyhakwelfare@gmail.com?subject=CSR%20Partnership%20-%20Tier%2003%20Champion%20(50%20Lakh)" class="w-full py-3.5 text-center rounded-xl bg-brand-amber hover:bg-amber-400 font-black text-slate-950 transition-all duration-300 text-xs uppercase tracking-wider shadow-lg shadow-amber-500/25 flex items-center justify-center gap-2">
                        Partner as Champion <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Tier 4: Transformer -->
                <div class="rounded-2xl p-6 bg-white border-2 border-slate-200/80 hover:border-purple-600 hover:shadow-2xl hover:shadow-purple-500/10 transition-all duration-500 reveal delay-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-[11px] font-black uppercase tracking-wider border border-purple-100">Tier 04</span>
                            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-700 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i data-lucide="landmark" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-1 font-heading group-hover:text-purple-700 transition-colors">Transformer</h3>
                        <div class="text-3xl font-extrabold text-purple-700 font-heading mb-4">₹1 Crore +</div>
                        
                        <div class="p-3.5 rounded-xl bg-purple-50 border border-purple-100 mb-5">
                            <span class="text-[11px] font-bold text-purple-800 uppercase tracking-wider block mb-1">What It Funds:</span>
                            <p class="text-xs font-bold text-purple-950 leading-snug">Comprehensively transforms an entire block/community ecosystem.</p>
                        </div>

                        <div class="space-y-2 mb-6">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Deliverables & Visibility:</span>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                <span>Lead Anchor Corporate Partner status</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                <span>Full documentary film & media coverage</span>
                            </div>
                            <div class="flex items-start gap-2 text-xs text-slate-700">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                <span>Customized KPI & multi-district monitoring</span>
                            </div>
                        </div>
                    </div>
                    <a href="mailto:societyhakwelfare@gmail.com?subject=CSR%20Partnership%20-%20Tier%2004%20Transformer%20(1%20Crore%2B)" class="w-full py-3 text-center rounded-xl bg-slate-100 border border-slate-200 font-bold text-slate-800 hover:bg-purple-700 hover:text-white hover:border-purple-700 transition-all duration-300 text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-sm">
                        Select Transformer <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

            </div>

            <!-- Custom CSR Partnership Assurance Bar -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-md flex flex-col md:flex-row items-center justify-between gap-6 reveal">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-brand-forest flex items-center justify-center flex-shrink-0">
                        <i data-lucide="handshake" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-base font-heading">Need a Tailored CSR Proposal for Your Board?</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Every tier is fully customizable. We provide customized proposals, MoU frameworks, and budget roadmaps within 48 hours.</p>
                    </div>
                </div>
                <a target="_blank" href="mailto:societyhakwelfare@gmail.com?subject=Custom%20CSR%20Partnership%20Proposal%20Inquiry" class="px-6 py-3 rounded-full bg-slate-900 hover:bg-brand-blue text-white font-black text-xs uppercase tracking-wider transition-all duration-300 flex items-center gap-2 flex-shrink-0 shadow-md">
                    Request Custom CSR Deck <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- 14. SECTION: NGO BANK & UPI DONATION DETAILS (80G TAX EXEMPTION) -->
    <section class="py-14 sm:py-16 bg-white" id="donate-calc">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-slate-900 via-brand-navy to-slate-950 rounded-3xl p-6 sm:p-10 text-white shadow-2xl border border-slate-800 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-brand-amber/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left: Trust, Tax Exemption & 80G Receipt Process -->
                    <div class="lg:col-span-5">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4">
                            <i data-lucide="shield-check" class="w-4 h-4"></i> 50% Tax Exemption under 80G
                        </span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-white mb-6 leading-tight">
                            Donate Directly to <br/>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-amber via-yellow-300 to-amber-400">
                                H.A.K. Welfare Society
                            </span>
                        </h2>
                        <p class="text-slate-300 text-base leading-relaxed mb-6 font-light">
                            Your donation directly funds child education, emergency medical diagnostics, food relief, and women's livelihood programs. Every contribution is accounted for and independently audited.
                        </p>

                        <!-- Legal & Compliance Info -->
                        <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-xs space-y-2.5 text-slate-300 font-mono mb-6">
                            <div class="flex items-center justify-between pb-2 border-b border-white/10">
                                <span class="text-slate-400">WB Reg. Act:</span>
                                <strong class="text-white font-sans">XXVI of 1961 (S0241093)</strong>
                            </div>
                            <div class="flex items-center justify-between pb-2 border-b border-white/10">
                                <span class="text-slate-400">80G & 12A URN:</span>
                                <strong class="text-emerald-300 font-sans">AADAB4154EF20241</strong>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-slate-400">Tax Benefit:</span>
                                <strong class="text-amber-300 font-sans">50% Deduction under Sec 80G</strong>
                            </div>
                        </div>

                        <!-- 80G Receipt Instructions -->
                        <div class="p-4 rounded-2xl bg-emerald-950/40 border border-emerald-500/30 text-xs text-emerald-200">
                            <div class="font-bold mb-1 flex items-center gap-1.5 text-emerald-300 text-sm">
                                <i data-lucide="file-text" class="w-4 h-4"></i> How to Get Your 80G Tax Receipt:
                            </div>
                            <p class="leading-relaxed">
                                After completing your transfer, please email your transaction reference/screenshot along with your PAN card details to <a target="_blank" href="mailto:societyhakwelfare@gmail.com" class="underline font-bold text-white">societyhakwelfare@gmail.com</a>. Your official 80G receipt will be emailed within 24–48 hours.
                            </p>
                        </div>
                    </div>

                    <!-- Right: Official NGO Bank Account & Instant UPI Details -->
                    <div class="lg:col-span-7 space-y-6">
                        
                        <!-- Official Bank Account Card -->
                        <div class="bg-white/10 backdrop-blur-xl p-6 sm:p-8 rounded-3xl border border-white/20 shadow-xl">
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-white/15">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-brand-amber text-slate-950 flex items-center justify-center font-bold">
                                        <i data-lucide="building-2" class="w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-white font-heading">Official NGO Bank Account</h3>
                                        <span class="text-xs text-slate-400">For NEFT / RTGS / IMPS / NetBanking</span>
                                    </div>
                                </div>
                                <span class="hidden sm:inline-block px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] font-bold uppercase tracking-wider border border-emerald-400/30">
                                    Verified Current A/C
                                </span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-mono">
                                
                                <!-- Account Name -->
                                <div class="sm:col-span-2 p-3.5 rounded-xl bg-slate-950/60 border border-white/10 flex items-center justify-between">
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-sans block mb-0.5">Account Beneficiary Name</span>
                                        <strong class="text-white text-xs sm:text-sm font-sans tracking-wide">BASUDEVPUR HUMAN ALLIANCE'S KULTURAL (H.A.K) WELFARE SOCIETY</strong>
                                    </div>
                                    <button onclick="copyToClipboard('BASUDEVPUR HUMAN ALLIANCE\'S KULTURAL (H.A.K) WELFARE SOCIETY', this)" class="p-2 rounded-lg bg-white/10 hover:bg-brand-amber hover:text-slate-950 text-slate-300 transition-colors ml-2 flex-shrink-0" title="Copy Beneficiary Name">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                    </button>
                                </div>

                                <!-- Account Number -->
                                <div class="p-3.5 rounded-xl bg-slate-950/60 border border-white/10 flex items-center justify-between">
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-sans block mb-0.5">Account Number</span>
                                        <strong class="text-amber-300 text-sm sm:text-base tracking-wider font-bold">924010023458921</strong>
                                    </div>
                                    <button onclick="copyToClipboard('924010023458921', this)" class="p-2 rounded-lg bg-white/10 hover:bg-brand-amber hover:text-slate-950 text-slate-300 transition-colors ml-2 flex-shrink-0" title="Copy Account Number">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                    </button>
                                </div>

                                <!-- IFSC Code -->
                                <div class="p-3.5 rounded-xl bg-slate-950/60 border border-white/10 flex items-center justify-between">
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-sans block mb-0.5">IFSC Code</span>
                                        <strong class="text-emerald-300 text-sm sm:text-base tracking-wider font-bold">UTIB0002456</strong>
                                    </div>
                                    <button onclick="copyToClipboard('UTIB0002456', this)" class="p-2 rounded-lg bg-white/10 hover:bg-brand-amber hover:text-slate-950 text-slate-300 transition-colors ml-2 flex-shrink-0" title="Copy IFSC Code">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                    </button>
                                </div>

                                <!-- Bank Name & Branch -->
                                <div class="p-3.5 rounded-xl bg-slate-950/60 border border-white/10 flex items-center justify-between">
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-sans block mb-0.5">Bank Name</span>
                                        <strong class="text-white text-xs sm:text-sm font-sans">Axis Bank</strong>
                                    </div>
                                </div>

                                <div class="p-3.5 rounded-xl bg-slate-950/60 border border-white/10 flex items-center justify-between">
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-sans block mb-0.5">Branch</span>
                                        <strong class="text-white text-xs sm:text-sm font-sans">Basudevpur, West Bengal</strong>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Instant Scan & Pay via UPI Card -->
                        <div class="bg-gradient-to-r from-emerald-900/40 to-slate-900/80 p-5 sm:p-6 rounded-3xl border border-emerald-500/30 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-5 sm:gap-6 shadow-lg">
                            <div class="flex-1 min-w-0">
                                <span class="text-xs font-extrabold uppercase tracking-wider text-emerald-400 block mb-1">
                                    Instant UPI Transfer
                                </span>
                                <h4 class="text-sm sm:text-base font-bold text-white font-heading">Scan with GPay, PhonePe, Paytm, BHIM</h4>
                                <div class="text-xs text-slate-300 font-mono mt-1.5 flex flex-wrap items-center gap-1.5 break-all">
                                    <span class="text-slate-400">UPI ID:</span>
                                    <strong class="text-white bg-slate-950/60 px-2 py-0.5 rounded-md border border-white/10 text-xs">societyhakwelfare@upi</strong>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5 w-full lg:w-auto flex-shrink-0">
                                <button onclick="openQrModal()" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-brand-amber hover:bg-amber-400 text-slate-950 font-black text-xs uppercase tracking-wider transition-all flex items-center justify-center gap-2 shadow-md active:scale-95">
                                    <i data-lucide="qr-code" class="w-4 h-4"></i> Show QR Code
                                </button>
                                <button onclick="copyToClipboard('societyhakwelfare@upi', this)" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs uppercase tracking-wider transition-all flex items-center justify-center gap-2 shadow-md active:scale-95">
                                    <i data-lucide="copy" class="w-4 h-4"></i> Copy UPI ID
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 15. SECTION: CONTACT US (Slide 21 - Direct Ground Office & Interactive Query Hub) -->
    <section class="py-14 sm:py-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white relative overflow-hidden" id="contact">
        <!-- Ambient lighting -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-forest/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-brand-forest text-xs font-extrabold uppercase tracking-widest mb-3">
                    <i data-lucide="phone-call" class="w-4 h-4 text-emerald-600"></i> CONTACT DESK & GET IN TOUCH
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 font-heading tracking-tight">
                    Get in Touch With <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-brand-forest to-brand-amber">Our Team</span>
                </h2>
                <p class="text-slate-600 mt-4 text-base sm:text-lg font-light leading-relaxed">
                    Have a question about our grassroots initiatives, corporate CSR collaborations, student sponsorships, or 80G tax receipts? We're here to help you make a meaningful difference.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <!-- Left: Direct Contact Information Cards (5 Cols) -->
                <div class="lg:col-span-5 flex flex-col justify-between space-y-4">
                    
                    <!-- Head Office Card -->
                    <div class="bg-white p-6 rounded-2xl border-2 border-slate-200/80 shadow-md hover:border-emerald-500 hover:shadow-xl transition-all duration-300 reveal group">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-brand-forest flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="text-xs font-extrabold uppercase tracking-wider text-emerald-700 block mb-1">Registered Head Office</span>
                                <h4 class="text-base font-bold text-slate-900 font-heading mb-1">Basudevpur, West Bengal</h4>
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                    Basudevpur, Purba Medinipur / South 24 Parganas, West Bengal, India.
                                </p>
                                <span class="inline-flex items-center gap-1.5 mt-2.5 text-[11px] font-bold text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full">
                                    <i data-lucide="building" class="w-3 h-3 text-emerald-600"></i> Estd. 2015 · Field Offices Across 8 WB Districts
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Email Contact Card -->
                    <div class="bg-white p-6 rounded-2xl border-2 border-slate-200/80 shadow-md hover:border-brand-amber hover:shadow-xl transition-all duration-300 reveal delay-100 group">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div class="flex-1">
                                <span class="text-xs font-extrabold uppercase tracking-wider text-amber-700 block mb-1">Official Society Email</span>
                                <a target="_blank" href="mailto:societyhakwelfare@gmail.com" class="text-sm sm:text-base font-bold text-slate-900 font-mono hover:text-brand-blue transition-colors block break-all">
                                    societyhakwelfare@gmail.com
                                </a>
                                <p class="text-xs text-slate-500 mt-1">Official inbox monitored daily. Responses within 24 hours.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Official Web Portal Card -->
                    <div class="bg-white p-6 rounded-2xl border-2 border-slate-200/80 shadow-md hover:border-brand-blue hover:shadow-xl transition-all duration-300 reveal delay-200 group">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <i data-lucide="globe" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="text-xs font-extrabold uppercase tracking-wider text-brand-blue block mb-1">Official Web Portal</span>
                                <span class="text-sm sm:text-base font-bold text-slate-900 font-mono block">
                                    www.hakwelfaresociety.org
                                </span>
                                <p class="text-xs text-slate-500 mt-1">Transparent impact reporting & project documentation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Instant UPI QR Code Card in Contact Section -->
                    <div onclick="openQrModal()" class="cursor-pointer bg-white p-5 rounded-2xl border-2 border-slate-200/80 shadow-md hover:border-brand-blue hover:shadow-xl transition-all duration-300 reveal delay-250 group">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:bg-brand-blue group-hover:text-white transition-all duration-300">
                                    <i data-lucide="qr-code" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <span class="text-xs font-extrabold uppercase tracking-wider text-brand-blue block mb-0.5">Quick UPI Support</span>
                                    <h4 class="text-sm font-bold text-slate-900 font-heading group-hover:text-brand-blue transition-colors">Scan NGO QR Code</h4>
                                    <p class="text-[11px] text-slate-500 font-mono">societyhakwelfare@upi</p>
                                </div>
                            </div>
                            <button type="button" class="px-3 py-1.5 rounded-lg bg-blue-50 group-hover:bg-brand-blue text-brand-blue group-hover:text-white text-xs font-bold transition-colors flex items-center gap-1.5">
                                <i data-lucide="scan" class="w-3.5 h-3.5"></i> Show QR
                            </button>
                        </div>
                    </div>

                    <!-- 24/7 Emergency Blood & Medical Helpline -->
                    <div class="bg-gradient-to-r from-rose-900/90 to-slate-900 p-5 rounded-2xl border border-rose-500/30 text-white shadow-lg reveal delay-300">
                        <div class="flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-rose-600 text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-rose-600/30">
                                <i data-lucide="heart-pulse" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-rose-400 animate-ping"></span>
                                    <span class="text-xs font-extrabold uppercase tracking-wider text-rose-300">24/7 Live Blood Aid</span>
                                </div>
                                <p class="text-xs text-slate-200 mt-0.5">"Rakto Bandhu" emergency helpline for Thalassemia and accident patients.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right: Interactive Glassmorphic Inquiry Form (7 Cols) -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-10 border-2 border-slate-200/80 shadow-2xl reveal flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 mb-6 border-b border-slate-100">
                            <div>
                                <h3 class="text-xl sm:text-2xl font-black text-slate-900 font-heading">Send Us a Direct Message</h3>
                                <p class="text-xs text-slate-500 mt-0.5">Fill in the details below and our society coordinator will get back to you promptly.</p>
                            </div>
                            <span class="hidden sm:inline-flex px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-100">
                                Quick Response
                            </span>
                        </div>

                        <form id="contact-form" onsubmit="event.preventDefault(); handleContactSubmit();" class="space-y-4">
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="contact-name">Your Full Name *</label>
                                    <input type="text" id="contact-name" required placeholder="e.g. Rahul Sen / Anita Sharma" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="contact-phone">Phone / WhatsApp Number *</label>
                                    <input type="tel" id="contact-phone" required placeholder="+91 98765 43210" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="contact-email">Email Address *</label>
                                    <input type="email" id="contact-email" required placeholder="name@domain.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="contact-type">Purpose of Contact *</label>
                                    <select id="contact-type" required class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all">
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="CSR Corporate Partnership">Corporate CSR Partnership</option>
                                        <option value="Student Education Sponsorship">Student / Child Sponsorship</option>
                                        <option value="Blood Donation & Medical Support">Blood Donation / Emergency Medical</option>
                                        <option value="80G Tax Exemption Receipt">80G Tax Exemption Receipt</option>
                                        <option value="Volunteer With Us">Volunteer With Us</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="contact-message">Your Message or Proposal *</label>
                                <textarea id="contact-message" required rows="4" placeholder="How can we assist you or collaborate with you? Please share your thoughts or requirements..." class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all"></textarea>
                            </div>

                            <div class="pt-2">
                                <button type="submit" id="contact-submit-btn" class="w-full py-4 rounded-xl bg-gradient-to-r from-brand-blue via-brand-navy to-brand-forest hover:from-blue-700 hover:to-emerald-700 text-white font-black text-xs uppercase tracking-wider transition-all duration-300 shadow-xl shadow-blue-500/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                                    <i data-lucide="send" class="w-4 h-4"></i> Send Message to Society Coordinator
                                </button>
                            </div>

                            <!-- Success Toast Container (Hidden by default) -->
                            <div id="contact-success" class="hidden p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs flex items-center gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600 flex-shrink-0"></i>
                                <div>
                                    <strong class="block text-emerald-950 font-bold">Thank You! Your message has been prepared.</strong>
                                    <span>Opening your email client to dispatch to <strong class="underline">societyhakwelfare@gmail.com</strong>.</span>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="pt-4 mt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="lock" class="w-3.5 h-3.5 text-emerald-600"></i> Your details are 100% confidential
                        </span>
                        <span class="font-mono text-[11px] text-slate-400">80G Reg: AADAB4154EF20241</span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================== -->
    <!-- QR CODE POPUP MODAL -->
    <!-- ========================================================== -->
    <div id="qr-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-slate-950/80 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300" onclick="if(event.target === this) closeQrModal()">
        <div id="qr-modal-content" class="relative w-full max-w-md bg-white rounded-3xl overflow-hidden shadow-2xl border border-slate-200 transform scale-95 transition-all duration-300">
            
            <!-- Modal Header with gradient -->
            <div class="bg-gradient-to-r from-brand-navy via-slate-900 to-brand-forest p-5 text-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-amber text-slate-950 flex items-center justify-center font-bold flex-shrink-0">
                        <i data-lucide="qr-code" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold font-heading">Official UPI QR Code</h3>
                        <span class="text-[11px] text-emerald-300 block font-medium">H.A.K. Welfare Society · Regd. NGO</span>
                    </div>
                </div>
                <button onclick="closeQrModal()" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none" aria-label="Close QR Modal">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 text-center">
                <!-- Verified NGO Badge -->
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-bold mb-4">
                    <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i> Verified 80G & 12A Certified Account
                </div>

                <!-- QR Code Box -->
                <div class="relative mx-auto w-60 h-60 p-3 rounded-2xl bg-white border-2 border-dashed border-slate-300 shadow-inner flex items-center justify-center mb-4 group">
                    <img src="{{ asset('assets/media/images/qr-code.png') }}" 
                         alt="H.A.K. Welfare Society UPI QR Code" 
                         class="w-full h-full object-contain rounded-lg shadow-sm"
                         loading="lazy">
                </div>

                <p class="text-xs text-slate-500 font-semibold mb-3">Scan using GPay, PhonePe, Paytm, BHIM, or any UPI App</p>

                <!-- UPI ID Details Box with Copy -->
                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between gap-2 mb-4">
                    <div class="text-left">
                        <span class="text-[10px] uppercase font-extrabold tracking-wider text-slate-400 block">Official UPI ID</span>
                        <strong class="text-xs sm:text-sm font-mono text-slate-900 font-bold block">societyhakwelfare@upi</strong>
                    </div>
                    <button onclick="copyToClipboard('societyhakwelfare@upi', this)" class="px-3.5 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-xs transition-colors flex items-center gap-1.5 shadow-sm flex-shrink-0">
                        <i data-lucide="copy" class="w-3.5 h-3.5"></i> Copy
                    </button>
                </div>

                <!-- Accepted Payment Apps row -->
                <div class="flex items-center justify-center gap-3 pt-3 border-t border-slate-100 text-[11px] font-bold text-slate-500">
                    <span class="px-2 py-0.5 rounded bg-slate-100">GPay</span>
                    <span class="px-2 py-0.5 rounded bg-slate-100">PhonePe</span>
                    <span class="px-2 py-0.5 rounded bg-slate-100">Paytm</span>
                    <span class="px-2 py-0.5 rounded bg-slate-100">BHIM</span>
                    <span class="px-2 py-0.5 rounded bg-slate-100">Any UPI</span>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="bg-slate-50 p-4 border-t border-slate-100 flex items-center justify-between text-xs">
                <span class="text-slate-500 flex items-center gap-1">
                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-600"></i> Tax Exemption under 80G
                </span>
                <button onclick="closeQrModal()" class="px-4 py-1.5 rounded-lg bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold transition-colors">
                    Close
                </button>
            </div>

        </div>
    </div>
@endsection
