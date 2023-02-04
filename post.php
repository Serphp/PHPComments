<?php require "includes/header.php"; ?>
<?php require "db/config.php"; ?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $comments = $conn->query("SELECT * FROM new WHERE id = $id");
        $comments->execute();
        $post = $comments->fetch(PDO::FETCH_OBJ);
    }
?>

<main class="container w-50 m-auto mt-3">

    <body>
        <div class="card">
            <div class="card-body">

                <h2 class="card-title"><?php echo $post->title; ?></h2>
                <p class="card-text"><?php echo $post->description; ?></p>

            </div>
        </div>
    </body>

</main>
<?php require "includes/footer.php"; ?>