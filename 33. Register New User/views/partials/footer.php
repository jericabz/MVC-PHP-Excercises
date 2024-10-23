</div>

<script>
        const dropdownButton = document.getElementById('user-menu-button');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.remove('hidden');
                dropdownMenu.classList.add('transition', 'ease-out', 'duration-100');
                dropdownMenu.classList.remove('transform', 'opacity-0', 'scale-95');
                dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
            } else {
                dropdownMenu.classList.add('transition', 'ease-in', 'duration-75');
                dropdownMenu.classList.remove('transform', 'opacity-100', 'scale-100');
                dropdownMenu.classList.add('transform', 'opacity-0', 'scale-95');
                setTimeout(() => {
                    dropdownMenu.classList.add('hidden');
                }, 75); // Duration of the "ease-in" transition
            }
        });
    </script>
</body>
</html>