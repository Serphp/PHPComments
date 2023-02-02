<?php require "includes/header.php"; ?>
<?php require "db/config.php"; ?>

<?php
// "hello " . $_SESSION['username'];
    $comments = $conn->query("SELECT * FROM new");
    $comments->execute();
    $rows = $comments->fetchAll(PDO::FETCH_OBJ);
?>

<main class="container w-50 m-auto mt-3">
    <section class="container mb-5">

    <div class="card">
        <div class="card-content">
            <h2> Frases </h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <a href="index-two.php"> Frases</a>
        </div>
    </div>
</main>
<?php require "includes/footer.php"; ?>