<?php 
$errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    if (empty($name)) {
        $errors = 'Please provide your name!';
    } elseif (empty($password)) {
        $errors = 'Please provide your password!';
    }

    if ( strlen( $password ) < 4 ) {
        $errors = "Please at least 4 characters password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Echo Statement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Welcome Back</h2>
        <form method="post" class="space-y-4">
            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Enter your name" 
                    class="mt-1 block w-full py-2 px-3 border border-slate-100 outline-none rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Enter your password" 
                    class="mt-1 block w-full py-2 px-3 border border-slate-100 outline-none rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
            </div>

            <!-- Submit Button -->
            <div>
                <input 
                    type="submit" 
                    value="Submit" 
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-500 transition-all duration-100 cursor-pointer"
                >
            </div>
        </form>

        <!-- Display Errors or Success Message -->
        <?php if (!empty($errors)): ?> <!-- if errors -->
            <div class="mt-4 p-4 bg-red-100 text-red-600 rounded-md">
                <?= $errors ?>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="mt-4 p-4 bg-green-100 text-green-600 rounded-md">
                <?= "My Name is: <strong>{$name}</strong> <br>Password is: <strong>{$password}</strong>" ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>
