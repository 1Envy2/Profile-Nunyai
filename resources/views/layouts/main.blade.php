<!DOCTYPE html>
<html lang="id" class="selection:bg-nunyai-green/30 selection:text-nunyai-text">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
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
                'fade-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
              },
              keyframes: {
                fadeInUp: {
                  '0%': { opacity: '0', transform: 'translateY(20px)' },
                  '100%': { opacity: '1', transform: 'translateY(0)' },
                }
              }
            }
          }
        }
    </script>

    <style>
        /* Custom Scrollbar - Nunyai Theme */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(68, 45, 28, 0.05); /* nunyai-text with low opacity */
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #84592B; 
            border-radius: 20px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #72891B;
        }

        /* Smooth UI Elements */
        .fade-in { 
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; 
        }
        
        /* Navbar Hover Effect */
        .nav-underline { position: relative; }
        .nav-underline::after {
            content: ''; 
            position: absolute; 
            width: 0; 
            height: 2px; 
            bottom: -4px; 
            left: 0;
            background-color: #72891B; 
            transition: width 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-underline:hover::after, .nav-active::after { width: 100%; }

        html { 
            scroll-behavior: smooth;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #E8D1A7;
            color: #442D1C;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased overflow-x-hidden custom-scrollbar">

    {{-- Header / Navigation --}}
    @include('layouts.navbar')

    {{-- Main Content --}}
    <main class="flex-grow">
        {{-- Container diatur di masing-masing view untuk fleksibilitas --}}
        <div class="animate-fade-up">
            @yield('content')
        </div>
    </main>

    {{-- Footer Area --}}
    @include('layouts.footer')

    {{-- Push Modals from other views --}}
    @stack('modals')

    {{-- Global Scripts --}}
    @stack('scripts')
</body>
</html>