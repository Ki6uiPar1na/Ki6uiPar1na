<header class="bg-gray-800 text-white p-4 flex items-center justify-between">
    <div class="flex items-center">
        <img src="https://z-p3-scontent.fdac12-1.fna.fbcdn.net/v/t39.30808-6/444783993_1136560954255250_6434939628237470425_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHFqpOOz-U4XttnNkEIfOfxzF_Y6FS0JsPMX9joVLQmwx-2RoBEhrQZYWTStibbF1wwOuQ2bbqAgt2UlznN3cI8&_nc_ohc=6V-KSd1k3xoQ7kNvgGItsSR&_nc_ht=z-p3-scontent.fdac12-1.fna&_nc_gid=AspjyNf8CzbqmkEhWP_b1rv&oh=00_AYA6NMnUOATWl4bQNwrGK6cpA9aP21S4Jm4KpbgmHR36rg&oe=670CC31F" alt="Profile Picture" class="w-10 h-10 rounded-full mx-5">
        <a href="index.php" class="text-2xl font-bold">Md. Khairul Islam</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="sm:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Menu -->
    <nav class="hidden sm:flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 items-center" id="menu">
        <ul class="flex flex-col sm:flex-row sm:space-x-4">
            <li><a href="index.php" class="hover:text-blue-400">Home</a></li>
            <li><a href="about.php" class="hover:text-blue-400">About Me</a></li>
            <li><a href="competitive_programming.php" class="hover:text-blue-400">Competitive Programming</a></li>
            <li><a href="cybersecurity.php" class="hover:text-blue-400">Cybersecurity</a></li>
            <li><a href="projects.php" class="hover:text-blue-400">Projects</a></li>
            <li><a href="contact.php" class="hover:text-blue-400">Contact</a></li>
        </ul>
    </nav>
</header>

<script>
    // JavaScript to toggle the menu on small screens
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    
    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
