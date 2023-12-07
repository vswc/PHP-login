<?php

class User extends Database {

    public function Register($fname, $lname, $username, $password) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $existingUser = $result->fetch_assoc();

        if ($existingUser) {
            echo("Username already exists");
        } else {
            $stmt = $conn->prepare(
                "INSERT INTO users 
                (fname, lname, username, password) 
                VALUES (?, ?, ?, ?)"
            );
            $stmt->bind_param("ssss", $fname, $lname, $username, $password);
            $stmt->execute();
            var_dump($stmt);
        }
    }

    public function Login($username, $password) {
        $conn = $this->connect();
        $stmt = $conn->prepare(
            "SELECT * FROM users 
            WHERE username = ?"
        );
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'username'=> $user['username'],
                'firstname'=> $user['fname'],
                'lastname'=> $user['lname'],
            ];
            return $user;
        } else {
            return null;
        }
    }
}

?>