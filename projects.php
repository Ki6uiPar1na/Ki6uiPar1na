<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects - Md. Tanim Ishrak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">All Submitted Projects</h1>

        <div id="projects" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"></div>

        <p id="no-projects" class="hidden text-center text-gray-600 mt-4">No projects submitted yet.</p>
        <p id="data-error" class="hidden text-center text-red-600 mt-4">Projects data not available.</p>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            fetch('projects.json')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(projects => {
                    const projectsContainer = document.getElementById('projects');
                    const noProjectsMessage = document.getElementById('no-projects');
                    const dataErrorMessage = document.getElementById('data-error');

                    if (projects.length > 0) {
                        projects.forEach(project => {
                            const projectCard = document.createElement('div');
                            projectCard.className = 'bg-white shadow-md rounded-lg p-4';
                            
                            projectCard.innerHTML = `
                                <img src="${project.photo}" alt="Project Photo" class="w-full h-48 object-cover rounded-lg mb-4">
                                <h2 class="text-xl font-semibold">${project.title}</h2>
                                <p class="text-gray-700">${project.info}</p>
                                <a href="${project.link}" target="_blank" class="text-blue-600 underline">View Project</a>
                            `;
                            
                            projectsContainer.appendChild(projectCard);
                        });
                    } else {
                        noProjectsMessage.classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error('Error fetching projects:', error);
                    document.getElementById('data-error').classList.remove('hidden');
                });
        });
    </script>

</body>
</html>
