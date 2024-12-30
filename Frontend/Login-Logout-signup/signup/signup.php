<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Hotel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <div class="container mx-auto">
        <div class="flex justify-center mt-20">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold mb-4 text-center">Sign Up</h2>
                    <form action="../../../backend/process_signup.php" method="POST" >
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" name="email" id="email" class="mt-1 p-2 block w-full border rounded-md"
                                required>
                            <div id="emailError" class="text-red-500"></div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password"
                                class="mt-1 p-2 block w-full border rounded-md" required>
                            <div id="passwordError" class="text-red-500"></div>
                        </div>
                        <div class="mb-4">
                            <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="fullname" id="fullname"
                                class="mt-1 p-2 block w-full border rounded-md" required>
                            <div id="fullnameError" class="text-red-500"></div>
                        </div>
                        <div class="mb-4">
                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number</label>
                            <input type="tel" name="contact" id="contact"
                                class="mt-1 p-2 block w-full border rounded-md" required>
                            <div id="contactError" class="text-red-500"></div>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" name="address" id="address"
                                class="mt-1 p-2 block w-full border rounded-md" required>
                            <div id="addressError" class="text-red-500"></div>
                        </div>
                        <div class="mb-4">
                            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="mt-1 p-2 block w-full border rounded-md"
                                required>
                            <div id="dobError" class="text-red-500"></div>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="signupBtn"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>