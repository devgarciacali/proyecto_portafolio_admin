    <footer class="py-12 border-t border-white/10 px-6 text-center text-gray-500">
        <p>&copy; 2025 Jose Manuel Garcia.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init AOS
        AOS.init({
            once: true,
            offset: 100
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 50) {
                header.classList.add('shadow-2xl', 'bg-dark/90');
                header.classList.remove('bg-dark/70');
            } else {
                header.classList.remove('shadow-2xl', 'bg-dark/90');
                header.classList.add('bg-dark/70');
            }
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        function scrollToProjects() {
            document.getElementById('proyectos').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    <script src="js/app.js"></script>
</body>

</html>