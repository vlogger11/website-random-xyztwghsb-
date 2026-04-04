<?php 
// THIS MUST BE LINE 1
include 'db.php'; 
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Earth One - Premium NA Plots in Igatpuri Hills | Earth Developers</title>
<meta name="description" content="Discover Earth One, a 50-acre gated community of premium NA plots in Igatpuri. Jointly developed by United Builders and Lalit Roongta Group. 360° virtual tours available.">
<meta name="keywords" content="Earth One Igatpuri, NA plots in Igatpuri, gated community Igatpuri, United Builders Nashik, Lalit Roongta Group projects, luxury plots near Nashik, 360 virtual tour plots">

<meta property="og:type" content="website">
<meta property="og:title" content="Earth One - Premium Gated Plots in Igatpuri Hills">
<meta property="og:description" content="Ready-to-build NA plots overlooking Darna backwaters. Explore the 360° tour now.">
<meta property="og:image" content="https://earthdevelopers.in/Gallery/MainGate.jpg">
<meta property="og:url" content="https://earthdevelopers.in">

<meta name="google-site-verification" content="JJbQkneRmWMrYVsdPQK0_AdO6NQ5miyeXx-rYEr3BrE" />

<?php
// Get the latest news title to show in Google Search
$seo_result = $conn->query("SELECT title FROM news_articles ORDER BY id DESC LIMIT 1");
$seo_row = $seo_result->fetch_assoc();
$latest_headline = $seo_row['title'] ?? "Premium NA Plots in Igatpuri";
?>

<title>Earth One | <?php echo $latest_headline; ?></title>
<meta name="description" content="Stay updated with Earth One. Latest News: <?php echo $latest_headline; ?>. Explore luxury gated communities in Igatpuri.">


<!-- Add these after your OG tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Earth One — Premium NA Plots in Igatpuri Hills">
<meta name="twitter:description" content="50-acre premium gated community in Igatpuri. Sahyadri views, Darna Backwaters, world-class club.">
<meta name="twitter:image" content="https://earthdevelopers.in/Gallery/MainGate.jpg">

<!-- PWA -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Earth One">
  <meta name="application-name" content="Earth One">
  <meta name="theme-color" content="#ffffff">

<!-- Add this after meta robots -->
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://earthdevelopers.in">

<!-- Location -->
<meta name="geo.region" content="IN-MH">
<meta name="geo.placename" content="Igatpuri, Maharashtra">
<meta name="geo.position" content="19.729840824218748;73.67108292812397">
<meta name="ICBM" content="19.729840824218748, 73.67108292812397">

    <!--<link rel="icon" type="image/jpeg" href="../Gallery/eologo.jpg" sizes="any">-->
    <!--<link rel="icon" type="image/png" href="../Gallery/favicon.png" sizes="any">-->
    <!--<link rel="shortcut icon" href="../Gallery/favicon.png" type="image/x-icon">-->
    
<!-- Favicon -->
<link rel="icon" type="image/png" href="/favicon_io/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon_io/favicon.svg" />
<link rel="shortcut icon" href="/favicon_io/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png" />
<link rel="manifest" href="/favicon_io/site.webmanifest" />

<!-- These two files must be in your ROOT folder -->
 <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192" />
