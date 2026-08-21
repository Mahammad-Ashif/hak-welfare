<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
@include('client.layout.partials.header')

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-amber selection:text-slate-950">


    @include('client.layout.partials.navbar')
    @yield('content')


    <!-- 16. ULTRA-ATTRACTIVE FOOTER (Slide 21 Verbatim Details & Dynamic Layout) -->
    @include('client.layout.partials.footer')

    <!-- STICKY SCROLL TO TOP ARROW BUTTON -->
    <button id="back-to-top-btn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-50 p-3.5 rounded-2xl bg-gradient-to-tr from-brand-blue to-emerald-500 text-white shadow-2xl shadow-blue-900/40 border border-white/30 backdrop-blur-md opacity-0 pointer-events-none translate-y-6 transition-all duration-300 hover:scale-110 hover:shadow-blue-500/50 active:scale-95 group focus:outline-none"
        aria-label="Scroll back to top" title="Scroll to Top">
        <i data-lucide="arrow-up" class="w-5 h-5 group-hover:-translate-y-1 transition-transform"></i>
    </button>

    <!-- INTERACTIVE SCRIPTS -->
    @include('client.layout.partials._footer')
</body>

</html>
