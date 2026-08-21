<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>H.A.K. Welfare Society | Official NGO Portal | Govt. Regd. Estd. 2015</title>
    <meta name="description"
        content="Official website of Basudevpur Human Alliance's Kultural (H.A.K) Welfare Society. Registered under WB Societies Act XXVI of 1961 (Reg. No: S0241093). 80G & 12A Certified NGO.">
    <link rel="shortcut icon" href="{{ asset('assets/media/images/logo.png') }}" />
    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#080E1E',
                            midnight: '#030712',
                            blue: '#1e3a8a',
                            cobalt: '#2563eb',
                            sky: '#0284c7',
                            teal: '#0d9488',
                            emerald: '#059669',
                            forest: '#047857',
                            amber: '#f59e0b',
                            gold: '#fbbf24',
                            coral: '#e11d48',
                            slate: '#0f172a'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -15px rgba(0,0,0,0.07), 0 0 1px 1px rgba(0,0,0,0.05)',
                        'card-hover': '0 25px 50px -12px rgba(14, 165, 233, 0.15)',
                        'glow-gold': '0 0 35px -5px rgba(245, 158, 11, 0.4)',
                        'glow-emerald': '0 0 35px -5px rgba(5, 150, 105, 0.4)',
                        'glow-blue': '0 0 35px -5px rgba(37, 99, 235, 0.4)',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS Styles & High-End Animations -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>
