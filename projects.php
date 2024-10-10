<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects - Md. Tanim Ishrak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        /* Add a custom hover effect for project cards */
        .project-card:hover {
            transform: translateY(-5px);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
     <?php include 'header.php'; ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-10 text-blue-600">All Submitted Projects</h1>

        <?php
        $projectsFile = 'projects.json';

        if (file_exists($projectsFile)) {
            $projects = json_decode(file_get_contents($projectsFile), true);

            if (!empty($projects)) {
                echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">';
                foreach ($projects as $project) {
                    echo '<div class="project-card bg-white shadow-md rounded-lg p-6 hover:bg-blue-50 transition duration-300 ease-in-out">';
                    echo '<img src="' . htmlspecialchars($project['photo']) . '" alt="Project Photo" class="w-full h-48 object-cover rounded-lg mb-4">';
                    echo '<h2 class="text-2xl font-semibold text-blue-700 mb-2">' . htmlspecialchars($project['title']) . '</h2>';
                    echo '<p class="text-gray-600 mb-4">' . htmlspecialchars($project['info']) . '</p>';
                    echo '<a href="' . htmlspecialchars($project['link']) . '" target="_blank" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">View Project</a>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p class="text-center text-gray-500 text-lg">No projects submitted yet.</p>';
            }
        } else {
            echo '<p class="text-center text-gray-500 text-lg">Projects data not available.</p>';
        }
        ?>
    </div>
</html>
</body>

</html>
