<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SprintOps</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen bg-black text-white">

    <!-- Background Image -->
    <img src="https://zendogmobilespa.com/wp-content/uploads/2018/06/deep-purple-gradient-sparkle-background.jpg" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-40 -z-10">

     <!-- Navbar -->
     <nav class="flex justify-between items-center p-6">
        <div class="flex items-center gap-2">
            <!-- Purple Tree Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-8 h-8 text-purple-500">
                <path d="M12 2C11.2 2 10.5 2.6 10.2 3.3L8.7 7H5c-1.1 0-2 .9-2 2 0 .6.3 1.1.7 1.5L7 14H5c-1.1 0-2 .9-2 2 0 .6.3 1.1.7 1.5L8 21h2v-4h4v4h2l4.3-3.5c.4-.4.7-.9.7-1.5 0-1.1-.9-2-2-2h-2l3.3-3.5c.4-.4.7-.9.7-1.5 0-1.1-.9-2-2-2h-3.7l-1.5-3.7C13.5 2.6 12.8 2 12 2z" />
            </svg>
            <span class="font-bold text-xl">SprintOps</span>
        </div>
        <div class="space-x-4">
            <button class="px-4 py-2 bg-purple-700 rounded-lg hover:bg-purple-800"> <a href="login">Log In</a></button>
            <button class="px-4 py-2 border border-purple-400 rounded-lg hover:bg-purple-700">Sign Up</button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex flex-col items-center justify-center text-center mt-20 px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Create Your Projects More <span class="text-purple-400">efficiently</span></h1>
        <p class="text-gray-300 mb-8 text-lg">Revolutionizing software development with streamlined Sprints and projects</p>
        <div class="flex flex-col md:flex-row gap-4">
            <button class="px-6 py-3 bg-purple-600 hover:bg-purple-700 rounded-lg font-semibold">Discover How it works</button>
            <button class="px-6 py-3 border border-purple-400 hover:bg-purple-700 rounded-lg font-semibold">Get started for Free -></button>
        </div>
    </div>

</body>
</html>
