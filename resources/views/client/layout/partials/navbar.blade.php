<!-- 1. TOP OFFICIAL COMPLIANCE RIBBON -->
<div
    class="bg-gradient-to-r from-brand-midnight via-brand-navy to-slate-900 text-white text-xs py-1.5 sm:py-2 px-3 sm:px-4 border-b border-white/10 relative z-50">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-1.5 sm:gap-2">
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 sm:gap-3 text-center sm:text-left">
            <span
                class="inline-flex items-center gap-1.5 bg-emerald-500/20 text-emerald-300 font-semibold px-2 py-0.5 rounded-full border border-emerald-400/30 text-[10px] sm:text-[11px]">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 pulse-badge"></span> Govt. Registered NGO (Estd. 2015)
            </span>
            <span class="text-slate-300 font-mono text-[10px] sm:text-[11px]">WB Regd: <strong class="text-white">S0241093</strong></span>
            <span class="hidden sm:inline text-slate-400">|</span>
            <span class="hidden sm:inline text-slate-300 font-mono text-[11px]">80G & 12A URN: <strong class="text-emerald-300">AADAB4154EF20241</strong></span>
            <span class="hidden md:inline-flex items-center gap-1 text-brand-amber font-semibold text-[11px]">
                <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> 50% Tax Exemption
            </span>
        </div>

        <div class="hidden sm:flex items-center gap-3 md:gap-4 text-slate-300 text-xs">
            <a target="_blank" href="mailto:societyhakwelfare@gmail.com"
                class="flex items-center gap-1.5 hover:text-brand-amber transition-colors text-[11px] sm:text-xs">
                <i data-lucide="mail" class="w-3.5 h-3.5 text-brand-amber"></i> societyhakwelfare@gmail.com
            </a>
            <span class="text-slate-600">|</span>
            <a href="#contact" class="flex items-center gap-1 hover:text-brand-amber transition-colors text-[11px] sm:text-xs">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-400"></i> Basudevpur, WB
            </a>
        </div>
    </div>
</div>

<!-- 2. MAIN FLOATING NAVBAR -->
<header class="sticky top-0 z-40 glass-header shadow-sm transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">

            <!-- Brand Identity -->
            <a href="#" class="flex items-center gap-2.5 sm:gap-3.5 group min-w-0">
                <div
                    class="h-10 w-10 sm:h-12 sm:w-12 group-hover:scale-105 transition-all duration-300 flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/media/images/logo.png') }}" alt="H.A.K. Logo" class="h-full w-full object-contain"
                        onerror="this.outerHTML='<span class=\'text-brand-blue font-black text-xl sm:text-2xl font-heading\'>H</span>'">
                </div>
                <div class="min-w-0">
                    <span
                        class="block font-heading font-black text-base sm:text-2xl text-slate-900 tracking-tight leading-none group-hover:text-brand-blue transition-colors truncate">
                        H.A.K. <span class="text-brand-forest">Welfare Society</span>
                    </span>
                    <span
                        class="block text-[9px] sm:text-[11px] font-bold text-slate-500 tracking-wider uppercase mt-0.5 sm:mt-1 truncate">
                        Basudevpur Human Alliance's Kultural
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (Clean & Prioritized) -->
            <nav class="hidden xl:flex items-center space-x-7">
                <a href="#who-we-are"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">About
                    Us</a>
                <a href="#what-we-do"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">Projects</a>
                <a href="#our-impact"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">Impact</a>
                <a href="#our-reach"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">Where
                    We Work</a>
                <a href="#csr"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">CSR</a>
                <a href="#contact"
                    class="text-slate-700 hover:text-brand-blue font-bold text-sm tracking-tight transition-colors py-2 border-b-2 border-transparent hover:border-brand-blue">Contact</a>
            </nav>

            <!-- Header Actions -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="#donate-calc"
                    class="bg-gradient-to-r from-brand-amber via-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black px-6 py-2.5 rounded-full text-sm shadow-md shadow-amber-500/25 hover:shadow-amber-500/40 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                    <i data-lucide="heart" class="w-4 h-4 fill-current text-slate-950"></i>
                    Donate
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="xl:hidden flex items-center">
                <button id="mobile-menu-btn"
                    class="p-2.5 rounded-2xl bg-slate-100 text-slate-800 hover:text-brand-blue hover:bg-slate-200 transition-colors focus:outline-none"
                    aria-label="Toggle navigation">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu"
        class="hidden xl:hidden bg-white/98 backdrop-blur-xl border-b border-slate-200 shadow-2xl transition-all">
        <div class="px-4 pt-3 pb-6 space-y-1">
            <a href="#who-we-are"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="users" class="w-4 h-4 text-brand-blue"></i> About Us
            </a>
            <a href="#what-we-do"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="package" class="w-4 h-4 text-brand-forest"></i> Our Ongoing Projects
            </a>
            <a href="#our-impact"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="bar-chart-3" class="w-4 h-4 text-indigo-600"></i> Our Impact
            </a>
            <a href="#our-reach"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="map-pin" class="w-4 h-4 text-emerald-600"></i> Where We Work
            </a>
            <a href="#csr"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="briefcase" class="w-4 h-4 text-purple-600"></i> CSR Partnership
            </a>
            <a href="#contact"
                class="mobile-nav-link flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-800 hover:bg-slate-100 font-medium text-sm">
                <i data-lucide="phone-call" class="w-4 h-4 text-teal-600"></i> Contact Us
            </a>
            <div class="pt-3">
                <a href="#donate-calc"
                    class="mobile-nav-link flex items-center justify-center gap-2 w-full py-3 rounded-xl bg-brand-amber text-slate-950 font-black text-sm shadow-md">
                    <i data-lucide="heart" class="w-4 h-4 fill-current"></i> Donate Directly
                </a>
            </div>
        </div>
    </div>
</header>
