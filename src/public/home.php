<?php

    include_once(__DIR__ . "/layout/layout.php");

    if (!(isset($_SESSION["user"]))) {
        header("Location: /walkies/src/public/login.php");
        exit();
    }

?>

<body class="overflow-y-hidden font-sans bg-gray-100">
    <!-- Header -->
    <header class="bg-gray-800 text-white p-4 text-center">
        <h1 class="text-2xl font-semibold">Pet Walkies</h1>
    </header>

    <!-- Sidebar -->
    <nav class="bg-gray-700 text-white w-48 min-h-screen p-4">
        <ul>
            <li class="mb-2 block px-4 py-2 rounded font-semibold">Jake Mackie</li>
            <li class="mb-2"><button type="/walkies/src/handlers/LogoutUser.php" class="block px-4 py-2 rounded bg-gray-600 hover:bg-gray-500">Sign Out</button></li>

        </ul>
    </nav>
</body>
</html>