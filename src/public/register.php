<?php

    include_once(__DIR__ . "/layout/layout.php");

?>

<body class="h-screen flex flex-col justify-center items-center">
    <form class="flex flex-col" action="/walkies/src/handlers/RegisterUser.php" method="POST">
        <input required type="text" name="fname" placeholder="First Name">
        <input required type="text" name="lname" placeholder="Last Name">
        <input required type="text" name="username" placeholder="Username">
        <input required type="password" name="password" placeholder="Password">
        <input required type="password" name="confirm" placeholder="Confirm Password">
        <button class="my-5 type="submit">Register</button>
    </form>
    <div class="flex my-5">
        <p>Already have an account? 
            <span>
                <a href="/walkies/src/public/login.php">Login</a>
            </span>
        </p>
    </div>
</body>
</html>