<?php

    include_once(__DIR__ . "/layout/layout.php");

?>

<body class="h-screen flex flex-col justify-center items-center">
    <form class="flex flex-col" action="/walkies/src/handlers/LoginUser.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button class="my-5 type="submit">Login</button>
    </form>
    <div class="flex my-5">
        <p>Don't have an account? 
            <span>
                <a href="/walkies/src/public/register.php">Register</a>
            </span>
        </p>
    </div>
</body>
</html>