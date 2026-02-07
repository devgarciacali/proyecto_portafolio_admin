<?php
require_once "admin/modelos/main.modelo.php";
require_once "admin/controladores/main.controlador.php";

$post = 'id';
$item_post = 1;
$respuesta_post = ControladorMain::ctrMostrarMain($item_post, $post);
?>

<!-- MAIN CONFIGURACION DE DESCRIPCION - foto de perfil -->
<main>
    <section class="min-h-screen flex items-center pt-20 px-6 max-w-7xl mx-auto" id="inicio">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-6 border border-primary/20"><?= $respuesta_post['especialidad'] ?></span>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Hola, soy <span
                        class="bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent"><?=$respuesta_post['nombre']?></span>
                </h1>
                <p class="text-gray-400 text-lg md:text-xl mb-10 max-w-xl">
                    <?= $respuesta_post['descripcion'] ?>
                </p>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="px-8 py-3 rounded-xl bg-primary text-dark font-bold hover:bg-white hover:shadow-[0_0_30px_rgba(0,212,255,0.4)] transition-all duration-300"
                        onclick="scrollToProjects()">Explorar Proyectos</button>
                    <a href="pdf/josemanuelgarcia.pdf" download
                        class="px-8 py-3 rounded-xl border border-white/20 bg-white/5 backdrop-blur-md hover:bg-white/10 transition-all duration-300 flex items-center gap-2">
                        📄 Descargar CV
                    </a>
                    <a href="https://www.facebook.com/share/1C43ZrcNLV/"
                        class="px-8 py-3 rounded-xl border border-white/20 bg-white/5 backdrop-blur-md hover:bg-white/10 transition-all duration-300 flex items-center gap-2"
                        target="_blank">
                        <i class="fab fa-facebook"></i> Facebook
                    </a>
                </div>
            </div>
            <div class="relative group max-w-sm mx-auto md:ml-auto" data-aos="fade-left" data-aos-duration="1000">
                <div
                    class="absolute -inset-4 bg-gradient-to-r from-primary to-secondary rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000">
                </div>
                <div class="relative overflow-hidden rounded-3xl border border-white/10 aspect-[4/5]">
                    <!-- FOTO DE PERFIL -->
                    <img src="admin/<?= $respuesta_post['linkfoto'] ?>" alt="Jose Manuel Garcia"
                        class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                    <!-- Gradient Overlay (Fade effect) -->
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col items-center mb-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">Proyectos Destacados</h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-primary to-secondary rounded-full" data-aos="fade-up"
                data-aos-delay="100"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsContainer">
            <!-- Se poblará vía app.js -->
        </div>
    </section>

    <section id="experiencia"
        class="py-24 px-6 max-w-7xl mx-auto bg-white/5 backdrop-blur-sm rounded-[3rem] border border-white/5 my-12">
        <div class="flex flex-col items-center mb-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">Experiencia Laboral</h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-primary to-secondary rounded-full" data-aos="fade-up"
                data-aos-delay="100"></div>
        </div>

        <div
            class="relative space-y-12 before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-primary/50 before:to-transparent">

            <!-- Item 1 -->
            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group"
                data-aos="fade-up">
                <div
                    class="flex items-center justify-center w-10 h-10 rounded-full border border-primary/50 bg-dark text-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div
                    class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl border border-white/10 bg-dark-lighter/50 backdrop-blur-md hover:border-primary/50 transition-colors duration-300">
                    <div class="flex items-center justify-between space-x-2 mb-1">
                        <h3 class="font-bold text-white text-xl">Desarrollador Web Freelance</h3>
                        <time class="text-xs font-semibold text-primary uppercase">Diciembre-2025 - Actualidad</time>
                    </div>
                    <div class="text-primary/80 font-medium mb-3">Sistema de Gestión de Cursos para la Cecati 165</div>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc list-inside">
                        <li>Se desarrolla un sistema de gestión de cursos para la Cecati 165</li>
                        <h5 class="text-primary/80 font-medium mb-3">Tecnologías Utilizadas:</h5>
                        <li>Laravel</li>
                        <li>PHP</li>
                        <li>Tailwind CSS</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                        <li>Git</li>
                        <li>GitHub</li>
                        <li>ckEditor</li>
                        <li>Composer</li>
                    </ul>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group"
                data-aos="fade-up">
                <div
                    class="flex items-center justify-center w-10 h-10 rounded-full border border-primary/50 bg-dark text-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                    <i class="fas fa-microchip"></i>
                </div>
                <div
                    class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl border border-white/10 bg-dark-lighter/50 backdrop-blur-md hover:border-primary/50 transition-colors duration-300">
                    <div class="flex items-center justify-between space-x-2 mb-1">
                        <h3 class="font-bold text-white text-xl">Desarrollador FullStack</h3>
                        <time class="text-xs font-semibold text-primary uppercase">Octubre-2024 - Enero-2025</time>
                    </div>
                    <div class="text-primary/80 font-medium mb-3">Proyecto Personal - Pantilla Interactiva</div>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc list-inside">
                        <li>Desarrollo de plantilla interactiva para paginas web.</li>
                        <li>Optimización SEO técnico básico.</li>
                        <h5 class="text-white/80 font-medium mb-3">Tecnologías Utilizadas:</h5>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>SbAdmin</li>
                        <li>Bootstrap</li>
                        <li>jQuery</li>
                        <li>Ajax</li>
                        <li>MySQL</li>
                        <li>VSCode</li>
                    </ul>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group"
                data-aos="fade-up">
                <div
                    class="flex items-center justify-center w-10 h-10 rounded-full border border-primary/50 bg-dark text-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                    <i class="fas fa-server"></i>
                </div>
                <div
                    class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl border border-white/10 bg-dark-lighter/50 backdrop-blur-md hover:border-primary/50 transition-colors duration-300">
                    <div class="flex items-center justify-between space-x-2 mb-1">
                        <h3 class="font-bold text-white text-xl">Desarrollador Full Stack</h3>
                        <time class="text-xs font-semibold text-primary uppercase">Abril-2024 - Septiembre-2024</time>
                    </div>
                    <div class="text-primary/80 font-medium mb-3">Empresa CECATI 165</div>
                    <ul class="text-gray-400 text-sm space-y-2 list-disc list-inside">
                        <li>Desarrollo de asistente inteligente con Arduino.</li>
                        <li>Control de arduino y gestión de información.</li>
                        <li>Resolución de problemas de hardware y software.</li>
                        <h5 class="text-white/80 font-medium mb-3">Tecnologías Utilizadas:</h5>
                        <li>Arduino</li>
                        <li>Proteus</li>
                        <li>Arduino IDE</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="habilidades" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col items-center mb-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">Habilidades Técnicas</h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-primary to-secondary rounded-full" data-aos="fade-up"
                data-aos-delay="100"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
            <!-- Skill items with hover animation -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="0">
                <i class="fab fa-html5 text-4xl text-[#E34F26] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">HTML5</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="50">
                <i class="fab fa-css3-alt text-4xl text-[#1572B6] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">CSS3</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="100">
                <i class="fab fa-js text-4xl text-[#F7DF1E] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">JavaScript</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="150">
                <i class="fab fa-laravel text-4xl text-[#FF2D20] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Laravel</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="200">
                <i class="fab fa-php text-4xl text-[#777BB4] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">PHP</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="250">
                <i class="fas fa-database text-4xl text-[#4479A1] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">MySQL</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="300">
                <i class="fab fa-docker text-4xl text-[#2496ED] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Docker</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="300">
                <i class="fas fa-wind text-4xl text-[#38B2AC] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Tailwind</span>
            </div>
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="350">
                <i class="fas fa-rocket text-4xl text-[#FF5D01] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Astro</span>
            </div>

            <!-- Java -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="400">
                <i class="fab fa-java text-4xl text-[#E76F00] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Java</span>
            </div>

            <!-- VS Code -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="450">
                <i class="fas fa-code text-4xl text-[#007ACC] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">VS Code</span>
            </div>

            <!-- Android Studio -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="500">
                <i class="fab fa-android text-4xl text-[#3DDC84] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Android Studio</span>
            </div>

            <!-- Livewire -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center"
                data-aos="zoom-in" data-aos-delay="550">
                <i class="fas fa-bolt text-4xl text-[#FB70A9] group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Livewire</span>
            </div>

            <!-- Antigravity AI -->
            <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/50 hover:bg-primary/5 transition-all duration-300 flex flex-col items-center gap-4 text-center border-2 border-primary/30 shadow-[0_0_15px_rgba(0,212,255,0.2)]"
                data-aos="zoom-in" data-aos-delay="600">
                <i class="fas fa-robot text-4xl text-primary group-hover:scale-110 transition-transform"></i>
                <span class="text-sm font-semibold">Antigravity AI</span>
            </div>
        </div>
    </section>

    <section id="contacto" class="py-24 px-6 max-w-4xl mx-auto text-center">
        <div class="bg-gradient-to-br from-primary/10 to-secondary/10 p-12 rounded-[3rem] border border-white/10 backdrop-blur-xl relative overflow-hidden"
            data-aos="zoom-in">
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-primary/20 blur-[80px] rounded-full"></div>
            <div class="relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">¿Hablamos?</h2>
                <p class="text-gray-400 text-lg mb-10">Si tienes un proyecto en mente o simplemente quieres saludar,
                    ¡estoy a un clic de distancia!</p>
                <div class="flex justify-center gap-6">
                    <a href="https://github.com/devgarciacali"
                        class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-2xl text-white hover:bg-primary hover:text-dark hover:border-primary transition-all duration-300"
                        target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="mailto:kadashuhia@gmail.com"
                        class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-2xl text-white hover:bg-primary hover:text-dark hover:border-primary transition-all duration-300">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://www.tiktok.com/@_eldelam_"
                        class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-2xl text-white hover:bg-primary hover:text-dark hover:border-primary transition-all duration-300"
                        target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a href="https://www.facebook.com/share/1C43ZrcNLV/"
                        class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-2xl text-white hover:bg-primary hover:text-dark hover:border-primary transition-all duration-300"
                        target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/527701281485"
                        class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-2xl text-white hover:bg-primary hover:text-dark hover:border-primary transition-all duration-300"
                        target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>