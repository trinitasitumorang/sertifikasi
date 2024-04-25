<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_username_sql = "SELECT * FROM user WHERE username='$username'";
    $check_username_result = $db->query($check_username_sql);

    if ($check_username_result === false) {
        echo "Error: " . $check_username_sql . "<br>" . $db->error;
    } else {
        if ($check_username_result->num_rows > 0) {
            echo "Username sudah ada. Silakan coba dengan username lain.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";

            if ($db->query($insert_sql) === TRUE) {
                echo "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
            } else {
                echo "Error: " . $insert_sql . "<br>" . $db->error;
            }
        }
    }
}
?>
