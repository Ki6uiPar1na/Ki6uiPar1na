<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Md. Khairul Islam</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <?php include 'header.php'; ?>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <!-- Left column for text -->
                <div class="md:w-2/3">
                    <h1 class="text-4xl font-bold mb-6">About Me</h1>
                    <p class="text-lg leading-relaxed mb-4">
                        I’m a Computer Science undergraduate student with a passion for competitive programming and cybersecurity. 
                        My goal is to contribute to solving real-world problems through technology.
                    </p>
                    
                    <h2 class="text-2xl font-semibold mt-8 mb-4">Skills</h2>
                    <ul class="list-disc pl-5">
                        <li>Programming Languages: C++, Python, Java, PHP</li>
                        <li>Web Development: HTML, CSS, JavaScript, PHP</li>
                        <li>Cybersecurity: Ethical Hacking, Penetration Testing</li>
                    </ul>

                    <h2 class="text-2xl font-semibold mt-8 mb-4">Education</h2>
                    <p>BSc in Computer Science, Nazrul University</p>
                </div>

                <!-- Right column for image -->
                <div class="md:w-1/3 mt-8 md:mt-0 md:pl-12">
                    <img src="https://z-p3-scontent.fdac12-1.fna.fbcdn.net/v/t39.30808-6/245404139_579702226607795_8274716143041984985_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=f727a1&_nc_eui2=AeEZPwJBDpWLvU7L_PibNPNu3Pl1ReZKGt3c-XVF5koa3VR_o3cVX6j9pAzS0P5LH99l8f2y2d7UCyi5_Xjnv7CX&_nc_ohc=qUDHvvYO-_8Q7kNvgHoPf9Z&_nc_ht=z-p3-scontent.fdac12-1.fna&_nc_gid=AIt7rx-KkH2jYJd41DTmFGG&oh=00_AYAjvdsyVDWsgUFTPVBs9RHTsJAFLNbyC0i6E1xfqafidQ&oe=670B6435" alt="About Me Image" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
