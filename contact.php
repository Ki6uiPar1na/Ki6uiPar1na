<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php';?>
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-6">Contact Us</h1>
            
            <!-- Contact Form -->
            <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-lg font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required class="w-full p-2 border border-gray-300 rounded"></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Send</button>
            </form>
        </div>
    </section>

    <?php include 'footer.php';?>
</body>
</html>
