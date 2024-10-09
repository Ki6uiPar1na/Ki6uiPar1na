<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project - Md. Tanim Ishrak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8 ">
        <h1 class="text-3xl font-bold mb-6">Submit Your Project</h1>
        <form action="submit_project.php" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Project Title:</label>
                <input type="text" name="title" id="title" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="link" class="block text-gray-700">Project Link:</label>
                <input type="url" name="link" id="link" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="info" class="block text-gray-700">Project Information:</label>
                <textarea name="info" id="info" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700">Upload Project Photo:</label>
                <input type="file" name="photo" id="photo" accept="image/*" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit Project</button>
        </form>
    </div>
</body>

</html>
