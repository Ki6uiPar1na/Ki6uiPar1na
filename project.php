<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Submission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Submit Your Project</h1>
        <form action="submit_project.php" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Project Title</label>
                <input type="text" id="title" name="title" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Upload Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-gray-700">Project Link</label>
                <input type="url" id="link" name="link" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="info" class="block text-sm font-medium text-gray-700">Additional Information</label>
                <textarea id="info" name="info" rows="4" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700">Submit Project</button>
        </form>
    </div>
</body>

</html>
