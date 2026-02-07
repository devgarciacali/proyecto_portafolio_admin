const projects = [
    {
        title: "Astronauta en Apuros",
        description: "Un juego educativo diseñado para niños, con una estética de pixel art cautivadora y mecánicas interactivas.",
        tags: ["HTML", "CSS", "JavaScript"],
        github: "https://github.com/devgarciacali/Atranauta_en_apuros",
        image: "img/astronauta.png" 
    },
    {
        title: "Gestión Cecati 165",
        description: "Sistema administrativo integral para la gestión de cursos, alumnos y reportes, optimizando procesos internos.",
        tags: ["Laravel", "MySQL", "Bootstrap", "JavaScript"],
        github: "https://github.com/devgarciacali/blog",
        image: "img/blogcurso.png" 
    },
    {
        title: "Plantilla Interactiva",
        description: "Landing page dinámica y altamente personalizable con scroll interactivo y diseño responsivo premium.",
        tags: ["PHP", "MySQL", "Bootstrap", "jQuery"],
        github: "https://github.com/devgarciacali/coyuca_pagina",
        image: "img/dinamico.png"
    },
     {
        title: "Icommerce Basico Con Integracion de IA",
        description: "Icommerce basico con integracion de IA para la informacion de productos y precios.",
        tags: ["PHP", "Laravel", "MySQL", "Tailwind", "JavaScript", "IA(groq)", "Prism"],
        github: "https://github.com/devgarciacali/ia-icommerce",
        image: "img/produ.png"
    },
];

function renderProjects() {
    const container = document.getElementById('projectsContainer');
    if (!container) return;

    container.innerHTML = projects.map((project, index) => {
        const tagElements = project.tags.map(tag => `
            <span class="px-2 py-1 rounded-md bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider border border-primary/20">
                ${tag}
            </span>
        `).join('');

        return `
            <div class="group relative bg-dark-lighter/40 backdrop-blur-md rounded-3xl border border-white/10 overflow-hidden hover:border-primary/50 transition-all duration-500" data-aos="fade-up" data-aos-delay="${index * 100}">
                <div class="aspect-video overflow-hidden">
                    <img src="${project.image}" alt="${project.title}" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110 group-hover:rotate-2">
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        ${tagElements}
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">${project.title}</h3>
                    <p class="text-gray-400 text-sm mb-6 line-clamp-2">${project.description}</p>
                    <div class="flex items-center justify-between">
                        <a href="${project.github}" target="_blank" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-white transition-colors">
                            <i class="fab fa-github text-xl"></i>
                            <span>Ver Código</span>
                        </a>
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }).join('');
}

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    renderProjects();
});
