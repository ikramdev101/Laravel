<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create an Account</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-sVjbL6FM3ZjBGoIVbgNKvfU3J1GyzIZ+nb4CTmCcdzD7zMLAqF9qQ0vG3h5eDZ+gzU1V5J7ERyBGckKx9lA+6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#13111C] min-h-screen flex justify-center items-center">
    <div class="bg-[#1c1a29] rounded-[24px] overflow-hidden flex w-[900px] h-[550px] shadow-lg">
        
        <!-- Left Image with Overlay -->
        <div class="relative w-1/2 h-full">
            <img
                class="rounded-l-[24px] w-full h-full object-cover"
                src="https://preview.redd.it/bj1hg05g80241.jpg?width=640&crop=smart&auto=webp&s=abfab5e15ca6d2fb378d0ee01b80abc3c39b3399"
                alt="Background"
            />

            <!-- Overlay content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-4 text-white text-center gap-6">
                <!-- Quote Box -->
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl max-w-xs flex flex-col items-center gap-3">
                    <!-- Maker -->
                    <img src="https://i.pravatar.cc/40?img=3" class="w-8 h-8 rounded-full border border-white" alt="User" />
                    <!-- Quote -->
                    <p id="testimonial" class="italic text-sm transition-opacity duration-700 ease-in-out opacity-100"></p>
                </div>

                <!-- Carousel Dots -->
                <div class="flex gap-2 mt-2">
                    <div class="w-2 h-2 rounded-full bg-white"></div>
                    <div class="w-2 h-2 rounded-full bg-white/50"></div>
                    <div class="w-2 h-2 rounded-full bg-white/50"></div>
                </div>
            </div>
        </div>

        <!-- Right Form -->
        <form method="POST" class="w-1/2 p-8 flex flex-col gap-6 justify-center text-white">
            @csrf

            <div class="text-center">
                <h1 class="font-bold text-2xl">Create an Account</h1>
                <p class="text-sm font-light">
                    Already have an account? 
                    <a href="#" class="text-[#5b21b6] font-bold">Log in</a>
                </p>
            </div>

            <!-- First and Last Name -->
            <div class="flex gap-2">
                <input
                    name="first_name"
                    value="{{ old('first_name') }}"
                    class="bg-[#3B364C] p-2 w-1/2 rounded-md placeholder-gray-400"
                    type="text"
                    placeholder="First Name"
                    required
                />
                <input
                    name="last_name"
                    value="{{ old('last_name') }}"
                    class="bg-[#3B364C] p-2 w-1/2 rounded-md placeholder-gray-400"
                    type="text"
                    placeholder="Last Name"
                    required
                />
            </div>

            <!-- Email -->
            <input
                name="email"
                value="{{ old('email') }}"
                class="bg-[#3B364C] p-2 w-full rounded-md placeholder-gray-400"
                type="email"
                placeholder="Your Email"
                required
            />

            <!-- Password -->
            <div class="bg-[#3B364C] p-2 w-full rounded-md flex justify-between items-center">
                <input
                    name="password"
                    class="bg-transparent w-full placeholder-gray-400"
                    type="password"
                    placeholder="Enter your password"
                    required
                />
                <i class="fas fa-eye text-gray-400 cursor-pointer"></i>
            </div>

            <!-- Terms -->
            <div class="flex gap-2 items-center">
                <input
                    name="terms"
                    type="checkbox"
                    class="h-4 w-4 text-blue-600"
                    required
                />
                <label class="text-sm font-light text-gray-400">
                    I agree to 
                    <a href="#" class="text-[#5b21b6]">terms and conditions</a>
                </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full bg-[#5b21b6] hover:bg-[#4c1d95] p-2 rounded-md font-bold">
                Create an Account
            </button>

            <!-- Divider -->
            <div class="flex items-center gap-2">
                <hr class="border-gray-600 flex-grow" />
                <span class="text-sm text-gray-400">or</span>
                <hr class="border-gray-600 flex-grow" />
            </div>

            <!-- OAuth -->
            <div class="flex flex-col gap-2">
                <button class="w-full bg-white text-black flex items-center justify-center gap-2 p-2 rounded-md hover:bg-gray-100">
                    <i class="fab fa-google"></i> Sign up with Google
                </button>
                <button class="w-full bg-gray-800 flex items-center justify-center gap-2 p-2 rounded-md hover:bg-gray-700">
                    <i class="fa-brands fa-github"></i> Sign up with GitHub
                </button>
            </div>
        </form>
    </div>

    <script>
        const testimonials = [
            "“SprintOps has changed the way I manage my projects.” — Sarah K.",
            "“An incredible platform for DevOps and Project Management!” — Mark T.",
            "“Simple, elegant, and efficient. Highly recommend!” — Julia R."
        ];

        let testimonialIndex = 0;
        const testimonialElement = document.getElementById('testimonial');

        function showNextTestimonial() {
            testimonialElement.style.opacity = 0;

            setTimeout(() => {
                testimonialIndex = (testimonialIndex + 1) % testimonials.length;
                testimonialElement.textContent = testimonials[testimonialIndex];
                testimonialElement.style.opacity = 1;
            }, 500);
        }

        testimonialElement.textContent = testimonials[testimonialIndex];
        setInterval(showNextTestimonial, 4000);

        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
