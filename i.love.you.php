<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project - Md. Tanim Ishrak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-900 min-h-screen flex items-center justify-center">
    <div class="max-w-xl w-full bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Submit Your Project</h1>
        <form action="submit_project.php" method="POST" enctype="multipart/form-data" class="space-y-6">
            
            <!-- Project Title -->
            <div>
                <label for="title" class="block text-gray-700 font-semibold">Project Title:</label>
                <input type="text" name="title" id="title" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            
            <!-- Project Link -->
            <div>
                <label for="link" class="block text-gray-700 font-semibold">Project Link:</label>
                <input type="url" name="link" id="link" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            
            <!-- Project Information -->
            <div>
                <label for="info" class="block text-gray-700 font-semibold">Project Information:</label>
                <textarea name="info" id="info" rows="4" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
            </div>
            
            <!-- Upload Project Photo -->
            <div>
                <label for="photo" class="block text-gray-700 font-semibold">Upload Project Photo:</label>
                <input type="file" name="photo" id="photo" accept="image/*" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-600 hover:file:bg-blue-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>
            
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit Project</button>
            </div>
        </form>
    </div>
</body>

</html>
