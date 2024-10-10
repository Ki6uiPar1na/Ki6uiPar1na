<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Md. Tanim Ishrak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-gray-100 text-gray-900 min-h-screen">

    <?php include 'header.php'; ?>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6 text-blue-600">Get in Touch</h1>
                <p class="text-xl text-gray-700 mb-8">Feel free to reach out through the form or connect with me on my social platforms below!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Contact Form</h2>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-lg font-semibold">Name</label>
                            <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-lg font-semibold">Email</label>
                            <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-lg font-semibold">Message</label>
                            <textarea id="message" name="message" rows="4" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 px-4 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 transition">Send Message</button>
                    </form>
                </div>

                <!-- Contact Details & Social Links -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Contact Information</h2>
                    <div class="space-y-4">
                        <p class="flex items-center text-lg">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m0 0v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8m18 0L12 13 3 8"></path>
                            </svg>
                            <a href="mailto:youremail@example.com" class="hover:underline">khairulislamtushar33@gmail.com</a>
                        </p>
                        <p class="flex items-center text-lg">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.55 1.51-1.385 2.885-2.458 4A9.965 9.965 0 0112 19c-4.478 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            +123 456 7890
                        </p>
                    </div>

                    <h3 class="text-xl font-bold mt-8 mb-4">Connect with Me</h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com/Ki6uiPar1na" class="text-gray-600 hover:text-blue-600" target="_blank">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 00-3.16 19.47c.5.09.68-.22.68-.48v-1.7c-2.77.61-3.36-1.34-3.36-1.34-.46-1.18-1.12-1.5-1.12-1.5-.91-.62.07-.61.07-.61 1 .07 1.53 1.02 1.53 1.02.9 1.54 2.37 1.1 2.95.84.09-.65.35-1.1.63-1.36-2.21-.25-4.55-1.1-4.55-4.92 0-1.08.39-1.96 1.02-2.65-.1-.26-.44-1.3.1-2.7 0 0 .83-.26 2.72 1.02A9.47 9.47 0 0112 7.1a9.53 9.53 0 012.47.33c1.88-1.28 2.72-1.02 2.72-1.02.55 1.4.21 2.44.1 2.7.63.69 1.02 1.57 1.02 2.65 0 3.83-2.34 4.66-4.57 4.9.36.31.68.92.68 1.86v2.76c0 .27.18.58.69.48A10 10 0 0012 2z"></path>
                            </svg>
                        </a>
                        <a href="https://linkedin.com/in/mdkhairulislamtushar" class="text-gray-600 hover:text-blue-600" target="_blank">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-4 0v7h-4v-7a6 6 0 016-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="https://twitter.com/yourtwitter" class="text-gray-600 hover:text-blue-600" target="_blank">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 6.29V7a4.48 4.48 0 004 4.57A4.5 4.5 0 0112 11v1a4.48 4.48 0 004 4.57A8.56 8.56 0 012 17a11.32 11.32 0 006.29 1.84c7.64 0 11.81-6.33 11.81-11.81l-.01-.54A8.18 8.18 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="https://facebook.com/mdkhairulilamtushar" class="text-gray-600 hover:text-blue-600" target="_blank">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.88v-6.988h-2.54v-2.727h2.54V9.745c0-2.507 1.492-3.89 3.774-3.89 1.095 0 2.24.195 2.24.195v2.46h-1.262c-1.244 0-1.631.772-1.631 1.563v1.87h2.773l-.444 2.727h-2.329v6.988C18.343 21.128 22 16.991 22 12z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>
