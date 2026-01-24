<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kelurahan Nunyai</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
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
              }
            }
          }
        }
    </script>
<style>
    /* Animasi Page Load */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .fade-in { animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    
    /* Hover Effect Navbar */
    .nav-underline::after {
        content: ''; 
        position: absolute; 
        width: 0; 
        height: 2px; 
        bottom: -8px; 
        left: 0;
        background-color: #E8D1A7; 
        transition: width 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
.nav-underline:hover::after, .nav-active::after { width: 100%; }

    /* Smooth Scroll */
    html { scroll-behavior: smooth; }
</style>
</head>
<body class="bg-nunyai-bg text-nunyai-text min-h-screen flex flex-col">

    @include('layouts.navbar')

    <main class="flex-grow">
        {{-- Hapus class container mx-auto di sini agar index.blade.php bisa atur max-width sendiri --}}
        <div class="fade-in">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')

    <!-- Modal Global -->
    @stack('modals')

</body>
</html>