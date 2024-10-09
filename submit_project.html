<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $info = $_POST['info'];

    // Handle file upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploads_dir = 'uploads/';
        $tmp_name = $_FILES['photo']['tmp_name'];
        $name = basename($_FILES['photo']['name']);
        $upload_file = $uploads_dir . $name;

        // Create uploads directory if it doesn't exist
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($tmp_name, $upload_file)) {
            // Store project information in a JSON file
            $projectData = [
                'title' => $title,
                'link' => $link,
                'info' => $info,
                'photo' => $upload_file,
            ];

            // Load existing projects from the JSON file
            $projectsFile = 'projects.json';
            if (file_exists($projectsFile)) {
                $existingProjects = json_decode(file_get_contents($projectsFile), true);
            } else {
                $existingProjects = [];
            }

            // Add the new project to the array
            $existingProjects[] = $projectData;

            // Save the updated projects back to the JSON file
            file_put_contents($projectsFile, json_encode($existingProjects));

            // Redirect to the projects page
            header('Location: projects.php');
            exit();
        } else {
            echo "<h2 class='text-red-600'>Error uploading file.</h2>";
        }
    } else {
        echo "<h2 class='text-red-600'>No file uploaded or upload error.</h2>";
    }
} else {
    echo "<h2 class='text-red-600'>Invalid request.</h2>";
}
?>
