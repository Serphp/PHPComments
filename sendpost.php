<?php
if (isset($_SESSION['username'])) {

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
  //header("location: index.php", false);
}


if (isset($_POST['submit'])) {
  // Condition 
    $email = $_POST['username'];
    $username = $_POST['post_id'];
    $password = $_POST['comment'];

    $insert = $conn->prepare("INSERT INTO comments (username, post_id, comment) 
        VALUES (:username, :post_id, :comment)");

    $insert->execute([
        ':email' => $username,
        ':username' => $post_id,
        ':mypassword' => $comment,
    ]);
}


?>