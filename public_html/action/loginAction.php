<?php
session_start();
$pdo = new PDO('mysql:host=movelect.com;dbname=movelect', 'movelect', 'K;G8;nSCKz\fljZV');

if(isset($_GET['submit'])){
    $email = addslashes(htmlspecialchars($_POST["email"]));
    $password = addslashes(htmlspecialchars($_POST["password"]));

    $statement = $pdo->prepare("SELECT * FROM mydb.user WHERE user.email = .$email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
//checks password
    if ($user !== false && password_verify($password, $user['pass'])) {
        $_SESSION['username'] = $user['name'];
        die('Login successfull. Continue to <a href="../home-logged-in.php">movelect</a>');
    } else {
        echo "Invalid E-Mail or Password!";
        exit;
    }

}