<link rel="icon" type="image/png" href="/android-chrome-512x512.png" sizes="512x512" />


   <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://earthdevelopers.in/#organization",
      "name": "Earth One",
      "url": "https://earthdevelopers.in",
      "logo": {
        "@type": "ImageObject",
        "url": "https://earthdevelopers.in/Gallery/Earth%20One%20HD%20Logo.png"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-77758-77756",
        "contactType": "sales",
        "areaServed": "IN",
        "availableLanguage": ["English", "Hindi"]
      },
      "sameAs": ["https://wa.me/919684004962"]
    },
    {
      "@type": "RealEstateListing",
      "@id": "https://earthdevelopers.in/#project",
      "name": "Earth One - Premium Gated Plots in Igatpuri Hills",
      "description": "50-acre premium gated community of NA plots flanked by the Sahyadri mountains and overlooking the Darna Backwaters in Igatpuri, Maharashtra.",
      "url": "https://earthdevelopers.in",
      "image": "https://earthdevelopers.in/Gallery/MainGate.jpg",
      "offers": {
        "@type": "Offer",
        "name": "Ready to Build NA Plots",
        "availability": "https://schema.org/InStock",
        "areaServed": "Igatpuri, Maharashtra, India"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Igatpuri",
        "addressRegion": "Maharashtra",
        "addressCountry": "IN"
      },
      "amenityFeature": [
        {"@type": "LocationFeatureSpecification", "name": "Tennis Court", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Gym", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Clubhouse", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Gated Community", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Darna Backwater View", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "360 Degree Virtual Tour", "value": true}
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://earthdevelopers.in/#website",
      "url": "https://earthdevelopers.in",
      "name": "Earth One by Earth Developers",
      "publisher": {
        "@id": "https://earthdevelopers.in/#organization"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://earthdevelopers.in"},
        {"@type": "ListItem", "position": 2, "name": "About Us", "item": "https://earthdevelopers.in/earthone/about.html"},
        {"@type": "ListItem", "position": 3, "name": "Project Overview", "item": "https://earthdevelopers.in/earthone/overview.html"},
        {"@type": "ListItem", "position": 4, "name": "Amenities", "item": "https://earthdevelopers.in/earthone/Amenities.html"},
        {"@type": "ListItem", "position": 5, "name": "Gallery", "item": "https://earthdevelopers.in/Gallery/media-gallery.html"},
        {"@type": "ListItem", "position": 6, "name": "Contact Us", "item": "https://earthdevelopers.in/earthone/contact.html"}
      ]
    }
  ]
}
</script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a3c34', // Deep Forest Green
                        earth: '#8b5e34',   // Earthy Brown
                        gold: '#c5a059',    // Premium Gold/Bronze
                        cream: '#fdfbf7',   // Background Cream
                        dark: '#0f241f',    // Near Black Green
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'serif'],
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    keyframes: {
                        letterSpacing: {
                            '0%': { letterSpacing: '0.5em', opacity: '0', filter: 'blur(10px)' },
                            '100%': { letterSpacing: 'normal', opacity: '1', filter: 'blur(0)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        },
                        pulseCustom: {
                            '0%, 100%': { transform: 'scale(1)', boxShadow: '0 0 0 0 rgba(197, 160, 89, 0.7)' },
                            '50%': { transform: 'scale(1.05)', boxShadow: '0 0 0 15px rgba(197, 160, 89, 0)' },
                        }
                    },
                    animation: {
                        'letter-focus': 'letterSpacing 1.5s cubic-bezier(0.215, 0.610, 0.355, 1.000) forwards',
                        'pulse-premium': 'pulseCustom 2s infinite ease-in-out',
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #fdfbf7; color: #2c2c2c; overflow-x: hidden; }

        /* Animation Classes */
        .reveal { opacity: 0; transform: translateY(20px); transition: all 1s cubic-bezier(0.2, 0.8, 0.2, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }

        .header-glass { backdrop-filter: blur(10px); background: rgba(26, 60, 52, 0.9); }
        .header-scrolled { background: #ffffff !important; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }

        .btn-earth {
            position: relative; overflow: hidden;
            transition: all 0.5s ease;
            background: linear-gradient(45deg, #8b5e34, #c5a059);
        }
        .btn-earth::before {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: 0.5s;
        }
        .btn-earth:hover::before { left: 100%; }
        .btn-earth:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(139, 94, 52, 0.3); }

        .floating-action {
            animation: bounce 3s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .hero-gradient {
            background: linear-gradient(to bottom, rgba(15, 36, 31, 0.4), rgba(15, 36, 31, 0.9));
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #1a3c34; border-radius: 10px; }

        @keyframes shine {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        .animate-shine {
            background: linear-gradient(to right, #c5a059 20%, #FFFFFF 50%, #c5a059 80%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            display: block;
            width: 100%;
            margin: 0 auto;
            padding: 0; 
            animation: shine 5s linear infinite;
        }

        /* Enhanced Butterfly Animation */
        .butterfly-container {
            position: absolute;
            width: 45px; height: 45px;
            z-index: 50;
            pointer-events: none;
            opacity: 1;
            animation: butterfly-path 15s cubic-bezier(0.45, 0, 0.55, 1) infinite;
            filter: drop-shadow(0 0 12px rgba(255, 140, 0, 0.8));
        }
        .butterfly { width: 100%; height: 100%; position: relative; transform-style: preserve-3d; transform: rotateX(45deg); }
        .wing { position: absolute; width: 22px; height: 32px; background: linear-gradient(135deg, #ff8c00, #ffae00, #ff4500); border-radius: 50% 50% 25% 25%; border: 1px solid rgba(255, 255, 255, 0.3); box-shadow: inset 0 0 8px rgba(255, 255, 255, 0.4); }
        .wing-left { left: 0; transform-origin: right center; animation: flap-left 0.15s ease-in-out infinite alternate; }
        .wing-right { right: 0; transform-origin: left center; animation: flap-right 0.15s ease-in-out infinite alternate; }

        @keyframes flap-left { 0% { transform: rotateY(0deg); } 100% { transform: rotateY(75deg); } }
        @keyframes flap-right { 0% { transform: rotateY(0deg); } 100% { transform: rotateY(-75deg); } }

        .sparkle { position: absolute; width: 4px; height: 4px; background: #fff; border-radius: 50%; pointer-events: none; z-index: 49; box-shadow: 0 0 8px #ffae00; animation: sparkle-fall 1.5s linear forwards; }
        @keyframes sparkle-fall { 0% { transform: translateY(0) scale(1); opacity: 1; } 100% { transform: translateY(100px) scale(0); opacity: 0; } }

        @keyframes butterfly-path {
            0% { top: 90%; left: -10%; opacity: 1; transform: scale(0.5) rotate(45deg); }
            35% { top: 43%; left: 47%; transform: scale(0.9) rotate(5deg); } 
            65% { top: 43%; left: 47%; transform: scale(0.9) rotate(5deg); } 
            100% { top: -20%; left: 120%; opacity: 1; transform: scale(0.7) rotate(-30deg); }
        }

        @media (max-width: 768px) {
            #home { display: flex; align-items: center; justify-content: center; position: relative; }
            #home img.main-hero-img { height: 110% !important; width: auto; min-width: 100%; object-fit: cover; }
        }

        /* Modal Transitions */
        .modal-overlay {
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease;
        }
        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }
        .modal-content {
            transform: scale(0.9) translateY(30px);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .modal-overlay.active .modal-content {
            transform: scale(1) translateY(0);
        }

        /* Timed Popup Image Styling (A4 Aspect Ratio) */
        #timed-popup-modal .popup-image-container {
            width: auto;
            height: auto;
            max-width: 90vw;
            max-height: 85vh;
            aspect-ratio: 210 / 297; /* A4 Ratio */
            background-color: transparent;
            position: relative;
        }
    </style>
</head>
<body class="font-sans antialiased">

    <!-- TIMED POPUP MODAL (A4 Image) -->
    <div id="timed-popup-modal" class="modal-overlay fixed inset-0 z-[8000] bg-black/40 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="modal-content relative popup-image-container">
            <button id="close-timed-modal" class="absolute -top-10 right-0 text-white text-3xl hover:text-gold transition-colors">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <img src="Gallery/mickymehta.jpg" alt="Special Offer" class="w-full h-full object-contain shadow-2xl" onerror="this.src='https://via.placeholder.com/2100x2970?text=Special+Announcement'">
        </div>
    </div>

    <!-- FLOATING BUTTONS -->
    <div class="fixed bottom-6 left-6 z-[3000]">
    <a href="earthone/virtualtour/" target="_blank" rel="noopener noreferrer" class="bg-primary text-white px-6 py-4 rounded-lg flex items-center gap-3 shadow-2xl border-b-4 border-gold hover:bg-earth transition-all group floating-action">
        <i class="fa-solid fa-vr-cardboard text-xl group-hover:rotate-12 transition-transform"></i>
        <span class="text-[10px] md:text-xs font-bold uppercase tracking-widest whitespace-nowrap">Virtual Tour</span>
    </a>
</div>

    <div class="fixed bottom-8 right-8 z-[3000]">
    <a href="https://wa.me/919684004962" target="_blank" 
       class="bg-[#25D366] text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl hover:bg-[#20ba5a] hover:scale-110 transition-all duration-300 group ring-4 ring-white/10">
        <i class="fa-brands fa-whatsapp text-2xl md:text-3xl"></i>
        <!-- Tooltip for luxury feel -->
        <span class="absolute right-full mr-4 bg-[#1a3c34] text-white text-[10px] uppercase tracking-[2px] px-3 py-1 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
            Chat with us
        </span>
    </a>
</div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="fixed inset-0 z-[5000] bg-primary/95 backdrop-blur-xl translate-x-full transition-transform duration-500 flex flex-col p-8 lg:hidden overflow-y-auto">
    <div class="flex justify-between items-center mb-8">
        <button id="close-menu" class="text-white text-3xl"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <nav class="flex flex-col gap-8 text-center">
        <a href="#home" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Home</a>
        <a href="earthone/about.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">About Us</a>
        <a href="earthone/overview.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Project Overview</a>
        <a href="earthone/Amenities.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Amenities</a>
        <a href="earthone/igatpuri.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Igatpuri</a>
        <a href="Gallery/media-gallery.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Gallery</a>
        <a href="earthone/newsroom.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Newsroom</a>
        <a href="earthone/contact.html" class="mob-link text-white text-[15px] font-bold uppercase tracking-[2px] hover:brightness-125 transition-all">Contact Us</a>
    </nav>
</div>
    <!-- HEADER -->
    <header id="header" class="fixed top-0 left-0 w-full z-[4000] transition-all duration-500">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 flex justify-end items-center h-24 md:h-32 relative transition-all duration-500">
            <!-- Logo - Absolute Positioning -->
            <!-- Note: transition-opacity added to support smooth removal on mobile home screen -->
            <a href="#home" class="absolute top-4 left-6 md:left-12 z-[4001] transition-all duration-500">
                <img src="Gallery/Earth One HD Logo.png" alt="Earth One" id="logo" 
                     class="h-64 md:h-[400px] drop-shadow-2xl object-contain brightness-0 invert transition-all duration-500 max-md:opacity-0 max-md:pointer-events-none" 
                     onerror="this.src='https://via.placeholder.com/600x300?text=EARTH+ONE'">
            </a>

            <!-- Navigation and Header Actions -->
            <!-- FIX: Added relative z-[5000] to ensure navigation is always on top of the large logo bounding box -->
            <div class="flex items-center gap-3 md:gap-10 relative z-[5000]">
                <!-- Navigation Standard Size -->
                <nav class="hidden lg:flex items-center gap-10">
                    <a href="#home" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Home</a>
                    <a href="earthone/about.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">About Us</a>
                    <a href="earthone/overview.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Project Overview</a>
                    <a href="earthone/Amenities.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Amenities</a>
                    <a href="earthone/igatpuri.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Igatpuri</a>
                    <a href="Gallery/media-gallery.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Gallery</a>
                    <a href="earthone/newsroom.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Newsroom</a>
                    <a href="earthone/contact.html" class="nav-link text-white text-[11px] font-bold uppercase tracking-[2px] hover:text-gold transition-colors">Contact Us</a>
                    
                    <!-- HIGHLIGHTED HEADER ENQUIRY BUTTON (DESKTOP) -->
                    <button id="header-inquiry" class="px-6 py-2.5 bg-gold text-[10px] font-bold uppercase tracking-[2px] text-white hover:bg-earth transition-all rounded-sm shadow-lg border border-gold/30 animate-pulse-premium">
                        Enquire Now
                    </button>
                </nav>

                <!-- HIGHLIGHTED HEADER ENQUIRY BUTTON (MOBILE ONLY) -->
                <button id="header-inquiry-mob" class="lg:hidden px-4 py-2 bg-gold text-[10px] font-bold uppercase tracking-[1px] text-white hover:bg-earth transition-all rounded-sm shadow-lg animate-pulse-premium">
                    Enquire Now
                </button>

                <!-- MOBILE MENU TOGGLE -->
                <button id="open-menu" class="lg:hidden text-white text-2xl p-2"><i class="fa-solid fa-bars-staggered"></i></button>
            </div>
        </div>
    </header>


    <!-- HERO SECTION -->
    <section id="home" class="relative h-screen flex items-center  justify-center overflow-hidden bg-dark">
        <div id="butterfly-wrap" class="butterfly-container">
            <div class="butterfly">
                <div class="wing wing-left"></div>
                <div class="wing wing-right"></div>
            </div>
        </div>

        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 hero-gradient z-10"></div>
            <img src="Gallery/MainGate.jpg" alt="Earth One Main Gate" class="main-hero-img w-full h-full object-cover scale-110">
             <!-- <video autoplay muted loop playsinline class="main-hero-img w-full h-full object-cover scale-110">
    <source src="Gallery/marchEO.mp4" type="video/mp4">
</video> -->
        </div>

        <!-- NEW: EO LOGO ON MOBILE HOME SCREEN CENTERED -->
        <div class="absolute inset-0 flex items-center justify-center z-30 md:hidden pointer-events-none px-6 translate-y-[-3.5em]">
            <img src="Gallery/Earth One HD Logo.png" alt="Earth One Logo" class="w-full max-w-[280px] h-auto object-contain drop-shadow-2xl brightness-0 invert opacity-90" onerror="this.style.display='none'">
        </div>
        
        <div class="relative z-20 w-full h-full flex flex-col items-center justify-center text-center px-6">
            <div class="flex flex-col items-center justify-center gap-4 mt-8 opacity-0 animate-[fadeInUp_1.2s_1.5s_forwards]">
                <a href="#project" class="btn-earth w-64 py-4 text-white uppercase tracking-[3px] text-[11px] font-bold rounded-sm">
                    Explore Estate
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
<section id="about" class="py-24 md:py-40 bg-[#1a3c34] text-white overflow-hidden relative">
    <!-- Texture Overlay -->
    <div class="absolute inset-0 bg snapshot-url('https://www.transparenttextures.com/patterns/natural-paper.png')] opacity-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid lg:grid-cols-2 gap-16 md:gap-24 items-center">
            
            <!-- Left Side: Content -->
            <div class="space-y-10 reveal">
                <div>
                    <span class="text-[#c5a368] font-bold uppercase tracking-[5px] text-[10px] block mb-4">About Us</span>
                    <h2 class="text-3xl md:text-5xl font-serif leading-tight">
                        Earth One is a flagship development by Earth Developers.
                    </h2>
                </div>
                
                <p class="text-white/70 text-lg font-light leading-relaxed">
                    A strategic partnership between United Builders and Lalit Roongta Group.
                </p>

                <div class="pt-4">
                    <a href="earthone/about.html" 
                       class="inline-block px-10 py-4 border border-[#c5a368] bg-[#c5a368] text-white hover:bg-[#8b5e34] hover:border-[#8b5e34] transition-all duration-300 font-bold uppercase tracking-[3px] text-[11px] rounded-sm">
                        Know More <i class="fa-solid fa-chevron-right ml-2 text-[8px]"></i>
                    </a>
                </div>
            </div>

            <!-- Right Side: Earth One Logo & Partners Below -->
            <div class="relative reveal flex flex-col items-center" style="transition-delay: 0.3s;">
                <!-- Main Logo -->
                <div class="relative z-10 flex items-center justify-center p-0"> <!-- Removed padding completely -->
                    <img src="../Gallery/strategicpa.jpeg" alt="Earth One" 
                         class="w-full max-w-[450px] h-auto object-contain"> 
                </div>

                <!-- Strategic Partnership Logos (Positioned Below) -->
                <div class="w-full max-w-[500px] mt-0"> <!-- Removed top margin -->
                    <div class="flex items-center gap-4 mb-4"> <!-- Tightened margin below text -->
                        <div class="h-[1px] flex-grow bg-white/10"></div>
                        
                        <div class="h-[1px] flex-grow bg-white/10"></div>
                    </div>

                    <div class="flex flex-col gap-8">
    

    <!-- Bottom Row: Strategic Partner Logo (Centered) -->
    
    </div>
</div>
                </div>
                
                <!-- Decorative Border Frame -->
                <div class="absolute inset-0 border-[1px] border-white/5 -m-4 md:-m-8 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>
<!-- PROJECT OVERVIEW SECTION -->
<section id="project" class="py-24 md:py-40 bg-[#fdfbf7] relative overflow-hidden">
    <!-- TOP-RIGHT BROCHURE DOWNLOAD BUTTON -->
    <a href="Broucher/Earth One eBrochure.pdf" target="_blank" class="absolute top-6 right-6 md:top-12 md:right-12 px-6 py-3 bg-earth text-white hover:bg-gold transition-all duration-300 font-bold uppercase tracking-[2px] text-[10px] rounded-sm shadow-lg z-20 flex items-center gap-2">
        <i class="fa-solid fa-file-pdf"></i> EBrochure
    </a>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 md:gap-24 items-center">
            
            <!-- Left Side: Narrative Content -->
            <div class="space-y-10 reveal">
                <div>
                    <span class="text-[#8b5e34] font-bold uppercase tracking-[5px] text-[10px] block mb-6">The Project</span>
                    <h2 class="text-4xl md:text-5xl font-serif text-[#1a3c34]">
                        Escape,<br>To Be Captivated
                    </h2>
                </div>
                
                <div class="space-y-6">
                    <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed">
                        Flanked by the majestic Sahyadri mountains and overlooking the Darna Backwaters, 
                        <span class="font-semibold text-[#1a3c34]">Earth One</span> is a meticulously planned 
                        gated community amidst the scenic and breathtaking vistas of Igatpuri.
                    </p>
                    
                    <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed">
                        Whether you envision building your dream second home or investing in a prime piece of land, 
                        Earth One offers the perfect canvas to turn your vision into reality.
                    </p>
                </div>

                <div class="pt-4">
                    <div class="w-20 h-px bg-[#c5a368]"></div>
                </div>

                <div class="flex flex-wrap gap-4 pt-8"> 
                    <a href="earthone/overview.html" class="inline-flex items-center px-10 py-4 border border-[#8b5e34] text-[#8b5e34] hover:bg-[#8b5e34] hover:text-white transition-all duration-300 font-bold uppercase tracking-[3px] text-[11px] rounded-sm group"> 
                        Know More <i class="fa-solid fa-arrow-right ml-3 transition-transform group-hover:translate-x-2"></i> 
                    </a>
                </div>
            </div>

            <!-- Right Side: Big Rectangular Image -->
            <div class="relative reveal" style="transition-delay: 0.3s;">
    <!-- Container adjusted for a horizontal "Legal" aspect ratio (14:8.5) -->
    <div class="relative z-10 rounded-sm overflow-hidden shadow-2xl border-[12px] border-white">
        <!-- 
          Adjusted height to h-[220px] (mobile) and h-[340px] (desktop) 
          to match the wider proportions of a horizontal Legal sheet.
        -->
        <img src="../Gallery/overview1.jpg" alt="Earth One Landscape" 
             class="w-full h-[220px] md:h-[340px] object-cover hover:scale-105 transition-transform duration-700">
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#1a3c34]/20 to-transparent pointer-events-none"></div>
    </div>
    
    <!-- Decorative background element -->
    <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-[#c5a368]/5 -z-10 rounded-full blur-3xl"></div>
</div>
        </div>
    </div>
</section>

<!-- AMENITIES SECTION -->
<section id="amenities" class="py-24 md:py-40 bg-[#f8f5f0] border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20 reveal">
            <span class="text-[#8b5e34] font-bold uppercase tracking-[6px] text-[10px] mb-4 block">Amenities</span>
            <h2 class="text-4xl md:text-5xl font-serif text-[#1a3c34]">The Earth One Club</h2>
            <div class="w-20 h-1 bg-[#c5a368] mx-auto mt-6"></div>
        </div>
        <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed text-justify max-w-4xl mx-auto">
    Imagine a place where every day invites movement, wellness and joyful connections. The Earth One Club brings
    this to life - a world-class hub for sport, recreation and vibrant community living within our secure gated
    community.
</p>
<div class="mb-8"></div>
<br>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Indoor Amenities -->
            <div class="bg-white p-10 md:p-14 shadow-xl rounded-sm border-t-8 border-[#1a3c34] reveal flex flex-col h-full">
                <h3 class="text-3xl font-serif text-[#1a3c34] mb-8 flex items-center gap-4">
                    <i class="fa-solid fa-couch text-[#c5a368] text-2xl"></i> Indoor Amenities
                </h3>
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-dumbbell text-[#c5a368]/60 w-6"></i> Gym</div>
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-spa text-[#c5a368]/60 w-6"></i> Yoga and Meditation Zone </div>
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-book text-[#c5a368]/60 w-6"></i> Library and Business Center</div>
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-chess-board text-[#c5a368]/60 w-6"></i> Indoor Games Room</div>
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-puzzle-piece text-[#c5a368]/60 w-6"></i> Kid's Play Room</div>
                    <div class="flex items-center gap-3 text-gray-600 font-medium"><i class="fa-solid fa-gamepad text-[#c5a368]/60 w-6"></i> Hobby Room</div>
                </div>
            </div>

            <!-- Outdoor Amenities -->
            <div class="bg-white p-10 md:p-14 shadow-xl rounded-sm border-t-8 border-[#8b5e34] reveal flex flex-col h-full" style="transition-delay: 0.2s;">
                <h3 class="text-3xl font-serif text-[#1a3c34] mb-8 flex items-center gap-4">
                    <i class="fa-solid fa-tree text-[#c5a368] text-2xl"></i> Outdoor Amenities
                </h3>
                <div class="grid sm:grid-cols-2 gap-6 p-8 bg-white rounded-xl shadow-sm">
    <!-- Sports Facilities -->
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-baseball text-[#c5a368]/60 w-6"></i> 
        Tennis Court
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-table-tennis-paddle-ball text-[#c5a368]/60 w-6"></i> 
        Pickleball Court
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-basketball text-[#c5a368]/60 w-6"></i> 
        Basketball Court
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-baseball-bat-ball text-[#c5a368]/60 w-6"></i> 
        Cricket Turf
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-soccer-ball text-[#c5a368]/60 w-6"></i> 
        Football Field
    </div>

    <!-- Recreational Areas -->
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-tree text-[#c5a368]/60 w-6"></i> 
        The Park
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-child-reaching text-[#c5a368]/60 w-6"></i> 
        Kid's Play Park
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-person-cane text-[#c5a368]/60 w-6"></i> 
        Senior Citizens Park
    </div>

    <!-- Greenery & Landscaping -->
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-seedling text-[#c5a368]/60 w-6"></i> 
        Miyawaki Forest
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-leaf text-[#c5a368]/60 w-6"></i> 
        Herb Garden
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-apple-whole text-[#c5a368]/60 w-6"></i> 
        Fruit Orchard
    </div>
    <div class="flex items-center gap-3 text-gray-600 font-medium">
        <i class="fa-solid fa-couch text-[#c5a368]/60 w-6"></i> 
        Gazebo Seating
    </div>
</div>
            </div>
        </div>
    </div>
</section>
    <!-- IGATPURI SECTION -->
    <section id="igatpuri" class="py-24 md:py-40 px-6 bg-white relative overflow-hidden border-b border-[#8b5e34]/10">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Side: Title & Branding -->
            <div class="lg:col-span-5 reveal">
                <span class="text-[#8b5e34] font-bold uppercase tracking-[5px] text-[10px] block mb-6">The Destination</span>
                <h2 class="text-4xl md:text-6xl text-[#1a3c34] font-serif leading-tight mb-8">
                    Igatpuri: Where Every Day Is A Beautiful Memory
                </h2>
                <div class="w-24 h-1 bg-[#c5a368]"></div>
            </div>
            
            <!-- Right Side: Narrative & Highlights -->
            <div class="lg:col-span-7 space-y-12 reveal" style="transition-delay: 0.2s;">
                <div class="text-gray-600 text-lg md:text-xl font-light leading-relaxed">
                    <p>
                        Nestled in the heart of the Sahyadri mountain range, Igatpuri is a serene hill station and a hidden gem in Maharashtra. Blessed with soaring peaks, verdant valleys, carpets of greenery, cascading waterfalls, pristine lakes, picturesque landscapes and mist-covered hills, Igatpuri offers a serene retreat away from the chaos of urban life.
                    </p>
                </div>

                <!-- 6 Highlights Grid -->
                <div class="grid sm:grid-cols-2 gap-y-6 gap-x-12 pt-4">
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Scenic Beauty</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Tranquil Atmosphere</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Low Population Density</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Excellent Air Quality (AQI)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Biodiverse Environment</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a368] shrink-0"></div>
                        <p class="text-sm uppercase tracking-widest font-semibold text-[#1a3c34]">Tourist Hotspot</p>
                    </div>
                </div>

                <!-- NEW: Know More Button -->
                <div class="pt-8">
                    <a href="earthone/igatpuri.html" class="inline-flex items-center px-10 py-4 border border-[#8b5e34] text-[#8b5e34] hover:bg-[#8b5e34] hover:text-white transition-all duration-300 font-bold uppercase tracking-[3px] text-[11px] rounded-sm group">
                        Know More <i class="fa-solid fa-chevron-right ml-3 text-[8px] transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Subtle background decoration -->
    <div class="absolute right-0 bottom-0 opacity-[0.03] pointer-events-none translate-x-1/4 translate-y-1/4">
        <i class="fa-solid fa-mountain-sun text-[400px]"></i>
    </div>
</section>
    <!-- GALLERY -->
    <section id="renders" class="py-24 bg-cream overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="text-earth font-bold uppercase tracking-[6px] text-[10px] mb-4 block">Visual Journey</span>
                <h2 class="text-4xl md:text-6xl font-serif text-primary">The Canvas of Your Future</h2>
                <div class="w-20 h-1 bg-gold mx-auto mt-6"></div>
            </div>
            
            <div class="mb-10 group overflow-hidden bg-white p-4 border-2 border-earth/20 shadow-2xl reveal">
                <img src="https://earthdevelopers.in/Gallery/4-Master-Plan-Aerial-3.jpg" alt="Earth One Master Plan Layout" class="w-full h-auto hover:scale-105 transition-transform duration-[2s]" onerror="this.src='https://via.placeholder.com/1200x600?text=Project+Layout+Map'">
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.1s;">
                    <img src="https://earthdevelopers.in/Gallery/MainGate.jpg" alt="Earth One Main Gate" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.2s;">
                    <img src="https://earthdevelopers.in/Gallery/2-Master-Plan-Aerial-1.jpg" alt="Earth One Master Plan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.3s;">
                    <img src="https://earthdevelopers.in/Gallery/3-Master-Plan-Aerial-2.jpg" alt="Earth One Master Plan 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.4s;">
                    <img src="https://earthdevelopers.in/Gallery/4-Master-Plan-Aerial-3.jpg" alt="Earth One Master Plan 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.5s;">
                    <img src="https://earthdevelopers.in/Gallery/5-Roundabout-Plaza-Render.jpg" alt="Earth One Roundabout Plaza Render" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
                <div class="overflow-hidden shadow-xl reveal group aspect-video bg-white" style="transition-delay: 0.6s;">
                    <img src="https://earthdevelopers.in/Gallery/6-Club-Aerial.jpg" alt="Earth One Club" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                </div>
            </div>

            <div class="mt-16 text-center reveal">
                <a href="Gallery/media-gallery.html" class="inline-flex items-center gap-4 px-12 py-5 bg-primary text-white font-bold uppercase tracking-[4px] text-xs hover:bg-gold transition-all rounded-sm shadow-2xl group">
                    Explore Media 
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

<!-- Home Tab News -->
    <section id="newsroom" class="py-24 md:py-40 bg-[#1a3c34] relative overflow-hidden">
  <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: radial-gradient(circle, #c5a059 1px, transparent 1px); background-size: 32px 32px;"></div>
  
  <div class="max-w-7xl mx-auto px-6 relative z-10">
    <div class="text-center mb-16 reveal">
      <span class="text-[#c5a059] font-bold uppercase tracking-[6px] text-[10px] mb-4 block">In The Press</span>
      <h2 class="text-4xl md:text-6xl font-serif text-white leading-tight">Latest Updates</h2>
      <div class="w-20 h-1 bg-[#c5a059] mx-auto mt-6"></div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-8">

      <?php 
      include 'db.php'; 
      // This fetches all news from your database, newest first
      $result = $conn->query("SELECT * FROM news_articles ORDER BY id DESC");
      
      while($row = $result->fetch_assoc()): 
      ?>

      <a href="<?php echo $row['article_url']; ?>" 
         target="_blank" rel="noopener noreferrer"
         class="news-card group flex flex-col bg-white/5 border border-white/10 hover:border-[#c5a059]/60 rounded-sm overflow-hidden shadow-xl transition-all duration-500 hover:-translate-y-2">
        
        <div class="relative overflow-hidden aspect-video bg-[#0f241f]">
          <img src="<?php echo $row['image_url']; ?>" 
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
          
          <div class="absolute top-3 left-3">
            <span class="bg-[#c5a059] text-[#0f241f] text-[9px] font-black uppercase tracking-[2px] px-3 py-1 rounded-sm">
              <?php echo $row['source_name']; ?>
            </span>
          </div>
        </div>

        <div class="flex flex-col flex-grow p-3 sm:p-6 gap-2 sm:gap-4">
          <p class="text-white/40 text-[9px] uppercase tracking-[3px] font-bold">Press Release · Earth One</p>
          <h3 class="text-white font-serif text-xs sm:text-lg leading-snug group-hover:text-[#c5a059] transition-colors">
            <?php echo $row['title']; ?>
          </h3>
          <p class="text-white/50 text-sm font-light leading-relaxed flex-grow hidden sm:block">
            <?php echo $row['description']; ?>
          </p>
          <div class="flex items-center gap-2 text-[#c5a059] text-[10px] font-bold uppercase tracking-[2px] mt-2 group-hover:gap-4 transition-all">
            Read Article <i class="fa-solid fa-arrow-right text-[8px]"></i>
          </div>
        </div>
      </a>

      <?php endwhile; ?>

    </div><div class="mt-16 text-center reveal">
      <a href="earthone/newsroom.html" class="inline-flex items-center gap-4 px-12 py-5 border border-[#c5a059] text-[#c5a059] font-bold uppercase tracking-[4px] text-xs hover:bg-[#c5a059] hover:text-[#0f241f] transition-all rounded-sm shadow-xl group">
        View All News
        <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
      </a>
    </div>

  </div>
</section>
 
 
<!-- ══════════════════════════════════════════════════════════
     SECTION 2 — FAQ
     (Paste this BELOW the News section, ABOVE the footer)
════════════════════════════════════════════════════════════ -->
<section id="faq" class="py-24 md:py-40 bg-[#fdfbf7] relative overflow-hidden">
 
  <!-- Decorative large BG letter -->
  <div class="absolute right-0 top-0 text-[#1a3c34]/[0.03] pointer-events-none select-none leading-none font-serif" style="font-size: clamp(180px, 25vw, 360px);">FAQ</div>
 
  <div class="max-w-5xl mx-auto px-6 relative z-10">
 
    <!-- Header -->
    <div class="text-center mb-16 reveal">
      <span class="text-[#8b5e34] font-bold uppercase tracking-[6px] text-[10px] mb-4 block">Got Questions?</span>
      <h2 class="text-4xl md:text-6xl font-serif text-[#1a3c34] leading-tight">Frequently Asked Questions</h2>
      <div class="w-20 h-1 bg-[#c5a059] mx-auto mt-6"></div>
      <p class="text-gray-500 text-sm mt-6 max-w-xl mx-auto font-light leading-relaxed">
        Everything you need to know about NA plots, investing in Igatpuri, 
        and what makes Earth One the right choice for your next investment.
      </p>
    </div>
 
    <!-- FAQ Accordion -->
    <div class="space-y-2 md:space-y-4 reveal" id="faq-accordion">
 
      <!-- FAQ Item Template — repeated below -->
      <!-- Q1 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="0">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            What is an NA Plot? Why should I buy one?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] group-hover:text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            NA stands for <strong>Non-Agricultural</strong>. An NA order from the Maharashtra government 
            legally converts agricultural land into residential or commercial use. Buying an NA plot means 
            you can immediately apply for building permissions and construct your dream home without 
            lengthy conversion delays. NA plots offer clear legal titles, higher ROI, and are far safer 
            than purchasing agricultural land with the intent to convert later.
          </p>
        </div>
      </div>
 
      <!-- Q2 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="1">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Are the plots at Earth One fully NA-approved?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Yes. All plots at Earth One are <strong>fully NA-approved</strong> and ready to build. 
            The project has all required government clearances, MahaRERA registration, and clear, 
            encumbrance-free titles. You can begin the construction approval process immediately 
            upon purchase — no waiting, no uncertainty.
          </p>
        </div>
      </div>
 
      <!-- Q3 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="2">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Why is Igatpuri a good location to invest in real estate?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Igatpuri offers a rare combination of <strong>scenic natural beauty, improving infrastructure, 
            low pollution, and rising real-estate demand</strong>. It sits along the Mumbai–Nashik Expressway 
            (approx. 2.5 hrs from Mumbai), making it ideal for a second home. The region has seen 
            consistent 15–22% annual appreciation in plot values, driven by tourism, wellness retreats, 
            and limited supply of quality gated-community land.
          </p>
        </div>
      </div>
 
      <!-- Q4 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="3">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            How far is Earth One from Mumbai and Nashik?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Earth One is located in the heart of Igatpuri, which is approximately 
            <strong>130 km from Mumbai (~2.5 hrs)</strong> via the Mumbai–Nashik Expressway (NH-3) 
            and <strong>50 km from Nashik (~1 hr)</strong>. Igatpuri also has its own railway station 
            on the Central Railway line, making it well-connected by both road and rail.
          </p>
        </div>
      </div>
 
      <!-- Q5 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="4">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            What plot sizes are available at Earth One?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Earth One offers a range of thoughtfully sized plots to suit different needs — from 
            compact weekend-home plots to larger estate-sized parcels. Please 
            <a href="earthone/contact.html" class="text-[#8b5e34] underline font-medium hover:text-[#c5a059]">contact our sales team</a> 
            or <a href="earthone/overview.html" class="text-[#8b5e34] underline font-medium hover:text-[#c5a059]">view the project overview</a> 
            for the latest availability and pricing by plot size.
          </p>
        </div>
      </div>
 
      <!-- Q6 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="5">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Can I get a home loan for purchasing a plot at Earth One?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Yes. Because Earth One plots are <strong>fully NA-approved with clear titles and MahaRERA 
            registration</strong>, they are eligible for plot loans from leading banks and NBFCs including 
            SBI, HDFC, ICICI Bank, and Bajaj Finserv. Our sales team can assist you with the 
            documentation process and connect you with our preferred lending partners for seamless financing.
          </p>
        </div>
      </div>
 
      <!-- Q7 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="6">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            What amenities does Earth One offer within the gated community?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            The Earth One Club is a world-class amenity hub featuring a <strong>fully equipped gym, 
            tennis court, pickleball court, basketball court, cricket turf, football field, Miyawaki 
            forest, herb garden, fruit orchard, yoga & meditation zone, library, indoor games room, 
            kids' play areas, senior citizens' park</strong>, and much more — all within the secure 
            gated perimeter.
          </p>
        </div>
      </div>
 
      <!-- Q8 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="7">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Is there a virtual tour available before visiting in person?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Absolutely. Earth One offers an immersive <strong>360° virtual tour</strong> of the entire 
            project — from the main gate and master plan to individual plot zones and club renders. 
            You can explore the community from the comfort of your home before scheduling a site visit. 
            <a href="earthone/virtualtour/" target="_blank" class="text-[#8b5e34] underline font-medium hover:text-[#c5a059]">Launch the Virtual Tour →</a>
          </p>
        </div>
      </div>
 
      <!-- Q9 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="8">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Who are the developers behind Earth One?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Earth One is a flagship project by <strong>Earth Developers</strong> — a strategic 
            partnership between <strong>United Builders</strong> and <strong>Lalit Roongta Group</strong>. 
            Together, they bring decades of combined experience in premium real estate development across 
            Maharashtra, ensuring the highest standards of quality, legal compliance, and customer trust.
          </p>
        </div>
      </div>
 
      <!-- Q10 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="9">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            Can NRIs purchase plots at Earth One?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Yes. NRIs (Non-Resident Indians) and PIOs (Persons of Indian Origin) are fully eligible 
            to purchase NA residential plots in India under <strong>FEMA regulations</strong>. 
            Earth One's sales team provides dedicated NRI assistance, including documentation guidance, 
            power-of-attorney support, and remote transaction management to make the process seamless 
            regardless of where you reside.
          </p>
        </div>
      </div>
 
      <!-- Q11 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="10">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            What is the climate like in Igatpuri — is it suitable for year-round living?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            Igatpuri has one of Maharashtra's most <strong>pleasant and moderate climates</strong>. 
            Summers are cool (22–32°C), monsoons are spectacular with lush greenery and waterfalls, 
            and winters are refreshingly cold (8–20°C). The AQI is consistently among the lowest in 
            the state, making it excellent for families, retirees, and wellness-focused residents. 
            Many residents enjoy Igatpuri year-round, not just on weekends.
          </p>
        </div>
      </div>
 
      <!-- Q12 -->
      <div class="faq-item border border-[#1a3c34]/10 rounded-sm overflow-hidden shadow-sm" data-index="11">
        <button class="faq-trigger w-full flex items-center justify-between px-4 py-4 md:px-7 md:py-6 bg-white hover:bg-[#1a3c34] group transition-colors duration-300 text-left">
          <span class="text-[#1a3c34] group-hover:text-white font-semibold text-sm md:text-base uppercase tracking-wide transition-colors">
            How do I book a site visit or get more information?
          </span>
          <i class="faq-icon fa-solid fa-plus text-[#c5a059] transition-transform duration-300 shrink-0 ml-4"></i>
        </button>
        <div class="faq-answer hidden px-4 py-4 md:px-7 md:py-6 bg-[#fdfbf7] border-t border-[#1a3c34]/10">
          <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
            You can reach our sales team directly at <strong>+91 77758 77756</strong>, 
            <a href="https://wa.me/919684004962" target="_blank" class="text-[#8b5e34] underline font-medium hover:text-[#c5a059]">WhatsApp us</a>, 
            or fill out the <a href="earthone/contact.html" class="text-[#8b5e34] underline font-medium hover:text-[#c5a059]">inquiry form</a>. 
            We offer complimentary guided site visits to Earth One with prior appointment. 
            Our team will be happy to walk you through the project, plots, pricing, and legal documentation.
          </p>
        </div>
      </div>
 
    </div><!-- /faq-accordion -->
 
    <!-- Schema.org FAQ structured data — injected via JS below -->
 
  </div>
</section>
 
<!-- FAQ Schema (SEO) -->
<script type="application/ld+json" id="faq-schema">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is an NA Plot? Why should I buy one?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "NA stands for Non-Agricultural. An NA order from the Maharashtra government legally converts agricultural land into residential or commercial use. Buying an NA plot means you can immediately apply for building permissions. NA plots offer clear legal titles, higher ROI, and are far safer than purchasing agricultural land with the intent to convert later."
      }
    },
    {
      "@type": "Question",
      "name": "Are the plots at Earth One fully NA-approved?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. All plots at Earth One are fully NA-approved and ready to build. The project has all required government clearances, MahaRERA registration, and clear, encumbrance-free titles. You can begin the construction approval process immediately upon purchase."
      }
    },
    {
      "@type": "Question",
      "name": "Why is Igatpuri a good location to invest in real estate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Igatpuri offers scenic natural beauty, improving infrastructure, low pollution, and rising real-estate demand. It sits along the Mumbai–Nashik Expressway (~2.5 hrs from Mumbai), making it ideal for a second home. The region has seen consistent 15–22% annual appreciation in plot values."
      }
    },
    {
      "@type": "Question",
      "name": "How far is Earth One from Mumbai and Nashik?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Earth One is approximately 130 km from Mumbai (~2.5 hrs) via the Mumbai–Nashik Expressway and 50 km from Nashik (~1 hr). Igatpuri also has its own railway station on the Central Railway line."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get a home loan for purchasing a plot at Earth One?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Because Earth One plots are fully NA-approved with clear titles and MahaRERA registration, they are eligible for plot loans from leading banks and NBFCs including SBI, HDFC, ICICI Bank, and Bajaj Finserv."
      }
    },
    {
      "@type": "Question",
      "name": "Can NRIs purchase plots at Earth One?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. NRIs and PIOs are fully eligible to purchase NA residential plots in India under FEMA regulations. Earth One's sales team provides dedicated NRI assistance including documentation guidance and power-of-attorney support."
      }
    },
    {
      "@type": "Question",
      "name": "Is there a virtual tour available before visiting in person?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Earth One offers an immersive 360° virtual tour of the entire project — from the main gate and master plan to individual plot zones and club renders."
      }
    },
    {
      "@type": "Question",
      "name": "What climate is like in Igatpuri — is it suitable for year-round living?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Igatpuri has a pleasant, moderate climate. Summers are cool (22–32°C), monsoons are spectacular, and winters are refreshingly cold (8–20°C). AQI is consistently among the lowest in Maharashtra, making it excellent for families and wellness-focused residents."
      }
    }
  ]
}
</script>
 
<!-- FAQ ACCORDION JAVASCRIPT -->
<!-- FAQ ACCORDION JAVASCRIPT -->
<script>
(function () {
  const items = document.querySelectorAll('.faq-item');

  // --- Mobile: hide items beyond 5, add Show More button ---
  if (window.innerWidth < 768) {
    items.forEach((item, i) => {
      if (i >= 5) item.classList.add('hidden', 'extra-faq');
    });

    const accordion = document.getElementById('faq-accordion');
    const btn = document.createElement('button');
    btn.id = 'faq-show-more';
    btn.className = 'mt-4 w-full py-3 border border-[#c5a059] text-[#c5a059] text-xs font-bold uppercase tracking-[3px] rounded-sm hover:bg-[#c5a059] hover:text-[#0f241f] transition-all';
    btn.textContent = 'Show More FAQs';
    accordion.after(btn);

    btn.addEventListener('click', () => {
      document.querySelectorAll('.extra-faq').forEach(el => el.classList.remove('hidden'));
      btn.remove();
    });
  }

  // --- Accordion logic ---
  items.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');
    const answer  = item.querySelector('.faq-answer');
    const icon    = item.querySelector('.faq-icon');

    trigger.addEventListener('click', () => {
      const isOpen = !answer.classList.contains('hidden');

      // Close all — fully reset state
      items.forEach(i => {
        i.querySelector('.faq-answer').classList.add('hidden');
        i.querySelector('.faq-icon').classList.remove('fa-minus');
        i.querySelector('.faq-icon').classList.add('fa-plus');
        i.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
        // Reset button: remove dark bg, restore white bg
        const t = i.querySelector('.faq-trigger');
        t.classList.remove('bg-[#1a3c34]');
        t.classList.add('bg-white');
        // Reset span: force dark text
        const s = t.querySelector('span');
        s.style.color = '';
        s.classList.remove('text-white');
        s.classList.add('text-[#1a3c34]');
      });

      // Open clicked if it was closed
      if (!isOpen) {
        answer.classList.remove('hidden');
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
        icon.style.transform = 'rotate(180deg)';
        trigger.classList.remove('bg-white');
        trigger.classList.add('bg-[#1a3c34]');
        const span = trigger.querySelector('span');
        span.classList.remove('text-[#1a3c34]');
        span.classList.add('text-white');
      }
    });
  });
})();
</script>
 


    <!-- LOCATION SECTION -->
    <section id="location" class="py-24 md:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Side: Content Grid -->
            <div class="space-y-10 reveal">
                <div>
                    <span class="text-earth font-bold uppercase tracking-[5px] text-[10px] block mb-4">Strategic Location</span>
                    <h2 class="text-4xl md:text-5xl text-primary font-serif leading-tight">Unlocking Potential Of Igatpuri</h2>
                    <div class="w-20 h-1 bg-gold mt-6 mb-10"></div>
                </div>

                <!-- New Feature Grid Replacing Paragraph -->
                

                <!-- Optional: Directions Button moved below grid for better UX -->
                <div class="pt-4">
                    <a href="https://maps.app.goo.gl/6fyDe8EYNVp9jqLK6" target="_blank" class="px-10 py-5 border-2 border-primary text-primary font-bold uppercase tracking-[3px] text-[11px] hover:bg-primary hover:text-white transition-all inline-block rounded-sm">
                        <i class="fa-solid fa-map-location-dot mr-2"></i> Get Directions
                    </a>
                </div>
                <div class="space-y-8">
                        <div class="flex items-start gap-6">
                            <div class="w-12 h-12 bg-white text-earth flex items-center justify-center rounded-full shadow-lg shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mb-1">Direct Sales</h4>
                                <p class="text-xl font-bold text-primary">+91 77758 77756</p>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Right Side: Map -->
            <div class="w-full h-[350px] md:h-[500px] rounded-sm overflow-hidden shadow-2xl border-8 border-cream reveal">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.745672935741!2d73.66848657522437!3d19.7297398816104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd9b3cbd91817d%3A0x49052002526ecf14!2sEarth%20One!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

    <!-- INQUIRY SECTION -->
    <section id="inquiry-section" class="py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20">
                <div class="space-y-12 reveal flex flex-col justify-center">
                    <div>
                        <span class="text-earth font-bold uppercase tracking-[8px] text-[10px] block mb-4">Inquiry</span>
                        <h2 class="text-4xl md:text-7xl font-serif text-primary leading-tight">Secure Your Ready to Build NA Plot</h2>
                    </div>
                    <div class="space-y-8">
                        <div class="flex items-start gap-6">
                            <div class="w-12 h-12 bg-white text-earth flex items-center justify-center rounded-full shadow-lg shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mb-1">Direct Sales</h4>
                                <p class="text-xl font-bold text-primary">+91 77758 77756</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary p-8 md:p-16 shadow-2xl border-t-[10px] border-gold reveal">
                    <!-- <form action="YOUR_METROLEADS_POST_URL" method="POST" class="space-y-8"></form> Metroleads Post URL or their Web-to-Lead script. also need to check name attributes eg name="first-name" -->
                    <form action="https://edge.metroleads.com/callbacks/forms/webhook/55098643/companies/ddecc320-6f67-4048-a596-18cd897e6e4c" method="POST" class="space-y-8">
                        <input type="hidden" name="redirect_url" value="https://earthdevelopers.in/earthone/thank-you.html">
                        <input type="text" name="Name" required placeholder="Full Name" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                        <input type="email" name="Email" required placeholder="Email Address" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                        <input type="tel" name="Contact" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" pattern="\d{10}" placeholder="Enter 10-Digit Contact Number" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                        <textarea name="Message" required rows="3" placeholder="Message" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30"></textarea>
                        <button type="submit" class="btn-earth w-full py-5 text-white font-bold uppercase tracking-[4px] text-xs">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white pt-24 pb-12 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <!-- Footer Logo -->
            <div class="flex flex-col items-center justify-center mb-0">
                <img src="Gallery/Earth One HD Logo.png" alt="Earth One" class="h-48 md:h-[400px] w-auto brightness-0 invert opacity-80 select-none block p-0 m-0">
                
                <!-- NEW: RBROUCHER BUTTON IN FOOTER BELOW EO LOGO -->
                <a href="Broucher/Earth One eBrochure.pdf" target="_blank" class="mt-4 px-8 py-3 bg-gold/20 border border-gold text-gold hover:bg-gold hover:text-white transition-all duration-300 font-bold uppercase tracking-[3px] text-[10px] rounded-sm">
                    <i class="fa-solid fa-file-arrow-down mr-2"></i> Download EBrochure
                </a>
            </div>
            
            <p class="text-gold tracking-[10px] uppercase text-[10px] font-bold mt-8 mb-12"></p>
            
            <div class="flex justify-center gap-10 text-2xl mb-12">
                <a href="https://www.instagram.com/earthoneofficial?igsh=MTY2cGtiOG9nNGppeg==" target="_blank" class="hover:text-gold hover:scale-125 transition-all"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/17WVUD6QbM/" target="_blank" class="hover:text-gold hover:scale-125 transition-all"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/earth-one-official/ target="_blank" class="hover:text-gold hover:scale-125 transition-all"><i class="fa-brands fa-linkedin"></i></a>
            </div>

            <nav class="flex flex-wrap justify-center gap-8 mb-16">
                <a href="#home" class="text-white hover:text-gold uppercase tracking-widest text-[10px]">Home</a>
                <a href="earthone/about.html" class="text-white hover:text-gold uppercase tracking-widest text-[10px]">About Us</a>
                <a href="earthone/overview.html" class="text-white hover:text-gold uppercase tracking-widest text-[10px]">Project  Overview</a>
                <a href="earthone/amenities.html" class="text-white hover:text-gold uppercase tracking-widest text-[10px]">Amenities</a>
                <a href="earthone/contact.html" class="text-white hover:text-gold uppercase tracking-widest text-[10px]">Contact Us</a>
            </nav>
            <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-[9px] uppercase tracking-[5px] text-white/30">
                <span>&copy; 2026. Earth Developers. All Rights Reserved</span>
                <span class="flex gap-4">
                    <a href="terms&privacy/privacy-policy.html" target="_blank" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="terms&privacy/terms-conditions.html" target="_blank" class="hover:text-white transition-colors">T&C</a>
                    <a href="#faq" target="_blank" class="hover:text-white transition-colors">FAQ</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- INQUIRY POPUP (MODAL) -->
    <div id="inquiry-modal" class="modal-overlay fixed inset-0 z-[6000] bg-dark/80 backdrop-blur-md flex items-center justify-center p-6">
        <div class="modal-content relative bg-primary w-full max-w-lg rounded-sm shadow-2xl border-t-[10px] border-gold p-8 md:p-12 overflow-hidden">
            <button id="close-modal" class="absolute top-4 right-4 text-white/50 hover:text-white text-2xl transition-colors">
                <i class="fa-solid fa-xmark"></i>
            </button>
            
            <!-- STEP 1: OPTIONS CONTAINER -->
            <div id="modal-options" class="space-y-8">
                <div class="mb-8 text-center">
                    <span class="text-gold font-bold uppercase tracking-[5px] text-[10px] block mb-2">Connect With Us</span>
                    <h3 class="text-2xl font-serif text-white">How can we assist you?</h3>
                </div>

                <div class="grid gap-4">
                    <a href="tel:+917775877756" class="w-full flex items-center justify-center gap-4 bg-white/5 border border-white/10 hover:bg-gold hover:border-gold py-5 rounded-sm text-white transition-all font-bold uppercase tracking-[3px] text-xs">
                        <i class="fa-solid fa-phone"></i> Call Direct
                    </a>
                    <a href="https://wa.me/919684004962" target="_blank" class="w-full flex items-center justify-center gap-4 bg-[#25D366]/10 border border-[#25D366]/20 hover:bg-[#25D366] py-5 rounded-sm text-white transition-all font-bold uppercase tracking-[3px] text-xs">
                        <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Chat
                    </a>
                    <button id="show-form-btn" class="w-full flex items-center justify-center gap-4 bg-earth/20 border border-earth/30 hover:bg-earth py-5 rounded-sm text-white transition-all font-bold uppercase tracking-[3px] text-xs">
                        <i class="fa-solid fa-envelope"></i> Send Inquiry Form
                    </button>
                </div>
            </div>

            <!-- STEP 2: FORM CONTAINER (Initially Hidden) -->
            <div id="modal-form" class="hidden">
                <div class="mb-8 text-center">
                    <button id="back-to-options" class="text-gold text-[10px] uppercase tracking-[3px] mb-4 hover:underline">
                        <i class="fa-solid fa-chevron-left mr-1"></i> Back to options
                    </button>
                    <h3 class="text-2xl font-serif text-white">Inquire Now</h3>
                </div>
                
                <form action="https://edge.metroleads.com/callbacks/forms/webhook/55098643/companies/ddecc320-6f67-4048-a596-18cd897e6e4c" method="POST" class="space-y-6">
                    <input type="hidden" name="redirect_url" value="https://earthdevelopers.in/earthone/thank-you.html">
                    <input type="text" name="Name" required placeholder="Full Name" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                    <input type="email" name="Email" required placeholder="Email Address" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                    <input type="tel" name="Contact" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" pattern="\d{10}" placeholder="Enter 10-Digit Contact Number" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30">
                    <textarea name="Message" required rows="2" placeholder="Message" class="w-full bg-transparent border-b border-white/20 py-3 text-white focus:border-gold outline-none text-sm placeholder:text-white/30"></textarea>
                    <button type="submit" class="btn-earth w-full py-4 text-white font-bold uppercase tracking-[4px] text-xs">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Sparkle Logic
        const butterflyWrap = document.getElementById('butterfly-wrap');
        function createSparkle() {
            const rect = butterflyWrap.getBoundingClientRect();
            if (rect.left < 0 || rect.top < 0) return;
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            sparkle.style.left = (rect.left + rect.width / 2) + 'px';
            sparkle.style.top = (rect.top + rect.height / 2 + window.scrollY) + 'px';
            document.body.appendChild(sparkle);
            setTimeout(() => sparkle.remove(), 1500);
        }
        setInterval(createSparkle, 100);

        const header = document.getElementById('header');
        const logo = document.getElementById('logo');
        const logoLink = logo.parentElement;
        const menuBtn = document.getElementById('open-menu');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            const isDesktop = window.innerWidth > 768;
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
                header.querySelector('div').style.height = isDesktop ? '100px' : '80px';
                logoLink.style.top = isDesktop ? '-25px' : '-20px'; 
                logoLink.style.left = isDesktop ? '15px' : '10px';
                logo.classList.remove('brightness-0', 'invert');
                logo.style.height = isDesktop ? '150px' : '120px';
                // Show logo on scroll for mobile
                logo.style.opacity = '1';
                logo.style.pointerEvents = 'auto';

                navLinks.forEach(l => {
                    l.classList.remove('text-white');
                    l.classList.add('text-primary');
                });
                menuBtn.classList.remove('text-white');
                menuBtn.classList.add('text-primary');
            } else {
                header.classList.remove('header-scrolled');
                header.querySelector('div').style.height = isDesktop ? '128px' : '96px';
                logoLink.style.top = isDesktop ? '16px' : '8px';
                logoLink.style.left = isDesktop ? '48px' : '24px';
                logo.classList.add('brightness-0', 'invert');
                logo.style.height = isDesktop ? '448px' : '256px';
                
                // Keep logo visible on desktop home screen, but hide on mobile home screen
                if (!isDesktop) {
                    logo.style.opacity = '0';
                    logo.style.pointerEvents = 'none';
                } else {
                    logo.style.opacity = '1';
                    logo.style.pointerEvents = 'auto';
                }

                navLinks.forEach(l => {
                    l.classList.add('text-white');
                    l.classList.remove('text-primary');
                });
                menuBtn.classList.add('text-white');
                menuBtn.classList.remove('text-primary');
            }
        });

        // Modal Logic
        const modal = document.getElementById('inquiry-modal');
        const modalOptions = document.getElementById('modal-options');
        const modalForm = document.getElementById('modal-form');
        const showFormBtn = document.getElementById('show-form-btn');
        const backToOptions = document.getElementById('back-to-options');

        const headerTriggerBtn = document.getElementById('header-inquiry');
        const headerTriggerBtnMob = document.getElementById('header-inquiry-mob');
        const closeBtn = document.getElementById('close-modal');

        const openModal = () => {
            modal.classList.add('active');
            modalOptions.classList.remove('hidden');
            modalForm.classList.add('hidden');
            document.body.style.overflow = 'hidden';
        };

        const closeModal = () => {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        };

        showFormBtn.addEventListener('click', () => {
            modalOptions.classList.add('hidden');
            modalForm.classList.remove('hidden');
        });

        backToOptions.addEventListener('click', () => {
            modalForm.classList.add('hidden');
            modalOptions.classList.remove('hidden');
        });

        if(headerTriggerBtn) headerTriggerBtn.addEventListener('click', openModal);
        if(headerTriggerBtnMob) headerTriggerBtnMob.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        // TIMED POPUP LOGIC
        const timedModal = document.getElementById('timed-popup-modal');
        const closeTimedBtn = document.getElementById('close-timed-modal');
        let popupIntervalSet = false;

        const openTimedModal = () => {
            if (timedModal) {
                timedModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        };

        const closeTimedModal = () => {
            if (timedModal) {
                timedModal.classList.remove('active');
                document.body.style.overflow = '';
                
                // Set up the interval for later visits
                if (!popupIntervalSet) {
                    setInterval(openTimedModal, 180000); // 3 minutes
                    popupIntervalSet = true;
                }
            }
        };

        if (closeTimedBtn) closeTimedBtn.addEventListener('click', closeTimedModal);
        if (timedModal) timedModal.addEventListener('click', (e) => {
            if (e.target === timedModal) closeTimedModal();
        });

        // Initial Trigger: 60 Seconds after DOM is ready
        window.addEventListener('load', () => {
            setTimeout(openTimedModal, 60000); // 60000=60 seconds
        });

        // Intersection Observer
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('active'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        const mobileMenu = document.getElementById('mobile-menu');
const body = document.body;

document.getElementById('open-menu').addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    body.style.overflow = 'hidden'; // Locks the background scroll
});

const closeMobileMenu = () => {
    mobileMenu.classList.add('translate-x-full');
    body.style.overflow = ''; // Unlocks the background scroll
};

document.getElementById('close-menu').addEventListener('click', closeMobileMenu);

document.querySelectorAll('.mob-link').forEach(link => {
    link.addEventListener('click', closeMobileMenu);
});

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) window.scrollTo({ top: target.offsetTop - 100, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
