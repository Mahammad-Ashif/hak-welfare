<script>
    // 1. Initialize Lucide Icons
    lucide.createIcons();

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // 3. Hero Carousel Auto-slider Logic
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('#hero-dots button');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.className = "w-10 h-2 rounded-full bg-brand-amber transition-all duration-300";
            } else {
                dot.className =
                    "w-2.5 h-2 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300";
            }
        });
        currentSlide = index;
    }

    function nextSlide() {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function prevSlide() {
        let prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    function goToSlide(index) {
        showSlide(index);
        resetAutoSlide();
    }

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 5500);
    }

    function resetAutoSlide() {
        clearInterval(slideInterval);
        startAutoSlide();
    }

    startAutoSlide();

    // 4. Scroll Reveal Observer
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -40px 0px"
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // 5. Smooth Numeric Counter Animation (Ease-Out)
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                const duration = 1800; // ms
                const startTime = performance.now();

                const updateCounter = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    // Ease-out cubic formula
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    const currentVal = Math.floor(easeOut * target);

                    counter.innerText = currentVal.toLocaleString('en-IN');

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target.toLocaleString('en-IN');
                    }
                };

                requestAnimationFrame(updateCounter);
                observer.unobserve(counter);
            }
        });
    }, {
        threshold: 0.15
    });

    counters.forEach(counter => counterObserver.observe(counter));

    // 6. Clipboard Copy Function with Visual Feedback
    function copyToClipboard(text, btnElement) {
        navigator.clipboard.writeText(text).then(() => {
            const originalHtml = btnElement.innerHTML;
            btnElement.innerHTML = '<i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>';
            lucide.createIcons();
            setTimeout(() => {
                btnElement.innerHTML = originalHtml;
                lucide.createIcons();
            }, 2000);
        }).catch(err => {
            console.error('Could not copy text: ', err);
        });
    }

    // 7. Interactive Contact Form Submission Handler
    function handleContactSubmit() {
        const name = document.getElementById('contact-name').value.trim();
        const phone = document.getElementById('contact-phone').value.trim();
        const email = document.getElementById('contact-email').value.trim();
        const type = document.getElementById('contact-type').value;
        const message = document.getElementById('contact-message').value.trim();

        const successBox = document.getElementById('contact-success');
        if (successBox) {
            successBox.classList.remove('hidden');
        }

        const mailtoSubject = encodeURIComponent(`[${type}] Inquiry from ${name}`);
        const mailtoBody = encodeURIComponent(
            `Full Name: ${name}\n` +
            `Phone/WhatsApp: ${phone}\n` +
            `Email: ${email}\n` +
            `Purpose: ${type}\n\n` +
            `Message / Details:\n${message}\n\n` +
            `-----------------------------------------\n` +
            `Submitted via H.A.K. Welfare Society Portal`
        );

        setTimeout(() => {
            window.location.href =
                `mailto:societyhakwelfare@gmail.com?subject=${mailtoSubject}&body=${mailtoBody}`;
        }, 600);
    }

    // 8. Sticky "Back to Top" Scroll Detection and Smooth Scroll
    const backToTopBtn = document.getElementById('back-to-top-btn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 350) {
            backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-6');
            backToTopBtn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
        } else {
            backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-6');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // 9. QR Code Popup Modal Controller
    function openQrModal() {
        const modal = document.getElementById('qr-modal');
        const modalContent = document.getElementById('qr-modal-content');
        if (modal) {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
            if (modalContent) {
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }
            document.body.style.overflow = 'hidden';
            if (window.lucide) {
                lucide.createIcons();
            }
        }
    }

    function closeQrModal() {
        const modal = document.getElementById('qr-modal');
        const modalContent = document.getElementById('qr-modal-content');
        if (modal) {
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            modal.classList.add('opacity-0', 'pointer-events-none');
            if (modalContent) {
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
            }
            document.body.style.overflow = '';
        }
    }

    // Close QR modal on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeQrModal();
        }
    });
</script>
