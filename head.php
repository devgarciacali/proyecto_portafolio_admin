<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- colocar icono -->
    <link rel="icon" href="img/perfil1.jpg">
    <title>Jose Manuel Garcia | Portafolio</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#00d4ff',
                        secondary: '#7000ff',
                        dark: '#0f0f0f',
                        'dark-lighter': '#1a1a1a',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-dark text-gray-200 font-sans selection:bg-primary selection:text-dark overflow-x-hidden">
    <!-- Background Decor -->
    <div class="fixed inset-0 -z-10 bg-dark overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-secondary/20 blur-[120px] rounded-full">
        </div>
    </div>

    <header
        class="fixed top-0 w-full z-50 transition-all duration-300 backdrop-blur-md border-b border-white/10 bg-dark/70"
        id="mainHeader">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center text-white">
            <a href="#"
                class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Jose
                Manuel Garcia</a>

            <ul class="hidden md:flex space-x-8 font-medium bg-gradient-to-r items-center" id="navLinks">
                <li><a href="#inicio" class="hover:text-primary transition-colors">Inicio</a></li>
                <li><a href="#experiencia" class="hover:text-primary transition-colors">Experiencia</a></li>
                <li><a href="#proyectos" class="hover:text-primary transition-colors">Proyectos</a></li>
                <li><a href="#habilidades" class="hover:text-primary transition-colors">Habilidades</a></li>
                <li><a href="#contacto"
                        class="px-5 py-2 rounded-full border border-primary text-primary hover:bg-primary hover:text-dark transition-all duration-300">Contacto</a>
                </li>
            </ul>

            <button class="md:hidden text-primary text-2xl" id="menuToggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-dark/95 backdrop-blur-xl border-b border-white/10 py-6 px-6 flex flex-col space-y-4">
            <a href="#inicio" class="text-lg hover:text-primary transition-colors">Inicio</a>
            <a href="#experiencia" class="text-lg hover:text-primary transition-colors">Experiencia</a>
            <a href="#proyectos" class="text-lg hover:text-primary transition-colors">Proyectos</a>
            <a href="#habilidades" class="text-lg hover:text-primary transition-colors">Habilidades</a>
            <a href="#contacto" class="text-lg hover:text-primary transition-colors">Contacto</a>
        </div>
    </header>
