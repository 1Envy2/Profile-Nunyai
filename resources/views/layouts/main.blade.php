<!DOCTYPE html>
<html lang="id" class="selection:bg-[#72891B]/30 selection:text-[#442D1C] overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Kelurahan Nunyai</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'nunyai-brown': '#84592B',
                'nunyai-green': '#72891B',
                'nunyai-bg': '#E8D1A7',
                'nunyai-text': '#442D1C',
              },
              animation: {
                'fade-up': 'fadeInUp 0.6s ease-out forwards',
              },
              keyframes: {
                fadeInUp: {
                  '0%': { opacity: '0', transform: 'translateY(10px)' },
                  '100%': { opacity: '1', transform: 'translateY(0)' },
                }
              }
            }
          }
        }
    </script>

    <style>
        /* Mengunci horizontal scroll secara global */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            background-color: #E8D1A7;
            color: #442D1C;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        /* Custom Scrollbar - Menyesuaikan Palette #84592B */
        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #84592B; 
            border-radius: 10px;
        }

        /* Navbar Underline Effect */
        .nav-underline { position: relative; }
        .nav-underline::after {
            content: ''; 
            position: absolute; 
            width: 0; 
            height: 2px; 
            bottom: -4px; 
            left: 0;
            background-color: #72891B; 
            transition: width 0.3s ease;
        }
        .nav-underline:hover::after, .nav-active::after { width: 100%; }

        /* Mencegah highlight biru saat klik di mobile */
        * { -webkit-tap-highlight-color: transparent; }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased overflow-x-hidden">

    @include('layouts.navbar')

    <main class="flex-grow flex flex-col w-full overflow-x-hidden">
        {{-- Yield Content diletakkan di dalam div animasi --}}
        <div class="animate-fade-up w-full">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')

    @stack('modals')

    @stack('scripts')

</body>
</html>