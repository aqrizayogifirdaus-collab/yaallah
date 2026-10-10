<!DOCTYPE html>
<html lang="id" class="scroll-smooth dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aqriza Yogi Firdaus | Portfolio - Software Developer & UI/UX</title>
  <meta name="description" content="Portofolio resmi Aqriza Yogi Firdaus - Software Developer, Fullstack Engineer, dan UI/UX Designer." />
  
  <!-- Google Fonts: Inter & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          },
          colors: {
            brand: {
              50: '#eef2ff',
              100: '#e0e7ff',
              200: '#c7d2fe',
              300: '#a5b4fc',
              400: '#818cf8',
              500: '#6366f1',
              600: '#4f46e5',
              700: '#4338ca',
              800: '#3730a3',
              900: '#312e81',
              accent: '#06b6d4',
              emerald: '#10b981',
            }
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            'gradient-x': 'gradient-x 8s ease infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-12px)' },
            },
            'gradient-x': {
              '0%, 100%': { 'background-size': '200% 200%', 'background-position': 'left center' },
              '50%': { 'background-size': '200% 200%', 'background-position': 'right center' },
            }
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Canvas Confetti -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased selection:bg-brand-500 selection:text-white transition-colors duration-300 min-h-screen relative overflow-x-hidden">

  <!-- Background Decorative Gradient Blobs -->
  <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-brand-600/20 rounded-full blur-3xl dark:bg-brand-600/15"></div>
    <div class="absolute top-1/3 -right-40 w-[500px] h-[500px] bg-brand-accent/15 rounded-full blur-3xl dark:bg-brand-accent/10"></div>
    <div class="absolute -bottom-20 left-1/3 w-96 h-96 bg-purple-600/15 rounded-full blur-3xl dark:bg-purple-600/10"></div>
  </div>

  <!-- Header / Navigation Bar -->
  <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 px-4 sm:px-8">
    <nav class="max-w-6xl mx-auto backdrop-blur-md bg-slate-900/80 dark:bg-slate-950/80 border border-slate-700/50 dark:border-slate-800/80 rounded-2xl px-6 py-3.5 flex items-center justify-between shadow-lg shadow-black/5">
      <!-- Logo -->
      <a href="#home" class="flex items-center gap-2.5 group">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-600 to-brand-accent flex items-center justify-center text-white font-bold text-lg shadow-md shadow-brand-500/20 group-hover:scale-105 transition-transform">
          AY
        </div>
        <div class="flex flex-col">
          <span class="font-bold text-base tracking-tight text-white group-hover:text-brand-300 transition-colors">Aqriza Yogi</span>
          <span class="text-xs text-brand-400 font-mono -mt-1">.dev</span>
        </div>
      </a>

      <!-- Desktop Navigation Links -->
      <div class="hidden md:flex items-center gap-7 text-sm font-medium text-slate-300">
        <a href="#home" class="nav-link hover:text-brand-400 transition-colors">Beranda</a>
        <a href="#about" class="nav-link hover:text-brand-400 transition-colors">Tentang</a>
        <a href="#skills" class="nav-link hover:text-brand-400 transition-colors">Keahlian</a>
        <a href="#projects" class="nav-link hover:text-brand-400 transition-colors">Portofolio</a>
        <a href="#experience" class="nav-link hover:text-brand-400 transition-colors">Pengalaman</a>
        <a href="#contact" class="nav-link hover:text-brand-400 transition-colors">Kontak</a>
      </div>

      <!-- Action Buttons & Theme Toggle -->
      <div class="flex items-center gap-3">
        <!-- Theme Switcher -->
        <button id="themeToggle" class="p-2.5 rounded-xl border border-slate-700 hover:border-brand-500/50 bg-slate-800/80 text-slate-300 hover:text-brand-400 transition-all focus:outline-none" title="Ubah Tema">
          <i data-lucide="sun" class="w-4 h-4 hidden dark:block"></i>
          <i data-lucide="moon" class="w-4 h-4 block dark:hidden"></i>
        </button>

        <!-- CTA Hire Me -->
        <a href="#contact" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 text-xs font-semibold rounded-xl bg-brand-600 hover:bg-brand-500 text-white shadow-md shadow-brand-600/30 transition-all hover:scale-[1.02] active:scale-[0.98]">
          <span>Hubungi</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobileMenuBtn" class="md:hidden p-2.5 rounded-xl border border-slate-700 bg-slate-800 text-slate-300 hover:text-white focus:outline-none">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </button>
      </div>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden md:hidden max-w-6xl mx-auto mt-2 p-5 bg-slate-900/95 backdrop-blur-xl border border-slate-800 rounded-2xl shadow-xl flex flex-col gap-4 text-center">
      <a href="#home" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Beranda</a>
      <a href="#about" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Tentang</a>
      <a href="#skills" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Keahlian</a>
      <a href="#projects" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Portofolio</a>
      <a href="#experience" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Pengalaman</a>
      <a href="#contact" class="mobile-nav-link py-2 text-slate-300 hover:text-brand-400 font-medium">Kontak</a>
      <a href="#contact" class="inline-flex items-center justify-center gap-2 py-2.5 bg-brand-600 text-white font-semibold rounded-xl text-sm">
        <span>Hubungi Saya</span>
        <i data-lucide="send" class="w-4 h-4"></i>
      </a>
    </div>
  </header>

  <!-- Main Content Container -->
  <main class="relative z-10 pt-28">

    <!-- HERO SECTION -->
    <section id="home" class="min-h-[85vh] flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Column: Bio & CTA -->
        <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
          
          <!-- Availability Badge -->
          <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-medium backdrop-blur-md">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            Tersedia untuk Pekerjaan & Proyek Baru
          </div>

          <!-- Greeting & Name -->
          <div class="space-y-2">
            <p class="text-brand-400 font-mono text-sm tracking-wide">Halo Dunia! Saya</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
              Aqriza Yogi <span class="bg-gradient-to-r from-brand-400 via-indigo-300 to-brand-accent bg-clip-text text-transparent">Firdaus</span>
            </h1>
            <div class="text-xl sm:text-2xl font-semibold text-slate-300 flex items-center justify-center lg:justify-start gap-2 h-9">
              <span class="text-slate-400">Saya seorang</span>
              <span id="typingRole" class="text-brand-accent border-r-2 border-brand-accent pr-1"></span>
            </div>
          </div>

          <!-- Short Pitch -->
          <p class="text-slate-400 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
            Spesialis dalam membangun aplikasi web modern, sistem backend yang andal, dan desain antarmuka pengguna yang bersih, cepat, serta mudah digunakan.
          </p>

          <!-- Action Buttons -->
          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
            <a href="#projects" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-brand-600 to-brand-500 hover:from-brand-500 hover:to-brand-600 text-white font-semibold shadow-lg shadow-brand-600/30 hover:shadow-brand-500/40 hover:-translate-y-0.5 transition-all text-sm">
              <i data-lucide="sparkles" class="w-4 h-4"></i>
              <span>Lihat Portofolio</span>
            </a>
            
            <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl border border-slate-700 hover:border-slate-500 bg-slate-800/60 hover:bg-slate-800 text-slate-200 font-semibold hover:-translate-y-0.5 transition-all text-sm backdrop-blur-sm">
              <i data-lucide="mail" class="w-4 h-4"></i>
              <span>Hubungi Saya</span>
            </a>

            <button onclick="downloadResume()" class="inline-flex items-center gap-2 px-4 py-3.5 rounded-xl border border-dashed border-slate-700 hover:border-brand-400 text-slate-400 hover:text-brand-300 font-medium transition-all text-sm group" title="Download CV">
              <i data-lucide="file-text" class="w-4 h-4 group-hover:scale-110 transition-transform"></i>
              <span>Unduh CV</span>
            </button>
          </div>

          <!-- Quick Tech Stack Icons -->
          <div class="pt-6 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 text-xs text-slate-400">
            <span class="font-mono text-slate-500">Tech Stack Utama:</span>
            <div class="flex flex-wrap items-center gap-3">
              <span class="px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700 font-mono text-slate-300">JavaScript / TS</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700 font-mono text-slate-300">React.js</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700 font-mono text-slate-300">Next.js</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700 font-mono text-slate-300">Node.js</span>
              <span class="px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700 font-mono text-slate-300">Tailwind</span>
            </div>
          </div>

        </div>

        <!-- Right Column: Interactive Profile Card / Visual -->
        <div class="lg:col-span-5 flex justify-center">
          <div class="relative w-full max-w-sm">
            <!-- Glowing background aura -->
            <div class="absolute -inset-1.5 bg-gradient-to-r from-brand-600 via-purple-600 to-brand-accent rounded-3xl blur-xl opacity-60 group-hover:opacity-100 transition duration-1000 animate-pulse-slow"></div>
            
            <!-- Card Container -->
            <div class="relative bg-slate-900 border border-slate-800/90 rounded-3xl p-6 shadow-2xl backdrop-blur-xl space-y-6">
              
              <!-- Avatar Display -->
              <div class="relative mx-auto w-48 h-48 rounded-2xl overflow-hidden bg-gradient-to-b from-brand-700/40 to-slate-800 border-2 border-brand-500/30 flex items-center justify-center shadow-inner group">
                <!-- Illustrated Developer Placeholder Avatar -->
                <div class="text-center space-y-2">
                  <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-tr from-brand-500 to-brand-accent flex items-center justify-center text-3xl font-extrabold text-white shadow-lg">
                    AYF
                  </div>
                  <div class="text-xs font-mono text-slate-400">@aqrizayogi</div>
                </div>

                <!-- Status Overlay Badge -->
                <div class="absolute bottom-2 right-2 px-2.5 py-1 rounded-lg bg-slate-900/90 border border-slate-700 text-[10px] font-mono text-brand-300 flex items-center gap-1.5">
                  <i data-lucide="code-2" class="w-3 h-3 text-brand-accent"></i>
                  <span>Ready to build</span>
                </div>
              </div>

              <!-- Mini Stats inside Card -->
              <div class="grid grid-cols-3 gap-2 text-center pt-2">
                <div class="p-2.5 rounded-xl bg-slate-800/60 border border-slate-800">
                  <div class="text-lg font-bold text-white">3+</div>
                  <div class="text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Tahun Pengalaman</div>
                </div>
                <div class="p-2.5 rounded-xl bg-slate-800/60 border border-slate-800">
                  <div class="text-lg font-bold text-brand-accent">20+</div>
                  <div class="text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Proyek Sukses</div>
                </div>
                <div class="p-2.5 rounded-xl bg-slate-800/60 border border-slate-800">
                  <div class="text-lg font-bold text-emerald-400">100%</div>
                  <div class="text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Dedikasi Klien</div>
                </div>
              </div>

              <!-- Social Links Row -->
              <div class="flex items-center justify-center gap-3 pt-1">
                <a href="https://github.com" target="_blank" rel="noopener" class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-all hover:scale-110" title="GitHub">
                  <i data-lucide="github" class="w-4 h-4"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener" class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-brand-400 transition-all hover:scale-110" title="LinkedIn">
                  <i data-lucide="linkedin" class="w-4 h-4"></i>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener" class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-pink-400 transition-all hover:scale-110" title="Instagram">
                  <i data-lucide="instagram" class="w-4 h-4"></i>
                </a>
                <a href="mailto:aqrizayogi@gmail.com" class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-emerald-400 transition-all hover:scale-110" title="Kirim Email">
                  <i data-lucide="mail" class="w-4 h-4"></i>
                </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 border-t border-slate-800/60 bg-slate-900/40">
      <div class="max-w-6xl mx-auto space-y-12">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
          <span class="px-3.5 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-mono font-medium">TENTANG SAYA</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Mengenal Lebih Dekat</h2>
          <p class="text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">Membangun teknologi dengan semangat inovasi, estetika, dan fungsionalitas tinggi.</p>
        </div>

        <!-- About Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          
          <!-- Left Bio -->
          <div class="lg:col-span-7 space-y-5 text-slate-300 text-base leading-relaxed">
            <p>
              Halo! Saya <strong class="text-white">Aqriza Yogi Firdaus</strong>, seorang pengembang perangkat lunak yang berdedikasi untuk menciptakan aplikasi web dan mobile yang responsif, terukur, dan estetis.
            </p>
            <p>
              Perjalanan saya di dunia teknologi didorong oleh rasa ingin tahu yang tinggi dan hasrat untuk menyelesaikan masalah nyata melalui baris kode yang bersih (*clean code*) serta desain antarmuka pengguna yang ramah (*user-centric*).
            </p>
            <p>
              Saya menikmati kolaborasi lintas disiplin, mulai dari tahap perencanaan arsitektur, desain wireframe di Figma, hingga implementasi kode *full-stack* dan peluncuran ke lingkungan produksi.
            </p>

            <!-- Highlights Checklist -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-3">
              <div class="flex items-center gap-2.5 text-sm text-slate-200">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                <span>Pengembangan Full-Stack</span>
              </div>
              <div class="flex items-center gap-2.5 text-sm text-slate-200">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                <span>Desain UI/UX & Prototyping</span>
              </div>
              <div class="flex items-center gap-2.5 text-sm text-slate-200">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                <span>Arsitektur API Terstruktur</span>
              </div>
              <div class="flex items-center gap-2.5 text-sm text-slate-200">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 flex-shrink-0"></i>
                <span>Optimasi Kecepatan & SEO</span>
              </div>
            </div>
          </div>

          <!-- Right Feature Cards -->
          <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
            
            <div class="p-5 rounded-2xl bg-slate-800/70 border border-slate-700/60 space-y-2 hover:border-brand-500/50 transition-colors">
              <div class="w-10 h-10 rounded-xl bg-brand-500/20 text-brand-400 flex items-center justify-center">
                <i data-lucide="code" class="w-5 h-5"></i>
              </div>
              <h3 class="font-bold text-white text-base">Clean Code</h3>
              <p class="text-xs text-slate-400">Kode yang terstruktur, mudah dirawat, modular, dan mengikuti standar industri.</p>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/70 border border-slate-700/60 space-y-2 hover:border-brand-accent/50 transition-colors">
              <div class="w-10 h-10 rounded-xl bg-brand-accent/20 text-brand-accent flex items-center justify-center">
                <i data-lucide="layout" class="w-5 h-5"></i>
              </div>
              <h3 class="font-bold text-white text-base">Pixel Perfect</h3>
              <p class="text-xs text-slate-400">Perhatian tinggi pada detail visual, transisi halus, dan konsistensi tata letak.</p>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/70 border border-slate-700/60 space-y-2 hover:border-purple-500/50 transition-colors">
              <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center">
                <i data-lucide="zap" class="w-5 h-5"></i>
              </div>
              <h3 class="font-bold text-white text-base">Fast Performance</h3>
              <p class="text-xs text-slate-400">Aplikasi yang cepat diakses dengan loading time minimal dan resource yang efisien.</p>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/70 border border-slate-700/60 space-y-2 hover:border-emerald-500/50 transition-colors">
              <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                <i data-lucide="shield-check" class="w-5 h-5"></i>
              </div>
              <h3 class="font-bold text-white text-base">Reliable & Secure</h3>
              <p class="text-xs text-slate-400">Fokus pada keamanan data, validasi input, dan keandalan sistem jangka panjang.</p>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 border-t border-slate-800/60">
      <div class="max-w-6xl mx-auto space-y-12">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
          <span class="px-3.5 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-mono font-medium">KEAHLIAN & TEKNOLOGI</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Tech Stack & Tools</h2>
          <p class="text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">Kumpulan teknologi dan peralatan yang saya gunakan untuk mewujudkan produk digital berkualitas.</p>
        </div>

        <!-- Skills Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Category 1: Frontend -->
          <div class="p-6 rounded-2xl bg-slate-800/50 border border-slate-700/60 space-y-5 hover:border-brand-500/40 transition-all group">
            <div class="flex items-center gap-3">
              <div class="p-2.5 rounded-xl bg-indigo-500/10 text-indigo-400 group-hover:scale-110 transition-transform">
                <i data-lucide="monitor" class="w-6 h-6"></i>
              </div>
              <div>
                <h3 class="font-bold text-white text-lg">Frontend</h3>
                <p class="text-xs text-slate-400">UI & Web Experience</p>
              </div>
            </div>
            
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">HTML5 / CSS3 / JavaScript</span>
                  <span class="text-brand-400 font-mono">95%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-brand-500 to-brand-accent rounded-full" style="width: 95%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">React.js / Next.js</span>
                  <span class="text-brand-400 font-mono">90%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-brand-500 to-brand-accent rounded-full" style="width: 90%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Tailwind CSS</span>
                  <span class="text-brand-400 font-mono">95%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-brand-500 to-brand-accent rounded-full" style="width: 95%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">TypeScript</span>
                  <span class="text-brand-400 font-mono">82%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-brand-500 to-brand-accent rounded-full" style="width: 82%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Category 2: Backend -->
          <div class="p-6 rounded-2xl bg-slate-800/50 border border-slate-700/60 space-y-5 hover:border-emerald-500/40 transition-all group">
            <div class="flex items-center gap-3">
              <div class="p-2.5 rounded-xl bg-emerald-500/10 text-emerald-400 group-hover:scale-110 transition-transform">
                <i data-lucide="server" class="w-6 h-6"></i>
              </div>
              <div>
                <h3 class="font-bold text-white text-lg">Backend</h3>
                <p class="text-xs text-slate-400">Logic & Architecture</p>
              </div>
            </div>
            
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Node.js / Express</span>
                  <span class="text-emerald-400 font-mono">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full" style="width: 88%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">RESTful APIs & GraphQL</span>
                  <span class="text-emerald-400 font-mono">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full" style="width: 85%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">PostgreSQL / MySQL</span>
                  <span class="text-emerald-400 font-mono">84%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full" style="width: 84%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">MongoDB / Prisma ORM</span>
                  <span class="text-emerald-400 font-mono">80%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full" style="width: 80%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Category 3: UI/UX & Design -->
          <div class="p-6 rounded-2xl bg-slate-800/50 border border-slate-700/60 space-y-5 hover:border-purple-500/40 transition-all group">
            <div class="flex items-center gap-3">
              <div class="p-2.5 rounded-xl bg-purple-500/10 text-purple-400 group-hover:scale-110 transition-transform">
                <i data-lucide="palette" class="w-6 h-6"></i>
              </div>
              <div>
                <h3 class="font-bold text-white text-lg">UI/UX Design</h3>
                <p class="text-xs text-slate-400">Design & Prototyping</p>
              </div>
            </div>
            
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Figma & FigJam</span>
                  <span class="text-purple-400 font-mono">92%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full" style="width: 92%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Wireframing & Flow</span>
                  <span class="text-purple-400 font-mono">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full" style="width: 88%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Design Systems</span>
                  <span class="text-purple-400 font-mono">86%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full" style="width: 86%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Responsive Layouts</span>
                  <span class="text-purple-400 font-mono">95%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full" style="width: 95%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Category 4: Tools & Workflow -->
          <div class="p-6 rounded-2xl bg-slate-800/50 border border-slate-700/60 space-y-5 hover:border-brand-accent/40 transition-all group">
            <div class="flex items-center gap-3">
              <div class="p-2.5 rounded-xl bg-cyan-500/10 text-cyan-400 group-hover:scale-110 transition-transform">
                <i data-lucide="wrench" class="w-6 h-6"></i>
              </div>
              <div>
                <h3 class="font-bold text-white text-lg">Tools & DevOps</h3>
                <p class="text-xs text-slate-400">Environment & Deployment</p>
              </div>
            </div>
            
            <div class="space-y-3">
              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Git & GitHub</span>
                  <span class="text-cyan-400 font-mono">90%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 90%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Vercel / Netlify / Cloud</span>
                  <span class="text-cyan-400 font-mono">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 88%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Postman API Testing</span>
                  <span class="text-cyan-400 font-mono">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 85%"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-xs font-medium mb-1">
                  <span class="text-slate-300">Docker & Linux Basics</span>
                  <span class="text-cyan-400 font-mono">75%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-700 overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 75%"></div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 border-t border-slate-800/60 bg-slate-900/40">
      <div class="max-w-6xl mx-auto space-y-12">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
          <span class="px-3.5 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-mono font-medium">PORTOFOLIO TERPILIH</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Karya & Proyek Terkini</h2>
          <p class="text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">Beberapa proyek nyata dan studi kasus yang telah saya kembangkan dengan fokus pada solusi dan pengalaman pengguna.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2" id="projectFilters">
          <button class="filter-btn active px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold bg-brand-600 text-white transition-all shadow-md" data-filter="all">Semua</button>
          <button class="filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium bg-slate-800/80 hover:bg-slate-800 text-slate-300 transition-all border border-slate-700" data-filter="webapp">Web App</button>
          <button class="filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium bg-slate-800/80 hover:bg-slate-800 text-slate-300 transition-all border border-slate-700" data-filter="uiux">UI/UX Design</button>
          <button class="filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium bg-slate-800/80 hover:bg-slate-800 text-slate-300 transition-all border border-slate-700" data-filter="backend">Backend & API</button>
        </div>

        <!-- Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projectsContainer">
          
          <!-- Project 1 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-brand-500/60 transition-all flex flex-col justify-between" data-category="webapp">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-brand-900/80 via-slate-800 to-indigo-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-brand-500/20 text-brand-300 text-[11px] font-mono font-medium border border-brand-500/30">Next.js + Tailwind</span>
                  <span class="text-xs text-slate-400 font-mono">2026</span>
                </div>
                <div class="z-10">
                  <i data-lucide="wallet-cards" class="w-10 h-10 text-brand-accent mb-2"></i>
                  <h4 class="font-bold text-white text-lg">FinFlow</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-brand-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-brand-300 transition-colors">FinFlow - Smart Budget Tracker</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Aplikasi manajemen keuangan cerdas dengan fitur analitik pengeluaran, visualisasi diagram interaktif, dan integrasi multi-wallet.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Next.js 14</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">TypeScript</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">PostgreSQL</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Chart.js</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('finflow')" class="text-xs font-semibold text-brand-400 hover:text-brand-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="GitHub Source">
                  <i data-lucide="github" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('finflow')" class="text-slate-400 hover:text-brand-400 transition-colors" title="Live Preview">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-emerald-500/60 transition-all flex flex-col justify-between" data-category="webapp">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-teal-950/80 via-slate-800 to-emerald-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-emerald-500/20 text-emerald-300 text-[11px] font-mono font-medium border border-emerald-500/30">React + Node.js</span>
                  <span class="text-xs text-slate-400 font-mono">2025</span>
                </div>
                <div class="z-10">
                  <i data-lucide="graduation-cap" class="w-10 h-10 text-emerald-400 mb-2"></i>
                  <h4 class="font-bold text-white text-lg">EduSphere</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-emerald-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-emerald-300 transition-colors">EduSphere - Learning Hub</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Platform e-learning interaktif dengan kuis otomatis, pelacakan progres siswa, modul video, dan forum diskusi real-time.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">React.js</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Express</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">MongoDB</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Tailwind</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('edusphere')" class="text-xs font-semibold text-emerald-400 hover:text-emerald-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="GitHub Source">
                  <i data-lucide="github" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('edusphere')" class="text-slate-400 hover:text-emerald-400 transition-colors" title="Live Preview">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-purple-500/60 transition-all flex flex-col justify-between" data-category="uiux">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-purple-950/80 via-slate-800 to-pink-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-purple-500/20 text-purple-300 text-[11px] font-mono font-medium border border-purple-500/30">Figma UI/UX</span>
                  <span class="text-xs text-slate-400 font-mono">2025</span>
                </div>
                <div class="z-10">
                  <i data-lucide="shopping-bag" class="w-10 h-10 text-purple-400 mb-2"></i>
                  <h4 class="font-bold text-white text-lg">NusaMarket</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-purple-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-purple-300 transition-colors">NusaMarket - E-Commerce App UI</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Desain antarmuka komprehensif untuk aplikasi marketplace mobile lokal dengan design system modular dan uji usability.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Figma</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Design System</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Wireframing</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Prototyping</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('nusamarket')" class="text-xs font-semibold text-purple-400 hover:text-purple-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://figma.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="Figma Link">
                  <i data-lucide="layout" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('nusamarket')" class="text-slate-400 hover:text-purple-400 transition-colors" title="Preview Case Study">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Project 4 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-cyan-500/60 transition-all flex flex-col justify-between" data-category="backend">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-cyan-950/80 via-slate-800 to-blue-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-cyan-500/20 text-cyan-300 text-[11px] font-mono font-medium border border-cyan-500/30">Node.js + JWT</span>
                  <span class="text-xs text-slate-400 font-mono">2025</span>
                </div>
                <div class="z-10">
                  <i data-lucide="database" class="w-10 h-10 text-cyan-400 mb-2"></i>
                  <h4 class="font-bold text-white text-lg">AuthVault API</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-cyan-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-cyan-300 transition-colors">AuthVault - Secure Auth Microservice</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Layanan otentikasi mandiri berbasis JWT, Refresh Token rotation, Rate limiting, proteksi brute-force, dan audit log lengkap.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Node.js</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Redis</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">PostgreSQL</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Docker</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('authvault')" class="text-xs font-semibold text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="GitHub Source">
                  <i data-lucide="github" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('authvault')" class="text-slate-400 hover:text-cyan-400 transition-colors" title="API Docs">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Project 5 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-brand-500/60 transition-all flex flex-col justify-between" data-category="webapp">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-indigo-950/80 via-slate-800 to-brand-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-brand-500/20 text-brand-300 text-[11px] font-mono font-medium border border-brand-500/30">Next.js + Supabase</span>
                  <span class="text-xs text-slate-400 font-mono">2024</span>
                </div>
                <div class="z-10">
                  <i data-lucide="code-xml" class="w-10 h-10 text-brand-400 mb-2"></i>
                  <h4 class="font-bold text-white text-lg">DevPulse Hub</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-brand-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-brand-300 transition-colors">DevPulse - Code Snippet Sharing</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Ruang kolaborasi developer untuk menyimpan, membagikan, dan mengeksekusi snippet kode dengan syntax highlight real-time.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Next.js</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Supabase</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Tailwind CSS</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('devpulse')" class="text-xs font-semibold text-brand-400 hover:text-brand-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="GitHub Source">
                  <i data-lucide="github" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('devpulse')" class="text-slate-400 hover:text-brand-400 transition-colors" title="Live Preview">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Project 6 -->
          <div class="project-card group rounded-2xl bg-slate-800/60 border border-slate-700/60 overflow-hidden hover:border-pink-500/60 transition-all flex flex-col justify-between" data-category="uiux">
            <div class="p-6 space-y-4">
              <!-- Thumbnail Banner -->
              <div class="h-44 rounded-xl bg-gradient-to-tr from-pink-950/80 via-slate-800 to-rose-900/60 border border-slate-700/70 p-4 flex flex-col justify-between relative overflow-hidden group-hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-between z-10">
                  <span class="px-2.5 py-1 rounded-md bg-pink-500/20 text-pink-300 text-[11px] font-mono font-medium border border-pink-500/30">Mobile & UI/UX</span>
                  <span class="text-xs text-slate-400 font-mono">2024</span>
                </div>
                <div class="z-10">
                  <i data-lucide="activity" class="w-10 h-10 text-pink-400 mb-2"></i>
                  <h4 class="font-bold text-white text-lg">HealthCare +</h4>
                </div>
                <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-pink-500/20 rounded-full blur-xl pointer-events-none"></div>
              </div>

              <!-- Title & Description -->
              <div class="space-y-2">
                <h3 class="font-bold text-lg text-white group-hover:text-pink-300 transition-colors">HealthCare+ - Telemedicine App</h3>
                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                  Konsep aplikasi konsultasi dokter online, resep digital, dan pemesanan jadwal laboratorium yang ramah lansia.
                </p>
              </div>

              <!-- Tech Badges -->
              <div class="flex flex-wrap gap-1.5 pt-1">
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Figma</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">Mobile UI</span>
                <span class="px-2 py-0.5 rounded bg-slate-700/60 text-[11px] font-mono text-slate-300">User Research</span>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="px-6 py-4 bg-slate-800/40 border-t border-slate-700/50 flex items-center justify-between">
              <button onclick="openProjectModal('healthcare')" class="text-xs font-semibold text-pink-400 hover:text-pink-300 flex items-center gap-1.5">
                <i data-lucide="info" class="w-3.5 h-3.5"></i>
                <span>Detail Proyek</span>
              </button>
              <div class="flex items-center gap-3">
                <a href="https://figma.com" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="Figma Link">
                  <i data-lucide="layout" class="w-4 h-4"></i>
                </a>
                <a href="#projects" onclick="openProjectModal('healthcare')" class="text-slate-400 hover:text-pink-400 transition-colors" title="Preview Case Study">
                  <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- EXPERIENCE & EDUCATION SECTION -->
    <section id="experience" class="py-20 px-4 sm:px-6 lg:px-8 border-t border-slate-800/60">
      <div class="max-w-6xl mx-auto space-y-12">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
          <span class="px-3.5 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-mono font-medium">REKAM JEJAK</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Pengalaman & Pendidikan</h2>
          <p class="text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">Perjalanan profesional dan latar belakang akademik dalam membangun karir teknologi.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
          
          <!-- Career Experience Timeline -->
          <div class="space-y-6">
            <div class="flex items-center gap-2.5 text-white font-bold text-xl border-b border-slate-800 pb-3">
              <i data-lucide="briefcase" class="w-5 h-5 text-brand-400"></i>
              <span>Pengalaman Kerja</span>
            </div>

            <div class="relative pl-6 border-l-2 border-slate-800 space-y-8">
              
              <!-- Item 1 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-brand-500 border-4 border-slate-900 group-hover:scale-125 transition-transform"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">Senior Frontend / Fullstack Developer</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-brand-500/20 text-brand-300">2024 - Sekarang</span>
                  </div>
                  <div class="text-xs text-brand-400 font-medium">Tech Solutions Inc.</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Memimpin pengembangan arsitektur antarmuka aplikasi web berskala enterprise, meningkatkan performa Core Web Vitals hingga 40%, serta membimbing tim developer junior.
                  </p>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-600 border-4 border-slate-900 group-hover:bg-brand-400 group-hover:scale-125 transition-all"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">Web Developer & UI Designer</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-slate-800 text-slate-400">2022 - 2024</span>
                  </div>
                  <div class="text-xs text-brand-400 font-medium">Digital Studio & Agency</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Merancang dan mengimplementasikan 15+ website klien berbasis React & Tailwind, mengintegrasikan sistem pembayaran dan API pihak ketiga dengan aman.
                  </p>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-600 border-4 border-slate-900 group-hover:bg-brand-400 group-hover:scale-125 transition-all"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">Freelance Software Developer</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-slate-800 text-slate-400">2021 - 2022</span>
                  </div>
                  <div class="text-xs text-brand-400 font-medium">Mandiri / Remote</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Mengerjakan berbagai proyek kustom mulai dari landing page interaktif, company profile, hingga integrasi database untuk UMKM dan startup lokal.
                  </p>
                </div>
              </div>

            </div>
          </div>

          <!-- Education & Certifications Timeline -->
          <div class="space-y-6">
            <div class="flex items-center gap-2.5 text-white font-bold text-xl border-b border-slate-800 pb-3">
              <i data-lucide="graduation-cap" class="w-5 h-5 text-emerald-400"></i>
              <span>Pendidikan & Sertifikasi</span>
            </div>

            <div class="relative pl-6 border-l-2 border-slate-800 space-y-8">
              
              <!-- Item 1 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-emerald-500 border-4 border-slate-900 group-hover:scale-125 transition-transform"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">Sarjana Ilmu Komputer / Teknik Informatika</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300">Lulus</span>
                  </div>
                  <div class="text-xs text-emerald-400 font-medium">Universitas Terkemuka</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Fokus studi pada Rekayasa Perangkat Lunak, Struktur Data & Algoritma, Basis Data, dan Interaksi Manusia & Komputer.
                  </p>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-600 border-4 border-slate-900 group-hover:bg-emerald-400 group-hover:scale-125 transition-all"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">Certified Fullstack Web Engineer</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-slate-800 text-slate-400">Sertifikasi</span>
                  </div>
                  <div class="text-xs text-emerald-400 font-medium">Platform Sertifikasi Global</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Penguasaan standar arsitektur REST, GraphQL, asynchronous programming, microservices, dan automated testing.
                  </p>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="relative group">
                <div class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-slate-600 border-4 border-slate-900 group-hover:bg-emerald-400 group-hover:scale-125 transition-all"></div>
                <div class="space-y-1.5">
                  <div class="flex items-center justify-between">
                    <h3 class="font-bold text-white text-base">UI/UX Design Specialization</h3>
                    <span class="text-xs font-mono px-2 py-0.5 rounded bg-slate-800 text-slate-400">Sertifikasi</span>
                  </div>
                  <div class="text-xs text-emerald-400 font-medium">Design Academy</div>
                  <p class="text-xs sm:text-sm text-slate-400 leading-relaxed pt-1">
                    Prinsip desain pengalaman pengguna, aksesibilitas WCAG, heuristik evaluasi, dan pembuatan atomic design system.
                  </p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 border-t border-slate-800/60 bg-slate-900/40">
      <div class="max-w-6xl mx-auto space-y-12">
        
        <!-- Section Header -->
        <div class="text-center space-y-3">
          <span class="px-3.5 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-mono font-medium">HUBUNGI SAYA</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Mari Berkolaborasi!</h2>
          <p class="text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">Punya ide proyek, tawaran pekerjaan, atau sekadar ingin berdiskusi? Jangan ragu untuk mengirim pesan.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
          
          <!-- Left Column: Contact Cards -->
          <div class="lg:col-span-5 space-y-4">
            
            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/60 flex items-center justify-between hover:border-brand-500/50 transition-all">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center">
                  <i data-lucide="mail" class="w-6 h-6"></i>
                </div>
                <div>
                  <div class="text-xs text-slate-400">Email Pribadi</div>
                  <div class="text-sm font-bold text-white" id="emailText">aqrizayogi@gmail.com</div>
                </div>
              </div>
              <button onclick="copyToClipboard('aqrizayogi@gmail.com', 'Email berhasil disalin!')" class="p-2 rounded-lg bg-slate-700/70 hover:bg-brand-600 text-slate-300 hover:text-white transition-all text-xs font-medium" title="Salin Email">
                <i data-lucide="copy" class="w-4 h-4"></i>
              </button>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/60 flex items-center justify-between hover:border-emerald-500/50 transition-all">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center">
                  <i data-lucide="phone-call" class="w-6 h-6"></i>
                </div>
                <div>
                  <div class="text-xs text-slate-400">WhatsApp / Telepon</div>
                  <div class="text-sm font-bold text-white" id="phoneText">+62 812-3456-7890</div>
                </div>
              </div>
              <button onclick="copyToClipboard('+6281234567890', 'Nomor telepon berhasil disalin!')" class="p-2 rounded-lg bg-slate-700/70 hover:bg-emerald-600 text-slate-300 hover:text-white transition-all text-xs font-medium" title="Salin Nomor">
                <i data-lucide="copy" class="w-4 h-4"></i>
              </button>
            </div>

            <div class="p-5 rounded-2xl bg-slate-800/60 border border-slate-700/60 flex items-center justify-between hover:border-brand-accent/50 transition-all">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-brand-accent/10 text-brand-accent flex items-center justify-center">
                  <i data-lucide="map-pin" class="w-6 h-6"></i>
                </div>
                <div>
                  <div class="text-xs text-slate-400">Lokasi</div>
                  <div class="text-sm font-bold text-white">Indonesia (Open to Remote / On-site)</div>
                </div>
              </div>
            </div>

            <!-- Social Links Grid -->
            <div class="p-5 rounded-2xl bg-slate-800/40 border border-slate-800 space-y-3">
              <div class="text-xs font-mono text-slate-400 uppercase tracking-wider">Temukan saya di media sosial:</div>
              <div class="flex items-center gap-3">
                <a href="https://github.com" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-800 hover:bg-brand-600 text-slate-300 hover:text-white text-xs font-semibold flex items-center justify-center gap-2 transition-all">
                  <i data-lucide="github" class="w-4 h-4"></i>
                  <span>GitHub</span>
                </a>
                <a href="https://linkedin.com" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-800 hover:bg-blue-600 text-slate-300 hover:text-white text-xs font-semibold flex items-center justify-center gap-2 transition-all">
                  <i data-lucide="linkedin" class="w-4 h-4"></i>
                  <span>LinkedIn</span>
                </a>
                <a href="https://instagram.com" target="_blank" class="flex-1 py-2.5 rounded-xl bg-slate-800 hover:bg-pink-600 text-slate-300 hover:text-white text-xs font-semibold flex items-center justify-center gap-2 transition-all">
                  <i data-lucide="instagram" class="w-4 h-4"></i>
                  <span>Instagram</span>
                </a>
              </div>
            </div>

          </div>

          <!-- Right Column: Interactive Form -->
          <div class="lg:col-span-7">
            <form id="contactForm" class="p-6 sm:p-8 rounded-3xl bg-slate-800/70 border border-slate-700/70 space-y-5 shadow-xl backdrop-blur-xl">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1.5">
                  <label for="name" class="text-xs font-medium text-slate-300">Nama Anda <span class="text-rose-400">*</span></label>
                  <input type="text" id="name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 text-white text-sm outline-none transition-all placeholder:text-slate-500" />
                </div>
                <div class="space-y-1.5">
                  <label for="email" class="text-xs font-medium text-slate-300">Alamat Email <span class="text-rose-400">*</span></label>
                  <input type="email" id="email" required placeholder="nama@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 text-white text-sm outline-none transition-all placeholder:text-slate-500" />
                </div>
              </div>

              <div class="space-y-1.5">
                <label for="subject" class="text-xs font-medium text-slate-300">Subjek Pesan <span class="text-rose-400">*</span></label>
                <input type="text" id="subject" required placeholder="Contoh: Diskusi Proyek Website E-Commerce" class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 text-white text-sm outline-none transition-all placeholder:text-slate-500" />
              </div>

              <div class="space-y-1.5">
                <label for="message" class="text-xs font-medium text-slate-300">Isi Pesan <span class="text-rose-400">*</span></label>
                <textarea id="message" rows="4" required placeholder="Ceritakan detail proyek atau pertanyaan Anda di sini..." class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 text-white text-sm outline-none transition-all placeholder:text-slate-500 resize-none"></textarea>
              </div>

              <button type="submit" id="submitBtn" class="w-full py-3.5 px-6 rounded-xl bg-gradient-to-r from-brand-600 to-brand-500 hover:from-brand-500 hover:to-brand-600 text-white font-bold text-sm flex items-center justify-center gap-2 shadow-lg shadow-brand-600/30 hover:shadow-brand-500/40 hover:-translate-y-0.5 transition-all">
                <i data-lucide="send" class="w-4 h-4"></i>
                <span>Kirim Pesan Sekarang</span>
              </button>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="border-t border-slate-800 bg-slate-950 py-10 px-4 sm:px-6 lg:px-8 text-slate-400 text-xs">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-2 font-mono">
        <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
        <span class="text-slate-300 font-semibold">Aqriza Yogi Firdaus</span>
        <span>— © 2026 Seluruh Hak Cipta Dilindungi.</span>
      </div>

      <div class="flex items-center gap-6">
        <a href="#home" class="hover:text-brand-400 transition-colors">Beranda</a>
        <a href="#about" class="hover:text-brand-400 transition-colors">Tentang</a>
        <a href="#projects" class="hover:text-brand-400 transition-colors">Proyek</a>
        <a href="#contact" class="hover:text-brand-400 transition-colors">Kontak</a>
      </div>
    </div>
  </footer>

  <!-- PROJECT DETAIL MODAL -->
  <div id="projectModal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4 sm:px-6 transition-all duration-300">
    <div class="relative bg-slate-900 border border-slate-700 rounded-3xl max-w-2xl w-full p-6 sm:p-8 space-y-6 shadow-2xl max-h-[90vh] overflow-y-auto">
      
      <!-- Close Button -->
      <button onclick="closeProjectModal()" class="absolute top-5 right-5 p-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-400 hover:text-white transition-colors">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <!-- Modal Content Header -->
      <div class="space-y-2">
        <span id="modalCategory" class="px-2.5 py-1 rounded-md bg-brand-500/20 text-brand-300 text-xs font-mono">Kategori</span>
        <h3 id="modalTitle" class="text-2xl font-extrabold text-white">Judul Proyek</h3>
      </div>

      <!-- Modal Body -->
      <div id="modalDescription" class="text-slate-300 text-sm leading-relaxed space-y-3">
        <!-- Injected via JavaScript -->
      </div>

      <!-- Tech Stack Used -->
      <div class="space-y-2">
        <h4 class="text-xs font-mono text-slate-400 uppercase tracking-wider">Teknologi yang Digunakan:</h4>
        <div id="modalTechStack" class="flex flex-wrap gap-2">
          <!-- Injected via JavaScript -->
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800">
        <button onclick="closeProjectModal()" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold">Tutup</button>
        <a id="modalDemoLink" href="#" target="_blank" class="px-5 py-2 rounded-xl bg-brand-600 hover:bg-brand-500 text-white text-xs font-semibold flex items-center gap-1.5 shadow-md">
          <span>Kunjungi Tautan</span>
          <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- TOAST NOTIFICATION -->
  <div id="toastNotification" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 pointer-events-none transition-all duration-300 flex items-center gap-3 px-4 py-3 rounded-2xl bg-slate-900/95 border border-brand-500/50 text-white shadow-2xl backdrop-blur-xl">
    <div class="w-7 h-7 rounded-xl bg-brand-500/20 text-brand-400 flex items-center justify-center">
      <i data-lucide="check" class="w-4 h-4"></i>
    </div>
    <span id="toastMessage" class="text-xs sm:text-sm font-medium">Pesan Berhasil!</span>
  </div>

  <!-- Custom JavaScript -->
  <script src="script.js"></script>
</body>
</html>
