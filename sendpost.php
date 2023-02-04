<?php

if (isset($_POST['submit'])) {
  // Condition 
    $email = $_POST['username'];
    $username = $_POST['post_id'];
    $password = $_POST['comment'];

    $insert = $conn->prepare("INSERT INTO comments (username, post_id, comment) 
        VALUES (:username, :post_id, :comment)");

    $insert->execute([
        ':username' => $username,
        ':post_id' => $post_id,
        ':comment' => $comment,
    ]);
}


?>